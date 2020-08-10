
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
<script type="text/javascript" src="../analyticstracking.js"></script>
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
<meta property="og:url" content="{$fullurl}/chat.php?id={$smarty.get.id}" />

<meta property="og:type" content="article" />
<meta property="og:title" content="..::Chattersworld Chameleon::.. #{$metadata['name']}" />
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
<link rel="stylesheet" href="dist/magnific-popup.css">
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"><title>Kiwi IRC</title>

<style>/* target specific styles */
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
.white-popup {
  position: relative;
  background: #000000;
  padding: 0px;
  width: auto;
  max-width: 810px;
  margin: 0px auto;
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
	}
{/literal}
	</style>{literal}<style class=embedly-css>.card .hdr {
            display:none;
		   }
		   
		    .kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/owner.png)
}
 .kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/admin.png)
}
 .kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/operator.png)
}
 .kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/halfop.png)
}
 .kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/voice.png)
}
{/literal}{if $metadata['prefixicons'] == "true"}{literal}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/owner.png)
}
 .kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/admin.png)
}
 .kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/operator.png)
}
 .kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/halfop.png)
}
 .kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/voice.png)
}
{/literal}{/if}{literal}
.kiwi-messagelist {
{/literal}{if $metadata['style'] != "transparent"}{literal}{/literal}
			   {if $metadata['bgcolor'] == '#000000'}{literal}background-color:rgba(0,0,0, .50);{/literal}{else}{literal}
               background-color:{/literal}#FFF{literal};{/literal}{/if}{literal}	
			   }
			   {/literal}{else}{literal}
    background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url({/literal}{$metadata['bgurl']}{literal}); 
	{/literal}{/if}{literal}
	background-size: 100% 100%; }
	
	 
}
.kiwi-statebrowser-channel[data-name="#{/literal}{$metadata['name']}{literal}"]::before {
    content: "\f075";
    font-family: fontawesome;
    margin-right: 5px;
}
.kiwi-statebrowser-channel[data-name="#help"]::before {
    content: "\f128";
    font-family: fontawesome;
    margin-right: 5px;
}

</style>
{/literal}
<link href="static/css/app.d11ee53b.css" rel="preload" as="style"><link href="static/js/app.71bcf681.js" rel="preload" as="script"><link href="static/js/vendor.0d970857.js" rel="preload" as="script"><link href="static/css/app.d11ee53b.css" rel="stylesheet"></head><body>
<div class="left">
<a target="_blank" href="https://chattersworld.nl"><img src="{$logo}" style="z-index: 102;" height="50" alt="Chattersworld"></a>
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

</div>
<div class="right"><span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">&#9776;</span></div>
<noscript><div class=kiwi-noscript-warn>Please enable JavaScript and refresh the page to use this website.</div></noscript><div id=app></div><script type="text/javascript" src="static/js/vendor.0d970857.js"></script><script type="text/javascript" src="static/js/app.71bcf681.js"></script>
		<script type="text/javascript">
	
	function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 </script>
<div id="test-popup" class="white-popup mfp-hide">
  <iframe src="{$metadata['verzoek_url']}" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>