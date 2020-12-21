<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:10:30
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-conf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfafb63f4a21_53225391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71a4a5a9866ac0ae9fa751fa31e651c3182d9df0' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-conf.tpl',
      1 => 1608495025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfafb63f4a21_53225391 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html><html><head>

<?php echo '<script'; ?>
 name="kiwiconfig">
window.kiwiConfig = function kiwiConfig() {
        console.log('off');
        return {
		"startupScreen": "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_asl'] == 'true') {?>plugin-asl<?php } else { ?>welcome<?php }?>",
		"windowTitle": "..::Chattersworld - #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
::.. The web IRC client",
		"kiwiServer": "https://<?php echo $_smarty_tpl->tpl_vars['gateway']->value;?>
/webirc/kiwiirc/",
		"theme": "CWO",
		"disconnectOnSaslFail": false,
		"themes": [
				
					<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "nightswatch") {?>
				{ "name": "CWO", "url": "static/themes/dark-fluid" }
				<?php } else { ?>
				{ "name": "CWO", "url": "static/themes/cwo-chameleon-kiwiirc4" }
				<?php }?>
				],
		"showColorPicker": true,
		"startupOptions": { 
				"server": "<?php echo $_smarty_tpl->tpl_vars['irc']->value;?>
", 
				"infoBackground": "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
} else { ?>https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg<?php }?>", 
				"infoContent": "<a class=\"netlogo\" href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
\"><span></span><img src=\"<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
\"></a><div><a href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.chattersworld.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
				"greetingText": "<div style='margin:0px 0px 0px 0px'><center><a class=\"netlogo\" href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
\"><span></span><img src=\"<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
\" height='60px'></a></center></div>",
				"state_key": "CWO-Chameleon-65",
				"buttonText": "<center><i class='fa fa-sign-in' style='margin-right:5px !important;'></i> Chatten</center>",
				"gecos": "..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 HTML5 Webchat::..",
				"port": 6697, 
				"tls": true, 
				"direct": false, 
				"showChannel": false,
				"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
				"channel": "#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
",
				"age": "",
				"sex": "",
				"location": "",
				"remember_buffers": false, 
				"nick": "" 
			},
		"sidebarDefault": "nicklist",
		"buffers": {
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['private'] == "false") {?>"block_pms": true, <?php }?>
				"coloured_nicklist": false,
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>"nicklist_avatars": true, <?php } else { ?>"nicklist_avatars": false,<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['hostnames'] == "true") {?>"show_hostnames": true, <?php } else { ?>"show_hostnames": false,<?php }?>
				"colour_nicknames_in_messages": false,
				"inline_link_auto_previews": false,
				"inline_link_auto_preview_whitelist": ".*",
				"messageLayout": "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>modern<?php } else { ?>inline<?php }?>",
				"default_kick_reason": "Gedraag je!",
				"share_typing": true
			},
		"plugins": [
			<?php if ($_smarty_tpl->tpl_vars['metadata']->value['webcam'] == "true") {?>
			{
				"name": "conference",
				"url": "static/plugins/conference/plugin-conference.min.js?v=1.3"
			},<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "nightswatch") {?>
				{"name": "theme-dark-fluid", "url": "static/plugins/theme-dark-fluid.js"},
				<?php }?>
				{"name": "emoji", "url": "static/plugins/plugin-emoji-prelim.min.js"},
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['private'] == "true") {?>
				{"name": "simosnapcss","url": "static/plugins/block-queries.html"},
				<?php }?>
				{"name": "simosnapcss","url": "static/plugins/cwo-css3.html"},
				
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true" && $_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "internal") {?>
				{"name": "plugin-radio","url": "static/plugins/plugin-radio.html"},
				<?php }?>
				{"name": "nickserv", "url": "static/plugins/plugin-nickserv.js"},
				{ "name": "font", "url": "static/plugins/font-size.html" },
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>
				{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"},
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_giphy'] == "true") {?>
				{"name": "giphy", "url": "static/plugins/plugin-giphy.html"},
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_imgur'] == "true") {?>
				{"name": "imgurl", "url": "static/plugins/plugin-imgur.html"},
				<?php }?>
				{"name": "ident", "url": "static/plugins/ident.js?v=1.2"},
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_upload'] == "true") {?>
				{"name": "fileuploader", "url": "static/plugins/plugin-fileuploader.js?v=1.1"},
				<?php }?>
				{"name": "asl","url": "static/plugins/plugin-asl.js?cb=22"}
		],
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_asl'] == 'true') {?>
		"plugin-asl" : {
					"gecosType": 2,
					"showRealname": false,
					"showUserBrowser": true,
					"userBrowserIcon": "fa-heart",
					"fallbackColour": "",
					"singleLineUserbox": false,
					"singleLineString": {
						"age": "%a jaar oud",
						"sex": "%s",
						"location": "%l",
						"separator": " "
					},
					"ageRanges": [
						{ "name": "_all", "value": "all" },
						{ "name": "< 25", "value": "<25" },
						{ "name": "25 - 45", "value": "25-46" },
						{ "name": "> 45", "value": ">45" }
					],
					"sexes": {
						"_male": { "chars": "M", "colour": "#00F" },
						"_female": { "chars": "F", "colour": "#F0F" },
						"_other": { "chars": "O", "colour": "#0F0" }
					},
					"queryKeys": {
						"age": "age",
						"sex": "sex",
						"location": "location",
						"realname": "realname"
					},
					"localesPath": "static/plugins/plugin-asl/locales/"
		},
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>
		"plugin-gravatar": {
					"gatewayURL": "//<?php echo $_smarty_tpl->tpl_vars['gateway']->value;?>
/",
					"gravatarURL": "//www.gravatar.com/avatar/",
					"gravatarRating": "g",
					"gravatarFallback": "robohash"
		},
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['webcam'] == "true") {?>
		"plugin-conference":{ 
				"server": "meet.chattersworld.nl",
				"secure": false,
				"queries": true,
				"channels": true,
				"enabledInChannels": [ "*" ],
				"joinText": "heeft de mediaconferentie opgestart, klik op de link om te joinen!",
				"inviteText": "is inviting you to a private call.",
				"joinButtonText": "Join nu!",
				"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
				"showLink": true,
				"useLinkShortener": true,
				"linkShortenerURL": "https://x0.no/api/?{{ link }}",
				"interfaceConfigOverwrite": {
					"SHOW_JITSI_WATERMARK": true,
					"SHOW_WATERMARK_FOR_GUESTS": true,
					"SHOW_BRAND_WATERMARK": true,
					"BRAND_WATERMARK_LINK": "https://chattersworld.nl/",
					"JITSI_WATERMARK_LINK": "https://chattersworld.nl",
					"MOBILE_APP_PROMO": true,
					"DEFAULT_REMOTE_DISPLAY_NAME": "",
					"VERTICAL_FILMSTRIP": false,
					"LANG_DETECTION": true,
					"TOOLBAR_BUTTONS": [
								<?php if ($_smarty_tpl->tpl_vars['metadata']->value['mic'] == "true") {
} else { ?>"microphone",<?php }?> "camera", "fullscreen", "fodeviceselection", "hangup",
								"settings", "videoquality", "filmstrip",
								"stats", "tileview", "shortcuts", "sharedvideo"
					]
				},
				"configOverwrite": {
					"startWithVideoMuted": false,
					"startWithAudioMuted": true
				}
		},
		<?php }?>
		"plugin-radio": {
				"url": "stations.php?id=<?php echo $_GET['id'];?>
"
		},
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_upload'] == "true") {?>
		"fileuploader": {
			"server": "<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
",
			"maxFileSize": 10485760,
			"note": "Let op, deze bestanden blijven maximaal 24 uur bestaan!"
		},
		<?php }?>
		"embedly": {
			"key": "aae4890b796c49dbbc079001e2f9d8e5"
			}
	}
}
<?php echo '</script'; ?>
>
<?php }
}
