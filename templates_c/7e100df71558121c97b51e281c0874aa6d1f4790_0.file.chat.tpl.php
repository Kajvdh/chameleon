<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-31 13:42:24
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2403a0eeee70_60970343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e100df71558121c97b51e281c0874aa6d1f4790' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat.tpl',
      1 => 1594114910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2403a0eeee70_60970343 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
 Chattersworld Chameleon, deze chat is gemaakt door Chameleon op Chattersworld.nl" />
<meta property="og:url" content="https://chameleon.chattersworld.nl" />

<meta property="og:type" content="article" />
<meta property="og:site_name" content="..::Chattersworld Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" sizes="32x32" />
<?php } else { ?>
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {?>cwobg.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
}?>" />
<link rel="icon" href="<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {
echo $_smarty_tpl->tpl_vars['logo']->value;
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
}?>" sizes="32x32" />
<?php }?>
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::Chattersworld Chameleon::.." />
<link rel="canonical" href="https://chameleon.chattersworld.nl" />
 <title>..::Chattersworld::.. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
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
			   <?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {?>
			   background-image:url("<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
");
			   <?php } else { ?>
			   background-image:url("cwobg.jpg");
			   <?php }?>
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
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "hero") {?>
    right: 15px;
	<?php } else { ?>
	right: 356px;
	<?php }?>
    font-size: 36px;
    margin-left: 50px;
}

.right { 
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "hero") {?>
float:right; 
right: 5px;
<?php } else { ?>
float:right;
right: 356px;
<?php }?>
display: block; 
position: absolute;
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
.lunaresponsive {/*Large Screen Height*/
		height:80px;
	}
	@media only screen and (min-width: 600px) and (max-width:959px) {
		.lunaresponsive {/*Medium Screen Height*/
			height:60px;
		}
	}
	@media only screen and (max-width:599px) {
		.lunaresponsive {/*Small Screen Height*/
			height:40px;
		}
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
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'] != '' && $_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
" target="_new" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
','Verzoekserver Aanvragen','width=800,height=650,scrollbars=yes,toolbar=no,menubar=no,location=yes,resizable=yes,border=no'); return false"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Verzoekje Doen</a>
<br />
<?php } else { ?>
<a target="_blank" href="https://chattersworld.nl"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Maak je eigen chatbox!">&nbsp;Maak je eigen chatbox!</a>
<?php }?>
<br />
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
<a href="http://chameleon.chattersworld.nl/webplayer.php?id=<?php echo $_GET['id'];?>
" target="_new" onclick="window.open('http://chameleon.chattersworld.nl/webplayer.php?id=<?php echo $_GET['id'];?>
','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="https://www.gbc-radio.nl/chat/radio/regels1.png" width="25px" height="25px" alt="Chameleon Webplayer">&nbsp;Webplayer</a>
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
/lightIRC2.swf", "lightIRC", "100%", "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['height'];?>
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
