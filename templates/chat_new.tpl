<!-- New Style -->
<h3 class="content-header-title mb-0 d-inline-block">{if isset($page)}{if $page=='new'}Maak{else}Bewerk{/if}{/if} chatbox</h3>
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
                                    <h4 class="card-title white">{if isset($chat_name)}{$chat_name}{else}Nieuwe Chatbox{/if}</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">{if isset($page)}{if $page=='new'}Maak{else}Bewerk{/if}{/if} hier je chatbox door onderstaand formulier in te vullen.</p>
<!-- end new -->

    
        <!-- Form wizard with step validation section start -->
                                <form id="form" method="post" action="{$fullurl}{if isset($chat_id)}/edit{else}/new{/if}" class="steps-validation">

                                            <!-- Step 1 -->
                                            <h6>Kanaalnaam instellen</h6>
                                            <fieldset>
                                                <br />
                    <div class="alert alert-info">
                        Let op!! Heb je reeds een kanaalnaam geregistreerd, neem dan die naam! Verander je van kanaalnaam, dien je deze opnieuw te registeren.
                    </div>
                    <!-- Naam van de chatbox -->
                    <div class="form-group">
					<script type="text/javascript">

				function CheckSpace(event)
				{literal}{
					if(event.which ==32)
					{
						event.preventDefault();
						return false;
					}
				}{/literal}
				</script>
                        <div class="row">
                      <label class="col-sm-2 col-form-label white" for="firstname">Kanaalnaam:</label>
						<div class="col-sm-4">
							<div class="form-group">
                            <input type="text" class="form-control required" name="chat_name" title="Dit is de naam die je chatbox zal krijgen." {literal}pattern="^[a-zA-Z0-9][a-zA-Z0-9-_\.]{1,}$"{/literal} placeholder="Naam Chatbox" value="{if isset($chat_name)}{$chat_name}{/if}" onkeypress="CheckSpace(event)" data-toggle="tooltip" data-placement="top" required>
							<i class="form-group__bar"></i>
						</div>
                    </div>
				</div>
					

                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6>Design</h6>
                                            <fieldset>
                                                <br />
                    <div class="alert alert-info">
                        Deze instellingen hebben betrekking tot het uiterlijk van uw webchat.
                    </div>
                    
					<div class="row">
                        <label for="chat_bgurl" class="control-label col-sm-2 white">Achtergrond Link<br /><small>Enkel HTTPS word geaccepteerd!</small></label>
                        <div class="col-sm-4">
						<div class="form-group">
                            <input type="url" class="form-control" {literal}pattern="https:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,4}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)(.jpg|.png|.gif|.jpeg|.bmp)"{/literal} name="chat_bgurl" title="Deze achtergrond zal de chat hebben."  placeholder="Link naar de achtergrond" value="{if isset($chat_bgurl)}{$chat_bgurl}{/if}" data-toggle="tooltip" data-placement="top">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div><br /><br />
                    <!-- Chat stijl -->
                    <div class="form-group">
					<div class="row">
					<label for="chat_style" title="Er zijn verschillende stijlen die je kan instellen voor je chatbox." class="col-sm-2 col-form-label white">Style:<br><small><font color="white">Zet op transparent als u een achtergrond gebruikt!!</font></small></label>
                        <div class="col-sm-4">
                            <select name="chat_style" class="custom-select form-control" id="default-select4" data-placeholder="Maak een keuze">
								<option value="transparent" {if $chat_style=="transparent"}selected="selected"{/if}>Transparant (Nodig bij flash voor achtergrond)</option>
                                <option value="blue" {if $chat_style=="blue"}selected="selected"{/if}>Blauw</option>
                                <option value="black" {if $chat_style=="black"}selected="selected"{/if}>Zwart</option>
                                <option value="orange" {if $chat_style=="orange"}selected="selected"{/if}>Oranje</option>
                                <option value="darkorange" {if $chat_style=="darkorange"}selected="selected"{/if}>Donkeroranje</option>
                                <option value="green" {if $chat_style=="green"}selected="selected"{/if}>Groen</option>
                                <option value="lightblue" {if $chat_style=="lightblue"}selected="selected"{/if}>Lichtblauw</option>
                                <option value="skyblue" {if $chat_style=="skyblue"}selected="selected"{/if}>Hemelsblauw</option>
                                <option value="yellow" {if $chat_style=="yellow"}selected="selected"{/if}>Geel</option>
                                <option value="pink" {if $chat_style=="pink"}selected="selected"{/if}>Roze</option>
                                <option value="darkred" {if $chat_style=="darkred"}selected="selected"{/if}>Donkerrood</option>
                            </select>
                        </div>
                    </div>
					</div>
					<br /><br />

                    <!-- Icoon style -->
                    <div class="form-group">
					<div class="row">
					 <label for="icon_style" title="Er zijn verschillende icoontjes die je kan instellen voor de gebruikerslijst van je chatbox." class="col-sm-2 col-form-label white">Icoontjes:</label>
                        <div class="col-sm-4">
                            <select class="custom-select form-control" id="default-select3" name="icon_style">
                                <option value="bolletje" {if $icon_style=="bolletje"}selected="selected"{/if}>Bolletjes</option>
                                <option value="ster" {if $icon_style=="ster"}selected="selected"{/if}>Ster</option>
                                <option value="kroon" {if $icon_style=="kroon"}selected="selected"{/if}>Kroon</option>
                                <option value="dj" {if $icon_style=="dj"}selected="selected"{/if}>DJ</option>
								<option value="pins" {if $icon_style=="pins"}selected="selected"{/if}>Punaises</option>
								<option value="whatsapp" {if $icon_style=="whatsapp"}selected="selected"{/if}>WhatsApp</option>
                                <option value="none" {if $icon_style=="none"}selected="selected"{/if}>Standaard (~&@%+)</option>
                            </select>
                        </div>
                    </div><br /><br />
					
                    <!-- Icoontjes in de chat laten zien -->
                    
					    <div class="row">
					        <label for="icon_prefix" title="Gebruikersicoontjes tonen voor chatters hun naam in het chatvenster (in plaats van enkel rechts in de lijst)." class="control-label col-sm-2 white">Icoontjes in de chat tonen</label>
                                <div class="col-sm-4"><div class="form-group">
								<div class="c-inputs-stacked">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="icon_prefix" class="custom-control-input" id="item41" value="true" {if $icon_prefix=="true"}checked="checked"{/if}>
                                                                    <label class="custom-control-label" for="item41"></label>
                                                                </div>
                                                                
                                                            </div>
                        </div>
					</div>
					</div>
					<br /><br />

                    <!-- Timestamp -->
					
					    <div class="row">
					        <label for="timestamp" title="Deze instelling laat de tijd voor elk bericht zien." class="control-label col-sm-2 white">Tijd</label>
                                <div class="col-sm-4"><div class="form-group">
								<div class="c-inputs-stacked">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="timestamp" class="custom-control-input" id="item42" value="true" {if $timestamp=="true"}checked="checked"{/if}>
                                                                    <label class="custom-control-label" for="item42"></label>
                                                                </div>
                                                                
                                                            </div>
                        </div>
					</div>
					</div>
					                    
                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Webcam</h6>
                                            <fieldset>
                                                <br />
                    <div class="alert alert-info">
                        Met onze webchat is het mogelijk om je webcam en microfoon te gebruiken tijdens het chatten.
                    </div>
                    <!-- Webcam video inschakelen -->
																		
                    <div class="form-group">
					<div class="row">
                        <label for="webcam_video" title="Hiermee kunnen gebruikers hun webcam inschakelen tijdens het chatten." class="control-label col-sm-2 white">Webcam inschakelen</label>
                        <div class="c-inputs-stacked">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="webcam_video" class="custom-control-input" id="item44" value="true" {if $webcam_video=="true"}checked="checked"{/if}>
                                                                    <label class="custom-control-label" for="item44"></label>
                                                                </div>
                                                                
                                                            </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Webcam audio inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="webcam_audio" title="Hiermee kunnen gebruikers hun microfoon inschakelen tijdens het chatten." class="control-label col-sm-2 white">Microfoon inschakelen</label>
                        <div class="c-inputs-stacked">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="webcam_audio" class="custom-control-input" id="item45" value="true" {if $webcam_audio=="true"}checked="checked"{/if}>
                                                                    <label class="custom-control-label" for="item45"></label>
                                                                </div>
                                                                
                                                            </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Webcam prive inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="webcam_prive" title="Dit geeft gebruikers de mogelijkheid om hun webcam op prive in te stellen en zelf te kiezen wie hun webcam mag zien." class="control-label col-sm-2 white">Gebruikers kunnen hun webcam op prive instellen</label>
                        <div class="c-inputs-stacked">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="webcam_prive" class="custom-control-input" id="item46" value="true" {if $webcam_prive=="true"}checked="checked"{/if}>
                                                                    <label class="custom-control-label" for="item46"></label>
                                                                </div>
                                                                
                                                            </div>
                    </div>
					</div>
                                            </fieldset>

                                            <!-- Step 4 -->
                                            <h6>Geavanceerde instellingen</h6>
                                            <fieldset>
                                                <br />
                    <div class="alert alert-info">
                        Geavanceerde instellingen schakelen functies in of uit.
                    </div>
                    <div class="form-group">
					<div class="row">
                        <label for="chat_prive" title="Hiermee kan je instellen dat gebruikers privegesprekken met elkaar kunnen voeren." class="control-label col-sm-2 white">Privegesprekken inschakelen</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="chat_prive" class="custom-control-input" id="item47" value="true" {if $chat_prive=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item47"></label>
            </div>
            
        </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Serverwindow -->
                    <div class="form-group">
					<div class="row">
                        <label for="serverwindow" title="In het server window wordt extra informatie getoond van de server." class="control-label col-sm-2 white">Serverwindow inschakelen</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="serverwindow" class="custom-control-input" id="item48" value="true" {if $serverwindow=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item48"></label>
            </div>
            
        </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Kanaallijst -->
                    <div class="form-group">
					<div class="row">
                        <label for="chanellist" title="Met deze instelling wordt de knop om de kanaallijst (lijst van alle chatrooms op de server) te laten zien getoond." class="control-label col-sm-2 white">Laat knop kanaallijst zien</label>
                         <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="channellist" class="custom-control-input" id="item49" value="true" {if $channellist=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item49"></label>
            </div>
            
        </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Kleurgebruik -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Hiermee kunnen gebruikers de kleur van hun tekst aanpassen (ook vetgedrukt + onderlijning)." class="control-label col-sm-2 white">Kleurgebruik toelaten</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="textstyling" class="custom-control-input" id="item50" value="true" {if $textstyling=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item50"></label>
            </div>
            
        </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Join,Part,Quit hostmask laten zien -->
                    <div class="form-group">
					<div class="row">
                        <label for="verboseinformation" title="Bij deze instelling wordt de hostmask van een gebruiker getoond wanneer deze het kanaal binnenkomt of weggaat." class="control-label col-sm-2 white">Uitgebreide info wanneer gebruikers het kanaal in komen</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="verboseinformation" class="custom-control-input" id="item51" value="true" {if $verboseinformation=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item51"></label>
            </div>
            
        </div>
                    </div>
					</div>
                                            </fieldset>
											<!-- Step 5 -->
                                            <h6>HTML5</h6>
                                            <fieldset>
											<br />
                    <div class="alert alert-info">
                        De HTML5 webchat heeft meer optionele functie's, hier kunt u deze opties aan en uit zetten zoals u dat wenst.
                    </div>

                    <!-- avatars inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Laat een avatar zien voor de nickaan" class="control-label col-sm-2 white">Laat een avatar zien voor de nicknaam</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="kiwi_avatar" class="custom-control-input" id="item52" value="true" {if $kiwi_avatar=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item52"></label>
            </div>
            
        </div>
                    </div>
					</div>
					<br /><br />
					<!-- Uploaden toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Sta toe dat mensen kunnen uploaden" class="control-label col-sm-2 white">Bestanden delen toestaan</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="kiwi_upload" class="custom-control-input" id="item53" value="true" {if $kiwi_upload=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item53"></label>
            </div>
            
        </div>
                    </div>
					</div>
					<br /><br />
					<!-- Giphy toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Sta toe dat GIF's kunnen worden getoont" class="control-label col-sm-2 white">Sta toe dat GIF's kunnen worden getoont</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="kiwi_giphy" class="custom-control-input" id="item54" value="true" {if $kiwi_giphy=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item54"></label>
            </div>
            
        </div>
                    </div>
					</div>
					<br /><br />
					<!-- Imgur toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Sta toe dat plaatjes kunnen worden getoont via Imgur" class="control-label col-sm-2 white">Sta toe dat plaatjes kunnen worden getoont via Imgur</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="kiwi_imgur" class="custom-control-input" id="item55" value="true" {if $kiwi_imgur=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item55"></label>
            </div>
            
        </div>
                    </div>
					</div>
					<br /><br />
					<!-- Imgur toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Laat uw chatters leeftijd, geslacht en locatie meegeven op de chat" class="control-label col-sm-2 white">Laat uw chatters leeftijd, geslacht en locatie meegeven op de chat</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="kiwi_asl" class="custom-control-input" id="item56" value="true" {if $kiwi_asl=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item56"></label>
            </div>
            
        </div>
                    </div>
					</div>
					<br /><br />
					<!-- Redirecten naar HTML5 chat -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Forceer uw chatters naar de HTML5 chat te gaan" class="control-label col-sm-2 white">Laat chatters naar de HTML5 chat gaan</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="html_redirect" class="custom-control-input" id="item57" value="true" {if $html_redirect=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item57"></label>
            </div>
            
        </div>
                    </div>
					</div>
											</fieldset>
											<!-- Step 6 -->
                                            <h6>Radio</h6>
                                            <fieldset>
											<br />
                    <div class="alert alert-info">
                        Het is mogelijk om onder je chat een radioplayer toe te voegen om muziek af te spelen.
                    </div>

                    <!-- Radio inschakelen -->
                    
					<div class="row">
                        <label for="textstyling" title="Hiermee stel je in dat de radioplayer getoond zal worden onder de chat" class="control-label col-sm-2 white">Radioplayer inschakelen</label>
						<div class="col-sm-4"><div class="form-group">
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="radio_enabled" class="custom-control-input" id="item58" value="true" {if $radio_enabled=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item58"></label>
            </div>
            
        </div>
                    </div>
					</div>
					</div>
                    <br /><br />
                    <!-- Naam van de radio -->
                    
					<div class="row">
                        <label for="radio_name" class="control-label col-sm-2 white">Radio naam</label>
                        <div class="col-sm-4"><div class="form-group">
                            <input type="text" class="form-control" name="radio_name" title="Geef hier de naam van de radiostream in." placeholder="Naam radio" value="{if isset($radio_name)}{$radio_name}{/if}" data-toggle="tooltip" data-placement="top">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Type van de stream -->
                    
					<div class="row">
                        <label for="radio_type" title="Kies hier het type stream dat je gebruikt." class="control-label col-sm-2 white">Type stream</label>
                        <div class="col-sm-4"><div class="form-group">
                            <select class="custom-select form-control" id="default-select2" name="radio_type">
                                <option value="shoutcast" {if $radio_type=="shoutcast"}selected="selected"{/if}>Shoutcast</option>
								<option value="shoutcast2" {if $radio_type=="shoutcast2"}selected="selected"{/if}>Shoutcast v2</option>
                                <option value="icecast2" {if $radio_type=="icecast2"}selected="selected"{/if}>Icecast 2</option>
                            </select>
                        </div>
                    </div>
					</div>
                    <br /><br />
                    <!-- URL van de radio -->
                    
					<div class="row">
                        <label for="radio_link" class="control-label col-sm-2 white">Radio URL</label>
                        <div class="col-sm-4"><div class="form-group">
                            <input type="text" class="form-control" name="radio_link" {literal}pattern="^.*\/\/[^\/]+:?[0-9]"{/literal} title="Geef hier de URL de radiostream in (beginnen met http:// en zonder / achteraan in de link)." placeholder="Radio URL" value="{if isset($radio_link)}{$radio_link}{/if}" data-toggle="tooltip" data-placement="top">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
					<!-- URL van de radio -->
                    
					<div class="row">
                        <label for="mountpoint" class="control-label col-sm-2 white">Stream mountpoint</label>
                        <div class="col-sm-4"><div class="form-group">
                            <input type="text" class="form-control" name="mountpoint" title="Geef hier de stream mountpoint aan (enkel bij shoutcast v2 en icecast)." placeholder="Radio URL" value="{if isset($mountpoint)}{$mountpoint}{/if}" data-toggle="tooltip" data-placement="top">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
					<!-- URL van de verzoekserver -->
                    
					<div class="row">
                        <label for="verzoek_url" class="control-label col-sm-2 white">Verzoekserver Link</label>
                        <div class="col-sm-4"><div class="form-group">
                            <input type="text" class="form-control" name="verzoek_url" title="Geef hier de link naar je verzoekserver" placeholder="Radio URL" value="{if isset($verzoek_url)}{$verzoek_url}{/if}" data-toggle="tooltip" data-placement="top">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Radioplayer style -->
                    
					<div class="row">
                        <label for="radio_style" title="Er zijn verschillende soorten radioplayers, het kan zijn dat sommigen niet werken met een bepaalde stream." class="control-label col-sm-2 white">Type radioplayer</label>
                        <div class="col-sm-4"><div class="form-group">
                            <select class="custom-select form-control" id="default-select" name="radio_style">
                                <option value="muhstik" {if $radio_style=="muhstik"}selected="selected"{/if}>Lisa Ann (Muhstik)</option>
                                <option value="cwflash" {if $radio_style=="cwflash"}selected="selected"{/if}>Tori Black (Native Flash Radio v3)</option>
                                <option value="muses" {if $radio_style=="muses"}selected="selected"{/if}>Madison Ivy (Muses)</option>
                                <option value="stenly" {if $radio_style=="stenly"}selected="selected"{/if}>Jenna Jameson (Sticky)</option>
								<option value="hero" {if $radio_style=="hero"}selected="selected"{/if}>Sophie Dee (Hero)</option>
								<option value="luna" {if $radio_style=="luna"}selected="selected"{/if}>Luna Alora (Luna Radio (Native Radio v5))</option>
								<option value="internal" {if $radio_style=="internal"}selected="selected"{/if}>Bailey Brooke (HTML5 internal (Luna flash fallback))</option>
								<option value="clever" {if $radio_style=="clever"}selected="selected"{/if}>Megan Fox (Clever)</option>
                            </select>
                        </div>
                    </div>
					</div><br /><br />
				<!-- Kleur van de player -->
                    
					<div class="row">
                        <label for="playerkleur" class="control-label col-sm-2 white">Speler achtergrond</label>
						<div class="col-sm-4">
                                        <div class="form-group">
										<div class="input-group">
						<!-- <span class="input-group-addon"><i class="zwicon-brush"></i></span> -->
						<div class="form-group color-picker">
						<div class="position-relative has-icon-left">
                                             <input type="text" id="simple-color-picker" style="background-color: {if isset($playerkleur)}{$playerkleur}{/if};" name="playerkleur" class="form-control color-picker__value" placeholder="playerkleur" value="{if isset($playerkleur)}{$playerkleur}{/if}" title="Deze kleur zal de achtergrond zijn van de radioplayer" data-toggle="tooltip" data-placement="top">
                                            <div class="form-control-position">
                                                <i class="la la-adjust black" style="background-color: {if isset($playerkleur)}{$playerkleur}{/if};"></i>
                                            </div>
                                        </div>
										</div>
                        
                    </div>
					</div>
					</div>
					</div>
                    <br /><br />
					<!-- Kleur van de player -->
                    
					<div class="row">
                        <label for="tekstkleur" class="control-label col-sm-2 white">Speler tekstkleur</label>
						<div class="col-sm-4">
                                        <div class="form-group">
										<div class="input-group">
						<!-- <span class="input-group-addon"><i class="zwicon-brush"></i></span> -->
                        <div class="form-group color-picker">
						<div class="position-relative has-icon-left">
                                            <input type="text" id="simple-color-picker2" style="background-color: {if isset($tekstkleur)}{$tekstkleur}{/if};" name="tekstkleur" class="form-control color-picker__value" placeholder="tekstkleur" value="{if isset($tekstkleur)}{$tekstkleur}{/if}" title="Deze kleur zal de text zijn van de radioplayer" data-toggle="tooltip" data-placement="top">
                                            <div class="form-control-position">
                                                <i class="la la-adjust black" style="background-color: {if isset($tekstkleur)}{$tekstkleur}{/if};"></i>
                                            </div>
                                        </div>
                    </div>
					</div>
                    
                </div>
				</div>
				</div>
											</fieldset>
											<!-- Step 6 -->
                                            <h6>Advertentie</h6>
                                            <fieldset>
											<br />
                    <div class="alert alert-info">
                        Dankzij advertenties kunnen wij steeds de beste service blijven leveren. Maar omdat wij begrijpen dat veel chatters dit als storend kunnen ervaren voorzien wij de hier de mogelijkheid deze uit te schakelen.
                    </div>

                    <!-- Advertenties inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Ik wil Chattersworld steunen door een advertentie onder mijn chatbox te plaatsen" class="control-label col-sm-2 white">Steun Chattersworld door een advertentie te tonen</label>
                        <div class="c-inputs-stacked">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="ads_enabled" class="custom-control-input" id="item59" value="true" {if $ads_enabled=="true"}checked="checked"{/if}>
                <label class="custom-control-label" for="item59"></label>
            </div>
            
        </div>
						</div>
                    </div>
											</fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with step validation section end -->
    </div>
</div>
