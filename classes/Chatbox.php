<?php
/*
  Copyright (C) 2020  Kaj Van der Hallen; Edited by Stanley Kulik (DjSxX)

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
 * @edit Stanley Kulik (DjSxX)
 */


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
	private $_bgurl;
    private $_style;
    private $_iconStyle;
    private $_height;
    private $_lightIRCId;
    private $_adsEnabled;
	private $_verzoekurl;
	private $_playerkleur;
	private $_tekstkleur;
	private $_mountpoint;
	private $_kiwiavatar;
	private $_kiwiupload;
	private $_kiwigiphy;
	private $_kiwiimgur;
	private $_kiwiasl;
	private $_htmlredirect;
	private $_showstats;
	private $_html5color;
	private $_transparantie;
	private $_omswitch;
	private $_embedly;
	private $_volslide;
	private $_conflink;
	private $_viewheight;
	private $_tags;

    public function __construct($db) {
        $this->_dBase = $db;
        $this->_db = $db['db'];
        $this->_table = $db['prefix']."chat";
        $this->LightIRC = new LightIRC($db);
        $this->Radio = new Radio();
        $this->setHeight("90");
    }
    public function getId() {
        return $this->_id;
    }
    public function setId($id) {
        $this->_id = $id;
    }
	public function getTags() {
        return $this->_tags;
    }
    public function setTags($tags) {
        $this->_tags = $tags;
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
	public function setTransparantie($transparantie) {
        $this->_transparantie = $transparantie;
    }
	public function getTransparantie() {
        return $this->_transparantie;
    }
	public function setViewheight($viewheight) {
        $this->_viewheight = $viewheight;
    }
	public function getViewheight() {
        return $this->_viewheight;
    }
	public function setOmswitch($omswitch) {
        $this->_omswitch = $omswitch;
    }
	public function getOmswitch() {
        return $this->_omswitch;
    }
	public function setEmbedly($embedly) {
        $this->_embedly = $embedly;
    }
	public function getEmbedly() {
        return $this->_embedly;
    }
	public function setVolslide($volslide) {
        $this->_volslide = $volslide;
    }
	public function getVolslide() {
        return $this->_volslide;
    }
	public function setConflink($conflink) {
        $this->_conflink = $conflink;
    }
	public function getConflink() {
        return $this->_conflink;
    }
	public function getBgurl() {
        return $this->_bgurl;
    }
    public function setBgurl($bgurl) {
        $this->_bgurl = $bgurl;
    }
	public function getHTML5color() {
        return $this->_html5color;
    }
	public function setHTML5color($html5color) {
        $this->_html5color = $html5color;
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
	public function getVerzoekurl() {
        return $this->_verzoekurl;
    }
	public function getPlayerkleur() {
        return $this->_playerkleur;
    }
	public function getTekstkleur() {
        return $this->_tekstkleur;
    }
	public function getKiwiAvatar() {
        return $this->_kiwiavatar;
    }
	public function getKiwiUpload() {
        return $this->_kiwiupload;
    }
	public function getKiwiGiphy() {
        return $this->_kiwigiphy;
    }
	public function getKiwiImgur() {
        return $this->_kiwiimgur;
    }
	public function getKiwiASL() {
        return $this->_kiwiasl;
    }
	public function getHTMLRedirect() {
        return $this->_htmlredirect;
    }
	public function setMountpoint($mountpoint) {
        $this->_mountpoint = $mountpoint;
    }
	public function getMountpoint() {
        return $this->_mountpoint;
    }
	public function setVerzoekurl($verzoekurl) {
        $this->_verzoekurl = $verzoekurl;
    }
	public function setPlayerkleur($playerkleur) {
        $this->_playerkleur = $playerkleur;
    }
	public function setTekstkleur($tekstkleur) {
        $this->_tekstkleur = $tekstkleur;
    }
	public function setKiwiAvatar($kiwiavatar) {
        $this->_kiwiavatar = $kiwiavatar;
    }
	public function setKiwiUpload($kiwiupload) {
        $this->_kiwiupload = $kiwiupload;
    }
	public function setKiwiGiphy($kiwigiphy) {
        $this->_kiwigiphy = $kiwigiphy;
    }
	public function setKiwiImgur($kiwiimgur) {
        $this->_kiwiimgur = $kiwiimgur;
    }
	public function setKiwiASL($kiwiasl) {
        $this->_kiwiasl = $kiwiasl;
    }
	public function setHTMLRedirect($htmlredirect) {
        $this->_htmlredirect = $htmlredirect;
    }
	public function getShowStats() {
        return $this->_showstats;
    }
    public function setShowStats($showstats) {
        $this->_showstats = $showstats;
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
		// html5 kleur
		if (isset($form['html5color'])) {
            $this->setHTML5color($form['html5color']);
        }
		// volume slider
		if (isset($form['volslide'])) {
            $this->setVolslide($form['volslide']);
        }
		// View Height
		if (isset($form['viewheight'])) {
            $this->setViewheight($form['viewheight']);
        }
		// omswitch
		if (isset($form['omswitch'])) {
            $this->setOmswitch($form['omswitch']);
        } else {
            $this->setOmswitch(false);
        }
		// tags
		if (isset($form['tags'])) {
            $this->setTags($form['tags']);
        } else {
            $this->setTags(false);
        }
		// conflink
		if (isset($form['conflink'])) {
            $this->setConflink($form['conflink']);
        } else {
            $this->setConflink(false);
        }
		// Embedly
		if (isset($form['embedly'])) {
            $this->setEmbedly($form['embedly']);
        } else {
            $this->setEmbedly(false);
        }
		// html5 bg transparantie
		if (isset($form['transparantie'])) {
            $this->setTransparantie($form['transparantie']);
        }
		//Chatstijl
        if (isset($form['chat_bgurl'])) {
            $this->setBgurl($form['chat_bgurl']);
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
		// statslink instellingen
		if (isset($form['showstats'])) {
            $this->setShowStats("true");
        }
        else {
            $this->setShowStats("false");
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
		//verzoek link
        if (isset($form['verzoek_url'])) {
            $this->setVerzoekurl($form['verzoek_url']);
        }
        //Radio link
        if (isset($form['radio_link'])) {
            $this->setRadioStreamLink($form['radio_link']);
        }
        //Radio player type
        if (isset($form['radio_style'])) {
            $this->setRadioStyle($form['radio_style']);
        }
		//Radio player type
        if (isset($form['mountpoint'])) {
            $this->setMountpoint($form['mountpoint']);
        }
		//Radio player kleur
        if (isset($form['playerkleur'])) {
            $this->setPlayerkleur($form['playerkleur']);
        }
		//Radio tekst kleur
        if (isset($form['tekstkleur'])) {
            $this->setTekstkleur($form['tekstkleur']);
        }
        //Advertenties
        if (isset($form['ads_enabled'])) {
            $this->setAdsEnabled($form['ads_enabled']);
        } else {
            $this->setAdsEnabled(false);
        }
		// Kiwi Avatar
		if (isset($form['kiwi_avatar'])) {
            $this->setKiwiAvatar($form['kiwi_avatar']);
        } else {
            $this->setKiwiAvatar(false);
        }
		// Kiwi Upload
		if (isset($form['kiwi_upload'])) {
            $this->setKiwiUpload($form['kiwi_upload']);
        } else {
            $this->setKiwiUpload(false);
        }
		// Kiwi Giphy
		if (isset($form['kiwi_giphy'])) {
            $this->setKiwiGiphy($form['kiwi_giphy']);
        } else {
            $this->setKiwiGiphy(false);
        }
		// Kiwi ImgUr
		if (isset($form['kiwi_imgur'])) {
            $this->setKiwiImgur($form['kiwi_imgur']);
        } else {
            $this->setKiwiImgur(false);
        }
		// Kiwi ASL
		if (isset($form['kiwi_asl'])) {
            $this->setKiwiASL($form['kiwi_asl']);
        } else {
            $this->setKiwiASL(false);
        }
		// HTML Redirect
		if (isset($form['html_redirect'])) {
            $this->setHTMLRedirect($form['html_redirect']);
        } else {
            $this->setHTMLRedirect(false);
        }
    }

    public function save() {
        $this->LightIRC->save();
        $this->setLightIRCId($this->LightIRC->getId());
        $qry = $this->_db->prepare("INSERT INTO ".$this->_table."(lirc_id,createdby,createrip,created,lastcalled,calls,name,height,bgcolor,bgurl,style,iconstyle,radio_enabled,radio_name,radio_streamtype,radio_link,verzoek_url,radio_type,mountpoint,playerkleur,tekstkleur,ads_enabled,kiwi_avatar,kiwi_upload,kiwi_giphy,kiwi_imgur,kiwi_asl,html_redirect,showstats,html5color,transparantie,omswitch,embedly,volslide,conflink,viewheight,tags) VALUES(:lirc_id,:createdby,:createrip,NOW(),NOW(),:calls,:name,:height,:bgcolor,:bgurl,:style,:iconstyle,:radio_enabled,:radio_name,:radio_streamtype,:radio_link,:verzoek_url,:radio_type,:mountpoint,:playerkleur,:tekstkleur,:ads_enabled,:kiwi_avatar,:kiwi_upload,:kiwi_giphy,:kiwi_imgur,:kiwi_asl,:html_redirect,:showstats,:html5color,:transparantie,:omswitch,:embedly,:volslide,:conflink,:viewheight,:tags);");
        $data = array(
            ':lirc_id' => $this->getLightIRCId(),
            ':createdby' => $this->getOwner(),
            ':createrip' => $_SERVER['REMOTE_ADDR'],
            ':calls' => 0,
            ':name' => $this->getName(),
            ':height' => $this->getHeight(),
            ':bgcolor' => $this->getBgcolor(),
			':bgurl' => $this->getBgurl(),
            ':style' => $this->_style,
            ':iconstyle' => $this->_iconStyle,
            ':radio_enabled' => $this->Radio->getEnabled(),
            ':radio_name' => $this->Radio->getName(),
            ':radio_streamtype' => $this->Radio->getStreamType(),
            ':radio_link' => $this->Radio->getStreamLink(),
			':verzoek_url' => $this->getVerzoekurl(),
            ':radio_type' => $this->Radio->getPlayer(),
			':mountpoint' => $this->getMountpoint(),
			':playerkleur' => $this->getPlayerkleur(),
			':tekstkleur' => $this->getTekstkleur(),
            ':ads_enabled' => $this->getAdsEnabled(),
			':kiwi_avatar' => $this->getKiwiAvatar(),
			':kiwi_upload' => $this->getKiwiUpload(),
			':kiwi_giphy' => $this->getKiwiGiphy(),
			':kiwi_imgur' => $this->getKiwiImgur(),
			':kiwi_asl' => $this->getKiwiASL(),
			':html_redirect' => $this->getHTMLRedirect(),
			':showstats' => $this->getShowStats(),
			':html5color' => $this->getHTML5color(),
			':transparantie' => $this->getTransparantie(),
			':omswitch' => $this->getOmswitch(),
			':embedly' => $this->getEmbedly(),
			':volslide' => $this->getVolslide(),
			':conflink' => $this->getConflink(),
			':viewheight' => $this->getViewheight(),
			':tags' => $this->getTags()
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

        $qry = $this->_db->prepare("UPDATE ".$this->_table." SET lirc_id=:lirc_id,createdby=:createdby,createrip=:createrip,created=NOW(),lastcalled=NOW(),calls=:calls,name=:name,height=:height,bgcolor=:bgcolor,bgurl=:bgurl,style=:style,iconstyle=:iconstyle,radio_enabled=:radio_enabled,radio_name=:radio_name,radio_streamtype=:radio_streamtype,radio_link=:radio_link,verzoek_url=:verzoek_url,radio_type=:radio_type,mountpoint=:mountpoint,playerkleur=:playerkleur,tekstkleur=:tekstkleur,ads_enabled=:ads_enabled,kiwi_avatar=:kiwi_avatar,kiwi_upload=:kiwi_upload,kiwi_giphy=:kiwi_giphy,kiwi_imgur=:kiwi_imgur,kiwi_asl=:kiwi_asl,html_redirect=:html_redirect,showstats=:showstats,html5color=:html5color,transparantie=:transparantie,omswitch=:omswitch,embedly=:embedly,volslide=:volslide,conflink=:conflink,viewheight=:viewheight,tags=:tags WHERE id=:id;");
        $data = array(
            ':lirc_id' => $this->getLightIRCId(),
            ':createdby' => $this->getOwner(),
            ':createrip' => $_SERVER['REMOTE_ADDR'],
            ':calls' => $this->getCalls(),
            ':name' => $this->getName(),
            ':height' => $this->getHeight(),
            ':bgcolor' => $this->getBgcolor(),
			':bgurl' => $this->getBgurl(),
            ':style' => $this->_style,
            ':iconstyle' => $this->_iconStyle,
            ':radio_enabled' => $this->Radio->getEnabled(),
            ':radio_name' => $this->Radio->getName(),
            ':radio_streamtype' => $this->Radio->getStreamType(),
            ':radio_link' => $this->Radio->getStreamLink(),
			':verzoek_url' => $this->getVerzoekurl(),
            ':radio_type' => $this->Radio->getPlayer(),
			':mountpoint' => $this->getMountpoint(),
			':playerkleur' => $this->getPlayerkleur(),
			':tekstkleur' => $this->getTekstkleur(),
            ':id' => $this->_id,
            ':ads_enabled' => $this->getAdsEnabled(),
			':kiwi_avatar' => $this->getKiwiAvatar(),
			':kiwi_upload' => $this->getKiwiUpload(),
			':kiwi_giphy' => $this->getKiwiGiphy(),
			':kiwi_imgur' => $this->getKiwiImgur(),
			':kiwi_asl' => $this->getKiwiASL(),
			':html_redirect' => $this->getHTMLRedirect(),
			':showstats' => $this->getShowStats(),
			':html5color' => $this->getHTML5color(),
			':transparantie' => $this->getTransparantie(),
			':omswitch' => $this->getOmswitch(),
			':embedly' => $this->getEmbedly(),
			':volslide' => $this->getVolslide(),
			':conflink' => $this->getConflink(),
			':viewheight' => $this->getViewheight(),
			':tags' => $this->getTags()
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
			$this->setBgurl($row['bgurl']);
            $this->_style = $row['style'];
            $this->_iconStyle = $row['iconstyle'];
            $this->Radio->setEnabled($row['radio_enabled']);
            $this->Radio->setName($row['radio_name']);
            $this->Radio->setStreamType($row['radio_streamtype']);
            $this->Radio->setStreamLink($row['radio_link']);
			$this->setVerzoekurl($row['verzoek_url']);
			$this->setPlayerkleur($row['playerkleur']);
			$this->setTekstkleur($row['tekstkleur']);
			$this->setMountpoint($row['mountpoint']);
            $this->Radio->setPlayer($row['radio_type']);
            $this->LightIRC->getById($this->getLightIRCId());
            $this->setAdsEnabled($row['ads_enabled']);
			$this->setKiwiAvatar($row['kiwi_avatar']);
			$this->setKiwiUpload($row['kiwi_upload']);
			$this->setKiwiGiphy($row['kiwi_giphy']);
			$this->setKiwiImgur($row['kiwi_imgur']);
			$this->setKiwiASL($row['kiwi_asl']);
			$this->setHTMLRedirect($row['html_redirect']);
			$this->setShowStats($row['showstats']);
			$this->setHTML5color($row['html5color']);
			$this->setTransparantie($row['transparantie']);
			$this->setOmswitch($row['omswitch']);
			$this->setEmbedly($row['embedly']);
			$this->setVolslide($row['volslide']);
			$this->setConflink($row['conflink']);
			$this->setViewheight($row['viewheight']);
			$this->setTags($row['tags']);
			
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
            case 'darkred':
                $this->LightIRC->setStyleURL('css/darkred.css');
                $this->_style ='darkred';
                $this->setBgcolor("#B40404");
                break;
			case 'nightswatch':
                $this->LightIRC->setStyleURL('css/black.css');
                $this->_style ='nightswatch';
                $this->setBgcolor("#000000");
                break;
			case 'html5color':
                $this->LightIRC->setStyleURL('css/blue.css');
                $this->_style ='html5color';
                $this->setBgcolor("#274962");
                break;
			case 'transparent':
                $this->LightIRC->setStyleURL('css/transparent.css');
                $this->_style ='transparent';
                $this->setBgcolor("rgba(0,0,0,0,0.8)");
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
			case 'pins':
                $this->LightIRC->setIconPath("icons/pins/");
                $this->_iconStyle = "pins";
                $this->LightIRC->setUseUserListIcons("true");
                break;
			case 'whatsapp':
                $this->LightIRC->setIconPath("icons/whatsapp/");
                $this->_iconStyle = "whatsapp";
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
            $this->setHeight("90");
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
		$data['style'] = $this->getStyle();
		$data['bgurl'] = $this->getBgurl();
		$data['private'] = $this->LightIRC->getEnableQueries();
		$data['icons'] = $this->getIconStyle();
		$data['prefixicons'] = $this->LightIRC->getShowNickprefixIcons();
		$data['hostnames'] = $this->LightIRC->getShowVerboseUserInformation();
        $data['radio'] = $this->Radio->getEnabled();
        $data['radio_type'] = $this->Radio->getStreamType();
        $data['radio_name'] = $this->Radio->getName();
        $data['radio_link'] = $this->Radio->getStreamLink();
		$data['verzoek_url'] = $this->getVerzoekurl();
		$data['playerkleur'] = $this->getPlayerkleur();
		$data['tekstkleur'] = $this->getTekstkleur();
		$data['mountpoint'] = $this->getMountpoint();
        $data['radio_player'] = $this->Radio->getPlayer();
        $data['ads_enabled'] = $this->getAdsEnabled();
		$data['kiwi_avatar'] = $this->getKiwiAvatar();
		$data['kiwi_upload'] = $this->getKiwiUpload();
		$data['kiwi_giphy'] = $this->getKiwiGiphy();
		$data['kiwi_imgur'] = $this->getKiwiImgur();
		$data['kiwi_asl'] = $this->getKiwiASL();
		$data['webcam'] = $this->LightIRC->getWebcam();
		$data['mic'] = $this->LightIRC->getWebcamVideoOnly();
		$data['time'] = $this->LightIRC->getShowTimestamps();
		$data['html_redirect'] = $this->getHTMLRedirect();
		$data['showstats'] = $this->getShowStats();
		$data['html5color'] = $this->getHTML5color();
		$data['transparantie'] = $this->getTransparantie();
		$data['omswitch'] = $this->getOmswitch();
		$data['embedly'] = $this->getEmbedly();
		$data['volslide'] = $this->getVolslide();
		$data['conflink'] = $this->getConflink();
		$data['viewheight'] = $this->getViewheight();
		$data['tags'] = $this->getTags();
        return $data;
    }

    public function printConfig() {
        $this->LightIRC->printConfig();
    }
	public function printKiwiConfig() {
        $this->LightIRC->printKiwiConfig();
    }

}
