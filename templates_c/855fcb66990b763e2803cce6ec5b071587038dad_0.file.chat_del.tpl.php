<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-21 16:32:08
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_del.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe0bff85f4519_70774971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '855fcb66990b763e2803cce6ec5b071587038dad' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_del.tpl',
      1 => 1601938439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe0bff85f4519_70774971 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- New Style -->
<h3 class="content-header-title mb-0 d-inline-block">Chatbox overdragen</h3>
                    <div class="breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            
                        </div>
                    </div>
                </div>
                
            </div>
				<div class="content-body">
				<section id="configuration">
					<div class="row">
                        <div class="col-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title white">Wie word de nieuwe eigenaar?</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Hier kan je je chatbox overdragen aan iemand anders, het systeem let niet op spelfouten, dus controleer goed of je de nicknaam goed spelt</p>
<!-- end new -->

    <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/del">
        <input type='hidden' name='chat_id' value='<?php echo $_smarty_tpl->tpl_vars['chat_id']->value;?>
' />
        <div class='alert alert-warning alert-dismissable'>
            <h4>Weet je zeker dat je deze chatbox wil verwijderen?</h4>
		</div>
            <p>
            Naam van de chat: <b><?php echo $_smarty_tpl->tpl_vars['chat_name']->value;?>
</b><br />
            <?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?>Eigenaar van de chat: <b><?php echo $_smarty_tpl->tpl_vars['chat_owner']->value;?>
</b><br /><?php }?><br />
            </p>
            
            <button class='btn btn-danger' type='submit'>Ja, verwijder deze chatbox</button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list" class='btn btn-primary'>Nee</a>
        
        
        
    </form>
</div>
</div>
<?php }
}
