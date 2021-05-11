<?php
if(stristr($_SERVER['REQUEST_URI'], 'config.inc.php')){
	die("Whoat?! Hier mag jij niet in komen..");
}
$site_url = 'https://ares.chattersworld.nl/';
$settings = array();
$settings['db'] = array();
$settings['db']['gebruiker'] = "root";
$settings['db']['wachtwoord'] = "16July1984!@";
$settings['db']['host'] = "stats.gezelligkletsen.nl";
$settings['db']['db'] = "verzoek";

