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

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="base-tab1" aria-expanded="true" aria-controls="algemeen" data-toggle="tab" href="#algemeen" role="tab">Algemene instellingen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="base-tab2" aria-expanded="false" aria-controls="design" data-toggle="tab" href="#design" role="tab">Stijl en design</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" id="base-tab3" aria-expanded="false" aria-controls="webcam" data-toggle="tab" href="#webcam" role="tab">Webcam en microfoon</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" id="base-tab4" aria-expanded="false" aria-controls="geavanceerd" data-toggle="tab" href="#geavanceerd" role="tab">Geavanceerde instellingen</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" id="base-tab5" aria-expanded="false" aria-controls="html5" data-toggle="tab" href="#html5" role="tab">HTML5 instellingen</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="#radio" id="base-tab6" aria-expanded="false" aria-controls="radio" data-toggle="tab">Radio instellingen</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="#ads" id="base-tab7" aria-expanded="false" aria-controls="ads" data-toggle="tab">Advertentie / Statistieken</a>
        </li>
		<!-- <div class="dropdown">
            <button class="btn btn-light" aria-expanded="false" data-toggle="dropdown">Extra's</button>
                <div class="dropdown-menu dropdown-menu--icon">
                    <a href="#radio" id="base-tab6" aria-expanded="false" aria-controls="radio" data-toggle="tab" class="dropdown-item">Radio</a>
                    <a href="#ads" id="base-tab7" aria-expanded="false" aria-controls="ads" data-toggle="tab" class="dropdown-item">Advertenties</a>
                </div>
        </div> -->
	</ul>
        <form role="form" method="post" action="{$fullurl}{if isset($chat_id)}/edit{else}/new{/if}">
            {if isset($chat_id)}
                <input type="hidden" name="chat_id" value="{$chat_id}" />
            {/if}
            <div class="tab-content">
                <!-- ALGEMENE INSTELLINGEN -->
                <div class="tab-pane active fade show" id="algemeen" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1">
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
                            <input type="text" class="form-control" name="chat_name" title="Dit is de naam die je chatbox zal krijgen." {literal}pattern="^[a-zA-Z0-9][a-zA-Z0-9-_\.]{1,}$"{/literal} placeholder="Naam Chatbox" value="{if isset($chat_name)}{$chat_name}{/if}" onkeypress="CheckSpace(event)" data-toggle="tooltip" data-placement="top" required>
							<i class="form-group__bar"></i>
						</div>
                    </div>
				</div>
					

                </div>
			</div>

                <!-- STIJL EN DESIGN -->
                <div id="design" class="tab-pane fade" aria-labelledby="base-tab2">
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
					<div id="transparantie" class="row">
                        <label for="transparantie" class="control-label col-sm-2 white">Achtergrond Link Overlay transparantie<br /><small>Hiermee pas je de overlay waas van de achtergrond aan!<br />Style Transparant heeft geen overlay!</small></label>
                        <div class="col-sm-4">
						<div class="form-group">
						<script>
						function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
		</script>
		
							<input data-idx='2' id="r" type="range" class="form-control" name="rangeInput" min="0" max="1" step="0.01" value="{if isset($transparantie)}{$transparantie}{/if}" onchange="updateTextInput(this.value);"><div class='glow' aria-hidden='true'></div><br />
							
							
                            <input id="textInput" type="text" class="form-control" name="transparantie" title="Doorzichtigheid van de overlay (Transparant heeft geen overlay)."  placeholder="Overlay transparantie" value="{if isset($transparantie)}{$transparantie}{/if}" data-toggle="tooltip" data-placement="top"  readonly="readonly">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div><br /><br />
                    <!-- Chat stijl -->
                    <div class="form-group">
					<div class="row">
					<label for="chat_style" title="Er zijn verschillende stijlen die je kan instellen voor je chatbox." class="col-sm-2 col-form-label white">Style:<br><small><font color="white">Zet op transparent als u een achtergrond gebruikt!!</font></small></label>
                        <div class="col-sm-4">
                            <select id="graph_select" name="chat_style" class="select2 form-control" id="default-select4" data-placeholder="Maak een keuze">
								<option id="transparent" value="transparent" {if $chat_style=="transparent"}selected="selected"{/if}>Transparant (Het mooiste met een achtergrond)</option>
                                <option id="blue" value="blue" {if $chat_style=="blue"}selected="selected"{/if}>Blauw</option>
                                <option id="black" value="black" {if $chat_style=="black"}selected="selected"{/if}>Zwart</option>
                                <option id="orange" value="orange" {if $chat_style=="orange"}selected="selected"{/if}>Oranje</option>
                                <option id="darkorange" value="darkorange" {if $chat_style=="darkorange"}selected="selected"{/if}>Donkeroranje</option>
                                <option id="green" value="green" {if $chat_style=="green"}selected="selected"{/if}>Groen</option>
                                <option id="lightblue" value="lightblue" {if $chat_style=="lightblue"}selected="selected"{/if}>Lichtblauw</option>
                                <option id="skyblue" value="skyblue" {if $chat_style=="skyblue"}selected="selected"{/if}>Hemelsblauw</option>
                                <option id="yellow" value="yellow" {if $chat_style=="yellow"}selected="selected"{/if}>Geel</option>
                                <option id="pink" value="pink" {if $chat_style=="pink"}selected="selected"{/if}>Roze</option>
                                <option id="darkred" value="darkred" {if $chat_style=="darkred"}selected="selected"{/if}>Donkerrood</option>
								<option id="nightswatch" value="nightswatch" {if $chat_style=="nightswatch"}selected="selected"{/if}>NightSwatch (Alleen HTML5)</option>
								<option value="html5color" {if $chat_style=="html5color"}selected="selected"{/if}>Eigen kleur (Alleen HTML5)</option>
                            </select>
                        </div>
                    </div>
					</div>
					<br /><br />
					<!-- HTML5 kleur als thema -->
					<div id="html5color" class="row">
                        <label for="html5color" class="control-label col-sm-2 white">HTML5 Thema kleur<br /><small>Kies je eigen themakleur!<br />Zet hiervoor de style op "Eigen Kleur of Transparant"!</small></label>
						<div class="col-sm-4">
                                        <div class="form-group">
										<div class="input-group">
						<!-- <span class="input-group-addon"><i class="zwicon-brush"></i></span> -->
						<div class="form-group color-picker">
						<div class="position-relative has-icon-left">
                                             <input type="text" id="simple-color-picker3" style="background-color: {if isset($html5color)}{$html5color}{/if};" name="html5color" class="form-control color-picker__value color-picker__preview" placeholder="html5color" value="{if isset($html5color)}{$html5color}{/if}" title="Deze kleur zal je HTML5 chat gaan hebben als hoofdthema" data-toggle="tooltip" data-placement="top">
                                            <div class="form-control-position">
                                                <i class="la la-adjust black color-picker__preview" style="background-color: {if isset($html5color)}{$html5color}{/if};"></i>
                                            </div>
                                        </div>
										</div>
                        
                    </div>
					</div>
					</div>
					</div>
                    <br /><br />
					<div id="omswitch" class="row">
					        <label for="omswitch" title="Textkleuren omdraaien, handig bij donkere achtergronden." class="control-label col-sm-2 white">Textkleuren omdraaien<br /><small>Bij donkere achtergronden</small></label>
                                <div class="col-sm-4"><div class="form-group">
								<div class="toggle-switch toggle-switch--green">
                                    <input type="checkbox" name="omswitch" class="switchery" value="true" {if $omswitch=="true"}checked="checked"{/if}>
                                       <i class="toggle-switch__helper"></i>
                                </div>
                        </div>
					</div>
					</div>
                    <br /><br />
                    <!-- Icoon style -->
                    <div class="form-group">
					<div class="row">
					 <label for="icon_style" title="Er zijn verschillende icoontjes die je kan instellen voor de gebruikerslijst van je chatbox." class="col-sm-2 col-form-label white">Icoontjes:</label>
                        <div class="col-sm-4">
                            <select class="select2-templating-icons form-control" id="select2-templating" name="icon_style">
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
								<div class="toggle-switch toggle-switch--green">
                                    <input type="checkbox" name="icon_prefix" class="switchery" value="true" {if $icon_prefix=="true"}checked="checked"{/if}>
                                       <i class="toggle-switch__helper"></i>
                                </div>
                        </div>
					</div>
					</div>
					<br /><br />
					<div class="row">
					        <label for="tags" title="Laat tags zien achter de namen" class="control-label col-sm-2 white">Tags achter de namen laten zien<br /><small>Zoals "beheerder", "Administrator" en meer</small></label>
                                <div class="col-sm-4"><div class="form-group">
								<div class="toggle-switch toggle-switch--green">
                                    <input type="checkbox" name="tags" class="switchery" value="true" {if $tags=="true"}checked="checked"{/if}>
                                       <i class="toggle-switch__helper"></i>
                                </div>
                        </div>
					</div>
					</div>
                    <br /><br />
                    <!-- Timestamp -->
					
					    <div class="row">
					        <label for="timestamp" title="Deze instelling laat de tijd voor elk bericht zien." class="control-label col-sm-2 white">Tijd</label>
                                <div class="col-sm-4"><div class="form-group">
								<div class="toggle-switch toggle-switch--green">
                                    <input type="checkbox" name="timestamp" class="switchery" value="true" {if $timestamp!="false"}checked="checked"{/if}>
                                       <i class="toggle-switch__helper"></i>
                                </div>
                        </div>
					</div>
					</div>
					                    
                </div>
				</div>

                <!-- WEBCAM EN GELUID -->
                <div id="webcam" class="tab-pane fade" aria-labelledby="base-tab3">
                    <br />
                    <div class="alert alert-info">
                        Met onze webchat is het mogelijk om je webcam en microfoon te gebruiken tijdens het chatten.
                    </div>
                    <!-- Webcam video inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="webcam_video" title="Hiermee kunnen gebruikers hun webcam inschakelen tijdens het chatten." class="control-label col-sm-2 white">Webcam inschakelen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input id="webcam_video" type="checkbox" class="switchery" name="webcam_video" value="true" {if $webcam_video!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Webcam audio inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="webcam_audio" title="Hiermee kunnen gebruikers hun microfoon inschakelen tijdens het chatten." class="control-label col-sm-2 white">Microfoon inschakelen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="webcam_audio" value="true" {if $webcam_audio!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Webcam prive inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="webcam_prive" title="Dit geeft gebruikers de mogelijkheid om hun webcam op prive in te stellen en zelf te kiezen wie hun webcam mag zien." class="control-label col-sm-2 white">Gebruikers kunnen hun webcam op prive instellen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="webcam_prive" value="true" {if $webcam_prive!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                </div>

                <!-- GEAVANCEERDE INSTELLINGEN -->
                <div id="geavanceerd" class="tab-pane fade" aria-labelledby="base-tab4">
                    <br />
                    <div class="alert alert-info">
                        Geavanceerde instellingen schakelen functies in of uit.
                    </div>
                    <div class="form-group">
					<div class="row">
                        <label for="chat_prive" title="Hiermee kan je instellen dat gebruikers privegesprekken met elkaar kunnen voeren." class="control-label col-sm-2 white">Privegesprekken inschakelen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="chat_prive" value="true" {if $chat_prive!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Serverwindow -->
                    <div class="form-group">
					<div class="row">
                        <label for="serverwindow" title="In het server window wordt extra informatie getoond van de server." class="control-label col-sm-2 white">Serverwindow inschakelen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="serverwindow" value="true" {if $serverwindow!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Kanaallijst -->
                    <div class="form-group">
					<div class="row">
                        <label for="chanellist" title="Met deze instelling wordt de knop om de kanaallijst (lijst van alle chatrooms op de server) te laten zien getoond." class="control-label col-sm-2 white">Laat knop kanaallijst zien</label>
                         <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="channellist" value="true" {if $channellist!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Kleurgebruik -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Hiermee kunnen gebruikers de kleur van hun tekst aanpassen (ook vetgedrukt + onderlijning)." class="control-label col-sm-2 white">Kleurgebruik toelaten</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="textstyling" value="true" {if $textstyling!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                    <br /><br />
                    <!-- Join,Part,Quit hostmask laten zien -->
                    <div class="form-group">
					<div class="row">
                        <label for="verboseinformation" title="Bij deze instelling wordt de hostmask van een gebruiker getoond wanneer deze het kanaal binnenkomt of weggaat." class="control-label col-sm-2 white">Uitgebreide info wanneer gebruikers het kanaal in komen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="verboseinformation" value="true" {if $verboseinformation=="true"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
                
				</div>
				<!-- HTML5 INSTELLINGEN -->
				
                <div id="html5" class="tab-pane fade" aria-labelledby="base-tab5">
                    <br />
                    <div class="alert alert-info">
                        De HTML5 webchat heeft meer optionele functie's, hier kunt u deze opties aan en uit zetten zoals u dat wenst.
                    </div>

                    <!-- avatars inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Laat een avatar zien voor de nickaan" class="control-label col-sm-2 white">Laat een avatar zien voor de nicknaam</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="kiwi_avatar" value="true" {if $kiwi_avatar!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<!-- Uploaden toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Sta toe dat mensen kunnen uploaden" class="control-label col-sm-2 white">Bestanden delen toestaan</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="kiwi_upload" value="true" {if $kiwi_upload!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<!-- Link previews toestaan -->
					<div class="form-group">
					<div class="row">
                        <label for="embedly" title="Link previews in de chat laten zien" class="control-label col-sm-2 white">Laat link voorbeelden zien in de chat (Embedly)</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="embedly" value="true" {if $embedly!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<!-- Conference link laten zien -->
					<div class="form-group">
					<div class="row">
                        <label for="conflink" title="Laat een link zien zodra iemand zijn webcam aanzet" class="control-label col-sm-2 white">Laat een link zien zodra iemand zijn webcam aanzet</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="conflink" value="true" {if $conflink!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<!-- Giphy toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Sta toe dat GIF's kunnen worden getoont" class="control-label col-sm-2 white">Sta toe dat GIF's kunnen worden getoont</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="kiwi_giphy" value="true" {if $kiwi_giphy!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<!-- Imgur toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Sta toe dat plaatjes kunnen worden getoont via Imgur" class="control-label col-sm-2 white">Sta toe dat plaatjes kunnen worden getoont via Imgur</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="kiwi_imgur" value="true" {if $kiwi_imgur!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<!-- Imgur toestaan -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Laat uw chatters leeftijd, geslacht en locatie meegeven op de chat" class="control-label col-sm-2 white">Laat uw chatters leeftijd, geslacht en locatie meegeven op de chat</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="kiwi_asl" value="true" {if $kiwi_asl!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
					<div id="viewheight" class="row hideme2" {if $webcam_video!="true"}style="display: none; width: 100%;"{/if}>
                        <label for="viewheight" class="control-label col-sm-2 white">Hoogte van het webcam beeld in de chat<br /><small>De html5 chat heeft een inline venster voor webcams!<br />Hier stelt u deze hoogte in!</small></label>
                        <div class="col-sm-4">
						<div class="form-group">
						<script>
						function updateTextInput2(val) {
          document.getElementById('textInput2').value=val + '%'; 
        }
		</script>
		
							<input data-idx='2' id="t" type="range" class="form-control" name="rangeInput2" min="20" max="80" step="5" value="{if isset($viewheight)}{$viewheight|replace:'%':''}{/if}" onchange="updateTextInput2(this.value);"><div class='glow' aria-hidden='true'></div><br />
							
							
                            <input id="textInput2" type="text" class="form-control" name="viewheight" title="Hoogte van het webcam beeld in de chat"  placeholder="Hoogte van het webcam beeld in de chat" value="{if isset($viewheight)}{$viewheight}{/if}" data-toggle="tooltip" data-placement="top"  readonly="readonly">
							<i class="form-group__bar"></i>
						</div>
                    </div>
					</div><br /><br />
					<!-- Redirecten naar HTML5 chat -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Forceer uw chatters naar de HTML5 chat te gaan" class="control-label col-sm-2 white">Laat chatters naar de HTML5 chat gaan</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="html_redirect" value="true" {if $html_redirect!="false"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					<br /><br />
                </div>
                <!-- EXTRA: RADIO -->
                <div id="radio" class="tab-pane fade" aria-labelledby="base-tab6">
                    <br />
                    <div class="alert alert-info">
                        Het is mogelijk om onder je chat een radioplayer toe te voegen om muziek af te spelen.
                    </div>

                    <!-- Radio inschakelen -->
                    
					<div class="row">
                        <label for="textstyling" title="Hiermee stel je in dat de radioplayer getoond zal worden onder de chat" class="control-label col-sm-2 white switch">Radioplayer inschakelen</label>
						<div class="col-sm-4"><div class="form-group">
                        <div class="toggle-switch toggle-switch--green">
                            <input id="radio_enabled" type="checkbox" class="switchery" name="radio_enabled" value="true" {if $radio_enabled=="true"}checked="checked"{/if}>
                        <i class="toggle-switch__helper"></i>
						</div>
                    </div>
					</div>
					</div>
                    <br /><br />
                    <!-- Naam van de radio -->
                    <div id="checked" class="hideme" {if $radio_enabled!="true"}style="display: none; width: 100%;"{/if}>
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
                            <select id="stream_select" class="select2 form-control" id="default-select2" name="radio_type">
                                <option id="shoutcast" value="shoutcast" {if $radio_type=="shoutcast"}selected="selected"{/if}>Shoutcast</option>
								<option id="shoutcast2" value="shoutcast2" {if $radio_type=="shoutcast2"}selected="selected"{/if}>Shoutcast v2</option>
                                <option id="icecast2" value="icecast2" {if $radio_type=="icecast2"}selected="selected"{/if}>Icecast 2</option>
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
                    
					<div id="mountpoint" class="row">
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
                            <select id="player_select" class="select2 form-control" id="default-select" name="radio_style">
                                <option id="muhstik" value="muhstik" {if $radio_style=="muhstik"}selected="selected"{/if}>Lisa Ann (Muhstik)</option>
                                <option id="cwflash" value="cwflash" {if $radio_style=="cwflash"}selected="selected"{/if}>Tori Black (Native Flash Radio v3)</option>
                                <option id="muses" value="muses" {if $radio_style=="muses"}selected="selected"{/if}>Madison Ivy (Muses)</option>
                                <option id="stenly" value="stenly" {if $radio_style=="stenly"}selected="selected"{/if}>Jenna Jameson (Sticky)</option>
								<option id="hero" value="hero" {if $radio_style=="hero"}selected="selected"{/if}>Sophie Dee (Hero)</option>
								<option id="luna" value="luna" {if $radio_style=="luna"}selected="selected"{/if}>Luna Alora (Luna Radio (Native Radio v5))</option>
								<option id="internal" value="internal" {if $radio_style=="internal"}selected="selected"{/if}>Bailey Brooke (HTML5 internal (Luna flash fallback))</option>
								<option id="clever" value="clever" {if $radio_style=="clever"}selected="selected"{/if}>Megan Fox (Clever)</option>
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
                                             <input type="text" id="simple-color-picker" style="background-color: {if isset($playerkleur)}{$playerkleur}{/if};" name="playerkleur" class="form-control color-picker__value color-picker__preview" placeholder="playerkleur" value="{if isset($playerkleur)}{$playerkleur}{/if}" title="Deze kleur zal de achtergrond zijn van de radioplayer" data-toggle="tooltip" data-placement="top">
                                            <div class="form-control-position">
                                                <i class="la la-adjust black color-picker__preview" style="background-color: {if isset($playerkleur)}{$playerkleur}{/if};"></i>
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
                                            <input type="text" id="simple-color-picker2" style="background-color: {if isset($tekstkleur)}{$tekstkleur}{/if};" name="tekstkleur" class="form-control color-picker__value color-picker__preview" placeholder="tekstkleur" value="{if isset($tekstkleur)}{$tekstkleur}{/if}" title="Deze kleur zal de text zijn van de radioplayer" data-toggle="tooltip" data-placement="top">
                                            <div class="form-control-position">
                                                <i class="la la-adjust black color-picker__preview" style="background-color: {if isset($tekstkleur)}{$tekstkleur}{/if};"></i>
                                            </div>
                                        </div>
                    </div>
					</div>
                    
                </div>
				</div>
				</div>
				<br /><br />
				<!-- Kleur van de player -->
                    
					<div id="volslide" class="row">
                        <label for="tekstkleur" class="control-label col-sm-2 white">Volume Slider kleur</label>
						<div class="col-sm-4">
                                        <div class="form-group">
										<div class="input-group">
						<!-- <span class="input-group-addon"><i class="zwicon-brush"></i></span> -->
                        <div class="form-group color-picker">
						<div class="position-relative has-icon-left">
                                            <input type="text" id="simple-color-picker4" style="background-color: {if isset($volslide)}{$volslide}{/if};" name="volslide" class="form-control color-picker__value color-picker__preview" placeholder="volslide" value="{if isset($volslide)}{$volslide}{/if}" title="Deze kleur zal de text zijn van de volume slider" data-toggle="tooltip" data-placement="top">
                                            <div class="form-control-position">
                                                <i class="la la-adjust black color-picker__preview" style="background-color: {if isset($volslide)}{$volslide}{/if};"></i>
                                            </div>
                                        </div>
                    </div>
					</div>
                    
                </div>
				</div>
				</div>
				
				</div>
				</div>

                <!-- EXTRA: ADS -->
                <div id="ads" class="tab-pane fade" aria-labelledby="base-tab7">
                    <br />
                    <div class="alert alert-info">
                        Dankzij advertenties kunnen wij steeds de beste service blijven leveren. Maar omdat wij begrijpen dat veel chatters dit als storend kunnen ervaren voorzien wij de hier de mogelijkheid deze uit te schakelen.
                    </div>

                    <!-- Advertenties inschakelen -->
                    <div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Ik wil Chattersworld steunen door een advertentie onder mijn chatbox te plaatsen" class="control-label col-sm-2 white">Steun Chattersworld door een advertentie te tonen</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="ads_enabled" value="true" {if $ads_enabled!="false"}checked="checked"{/if}>
                        
						<i class="toggle-switch__helper"></i>
						</div>
						</div>
                    </div>
					<div class="form-group">
					<div class="row">
                        <label for="textstyling" title="Laat de statistieken link zien op mijn chat" class="control-label col-sm-2 white">Laat de statistieken link zien op mijn chat</label>
                        <div class="toggle-switch toggle-switch--green">
                            <input type="checkbox" class="switchery" name="showstats" value="true" {if $showstats!="false"}checked="checked"{/if}>
                        
						<i class="toggle-switch__helper"></i>
						</div>
						</div>
                    </div>
                </div>


            </div>
			<br /><br />
			<div class="form-group">
                      <label class="col-md-4 control-label" for=""></label>
                      <div class="col-md-4">
            <button class="btn btn-primary" type="submit">{if isset($chat_id)}Chat opslaan{else}Chat aanmaken{/if}</button>
			</div>
                    </div>
        </form>
		<div class="card-header">
                                    <h4 class="card-title white">Voorbeeld</h4>
									<p class="card-text"><center>De getoonde voorbeeld is een fractie voor hoe de chat daadwerkelijk is! <br />
Niet mogelijk om in te loggen!</center></p>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        
                                    </div>
                                </div>
		{literal}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script>
$(document).ready(function() {
	$('input[name=chat_name],input[name=chat_bgurl],select[name=cam],select[name=chat_style],select[name=mic],select[name=query],input[name=kiwi_asl],input[name=html5color]').on('change keyup', function() {
		var channel = $('input[name=chat_name]').val();
		var bg = $('input[name=chat_bgurl]').val();
		var html5color = $('input[name=html5color]').val();
		var style = $('select[name=chat_style]').val();
		var asl = $('input[name=kiwi_asl]').is(':checked');
		
		
		var url = 'https://www.chattersworld.nl/preview/chat.php?chan=' + channel + '&style=' + style + '&bg=' + bg + '&html5color=' + html5color.replace("#", "%23") + '&asl=' + asl;
		// var frame = '<iframe id="iframe" src="https://www.chattersworld.nl/preview/chat.php?chan=' + channel + '&mic=' + mic + '&cam=' + cam + '&icons=' + icons + '&style=transparent&query=' + query + '&bg=' + bg +'&asl=' + asl + '" style="width:600px; height:500px;"></iframe>';
		var mob = 'https://mobilechat.chattersworld.nl/?channel=#' + channel;
      
		// $('#url').val(frame);
		$('#iframe').attr('src', url);
		$('#href').html('<a href="' + url + '" target="_blank">' + url +'</a>');
        $('#mobhref').html('<a href="' + mob + '" target="_blank">' + mob +'</a>');

		
	});
});
</script>
{/literal}
<iframe id="iframe" src="https://www.chattersworld.nl/preview/chat.php?chan=default" style="width:100%; height:700px; border:0;"></iframe>
<p class="card-text"><small><center>Het voorbeeld betreft een nietwerkbaar exemplaar;<br />Het voorbeeld word ook bij elke aanpassing ververst;<br />Gebruik de daadwerkelijke URL om in te loggen;<br />Aan dit voorbeeld kunnen geen rechten worden ontleend.</center></small></p>
    </div>
</div>
