<?php
/* Smarty version 3.1.29, created on 2016-02-07 00:08:47
  from "/var/www/html/templates/chat_does_not_exist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b67cff1fc9b4_59477715',
  'file_dependency' => 
  array (
    'ca10ce61bd407b3cd3bba0759aa25ac753964754' => 
    array (
      0 => '/var/www/html/templates/chat_does_not_exist.tpl',
      1 => 1454792895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b67cff1fc9b4_59477715 ($_smarty_tpl) {
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
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        
        <!-- Custom CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/custom_css/login.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oeps!</strong> Deze chat bestaat niet!
            </div>
        </div>
    </body>

</html><?php }
}
