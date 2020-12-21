<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link rel="shortcut icon" href="{$logo}" />
		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
        <title>..::{$sitename}::..</title>
		<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/components.css">
    
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/plugins/forms/wizard.css">
    
    <link rel="stylesheet" type="text/css" href="{$fullurl}/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/forms/selects/select2.min.css">
	<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" href="{$fullurl}/app-assets/vendors/js/extensions/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
	<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/extensions/toastr.css">
	<link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/tables/datatable/datatables.min.css">

    
    
		</head>


  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
        <!-- new style -->
		<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"> </i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        
						
						<li {if $page == "list" || $page == "edit"}class="active"{else}class="mega-dropdown nav-item d-none d-md-block"{/if}><a class="dropdown-toggle nav-link" href="{$fullurl}/list">Je Chatboxen</a></li>
						<li {if $page == "new"}class="active"{else}class="mega-dropdown nav-item d-none d-md-block"{/if}><a class="dropdown-toggle nav-link" href="{$fullurl}/new">Nieuwe Chatbox</a></li>
						<li {if $page == "settings"}class="active"{else}class="mega-dropdown nav-item d-none d-md-block"{/if}><a class="dropdown-toggle nav-link" href="{$fullurl}/settings">Instellingen</a></li>
						<li {if $page == "help"}class="active"{else}class="mega-dropdown nav-item d-none d-md-block"{/if}><a class="dropdown-toggle nav-link" href="{$fullurl}/help">Help</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav float-right">
                         
                        
                        {if isset($login)}
						<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online">{if isset($god)}<img src="{if $login == "W0dk4R3dbUll"}{$fullurl}/admin.png{else}{$logo}{/if}" alt="avatar">{else}<img src="{$fullurl}/app-assets/images/portrait/small/avatar-s-11.png" alt="avatar">{/if}<i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online">{if isset($god)}<img src="{if $login == "W0dk4R3dbUll"}{$fullurl}/admin.png{else}{$logo}{/if}" alt="avatar">{else}<img src="{$fullurl}/app-assets/images/backgrounds/04.jpg" alt="avatar">{/if}<span class="user-name text-bold-700 ml-1">{$login}</span><br /></span></a>
                                    <div class="dropdown-divider"></div><span class="user-name text-bold-700 ml-1"><i class="ft-user"></i><small>{if isset($god)} Administrator{else} Gebruiker{/if}</small></span>
									<div class="dropdown-divider"></div><a class="dropdown-item" href="{$fullurl}/logout"><i class="ft-power"></i> Log uit</a>
                                </div>
                            </div>
                        </li>
						{/if}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	
	<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{$fullurl}/app-assets/images/backgrounds/08.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row position-relative">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{$fullurl}/list"><img class="brand-logo" alt="Chameleon admin logo" src="{$logo}" />
                        <h3 class="brand-text">Chameleon</h3>
                    </a></li>
                <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item {if $page == "list" || $page == "edit"}active{/if}"><a href="{$fullurl}/list"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
				<li class=" nav-item {if $page == "new"}active{/if}"><a href="{$fullurl}/new"><i class="ft-message-circle"></i><span class="menu-title" data-i18n="">Nieuwe chatbox</span></a>
                </li>
				<li class=" nav-item {if $page == "settings"}active{/if}"><a href="{$fullurl}/settings"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Instellingen</span></a>
                </li>
				<li class=" nav-item {if $page == "help"}active{/if}"><a href="{$fullurl}/help"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Help</span></a>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
		<!-- end new style -->
		
		<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    
		 <br />
        
        
        {if isset($page)}
            {if $page=='new'}
                {include file='chat_edit.tpl'}
			{elseif $page=='edit'}
				{include file='chat_edit.tpl'}
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
                <h1>Chattersworld Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        {/if}
      
        

    
				</section>
			</div>
		</div>
	</div>
	<footer class="footer footer-static footer-dark navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">© {$sitename} All rights reserved. v6.5 {if isset($god)}Geregistreerd aan: {$registeredname}, Verval datum: {$nextduedate}, Product: {$productname}{/if}</span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://chattersworld.nl" target="_blank"> Homepage</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://wiki.chattersworld.nl" target="_blank"> Wikipedia</a></li>
            </ul>
        </div>
    </footer>
				         <!-- new style -->
						<!-- BEGIN: Vendor JS-->
    <script src="{$fullurl}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="{$fullurl}/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/vendors/js/extensions/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="{$fullurl}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="{$fullurl}/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <script src="{$fullurl}/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/vendors/js/extensions/sweetalert2.all.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/vendors/js/forms/validation/jquery.validate.min.js?v=1.0" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{$fullurl}/app-assets/js/core/app.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
	<script src="{$fullurl}/app-assets/js/scripts/forms/wizard-steps.js?v=1.6" type="text/javascript"></script>
	{if isset($success)}
	{literal}
	<script>
	$(document).ready(function(){
		toastr.success('{/literal}{$success}{literal}', 'Geslaagd!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	</script>
	{/literal}
	{/if}
	{if isset($error)}
	{literal}
	<script>
	$(document).ready(function(){
		toastr.error('{/literal}{$error}{literal}', 'Helaas!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	</script>
	{/literal}
	{/if}
	{if isset($info)}
	{literal}
	<script>
	$(document).ready(function(){
		toastr.info('{/literal}{$info}{literal}', 'Gelukt!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	</script>
	{/literal}
	{/if}
	{if isset($loggedin)}
	{literal}
	<script>
	$(document).ready(function(){
		toastr.success('{/literal}{$login}{literal}', 'Gelukt!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	</script>
	{/literal}
	{/if}
	
{if isset($god)}
{literal}
<script>
$(document).ready(function() {
    $('#data-table2').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
        },
		
		"pageLength" : 25,
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Alles"]],
		"responsive": true,
		"scrollY":        false,
			"scrollX":        false,
			"scrollCollapse": false,
			"paging":         true,
			"fixedColumns":   true,
		"fixedHeader": {
				"header": false,
				"headerOffset": $('#header').height()
			},
		"order": [[ 7, "desc" ]],
    } );
	
} );
</script>
{/literal}
{else}
{literal}
<script>
		$(document).ready(function() {
				$('#data-table2').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
					},
					
					"pageLength" : 25,
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Alles"]],
					"responsive": true,
					"scrollY":        true,
					"scrollX":        false,
					"scrollCollapse": false,
					"paging":         true,
					"fixedColumns":   true,
					"fixedHeader": {
						"header": false,
						"headerOffset": $('#header').height()
					},
				} );
	
		} );
		</script>
{/literal}
{/if}	
<script>
	$(function () {
		$('#simple-color-picker').colorpicker();
		$('#simple-color-picker2').colorpicker();
		$(".color-picker__value").colorpicker(),
                $("body").on("change", ".color-picker__value", function () {
                    $(this).closest(".color-picker").find(".color-picker__preview").css("backgroundColor", $(this).val());
                });
	});
</script>				
  </body>
</html>
