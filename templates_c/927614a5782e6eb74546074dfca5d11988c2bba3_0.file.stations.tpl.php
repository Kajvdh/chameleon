<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 19:09:16
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/stations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fde41cc89de02_05856808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '927614a5782e6eb74546074dfca5d11988c2bba3' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/stations.tpl',
      1 => 1602612162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fde41cc89de02_05856808 (Smarty_Internal_Template $_smarty_tpl) {
?>[
    {
        "name": "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
",
        "image": "https://horus.chattersworld.nl/dist/img/c4all.png",
        "source": "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];
if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast" || $_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast2") {?>/;mp3<?php }?>",
        "description": "HTML5 Player by Chattersworld"
    }
]
<?php }
}
