<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Brussels');

require_once 'classes/Config.php';
require_once 'classes/Database.php';
require_once 'classes/Chatbox.php';
require_once 'classes/LightIRC.php';
require_once 'classes/Radio.php';
require_once 'classes/Login.php';
require_once 'classes/Member.php';
require_once('smarty.php');

global $config;
$config = new Config();
$config->setErrorMode("dev");

if ($config->getErrorMode() == "dev") {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $config->setFullUrl("https://dev.chameleon.chattersweb.nl");
}
else {
    error_reporting(0);
    ini_set('display_errors', '0');
}
?>
