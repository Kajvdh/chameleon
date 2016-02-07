<?php
/* Smarty version 3.1.29, created on 2016-02-06 23:08:17
  from "/var/www/html/templates/chat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b66ed141d5e2_64690553',
  'file_dependency' => 
  array (
    '489557be028613496769b290ffa30b58a104a803' => 
    array (
      0 => '/var/www/html/templates/chat.tpl',
      1 => 1454796453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b66ed141d5e2_64690553 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="de" />
 <meta name="author" content="Valentin Manthei - lightIRC.com" />
 <title><?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
</title>
 <?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript" src="../analyticstracking.js"><?php echo '</script'; ?>
>

 <style type="text/css">
	html { height: 100%; overflow: hidden; }
	body { height:100%;
               margin:0;
               padding:0;
               background-color:<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];?>
;	}
 </style>
</head>

<body>
 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>

 <?php echo '<script'; ?>
 type="text/javascript">
	swfobject.embedSWF("<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lightIRC.swf", "lightIRC", "100%", "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['height'];?>
%", "10.0.0", "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/expressInstall.swf", params);
 <?php echo '</script'; ?>
>
<?php }
}
