<!DOCTYPE html><html><head>
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
<html><head>
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
<link rel=icon type=image/png href=https://chattersworld.nl/images/favicon.ico>
<title>Kiwi IRC</title>
<style>/* target specific styles */
    body {
    	/* disable the 'pull down to refresh' on mobiles */
    	overflow: hidden;
    }</style><style class=embedly-css>.card .hdr {
            display:none;
        }
	</style>
<link href=static/css/app.ba3cee7e962d3e97db1e8868085327e9.css rel=stylesheet>
</head>
<body>
<div id=app></div>
<script type=text/javascript src=static/js/manifest.33bcd35151b08787cb5d.js></script>
<script type=text/javascript src=static/js/vendor.3539b787b7d6ba6dc655.js></script>
<script type=text/javascript src=static/js/app.0852b636556566b2b7c3.js></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/nativeflashradiov4.js?v=4.19.03.21"></script>
<ul id="footer">
<li id="footer_home">
<a href="https://www.chattersworld.nl/" target="_blank"><img src="img/footer_home.png" title="Klik hier voor de hoofdpagina" /></a></li>
<li id="footer_home">
<a href="https://mobilechat.chattersworld.nl/?channel=#<?php echo htmlspecialchars($_GET['chan']); ?>" target="_blank"><img src="img/cell-phone-icon-18-256.png" height="32" width="16" title="Klik hier voor de hoofdpagina" /></a></li>
<?php if(!empty($_GET['request'])) : ?>
<li id="footer_home">
<a href="javascript:NewWindow('<?php echo htmlspecialchars($_GET['request']); ?>','Verzoekje doen!','1200','500','center','front');" title="Verzoekje doen">
<img src="img/uitleg.png" title="Klik hier om een verzoekje aan te vragen" /></a></li>
<?php endif; ?>
<?php if(empty($_GET['wplayer'])) : ?>
<li id="footer_home">
<a href="javascript:NewWindow('https://chattersworld.nl/webplayer/index.php?chan=<?php echo htmlspecialchars($_GET['chan']); ?>&radio=<?php echo htmlspecialchars($_GET['radio']); ?><?php if(!empty($_GET['id'])) : ?>&id=<?php echo htmlspecialchars($_GET['id']); ?><?php endif; ?><?php if(!empty($_GET['type'])) : ?>&type=<?php echo htmlspecialchars($_GET['type']); ?><?php endif; ?><?php if(!empty($_GET['mount'])) : ?>&mount=<?php echo htmlspecialchars($_GET['mount']); ?><?php endif; ?>','Webplayer voor <?php echo htmlspecialchars($_GET['chan']); ?>','800','1100','center','front');" title="Chattersworld webplayer voor <?php echo htmlspecialchars($_GET['chan']); ?>">
<img src="img/radio.png" title="Klik hier voor de hoofdpagina" /></a></li>
<?php endif; ?>
<div id="add" class="footer">
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
<div id="playerbottom" class="footer">
<div id="djdisplay">
<div id="flashradio" class="socialfooter" style="height:57x; width:100%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));">
  <font color="white">Hier staat de V4 RadioPlayer van Chattersworld.nl, als u dit niet ziet, gebruikt u een browser die niet compatible is met deze HTML5 RadioPlayer.</font>
</div>
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
			ownsongtitleurl: "https://stats.gezelligkletsen.nl/song.php?url=<?php echo htmlspecialchars($_GET['radio']); ?><?php if(!empty($_GET['mount'])) : ?><?php echo htmlspecialchars($_GET['mount']); ?><?php endif; ?>",
			songinformationinterval:"5000",
			analyzertype: "4",
			corsproxy: "php",
			usestreamcorsproxy: "false"
		});
</script>

<script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
	data-message="Deze chat plaatst cookies om uw webervaring zo plezierig mogelijk te maken. Door verder te gaan gaat u akkoord met ons privacyregelement."
	data-close-text="Ik ga akkoord"
	data-linkmsg="Meer informatie"
	data-cookie="ChattersWorld"
	data-moreinfo="https://www.chattersworld.nl/privacybeleid">
</script>
</body>
</html>