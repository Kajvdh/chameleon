<?php
/* Smarty version 3.1.29, created on 2020-06-11 20:35:57
  from "/home/stats/chameleon/templates/chat_new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee2798d848161_02727424',
  'file_dependency' => 
  array (
    '8b8a78429581f2349f049d41581375f83a1ffe01' => 
    array (
      0 => '/home/stats/chameleon/templates/chat_new.tpl',
      1 => 1591900458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2798d848161_02727424 ($_smarty_tpl) {
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
    <div class="chat-editor">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a data-toggle="tab" href="#algemeen">Algemene instellingen</a></li>
            <li class=""><a data-toggle="tab" href="#design">Stijl en design</a></li>
            <li class=""><a data-toggle="tab" href="#webcam">Webcam en microfoon</a></li>
            <li class=""><a data-toggle="tab" href="#geavanceerd">Geavanceerde instellingen</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">Extra <b class="caret"></b></a>
                <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu">
                    <li><a data-toggle="tab" tabindex="-1" href="#radio">Radio</a></li>
                    <li><a data-toggle="tab" tabindex="-1" href="#ads">Advertenties</a></li>
                </ul>
            </li>
        </ul>
        <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;
if (isset($_smarty_tpl->tpl_vars['chat_id']->value)) {?>/edit<?php } else { ?>/new<?php }?>">
            <?php if (isset($_smarty_tpl->tpl_vars['chat_id']->value)) {?>
                <input type="hidden" name="chat_id" value="<?php echo $_smarty_tpl->tpl_vars['chat_id']->value;?>
" />
            <?php }?>
            <div class="tab-content" id="myTabContent">
                <!-- ALGEMENE INSTELLINGEN -->
                <div id="algemeen" class="tab-pane fade active in">
                    <!-- Naam van de chatbox -->
                    <div class="form-group">
					<?php echo '<script'; ?>
 type="text/javascript">

				function CheckSpace(event)
				{
					if(event.which ==32)
					{
						event.preventDefault();
						return false;
					}
				}
				<?php echo '</script'; ?>
>
                        <label for="chat_name" class="control-label col-sm-3">Naam Chatbox</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="chat_name" title="Dit is de naam die je chatbox zal krijgen." pattern="^[a-zA-Z0-9][a-zA-Z0-9-_\.]{1,}$" placeholder="Naam Chatbox" value="<?php if (isset($_smarty_tpl->tpl_vars['chat_name']->value)) {
echo $_smarty_tpl->tpl_vars['chat_name']->value;
}?>" onkeypress="CheckSpace(event)" required>
                        </div>
                    </div>
					

                </div>

                <!-- STIJL EN DESIGN -->
                <div id="design" class="tab-pane fade">
					<!-- Naam van de chatbox -->
                    <div class="form-group">
                        <label for="chat_bgurl" class="control-label col-sm-3">Achtergrond Link<br /><small>Zet de style op "transparant"</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="chat_bgurl" title="Deze achtergrond zal de chat hebben."  placeholder="Link naar de achtergrond" value="<?php if (isset($_smarty_tpl->tpl_vars['chat_bgurl']->value)) {
echo $_smarty_tpl->tpl_vars['chat_bgurl']->value;
}?>">
                        </div>
                    </div><br /><br /><br />
                    <!-- Chat stijl -->
                    <div class="form-group">
                        <label for="chat_style" title="Er zijn verschillende stijlen die je kan instellen voor je chatbox." class="control-label col-sm-3">Stijl</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="chat_style">
								<option value="transparent" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "transparent") {?>selected="selected"<?php }?>>Transparant voor als je een achtergrond neemt</option>
                                <option value="blue" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "blue") {?>selected="selected"<?php }?>>Blauw</option>
                                <option value="black" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "black") {?>selected="selected"<?php }?>>Zwart</option>
                                <option value="orange" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "orange") {?>selected="selected"<?php }?>>Oranje</option>
                                <option value="darkorange" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "darkorange") {?>selected="selected"<?php }?>>Donkeroranje</option>
                                <option value="green" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "green") {?>selected="selected"<?php }?>>Groen</option>
                                <option value="lightblue" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "lightblue") {?>selected="selected"<?php }?>>Lichtblauw</option>
                                <option value="skyblue" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "skyblue") {?>selected="selected"<?php }?>>Hemelsblauw</option>
                                <option value="yellow" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "yellow") {?>selected="selected"<?php }?>>Geel</option>
                                <option value="pink" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "pink") {?>selected="selected"<?php }?>>Roze</option>
                                <option value="darkred" <?php if ($_smarty_tpl->tpl_vars['chat_style']->value == "darkred") {?>selected="selected"<?php }?>>Donkerrood</option>
                            </select>
                        </div>
                    </div><br /><br /><br />

                    <!-- Icoon style -->
                    <div class="form-group">
                        <label for="icon_style" title="Er zijn verschillende icoontjes die je kan instellen voor de gebruikerslijst van je chatbox." class="control-label col-sm-3">Icoontjes</label>
                        <div class="col-sm-9">

                            <select class="form-control" name="icon_style">
                                <option value="bolletje" <?php if ($_smarty_tpl->tpl_vars['icon_style']->value == "bolletje") {?>selected="selected"<?php }?>>Bolletjes</option>
                                <option value="ster" <?php if ($_smarty_tpl->tpl_vars['icon_style']->value == "ster") {?>selected="selected"<?php }?>>Ster</option>
                                <option value="kroon" <?php if ($_smarty_tpl->tpl_vars['icon_style']->value == "kroon") {?>selected="selected"<?php }?>>Kroon</option>
                                <option value="dj" <?php if ($_smarty_tpl->tpl_vars['icon_style']->value == "dj") {?>selected="selected"<?php }?>>DJ</option>
                                <option value="none" <?php if ($_smarty_tpl->tpl_vars['icon_style']->value == "none") {?>selected="selected"<?php }?>>Standaard (~&@%+)</option>
                            </select>
                        </div>
                    </div><br /><br />

                    <!-- Icoontjes in de chat laten zien -->
                    <div class="form-group">
                        <label for="icon_prefix" title="Gebruikersicoontjes tonen voor chatters hun naam in het chatvenster (in plaats van enkel rechts in de lijst)." class="control-label col-sm-3">Icoontjes in de chat tonen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="icon_prefix" value="true" <?php if ($_smarty_tpl->tpl_vars['icon_prefix']->value == "true") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br />

                    <!-- Timestamp -->
                    <div class="form-group">
                        <label for="timestamp" title="Deze instelling laat de tijd voor elk bericht zien." class="control-label col-sm-3">Tijd</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="timestamp" value="true" <?php if ($_smarty_tpl->tpl_vars['timestamp']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                </div>

                <!-- WEBCAM EN GELUID -->
                <div id="webcam" class="tab-pane fade">
                    <br />
                    <div class="alert alert-info">
                        Met onze webchat is het mogelijk om je webcam en microfoon te gebruiken tijdens het chatten.
                    </div>
                    <!-- Webcam video inschakelen -->
                    <div class="form-group">
                        <label for="webcam_video" title="Hiermee kunnen gebruikers hun webcam inschakelen tijdens het chatten." class="control-label col-sm-3">Webcam inschakelen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="webcam_video" value="true" <?php if ($_smarty_tpl->tpl_vars['webcam_video']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br /><br />
                    <!-- Webcam audio inschakelen -->
                    <div class="form-group">
                        <label for="webcam_audio" title="Hiermee kunnen gebruikers hun microfoon inschakelen tijdens het chatten." class="control-label col-sm-3">Microfoon inschakelen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="webcam_audio" value="true" <?php if ($_smarty_tpl->tpl_vars['webcam_audio']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br />
                    <!-- Webcam prive inschakelen -->
                    <div class="form-group">
                        <label for="webcam_prive" title="Dit geeft gebruikers de mogelijkheid om hun webcam op prive in te stellen en zelf te kiezen wie hun webcam mag zien." class="control-label col-sm-3">Gebruikers kunnen hun webcam op prive instellen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="webcam_prive" value="true" <?php if ($_smarty_tpl->tpl_vars['webcam_prive']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                </div>

                <!-- GEAVANCEERDE INSTELLINGEN -->
                <div id="geavanceerd" class="tab-pane fade">
                    <!-- Privegesprekken inschakelen -->
                    <div class="form-group">
                        <label for="chat_prive" title="Hiermee kan je instellen dat gebruikers privegesprekken met elkaar kunnen voeren." class="control-label col-sm-3">Privegesprekken inschakelen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="chat_prive" value="true" <?php if ($_smarty_tpl->tpl_vars['chat_prive']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br /><br />
                    <!-- Serverwindow -->
                    <div class="form-group">
                        <label for="serverwindow" title="In het server window wordt extra informatie getoond van de server." class="control-label col-sm-3">Serverwindow inschakelen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="serverwindow" value="true" <?php if ($_smarty_tpl->tpl_vars['serverwindow']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br />
                    <!-- Kanaallijst -->
                    <div class="form-group">
                        <label for="chanellist" title="Met deze instelling wordt de knop om de kanaallijst (lijst van alle chatrooms op de server) te laten zien getoond." class="control-label col-sm-3">Laat knop kanaallijst zien</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="channellist" value="true" <?php if ($_smarty_tpl->tpl_vars['channellist']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br />
                    <!-- Kleurgebruik -->
                    <div class="form-group">
                        <label for="textstyling" title="Hiermee kunnen gebruikers de kleur van hun tekst aanpassen (ook vetgedrukt + onderlijning)." class="control-label col-sm-3">Kleurgebruik toelaten</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="textstyling" value="true" <?php if ($_smarty_tpl->tpl_vars['textstyling']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br />
                    <!-- Join,Part,Quit hostmask laten zien -->
                    <div class="form-group">
                        <label for="verboseinformation" title="Bij deze instelling wordt de hostmask van een gebruiker getoond wanneer deze het kanaal binnenkomt of weggaat." class="control-label col-sm-3">Uitgebreide info wanneer gebruikers het kanaal in komen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="verboseinformation" value="true" <?php if ($_smarty_tpl->tpl_vars['verboseinformation']->value == "true") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                </div>

                <!-- EXTRA: RADIO -->
                <div id="radio" class="tab-pane fade">
                    <br />
                    <div class="alert alert-info">
                        Het is mogelijk om onder je chat een radioplayer toe te voegen om muziek af te spelen.
                    </div>

                    <!-- Radio inschakelen -->
                    <div class="form-group">
                        <label for="textstyling" title="Hiermee stel je in dat de radioplayer getoond zal worden onder de chat" class="control-label col-sm-3">Radioplayer inschakelen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="radio_enabled" value="true" <?php if ($_smarty_tpl->tpl_vars['radio_enabled']->value == "true") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                    <br /><br />
                    <!-- Naam van de radio -->
                    <div class="form-group">
                        <label for="radio_name" class="control-label col-sm-3">Radio naam</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="radio_name" title="Geef hier de naam van de radiostream in." placeholder="Naam radio" value="<?php if (isset($_smarty_tpl->tpl_vars['radio_name']->value)) {
echo $_smarty_tpl->tpl_vars['radio_name']->value;
}?>">
                        </div>
                    </div>
                    <br /><br /><br />
                    <!-- Type van de stream -->
                    <div class="form-group">
                        <label for="radio_type" title="Kies hier het type stream dat je gebruikt." class="control-label col-sm-3">Type stream</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="radio_type">
                                <option value="shoutcast" <?php if ($_smarty_tpl->tpl_vars['radio_type']->value == "shoutcast") {?>selected="selected"<?php }?>>Shoutcast</option>
								<option value="shoutcast2" <?php if ($_smarty_tpl->tpl_vars['radio_type']->value == "shoutcast2") {?>selected="selected"<?php }?>>Shoutcast v2</option>
                                <option value="icecast2" <?php if ($_smarty_tpl->tpl_vars['radio_type']->value == "icecast2") {?>selected="selected"<?php }?>>Icecast 2</option>
                            </select>
                        </div>
                    </div>
                    <br /><br />
                    <!-- URL van de radio -->
                    <div class="form-group">
                        <label for="radio_link" class="control-label col-sm-3">Radio URL</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="radio_link" title="Geef hier de URL de radiostream in (beginnen met http:// en zonder / achteraan in de link)." placeholder="Radio URL" value="<?php if (isset($_smarty_tpl->tpl_vars['radio_link']->value)) {
echo $_smarty_tpl->tpl_vars['radio_link']->value;
}?>">
                        </div>
                    </div>
                    <br /><br />
					<!-- URL van de radio -->
                    <div class="form-group">
                        <label for="mountpoint" class="control-label col-sm-3">Stream mountpoint</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mountpoint" title="Geef hier de stream mountpoint aan (enkel bij shoutcast v2 en icecast)." placeholder="Radio URL" value="<?php if (isset($_smarty_tpl->tpl_vars['mountpoint']->value)) {
echo $_smarty_tpl->tpl_vars['mountpoint']->value;
}?>">
                        </div>
                    </div>
                    <br /><br />
					<!-- URL van de verzoekserver -->
                    <div class="form-group">
                        <label for="verzoek_url" class="control-label col-sm-3">Verzoekserver Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="verzoek_url" title="Geef hier de link naar je verzoekserver" placeholder="Radio URL" value="<?php if (isset($_smarty_tpl->tpl_vars['verzoek_url']->value)) {
echo $_smarty_tpl->tpl_vars['verzoek_url']->value;
}?>">
                        </div>
                    </div>
                    <br /><br />
                    <!-- Radioplayer style -->
                    <div class="form-group">
                        <label for="radio_style" title="Er zijn verschillende soorten radioplayers, het kan zijn dat sommigen niet werken met een bepaalde stream." class="control-label col-sm-3">Type radioplayer</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="radio_style">
                                <option value="muhstik" <?php if ($_smarty_tpl->tpl_vars['radio_style']->value == "muhstik") {?>selected="selected"<?php }?>>Lisa Ann</option>
                                <option value="cwflash" <?php if ($_smarty_tpl->tpl_vars['radio_style']->value == "cwflash") {?>selected="selected"<?php }?>>Tori Black</option>
                                <option value="muses" <?php if ($_smarty_tpl->tpl_vars['radio_style']->value == "muses") {?>selected="selected"<?php }?>>Madison Ivy</option>
                                <option value="stenly" <?php if ($_smarty_tpl->tpl_vars['radio_style']->value == "stenly") {?>selected="selected"<?php }?>>Jenna Jameson</option>
								<option value="hero" <?php if ($_smarty_tpl->tpl_vars['radio_style']->value == "hero") {?>selected="selected"<?php }?>>Wonder Woman</option>
								<option value="luna" <?php if ($_smarty_tpl->tpl_vars['radio_style']->value == "luna") {?>selected="selected"<?php }?>>Luna Alora</option>
                            </select>
                        </div>
                    </div><br /><br />
				<!-- Kleur van de player -->
                    <div class="form-group">
                        <label for="playerkleur" class="control-label col-sm-3">Speler achtergrond</label>
                        <div class="col-sm-9">
                            <input id="simple-color-picker" type="text" class="form-control" name="playerkleur" title="Geef hier de kleur van je speler aan" placeholder="playerkleur" value="<?php if (isset($_smarty_tpl->tpl_vars['playerkleur']->value)) {
echo $_smarty_tpl->tpl_vars['playerkleur']->value;
}?>">
							<?php echo '<script'; ?>
>
								$(function () {
									$('#simple-color-picker').colorpicker();
								});
							<?php echo '</script'; ?>
>
                        </div>
                    </div>
                    <br /><br />
					<!-- Kleur van de player -->
                    <div class="form-group">
                        <label for="tekstkleur" class="control-label col-sm-3">Speler tekstkleur</label>
                        <div class="col-sm-9">
                            <input id="simple-color-picker2" type="text" class="form-control" name="tekstkleur" title="Welke kleur moet de tekst zijn van de speler" placeholder="tekstkleur" value="<?php if (isset($_smarty_tpl->tpl_vars['tekstkleur']->value)) {
echo $_smarty_tpl->tpl_vars['tekstkleur']->value;
}?>">
							<?php echo '<script'; ?>
>
								$(function () {
									$('#simple-color-picker2').colorpicker();
								});
							<?php echo '</script'; ?>
>
                        </div>
                    </div>
                    
                </div>

                <!-- EXTRA: ADS -->
                <div id="ads" class="tab-pane fade">
                    <br />
                    <div class="alert alert-info">
                        Dankzij advertenties kunnen wij steeds de beste service blijven leveren. Maar omdat wij begrijpen dat veel chatters dit als storend kunnen ervaren voorzien wij de hier de mogelijkheid deze uit te schakelen.
                    </div>

                    <!-- Advertenties inschakelen -->
                    <div class="form-group">
                        <label for="textstyling" title="Ik wil Chattersworld steunen door een advertentie onder mijn chatbox te plaatsen" class="control-label col-sm-3">Steun Chattersworld door een advertentie te tonen</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="ads_enabled" value="true" <?php if ($_smarty_tpl->tpl_vars['ads_enabled']->value != "false") {?>checked="checked"<?php }?>>
                        </div>
                    </div>
                </div>


            </div>
            <br /><br />
            <button class="btn btn-default" type="submit"><?php if (isset($_smarty_tpl->tpl_vars['chat_id']->value)) {?>Chat opslaan<?php } else { ?>Chat aanmaken<?php }?></button>
        </form>
    </div>
</div>
<?php }
}
