<?php
/* Smarty version 3.1.29, created on 2016-02-06 23:12:09
  from "/var/www/html/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b66fb92b3bc4_65346260',
  'file_dependency' => 
  array (
    '8f904b3e8344d6af669cd87649a1c604f9b110e0' => 
    array (
      0 => '/var/www/html/templates/login.tpl',
      1 => 1454796586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b66fb92b3bc4_65346260 ($_smarty_tpl) {
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
	<?php echo '<script'; ?>
 type="text/javascript" src="../analyticstracking.js"><?php echo '</script'; ?>
>        
        
        
        <!-- Custom CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/css/custom_css/login.css" rel="stylesheet">
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
                <h2 class="form-signin-heading">Log aub in</h2>
                <input type="text" class="form-control" name="login" placeholder="Nicknaam" required autofocus>
                <input type="password" class="form-control" name="pass" placeholder="Wachtwoord" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div>
    </body>

</html>
<?php }
}
