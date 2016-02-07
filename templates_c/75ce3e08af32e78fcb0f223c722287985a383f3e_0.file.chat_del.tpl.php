<?php
/* Smarty version 3.1.29, created on 2016-02-06 22:40:50
  from "/var/www/html/templates/chat_del.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b6686213f670_98298252',
  'file_dependency' => 
  array (
    '75ce3e08af32e78fcb0f223c722287985a383f3e' => 
    array (
      0 => '/var/www/html/templates/chat_del.tpl',
      1 => 1454792895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b6686213f670_98298252 ($_smarty_tpl) {
?>




<div class="datacontainer" id="data">
    <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/del">
        <input type='hidden' name='chat_id' value='<?php echo $_smarty_tpl->tpl_vars['chat_id']->value;?>
' />
        <div class='alert alert-danger fade in'>
            <h4>Weet je zeker dat je deze chatbox wil verwijderen?</h4>
            <p>
            Naam van de chat: <b><?php echo $_smarty_tpl->tpl_vars['chat_name']->value;?>
</b><br />
            <?php if (isset($_smarty_tpl->tpl_vars['god']->value)) {?>Eigenaar van de chat: <b><?php echo $_smarty_tpl->tpl_vars['chat_owner']->value;?>
</b><br /><?php }?><br />
            </p>
            
            <button class='btn btn-danger' type='submit'>Ja, verwijder deze chatbox</button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list" class='btn btn-default'>Nee</a>
        </div>
        
        
    </form>
</div>

<?php }
}
