
{if $metadata['radio'] == "true"}
    {if $metadata['radio_player'] == "stenly"}
		<!-- must have -->
		<link href="radiolibs/sticky/audio8_html5.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="radiolibs/sticky/js/jquery.mousewheel.min.js" type="text/javascript"></script>
		<script src="radiolibs/sticky/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
		<script src="radiolibs/sticky/js/audio8_html5.js" type="text/javascript"></script>
        <div class="audio8_html5_sticky">
				<div class="audio8_html5">
					<audio id="lbg_audio8_html5_shoutcast_2" preload="metadata">
						<div class="xaudioplaylist">
							<ul>
								<li class="xradiostream">{$metadata['radio_link']}</li>
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
					playerBackgroundColor:"{if $metadata['bgcolor'] == "rgba(0,0,0,0,0.8"}#000{else}{$metadata['bgcolor']}{/if}",
					playerBackgroundOpacity:65,
					sticky:true,
					bannerWidth:728,
					bannerHeight:90,
					bannerIntervalSeconds:5,
					bannerLinkTarget:"darkHover",
					initialVolume:0.8,
					autoPlay:true,
					volumeOffColor:"#cccccc",
					volumeOnColor:"#9f9f9f",
					songTitleColor:"#FFF",
					radioStationColor:"#FFF",
					imageBorderColor:"#0a0a0a",
					minimizeButtonText:"Radio",
					minButtonColor:"#989898",
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
        <script type="text/javascript" src="radiolibs/cwflash/nativeflashradiov3.js"></script>

	<center>
        <div id="flashradio" class="socialfooter" style="height:50px; width:80%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));">
          V3 Player Chattersweb.nl
        </div>
        <script type="text/javascript">
                    $("#flashradio").flashradio({
                        themecolor: "#800000", 
                        channelurls: "{$metadata['radio_link']}", 
                        radioname: "", 
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
        <script src="radiolibs/luna/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="radiolibs/luna/lunaradio.min.js"></script>

	<center>
        <div id="lunaradio" style='width:80%; height:70px;
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
  border: none;'>
<div id="flashradio" style="height:100px; width:100%;">
Native Flashradio V4
</div>
</div>
        <script>
$("#lunaradio").lunaradio({
	token: "VVpTZmZXZGVpYWReViBgXg==",
	userinterface: "small",
	backgroundcolor: "rgba(248,13,13,0.66)",
	fontcolor: "#ffffff",
	hightlightcolor: "#fa225b",
	fontname: "Open Sans",
	googlefont: "open+sans:300",
	fontratio: "0.4",
	radioname: "{$metadata['radio_name']}",
	scroll: "true",
	coverimage: "https://horus.chattersworld.nl/dist/img/c4all.png",
	coverstyle: "circle",
	usevisualizer: "fake",
	visualizertype: "",
	itunestoken: "1000lIPN",
	metadatatechnic: "stream-icy-meta",
	ownmetadataurl: "",
	streamurl: "{$metadata['radio_link']}",
	streamtype: "{$metadata['radio_type']}",
	icecastmountpoint: "",
	radionomyid: "",
	radionomyapikey: "",
	radiojarid: "",
	radiocoid: "sdef46f462",
	shoutcastpath: "/live",
	shoutcastid: "1",
	streamsuffix: "",
	metadatainterval: "20000",
	volume: "90",
	debug: "false",
	usestreamcorsproxy: "false", 
	corsproxy: "",
});
</script>
         
        </center>




    
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
