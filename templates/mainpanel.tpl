<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
          <meta http-equic="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- jQuery -->
          <!-- <script src="{$fullurl}/js/jquery-1.11.0.min.js"></script> -->
		      <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" rel="stylesheet">
    <link href="https://www.jquery-az.com/boots/css/bootstrap-colorpicker/bootstrap-colorpicker.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://www.jquery-az.com/boots/css/bootstrap-colorpicker/main.css" rel="stylesheet"> -->

    <script src="//code.jquery.com/jquery-2.2.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{$fullurl}/js/bootstrap-colorpicker.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
          <!-- Bootstrap -->
          <link rel="stylesheet" href="{$fullurl}/css/bootstrap.min.css">
          <link rel="stylesheet" href="{$fullurl}/css/bootstrap-theme.min.css">
          <link rel="stylesheet" href="{$fullurl}/css/bootstrap-switch.css">
          <!-- <script src="{$fullurl}/js/bootstrap.min.js"></script> -->
          <script src="{$fullurl}/js/bootstrap-switch.js"></script>
          <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
	<script type="text/javascript" src="../analyticstracking.js"></script>
          <!-- SEO -->
		  <meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Chameleon, Radio chat, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Ares Verzoekserver, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Chameleon | Chattersworld | Waar chatten, chatten is!" />
<meta property="og:description" content="Chameleon" />
<meta property="og:url" content="https://chameleon.chattersworld.nl" />

<meta property="og:type" content="article" />
<meta property="og:title" content="..::Chattersworld Chameleon::.." />
<meta property="og:site_name" content="..::Chattersworld Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />

<meta property="og:image" content="https://horus.chattersworld.nl/webchat/img/cwobg.jpg" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::Chattersworld Chameleon::.." />
<link rel="canonical" href="https://chameleon.chattersworld.nl" />
<link rel="shortcut icon" href="https://horus.chattersworld.nl/dist/img/c4all-horus.png" sizes="32x32" />
          <!-- Custom CSS -->
          <link href="{$fullurl}/css/custom_css/mainpanel.css" rel="stylesheet">
          
    
    <title>ChattersWorld Chameleon</title>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{$fullurl}/list">CWO Chameleon</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li {if $page == "list" || $page == "edit"}class="active"{/if}><a href="{$fullurl}/list">Je Chatboxen</a></li>
                    <li {if $page == "new"}class="active"{/if}><a href="{$fullurl}/new">Nieuwe Chatbox</a></li>
                    <li {if $page == "settings"}class="active"{/if}><a href="{$fullurl}/settings">Instellingen</a></li>
                    <li {if $page == "help"}class="active"{/if}><a href="{$fullurl}/help">Help</a></li>
                </ul>
                <p class="navbar-text navbar-right">
                    <span class="text-muted">
                        {if isset($login)}
                            <strong>Ingelogd als: </strong>{if isset($god)}<img src='{$fullurl}/admin.png' alt='admin' /><font color='deeppink'><b>{/if} {$login} {if isset($god)}</b></font><img src='{$fullurl}/admin.png' alt='admin' />{/if} (<a href="{$fullurl}/logout">Log uit</a>)
                        {/if}
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="container"><br />
        {if isset($info)}
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ziezo!</strong> {$info}
            </div>
        {/if}
        {if isset($error)}
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oeps!</strong> {$error}
            </div>
        {/if}
        {if isset($success)}
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ziezo!</strong> {$success}
            </div>
        {/if}
        {if isset($page)}
            {if $page=='new' || $page=='edit'}
                {include file='chat_new.tpl'}
            {elseif $page=='del'}
                {include file='chat_del.tpl'}
            {elseif $page=='transfer'}
                {include file='chat_transfer.tpl'}
            {elseif $page=='help'}
                {include file='chat_help.tpl'}
            {elseif $page=='settings'}
                {include file='chat_settings.tpl'}
            {else}
                {include file='chat_list.tpl'}
            {/if}
        
        {else}
            <div class="datacontainer">
                <h1>ChattersWorld Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        {/if}
      
        

    </div>
	<center>
	<footer class="footer hidden-xs-down">
                    <p>© Chattersworld Chameleon All rights reserved. v3.1</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="https://chattersworld.nl">Homepage</a>

                        <a class="nav-link" href="https://wiki.chattersworld.nl">Support</a>

                      
                    </ul>
                </footer></center>
  </body>
</html>
