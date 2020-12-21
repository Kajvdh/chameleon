<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-21 20:32:01
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/mainpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe0f831bd4bf9_68496651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94d2233734d9cba66af81aa6799bc366a65e80d' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/mainpanel.tpl',
      1 => 1608579101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:chat_edit.tpl' => 2,
    'file:chat_del.tpl' => 1,
    'file:chat_transfer.tpl' => 1,
    'file:chat_help.tpl' => 1,
    'file:chat_settings.tpl' => 1,
    'file:chat_list.tpl' => 1,
  ),
),false)) {
function content_5fe0f831bd4bf9_68496651 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
        <title>..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
::..</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/components.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/plugins/forms/wizard.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/forms/selects/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/extensions/toastr.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/tables/datatable/datatables.min.css">

    
    
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
                        
						
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "list" || $_smarty_tpl->tpl_vars['page']->value == "edit") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list">Je Chatboxen</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "new") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/new">Nieuwe Chatbox</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/settings">Instellingen</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "help") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/help">Help</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav float-right">
                         
                        
                        <?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {?>
						<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?><img src="<?php if ($_smarty_tpl->tpl_vars['login']->value == "W0dk4R3dbUll") {
echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/admin.png<?php } else {
echo $_smarty_tpl->tpl_vars['logo']->value;
}?>" alt="avatar"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/images/portrait/small/avatar-s-11.png" alt="avatar"><?php }?><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?><img src="<?php if ($_smarty_tpl->tpl_vars['login']->value == "W0dk4R3dbUll") {
echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/admin.png<?php } else {
echo $_smarty_tpl->tpl_vars['logo']->value;
}?>" alt="avatar"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/images/backgrounds/04.jpg" alt="avatar"><?php }?><span class="user-name text-bold-700 ml-1"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</span><br /></span></a>
                                    <div class="dropdown-divider"></div><span class="user-name text-bold-700 ml-1"><i class="ft-user"></i><small><?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?> Administrator<?php } else { ?> Gebruiker<?php }?></small></span>
									<div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/logout"><i class="ft-power"></i> Log uit</a>
                                </div>
                            </div>
                        </li>
						<?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	
	<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/images/backgrounds/08.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row position-relative">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
                        <h3 class="brand-text">Chameleon</h3>
                    </a></li>
                <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "list" || $_smarty_tpl->tpl_vars['page']->value == "edit") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
				<li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "new") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/new"><i class="ft-message-circle"></i><span class="menu-title" data-i18n="">Nieuwe chatbox</span></a>
                </li>
				<li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/settings"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Instellingen</span></a>
                </li>
				<li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "help") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/help"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Help</span></a>
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
        
        
        <?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'new') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'edit') {?>
				<?php $_smarty_tpl->_subTemplateRender('file:chat_edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'del') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_del.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'transfer') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_transfer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'help') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'settings') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        
        <?php } else { ?>
            <div class="datacontainer">
                <h1>Chattersworld Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        <?php }?>
      
        

    
				</section>
			</div>
		</div>
	</div>
	<footer class="footer footer-static footer-dark navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">© <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 All rights reserved. v6.5 <?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?>Geregistreerd aan: <?php echo $_smarty_tpl->tpl_vars['registeredname']->value;?>
, Verval datum: <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>
, Product: <?php echo $_smarty_tpl->tpl_vars['productname']->value;
}?></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://chattersworld.nl" target="_blank"> Homepage</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://wiki.chattersworld.nl" target="_blank"> Wikipedia</a></li>
            </ul>
        </div>
    </footer>
				         <!-- new style -->
						<!-- BEGIN: Vendor JS-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/vendors.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/sweetalert2.all.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/forms/validation/jquery.validate.min.js?v=1.0" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/core/app-menu.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/core/app.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/scripts/forms/wizard-steps.js?v=1.6" type="text/javascript"><?php echo '</script'; ?>
>
	<?php if ((isset($_smarty_tpl->tpl_vars['success']->value))) {?>
	
	<?php echo '<script'; ?>
>
	$(document).ready(function(){
		toastr.success('<?php echo $_smarty_tpl->tpl_vars['success']->value;?>
', 'Geslaagd!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	<?php echo '</script'; ?>
>
	
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
	
	<?php echo '<script'; ?>
>
	$(document).ready(function(){
		toastr.error('<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
', 'Helaas!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	<?php echo '</script'; ?>
>
	
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['info']->value))) {?>
	
	<?php echo '<script'; ?>
>
	$(document).ready(function(){
		toastr.info('<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
', 'Gelukt!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	<?php echo '</script'; ?>
>
	
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['loggedin']->value))) {?>
	
	<?php echo '<script'; ?>
>
	$(document).ready(function(){
		toastr.success('<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
', 'Gelukt!', {positionClass: 'toast-top-right', containerId: 'toast-top-right', "progressBar": true});
    });
	<?php echo '</script'; ?>
>
	
	<?php }?>
	
<?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php } else { ?>

<?php echo '<script'; ?>
>
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
		<?php echo '</script'; ?>
>

<?php }?>	
<?php echo '<script'; ?>
>
	$(function () {
		$('#simple-color-picker').colorpicker();
		$('#simple-color-picker2').colorpicker();
		$(".color-picker__value").colorpicker(),
                $("body").on("change", ".color-picker__value", function () {
                    $(this).closest(".color-picker").find(".color-picker__preview").css("backgroundColor", $(this).val());
                });
	});
<?php echo '</script'; ?>
>				
  </body>
</html>
<?php }
}
