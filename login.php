<?php
require("includes.php");
$database = new Database($config, "anope");
$db = $database->getConnection();
$smarty->assign('fullurl', $config->getFullUrl());
$smarty->assign('sitename', $config->getSiteName());

if (isset($_POST['login'])) {
    
    $username = $_POST['login'];
    $pass = hash('md5',$_POST['pass']);
    
    $member = new Member($db);
    $member->setUsername($username);
    $member->setPassword('md5:'.$pass);
    $verify = $member->verify();
    
    if ($verify) {
        $login = new Login();
        $login->setSession($verify);
        header('Location: '.$config->getFullUrl());        
    }
    else {
        $smarty->assign('error',"Onjuiste gegevens");
        $smarty->display('login.tpl');
    }
}
else {
    $smarty->display('login.tpl');
}



?>