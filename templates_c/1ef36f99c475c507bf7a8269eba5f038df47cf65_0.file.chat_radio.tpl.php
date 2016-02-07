<?php
/* Smarty version 3.1.29, created on 2016-02-06 23:53:11
  from "/var/www/html/templates/chat_radio.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b67957b6c9b8_88889667',
  'file_dependency' => 
  array (
    '1ef36f99c475c507bf7a8269eba5f038df47cf65' => 
    array (
      0 => '/var/www/html/templates/chat_radio.tpl',
      1 => 1454799146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b67957b6c9b8_88889667 ($_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
    <?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "stenly") {?>

        <link rel='stylesheet' id='fullwidthAudioPlayer-css'  href='radiolibs/stanplayer/jquery.fullwidthAudioPlayer.css?ver=4.1.1' type='text/css' media='all' />
        <link rel='stylesheet' id='fullwidthAudioPlayerresponsive-css'  href='radiolibs/stanplayer/jquery.fullwidthAudioPlayer-responsive.css?ver=4.1.1' type='text/css' media='all' />
        <link rel='stylesheet' id='jplayer.pink.flag-css'  href='radiolibs/stanplayer/premium-pixels/premium-pixels.css?ver=4.1.1' type='text/css' media='all' />
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.js?ver=1.11.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery-migrate.min.js?ver=1.2.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jplayer.playlist.min.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/amplify.min.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.fullwidthAudioPlayer.min.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
        //<![CDATA[
        jQuery(document).ready(function($){
        	$("#jquery_jplayer_1").jPlayer({
        		ready: function (event) {
        			$(this).jPlayer("setMedia", {
                        <?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast") {?>
                            mp3:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];?>
/;.mp3"
                        <?php } else { ?>
                            mp3:"<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];?>
"
                        <?php }?>
        			}).jPlayer("stop") ;
        		},
        		swfPath: "jplayer",
        		wmode: "window",
        		smoothPlayBar: true,
        		keyEnabled: false
        	});
        });
        //]]>
        <?php echo '</script'; ?>
>
        <div id="skin-wrapper" data-skin-name="premium-pixels"><div id="jquery_jplayer_1" class="jp-jplayer"></div></div>
        <div id="jp_container_1" class="jp-audio jp-radio">

        	<div class="jp-type-single">
        		<div class="jp-gui jp-interface">
        		<div class="jp-inner">
        		<div class="jp-close-btn">Verberg</div>
        			<ul class="jp-controls">
        				<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
        				<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
        				<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
        				<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
        				<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
        				<span style="text-align:left"><li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li></span>
        			</ul>
        			<div class="jp-progress">
        				<center><strong><?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
</strong>
        				<!-- <span style="display:block;"><a href="http://jukebox/verzoek.php" target="_new" onclick="window.open('http://jukebox/verzoek.php','Verzoekserver Radioname','width=600,height=400,scrollbars=yes,toolbar=no,menubar=no,location=yes,resizable=yes'); return false">Vraag hier een verzoekje aan</a></span> /-->
        			</center></div>
        			<div class="jp-time-holder">
        				<div class="jp-current-time"></div>

        			</div>
        			<div class="jp-volume-bar">
        				<div class="jp-volume-bar-value"></div>
        			</div>
        		</div>
        		</div>

        	</div>
        </div>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.easing.1.3.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.preloadify.min.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.prettyPhoto.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.fitvids.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/sys_custom.js?ver=1.0'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.flexslider.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/waypoints.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/soundmanager2-nodebug-jsmin.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.jplayer.min.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jplayer.playlist.min.js?ver=4.1.1'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='radiolibs/stanplayer/jquery.fullwidthAudioPlayer.min.js?ver=4.1.1'><?php echo '</script'; ?>
>


    <?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "cwflash") {?>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="radiolibs/cwflash/nativeflashradiov3.js"><?php echo '</script'; ?>
>

	<center>
        <div id="flashradio" class="socialfooter" style="height:50px; width:80%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));">
          V3 Player Chattersweb.nl
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
                    $("#flashradio").flashradio({
                        themecolor: "#800000", 
                        channelurls: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];?>
", 
                        radioname: "", 
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




    <?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "muses") {?>
        <center>
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <?php echo '<script'; ?>
 type="text/javascript" src="http://hosted.musesradioplayer.com/mrp.js"><?php echo '</script'; ?>
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
        </center>
    <?php }?>

<?php }
}
}
