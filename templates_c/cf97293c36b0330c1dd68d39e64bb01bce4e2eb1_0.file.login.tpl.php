<?php
/* Smarty version 3.1.29, created on 2020-06-11 09:17:23
  from "/home/stats/chameleon/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee1da83b0f5d0_77692507',
  'file_dependency' => 
  array (
    'cf97293c36b0330c1dd68d39e64bb01bce4e2eb1' => 
    array (
      0 => '/home/stats/chameleon/templates/login.tpl',
      1 => 1591710335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1da83b0f5d0_77692507 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equic="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/bootstrap-theme.min.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
	<?php echo '<script'; ?>
 type="text/javascript" src="../analyticstracking.js"><?php echo '</script'; ?>
>        
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
        
        <!-- Custom CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/custom_css/login.css" rel="stylesheet">
		<title>..::ChattersWorld Chameleon::.. Login</title>
    </head>
    <body>
        
        <div class="container">
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oeps!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
            <?php }?>
            <form class="form-signin" role="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/login">
                <h2 class="form-signin-heading">Inloggen met uw Chat gegevens:</h2>
                <input type="text" class="form-control" name="login" placeholder="Nicknaam" required autofocus>
                <input type="password" class="form-control" name="pass" placeholder="Wachtwoord" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
				
            </form>
			<form class="form-signin" role="form" method="" action="register.php">
			<h2 class="form-signin-heading">Nog geen account?</h2>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Registreer</button>
        </div>
        <center>
            <?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
            <!-- Chatbottom -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-9106844814451489"
                 data-ad-slot="2999842055"></ins>
            <?php echo '<script'; ?>
>
            (adsbygoogle = window.adsbygoogle || []).push({});
            <?php echo '</script'; ?>
>
        </center>
    </body>

</html>
<?php }
}
