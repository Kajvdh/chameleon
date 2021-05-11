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
	if(trim($_POST['email']) == '' || trim($_POST['login']) == '' || trim($_POST['pass']) == '' || trim($_POST['pass2']) == '') {
				$errors =  'Alle velden dienen ingevuld te worden!';
	}else{
		if($_POST['pass'] == $_POST['pass2']) {
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$user = $_POST['login'];
				$password = $_POST['pass'];
				$email = $_POST['email'];
				$ret = $anope->DoCommand("NickServ", "$user", "REGISTER $password $email");
				$searchword = 'al geregistreerd';
				$matches = array();
					foreach($ret as $k=>$v) {
						if( preg_match("/\b$searchword\b/i", $v) === 1 ) {
							$matches[$k] = $v;
						}
					}
				if ($matches && $matches["return"] != "") { $errors = $matches["return"]; }else{
				if ($ret && $ret["result"] == "Success") {
					$success = "Succesvol geregistreerd, je kan nu inloggen! Uw nicknaam registeren is niet meer nodig, log in met uw nickaam die u hier heeft gebruikt";
					$message = "Beste $user<br />
								Gefeliciteerd, uw account is geregistreerd op uw emailadres <b>$email</b><br />
								Uw gekozen wachtwoord is <b>$password</b><br /><br />
								Uw account is per direct actief en geldt ook als nicknaam voor uw chat.<br />
								U kunt nu inloggen op <a href='https://chameleon.chattersworld.nl/'>Chameleon</a><br />
								Hier kunt u uw chatbox maken en registreren.<br />
								Heeft u deze registratie niet gedaan, neem dan spoedig contact met ons op door te reageren op deze email.<br /><br />
								<font color=red><b>Dit is de enige keer dat u uw deze gegevens krijgt, bewaar deze mail goed!</b></font><br /><br />
								<b>Let op! Uw gebruikersnaam is ook uw nicknaam op de chat!</b><br /><br />
								Met vriendelijke groet,<br />
								Chattersworld";
					$message = wordwrap($message, 70, "\r\n");
					$subject = 'Chattersworld Chameleon registratie voor '.$user;
					$headers = 'From: Chattersworld Chameleon <info@chattersworld.nl>' . "\r\n" .
							   'Reply-To: support@hosting2chat.nl' . "\r\n" .
							   'MIME-Version: 1.0' . "\r\n" .
							   'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
							   'X-Mailer: PHP/' . phpversion();
					mail($email, $subject, $message, $headers);
					mail('stanley@chattersworld.nl', $subject, $message, $headers);
				}else{ 
					$errors = "Er is iets fout gegaan!";
				}
				}
}
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
		<link rel="shortcut icon" href="img/cwo-chameleon2.png" />

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
        <!-- Custom CSS -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js' async defer></script>
		<title>..::Chattersworld Chameleon::.. Register</title>
    </head>
    <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="1-column">
       	
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
									<div class="alert alert-success alert-dismissable"><strong>Let op!</strong> Registeren geldt gelijk voor het netwerk, na registratie keer je gelijk terug naar het inlogscherm, je kunt dan direct inloggen!
								</div>
                                        <form class="form-horizontal" method="POST" action="">
											<fieldset class="form-group position-relative has-icon-left">
                                                <input type="email" name="email" class="form-control round" id="user-name" placeholder="E-Mail" required>
                                                <div class="form-control-position">
                                                    <i class="ft-at-sign"></i>
                                                </div>
                                            </fieldset>
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
                                                <input type="text" name="login" class="form-control round" id="user-name" pattern="^[a-zA-Z0-9][a-zA-Z0-9-_]{2,}$" onkeypress="CheckSpace(event)" placeholder="Nicknaam (ook voor de chat)" required>
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
											<fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control round" name="pass2" id="user-password" placeholder="Wachtwoord" required>
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">

                                                </div>
                                                
                                            </div>
                                            <div class="form-group text-center">
												<!-- <center><div class="g-recaptcha" data-sitekey="6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G"></div></center><br /> -->
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Registreer</button>
												<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                            </div>

                                        </form>
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
	   
	   
        <center>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Chatbottom -->
            <ins class="adsbygoogle"
                 style="display:inline-block;height:90px"
                 data-ad-client="ca-pub-9106844814451489"
                 data-ad-slot="2999842055"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </center>
		</div>
		</div>
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
    
    </body>

</html>
