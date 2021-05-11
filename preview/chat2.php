<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
// header('content-type: application/json; charset=utf-8');
?>
<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?>
<?php
$channel = "";
if (!isset($_GET['chan'])) {
    die("Geen kanaalnaam opgegeven");
}
else {
    $channel = "#".$_GET['chan'];
}
 
$forbiddenchans = array("#staff","#services","#X","#X.links","#services-channels","#services-quits","#X.invites");
 
if (in_array($channel, $forbiddenchans)) {
    header('Location: https://chattersworld.nl');
    die();
}
?>
<?php
if (!empty($_GET['chan'])) {
    $channel = $_GET['chan'];    
}else{  
    header('Location: https://chattersworld.nl/chatboxen/');
    die();
}
?>

<?php
if (!empty($_GET['bg'])) {
    $bg = $_GET['bg'];    
}else{  
    $bg = "../webchat/img/cwobg.jpg";
}
?>
<!DOCTYPE html><html><head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9106844814451489",
          enable_page_level_ads: true
     });
</script>
<!-- Facebook Pixel Code -->
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
<script name="kiwiconfig">
{"startupScreen": "welcome",
"windowTitle": "Chattersworld - <?php if(!empty($_GET['chan'])) : ?>#<?php echo htmlspecialchars($_GET['chan']); ?><?php endif; ?> The web IRC client",
"kiwiServer": "https://gateway.chattersworld.nl:1085/webirc/kiwiirc/", 
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
"infoBackground": "<?php echo $bg; ?>", 
"infoContent": "Chattersworld IRC Mobile cliënt",
"state_key": "kiwi-state", 
"port": 6697, 
"tls": true, 
"direct": false, 
"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
"channel": "<?php if(!empty($_GET['chan'])) : ?>#<?php echo htmlspecialchars($_GET['chan']); ?><?php endif; ?>", 
"nick": "" },
"sidebarDefault": "nicklist",
"buffers": {
<?php if(!empty($_GET['query'])  && $_GET['query'] == "false") : ?>"block_pms": false <?php endif; ?>
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
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"><link rel=icon type=image/png href=https://chattersworld.nl/images/favicon.ico><title>Kiwi IRC</title><style>/* target specific styles */
    body {
    	/* disable the 'pull down to refresh' on mobiles */
    	overflow: hidden;
		background-color: black;
    }
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
z-index:999;
}

	</style><style class=embedly-css>.card .hdr {
            display:none;
		   }
		   
		    .kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/owner.png)
}
 .kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/admin.png)
}
 .kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/operator.png)
}
 .kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/halfop.png)
}
 .kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/voice.png)
}
.kiwi-messagelist {
    background-image: linear-gradient(rgba(255,255,255, .75), rgba(255,255,255, .75)), url(<?php echo $bg; ?>);
	background-size: 100% 100%;
	
	 
}
</style><link href=static/css/app.2d629e84d2efa7075243e644916bf1e6.css rel=stylesheet></head><body><noscript><div class=kiwi-noscript-warn>Please enable JavaScript and refresh the page to use this website.</div></noscript><div id=app></div><script type=text/javascript src=static/js/manifest.60f9c2a5150c0d061277.js></script><script type=text/javascript src=static/js/vendor.faef9ab87173dcdcd03f.js></script><script type=text/javascript src=static/js/app.d5783b96a0547387e0f9.js></script>
		<?php if(!empty($_GET['radio'])) : ?>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<div id="add" class="socialfooter" style="float:left;height:10%; width:40%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
<div id="BbfWjPzRoMSm">
  U laat onze advertenties niet toe
</div>

<script type="text/javascript" src="adblock.js?ver=1.6.2"></script>
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

<script type="text/javascript" src="js/nativeflashradiov4.js?v=4.20.03.04"></script>
		<div id="flashradio" class="socialfooter" style="float:right;height:10%; width:50%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
  <font color="red">Hier staat de V4 RadioPlayer van Chattersworld.nl, als u dit niet ziet, gebruikt u een browser die niet compatible is met deze HTML5 RadioPlayer.</font>
</div>
<script>
$("#flashradio").flashradio({
			token: "ZGlidXVmc3R4cHNtZS9vbQE=",
			themecolor: "#800000", 
			themefontcolor: "#ffffff",
			streamurl: "http://<?php echo htmlspecialchars($_GET['radio']); ?>",
			titlefontname:"Roboto", 
			titlegooglefontname:"Roboto:100",
			songfontname:"Oswald",
			songgooglefontname:"Oswald:400:latin,latin-ext",
			<?php if(!empty($_GET['type'])) : ?>streamtype:"<?php echo htmlspecialchars($_GET['type']); ?>",<?php endif; ?>
			<?php if(!empty($_GET['id'])) : ?>streamid: "<?php echo htmlspecialchars($_GET['id']); ?>",<?php endif; ?>
			<?php if(!empty($_GET['mount'])) : ?>mountpoint: "<?php echo htmlspecialchars($_GET['mount']); ?>",<?php endif; ?>
			scroll: "auto", 
			autoplay: "true", 
			debug: "true", 
			affiliatetoken: "1000lIPN",
			useanalyzer: "fake",
			radioname: "<?php echo htmlspecialchars($_GET['chan']); ?>",
			radiocover :"https://www.chattersworld.nl/images/c4all.png",
			
			songinformationinterval:"5000",
			analyzertype: "4",
			corsproxy: "php",
			usestreamcorsproxy: "false"
		});
</script>
<?php endif; ?>
<?php if(empty($_GET['radio'])) : ?>
<div id="add" class="socialfooter" style="height:10%; width:40%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
<div id="BbfWjPzRoMSm">
  U laat onze advertenties niet toe
</div>

<script type="text/javascript" src="adblock.js?ver=1.6.2"></script>
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
<?php endif; ?>
		</body></html>