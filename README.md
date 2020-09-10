# Opensourced at 2020/05/29

Since I'm not working on this project anymore for a while now, I decided to opensource it because a reasonable amount of people are still interested in it. I hope that I can help some of you this way, please note that I am no longer maintaining this project. Also apologize me for the outdated tech stack that's been used, I did not know any better at the moment of coding ;-)

Yes, I also know that there are some passwords hidden in the code ;) They don't work anymore so what's the point in replacing them by placeholders anyway ¯\\_(ツ)_/¯

# KiwiIRC added and support for Gravatar

KiwiIRC has been added, flash will stop support at the end of december, so KiwiIRC has been added inside of Chameleon.
KiwiIRC also has Support for gravatar avatars, please refer to the gitpage for kiwi-plugin-gravatar how to setup the plugin already build in.
https://github.com/ItsOnlyBinary/kiwiirc-plugin-gravatar/tree/master/webircgateway-plugin

# Filesharing support

This KiwiIRC version has filesharing build in.
Check out official github repo for installation:
https://github.com/kiwiirc/plugin-fileuploader

All others will work out of the box.

# LightIRC

LightIRC has some licensekey's needed, for webcam support and a Red5 webcam server.
Our licensekey's are not included cause they will not work on your domain.

# Radioplayers

Luna radioplayer also needs a licensekey bought on codecanyon.
The player will play audio without a licensekey, but other functions will not work properly

# Installation

Requires;
- Anope Services running on MySQL and Encryption has to be MD5
- Anope XMLRPC module has to be enabled and working!
- Make sure that your anope instance has m_xmlrpc enabled
- lightIRC webcam module license
- Self hosted Jitsi-Meet for KiwiIRC conference
- Some license's for web radioplayers
- Red5 RTPM server for webcam via LightIRC (License needed)

Installation is quite straight forward;
- Setup a database account
- import database.sql to that account
- make sure that the webhost can connect to your anope datebase and put in the details in classes/Config.php
- edit classes/Config.php with your database details created above
- edit classes/LightIRC.php with your IRC credentials (replace irc.example.nl with your IRC server)
- edit classes/LightIRC.php with your lightIRC license (LightIRC requires a license for webcams to work)
- edit templates/kiwi-conf.tpl with your IRC credentials, webircgateway and jitsi-meet server
- edit register.php with the anope xmlrpc URL for registration to work properly (same with chanregister.php
