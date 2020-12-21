<!DOCTYPE html>
<html lang="en">
    
<!--Designed By ALpha-->
<head>
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		<link rel="shortcut icon" href="{$fullurl}/img/cwo-chameleon2.png" />

        <!-- Vendor styles -->
        <!-- <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <!-- <link rel="stylesheet" href="{$fullurl}/css/app.min.css"> -->
		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{$fullurl}/app-assets/css/pages/login-register.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{$fullurl}/assets/css/style.css">
		<title>..::{$sitename}::.. Login</title>
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
                                        <img src="{$fullurl}/img/cwo-chameleon2.png" height="50px" alt="branding logo">
                                    </div>
                                    <div class="font-large-1  text-center">
                                        Chameleon Inloggen
                                    </div>
                                </div>
                                <div class="card-content">
									{if isset($error)}
				<div class="alert alert-danger alert-dismissable"><strong>Oeps!</strong> {$error}
				</div>
				{elseif isset($success)}
				<div class="alert alert-danger alert-dismissable"><strong>Ziezo!</strong> {$success}
				</div>
				{else}
				<div class="alert alert-warning alert-dismissable"><strong>Oeps!</strong> Gelieve eerst inloggen!
				</div>
				{/if}
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{$fullurl}/login">
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
    <script src="{$fullurl}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{$fullurl}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{$fullurl}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{$fullurl}/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{$fullurl}/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END: Page JS-->
        <!-- Vendors 
        <script src="{$fullurl}/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- App functions and actions
        <script src="{$fullurl}/js/app.min.js"></script> -->
    </body>

<!--Designed By ALpha-->
</html>