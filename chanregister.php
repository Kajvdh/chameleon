<?php

/**
 * XMLRPC Functions
 *
 * (C) 2003-2019 Anope Team
 * Contact us at team@anope.org
 */

class AnopeXMLRPC
{
	private $Host;

	function __construct($Host)
	{
		$this->Host = $Host;
	}

	/** Run an XMLRPC command. Name should be a query name and params an array of parameters, eg:
	 * $this->RunXMLRPC("checkAuthentication", array("adam", "qwerty"));
	 * If successful returns back an array of useful information.
	 *
	 * Note that $params["id"] is reserved for query ID, you may set it to something if you wish.
	 * If you do, the same ID will be passed back with the reply from Anope.
	 */
	function RunXMLRPC($name, $params)
	{
		$xmlquery = xmlrpc_encode_request($name, $params);
		$context = stream_context_create(array("http" => array(
			"method" => "POST",
			"header" => "Content-Type: text/xml",
			"content" => $xmlquery)));

		$inbuf = file_get_contents($this->Host, false, $context);
		$response = xmlrpc_decode($inbuf);

		if (isset($response))
			return $response;
		return NULL;
	}

	/** Do Command on Service as User, eg:
	 * $anope->DoCommand("ChanServ", "Adam", "REGISTER #adam");
	 * Returns an array of information regarding the command execution, if
	 * If 'online' is set to yes, then the reply to the command was sent to the user on IRC.
	 * If 'online' is set to no, then the reply to the command is in the array member 'return'
	 */
	function DoCommand($Service, $User, $Command)
	{
		return $this->RunXMLRPC("command", array($Service, $User, $Command));
	}

	/** Check an account/nick name and password to see if they are valid
	 * Returns the account display name if valid
	 */
	function CheckAuthentication($Account, $Pass)
	{
		$ret = $this->RunXMLRPC("checkAuthentication", array($Account, $Pass));

		if ($ret && $ret["result"] == "Success")
			return $ret["account"];
		return NULL;
	}

	/* Returns an array of misc stats regarding Anope
	 */
	function DoStats()
	{
		return $this->RunXMLRPC("stats", NULL);
	}

	/* Look up data for a channel
	 * Returns an array containing channel information, or an array of size one
	 * (just containing the name) if the channel does not exist
	 */
	function DoChannel($Channel)
	{
		return $this->RunXMLRPC("channel", array($Channel));
	}

	/* Like DoChannel(), but different.
	 */
	function DoUser($User)
	{
		return $this->RunXMLRPC("user", array($User));
	}
}

$anope = new AnopeXMLRPC("http://5.135.191.70:8085/xmlrpc");
?>
<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Ld6Y4AUAAAAAFi3mHJoDQ2Pg2Mb8MduZ5GNwaH_';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(trim($_POST['login']) == '' || trim($_POST['channel']) == '') {
				$errors =  'Alle velden dienen ingevuld te worden!';
	}else{
		
				$user = $_POST['login'];
				$channel = "#".$_POST['channel'];
				$ret = $anope->DoCommand("ChanServ", "$user", "REGISTER $channel");
				if ($ret && $ret["result"] == "Success") {
					$success = "Succesvol geregistreerd, je kanaal is nu geregistreerd!";
				}else{ 
					$errors = "Er is iets fout gegaan!";
				}

	}
}
} else {
        $errors = 'Captcha not valid!';// Not verified - show form error
    }

}
?>
<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73408859-2', { 'anonymize_ip': true });
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld6Y4AUAAAAAH6uCWtHPw9psZxn8qZ7Rqy2ysWL"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Ld6Y4AUAAAAAH6uCWtHPw9psZxn8qZ7Rqy2ysWL', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>        
        
		<title>..::ChattersWorld Chameleon::.. Channel Register</title>
    </head>
	<!-- New Style -->
	 <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="1-column">
       <!-- new style -->
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
                                        <img src="img/cwo-chameleon2.png" height="50px" alt="branding logo">
                                    </div>
                                    <div class="font-large-1  text-center">
                                        Registeer nu!
                                    </div>
                                </div>
                                <div class="card-content">
									<?php
                        if(isset($_POST['login'])) {
                            if(isset($errors)) {
                                echo '<div class="alert alert-danger alert-dismissable"><strong>' . htmlentities($errors) . '</strong>';
								echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
                            }

                            if(isset($success)) {
                                echo '<div class="alert alert-success alert-dismissable"><strong>' . htmlentities($success) . '</strong>';
								echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
								echo '<meta http-equiv="refresh" content="5; url=index.php" />';
								
                            }

                           
                        } ?>
                                    <div class="card-body">
									<div class="alert alert-success alert-dismissable"><strong>Let op!</strong> Om je kanaal te kunnen registeren, dien je in het kanaal aanwezig te zijn en operator status hebben, heb je de chat reeds aangemaakt maar voldoe je niet aan de eisen, klik dan op login hieronder!
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
                                        <form class="form-horizontal" method="POST" action="">
											<fieldset class="form-group position-relative has-icon-left">
											<script type="text/javascript">

				function CheckSpace(event)
				{
					if(event.which ==32)
					{
						event.preventDefault();
						return false;
					}
				}
				</script>
                                                <input type="text" name="login" class="form-control round" id="user-name" placeholder="Nicknaam" onkeypress="CheckSpace(event)" value="<?php if(!empty($_GET['login'])) : ?><?php echo htmlspecialchars($_GET['login']); ?><?php endif; ?>" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control round" name="channel" placeholder="Kanaal" value="<?php if(!empty($_GET['channel'])) : ?><?php echo strtolower(htmlspecialchars($_GET['channel'])); ?><?php endif; ?>" required>
                                                <div class="form-control-position">
                                                    <i class="ft-hash"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">

                                                </div>
                                                
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Registreer</button>
												<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                            </div>

                                        </form>
										<div class="form-signin">
                <h2 class="form-signin-heading">Of log in:</h2>
				<a href="chat.php?id=<?php if(!empty($_GET['id'])) : ?><?php echo htmlspecialchars($_GET['id']); ?><?php endif; ?>" target="_blank"><button class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" type="submit">Log in</button></a>
			</div>
                                    </div>
                                    

                                    <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1"><span>Heb je al een account? <a href="/login" class="card-link">Log dan in!</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
	
	<!-- End new style -->
	<!-- New Style -->
	
    
            <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END: Page JS-->
        <!-- Vendors 
        <script src="{$fullurl}/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- App functions and actions
        <script src="{$fullurl}/js/app.min.js"></script> -->
    </body>

</html>
