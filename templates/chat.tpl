 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Ares Verzoekserver, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="#{$metadata['name']} Chameleon | Chattersworld | Waar chatten, chatten is!" />
<meta property="og:description" content="#{$metadata['name']} Chattersworld Chameleon, deze chat is gemaakt door Chameleon op Chattersworld.nl" />
<meta property="og:url" content="{$fullurl}/chat.php?id={$smarty.get.id}" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="..::Chattersworld Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
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
<meta name="twitter:title" content="..::Chattersworld Chameleon::.." />
<link rel="canonical" href="{$fullurl}/chat.php?id={$smarty.get.id}" />
 <title>..::Chattersworld::.. #{$metadata['name']}</title>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
 <link rel="stylesheet" href="dist/magnific-popup.css">
  <script type="text/javascript" src="../analyticstracking.js"></script>
  {if $metadata['html_redirect'] == "true"}
  <script>window.location="html5.php?id={$smarty.get.id}";</script>
  {/if}
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
.white-popup {
  position: relative;
  background: #000000;
  padding: 0px;
  width: auto;
  max-width: 810px;
  margin: 0px auto;
}

@media screen and (max-height: 450px) {literal}{
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#my_centered_buttons { display: flex; justify-content: center;}
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
	.wrap {
                padding: 40px;
                text-align: center;
            }
            hr {
                clear: both;
                margin-top: 40px;
                margin-bottom: 40px;
                border: 0;
                border-top: 1px solid #aaaaaa;
            }
            h1 {
                font-size: 30px;
                margin-bottom: 40px;
            }
            p {
                margin-bottom: 20px;
            }
            .btn {
                background: #428bca;
                border: #357ebd solid 1px;
                border-radius: 3px;
                color: #fff;
                display: inline-block;
                font-size: 14px;
                padding: 8px 15px;
                text-decoration: none;
                text-align: center;
                min-width: 60px;
                position: relative;
                transition: color .1s ease;
            }
            .btn:hover {
                background: #357ebd;
            }
            .btn.btn-big {
                font-size: 18px;
                padding: 15px 20px;
                min-width: 100px;
            }
            .btn-close {
                color: #aaaaaa;
                font-size: 30px;
                text-decoration: none;
                position: absolute;
                right: 5px;
                top: 0;
            }
            .btn-close:hover {
                color: #919191;
            }
            .modal:before {
                content: "";
                display: none;
                background: rgba(0, 0, 0, 0.6);
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 10;
            }
            .modal:target:before, .modal.loaded:before {
                display: block;
            }
            .modal:target .modal-dialog, .modal.loaded .modal-dialog {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                transform: translate(0, 0);
                top: 20%;
            }
            .modal-dialog {
                background: #fefefe;
                border: #333333 solid 1px;
                border-radius: 5px;
                margin-left: -200px;
                position: fixed;
                left: 50%;
                top: -100%;
                z-index: 11;
                width: 500px;
                -webkit-transform: translate(0, -500%);
                -ms-transform: translate(0, -500%);
                transform: translate(0, -500%);
                -webkit-transition: -webkit-transform 0.3s ease-out;
                -moz-transition: -moz-transform 0.3s ease-out;
                -o-transition: -o-transform 0.3s ease-out;
                transition: transform 0.3s ease-out;
            }
            .modal-body {
                padding: 20px;
            }
            .modal-header,
            .modal-footer {
                padding: 10px 20px;
            }
            .modal-header {
                border-bottom: #eeeeee solid 1px;
            }
            .modal-header h2 {
                font-size: 20px;
            }
            .modal-footer {
                border-top: #eeeeee solid 1px;
                text-align: right;
            }
	{/literal}
 </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script>
$( document ).ready( function() {
    $('.modal').addClass('loaded');
    $('.btn-close, .btn').click( function() {
        $('.modal').removeClass('loaded');
    });
});
</script>
</head>

<body>
<div class="left">
<a target="_blank" href="https://chattersworld.nl"><img src="{$logo}" height="50" alt="Chattersworld"></a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<center><a target="_blank" href="https://chattersworld.nl"><img src="{$logo}" height="100" alt="Chattersworld"></a></center>
<br>
{if $metadata['verzoek_url'] != "" && $metadata['radio'] == "true"}
<a href="{$metadata['verzoek_url']}" data-mfp-src="#test-popup" class="open-popup-link"><img src="{$fullurl}/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Verzoekje Doen</a>
<br />
{else}
<a target="_blank" href="https://chattersworld.nl"><img src="{$fullurl}/radio/request1.png" width="25px" height="25px" alt="Maak je eigen chatbox!">&nbsp;Maak je eigen chatbox!</a>
{/if}
<br />
{if $metadata['radio'] == "true"}
<a href="{$fullurl}/webplayer.php?id={$smarty.get.id}" target="_new" onclick="window.open('{$fullurl}/webplayer.php?id={$smarty.get.id}','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="{$fullurl}/radio/regels1.png" width="25px" height="25px" alt="Chameleon Webplayer">&nbsp;Webplayer</a>
{/if}
<br />

<br>
<center><!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="my_centered_buttons" style="bottom:0px;">
<a class="a2a_button_facebook a2a_counter"></a>
<a class="a2a_button_twitter a2a_counter"></a>
<a class="a2a_button_whatsapp a2a_counter"></a>
<a class="a2a_button_telegram a2a_counter"></a>
</div>
<script>
var a2a_config = a2a_config || {};
a2a_config.locale = "nl";
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END --></center>
</div>
<div class="right"><span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">&#9776;</span></div>
 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="//www.adobe.com/go/getflashplayer"><img src="//www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>
<div id="test-popup" class="white-popup mfp-hide">
  <iframe src="{$metadata['verzoek_url']}" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
</div>
<div class="modal" id="modal-one" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-header">
                    <h2>Waarschuwing!!</h2>
                    <a href="#" class="btn-close" aria-hidden="true">×</a>
                </div>
                <div class="modal-body">
                    <p><center><img src="https://scr.gezelligkletsen.nl/b5d7ba93-1cce-4733-9e6a-559bb7d24d0d.png" /> <br /><br />Adobe Flashplayer stopt de ondersteuning in december 2020! <br /><br />Chattersworld houd de deze flashchat online zolang de ondersteuning blijft.<br /><br />Inmiddels heeft Chattersworld reeds een geweldige HTML5 chat.<br /><br /><br /><br />Druk op OK! om naar deze flashchat te gaan!</center></p>
                </div>
                <div class="modal-footer">
				<a href="{$fullurl}/html5.php?id={$smarty.get.id}" class="btn">Ga naar HTML5 chat</a>
                    <a href="#" class="btn">OK!</a>
                </div>
            </div>
        </div>
 <script type="text/javascript">
	params.host = "{$irc}";
	swfobject.embedSWF("{$fullurl}/lightIRC2.swf", "lightIRC", "100%", "{$metadata['height']}%", "10.0.0", "{$fullurl}/expressInstall.swf", params, {literal}{wmode:'transparent'}{/literal});
	
	function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 </script>
