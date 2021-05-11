<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat,HTML5 Chat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Chameleon, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="#{$metadata['name']} Chameleon | Chattersworld | Waar chatten, chatten is!" />
<meta property="og:description" content="#{$metadata['name']} Chattersworld Chameleon, deze chat is gemaakt door Chameleon op Chattersworld.nl" />
<meta property="og:url" content="{$fullurl}/chat.php?id={$smarty.get.id}" />

<meta property="og:type" content="article" />
<meta property="og:title" content="..::{$sitename}::.. #{$metadata['name']}" />
<meta property="og:site_name" content="..::{$sitename}::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />
{if $metadata['style'] != "transparent"}
<meta property="og:image" content="{if $metadata['bgurl'] == ""}{$logo}{else}{$metadata['bgurl']}{/if}" />
<link rel="icon" href="{$logo}" sizes="32x32" />
{else}
<link rel="icon" href="{if $metadata['bgurl'] == ""}{$logo}{else}{$metadata['bgurl']}{/if}" sizes="32x32" />
{/if}
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::{$sitename}::.." />
<link rel="canonical" href="{$fullurl}/chat.php?id={$smarty.get.id}" />
<link rel="stylesheet" href="{$fullurl}/dist/magnific-popup.css">
<link rel="stylesheet" href="{$fullurl}/app-assets/css/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
<!-- Kiwi script reloaders -->
<link href="static/css/app.e9352130.css" rel="preload" as="style">
  <link href="static/js/app.16dc8cee.js" rel="preload" as="script">
  <link href="static/js/vendor.5535f0b6.js" rel="preload" as="script">
  <link href="static/css/app.e9352130.css" rel="stylesheet">
<!-- END -->
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
<title>..::Chattersworld Chameleon::.. #{$metadata['name']}</title>
</head>

<body>
	<div class="left">
		<a target="_blank" href="{$fullurl}"><img src="{$logo}" style="z-index: 102;" height="50" alt="Chattersworld"></a>
	</div>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<center><a target="_blank" href="{$fullurl}"><img src="{$logo}" height="100" alt="Chattersworld"></a></center>
		<br>
		{if $metadata['verzoek_url'] != "" && $metadata['radio'] == "true"}
		<a href="{$metadata['verzoek_url']}" data-mfp-src="#test-popup" class="open-popup-link"><i class="zmdi zmdi-playlist-audio"></i>&nbsp;Verzoekje Doen</a>
		<br />
		{else}
		<a target="_blank" href="{$fullurl}"><i class="zmdi zmdi-language-html5"></i>&nbsp;Maak je eigen chatbox!</a>
		{/if}
		<br />
		{if $metadata['radio'] == "true"}
		<a href="{$fullurl}/webplayer.php?id={$smarty.get.id}" target="_new" onclick="window.open('{$fullurl}/webplayer.php?id={$smarty.get.id}','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><i class="zmdi zmdi-hearing"></i>&nbsp;Webplayer</a>
		{/if}
		<br />
		{if $metadata['showstats'] == "true"}
		<a href="https://stats.chattersworld.nl/statistieken/{$metadata['name']}.html" data-mfp-src="#test-popup2" class="open-popup-link"><i class="zmdi zmdi-trending-up"></i>&nbsp;Statistieken</a>
		{/if}
		<br />
		<br />
		<center>
		<br /><br />
		<a href="https://www.newsxs.nl/?source=chattersworld"><img style="border: 1px solid black;" src="https://www.newsxs.nl/images/banner/nl/groot_rechthoek_banner_newsXS.jpg" /></a>
		</center>


	</div>
	<div class="right">
		<span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">MENU&#9776;</span>
	</div>
	<noscript>
		<div class="kiwi-noscript-warn">Please enable JavaScript and refresh the page to use this website.
		</div>
	</noscript>
	<div id="app">
	</div>
	
  <script type="text/javascript" src="static/js/vendor.5535f0b6.js"></script>
  <script type="text/javascript" src="static/js/app.16dc8cee.js"></script>
		<script type="text/javascript">
			function openNav() {
				document.getElementById("mySidenav").style.width = "33%";
			}
			
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
			}
		</script>
		{if $metadata['verzoek_url'] != "" && $metadata['radio'] == "true"}
	<div id="test-popup" class="white-popup mfp-hide">
		<iframe src="{$metadata['verzoek_url']}" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
	</div>
	{/if}
	{if $metadata['showstats'] == "true"}
	<div id="test-popup2" class="white-popup mfp-hide">
		<iframe src="https://stats.chattersworld.nl/statistieken/{$metadata['name']}.html" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
	</div>
	{/if}
	<div class="footer">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>