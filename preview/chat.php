<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
//header('content-type: application/json; charset=utf-8');
?>
<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?>
<?php
$channel = "";
if (!isset($_GET['chan'])) {
    die("Geen kanaalnaam opgegeven");
}
else {
    $channel = "#".$_GET['chan'];
}
 
$forbiddenchans = array("#staff","#services","#X","#X.links","#services-channels","#services-quits","#X.invites");
 
if (in_array($channel, $forbiddenchans)) {
    header('Location: https://chattersworld.nl');
    die();
}
?>
<?php
if (!empty($_GET['chan'])) {
    $channel = $_GET['chan'];    
}else{  
    header('Location: https://chattersworld.nl/chatboxen/');
    die();
}
?>

<?php
if (!empty($_GET['bg'])) {
    $bg = $_GET['bg'];    
}else{  
    $bg = "https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg";
}
?>
<!DOCTYPE html><html><head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9106844814451489",
          enable_page_level_ads: true
     });
</script>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'transparent') : ?>
<style>
:root{
    --brand-primary: <?php if(!empty($_GET['html5color'])) : ?><?php echo htmlspecialchars($_GET['html5color']); ?><?php endif; ?>;
    --brand-primary-hover: #ff3300;
    --brand-midtone: #2b2b2b;
    --brand-darktone: #969696;
    --brand-default-bg: transparent;
    --brand-default-fg: #bdbdbd;
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #712c2f;
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);
    --comp-header-bg: transparent;
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #f1f1f1;
    --comp-header-option-active-bg: var(--brand-primary);
    --comp-statebrowser-fg: #ababab;
    --comp-statebrowser-bg: transparent;
    --comp-statebrowser-bg-networkname: #454545;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #ababab;
    --comp-usermenu-open-bg: #0e0e0e;
    --comp-statebrowser-network-border: #656565;
    --comp-sidebar-bg: transparent;
    --comp-sidebar-fg: #ababab;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #484848;
}

.kiwi-wrap {
	background-image:url("<?php echo $bg; ?>");
	background-repeat: no-repeat;
	background-size: 100% 100%; 
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'html5color') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: <?php if(!empty($_GET['html5color'])) : ?><?php echo htmlspecialchars($_GET['html5color']); ?><?php endif; ?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #fff;
    --brand-default-fg: #22231f;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: <?php if(!empty($_GET['html5color'])) : ?><?php echo htmlspecialchars($_GET['html5color']); ?><?php endif; ?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if(!empty($_GET['html5color'])) : ?><?php echo htmlspecialchars($_GET['html5color']); ?><?php endif; ?>;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
{/literal}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'blue') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #274962;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #fff;
    --brand-default-fg: #22231f;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'black') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #000000;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'orange') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #ff6600;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'green') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #86b459;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'lightblue') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #b2c7d3;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'yellow') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #ffc200;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'pink') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #CC0066;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'skyblue') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #0095B6;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<?php if(!empty($_GET['style']) && $_GET['style'] == 'darkred') : ?>
<style>
:root {
    /* Primary Variables */
    --brand-primary: #B40404;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: #000;
    --brand-default-fg: #FFF;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: var(--brand-default-bg);
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: #22231f;
    --comp-header-option-active-bg: var(--brand-primary);

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: #001a33;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: #001a33;
    --comp-sidebar-fg: #FFF;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: #22231f;
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
    color: var(--brand-default-fg);
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: var(--brand-primary);
    color: var(--brand-default-bg);
}
.kiwi-welcome-simple-form {
	background-color: #FFF;
}
.kiwi-startup-common-section-connection {
    background-color: var(--brand-primary);
}
.kiwi-welcome-asl-form {
	color: #22231f;
}
.kiwi-welcome-asl-have-password {
	color: #22231f;
}
</style>
<?php endif; ?>
<script name="kiwiconfig">
{
<?php if(!empty($_GET['asl'])  && $_GET['asl'] == "true") : ?>
"startupScreen": "plugin-asl",
<?php else : ?>
"startupScreen": "welcome",
<?php endif; ?>
"windowTitle": "Chattersworld - <?php if(!empty($_GET['chan'])) : ?>#<?php echo htmlspecialchars($_GET['chan']); ?><?php endif; ?> The web IRC client",
"kiwiServer": "https://gateway.chattersworld.nl:1085/webirc/kiwiirc/", 
"theme": "CWO",
"themes": [
        { "name": "Default", "url": "static/themes/default" },
		<?php if(!empty($_GET['style']) && $_GET['style'] != 'nightswatch') : ?>
		{ "name": "CWO", "url": "https://chameleon.chattersworld.nl/static/themes/transparent2" },
		<?php endif; ?>
		<?php if(!empty($_GET['style']) && $_GET['style'] == 'nightswatch') : ?>
		{ "name": "CWO", "url": "https://chameleon.chattersworld.nl/static/themes/theme-dark-fluid" },
		<?php endif; ?>
        { "name": "Dark", "url": "static/themes/dark" },
        { "name": "Coffee", "url": "static/themes/coffee" },
        { "name": "GrayFox", "url": "static/themes/grayfox" },
        { "name": "Nightswatch", "url": "static/themes/nightswatch" },
        { "name": "Osprey", "url": "static/themes/osprey" },
        { "name": "Radioactive", "url": "static/themes/radioactive" },
        { "name": "Sky", "url": "static/themes/sky" },
        { "name": "Elite", "url": "static/themes/elite" }
    ],
"startupOptions": { 
"server": "irc.chattersworl.nl", 
"infoBackground": "<?php echo $bg; ?>", 
"infoContent": "<a class=\"netlogo\" href=\"https://chameleon.chattersworld.nl\"><span></span><img src=\"https://atsiofrjlo.cloudimg.io/v7/https://chattersworld.nl/wp-content/uploads/2018/10/cropped-c4all.png\"></a><div><a href=\"https://chameleon.chattersworld.nl/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"https://chameleon.chattersworld.nl/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.chattersworld.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
"greetingText": "<div style='margin:0px 0px 0px 0px'><center><a class=\"netlogo\" href=\"https://chameleon.chattersworld.nl\"><span></span><img src=\"https://chameleon.chattersworld.nl/img/cwo-chameleon2.png\" height='60px'></a></center></div>",
"buttonText": "<center><i class='fa fa-sign-in' style='margin-right:5px !important;'></i> Chatten</center>",
"state_key": "CWO-state-109", 
"port": 6800, 
"tls": true, 
"direct": true, 
"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
"channel": "<?php if(!empty($_GET['chan'])) : ?>#<?php echo strtolower(htmlspecialchars($_GET['chan'])); ?><?php endif; ?>", 
"nick": "" },
"sidebarDefault": "nicklist",
"buffers": {
"block_pms": false,
"coloured_nicklist": false,
				"nicklist_avatars": true,
				"colour_nicknames_in_messages": false,
				"inline_link_auto_previews": false,
				"inline_link_auto_preview_whitelist": ".*",
				"messageLayout": "modern",
				"default_kick_reason": "Gedraag je!",
				"share_typing": true
},
	"plugins": [
        {
            "name": "conference",
            "url": "https://chameleon.chattersworld.nl/static/plugins/conference/plugin-conference.min.js?v=1.2"
        },
		{"name": "emoji", "url": "static/plugins/plugin-emoji-prelim.min.js"},
		{"name":"v","url":"static/plugins/v.js"},
		{"name": "simosnapcss","url": "static/plugins/cwo-css3.html"},
		{"name": "nickserv", "url": "static/plugins/plugin-nickserv.js"},
				{ "name": "font", "url": "static/plugins/font-size.html" },
				{"name": "asl","url": "static/plugins/plugin-asl.js?cb=22"},
				{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"}
		
    ],
	"plugin-gravatar": {
					"gatewayURL": "//gateway.chattersworld.nl:1085/",
					"gravatarURL": "//www.gravatar.com/avatar/",
					"gravatarRating": "g",
					"gravatarFallback": "robohash"
		},
	"plugin-conference":{ 
    		"server": "meet.chattersworld.nl",
    		"secure": true,
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
				"SHOW_BRAND_WATERMARK": false,
				"BRAND_WATERMARK_LINK": "https://chattersworld.nl",
				"JITSI_WATERMARK_LINK": "https://chattersworld.nl",
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
	"embedly": {
        "key": ""
    	}
}
</script>
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
<link rel=icon type=image/png href=https://chattersworld.nl/images/favicon.ico><title>Kiwi IRC</title><style>/* target specific styles */
    body {
    	/* disable the 'pull down to refresh' on mobiles */
    	overflow: hidden;
		background-color: black;
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
z-index:999;
}

	</style><style class=embedly-css>.card .hdr {
            display:none;
		   }
.kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/owner.png)
}
.kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/admin.png)
}
.kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/operator.png)
}
.kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/halfop.png)
}
.kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/voice.png)
}
{/literal}{if $metadata['prefixicons'] == "true"}{literal}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick--prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick--prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick--prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick--prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick--prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/voice.png)
}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick-prefix {
	content: url(https://chattersworld.nl/webchat/icons/<?php echo htmlspecialchars($_GET['icons']); ?>/voice.png)
}
.kiwi-messagelist {
    background-image: linear-gradient(rgba(255,255,255, .75), rgba(255,255,255, .75)), url(<?php echo $bg; ?>);
	background-size: 100% 100%;
	
	 
}
.kiwi-statebrowser-channel[data-name="<?php if(!empty($_GET['chan'])) : ?>#<?php echo strtolower(htmlspecialchars($_GET['chan'])); ?><?php endif; ?>"]::before {
    content: "\f075";
    font-family: fontawesome;
    margin-right: 5px;
}
.kiwi-statebrowser-channel[data-name="#help"]::before {
    content: "\f128";
    font-family: fontawesome;
    margin-right: 5px;
}
</style>
<link href="static/css/app.258bf630.css" rel="preload" as="style">
  <link href="static/js/app.8f7b1665.js" rel="preload" as="script">
  <link href="static/js/vendor.cd02f594.js" rel="preload" as="script">
  <link href="static/css/app.258bf630.css" rel="stylesheet">
</head><body><noscript><div class=kiwi-noscript-warn>Please enable JavaScript and refresh the page to use this website.</div></noscript><div id=app></div>
<script type="text/javascript" src="static/js/vendor.cd02f594.js"></script>
  <script type="text/javascript" src="static/js/app.8f7b1665.js"></script>
		<?php if(!empty($_GET['radio'])) : ?>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<div id="add" class="socialfooter" style="float:left;height:10%; width:40%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
<div id="BbfWjPzRoMSm">
  U laat onze advertenties niet toe
</div>

<script type="text/javascript" src="adblock.js?ver=1.6.2"></script>
<script type="text/javascript">

if(!document.getElementById('ehaOmEGYitqn')){
  document.getElementById('BbfWjPzRoMSm').style.display='block';
}

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- side -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9106844814451489"
     data-ad-slot="2999842055"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<script type="text/javascript" src="js/nativeflashradiov4.js?v=4.20.03.04"></script>
		<div id="flashradio" class="socialfooter" style="float:right;height:10%; width:50%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
  <font color="red">Hier staat de V4 RadioPlayer van Chattersworld.nl, als u dit niet ziet, gebruikt u een browser die niet compatible is met deze HTML5 RadioPlayer.</font>
</div>
<script>
$("#flashradio").flashradio({
			token: "ZGlidXVmc3R4cHNtZS9vbQE=",
			themecolor: "#800000", 
			themefontcolor: "#ffffff",
			streamurl: "http://<?php echo htmlspecialchars($_GET['radio']); ?>",
			titlefontname:"Roboto", 
			titlegooglefontname:"Roboto:100",
			songfontname:"Oswald",
			songgooglefontname:"Oswald:400:latin,latin-ext",
			<?php if(!empty($_GET['type'])) : ?>streamtype:"<?php echo htmlspecialchars($_GET['type']); ?>",<?php endif; ?>
			<?php if(!empty($_GET['id'])) : ?>streamid: "<?php echo htmlspecialchars($_GET['id']); ?>",<?php endif; ?>
			<?php if(!empty($_GET['mount'])) : ?>mountpoint: "<?php echo htmlspecialchars($_GET['mount']); ?>",<?php endif; ?>
			scroll: "auto", 
			autoplay: "true", 
			debug: "true", 
			affiliatetoken: "1000lIPN",
			useanalyzer: "fake",
			radioname: "<?php echo htmlspecialchars($_GET['chan']); ?>",
			radiocover :"https://www.chattersworld.nl/images/c4all.png",
			
			songinformationinterval:"5000",
			analyzertype: "4",
			corsproxy: "php",
			usestreamcorsproxy: "false"
		});
</script>
<?php endif; ?>
<?php if(empty($_GET['radio'])) : ?>
<div id="add" class="socialfooter" style="height:10%; width:40%;-webkit-border-radius: 0px;-moz-border-radius: 0px; border-radius: 0px; border: 0px #81BEF7 none; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));z-index:9999;">
<div id="BbfWjPzRoMSm">
  U laat onze advertenties niet toe
</div>

<script type="text/javascript" src="adblock.js?ver=1.6.2"></script>
<script type="text/javascript">

if(!document.getElementById('ehaOmEGYitqn')){
  document.getElementById('BbfWjPzRoMSm').style.display='block';
}

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- side -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9106844814451489"
     data-ad-slot="2999842055"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php endif; ?>
		</body></html>