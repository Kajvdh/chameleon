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
require("includes.php");
$database = new Database($config, "anope");
$aDb = $database->getConnection();
$database = new Database($config);
$db = $database->getConnection();
$smarty->assign('fullurl', $config->getFullUrl());
$smarty->assign('logo', $config->getLogo());
$smarty->assign('irc', $config->getIRC());
$smarty->assign('sitename', $config->getSiteName());
$smarty->assign('gateway', $config->getGateway());
$smarty->assign('file', $config->getFile());
$login = new Login();
$id = $login->getSession();
$smarty->assign('page','list');//default

if ($id) {
    $member = new Member($aDb);
    $member->getById($id);

    $isGodUser = $member->isGodUser();
    if ($isGodUser) {
        $smarty->assign('god', "true");
		$smarty->assign('registeredname', 'Stanley Kulik');
		$smarty->assign('nextduedate', 'Niet');
		$smarty->assign('productname', 'Chameleon');
    }

    $smarty->assign('login',$member->getUsername());
	// $smarty->assign('loggedin', "true");

    $page = 'list';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }


    if ($page == "transfer") {
        if (isset($_POST['username'])) {
            $cId = $_POST['chat_id'];
            $chat = new Chatbox($db);
            if ($chat->getById($cId)) {
                if (($chat->getOwner() == $id) || ($isGodUser)) {
                    $newowner = new Member($aDb);
                    if ($newowner->getByUsername($_POST['username'])) {
                        $chat->setOwner($newowner->getId());
                        if($chat->transfer()) {
                            $smarty->assign('info',"Je chatbox is succesvol overgedragen aan: <strong>".$newowner->getUsername()."</strong>!");
                        }
                        else {
                            $smarty->assign('error',"Er is wat misgelopen.");
                        }
                    }
                    else {
                        $smarty->assign('error',"De gebruiker aan wie je je chatbox wil overdragen bestaat niet.");
                    }
                }
                else {
                    $smarty->assign('error',"Er is wat misgelopen.");
                }
            }
            else {
                $smarty->assign('error',"Er is wat misgelopen.");
            }
        }
        else {
            if (isset($_GET['id'])) {
                $cId = $_GET['id'];
                $chat = new Chatbox($db);
                if ($chat->getById($cId)) {
                    if (($chat->getOwner() == $id) || ($isGodUser)) {
                        $smarty->assign('chat_id',$cId);
                        $smarty->assign('page',"transfer");
                    }
                    else {
                        $smarty->assign('error',"Er is wat misgelopen.");
                    }
                }
                else {
                    $smarty->assign('error',"Er is wat misgelopen.");
                }
            }
        }
    }
    elseif ($page == "del") {
        if (isset($_POST['chat_id'])) {
            $cId = $_POST['chat_id'];

            $chat = new Chatbox($db);
            if ($chat->getById($cId)) {

                if (($chat->getOwner() == $id) || ($isGodUser)) {

                    if ($chat->disable()) {
                        $smarty->assign('success',"Je chatbox is verwijderd.");
                    }
                    else {
                        $smarty->assign('error',"Er is wat misgelopen.");
                    }
                }
                else {
                    $smarty->assign('error',"Er is wat misgelopen.");
                }
            }
            else {
                $smarty->assign('error',"Er is wat misgelopen.");
            }
        }
        elseif (isset($_GET['id'])) {
            $cId = $_GET['id'];

            $chat = new Chatbox($db);
            if ($chat->getById($cId)) {

                if (($chat->getOwner() == $id) || ($isGodUser)) {

                    $smarty->assign('chat_id', $cId);
                    $smarty->assign('chat_name', $chat->getName());

                    $member = new Member($aDb);
                    if (($member->getById($chat->getOwner())) || ($isGodUser)) {
                        $smarty->assign('chat_owner', $member->getUsername());
                        $smarty->assign('page', "del");
                    }
                    else {
                        $smarty->assign('error',"Er is wat misgelopen.");
                    }
                }
                else {
                    $smarty->assign('error',"Er is wat misgelopen.");
                }
            }
            else {
                $smarty->assign('error',"Er is wat misgelopen.");
            }
        }
    }
    elseif ($page == "edit") {
        if (isset($_POST['chat_id'])) {
            $cId = $_POST['chat_id'];
            $chat = new Chatbox($db);
            if ($chat->getById($cId)) {
                if (($chat->getOwner() == $id) || ($isGodUser)) {
                    $chat->readForm($_POST);
                    $chat->update();
                    $smarty->assign('success',"Je chatbox is opgeslagen!");
                    $smarty->assign('page',"list");
                }
                else {
                    $smarty->assign('error',"Er is wat misgelopen.");
                }
            }
            else {
                $smarty->assign('error',"Er is wat misgelopen.");
            }
        }
        elseif (isset($_GET['id'])) {
            $cId = $_GET['id'];
            $chat = new Chatbox($db);
            if ($chat->getById($cId)) {
                if (($chat->getOwner() == $id) || ($isGodUser)) {
                    $smarty->assign('chat_id',$cId);
                    //Chatname
                    $chat_name = $chat->getName();
                    if($chat_name) {
                        $smarty->assign('chat_name',$chat_name);
                    }
                    //Chatstyle
                    $chat_style = $chat->getStyle();
                    if ($chat_style) {
                        $smarty->assign('chat_style',$chat_style);
                    }
					//Chatstyle
                    $chat_bgurl = $chat->getBgurl();
                    if ($chat_bgurl) {
                        $smarty->assign('chat_bgurl',$chat_bgurl);
                    }
                    //Iconstyle
                    $icon_style = $chat->getIconStyle();
                    if ($icon_style) {
                        $smarty->assign('icon_style',$icon_style);
                    }
                    //Iconprefix
                    $icon_prefix = $chat->LightIRC->getShowNickprefixIcons();
                    if ($icon_prefix == "true") {
                        $smarty->assign('icon_prefix', "true");
                    }
                    else {
                        $smarty->assign('icon_prefix', "false");
                    }
                    //Timestamp
                    $timestamp = $chat->LightIRC->getShowTimestamps();
                    if ($timestamp == "true") {
                        $smarty->assign('timestamp', "true");
                    }
                    else {
                        $smarty->assign('timestamp', "false");
                    }
                    //Webcam
                    $webcam = $chat->LightIRC->getWebcam();
                    $webcamvonly = $chat->LightIRC->getWebcamVideoOnly();
                    $webcamaonly = $chat->LightIRC->getWebcamAudioOnly();
                    if (($webcam == "true") && ($webcamaonly != "true")) {
                        $smarty->assign('webcam_video',"true");
                    }
                    else {
                        $smarty->assign('webcam_video',"false");
                    }
                    if (($webcam == "true") && ($webcamvonly != "true")) {
                        $smarty->assign('webcam_audio',"true");
                    }
                    else {
                        $smarty->assign('webcam_audio',"false");
                    }
                    if ($chat->LightIRC->getWebcamPublicOnly() == "false") {
                        $smarty->assign('webcam_prive',"true");
                    }
                    else {
                        $smarty->assign('webcam_prive',"false");
                    }
                    //Chat_Prive
                    $chat_prive = $chat->LightIRC->getEnableQueries();
                    if ($chat_prive == "true") {
                        $smarty->assign('chat_prive', "true");
                    }
                    else {
                        $smarty->assign('chat_prive', "false");
                    }
                    //Server window
                    $serverwindow = $chat->LightIRC->getShowServerWindow();
                    if ($serverwindow == "true") {
                        $smarty->assign('serverwindow', "true");
                    }
                    else {
                        $smarty->assign('serverwindow',"false");
                    }
                    //Channel list
                    $channellist = $chat->LightIRC->getShowListButton();
                    if ($channellist == "true") {
                        $smarty->assign('channellist', "true");
                    }
                    else {
                        $smarty->assign('channellist', "false");
                    }
                    //Colors
                    $textstyling = $chat->LightIRC->getShowRichTextControls();
                    if ($textstyling == "true") {
                        $smarty->assign('textstyling', "true");
                    }
                    else {
                        $smarty->assign('textstyling', "false");
                    }
                    //Join,Part,Quit host
                    $verboseinformation = $chat->LightIRC->getShowVerboseUserInformation();
                    if ($verboseinformation == "true") {
                        $smarty->assign('verboseinformation', "true");
                    }
                    else {
                        $smarty->assign('verboseinformation', "false");
                    }
                    //Radio
                    $radio_enabled = $chat->Radio->getEnabled();
                    if ($radio_enabled == "true") {
                        $smarty->assign('radio_enabled', "true");
                    }
                    else {
                        $smarty->assign('radio_enabled', "false");
                    }
					//stats
                    $show_stats = $chat->getShowStats();
                    if ($show_stats == "true") {
                        $smarty->assign('showstats', "true");
                    }
                    else {
                        $smarty->assign('showstats', "false");
                    }
                    //Radio name
                    $radio_name = $chat->Radio->getName();
                    if ($radio_name) {
                        $smarty->assign('radio_name', $radio_name);
                    }
                    //Stream type
                    $radio_streamtype = $chat->Radio->getStreamType();
                    if ($radio_streamtype) {
                        $smarty->assign('radio_type', $radio_streamtype);
                    }
                    //Radio URL
                    $radio_link = $chat->Radio->getStreamLink();
                    if ($radio_link) {
                        $smarty->assign('radio_link', $radio_link);
                    }
					$verzoekurl = $chat->getVerzoekurl();
                    if ($verzoekurl) {
                        $smarty->assign('verzoek_url', $verzoekurl);
                    }
                    $radio_type = $chat->Radio->getPlayer();
                    if ($radio_type) {
                        $smarty->assign('radio_style', $radio_type);
                    }
					$playerkleur = $chat->getPlayerkleur();
                    if ($playerkleur) {
                        $smarty->assign('playerkleur', $playerkleur);
                    }
					$tekstkleur = $chat->getTekstkleur();
                    if ($tekstkleur) {
                        $smarty->assign('tekstkleur', $tekstkleur);
                    }
					
					$mountpoint = $chat->getMountpoint();
                    if ($mountpoint) {
                        $smarty->assign('mountpoint', $mountpoint);
                    }
                    //Advertenties
                    $ads_enabled = $chat->getAdsEnabled();
                    if ($ads_enabled == "true") {
                        $smarty->assign('ads_enabled', "true");
                    } else {
                        $smarty->assign('ads_enabled', "false");
                    }
					//Kiwi Avatar
					$kiwi_avatar = $chat->getKiwiAvatar();
                    if ($kiwi_avatar == "true") {
                        $smarty->assign('kiwi_avatar', "true");
                    } else {
                        $smarty->assign('kiwi_avatar', "false");
                    }
					//Kiwi Upload
					$kiwi_upload = $chat->getKiwiUpload();
                    if ($kiwi_upload == "true") {
                        $smarty->assign('kiwi_upload', "true");
                    } else {
                        $smarty->assign('kiwi_upload', "false");
                    }
					//Kiwi Giphy
					$kiwi_giphy = $chat->getKiwiGiphy();
                    if ($kiwi_giphy == "true") {
                        $smarty->assign('kiwi_giphy', "true");
                    } else {
                        $smarty->assign('kiwi_giphy', "false");
                    }
					//Kiwi Imgur
					$kiwi_imgur = $chat->getKiwiImgur();
                    if ($kiwi_imgur == "true") {
                        $smarty->assign('kiwi_imgur', "true");
                    } else {
                        $smarty->assign('kiwi_imgur', "false");
                    }
					//Kiwi ASL
					$kiwi_asl = $chat->getKiwiASL();
                    if ($kiwi_asl == "true") {
                        $smarty->assign('kiwi_asl', "true");
                    } else {
                        $smarty->assign('kiwi_asl', "false");
                    }
					//Chat Redirect
					$html_redirect = $chat->getHTMLRedirect();
                    if ($html_redirect == "true") {
                        $smarty->assign('html_redirect', "true");
                    } else {
                        $smarty->assign('html_redirect', "false");
                    }
                    $smarty->assign('page','edit');
                }
                else {
                    $smarty->assign('error',"Er is wat misgelopen.");
                }
            }
            else {
                $smarty->assign('error',"Er is wat misgelopen.");
            }
        }
    }
    elseif ($page == "new") {
        if (isset($_POST['chat_name'])) {
            $chat = new Chatbox($db);
            $chat->setOwner($id);
            $chat->readForm($_POST);
            $chat->save();
            $smarty->assign('success',"Je chatbox is aangemaakt! Vergeet niet je chatbox te registeren op de chat!");
            $smarty->assign('page',"list");
        }
        else {
            //Formulier nieuwe chat aanmaken
            $smarty->assign('chat_style',"blue");
			$smarty->assign('chat_bgurl',"");
			$smarty->assign('verzoek_url',"");
			$smarty->assign('tekstkleur', "#FFFFFF");
			$smarty->assign('playerkleur', "#800000");
			$smarty->assign('mountpoint', "/stream");
            $smarty->assign('icon_style',"bolletje");
            $smarty->assign('icon_prefix', "false");
            $smarty->assign('timestamp', "true");
            $smarty->assign('webcam_video',"true");
            $smarty->assign('webcam_audio',"true");
            $smarty->assign('webcam_prive',"true");
            $smarty->assign('chat_prive', "true");
            $smarty->assign('serverwindow', "true");
            $smarty->assign('channellist', "true");
            $smarty->assign('textstyling', "true");
            $smarty->assign('verboseinformation', "false");
            $smarty->assign('radio_enabled', "false");
            $smarty->assign('radio_type', "shoutcast");
            $smarty->assign('radio_style', "luna");
            $smarty->assign('ads_enabled', "true");
			$smarty->assign('kiwi_avatar', "true");
			$smarty->assign('kiwi_upload', "true");
			$smarty->assign('kiwi_giphy', "true");
			$smarty->assign('kiwi_imgur', "true");
			$smarty->assign('kiwi_asl', "true");
			$smarty->assign('html_redirect', "false");
			$smarty->assign('showstats', "false");
	    $smarty->assign('page','new');
        }
    }
    elseif ($page == "help") {
        $smarty->assign('page',"help");
    }
    elseif ($page == "settings") {
        $smarty->assign('page',"settings");
    }
    else {
        //Geen page opgegeven
    }

    if ($isGodUser > 0) {

        $member = new Member($db);
        $chatboxes = $member->getAllGodChatboxes();
        $ids = array();
        $owners = array();
        $calls = array();
        $lastcalleds = array();
        $names = array();
		$bgurl = array();
		$bgcolor = array();
		$chatstyle = array();
		$playerstyle = array();
        foreach ($chatboxes as $chatbox) {
            $owner = new Member($aDb);
            $owner->getById($chatbox->getOwner());
            array_push($ids,$chatbox->getId());
            array_push($owners,$owner->getUsername());
            array_push($calls, $chatbox->getCalls());
            array_push($lastcalleds, $chatbox->getLastCalled());
            array_push($names,$chatbox->getName());
			array_push($bgcolor,$chatbox->getBgcolor());
			array_push($bgurl,$chatbox->getBgurl());
			array_push($chatstyle,$chatbox->getStyle());
			array_push($playerstyle,$chatbox->Radio->getPlayer());
        }
        $smarty->assign('ids',$ids);
        $smarty->assign('owners', $owners);
        $smarty->assign('calls', $calls);
        $smarty->assign('lastcalleds', $lastcalleds);
        $smarty->assign('names', $names);
		$smarty->assign('bgurl', $bgurl);
		$smarty->assign('bgcolor', $bgcolor);
		$smarty->assign('chatstyle', $chatstyle);
		$smarty->assign('playerstyle', $playerstyle);
    }
    else {
        $member = new Member($db);
        $chatboxes = $member->getAllChatboxes($id);
        $ids = array();
        $owners = array();
        $names = array();
		$bgurl = array();
		$chatstyle = array();
		$bgcolor = array();
		$playerstyle = array();
        foreach ($chatboxes as $chatbox) {
            array_push($ids, $chatbox->getId());
            array_push($names, $chatbox->getName());
			array_push($bgurl,$chatbox->getBgurl());
			array_push($chatstyle,$chatbox->getStyle());
			array_push($bgcolor,$chatbox->getBgcolor());
			array_push($playerstyle,$chatbox->Radio->getPlayer());
        }
        $smarty->assign('ids', $ids);
        $smarty->assign('names', $names);
		$smarty->assign('bgurl', $bgurl);
		$smarty->assign('bgcolor', $bgcolor);
		$smarty->assign('chatstyle', $chatstyle);
    }

    $smarty->display('mainpanel.tpl');



}
else {
    $smarty->assign('error', "Gelieve eerst in te loggen of registreer eerst via <a href='register.php'>hier</a><br />Let op, registreren is gelijk registreren voor je nicknaam op de chat, onthoudt je wachtwoord en nicknaam goed!");
    $smarty->display('login.tpl');
}
?>