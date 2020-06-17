<!DOCTYPE html><html><head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9106844814451489",
          enable_page_level_ads: true
     });
</script>
<!-- Facebook Pixel Code -->
{literal}
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '311596215978856');
  fbq('track', 'MobileCWO');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=311596215978856&ev=MobileCWO&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73408859-2', 'auto');
  ga('send', 'pageview');

</script>
{/literal}
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
<meta property="og:url" content="https://chameleon.chattersworld.nl" />

<meta property="og:type" content="article" />
<meta property="og:title" content="..::Chattersworld Chameleon::.. #{$metadata['name']}" />
<meta property="og:site_name" content="..::Chattersworld Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />
{if $metadata['style'] != "transparent"}
<meta property="og:image" content="{$logo}" />
<link rel="icon" href="{$logo}" sizes="32x32" />
{else}
<meta property="og:image" content="{$metadata['bgurl']}" />
<link rel="icon" href="{$metadata['bgurl']}" sizes="32x32" />
{/if}
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::Chattersworld Chameleon::.." />
<link rel="canonical" href="https://chameleon.chattersworld.nl" />
{literal}
<script name="kiwiconfig">
{"startupScreen": "welcome",
"windowTitle": "..::Chattersworld - #{/literal}{$metadata['name']}{literal}::.. The web IRC client",
 
"theme": "Osprey",
"themes": [
        { "name": "Default", "url": "static/themes/default" },
        { "name": "Dark", "url": "static/themes/dark" },
        { "name": "Coffee", "url": "static/themes/coffee" },
        { "name": "GrayFox", "url": "static/themes/grayfox" },
        { "name": "Nightswatch", "url": "static/themes/nightswatch" },
        { "name": "Osprey", "url": "static/themes/osprey" },
        { "name": "Radioactive", "url": "static/themes/radioactive" },
        { "name": "Sky", "url": "static/themes/sky" },
        { "name": "Elite", "url": "static/themes/elite" }
    ],
"startupOptions": { 
"server": "irc.chattersworld.nl", 
"infoBackground": "{/literal}{if $metadata['bgurl'] != ''}{$metadata['bgurl']}{else}cwobg.jpg{/if}{literal}", 
"infoContent": "<img src=\"https://atsiofrjlo.cloudimg.io/v7/https://chattersworld.nl/wp-content/uploads/2018/10/cropped-c4all.png\" height=\"30%\" width=\"30%\"><p>U bent terecht gekomen op de HTML5 chat van <a href=\"https://chameleon.chattersworld.nl\">Chattersworld Chameleon</a>.<br> Log gerust in of neem een kijkje op <a href=\"https://chattersworld.nl/\">onze website</a>.</p><p></p>",
"state_key": "kiwi-state", 
"port": 6800, 
"tls": true, 
"direct": true,
"showCaptcha": true, 
"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
"channel": "#{/literal}{$metadata['name']}{literal}",
"remember_buffers": true, 
"nick": "" },
"sidebarDefault": "nicklist",
"buffers": {
{/literal}{if $metadata['private'] == "true"}{literal}"block_pms": false, {/literal}{/if}{literal}
"coloured_nicklist": false,
"nicklist_avatars": true,
"inline_link_auto_previews": true,
"inline_link_auto_preview_whitelist": ".*",
"share_typing": true
},
	"plugins": [
        {
            "name": "conference",
            "url": "static/plugins/conference/plugin-conference.min.js"
        },
		{"name": "emoji", "url": "static/plugins/plugin-emoji-prelim.min.js"},
		{"name": "fileuploader", "url": "static/plugins/fileuploader.js"}
    ],
	"conference":{ 
    		"server": "meet.jit.si",
    		"secure": false,
    		"enabledInChannels": [ "*" ],
    		"joinText": "heeft de mediaconferentie opgestart.",
    		"inviteText": "is inviting you to a private call.",
    		"joinButtonText": "Join nu!",
    		"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
    		"showLink": false,
    		"useBitlyLink": false,
			"queries": false,
    		"bitlyAccessToken": "BITLY_API_KEY_HERE",
    		"interfaceConfigOverwrite": {
        		"SHOW_JITSI_WATERMARK": false,
        		"SHOW_WATERMARK_FOR_GUESTS": false,
				"SHOW_BRAND_WATERMARK": true,
				"BRAND_WATERMARK_LINK": "https://chattersworld.nl/",
				"MOBILE_APP_PROMO": true,
				"DEFAULT_REMOTE_DISPLAY_NAME": "",
				"VERTICAL_FILMSTRIP": true,
				"LANG_DETECTION": true,
        		"TOOLBAR_BUTTONS": [
            				"microphone", "camera", "fullscreen", "fodeviceselection", "hangup",
            				"settings", "videoquality", "filmstrip",
            				"stats", "shortcuts"
       			 ]
    		},
    		"configOverwrite": {
    		}
	},
	"fileuploader": {
		"server": "https://stats.gezelligkletsen.nl:8088/files",
		"maxFileSize": 10485760,
		"note": "Add an optional note to the upload dialog"
	},
	"embedly": {
        "key": ""
    	}
}
</script>
{/literal}
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"><title>Kiwi IRC</title>

<style>/* target specific styles */
    html { height: 100%; overflow: hidden; }
	body { height:100%;
               margin:0;
               padding:0;
			   {if $metadata['style'] != "transparent"}
               background-color:{$metadata['bgcolor']};	}
			   {else}
			   background-image:url("{$metadata['bgurl']}");
			   background-repeat: no-repeat;
			      background-size: 100% 100%; }
			   {/if}
			   {literal}
	#BbfWjPzRoMSm {
display: none;
margin-bottom: 0;
height: 60px;
padding: 20px 10px;
background: #D30000;
font-weight: bold;
text-align: center;
color: #fff;
border-radius: 0px;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 12;
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
	{/literal}{if $metadata['radio_player'] != "hero"}
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
}{/literal}

	</style>{literal}<style class=embedly-css>.card .hdr {
            display:none;
		   }
		   
		    .kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/{/literal}{$metadata['icons']}{literal}/owner.png)
}
 .kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/{/literal}{$metadata['icons']}{literal}/admin.png)
}
 .kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/{/literal}{$metadata['icons']}{literal}/operator.png)
}
 .kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/{/literal}{$metadata['icons']}{literal}/halfop.png)
}
 .kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/{/literal}{$metadata['icons']}{literal}/voice.png)
}
.kiwi-messagelist {
{/literal}{if $metadata['style'] != "transparent"}{literal}
               background-color:{/literal}{$metadata['bgcolor']}{literal};	}
			   {/literal}{else}{literal}
    background-image: linear-gradient(rgba(255,255,255, .75), rgba(255,255,255, .75)), url({/literal}{$metadata['bgurl']}{literal}); }
	{/literal}{/if}{literal}
	background-size: 100% 100%;
	
	 
}

</style>
{/literal}
<link href=static/css/app.0e0d0851.css rel=preload as=style><link href=static/js/app.b32a6610.js rel=preload as=script><link href=static/js/vendor.0d970857.js rel=preload as=script><link href=static/css/app.0e0d0851.css rel=stylesheet></head><body>
<div class="left">
<a target="_blank" href="https://chattersworld.nl"><img src="{$logo}" height="50" alt="Chattersworld"></a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<center><a target="_blank" href="https://chattersworld.nl"><img src="{$logo}" height="100" alt="Chattersworld"></a></center>
<br>
{if $metadata['verzoek_url'] != "" && $metadata['radio'] == "true"}
<a href="{$metadata['verzoek_url']}" target="_new" onclick="window.open('{$metadata['verzoek_url']}','Verzoekserver Aanvragen','width=800,height=650,scrollbars=yes,toolbar=no,menubar=no,location=yes,resizable=yes,border=no'); return false"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Verzoekje Doen</a>
<br />
{else}
<a target="_blank" href="https://chattersworld.nl"><img src="https://www.gbc-radio.nl/chat/radio/request1.png" width="25px" height="25px" alt="Maak je eigen chatbox!">&nbsp;Maak je eigen chatbox!</a>
{/if}
<br />
{if $metadata['radio'] == "true"}
<a href="http://chameleon.chattersworld.nl/webplayer.php?id={$smarty.get.id}" target="_new" onclick="window.open('http://chameleon.chattersworld.nl/webplayer.php?id={$smarty.get.id}','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="https://www.gbc-radio.nl/chat/radio/regels1.png" width="25px" height="25px" alt="Chameleon Webplayer">&nbsp;Webplayer</a>
{/if}
<br />
<!-- <a href="http://webplayer.gbc-radio.nl/" target="_new" onclick="window.open('http://webplayer.gbc-radio.nl/','GBC Webplayer','width=780,height=725,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="https://www.gbc-radio.nl/chat/radio/regels1.png" width="25px" height="25px" alt="Webplayer GBC-Radio">&nbsp;Webplayer</a> -->
<br>

</div>
<div class="right"><span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">&#9776;</span></div>
<noscript><div class=kiwi-noscript-warn>Please enable JavaScript and refresh the page to use this website.</div></noscript><div id=app></div><script src=static/js/vendor.0d970857.js></script><script src=static/js/app.b32a6610.js></script>
		<script type="text/javascript">
	
	function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 </script>
