<style>/* target specific styles */
html { 
	height: 100%; 
	overflow: hidden; 
}
body {
	height:100%;
    margin:0;
    padding:0;
{if $metadata['style'] != "transparent"}
    background-color:{$metadata['bgcolor']};	
}
{else}
{if $metadata['bgurl'] != ""}
	background-image:url("{$metadata['bgurl']}");
{else}
	background-image:url("cwobg.jpg");
{/if}
	background-repeat: no-repeat;
	background-size: 100% 100%; 
}
	{/if}
body {
    font-family: "Lato", sans-serif;
}
			   {literal}
#BbfWjPzRoMSm {
	display: none;
	margin-bottom: 0;
	height: 60px;
	padding: 20px 10px;
	background: #D30000;
	font-weight: bold;
	text-align: center;
	color: #fff;
	border-radius: 0px;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 12;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	overflow: hidden;
}
.sidenav span {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 22px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    bottom: 50px;
	{/literal}{if $metadata['radio_player'] != "hero"}
    right: 15px;
	{else}
	right: 356px;
	{/if}
    font-size: 36px;
    margin-left: 50px;
}
.white-popup {
	position: relative;
	background: #000000;
	padding: 0px;
	width: auto;
	max-width: 810px;
	margin: 0px auto;
}

.right { 
{if $metadata['radio_player'] != "hero"}
	float:right; 
	right: 5px;
{else}
	float:right;
	right: 356px;
{/if}
	display: block; 
	position: absolute;
	bottom: 2px;
}
.left { 
	float:left; 
	display: block; 
	position: absolute;
    left: 2px;
    bottom: 2px;
}
#my_centered_buttons { display: flex; justify-content: center;}
@media screen and (max-height: 450px) {literal}{
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.lunaresponsive {/*Large Screen Height*/
		height:80px;
	}
@media only screen and (min-width: 600px) and (max-width:959px) {
	.lunaresponsive {/*Medium Screen Height*/
			height:60px;
	}
}
@media only screen and (max-width:599px) {
	.lunaresponsive {/*Small Screen Height*/
		height:40px;
	}
}
{/literal}
</style>
{literal}
<style class=embedly-css>
.card .hdr {
     display:none;
}
.kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/owner.png)
}
.kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/admin.png)
}
.kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/operator.png)
}
.kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/halfop.png)
}
.kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/voice.png)
}
{/literal}{if $metadata['prefixicons'] == "true"}{literal}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/voice.png)
}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/{/literal}{$metadata['icons']}{literal}/voice.png)
}
{/literal}{/if}{literal}
.kiwi-messagelist {
{/literal}{if $metadata['style'] != "transparent"}{literal}{/literal}
{if $metadata['bgcolor'] == '#000000'}
	{if $metadata['bgurl'] == ""}{literal}
	background-color:rgba(0,0,0);{/literal}{else}{literal}
	background-image: linear-gradient(rgba(255,255,255, .05), rgba(255,255,255, .05)), url({/literal}{$metadata['bgurl']}{literal});background-size: 100% 100%;{/literal}{/if}
	{else}
		{if $metadata['bgurl'] == ""}{literal}
    background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url({/literal}cwobg.jpg{literal});background-size: 100% 100%;{/literal}{else}{literal}
	background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url({/literal}{$metadata['bgurl']}{literal});background-size: 100% 100%;{/literal}{/if}{/if}{literal}
}
{/literal}{else}{literal}
    background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url({/literal}{$metadata['bgurl']}{literal});background-size: 100% 100%; 
} 
	{/literal}{/if}{literal}
.kiwi-statebrowser-channel[data-name="#{/literal}{$metadata['name']|lower}{literal}"]::before {
    content: "\f075";
    font-family: fontawesome;
    margin-right: 5px;
}
.kiwi-statebrowser-channel[data-name="#help"]::before {
    content: "\f128";
    font-family: fontawesome;
    margin-right: 5px;
}

:root {
    /* Primary Variables */
    --brand-primary: {/literal}{if $metadata['style'] != "transparent"}{$metadata['bgcolor']}{else}#001a33{/if}{literal};
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: {/literal}{if $metadata['style'] == "black"}#000{else}#fff{/if}{literal};
    --brand-default-fg: {/literal}{if $metadata['style'] == "black"}#FFF{else}#22231f{/if}{literal};

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: {/literal}{if $metadata['style'] == "black"}#737373{else}var(--brand-default-bg){/if}{literal};
    --comp-header-name-fg: {/literal}{if $metadata['style'] == "black"}#FFF{else}var(--brand-default-fg){/if}{literal};
    --comp-header-option-active-fg: {/literal}{if $metadata['style'] == "black"}#FFF{else}var(--brand-default-bg){/if}{literal};
    --comp-header-option-active-bg: {/literal}{if $metadata['style'] == "black"}#000{else}var(--brand-primary){/if}{literal};

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: {/literal}{if $metadata['style'] != "transparent"}{$metadata['bgcolor']}{else}#001a33{/if}{literal};
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: {/literal}{if $metadata['style'] == "black"}#000{else}{$metadata['bgcolor']}{/if}{literal};
    --comp-sidebar-fg: {/literal}{if $metadata['style'] == "black"}#FFF{else}#FFF{/if}{literal};
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: {/literal}{if $metadata['style'] == "black"}#fff{else}var(--brand-primary){/if}{literal};
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}
/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: {/literal}{if $metadata['style'] == "black"}#fff{else}#22231f{/if}{literal};
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: {/literal}{if $metadata['style'] == "black"}#fff{else}var(--brand-default-fg){/if}{literal};
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: {/literal}{if $metadata['style'] == "black"}#FFF{else}var(--brand-primary){/if}{literal};
    color: {/literal}{if $metadata['style'] == "black"}#000{else}var(--brand-default-bg){/if}{literal};
}
.kiwi-welcome-simple-form {
	background-color: {/literal}{if $metadata['style'] == "black"}#000{else}#FFF{/if}{literal};
}
.kiwi-startup-common-section-connection {
    background-color: {/literal}{if $metadata['style'] == "black"}#000{else}var(--brand-primary){/if}{literal};
}
.kiwi-welcome-asl-form {
	color: {/literal}{if $metadata['style'] == "black"}#000{else}var(--brand-default-fg){/if}{literal};
}
.kiwi-welcome-asl-have-password {
	color: {/literal}{if $metadata['style'] == "black"}#000{else}var(--brand-default-fg){/if}{literal};
}
</style>
{/literal}