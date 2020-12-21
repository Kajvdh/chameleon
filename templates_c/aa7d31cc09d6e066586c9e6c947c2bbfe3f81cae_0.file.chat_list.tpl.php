<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 19:05:39
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fde40f3cd26f3_69182475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa7d31cc09d6e066586c9e6c947c2bbfe3f81cae' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_list.tpl',
      1 => 1603750017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fde40f3cd26f3_69182475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/chatters/domains/chattersworld.nl/public_html/chameleon/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
                    <h3 class="content-header-title mb-0 d-inline-block">Je Chatboxen</h3>
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
                                    <h4 class="card-title white">Chatbox lijst</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text white">Hier vind je al je chatboxen die jij gemaakt hebt</p>
                                        <div class="table-responsive">
										<?php ob_start();
echo count($_smarty_tpl->tpl_vars['ids']->value);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 0) {?>
                                            <table id="data-table2" class="table compact">
												<thead>
													<tr>
														<td style="vertical-align:middle"><strong>ID</strong></td><td style="vertical-align:middle"><strong>Achtergrond</strong></td><td style="vertical-align:middle"><strong>Style</strong></td><td style="vertical-align:middle"><center><strong>Naam</strong></center></td><?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?><td style="vertical-align:middle"><strong>Eigenaar</strong></td><td style="vertical-align:middle"><strong>Speler</strong></td><td style="vertical-align:middle"><center><strong>Aantal keer bezocht</strong></center></td><td style="vertical-align:middle"><center><strong>Laatst bezocht</strong></center></td><?php }?><td style="vertical-align:middle"><strong>Chat/HTML5</strong></td><td style="vertical-align:middle"><strong>Chat Opties</strong></td>
													</tr>
												</thead><tbody>

												<?php
$__section_chat_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ids']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_chat_0_total = $__section_chat_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_chat'] = new Smarty_Variable(array());
if ($__section_chat_0_total !== 0) {
for ($__section_chat_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] = 0; $__section_chat_0_iteration <= $__section_chat_0_total; $__section_chat_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']++){
?>
         
												<tr style="align:center;">
													<td style="vertical-align:middle"><center><span class="badge badge-pill bg-info float-right"><?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</span></center></td>
													<td style="vertical-align:middle"><?php if ($_smarty_tpl->tpl_vars['bgurl']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)] != '') {?><center><img src="<?php echo $_smarty_tpl->tpl_vars['bgurl']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" style="border-radius: 50% 50% 50% 50%;height:50px;width:50px;"></center><?php } else { ?><center><div style="padding:10px 0;text-align:center;vertical-align:middle;background-color:<?php echo $_smarty_tpl->tpl_vars['bgcolor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
;color:#FFF;border-radius: 50% 50% 50% 50%;height:50px;width:50px;"><?php echo $_smarty_tpl->tpl_vars['chatstyle']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</div></center><?php }?></td>
													<td style="vertical-align:middle"><center><div style="padding:10px 0;text-align:center;vertical-align:middle;background-color:<?php echo $_smarty_tpl->tpl_vars['bgcolor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
;color:#FFF;border-radius: 50% 50% 50% 50%;height:50px;width:50px;"><?php echo $_smarty_tpl->tpl_vars['chatstyle']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</div></center></td>
													<td style="vertical-align:middle"><center><p class="white"><?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</p></center></td>
													<?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?>
													<td style="vertical-align:middle"><center><p class="white"><?php echo $_smarty_tpl->tpl_vars['owners']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</p></center></td>
													<td style="vertical-align:middle"><center><p class="white"><?php echo $_smarty_tpl->tpl_vars['playerstyle']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</p></center></td>
													<td style="vertical-align:middle"><center><p class="white"><?php echo $_smarty_tpl->tpl_vars['calls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
</p></center></td>
													<td style="vertical-align:middle" data-order="<?php echo $_smarty_tpl->tpl_vars['lastcalleds']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
"><center><p class="white"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lastcalleds']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)],"%A, %e %B, %Y %H:%M:%S");?>
</p></center></td>
													<?php }?>
													<td style="vertical-align:middle"><center>
													<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
														<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" target='_blank' title="Preview Webchat" class="btn btn-outline-info"><span class="ft-share"></span></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/html5.php?id=<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" target="_blank" title="Preview HTML5" class="btn btn-outline-info"><span class="ft-chrome"></span></a>
													</div></center>
														
													</td>
													<td style="vertical-align:middle"><center>
													<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">   
														<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" title="Bewerk Webchat" class="btn btn-outline-info"><span class="ft-settings"></span></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/transfer/<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" title="Transfer Webchat" class="btn btn-outline-info"><span class="ft-repeat"></span></a>
														</div>
														<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
														<a href="#" id="custom-html" title="HTML codes Webchat" class="btn btn-outline-info" data-toggle="modal" data-target="#apiToolkit<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
"><span class="ft-link"></span></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chanregister.php?id=<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
&login=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
&channel=<?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" title="Registreer <?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" class="btn btn-outline-info"><span class="ft-slack"></span></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/del/<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" title="Verwijder Webchat" class="btn btn-outline-danger"><span class="ft-trash-2"></span></a>
													</div></center>
													</td>
												</tr>

												<!-- Chatbox HTML Codes -->
												<div class="modal fade" id="apiToolkit<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content bg-blue-grey bg-darken-4">
															<div class="modal-header">
																	<h4 class="modal-title white" id="myModalLabel">Chatbox HTML codes</h4>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															</div>
															<div class="modal-body">
																<h5 class="white">Je chatbox op je website plaatsen</h5>
																Als je je chatbox op je website wil plaatsen, kan je dit doen met het volgende stukje HTML code:
																<blockquote><pre class="text-left bg-blue-grey bg-darken-4">&lt;iframe src='<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
' allow="camera;microphone" width='710' height='500' framespacing='0' frameborder='no' scrolling='no' &gt;&lt;/iframe&gt;</pre></blockquote>
																	<h5 class="white">Je HTML5 chatbox op je website plaatsen</h5>
																Als je je HTML5 chatbox op je website wil plaatsen, kan je dit doen met het volgende stukje HTML code:
																<blockquote><pre class="text-left bg-blue-grey bg-darken-4">&lt;iframe src='<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/html5.php?id=<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
' allow="camera;microphone" width='710' height='500' framespacing='0' frameborder='no' scrolling='no' &gt;&lt;/iframe&gt;</pre></blockquote>
										
																<h5 class="white">Het aantal chatters op je website laten zien</h5>
																Om het aantal chatters dat zich in je chatbox bevindt op je site weer te geven, plaats je het volgende stukje javascript code tussen de <code>&lt;HEAD&gt;</code> tags van je webpagina.
																<blockquote><pre class="text-left bg-blue-grey bg-darken-4">&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(function updateChatCount() {
	$.get('https://chattersworld.nl/usercount.php?channel=<?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_chat']->value['index'] : null)];?>
', function(data) {
		$("#users").html(data);
	}, 'text');
	setTimeout(updateChatCount, 3000);
});
&lt;/script&gt;</pre></blockquote>
																Zet vervolgens tussen de <code>&lt;BODY&gt;</code> tags op de plaats waar je het chattersaantal wil hebben een HTML-element met het id users, bijvoorbeeld:
																<blockquote><pre class="text-left bg-blue-grey bg-darken-4">&lt;p&gt;Aantal Chatters: &lt;span id="users"&gt;&lt;/span&gt;&lt;/p&gt;</pre></blockquote>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>

										<?php
}
}
?>
											
											</tbody>
									</table>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                
                <!--/ Zero configuration table -->

<!-- End -->

		
    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/new" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Nieuwe chatbox aanmaken</a>
    <?php }?>

</div>
</div>
</div>
<?php }
}
