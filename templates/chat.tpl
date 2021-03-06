<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="//www.w3.org/1999/xhtml" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, example, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat, triviant," />
<meta name="description"  content="example De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, example Ares Verzoekserver, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="#{$metadata['name']} Chameleon | example | Waar chatten, chatten is!" />
<meta property="og:description" content="#{$metadata['name']} example Chameleon, deze chat is gemaakt door Chameleon op example.nl" />
<meta property="og:url" content="https://chameleon.example.nl" />

<meta property="og:type" content="article" />
<meta property="og:site_name" content="..::example Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/example/" />
<meta property="fb:app_id" content="699740480138507" />
{if $metadata['style'] != "transparent"}
<meta property="og:image" content="{$logo}" />
<link rel="icon" href="{$logo}" sizes="32x32" />
{else}
<meta property="og:image" content="{if $metadata['bgurl'] == ""}cwobg.jpg{else}{$metadata['bgurl']}{/if}" />
<link rel="icon" href="{if $metadata['bgurl'] == ""}{$logo}{else}{$metadata['bgurl']}{/if}" sizes="32x32" />
{/if}
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::example Chameleon::.." />
<link rel="canonical" href="https://chameleon.example.nl" />
 <title>..::example::.. #{$metadata['name']}</title>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
 <script type="text/javascript" src="../analyticstracking.js"></script>

 <style type="text/css">
	html { height: 100%; overflow: hidden; }
	body { height:100%;
               margin:0;
               padding:0;
			   {if $metadata['style'] != "transparent"}
               background-color:{$metadata['bgcolor']};	}
			   {else}
			   {if $metadata['bgurl'] != ""}
			   background-image:url("{$metadata['bgurl']}");
			   {else}
			   background-image:url("cwobg.jpg");
			   {/if}
			   background-repeat: no-repeat;
			      background-size: 100% 100%; }
			   {/if}
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
	{if $metadata['radio_player'] != "hero"}
    right: 15px;
	{else}
	right: 356px;
	{/if}
    font-size: 36px;
    margin-left: 50px;
}

.right { 
{if $metadata['radio_player'] != "hero"}
float:right; 
right: 5px;
{else}
float:right;
right: 356px;
{/if}
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

@media screen and (max-height: 450px) {literal}{
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
	}{/literal}
 </style>
</head>

<body>
<div class="left">
<a target="_blank" href="https://example.nl"><img src="{$logo}" height="50" alt="example"></a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<center><a target="_blank" href="https://example.nl"><img src="{$logo}" height="100" alt="example"></a></center>
<br>
{if $metadata['verzoek_url'] != "" && $metadata['radio'] == "true"}
<a href="{$metadata['verzoek_url']}" target="_new" onclick="window.open('{$metadata['verzoek_url']}','Verzoekserver Aanvragen','width=800,height=650,scrollbars=yes,toolbar=no,menubar=no,location=yes,resizable=yes,border=no'); return false"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Verzoekje Doen</a>
<br />
{else}
<a target="_blank" href="https://example.nl"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Maak je eigen chatbox!">&nbsp;Maak je eigen chatbox!</a>
{/if}
<br />
{if $metadata['radio'] == "true"}
<a href="http://chameleon.example.nl/webplayer.php?id={$smarty.get.id}" target="_new" onclick="window.open('http://chameleon.example.nl/webplayer.php?id={$smarty.get.id}','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="https://www.gbc-radio.nl/chat/radio/regels1.png" width="25px" height="25px" alt="Chameleon Webplayer">&nbsp;Webplayer</a>
{/if}
<br />
<!-- <a href="http://webplayer.gbc-radio.nl/" target="_new" onclick="window.open('http://webplayer.gbc-radio.nl/','GBC Webplayer','width=780,height=725,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="https://www.gbc-radio.nl/chat/radio/regels1.png" width="25px" height="25px" alt="Webplayer GBC-Radio">&nbsp;Webplayer</a> -->
<br>

</div>
<div class="right"><span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">&#9776;</span></div>
 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="//www.adobe.com/go/getflashplayer"><img src="//www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>

 <script type="text/javascript">
	swfobject.embedSWF("{$fullurl}/lightIRC2.swf", "lightIRC", "100%", "{$metadata['height']}%", "10.0.0", "{$fullurl}/expressInstall.swf", params, {literal}{wmode:'transparent'}{/literal});
	function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 </script>
