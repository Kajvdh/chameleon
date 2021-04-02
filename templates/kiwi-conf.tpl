<!DOCTYPE html><html><head>
{literal}
<script name="kiwiconfig">
window.kiwiConfig = function kiwiConfig() {
        console.log('off');
        return {
		"startupScreen": "{/literal}{if $metadata['kiwi_asl'] == 'true'}plugin-asl{else}welcome{/if}{literal}",
		"windowTitle": "..::Chattersworld - #{/literal}{$metadata['name']}{literal}::.. The web IRC client",
		"kiwiServer": "https://{/literal}{$gateway}{literal}/webirc/kiwiirc/",
		"theme": "CWO",
		"hide_advanced": true,
		"disconnectOnSaslFail": false,
		"hideSettings": false,
		"nicklistGroupAway": true,
		"noticeActiveBuffer": true,
		"themes": [
				{/literal}
				{if $metadata['style'] == "nightswatch"}{literal}
				{ "name": "CWO", "url": "static/themes/theme-dark-fluid" }
				{/literal}{elseif $metadata['style'] == "transparent"}{literal}
				{ "name": "CWO", "url": "static/themes/transparent2" }
				{/literal}{else}{literal}
				{ "name": "CWO", "url": "static/themes/cwo-chameleon-kiwiirc4" }
				{/literal}{/if}{literal}
				],
		"showColorPicker": true,
		"startupOptions": { 
				"server": "{/literal}{$irc}{literal}", 
				"infoBackground": "{/literal}{if $metadata['bgurl'] != ''}{$metadata['bgurl']}{else}https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg{/if}{literal}", 
				"infoContent": "<a class=\"netlogo\" href=\"{/literal}{$fullurl}{literal}\"><span></span><img src=\"{/literal}{$logo}{literal}\"></a><div><a href=\"{/literal}{$fullurl}{literal}/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"{/literal}{$fullurl}{literal}/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.chattersworld.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
				"greetingText": "<div style='margin:0px 0px 0px 0px'><center><a class=\"netlogo\" href=\"{/literal}{$fullurl}{literal}\"><span></span><img src=\"{/literal}{$logo}{literal}\" height='60px'></a></center></div>",
				"state_key": "CWO-Chameleon-140",
				"buttonText": "<center><i class='fa fa-sign-in' style='margin-right:5px !important;'></i> Chatten</center>",
				"gecos": "..::{/literal}{$sitename}{literal} HTML5 Webchat::..",
				"port": 6697, 
				"tls": true, 
				"direct": false, 
				"showChannel": false,
				"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
				"channel": "#{/literal}{$metadata['name']}{literal}",
				"age": "",
				"sex": "",
				"location": "",
				"remember_buffers": false, 
				"nick": "" 
			},
		"sidebarDefault": "nicklist",
		"quitMessage": 'Pagina afgesloten! Tot Ziens!',
		"showChanlistModes": true,
		"buffers": {
				{/literal}{if $metadata['private'] == "false"}{literal}"block_pms": true, {/literal}{/if}{literal}
				"coloured_nicklist": false,
				{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}"nicklist_avatars": true, {/literal}{else}{literal}"nicklist_avatars": false,{/literal}{/if}{literal}
				{/literal}{if $metadata['hostnames'] == "true"}{literal}"show_hostnames": true, {/literal}{else}{literal}"show_hostnames": false,{/literal}{/if}{literal}
				"colour_nicknames_in_messages": false,
				"inline_link_auto_previews": {/literal}{if $metadata['embedly'] == "true"}true{else}false{/if}{literal},
				"inline_link_auto_preview_whitelist": ".*",
				"messageLayout": "{/literal}{if $metadata['kiwi_avatar'] == "true"}modern{else}inline{/if}{literal}",
				"default_kick_reason": "Gedraag je!",
				"default_ban_mask": "*!*@%h",
				"show_presence_changes": true,
				"show_timestamps": {/literal}{if $metadata['time'] == "true"}true{else}false{/if}{literal},
				"share_typing": true
			},
		"plugins": [
			{/literal}{if $metadata['webcam'] == "true"}{literal}
			{
				"name": "conference",
				"url": "static/plugins/conference/plugin-conference.min.js?v=1.4"
			},{/literal}{/if}{literal}
				{/literal}{if $metadata['style'] == "nightswatch"}{literal}
				{"name": "theme-dark-fluid", "url": "static/plugins/theme-dark-fluid.js"},
				{/literal}{/if}{literal}
				{"name": "emoji", "url": "static/plugins/plugin-emoji-prelim.min.js"},
				{/literal}{if $metadata['private'] == "true"}{literal}
				{"name": "simosnapcss","url": "static/plugins/block-queries.html"},
				{/literal}{/if}{literal}
				{"name": "simosnapcss","url": "static/plugins/cwo-css3.html"},
				{/literal}{if $metadata['private'] == "false"}{literal}
				{"name": "perform","url": "static/plugins/perform.js?v=9"},
				{/literal}{/if}{literal}
				{/literal}{if $metadata['radio'] == "true" && $metadata['radio_player'] == "internal"}{literal}
				{"name": "plugin-radio","url": "static/plugins/plugin-radio.html"},
				{/literal}{/if}{literal}
				{"name": "nickserv", "url": "static/plugins/plugin-nickserv.js"},
				{"name": "custom-selfuser", "url": "static/plugins/plugin-custom-selfuser.js"},
				{/literal}{if $metadata['tags'] == "true"}{literal}
				{ "name": "services", "url": "static/plugins/services.html?v=1.2" },
				{/literal}{/if}{literal}
				{ "name": "font", "url": "static/plugins/font-size.html" },
				{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}
				{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"},
				{ "name": "irccloud", "url": "static/plugins/irccloud.html" },
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_giphy'] == "true"}{literal}
				{"name": "giphy", "url": "static/plugins/plugin-giphy.html"},
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_imgur'] == "true"}{literal}
				{"name": "imgurl", "url": "static/plugins/plugin-imgur.html"},
				{/literal}{/if}{literal}
				{"name": "ident", "url": "static/plugins/ident.js?v=1.5"},
				{/literal}{if $metadata['kiwi_upload'] == "true"}{literal}
				{"name": "fileuploader", "url": "static/plugins/plugin-fileuploader.js?v=2.1"}{/literal}{if $metadata['kiwi_asl'] == 'true'},{/if}{literal}
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_asl'] == 'true'}{literal}
				{"name": "asl","url": "static/plugins/plugin-asl.js?cb=55"}
				{/literal}{/if}{literal}
		],
		{/literal}{if $metadata['kiwi_asl'] == 'true'}{literal}
		"plugin-asl" : {
					"gecosType": 2,
					"showRealname": false,
					"showUserBrowser": true,
					"userBrowserIcon": "fa-list",
					"fallbackColour": "default",
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
						"_other": { "chars": "O", "colour": "#bdbdbd" }
					},
					"queryKeys": {
						"age": "age",
						"sex": "sex",
						"location": "location",
						"realname": "realname"
					},
					"localesPath": "static/plugins/plugin-asl/locales/"
		},
		{/literal}{/if}{literal}
		{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}
		"plugin-gravatar": {
					"gatewayURL": "//{/literal}{$gateway}{literal}/",
					"gravatarURL": "//www.gravatar.com/avatar/",
					"gravatarRating": "g",
					"gravatarFallback": "wavatar"
		},
		{/literal}{/if}{literal}
		{/literal}{if $metadata['webcam'] == "true"}{literal}
		"plugin-conference":{ 
				"server": "meet.chattersworld.nl",
				"secure": true,
				"queries": true,
				"channels": true,
				"viewHeight": "{/literal}{$metadata['viewheight']}{literal}",
				"enabledInChannels": [ "*" ],
				"joinText": "{{ nick }} heeft de mediaconferentie opgestart!",
				"inviteText": "is inviting you to a private call.",
				"joinButtonText": "Join nu!",
				"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
				"linkShortenerAPIToken":"",
				"showLink": {/literal}{if $metadata['conflink'] == "true"}true{else}false{/if}{literal},
				"useLinkShortener": false,
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
								{/literal}{if $metadata['mic'] == "true"}{else}"microphone",{/if}{literal} "camera", "fullscreen", "fodeviceselection", "hangup",
								"settings", "videoquality", "filmstrip",
								"stats", "tileview", "shortcuts", "sharedvideo"
					]
				},
				"configOverwrite": {
					"startWithVideoMuted": false,
					"startWithAudioMuted": true
				}
		},
		{/literal}{/if}{literal}
		"plugin-radio": {
				"url": "stations.php?id={/literal}{$smarty.get.id}{literal}"
		},
		{/literal}{if $metadata['kiwi_upload'] == "true"}{literal}
		"fileuploader": {
			"server": "{/literal}{$file}{literal}",
			"maxFileSize": 10485760,
			"note": "Let op, deze bestanden blijven maximaal 24 uur bestaan!",
			"webpreview": {
				"enable": false,
				"url": "https://files.chattersworld.nl/embed?url={url}&center={center}&width={width}&height={height}"
			}
		},
		emojis: {
            '-___-': '1f611',
            ':\'-)': '1f602',
            '\':-)': '1f605',
            '\':-D': '1f605',
            '>:-)': '1f606',
            '\':-(': '1f613',
            '>:-(': '1f620',
            ':\'-(': '1f622',
            'O:-)': '1f607',
            '0:-3': '1f607',
            '0:-)': '1f607',
            '0;^)': '1f607',
            'O;-)': '1f607',
            '0;-)': '1f607',
            'O:-3': '1f607',
            '-__-': '1f611',
            ':-Þ': '1f61b',
            '<3': '2764',
            '</3': '1f494',
            ':\')': '1f602',
            ':-D': '1f603',
            '\':)': '1f605',
            '\'=)': '1f605',
            '\':D': '1f605',
            '\'=D': '1f605',
            '>:)': '1f606',
            '>;)': '1f606',
            '>=)': '1f606',
            'XD': '1f606',
			'xD': '1f606',
            ';-)': '1f609',
            '*-)': '1f609',
            ';-]': '1f609',
            ';^)': '1f609',
            '\':(': '1f613',
            '\'=(': '1f613',
            ':-*': '1f618',
            ':^*': '1f618',
            '>:P': '1f61c',
            'X-P': '1f61c',
            '>:[': '1f61e',
            ':-(': '1f61e',
            ':-[': '1f61e',
            '>:(': '1f620',
            ':\'(': '1f622',
            ';-(': '1f622',
            '>.<': '1f623',
            '#-)': '1f635',
            '%-)': '1f635',
            'X-)': '1f635',
            '\\0/': '1f646',
            '\\O/': '1f646',
            '0:3': '1f607',
            '0:)': '1f607',
            'O:)': '1f607',
            'O=)': '1f607',
            'O:3': '1f607',
            'B-)': '1f60e',
            '8-)': '1f60e',
            'B-D': '1f60e',
            '8-D': '1f60e',
            '-_-': '1f611',
            '>:\\': '1f615',
            '>:/': '1f615',
            ':-/': '1f615',
            ':-.': '1f615',
            ':-P': '1f61b',
            ':Þ': '1f61b',
            ':-b': '1f61b',
            ':-O': '1f62e',
            'O_O': '1f62e',
            '>:O': '1f62e',
            ':-X': '1f636',
            ':-#': '1f636',
            ':-)': '1f642',
            '(y)': '1f44d',
            ':D': '1f603',
            '=D': '1f603',
            ';)': '1f609',
            '*)': '1f609',
            ';]': '1f609',
            ';D': '1f609',
            ':*': '1f618',
            '=*': '1f618',
            ':(': '1f61e',
            ':[': '1f61e',
            '=(': '1f61e',
            ':@': '1f620',
            ';(': '1f622',
            'D:': '1f628',
            ':$': '1f633',
            '=$': '1f633',
            '#)': '1f635',
            '%)': '1f635',
            'X)': '1f635',
            'B)': '1f60e',
            '8)': '1f60e',
            ':/': '1f615',
            ':\\': '1f615',
            '=/': '1f615',
            '=\\': '1f615',
            ':L': '1f615',
            '=L': '1f615',
            ':P': '1f61b',
            ':p': '1f61b',
            '=P': '1f61b',
            ':b': '1f61b',
            ':O': '1f62e',
            ':X': '1f636',
            ':#': '1f636',
            '=X': '1f636',
            '=#': '1f636',
            ':)': '1f642',
            '=]': '1f642',
            '=)': '1f642',
            ':]': '1f642',
        },
		emojiLocation: 'https://kiwiirc.com/shared/emoji/',
		{/literal}{/if}{literal}
		"embedly": {
			"enable": {/literal}{if $metadata['embedly'] == "true"}true{else}false{/if}{literal},
			"key": ""
			}
	}
}
</script>
{/literal}