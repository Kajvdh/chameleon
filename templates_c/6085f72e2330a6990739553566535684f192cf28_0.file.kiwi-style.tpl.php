<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 19:05:35
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-style.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fde40ef618397_20514206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6085f72e2330a6990739553566535684f192cf28' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-style.tpl',
      1 => 1606905250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fde40ef618397_20514206 (Smarty_Internal_Template $_smarty_tpl) {
?><style>/* target specific styles */
html { 
	height: 100%; 
	overflow: hidden; 
}
body {
	height:100%;
    margin:0;
    padding:0;
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
    background-color:<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];?>
;	
}
<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {?>
	background-image:url("<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
");
<?php } else { ?>
	background-image:url("https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg");
<?php }?>
	background-repeat: no-repeat;
	background-size: 100% 100%; 
}
	<?php }?>
body {
    font-family: "Lato", sans-serif;
}
			   
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
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "hero") {?>
    right: 15px;
	<?php } else { ?>
	right: 356px;
	<?php }?>
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
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "hero") {?>
	float:right; 
	right: 5px;
<?php } else { ?>
	float:right;
	right: 356px;
<?php }?>
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
@media screen and (max-height: 450px) {
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

</style>

<style class=embedly-css>
.card .hdr {
     display:none;
}
.kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
.kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
.kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
.kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
.kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['prefixicons'] == "true") {?>
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
<?php }?>
.kiwi-messagelist {
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
if ($_smarty_tpl->tpl_vars['metadata']->value['bgcolor'] == '#000000') {?>
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {?>
	background-color:rgba(0,0,0);<?php } else { ?>
	background-image: linear-gradient(rgba(255,255,255, .05), rgba(255,255,255, .05)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
);background-size: 100% 100%;<?php }?>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {?>
    background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url(https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg);background-size: 100% 100%;<?php } else { ?>
	background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
);background-size: 100% 100%;<?php }
}?>
}
<?php } else { ?>
    background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
);background-size: 100% 100%; 
} 
	<?php }?>
.kiwi-statebrowser-channel[data-name="#<?php echo mb_strtolower($_smarty_tpl->tpl_vars['metadata']->value['name'], 'UTF-8');?>
"]::before {
    content: "\f075";
    font-family: fontawesome;
    margin-right: 5px;
}
.kiwi-statebrowser-channel[data-name="#help"]::before {
    content: "\f128";
    font-family: fontawesome;
    margin-right: 5px;
}
.fa-paint-brush:before {
    content: "\F1FC";
    color: #ac23f7;
}

.fa-smile-o:before {
    content: "\F118";
    color: #3183c7;
    font-size: 20px;
    font-weight: 700;
}
.fa-picture-o:before {
    content: "\F03E";
    font-size: 19px;
    color: #902b5f;
}
.fa-cog:before {
    color:#d87906;
    font-size: large;
}
.fa-close:before, .fa-times:before {
    color:#c70101;
}
.fa-list:before {
    color:#005a20;
}
.fa-comment:before {
	content: "\f075";
    color:#026302;
}
.fa-comment-o:before {
	content: "\f075";
    color:#ff8c00;
}
.fa-info:before {
    color:#a500ff;
    font-size: large;
}
.fa-chevron-right:before{
    margin: inherit;
	cursor:pointer;
    font-size: 27px;
    font-weight: 100;
    content: "\f01d";
    color: red;
    height: -webkit-fill-available;
}
.fa-users:before {
    color:#005093;
}
.fa-coffee:before {
    color: #743a00;
    font-size: large;
}
.fa-camera:before {
    content: "\F030";
    font-size: 19px;
    color: #0957b9eb;
}
.fa-adjust:before {
    content: "\f1fc";
    color: #00f;

}
.fa-registered:before {
    content: "\F25D";
    color: #0404bf;
    font-size: 18px;
}

.fa-lock:before {
    content: "\F023";
    font-size: 16px;
    margin: 0.1em;
    color: #484848;
}
.fa-navicon:before, .fa-reorder:before, .fa-bars:before {
    content: "\f138 ";
    font-size: 19px;
    color: #bf1f24;
}

.fa-send:before, .fa-paper-plane:before {
    content: "\F1D8";
    font-size: 17px;
    color: #00632c;
}

<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "nightswatch") {?>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

<?php }?>

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
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
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
</style>
<?php }
}
