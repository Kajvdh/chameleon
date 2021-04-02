
{if $metadata['radio'] == "true"}
    {if $metadata['radio_player'] == "stenly"}
		<!-- must have -->
		<link href="radiolibs/sticky/audio8_html5.css?v=2.0" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="{$fullurl}/radiolibs/sticky/js/jquery.mousewheel.min.js" type="text/javascript"></script>
		<script src="{$fullurl}/radiolibs/sticky/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
		<script src="{$fullurl}/radiolibs/sticky/js/audio8_html5.js?v=2.2" type="text/javascript"></script>
        <div class="audio8_html5_sticky">
				<div class="audio8_html5">
					<audio id="lbg_audio8_html5_shoutcast_2" preload="metadata">
						<div class="xaudioplaylist">
							<ul>
								<li class="xradiostream">{$metadata['radio_link']}{$metadata['mountpoint']}</li>
							</ul>
							
						</div>
						   No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
					</audio>
				</div>
			</div>
<script>
	jQuery(function() {
		setTimeout(function(){
				jQuery("#lbg_audio8_html5_shoutcast_2").audio8_html5({
					skin:"lightHover",
					playerHeight:94,
					titleWidth:200,
					playerBackgroundColor:"{$metadata['playerkleur']}",
					playerBackgroundOpacity:100,
					sticky:true,
					bannerWidth:728,
					bannerHeight:90,
					bannerIntervalSeconds:5,
					bannerLinkTarget:"darkHover",
					initialVolume:0.8,
					autoPlay:true,
					volumeOffColor:"#cccccc",
					volumeOnColor:"#9f9f9f",
					songTitleColor:"{$metadata['tekstkleur']}",
					radioStationColor:"{$metadata['tekstkleur']}",
					imageBorderColor:"#0a0a0a",
					minimizeButtonText:"Radio",
					minButtonColor:"{$metadata['tekstkleur']}",
					minButtonHoverColor:"#ffffff",
					facebookAppID:"",
					facebookShareTitle:"SHOUT - HTML5 Radio Player With Ads - ShoutCast and IceCast Support",
					facebookShareDescription:"A top-notch responsive HTML5 Radio Player with ads support, compatible with all major browsers and mobile devices.",
					pathToAjaxFiles:"",
					nowPlayingInterval:30,
					grabLastFmPhoto:true,
					grabStreamnameAndGenre:true,
					noImageAvailable:"https://horus.chattersworld.nl/dist/img/c4all.png",
					translateRadioStation:"",
					translateReadingData:"reading data...",
					translateAllRadioStations:"ALL RADIO STATIONS",
					popupWidth:1100,
					popupHeight:500,
					barsColor:"rgba(67,64,64,0.48)",
					showGradientOverBars:true,
					showBanner:false,
					showVolume:true,
					showFacebookBut:false,
					showTwitterBut:false,
					showPopupBut:true,
					showRadioStation:true,
					showTitle:true,
					showPlaylistBut:false,
					playlistTopPos:5,
					playlistBgColor:"#0a0a0a",
					playlistRecordBgOffColor:"#000000",
					playlistRecordBgOnColor:"#828282",
					playlistRecordBottomBorderOffColor:"#333333",
					playlistRecordBottomBorderOnColor:"#333333",
					playlistRecordTextOffColor:"#cccccc",
					playlistRecordTextOnColor:"#ffffff",
					categoryRecordBgOffColor:"#222222",
					categoryRecordBgOnColor:"#333333",
					categoryRecordBottomBorderOffColor:"#2f2f2f",
					categoryRecordBottomBorderOnColor:"#2f2f2f",
					categoryRecordTextOffColor:"#777777",
					categoryRecordTextOnColor:"#00b4f9",
					numberOfThumbsPerScreen:7,
					playlistPadding:18,
					firstCateg:"ALL RADIO STATIONS",
					showCategories:true,
					selectedCategBg:"#555555",
					selectedCategOffColor:"#FFFFFF",
					selectedCategOnColor:"#00b4f9",
					selectedCategMarginBottom:12,
					showSearchArea:true,
					searchAreaBg:"#555555",
					searchInputText:"search...",
					searchInputBg:"#cccccc",
					searchInputBorderColor:"#333333",
					searchInputTextColor:"#333333",
					showPlaylistNumber:true
				});
		}, 1000);
	});
</script>


    {elseif $metadata['radio_player'] == "cwflash"}
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="{$fullurl}/radiolibs/cwflash/nativeflashradiov3.js"></script>

	<center>
        <div id="flashradio" class="socialfooter" style="height:50px; width:50%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));">
          V3 Player Chattersweb.nl
        </div>
        <script type="text/javascript">
                    $("#flashradio").flashradio({
                        themecolor: "{$metadata['playerkleur']}", 
                        channelurls: "{$metadata['radio_link']}{$metadata['mountpoint']}", 
                        radioname: "{$metadata['radio_name']}", 
                        scroll: "AUTO", 
                        autoplay: "TRUE", 
                        html5chrome: "TRUE", 
                        debug: "FALSE",
                        infolink: "#", 
                        songtitleurl: "",
                        infotext: "CW Flash Player By Stanley"});
                    </script>
         
        </center>



{elseif $metadata['radio_player'] == "luna"}
		<script src="{$fullurl}/radiolibs/luna/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="{$fullurl}/radiolibs/luna/lunaradio.min.js?v=5.20.09.08"></script>
		
		<center>
		<div id="lunaradio" style='width:50%;
			-webkit-border-top-left-radius: 50px;
			-webkit-border-top-right-radius: 50px;
			-webkit-border-bottom-right-radius: 50px;
			-webkit-border-bottom-left-radius: 50px;
			-moz-border-radius-topleft: 50px;
			-moz-border-radius-topright: 50px;
			-moz-border-radius-bottomright: 50px;
			-moz-border-radius-bottomleft: 50px;
			border-top-left-radius: 50px;
			border-top-right-radius: 50px;
			border-bottom-right-radius: 50px;
			border-bottom-left-radius: 50px;
			border: none;' class="lunaresponsive">
			<div id="flashradio" style="height:100px; width:100%;">
			Native Flashradio V4
			</div>
		</div>
        <script>
			$("#lunaradio").lunaradio({
				token: "VVpTZmZXZGVpYWReViBgXg==",
				userinterface: "small",
				backgroundcolor: "{$metadata['playerkleur']}",
				fontcolor: "{$metadata['tekstkleur']}",
				hightlightcolor: "{$metadata['volslide']}",
				fontname: "",
				googlefont: "",
				fontratio: "0.4",
				radioname: "{$metadata['radio_name']}",
				scroll: "true",
				coverimage: "https://horus.chattersworld.nl/dist/img/c4all.png",
				coverstyle: "circle",
				usevisualizer: "real",
				visualizertype: "8",
				multicolorvisualizer: "true",
				visualizeropacity: "1.0",
				itunestoken: "1000lIPN",
				metadatatechnic: "stream-icy-meta",
				ownmetadataurl: "",
				streamurl: "{$metadata['radio_link']}",
				streamtype: "{$metadata['radio_type']}",
				icecastmountpoint: "{if $metadata['radio_type'] == "icecast2"}{$metadata['mountpoint']}{/if}",
				radionomyid: "",
				radionomyapikey: "",
				radiojarid: "",
				radiocoid: "sdef46f462",
				shoutcastpath: "{if $metadata['radio_type'] == "shoutcast2"}{$metadata['mountpoint']}{/if}",
				shoutcastid: "1",
				streamsuffix: "",
				metadatainterval: "20000",
				volume: "50",
				debug: "false",
				usestreamcorsproxy: "false", 
				autoplay: "true",
				corsproxy: "{if $metadata['radio_type'] == "shoutcast"}{else}https://api.allorigins.win/raw?url={/if}",
			});
		</script>
         
        </center>
{elseif $metadata['radio_player'] == "hero"}
<link href="radiolibs/hero/audio6_html5.css?v=2.0" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

<script src="{$fullurl}/radiolibs/hero/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="{$fullurl}/radiolibs/hero/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="{$fullurl}/radiolibs/hero/js/audio6_html5.js?v=2.2" type="text/javascript"></script>
		<script>
			jQuery(function() {
				setTimeout(function(){
						jQuery("#lbg_audio6_html5_shoutcast_1").audio6_html5({
							radio_stream:"{$metadata['radio_link']}{$metadata['mountpoint']}",
							radio_name:"{$metadata['radio_name']}",
							playerWidth:355,
							imageHeight:355,
							skin:"whiteControllers",
							responsive:true,
							grabLastFmPhoto:true,
							autoPlay:false,
							songTitleColor:"{$metadata['tekstkleur']}",
							authorTitleColor:"{$metadata['tekstkleur']}",
							lineSeparatorColor:"#dba390",
							radioStationColor:"{$metadata['tekstkleur']}",
							frameBehindTextColor:"{$metadata['playerkleur']}",
							frameBehindButtonsColor:"{$metadata['playerkleur']}",
							sticky:true,
							startMinified:true,
							showOnlyPlayButton:false,
							centerPlayer:true,
							playerBorderSize:0,
							playerBorderColor:"#000000",
							showFacebookBut:false,
							facebookAppID:"",
							facebookShareTitle:"HTML5 Radio Player With History- Shoutcast and Icecast",
							facebookShareDescription:"A top-notch responsive HTML5 Radio Player compatible with all major browsers and mobile devices.",
							showTwitterBut:false,
							showVolume:true,
							showRadioStation:true,
							showTitle:true,
							showHistoryBut:false,
							showHistory:false,
							showHistoryOnInit:false,
							translateReadingData:"reading data...",
							historyTranslate:"HISTORY - latest played songs",
							historyTitleColor:"#825959",
							historyBgColor:"#ffcc99",
							historyRecordBgColor:"transparent",
							historyRecordBottomBorderColor:"transparent",
							historyRecordSongColor:"#000000",
							historyRecordSongBottomBorderColor:"#c97a7a",
							historyRecordAuthorColor:"#525252",
							numberOfThumbsPerScreen:3,
							historyPadding:16,
							historyRecordTitleLimit:28,
							historyRecordAuthorLimit:36,
							nowPlayingInterval:35,
							noImageAvailable:"https://horus.chattersworld.nl/dist/img/c4all.png"
						});
				}, 1000);
			});
		</script>

        <div class="audio6_html5" style="height:30px;">
        	<audio id="lbg_audio6_html5_shoutcast_1" preload="metadata">
           No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
           </audio>
        </div>



    
    {elseif $metadata['radio_player'] == "muses"}
        <center>
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <script type="text/javascript" src="//hosted.muses.org/mrp.js"></script>
            <script type="text/javascript">
                MRP.insert({
                'url':'{$metadata['radio_link']}{if $metadata['radio_type'] == "shoutcast"}/;{/if}',
                'codec':'mp3',
                'volume':65,
                'autoplay':false,
                'buffering':5,
                'title':'{$metadata['radio_name']}',
                'welcome':'Welcome to {$metadata['radio_name']}',
                'bgcolor':'#FFFFFF',
                'skin':'neonslim',
                'width':501,
                'height':32
                });
            </script>
            <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
        </center>
	{elseif $metadata['radio_player'] == "internal"}
        <script src="{$fullurl}/radiolibs/luna/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{$fullurl}/radiolibs/luna/lunaradio.min.js?v=5.20.09.08"></script>

		<center>
		<div id="lunaradio" style='width:50%;
			-webkit-border-top-left-radius: 50px;
			-webkit-border-top-right-radius: 50px;
			-webkit-border-bottom-right-radius: 50px;
			-webkit-border-bottom-left-radius: 50px;
			-moz-border-radius-topleft: 50px;
			-moz-border-radius-topright: 50px;
			-moz-border-radius-bottomright: 50px;
			-moz-border-radius-bottomleft: 50px;
			border-top-left-radius: 50px;
			border-top-right-radius: 50px;
			border-bottom-right-radius: 50px;
			border-bottom-left-radius: 50px;
			border: none;' class="lunaresponsive">
			<div id="flashradio" style="height:100px; width:100%;">
			Native Flashradio V4
			</div>
		</div>
		<script>
		$("#lunaradio").lunaradio({
			token: "VVpTZmZXZGVpYWReViBgXg==",
			userinterface: "small",
			backgroundcolor: "{$metadata['playerkleur']}",
			fontcolor: "{$metadata['tekstkleur']}",
			hightlightcolor: "{$metadata['volslide']}",
			fontname: "",
			googlefont: "",
			fontratio: "0.4",
			radioname: "{$metadata['radio_name']}",
			scroll: "true",
			coverimage: "https://horus.chattersworld.nl/dist/img/c4all.png",
			coverstyle: "circle",
			usevisualizer: "real",
			visualizertype: "8",
			multicolorvisualizer: "true",
			visualizeropacity: "1.0",
			itunestoken: "1000lIPN",
			metadatatechnic: "stream-icy-meta",
			ownmetadataurl: "",
			streamurl: "{$metadata['radio_link']}",
			streamtype: "{$metadata['radio_type']}",
			icecastmountpoint: "{if $metadata['radio_type'] == "icecast2"}{$metadata['mountpoint']}{/if}",
			radionomyid: "",
			radionomyapikey: "",
			radiojarid: "",
			radiocoid: "sdef46f462",
			shoutcastpath: "{if $metadata['radio_type'] == "shoutcast2"}{$metadata['mountpoint']}{/if}",
			shoutcastid: "1",
			streamsuffix: "",
			metadatainterval: "20000",
			volume: "50",
			debug: "false",
			usestreamcorsproxy: "false",
			autoplay: "true",
			corsproxy: "{if $metadata['radio_type'] == "shoutcast"}{else}https://api.allorigins.win/raw?url={/if}",
		});
		</script>
				
		</center>
		{elseif $metadata['radio_player'] == "clever"}
		<!-- must have -->
		<link href="radiolibs/clever/audio11_html5.css?v=1.3" rel="stylesheet" type="text/css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="{$fullurl}/radiolibs/clever/js/audio11_html5.js?v=2.3" type="text/javascript"></script>
		<!-- must have -->
		<script>
	jQuery(function() {
		setTimeout(function(){
				jQuery("#lbg_audio11_html5_shoutcast_1").audio11_html5({
						radio_stream:"{$metadata['radio_link']}{$metadata['mountpoint']}",
						playerWidth:800,
						width100Proc:true,
						sticky:true,
						centerPlayer:true,
						grabArtistPhoto:true,
						autoPlay:true,
						borderWidth:0,
						borderColor:"#bfbfbf",
						bgColor:"{$metadata['playerkleur']}",
						bgColorOpacity:1,
						barsColor:"#ffffff",
						playButtonColor:"{$metadata['tekstkleur']}",
						playButtonHoverColor:"#d7d7d7",
						numberOfElementsDisplayed:1,
						historyLeftPadding:410,
						historyRightPadding:410,
						historyTopPadding:0,
						historyBottomPadding:1,
						historyRecordTitleLimit:24,
						historyRecordAuthorLimit:34,
						songAuthorLineSeparatorOffColor:"#bfbfbf",
						historyRecordTimeOffColor:"{$metadata['playerkleur']}",
						historyRecordSongOffColor:"{$metadata['tekstkleur']}",
						historyRecordAuthorOffColor:"#575757",
						historyRecordTimeOnColor:"{$metadata['tekstkleur']}",
						historyRecordSongOnColor:"{$metadata['tekstkleur']}",
						historyRecordAuthorOnColor:"{$metadata['tekstkleur']}",
						historyRecordBackgroundOnColor:"{$metadata['playerkleur']}",
						pathToAjaxFiles:"",
						nowPlayingInterval:35,
						noImageAvailable:"https://chameleon.chattersworld.nl/dist/img/c4all.png"
				});
			}, 1000);
		});
		</script>
		<div class="audio11_html5">
							<audio id="lbg_audio11_html5_shoutcast_1" preload="metadata">
								No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
							</audio>
		</div>
    {else}
        <center>
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <script type="text/javascript" src="//hosted.muses.org/mrp.js"></script>
            <script type="text/javascript">
                MRP.insert({
                'url':'{$metadata['radio_link']}{if $metadata['radio_type'] == "shoutcast"}/;{/if}',
                'codec':'mp3',
                'volume':65,
                'autoplay':false,
                'buffering':5,
                'title':'{$metadata['radio_name']}',
                'welcome':'Welcome to {$metadata['radio_name']}',
                'bgcolor':'#FFFFFF',
                'skin':'neonslim',
                'width':501,
                'height':32
                });
            </script>
            <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
        </center>

        <!-- NO HTTP SUPPORT SO KILL IT WITH FIRE <center>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="180" height="60">
            <param name="movie" value="http://www.museter.com/ffmp3-config.swf" />
            <param name="flashvars" value="url={$metadata['radio_link']}{if $metadata['radio_type'] == "shoutcast"}/;{/if}&lang=nl&codec=mp3&volume=80&introurl=&traking=true&jsevents=false&buffering=5&skin=http://www.museter.com/skins/mcclean/ffmp3-mcclean.xml&title={$metadata['radio_name']}" />
            <param name="wmode" value="transparent" />
            <param name="allowscriptaccess" value="always" />
            <param name="scale" value="noscale" />
            <embed src="http://www.museter.com/ffmp3-config.swf" flashvars="url={$metadata['radio_link']}{if $metadata['radio_type'] == "shoutcast"}/;{/if}&lang=nl&codec=mp3&volume=80&introurl=&traking=true&jsevents=false&buffering=5&skin=http://www.museter.com/skins/mcclean/ffmp3-mcclean.xml&title={$metadata['radio_name']}" width="180" scale="noscale" height="60" wmode="transparent" allowscriptaccess="always" type="application/x-shockwave-flash" />
            </object>
        </center> -->
    {/if}

{/if}
