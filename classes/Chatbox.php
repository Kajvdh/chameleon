<?php
/*
  Copyright (C) 2015  Kaj Van der Hallen

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License along
  with this program; if not, write to the Free Software Foundation, Inc.,
  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

/**
 * Class: Chatbox
 *
 * Deze klasse bevat de instellingen met betrekking tot de chatbox
 *
 * @author Kaj Van der Hallen
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
class Chatbox {
    private $_db;
    private $_dBase;
    private $_table;
    public $LightIRC;
    public $Radio;

    private $_id;
    private $_owner;
    private $_name;
    private $_calls;
    private $_lastcalled;
    private $_bgcolor;
    private $_style;
    private $_iconStyle;
    private $_height;
    private $_lightIRCId;
    private $_adsEnabled;

    public function __construct($db) {
        $this->_dBase = $db;
        $this->_db = $db['db'];
        $this->_table = $db['prefix']."chat";
        $this->LightIRC = new LightIRC($db);
        $this->Radio = new Radio();
        $this->setHeight("100");
    }
    public function getId() {
        return $this->_id;
    }
    public function setId($id) {
        $this->_id = $id;
    }
    public function getLightIRCId() {
        return $this->_lightIRCId;
    }
    public function setLightIRCId($lightIRCId) {
        $this->_lightIRCId = $lightIRCId;
    }
    public function getBgcolor() {
        return $this->_bgcolor;
    }
    public function setBgcolor($color) {
        $this->_bgcolor = $color;
    }
    public function getHeight() {
        return $this->_height;
    }
    public function setHeight($height) {
        $this->_height = $height;
    }
    public function setName($name) {
        $this->_name = $name;
        $this->LightIRC->setAutojoin($name);
    }
    public function setCalls($calls) {
        $this->_calls = $calls;
    }
    public function getName() {
        return $this->_name;
    }
    public function getCalls() {
        return $this->_calls;
    }
    public function setOwner($owner) {
        $this->_owner = $owner;
    }
    public function getOwner() {
        return $this->_owner;
    }
    public function setLastCalled($lastcalled) {
        $this->_lastcalled = $lastcalled;
    }
    public function getLastCalled() {
        return $this->_lastcalled;
    }
    public function setAdsEnabled($adsEnabled) {
        $this->_adsEnabled = $adsEnabled;
    }
    public function getAdsEnabled() {
        return $this->_adsEnabled;
    }

    public function readForm($form) {
        //Chatnaam
        if (isset($form['chat_name'])) {
            $this->setName(str_replace('#', '', $form['chat_name']));
        }
        //Chatstijl
        if (isset($form['chat_style'])) {
            $this->setStyle($form['chat_style']);
        }
        //Iconstijl
        if (isset($form['icon_style'])) {
            $this->setIconStyle($form['icon_style']);
        }
        //Moeten icoontjes als nick prefix in de chat gebruikt worden?
        if (isset($form['icon_prefix'])) {
            $this->LightIRC->setShowNickprefixIcons("true");
        }
        else {
            $this->LightIRC->setShowNickprefixIcons("false");
        }
        //Moet er een timestamp getoond worden?
        if (isset($form['timestamp'])) {
            $this->LightIRC->setShowTimestamps("true");
        }
        else {
            $this->LightIRC->setShowTimestamps("false");
        }
        //Webcam instellingen
        $webcam_audio = false;
        $webcam_video = false;
        $webcam_prive = false;
        if (isset($form['webcam_video'])) {
            $webcam_video = $form['webcam_video'];
        }
        if (isset($form['webcam_audio'])) {
            $webcam_audio = $form['webcam_audio'];
        }
        if (isset($form['webcam_prive'])) {
            $webcam_prive = $form['webcam_prive'];
        }
        if (($webcam_audio) || ($webcam_video)) {
            $this->enableWebcam();
            if (!$webcam_audio) {
                $this->webcamEnableVideoOnly();
            }
            else {
                $this->webcamDisableVideoOnly();
            }
            if (!$webcam_video) {
                $this->webcamEnableAudioOnly();
            }
            else {
                $this->webcamDisableAudioOnly();
            }
        }
        else {
            $this->disableWebcam();
        }
        if ($webcam_prive) {
            $this->LightIRC->setWebcamPublicOnly("false");
        }
        else {
            $this->LightIRC->setWebcamPublicOnly("true");
        }
        //Privegesprekken?
        if (isset($form['chat_prive'])) {
            $this->enableQueries();
        }
        else {
            $this->disableQueries();
        }
        //Server window
        if (isset($form['serverwindow'])) {
            $this->LightIRC->setShowServerWindow("true");
        }
        else {
            $this->LightIRC->setShowServerWindow("false");
        }
        //Kanaallijst button
        if (isset($form['channellist'])) {
            $this->LightIRC->setShowListButton("true");
        }
        else {
            $this->LightIRC->setShowListButton("false");
        }
        //Tekst vetgedrukt en onderlijnd toelaten
        if (isset($form['textstyling'])) {
            $this->LightIRC->setShowRichTextControlsForegroundColor("true");
            $this->LightIRC->setShowRichTextControlsBackgroundColor("true");
            $this->LightIRC->setShowRichTextControls("true");
        }
        else {
            $this->LightIRC->setShowRichTextControlsForegroundColor("false");
            $this->LightIRC->setShowRichTextControlsBackgroundColor("false");
            $this->LightIRC->setShowRichTextControls("false");
        }
        //Hostmask bij joins, parts, quits
        if (isset($form['verboseinformation'])) {
            $this->LightIRC->setShowVerboseUserInformation("true");
        }
        else {
            $this->LightIRC->setShowVerboseUserInformation("false");
        }
        //Radioplayer instellingen
        if (isset($form['radio_enabled'])) {
            $this->setRadioEnabled("true");
        }
        else {
            $this->setRadioEnabled("false");
        }
        //Radio naam
        if (isset($form['chat_name'])) {
            $this->setRadioName($form['radio_name']);
        }
        else {
            $this->setRadioName(null);
        }
        //Radio type
        if (isset($form['radio_type'])) {
            $this->setRadioStreamType($form['radio_type']);
        }
        //Radio link
        if (isset($form['radio_link'])) {
            $this->setRadioStreamLink($form['radio_link']);
        }
        //Radio player type
        if (isset($form['radio_style'])) {
            $this->setRadioStyle($form['radio_style']);
        }
        //Advertenties
        if (isset($form['ads_enabled'])) {
            $this->setAdsEnabled($form['ads_enabled']);
        } else {
            $this->setAdsEnabled(false);
        }
    }

    public function save() {
        $this->LightIRC->save();
        $this->setLightIRCId($this->LightIRC->getId());
        $qry = $this->_db->prepare("INSERT INTO ".$this->_table."(lirc_id,createdby,createrip,created,lastcalled,calls,name,height,bgcolor,style,iconstyle,radio_enabled,radio_name,radio_streamtype,radio_link,radio_type,ads_enabled) VALUES(:lirc_id,:createdby,:createrip,NOW(),NOW(),:calls,:name,:height,:bgcolor,:style,:iconstyle,:radio_enabled,:radio_name,:radio_streamtype,:radio_link,:radio_type,:ads_enabled);");
        $data = array(
            ':lirc_id' => $this->getLightIRCId(),
            ':createdby' => $this->getOwner(),
            ':createrip' => $_SERVER['REMOTE_ADDR'],
            ':calls' => 0,
            ':name' => $this->getName(),
            ':height' => $this->getHeight(),
            ':bgcolor' => $this->getBgcolor(),
            ':style' => $this->_style,
            ':iconstyle' => $this->_iconStyle,
            ':radio_enabled' => $this->Radio->getEnabled(),
            ':radio_name' => $this->Radio->getName(),
            ':radio_streamtype' => $this->Radio->getStreamType(),
            ':radio_link' => $this->Radio->getStreamLink(),
            ':radio_type' => $this->Radio->getPlayer(),
            ':ads_enabled' => $this->getAdsEnabled()
        );

        $qry->execute($data);
        if ($qry->rowCount() > '0') {
            $this->setId($this->_db->lastInsertId());
            return true;
        }
        else {
            return false;
        }
    }

    public function update() {
        $this->LightIRC->update();

        $qry = $this->_db->prepare("UPDATE ".$this->_table." SET lirc_id=:lirc_id,createdby=:createdby,createrip=:createrip,created=NOW(),lastcalled=NOW(),calls=:calls,name=:name,height=:height,bgcolor=:bgcolor,style=:style,iconstyle=:iconstyle,radio_enabled=:radio_enabled,radio_name=:radio_name,radio_streamtype=:radio_streamtype,radio_link=:radio_link,radio_type=:radio_type,ads_enabled=:ads_enabled WHERE id=:id;");
        $data = array(
            ':lirc_id' => $this->getLightIRCId(),
            ':createdby' => $this->getOwner(),
            ':createrip' => $_SERVER['REMOTE_ADDR'],
            ':calls' => $this->getCalls(),
            ':name' => $this->getName(),
            ':height' => $this->getHeight(),
            ':bgcolor' => $this->getBgcolor(),
            ':style' => $this->_style,
            ':iconstyle' => $this->_iconStyle,
            ':radio_enabled' => $this->Radio->getEnabled(),
            ':radio_name' => $this->Radio->getName(),
            ':radio_streamtype' => $this->Radio->getStreamType(),
            ':radio_link' => $this->Radio->getStreamLink(),
            ':radio_type' => $this->Radio->getPlayer(),
            ':id' => $this->_id,
            ':ads_enabled' => $this->getAdsEnabled()
        );

        $qry->execute($data);
        if ($qry->rowCount() > '0') {
            return true;
        }
        else {
            return false;
        }
    }

    public function transfer() {
        $qry = $this->_db->prepare("UPDATE ".$this->_table." SET createdby=:createdby WHERE id=:id;");
        $data = array(':createdby' => $this->getOwner(),':id' => $this->_id);
        $qry->execute($data);
        if ($qry->rowCount() > '0') {
            return true;
        }
        else {
            return false;
        }
    }

    public function disable() {
        $this->LightIRC->disable();
        $qry = $this->_db->prepare("UPDATE ".$this->_table." SET obsolete=:obsolete WHERE id=:id;");
        $data = array(':obsolete' => 1,':id' => $this->_id);
        $qry->execute($data);
        if ($qry->rowCount() > '0') {
            return true;
        }
        else {
            return false;
        }
    }
    public function getById($id) {
        $this->setId($id);
        $stmp = $this->_db->prepare("SELECT * FROM `".$this->_table."` WHERE `id`= ? AND obsolete='0';");
        $stmp->execute(array($this->getId()));
        if ($stmp->rowCount() > '0') {
            $row = $stmp->fetch(PDO::FETCH_ASSOC);
            $this->setId($row['id']);
            $this->setOwner($row['createdby']);
            $this->setCalls($row['calls']);
            $this->setLastCalled($row['lastcalled']);
            $this->setLightIRCId($row['lirc_id']);
            $this->setName($row['name']);
            $this->setHeight($row['height']);
            $this->setBgcolor($row['bgcolor']);
            $this->_style = $row['style'];
            $this->_iconStyle = $row['iconstyle'];
            $this->Radio->setEnabled($row['radio_enabled']);
            $this->Radio->setName($row['radio_name']);
            $this->Radio->setStreamType($row['radio_streamtype']);
            $this->Radio->setStreamLink($row['radio_link']);
            $this->Radio->setPlayer($row['radio_type']);
            $this->LightIRC->getById($this->getLightIRCId());
            $this->setAdsEnabled($row['ads_enabled']);
            return true;
        }
        else {
            return false;
        }
    }

    public function setCall() {
        $qry = $this->_db->prepare("UPDATE `".$this->_table."` SET `lastcalled`=NOW(),`calls`=(calls+1) WHERE `id`=?");
        $qry->execute(array($this->getId()));

        if ($qry->rowCount() > '0') {
            return true;
        }
        else {
            return false;
        }
    }



    public function setStyle($style) {
        switch($style) {
            case 'blue':
                $this->LightIRC->setStyleURL('css/blue.css');
                $this->_style = 'blue';
                $this->setBgcolor("#274962");
                break;
            case 'black':
                $this->LightIRC->setStyleURL('css/black.css');
                $this->_style = 'black';
                $this->setBgcolor("#000000");
                break;
            case 'darkorange':
                $this->LightIRC->setStyleURL('css/darkorange.css');
                $this->_style = 'darkorange';
                $this->setBgcolor("#666666");
                break;
            case 'green':
                $this->LightIRC->setStyleURL('css/green.css');
                $this->_style = 'green';
                $this->setBgcolor("#86b459");
                break;
            case 'lightblue':
                $this->LightIRC->setStyleURL('css/lightblue.css');
                $this->_style = 'lightblue';
                $this->setBgcolor("#b2c7d3");
                break;
            case 'yellow':
                $this->LightIRC->setStyleURL('css/yellow.css');
                $this->_style ='yellow';
                $this->setBgcolor("#ffc200");
                break;
            case 'pink':
                $this->LightIRC->setStyleURL('css/pink.css');
                $this->_style ='pink';
                $this->setBgcolor("#CC0066");
                break;
            case 'orange':
                $this->LightIRC->setStyleURL('css/orange.css');
                $this->_style ='orange';
                $this->setBgcolor("#ff6600");
                break;
            case 'skyblue':
                $this->LightIRC->setStyleURL('css/skyblue.css');
                $this->_style ='skyblue';
                $this->setBgcolor("#0095B6");
                break;
        }
    }
    public function getStyle() {
        return $this->_style;
    }

    public function setIconStyle($style) {
        switch($style) {
            case 'bolletje':
                $this->LightIRC->setIconPath("icons/bolletje/");
                $this->_iconStyle = "bolletje";
                $this->LightIRC->setUseUserListIcons("true");
                break;
            case 'ster':
                $this->LightIRC->setIconPath("icons/ster/");
                $this->_iconStyle = "ster";
                $this->LightIRC->setUseUserListIcons("true");
                break;
            case 'kroon':
                $this->LightIRC->setIconPath("icons/kroon/");
                $this->_iconStyle = "kroon";
                $this->LightIRC->setUseUserListIcons("true");
                break;
            case 'dj':
                $this->LightIRC->setIconPath("icons/dj/");
                $this->_iconStyle = "dj";
                $this->LightIRC->setUseUserListIcons("true");
                break;
            case 'none':
                $this->LightIRC->setIconPath("icons/bolletje/");
                $this->_iconStyle = "none";
                $this->LightIRC->setUseUserListIcons("false");
                break;
        }
    }

    public function getIconStyle() {
        return $this->_iconStyle;
    }

    public function disableQueries() {
        $this->LightIRC->setPerform('/umode2 +D');
        $this->LightIRC->setEnableQueries('false');
    }
    public function enableQueries() {
        $this->LightIRC->setPerform("");
        $this->LightIRC->setEnableQueries("true");
    }

    public function enableWebcam() {
        $this->LightIRC->setWebcam('true');
    }
    public function disableWebcam() {
        $this->LightIRC->setWebcam('false');
    }
    public function webcamEnableVideoOnly() {
        $this->LightIRC->setWebcamVideoOnly('true');
    }
    public function webcamDisableVideoOnly() {
        $this->LightIRC->setWebcamVideoOnly('false');
    }
    public function webcamEnableAudioOnly() {
        $this->LightIRC->setWebcamAudioOnly('true');
    }
    public function webcamDisableAudioOnly() {
        $this->LightIRC->setWebcamAudioOnly('false');
    }

    public function setRadioEnabled($radioEnabled) {
        if ($radioEnabled == "true") {
            $this->setHeight("90");
        }
        else {
            $this->setHeight("100");
        }
        $this->Radio->setEnabled($radioEnabled);
    }
    public function setRadioName($radioName) {
        $this->Radio->setName($radioName);
    }
    public function setRadioStreamType($radioStreamType) {
        $this->Radio->setStreamType($radioStreamType);
    }
    public function setRadioStreamLink($radioStreamLink) {
        $this->Radio->setStreamLink($radioStreamLink);
    }
    public function setRadioStyle($radiotype) {
        $this->Radio->setPlayer($radiotype);
    }

    public function getMetadata() {
        $data = array();
        $data['name'] = $this->getName();
        $data['height'] = $this->getHeight();
        $data['bgcolor'] = $this->getBgcolor();

        $data['radio'] = $this->Radio->getEnabled();
        $data['radio_type'] = $this->Radio->getStreamType();
        $data['radio_name'] = $this->Radio->getName();
        $data['radio_link'] = $this->Radio->getStreamLink();
        $data['radio_player'] = $this->Radio->getPlayer();
        $data['ads_enabled'] = $this->getAdsEnabled();
        return $data;
    }

    public function printConfig() {
        $this->LightIRC->printConfig();
    }

}
