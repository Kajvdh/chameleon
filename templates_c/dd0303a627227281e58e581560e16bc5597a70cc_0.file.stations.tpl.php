<?php
/* Smarty version 3.1.29, created on 2020-07-02 13:27:46
  from "/home/stats/chameleon/templates/stations.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5efdc4b2603133_78972077',
  'file_dependency' => 
  array (
    'dd0303a627227281e58e581560e16bc5597a70cc' => 
    array (
      0 => '/home/stats/chameleon/templates/stations.tpl',
      1 => 1593689248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efdc4b2603133_78972077 ($_smarty_tpl) {
?>
[
    {
        "name": "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
",
        "image": "https://horus.chattersworld.nl/dist/img/c4all.png",
        "source": "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];?>
/;mp3",
        "description": "HTML5 Player by Chattersworld"
    }
]
<?php }
}
