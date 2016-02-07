<?php
/* Smarty version 3.1.29, created on 2016-02-06 23:12:08
  from "/var/www/html/templates/mainpanel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b66fb871cb90_11822833',
  'file_dependency' => 
  array (
    '3f230cdb9537fe5e37e481577600b9d96d9cac4d' => 
    array (
      0 => '/var/www/html/templates/mainpanel.tpl',
      1 => 1454796598,
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
function content_56b66fb871cb90_11822833 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
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
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/bootstrap-switch.css">
          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/js/bootstrap-switch.js"><?php echo '</script'; ?>
>
          <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
          <![endif]-->
	<?php echo '<script'; ?>
 type="text/javascript" src="../analyticstracking.js"><?php echo '</script'; ?>
>
          
          <!-- Custom CSS -->
          <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/custom_css/mainpanel.css" rel="stylesheet">
          
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
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list">CW ChatCreator</a>
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
                <h1>Chattersweb Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        <?php }?>
      
        

    </div>
  </body>
</html>
<?php }
}
