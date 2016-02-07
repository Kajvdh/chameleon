<?php
/* Smarty version 3.1.29, created on 2016-02-06 22:40:25
  from "/var/www/html/templates/chat_transfer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b66849bd27c1_79398166',
  'file_dependency' => 
  array (
    'fc36623b91102268d13cf2c000c0eebecb35263a' => 
    array (
      0 => '/var/www/html/templates/chat_transfer.tpl',
      1 => 1454792895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b66849bd27c1_79398166 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('input[type="checkbox"]').bootstrapSwitch();
        $('input').tooltip({placement:'auto',animation:true});
        $('label').tooltip({placement:'auto',animation:true});
        $("#myTab a").click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        });
    });
<?php echo '</script'; ?>
>


<div class="datacontainer" id="data">
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opgelet!</strong> Als je je chatbox aan iemand anders overdraagt, kan jij hier geen aanpassingen meer aan doen!
    </div>
    
    <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/transfer">
        <input type="hidden" name="chat_id" value="<?php echo $_smarty_tpl->tpl_vars['chat_id']->value;?>
" />
        <div class="tab-content" id="myTabContent">
            <!-- ALGEMENE INSTELLINGEN -->
            <div id="algemeen" class="tab-pane fade active in">
                <!-- Naam van de chatbox -->
                <div class="form-group">
                    <label for="username" class="control-label col-sm-3">Gebruikersnaam</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" title="De naam van de gebruiker aan wie je je chat wil overdragen." placeholder="Gebruikersnaam" required>
                    </div>
                </div>

            </div>
        </div>
        <br /><br />
        <button class="btn btn-default" type="submit">Draag chat over</button>
    </form>
    
    
</div>

<?php }
}
