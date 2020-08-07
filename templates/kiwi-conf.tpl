<!DOCTYPE html><html><head>
{literal}
<script name="kiwiconfig">
{"startupScreen": "plugin-asl",
	"windowTitle": "..::example - #{/literal}{$metadata['name']}{literal}::.. The web IRC client",
	"kiwiServer": "https://gateway.example.nl:1085/webirc/kiwiirc/",
	"theme": "Osprey",
	"themes": [
			{ "name": "Default", "url": "static/themes/default" },
			{ "name": "Dark", "url": "static/themes/dark" },
			{ "name": "Coffee", "url": "static/themes/coffee" },
			{ "name": "GrayFox", "url": "static/themes/grayfox" },
			{ "name": "Nightswatch", "url": "static/themes/nightswatch" },
			{ "name": "Osprey", "url": "static/themes/osprey" },
			{ "name": "Radioactive", "url": "static/themes/radioactive" },
			{ "name": "Sky", "url": "static/themes/sky" },
			{ "name": "Elite", "url": "static/themes/elite" }
		],
	"showColorPicker": true,
	"startupOptions": { 
			"server": "irc.example.nl", 
			"infoBackground": "{/literal}{if $metadata['bgurl'] != ''}{$metadata['bgurl']}{else}cwobg.jpg{/if}{literal}", 
			"infoContent": "<a class=\"netlogo\" href=\"https://chameleon.example.nl\"><span></span><img src=\"https://atsiofrjlo.cloudimg.io/v7/https://example.nl/wp-content/uploads/2018/10/cropped-c4all.png\"></a><div><a href=\"https://chameleon.example.nl/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"https://chameleon.example.nl/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.example.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
			"state_key": "CWO-Chameleon-16", 
			"port": 6800, 
			"tls": true, 
			"direct": true, 
			"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
			"channel": "#{/literal}{$metadata['name']}{literal}",
			"age": "",
			"sex": "",
			"location": "",
			"remember_buffers": true, 
			"nick": "" 
		},
	"sidebarDefault": "nicklist",
	"buffers": {
			{/literal}{if $metadata['private'] == "true"}{literal}"block_pms": false, {/literal}{/if}{literal}
			"coloured_nicklist": false,
			"nicklist_avatars": true,
			"colour_nicknames_in_messages": false,
			"inline_link_auto_previews": true,
			"inline_link_auto_preview_whitelist": ".*",
			"messageLayout": "inline",
			"share_typing": true
		},
	"plugins": [
		{
			"name": "conference",
			"url": "static/plugins/conference/plugin-conference.min.js?v=1.2"
		},
			{"name": "emoji", "url": "static/plugins/plugin-emoji-prelim.min.js"},
			{"name": "simosnapcss","url": "static/plugins/cwo-css.html"},
			
			{/literal}{if $metadata['radio'] == "true" && $metadata['radio_player'] == "internal"}{literal}
			{"name": "plugin-radio","url": "static/plugins/plugin-radio.html"},
			{/literal}{/if}{literal}
			{"name": "nickserv", "url": "static/plugins/plugin-nickserv.js"},
			{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"},
			{"name": "asl","url": "static/plugins/plugin-asl.js?cb=20"}
    ],
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
	"plugin-gravatar": {
				"gatewayURL": "//gateway.example.nl:1085/",
				"gravatarURL": "//www.gravatar.com/avatar/",
				"gravatarRating": "g",
				"gravatarFallback": "robohash"
	},
	"conference":{ 
    		"server": "meet.example.nl",
    		"secure": false,
    		"enabledInChannels": [ "*" ],
    		"joinText": "heeft de mediaconferentie opgestart.",
    		"inviteText": "is inviting you to a private call.",
    		"joinButtonText": "Join nu!",
    		"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
    		"showLink": false,
    		"useBitlyLink": false,
			"queries": false,
    		"bitlyAccessToken": "BITLY_API_KEY_HERE",
    		"interfaceConfigOverwrite": {
        		"SHOW_JITSI_WATERMARK": true,
        		"SHOW_WATERMARK_FOR_GUESTS": true,
				"SHOW_BRAND_WATERMARK": true,
				"BRAND_WATERMARK_LINK": "https://example.nl/",
				"JITSI_WATERMARK_LINK": "https://example.nl",
				"MOBILE_APP_PROMO": true,
				"DEFAULT_REMOTE_DISPLAY_NAME": "",
				"VERTICAL_FILMSTRIP": true,
				"LANG_DETECTION": true,
        		"TOOLBAR_BUTTONS": [
            				"microphone", "camera", "fullscreen", "fodeviceselection", "hangup",
            				"settings", "videoquality", "filmstrip",
            				"stats", "shortcuts"
       			 ]
    		},
    		"configOverwrite": {
    		}
	},
	"plugin-radio": {
			"url": "stations.php?id={/literal}{$smarty.get.id}{literal}"
	},

	"fileuploader": {
		"server": "https://gateway.example.nl:1085/files",
		"maxFileSize": 10485760,
		"note": "Let op, deze bestanden blijven maximaal 24 uur bestaan!"
	},
	"embedly": {
        "key": ""
    	}
}
</script>
{/literal}