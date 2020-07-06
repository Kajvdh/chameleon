<?php
/* Smarty version 3.1.29, created on 2020-07-02 12:30:47
  from "/home/stats/chameleon/templates/chat_ads.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5efdb757d298e9_98164057',
  'file_dependency' => 
  array (
    '6d750288f295c92f3213c0665ffe3d14a95a884b' => 
    array (
      0 => '/home/stats/chameleon/templates/chat_ads.tpl',
      1 => 1590785031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efdb757d298e9_98164057 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['metadata']->value['ads_enabled'] == "true") {?>
    <center>
        <?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
        <!-- cham27022016 -->
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
<?php }
}
}
