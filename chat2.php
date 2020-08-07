<?php
require("includes.php");
$database = new Database($config);
$db = $database->getConnection();
$smarty->assign('fullurl', $config->getFullUrl());
$smarty->assign('logo', $config->getLogo());
 
$mobile_browser = '0';
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}    
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
    
if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini') > 0) {
    $mobile_browser++;
}
    
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows') > 0) {
    $mobile_browser = 0;
}
 
if ($mobile_browser > 0) {
	if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $chat = new Chatbox($db);
    if ($chat->getById($id)) {
        $chat->setCall();
        //$chat->printConfig();

        $metadata = $chat->getMetaData();

        if (($metadata['radio'] == "true") || ($metadata['ads_enabled'] != "true"))
            header('Location: https://chameleon.chattersworld.nl/chat.php?'.$_SERVER['QUERY_STRING']);

        if ($metadata['ads_enabled'] == "true")
            $metadata['height'] = "90";

        $smarty->assign('metadata',$metadata);
		$smarty->display('kiwi-conf.tpl');
        $smarty->display('kiwi.tpl');

        if ($metadata['radio'] == "true") {
			if ($metadata['radio_player'] == "internal") {
				$smarty->display('chat_ads.tpl');
			}else{ 
				$smarty->display('chat_radio.tpl'); 
			}
        } elseif ($metadata['ads_enabled'] == "true") {
            $smarty->display('chat_ads.tpl');
        }

        $smarty->display('chat_end.tpl');
    }
    else {
        $smarty->display('chat_does_not_exist.tpl');
    }
}
else {
    $smarty->display('chat_does_not_exist.tpl');
}
}
else {
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $chat = new Chatbox($db);
    if ($chat->getById($id)) {
        $chat->setCall();
        $chat->printConfig();

        $metadata = $chat->getMetaData();

        if (($metadata['radio'] == "true") || ($metadata['ads_enabled'] != "true"))
            header('Location: https://chameleon.chattersworld.nl/chat.php?'.$_SERVER['QUERY_STRING']);

        if ($metadata['ads_enabled'] == "true")
            $metadata['height'] = "90";

        $smarty->assign('metadata',$metadata);
        $smarty->display('chat.tpl');

        if ($metadata['radio'] == "true") {
            $smarty->display('chat_radio.tpl');
        } elseif ($metadata['ads_enabled'] == "true") {
            $smarty->display('chat_ads.tpl');
        }

        $smarty->display('chat_end.tpl');
    }
    else {
        $smarty->display('chat_does_not_exist.tpl');
    }
}
else {
    $smarty->display('chat_does_not_exist.tpl');
}
}   
   
?>