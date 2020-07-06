<?php
/* Smarty version 3.1.29, created on 2020-07-02 13:37:02
  from "/home/stats/chameleon/templates/mainpanel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5efdc6de611a59_01797228',
  'file_dependency' => 
  array (
    'd18da468e4d95fb43c67dceb359585a66065a33f' => 
    array (
      0 => '/home/stats/chameleon/templates/mainpanel.tpl',
      1 => 1591530660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:chat_new.tpl' => 1,
    'file:chat_del.tpl' => 1,
    'file:chat_transfer.tpl' => 1,
    'file:chat_help.tpl' => 1,
    'file:chat_settings.tpl' => 1,
    'file:chat_list.tpl' => 1,
  ),
),false)) {
function content_5efdc6de611a59_01797228 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
          <meta http-equic="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- jQuery -->
          <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/jquery-1.11.0.min.js"><?php echo '</script'; ?>
> -->
		      <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" rel="stylesheet">
    <link href="https://www.jquery-az.com/boots/css/bootstrap-colorpicker/bootstrap-colorpicker.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://www.jquery-az.com/boots/css/bootstrap-colorpicker/main.css" rel="stylesheet"> -->

    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-2.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
          <!-- Bootstrap -->
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/bootstrap.min.css">
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/bootstrap-theme.min.css">
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/bootstrap-switch.css">
          <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/bootstrap-switch.js"><?php echo '</script'; ?>
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
          <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/custom_css/mainpanel.css" rel="stylesheet">
          
    
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
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list">CWO Chameleon</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "list" || $_smarty_tpl->tpl_vars['page']->value == "edit") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list">Je Chatboxen</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "new") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/new">Nieuwe Chatbox</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/settings">Instellingen</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "help") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/help">Help</a></li>
                </ul>
                <p class="navbar-text navbar-right">
                    <span class="text-muted">
                        <?php if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
                            <strong>Ingelogd als: </strong><?php if (isset($_smarty_tpl->tpl_vars['god']->value)) {?><img src='<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/admin.png' alt='admin' /><font color='deeppink'><b><?php }?> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['god']->value)) {?></b></font><img src='<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/admin.png' alt='admin' /><?php }?> (<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/logout">Log uit</a>)
                        <?php }?>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="container"><br />
        <?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ziezo!</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oeps!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ziezo!</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'new' || $_smarty_tpl->tpl_vars['page']->value == 'edit') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:chat_new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'del') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:chat_del.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'transfer') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:chat_transfer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'help') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:chat_help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'settings') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:chat_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } else { ?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:chat_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php }?>
        
        <?php } else { ?>
            <div class="datacontainer">
                <h1>ChattersWorld Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        <?php }?>
      
        

    </div>
	<center>
	<footer class="footer hidden-xs-down">
                    <p>© Chattersworld Chameleon All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="https://chattersworld.nl">Homepage</a>

                        <a class="nav-link" href="https://wiki.chattersworld.nl">Support</a>

                      
                    </ul>
                </footer></center>
  </body>
</html>
<?php }
}
