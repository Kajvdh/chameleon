<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
          <meta http-equic="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- jQuery -->
          <script src="{$fullurl}/js/jquery-1.11.0.min.js"></script>

          <!-- Bootstrap -->
          <link rel="stylesheet" href="{$fullurl}/css/bootstrap.min.css">
          <link rel="stylesheet" href="{$fullurl}/css/bootstrap-theme.min.css">
          <link rel="stylesheet" href="{$fullurl}/css/bootstrap-switch.css">
          <script src="{$fullurl}/js/bootstrap.min.js"></script>
          <script src="{$fullurl}/js/bootstrap-switch.js"></script>
          <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
	<script type="text/javascript" src="../analyticstracking.js"></script>
          
          <!-- Custom CSS -->
          <link href="{$fullurl}/css/custom_css/mainpanel.css" rel="stylesheet">
          
    <link rel="shortcut icon" href="favicon.ico">
    <title>Chattersweb ChatCreator</title>
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
                <a class="navbar-brand" href="{$fullurl}/list">CW ChatCreator</a>
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
                <h1>Chattersweb Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        {/if}
      
        

    </div>
  </body>
</html>
