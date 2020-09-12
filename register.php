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
				if ($ret && $ret["result"] == "Success") {
					$success = "Succesvol geregistreerd, je kan nu inloggen!";
				}else{ 
					$errors = "Er is iets fout gegaan!";
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
        <meta charset="utf-8">
        <meta http-equic="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery -->
        <script src="js/jquery-1.11.0.min.js"></script>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<script type="text/javascript" src="analyticstracking.js"></script>        
        <!-- SEO -->
		<meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Ares Verzoekserver, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Chameleon | Chattersworld | Waar chatten, chatten is!" />
<meta property="og:description" content="Chameleon, de chat creator die iedereen kent, maak nu je gratis chatbox aan op chattersworld." />
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
<link rel="icon" href="https://horus.chattersworld.nl/dist/img/c4all-horus.png" sizes="32x32" />
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
        <link href="css/custom_css/login.css" rel="stylesheet">
		<title>..::ChattersWorld Chameleon::.. register</title>
    </head>
    <body>
        
        <div class="container">
                
								<div class="alert alert-success alert-dismissable"><strong>Let op!</strong> Registeren geldt gelijk voor het netwerk, na registratie keer je gelijk terug naar het inlogscherm, je ontvangt geen bevestiging!
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
								
								
                            
                
                
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
            
            
            <form class="form-signin" role="form" method="POST" action="">
                <h2 class="form-signin-heading">Registreer voor Chattersworld:</h2>
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
				<input type="email" class="form-control" name="email" placeholder="E-mail adres" required autofocus><br />
                <input type="text" class="form-control" name="login" placeholder="Nicknaam" onkeypress="CheckSpace(event)" required><br />
				<input type="password" class="form-control" name="pass" placeholder="Wachtwoord" required><br />
				<input type="password" class="form-control" name="pass2" placeholder="Herhaal Wachtwoord" required>
				
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registreer</button>
				<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
			<form class="form-signin" role="form" method="" action="/">
                <h2 class="form-signin-heading">Of log in:</h2>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
				</form>

        </div>
        <center>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Chatbottom -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-9106844814451489"
                 data-ad-slot="2999842055"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </center>
    </body>

</html>
