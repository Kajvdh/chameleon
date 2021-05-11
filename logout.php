<?php
require("includes.php");
$smarty->assign('fullurl', $config->getFullUrl());
$login = new Login();
$login->logout();

$smarty->assign('error',"Je bent succesvol uitgelogd.");
$smarty->display('login.tpl');
?>