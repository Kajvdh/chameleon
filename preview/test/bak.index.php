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
<html><head><meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"><link rel=icon type=image/png href=https://chattersworld.nl/images/favicon.ico><title>Kiwi IRC</title><style>/* target specific styles */
    body {
    	/* disable the 'pull down to refresh' on mobiles */
    	overflow: hidden;
    }</style><style class=embedly-css>.card .hdr {
            display:none;
        }</style><link href=static/css/app.11d36a2967e338558b3a40ec862b1fff.css rel=stylesheet></head><body><div id=app></div><script type=text/javascript src=static/js/manifest.056308f92a4a94041bdb.js></script><script type=text/javascript src=static/js/vendor.b8f457ce992e71787ccb.js></script><script type=text/javascript src=static/js/app.f915560c704d3e70b35c.js></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://chattersworld.nl/webchat/js/nativeflashradiov4.js?v=4.19.03.17"></script>
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
		</body></html>