<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 19:00:48
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fde3fd0af8951_31364575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d4c89abf44e8e390d851720ddd560b19e1de92' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/login.tpl',
      1 => 1602019817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fde3fd0af8951_31364575 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    
<!--Designed By ALpha-->
<head>
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/img/cwo-chameleon2.png" />

        <!-- Vendor styles -->
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/app.min.css"> -->
		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/pages/login-register.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/assets/css/style.css">
		<title>..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
::.. Login</title>
    </head>

    <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="1-column">
        
		
		<!-- new style -->
		
		<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="text-center mb-1">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/img/cwo-chameleon2.png" height="50px" alt="branding logo">
                                    </div>
                                    <div class="font-large-1  text-center">
                                        Chameleon Inloggen
                                    </div>
                                </div>
                                <div class="card-content">
									<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
				<div class="alert alert-danger alert-dismissable"><strong>Oeps!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				</div>
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['success']->value))) {?>
				<div class="alert alert-danger alert-dismissable"><strong>Ziezo!</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

				</div>
				<?php } else { ?>
				<div class="alert alert-warning alert-dismissable"><strong>Oeps!</strong> Gelieve eerst inloggen!
				</div>
				<?php }?>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/login">
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" name="login" class="form-control round" id="user-name" placeholder="Nicknaam" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control round" name="pass" id="user-password" placeholder="Wachtwoord" required>
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">

                                                </div>
                                                
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                    

                                    <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1"><span>Nog geen account ? <a href="register.php" class="card-link">Registreer hier</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
	
	<!-- End new style -->

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
		<!-- BEGIN: Vendor JS-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/vendors.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/core/app-menu.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/core/app.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- END: Page JS-->
        <!-- Vendors 
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/vendors/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/vendors/bower_components/popper.js/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!-- App functions and actions
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/app.min.js"><?php echo '</script'; ?>
> -->
    </body>

<!--Designed By ALpha-->
</html><?php }
}
