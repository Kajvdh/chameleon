<?php
/* Smarty version 3.1.29, created on 2020-06-03 23:52:01
  from "/home/stats/chameleon/templates/chat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ed81b81348cd6_96110024',
  'file_dependency' => 
  array (
    'a3483e4f774c3006be018cc96521b2234421d59c' => 
    array (
      0 => '/home/stats/chameleon/templates/chat.tpl',
      1 => 1591220848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed81b81348cd6_96110024 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="//www.w3.org/1999/xhtml" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Ares Verzoekserver, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
 Chameleon | Chattersworld | Waar chatten, chatten is!" />
<meta property="og:description" content="#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
 Chameleon" />
<meta property="og:url" content="https://chameleon.chattersworld.nl" />

<meta property="og:type" content="article" />
<meta property="og:title" content="..::Chattersworld Chameleon::.. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
" />
<meta property="og:site_name" content="..::Chattersworld Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
<?php } else { ?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
" />
<?php }?>
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::Chattersworld Chameleon::.." />
<link rel="canonical" href="https://chameleon.chattersworld.nl" />
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" sizes="32x32" />
 <title>..::Chattersorld::.. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
</title>
 <?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript" src="../analyticstracking.js"><?php echo '</script'; ?>
>

 <style type="text/css">
	html { height: 100%; overflow: hidden; }
	body { height:100%;
               margin:0;
               padding:0;
			   <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
               background-color:<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];?>
;	}
			   <?php } else { ?>
			   background-image:url("<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
");
			   background-repeat: no-repeat;
			      background-size: 100% 100%; }
			   <?php }?>
			   body {
    font-family: "Lato", sans-serif;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  z-index: -1;
  min-width: 100%; 
  min-height: 100%;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
overflow: hidden;
}
.sidenav span {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 22px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    bottom: 50px;
    right: 15px;
    font-size: 36px;
    margin-left: 50px;
}

.right { 
float:right; 
display: block; 
position: absolute;
    right: 5px;
    bottom: 2px;
}
.left { 
float:left; 
display: block; 
position: absolute;
    left: 2px;
    bottom: 2px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
 </style>
</head>

<body>
<div class="left">
<a target="_blank" href="https://chattersworld.nl"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="50" alt="Chattersworld"></a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<center><a target="_blank" href="https://chattersworld.nl"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="100" alt="Chattersworld"></a></center>
<br>
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
" target="_new" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
','Verzoekserver Aanvragen','width=800,height=650,scrollbars=yes,toolbar=no,menubar=no,location=yes,resizable=yes,border=no'); return false"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Verzoekje Doen</a>
<?php } else { ?>
<a target="_blank" href="https://chattersworld.nl"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Maak je eigen chatbox!</a>
<?php }?>
<br />
<!-- <a href="http://webplayer.gbc-radio.nl/" target="_new" onclick="window.open('http://webplayer.gbc-radio.nl/','GBC Webplayer','width=780,height=725,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="https://www.gbc-radio.nl/chat/radio/regels1.png" width="25px" height="25px" alt="Webplayer GBC-Radio">&nbsp;Webplayer</a> -->
<br>

</div>
<div class="right"><span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">&#9776;</span></div>
 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="//www.adobe.com/go/getflashplayer"><img src="//www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>

 <?php echo '<script'; ?>
 type="text/javascript">
	swfobject.embedSWF("<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lightIRC.swf", "lightIRC", "100%", "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['height'];?>
%", "10.0.0", "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/expressInstall.swf", params, {wmode:'transparent'});
	function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 <?php echo '</script'; ?>
>
<?php }
}
