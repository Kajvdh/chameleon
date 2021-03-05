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
$database = new Database($config);
$db = $database->getConnection();
$smarty->assign('fullurl', $config->getFullUrl());
$smarty->assign('logo', $config->getLogo());
$smarty->assign('irc', $config->getIRC());
$smarty->assign('sitename', $config->getSiteName());
$smarty->assign('gateway', $config->getGateway());
$smarty->assign('file', $config->getFile());

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $chat = new Chatbox($db);
    if ($chat->getById($id)) {
        $chat->setCall();
        //$chat->printKiwiConfig();

        $metadata = $chat->getMetaData();

        if (($metadata['radio'] != "true") && ($metadata['ads_enabled'] == "true"))
            header('Location: https://chameleon.chattersworld.nl/html52.php?'.$_SERVER['QUERY_STRING']);

        $smarty->assign('metadata',$metadata);
		$smarty->display('kiwi-conf.tpl');
		$smarty->display('kiwi-style.tpl');
        $smarty->display('kiwi.tpl');

        if ($metadata['radio'] == "true") {
			if ($metadata['radio_player'] == "internal") {
				$smarty->display('chat_ads.tpl');
			}else{ 
				$smarty->display('chat_radio.tpl'); 
			}
        }
		echo '</div>';
        $smarty->display('chat_end.tpl');
    }
    else {
        header('Location: https://chattersworld.nl/html5.php?'.$_SERVER['QUERY_STRING']);
    }
}
else {
    header('Location: https://chattersworld.nl/html5.php?'.$_SERVER['QUERY_STRING']);
}
?>