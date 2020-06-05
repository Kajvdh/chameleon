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
{literal}
<script name="kiwiconfig">
{"startupScreen": "welcome",
"windowTitle": "Chattersworld - #{/literal}{$metadata['name']}{literal} The web IRC client",
 
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
"infoBackground": "{/literal}{$metadata['bgurl']}{literal}", 
"infoContent": "<img src=\"https://atsiofrjlo.cloudimg.io/v7/https://chattersworld.nl/wp-content/uploads/2018/10/cropped-c4all.png\" height=\"30%\" width=\"30%\"><p>U bent terecht gekomen op de HTML5 chat van <a href=\"https://chameleon.chattersworld.nl\">Chattersworld Chameleon</a>.<br> Log gerust in of neem een kijkje op <a href=\"https://chattersworld.nl/\">onze website</a>.</p><p></p>",
"state_key": "kiwi-state", 
"port": 6800, 
"tls": true, 
"direct": true, 
"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
"channel": "#{/literal}{$metadata['name']}{literal}", 
"nick": "" },
"sidebarDefault": "nicklist",
"buffers": {
{/literal}{if $metadata['private'] == "true"}{literal}"block_pms": false {/literal}{/if}{literal}
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
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"><link rel=icon type=image/png href=https://chattersworld.nl/images/favicon.ico><title>Kiwi IRC</title>

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

	</style><style class=embedly-css>.card .hdr {
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
    background-image: linear-gradient(rgba(255,255,255, .75), rgba(255,255,255, .75)), url({/literal}{$metadata['bgurl']}{literal});
	background-size: 100% 100%;
	
	 
}
</style>
{/literal}
<link href=static/css/app.2d629e84d2efa7075243e644916bf1e6.css rel=stylesheet></head><body><noscript><div class=kiwi-noscript-warn>Please enable JavaScript and refresh the page to use this website.</div></noscript><div id=app></div><script type=text/javascript src=static/js/manifest.60f9c2a5150c0d061277.js></script><script type=text/javascript src=static/js/vendor.faef9ab87173dcdcd03f.js></script><script type=text/javascript src=static/js/app.d5783b96a0547387e0f9.js></script>
		{if $metadata['radio'] == "true"}
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<div id="add" class="socialfooter" style="float:left;height:10%; width:50%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
<div id="BbfWjPzRoMSm">
  U laat onze advertenties niet toe
</div>

<script type="text/javascript" src="js/adblock.js?ver=1.6.2"></script>
<script type="text/javascript">

if(!document.getElementById('ehaOmEGYitqn')){
  document.getElementById('BbfWjPzRoMSm').style.display='block';
}

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- side -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9106844814451489"
     data-ad-slot="2999842055"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>		

<script src="radiolibs/luna/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="radiolibs/luna/lunaradio.min.js"></script>

	
        <div id="lunaradio" style='float:right;width:50%; height:70px;
-webkit-border-top-left-radius: 50px;
  -webkit-border-top-right-radius: 50px;
  -webkit-border-bottom-right-radius: 50px;
  -webkit-border-bottom-left-radius: 50px;
  -moz-border-radius-topleft: 50px;
  -moz-border-radius-topright: 50px;
  -moz-border-radius-bottomright: 50px;
  -moz-border-radius-bottomleft: 50px;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  border-bottom-left-radius: 50px;
  border: none;'>
<div id="flashradio" style="height:100px; width:100%;">
Native Flashradio V4
</div>
</div>
        <script>
$("#lunaradio").lunaradio({
	token: "VVpTZmZXZGVpYWReViBgXg==",
	userinterface: "small",
	backgroundcolor: "{$metadata['playerkleur']}",
	fontcolor: "{$metadata['tekstkleur']}",
	hightlightcolor: "#13c4eb",
	fontname: "Open Sans",
	googlefont: "open+sans:300",
	fontratio: "0.4",
	radioname: "{$metadata['radio_name']}",
	scroll: "true",
	coverimage: "https://horus.chattersworld.nl/dist/img/c4all.png",
	coverstyle: "circle",
	usevisualizer: "fake",
	visualizertype: "",
	itunestoken: "1000lIPN",
	metadatatechnic: "stream-icy-meta",
	ownmetadataurl: "",
	streamurl: "{$metadata['radio_link']}",
	streamtype: "{$metadata['radio_type']}",
	icecastmountpoint: "",
	radionomyid: "",
	radionomyapikey: "",
	radiojarid: "",
	radiocoid: "sdef46f462",
	shoutcastpath: "/live",
	shoutcastid: "1",
	streamsuffix: "",
	metadatainterval: "20000",
	volume: "90",
	debug: "false",
	usestreamcorsproxy: "false", 
	corsproxy: "",
});
</script>
		{else}
	<div id="add" class="socialfooter" style="float:left;height:10%; width:100%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
<div id="BbfWjPzRoMSm">
  U laat onze advertenties niet toe
</div>

<script type="text/javascript" src="js/adblock.js?ver=1.6.2"></script>
<script type="text/javascript">

if(!document.getElementById('ehaOmEGYitqn')){
  document.getElementById('BbfWjPzRoMSm').style.display='block';
}

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- side -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9106844814451489"
     data-ad-slot="2999842055"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
{/if}	

		</body></html>