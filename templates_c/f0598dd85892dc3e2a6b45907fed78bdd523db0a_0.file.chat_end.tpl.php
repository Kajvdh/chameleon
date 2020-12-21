<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 18:59:12
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_end.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fde3f70d5a239_60072278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0598dd85892dc3e2a6b45907fed78bdd523db0a' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_end.tpl',
      1 => 1597087864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fde3f70d5a239_60072278 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
 src="dist/jquery.magnific-popup.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
>
	$(document).ready(function() {
		$('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
});

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
