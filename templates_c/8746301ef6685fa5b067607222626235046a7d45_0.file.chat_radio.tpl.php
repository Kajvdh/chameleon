<?php
/* Smarty version 3.1.29, created on 2020-06-14 15:15:48
  from "/home/stats/chameleon/templates/chat_radio.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee62304b4dc91_12621669',
  'file_dependency' => 
  array (
    '8746301ef6685fa5b067607222626235046a7d45' => 
    array (
      0 => '/home/stats/chameleon/templates/chat_radio.tpl',
      1 => 1592140544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee62304b4dc91_12621669 ($_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
    <?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "stenly") {?>
		<!-- must have -->
		<link href="radiolibs/sticky/audio8_html5.css" rel="stylesheet" type="text/css">
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="radiolibs/sticky/js/jquery.mousewheel.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="radiolibs/sticky/js/jquery.touchSwipe.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="radiolibs/sticky/js/audio8_html5.js" type="text/javascript"><?php echo '</script'; ?>
>
        <div class="audio8_html5_sticky">
				<div class="audio8_html5">
					<audio id="lbg_audio8_html5_shoutcast_2" preload="metadata">
						<div class="xaudioplaylist">
							<ul>
								<li class="xradiostream"><?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];?>
</li>
							</ul>
							
						</div>
						   No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
					</audio>
				</div>
			</div>
<?php echo '<script'; ?>
>
	jQuery(function() {
		setTimeout(function(){
				jQuery("#lbg_audio8_html5_shoutcast_2").audio8_html5({
					skin:"lightHover",
					playerHeight:94,
					titleWidth:200,
					playerBackgroundColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['playerkleur'];?>
",
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
					songTitleColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
					radioStationColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
					imageBorderColor:"#0a0a0a",
					minimizeButtonText:"Radio",
					minButtonColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
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
<?php echo '</script'; ?>
>


    <?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "cwflash") {?>
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="radiolibs/cwflash/nativeflashradiov3.js"><?php echo '</script'; ?>
>

	<center>
        <div id="flashradio" class="socialfooter" style="height:50px; width:50%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));">
          V3 Player Chattersweb.nl
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
                    $("#flashradio").flashradio({
                        themecolor: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['playerkleur'];?>
", 
                        channelurls: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];?>
", 
                        radioname: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
", 
                        scroll: "AUTO", 
                        autoplay: "TRUE", 
                        html5chrome: "TRUE", 
                        debug: "FALSE",
                        infolink: "#", 
                        songtitleurl: "",
                        infotext: "CW Flash Player By Stanley"});
                    <?php echo '</script'; ?>
>
         
        </center>



<?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "luna") {?>
        <?php echo '<script'; ?>
 src="radiolibs/luna/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="radiolibs/luna/lunaradio.min.js?v=5.20.06.02"><?php echo '</script'; ?>
>

	<center>
        <div id="lunaradio" style='width:50%; height:70px;
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
        <?php echo '<script'; ?>
>
$("#lunaradio").lunaradio({
	token: "VVpTZmZXZGVpYWReViBgXg==",
	userinterface: "small",
	backgroundcolor: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['playerkleur'];?>
",
	fontcolor: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
	hightlightcolor: "#13c4eb",
	fontname: "Open Sans",
	googlefont: "open+sans:300",
	fontratio: "0.4",
	radioname: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
",
	scroll: "true",
	coverimage: "https://horus.chattersworld.nl/dist/img/c4all.png",
	coverstyle: "circle",
	usevisualizer: "fake",
	visualizertype: "4",
	itunestoken: "1000lIPN",
	metadatatechnic: "stream-icy-meta",
	ownmetadataurl: "",
	streamurl: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];?>
",
	streamtype: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_type'];?>
",
	icecastmountpoint: "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "icecast2") {
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];
}?>",
	radionomyid: "",
	radionomyapikey: "",
	radiojarid: "",
	radiocoid: "sdef46f462",
	shoutcastpath: "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast2") {
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];
}?>",
	shoutcastid: "1",
	streamsuffix: "",
	metadatainterval: "20000",
	volume: "50",
	debug: "false",
	usestreamcorsproxy: "false", 
	corsproxy: "",
});
<?php echo '</script'; ?>
>
         
        </center>
<?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "hero") {?>
<link href="radiolibs/hero/audio6_html5.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="radiolibs/hero/js/jquery.mousewheel.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="radiolibs/hero/js/jquery.touchSwipe.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="radiolibs/hero/js/audio6_html5.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	jQuery(function() {
		setTimeout(function(){
				jQuery("#lbg_audio6_html5_shoutcast_1").audio6_html5({
					radio_stream:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];?>
",
					radio_name:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
",
					playerWidth:355,
					imageHeight:355,
					skin:"whiteControllers",
					responsive:true,
					grabLastFmPhoto:true,
					autoPlay:false,
					songTitleColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
					authorTitleColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
					lineSeparatorColor:"#dba390",
					radioStationColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
					frameBehindTextColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['playerkleur'];?>
",
					frameBehindButtonsColor:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['playerkleur'];?>
",
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
<?php echo '</script'; ?>
>

             <div class="audio6_html5">
             	<audio id="lbg_audio6_html5_shoutcast_1" preload="metadata">
                No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
                </audio>
             </div>



    
    <?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "muses") {?>
        <center>
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <?php echo '<script'; ?>
 type="text/javascript" src="//hosted.muses.org/mrp.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
                MRP.insert({
                'url':'<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast") {?>/;<?php }?>',
                'codec':'mp3',
                'volume':65,
                'autoplay':false,
                'buffering':5,
                'title':'<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
',
                'welcome':'Welcome to <?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
',
                'bgcolor':'#FFFFFF',
                'skin':'neonslim',
                'width':501,
                'height':32
                });
            <?php echo '</script'; ?>
>
            <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
        </center>
    <?php } else { ?>
        <center>
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <?php echo '<script'; ?>
 type="text/javascript" src="//hosted.muses.org/mrp.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
                MRP.insert({
                'url':'<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast") {?>/;<?php }?>',
                'codec':'mp3',
                'volume':65,
                'autoplay':false,
                'buffering':5,
                'title':'<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
',
                'welcome':'Welcome to <?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
',
                'bgcolor':'#FFFFFF',
                'skin':'neonslim',
                'width':501,
                'height':32
                });
            <?php echo '</script'; ?>
>
            <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
        </center>

        <!-- NO HTTP SUPPORT SO KILL IT WITH FIRE <center>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="180" height="60">
            <param name="movie" value="http://www.museter.com/ffmp3-config.swf" />
            <param name="flashvars" value="url=<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast") {?>/;<?php }?>&lang=nl&codec=mp3&volume=80&introurl=&traking=true&jsevents=false&buffering=5&skin=http://www.museter.com/skins/mcclean/ffmp3-mcclean.xml&title=<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
" />
            <param name="wmode" value="transparent" />
            <param name="allowscriptaccess" value="always" />
            <param name="scale" value="noscale" />
            <embed src="http://www.museter.com/ffmp3-config.swf" flashvars="url=<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];
if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast") {?>/;<?php }?>&lang=nl&codec=mp3&volume=80&introurl=&traking=true&jsevents=false&buffering=5&skin=http://www.museter.com/skins/mcclean/ffmp3-mcclean.xml&title=<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
" width="180" scale="noscale" height="60" wmode="transparent" allowscriptaccess="always" type="application/x-shockwave-flash" />
            </object>
        </center> -->
    <?php }?>

<?php }
}
}
