<?php

/**
 * Class: LightIRC
 *
 * Deze klasse bevat de instellingen met betrekking tot de LightIRC chat
 *
 * @author Kaj Van der Hallen
 */

class LightIRC {
    //put your code here
    public function __construct($db) {
        $this->_dBase = $db;
        $this->_db = $db['db'];
        $this->_table = $db['prefix']."lirc";
        $this->setHost("irc.chattersweb.nl");
        $this->setShowNickPrefixes("false");
        $this->setAccessKey("A8DFB-5EC1E-JTA4M-P6297-050BA");
        //$this->setPort("6667");
        $this->setPort("65535");
        $this->setPolicyPort("8080");
        $this->setEnableQueries("true");
        $this->setUseUserListIcons("true");
        $this->setIconPath("icons/");
        $this->setLanguage("nl");
        $this->setStyleURL("css/blue.css");
        $this->setWebcam("true");
        $this->setRtmp("red5.chattersweb.nl:1935");
        $this->setNick("Gast%");
        $this->setShowServerWindow("true");
        $this->setShowEmoticonsButton("true");
        $this->setShowChannelCentral("true");
        $this->setShowMenuButton("true");
        $this->setShowListButton("true");
        $this->setShowNickChangebutton("true");
        $this->setShowOptionsButton("true");
        $this->setShowChannelCentral("true");
        $this->setShowJoinChannelButton("true");
        $this->setShowPartChannelButton("true");
        $this->setShowNavigation("true");
        $this->setShowIdentifySelection("true");
        $this->setShowNickSelection("true");
        $this->setShowRegisterNicknameButton("true");
        $this->setShowRegisterChannelButton("false");
        $this->setShowNewQueriesInBackground("false");
        $this->setShowInfoMessages("true");
        $this->setChannelHeader("Kanaal: %channel% | Chatters: %users% | Modes: %mode% | Topic: %topic%");
        $this->setNavigationPosition("bottom");
        $this->setEmoticonList(":)->1.gif,:(->2.gif,;)->3.gif,:@->4.gif,:S->5.gif,:/->6.gif,(A)->7.gif,:O->8.gif,:D->9.gif,:P->10.gif,;'(->11.gif,(vloeken)->12.gif,(ziek)->13.gif,(duivel)->14.gif,(gek)->15.gif,(Y)->16.gif,(N)->17.gif,(F)->18.gif,(W)->19.gif,(lief)->20.gif,(verliefd)->21.gif,(zwaaien)->22.gif,(feest)->23.gif,(kado)->24.gif,(roken)->25.gif,(eten)->26.gif,(H)->27.gif,(ja)->28.gif,(gapen)->29.gif,(hond)->30.gif,(kat)->31.gif,(liegen)->32.gif,(loser)->33.gif,(dans)->34.gif,(K)->35.gif,(klok)->36.gif,(L)->37.gif,(U)->38.gif,(verbaasd)->39.gif,(8)->40.gif,(voetbal)->41.gif,xd->42.gif,(telefoon)->43.gif,(mobiel)->44.gif,(regen)->45.gif,:$->46.gif,(fjoew)->47.gif,(praten)->48.gif,(knor)->49.gif,(moehhh)->50.gif");
        $this->setRememberNickname("true");

        $this->setDefaultBanmask("*!*@%host%");
        $this->setRegisterChannelCommand("/msg ChanServ register %channel% %description%");

    }

    /**
     * Common parameters
     */
    private $_id;
    private $_db;
    private $_dBase;
    private $_table;

    /**
     * Connection parameters
     */
    private $_host; //Server IP/hostname
    private $_port; //[6667] Server port
    private $_policyPort; //[843] Defines the port where Flash Player should look for the policy daemon
    private $_accessKey;
    /**
     * General settings
     */
    private $_charset; //[utf-8] The encoding for ingoing/outgoing messages. If you have trouble with utf-8, try the charset of your country (e.g. iso-8859-1)
    private $_nick; //[lightIRC_%]  	The username to connect with. It is also a prefilled value for the nickselect box. Add "%" and lightIRC inserts a random number to prevent doubles (e.g.: "%nick%" -> nick123")
    private $_nickAlternate; //Alternative nick. Gets used if "nick" is occupied.
    private $_rememberNickname; //[false] Stores a selected/changed nickname in a local cookie and uses it everytime the user comes back.
    private $_nickPrefix; //[<] Setting for a string which should be displayed in front of a nick in the chat area.
    private $_nickPostfix; //[>] Setting for a string which should be displayed behind of a nick in the chat area.
    private $_showNickprefixes; //[true] Indicates whether a nick in the chat area is displayed like this: @nick or +nick.
    private $_showNickPrefixIcons; //[false] Whether user icons should be shown in the chat area
    private $_password; //Server password (only needed on very few servers)
    private $_ident; //Ident for the user. If you don't set a value, lightIRC sets a random string as the ident. This ident gets saved and will be used everytime the user comes back.
    private $_realname; //[lightIRC.com Flash IRC Client] Real name (GECOS) for the user
    private $_quitMessage; //[lightIRC.com Flash IRC Client] Quit message for the user Please note that the quit message gets only sent if the user types /quit in the chat. If he closes the lightIRC window, the server defines the quit message (connection reset by peer, ping timeout, ...)
    private $_language; //[en]
    private $_languagePath; //[language/] Where to look for the lightIRC translation files.
    //private $_emoticonPath; //[emoticons/] Relative or absolute path to the emoticons folder.
    private $_iconPath; //[icons/] Relative or absolute path to the icons folder (if useUserListIcons is enabled).
    private $_enableQueries; //[true] Set this to false to remove support to start queries, that is double clicking a user name and selecting the query from the context menu will not work. However, the user is still able to receive queries or to write private messages with /q, /query or /msg.
    private $_autojoin; //Comma-separated list of channels to join after a connection is established.: #lightIRC,#help
    private $_perform; //Comma-separated list of commands to be executed after connecting. E.g.: /mode $me +x,/join #channel key $me and %nick% get replaced by the current nick. %pass% gets replaced by the entered identifyPassword or the correspondent parameter.
    private $_blockedCommands; //Comma-separated list of commands which cannot be entered by the user. If you set it to "nick,j,join", the user cannot change the nick and is not able to join channels. However, he can still use the lightIRC popups to change his nick or join from the channels list. (You can hide those popups separately)
    private $_loopServerCommands; //[false]
    private $_loopClientCommands; //[false]
    private $_autoReconnect; //[true]
    private $_showSecurityError; //[true]
    private $_customSecurityErrorMessage;
    private $_targetFrame; //[_blank]
    private $_defaultBanmask; //∗!%ident%@∗
    private $_performContinousWhoRequests; //[false]

    /**
     * Webcam
     */
    private $_webcam; //[false]
    private $_rtmp;
    private $_webcamPreviewBox; //[true]
    private $_webcamPrivateOnly; //[false]
    private $_webcamPublicOnly; //[false]
    private $_webcamVideoOnly; //[false]
    private $_webcamAudioOnly; //[false]
    private $_webcamChannelBlacklist;
    private $_webcamChannelWhitelist;

    /**
     * Appearance
     */
    private $_styleURL;
    private $_navigationPosition; //[bottom]
    private $_showNavigation; //[true]

    /**
     * Nickname identification
     */
    private $_identifyPassword;
    private $_identifyMessage; //[NickServ:This nickname is registered]
    private $_identifyCommand; //[/msg NickServ identify %pass%]

    /**
     * Nickname registration
     */
    private $_showRegisterNicknameButton; //[false]
    private $_registerNicknameServiceName; //[NickServ]
    private $_registerNicknameCommand; //[/msg NickServ register %password% %mail%]

    /**
     * Channel registration
     */
    private $_showRegisterChannelButton; //[false]
    private $_registerChannelServiceName; //[ChanServ]
    private $_registerChannelCommand; //[/msg ChanServ register %channel% %password% %description%]

    /**
     * Client settings (changeable in the user options window)
     */
    //private $_soundAlerts; //[true]
    private $_showTimestamps; //[true]
    private $_timestampFormat; //[HH:mm:ss]
    private $_showJoinPartMessages; //[true]
    private $_showNewQueriesInBackground; //[false]
    private $_fontSize; //[12]

    /**
     * Windows
     */
    private $_showServerWindow; //[true]
    private $_showNickSelection; //[false]
    private $_showIdentifySelection; //[false]
    private $_showServerPasswordSelection; //[false]
    private $_showChannelCentral; //[true]

    /**
     * Menu buttons
     */
    private $_showMenuButton; //[true]
    private $_showListButton; //[true]
    private $_showNickChangeButton; //[true]
    private $_showOptionsButton; //[true]
    private $_showChannelCentralButton; //[true]
    private $_showJoinChannelButton; //[true]
    private $_showPartChannelButton; //[true]
    //private $_showRegisterChannelButton; //[false]
    //private $_showRegisterNicknameButton;

    /**
     * Sounds
     */
    private $_soundAlerts; //[true]
    private $_soundOnNewChannelMessage; //[false]

    /**
     * Emoticons
     */
    private $_showEmoticonsButton; //[true]
    private $_emoticonPath; //[emoticons/]
    private $_emoticonList; //[:)->smile.gif,;)->wink.gif,:D->biggrin.gif,:P->tongue.gif,:(->sad.gif,:$->blushing.gif,:O->ohmy.gif,(H)->cool.gif,:|->mellow.gif,Oo->blink.gif,:'(->crying.gif,:S->unsure.gif,:[->mad.gif]

    /**
     * Text input area
     */
    private $_showRichTextControls; //[true]
    private $_showRichTextControlsForegroundColor; //[true]
    private $_showRichTextControlsBackgroundColor; //[true]
    //private $_showEmoticonsButton; //[true]
    private $_showSubmitButton; //[true]

    /**
     * Channel settings
     */
    private $_showChannelHeader; //[true]
    private $_channelHeader; //%channel% [%users%] [%mode%] %topic%
    private $_showInfoMessages; //[true]
    private $_showVerboseUserInformation; //[false]

    /**
     * User list
     */
    private $_userListWidth; //[150]
    private $_useUserListIcons; //[false]
    private $_userListCustomIcons;
    private $_userListCustomFormatting;
    private $_showUserListInformationPopup; //[false]
    private $_userListInformationPopupItems; //[nick,ident,realname,host]

    /**
     * User list context menu
     */
    private $_contextMenuInternalEvent;
    private $_contextMenuExternalEvent;


    /**
     * MySQL database related functions
     */
    public function save() {
            $qry = $this->_db->prepare("INSERT INTO ".$this->_table."(host,port,policyPort,accessKey,charset,nick,nickAlternate,rememberNickname,nickPrefix,nickPostfix,showNickPrefixes,showNickPrefixIcons,password,ident,realname,quitMessage,language,languagePath,iconPath,enableQueries,autojoin,perform,blockedCommands,loopServerCommands,loopClienCommands,autoReconnect,showSecurityError,customSecurityErrorMessage,targetFrame,defaultBanmask,performContinousWhoRequests,webcam,rtmp,webcamPreviewBox,webcamPrivateOnly,webcamPublicOnly,webcamVideoOnly,webcamAudioOnly,webcamChannelBlacklist,webcamChannelWhitelist,styleURL,navigationPosition,showNavigation,identifyPassword,identifyMessage,identifyCommand,showRegisterNicknameButton,registerNicknameServiceName,registerNicknameCommand,showRegisterChannelButton,registerChannelServiceName,registerChannelCommand,showTimestamps,timestampFormat,showJoinPartMessages,showNewQueriesInBackground,fontSize,showServerWindow,showNickSelection,showIdentifySelection,showServerPasswordSelection,showChannelCentral,showMenuButton,showListButton,showNickChangeButton,showOptionsButton,showChannelCentralButton,showJoinChannelButton,showPartChannelButton,soundAlerts,soundOnNewChannelMessage,showEmoticonsButton,emoticonPath,emoticonList,showRichTextControls,showRichTextControlsForegroundColor,showRichTextControlsBackgroundColor,showSubmitButton,showChannelHeader,channelHeader,showInfoMessages,showVerboseUserInformation,userListWidth,useUserListIcons,userListCustomIcons,userListCustomFormatting,showUserListInformationPopup,userListInformationPopupItems,contextMenuInternalEvent,contextMenuExternalEvent) VALUES(:host,:port,:policyPort,:accessKey,:charset,:nick,:nickAlternate,:rememberNickname,:nickPrefix,:nickPostfix,:showNickPrefixes,:showNickPrefixIcons,:password,:ident,:realname,:quitMessage,:language,:languagePath,:iconPath,:enableQueries,:autojoin,:perform,:blockedCommands,:loopServerCommands,:loopClienCommands,:autoReconnect,:showSecurityError,:customSecurityErrorMessage,:targetFrame,:defaultBanmask,:performContinousWhoRequests,:webcam,:rtmp,:webcamPreviewBox,:webcamPrivateOnly,:webcamPublicOnly,:webcamVideoOnly,:webcamAudioOnly,:webcamChannelBlacklist,:webcamChannelWhitelist,:styleURL,:navigationPosition,:showNavigation,:identifyPassword,:identifyMessage,:identifyCommand,:showRegisterNicknameButton,:registerNicknameServiceName,:registerNicknameCommand,:showRegisterChannelButton,:registerChannelServiceName,:registerChannelCommand,:showTimestamps,:timestampFormat,:showJoinPartMessages,:showNewQueriesInBackground,:fontSize,:showServerWindow,:showNickSelection,:showIdentifySelection,:showServerPasswordSelection,:showChannelCentral,:showMenuButton,:showListButton,:showNickChangeButton,:showOptionsButton,:showChannelCentralButton,:showJoinChannelButton,:showPartChannelButton,:soundAlerts,:soundOnNewChannelMessage,:showEmoticonsButton,:emoticonPath,:emoticonList,:showRichTextControls,:showRichTextControlsForegroundColor,:showRichTextControlsBackgroundColor,:showSubmitButton,:showChannelHeader,:channelHeader,:showInfoMessages,:showVerboseUserInformation,:userListWidth,:useUserListIcons,:userListCustomIcons,:userListCustomFormatting,:showUserListInformationPopup,:userListInformationPopupItems,:contextMenuInternalEvent,:contextMenuExternalEvent);");
            $data = array(
                    ':host' => $this->getHost(),
                    ':port' => $this->getPort(),
                    ':policyPort' => $this->getPolicyPort(),
                    ':accessKey' => $this->getAccessKey(),
                    ':charset' => $this->getCharset(),
                    ':nick' => $this->getNick(),
                    ':nickAlternate' => $this->getNickAlternate(),
                    ':rememberNickname' => $this->getRememberNickname(),
                    ':nickPrefix' => $this->getNickPrefix(),
                    ':nickPostfix' => $this->getNickPostfix(),
                    ':showNickPrefixes' => $this->getShowNickPrefixes(),
                    ':showNickPrefixIcons' => $this->getShowNickPrefixIcons(),
                    ':password' => $this->getPassword(),
                    ':ident' => $this->getIdent(),
                    ':realname' => $this->getRealname(),
                    ':quitMessage' => $this->getQuitMessage(),
                    ':language' => $this->getLanguage(),
                    ':languagePath' => $this->getLanguagePath(),
                    ':iconPath' => $this->getIconPath(),
                    ':enableQueries' => $this->getEnableQueries(),
                    ':autojoin' => $this->getAutojoin(),
                    ':perform' => $this->getPerform(),
                    ':blockedCommands' => $this->getBlockedCommands(),
                    ':loopServerCommands' => $this->getLoopServerCommands(),
                    ':loopClienCommands' => $this->getLoopClientCommands(),
                    ':autoReconnect' => $this->getAutoReconnect(),
                    ':showSecurityError' => $this->getShowSecurityError(),
                    ':customSecurityErrorMessage' => $this->getCustomSecurityErrorMessage(),
                    ':targetFrame' => $this->getTargetFrame(),
                    ':defaultBanmask' => $this->getDefaultBanmask(),
                    ':performContinousWhoRequests' => $this->getPerformContinousWhoRequests(),
                    ':webcam' => $this->getWebcam(),
                    ':rtmp' => $this->getRtmp(),
                    ':webcamPreviewBox' => $this->getWebcamPreviewBox(),
                    ':webcamPrivateOnly' => $this->getWebcamPrivateOnly(),
                    ':webcamPublicOnly' => $this->getWebcamPublicOnly(),
                    ':webcamVideoOnly' => $this->getWebcamVideoOnly(),
                    ':webcamAudioOnly' => $this->getWebcamAudioOnly(),
                    ':webcamChannelBlacklist' => $this->getWebcamChannelBlacklist(),
                    ':webcamChannelWhitelist' => $this->getWebcamChannelWhitelist(),
                    ':styleURL' => $this->getStyleURL(),
                    ':navigationPosition' => $this->getNavigationPosition(),
                    ':showNavigation' => $this->getShowNavigation(),
                    ':identifyPassword' => $this->getIdentifyPassword(),
                    ':identifyMessage' => $this->getIdentifyMessage(),
                    ':identifyCommand' => $this->getIdentifyCommand(),
                    ':showRegisterNicknameButton' => $this->getShowRegisterNicknameButton(),
                    ':registerNicknameServiceName' => $this->getRegisterNicknameServiceName(),
                    ':registerNicknameCommand' => $this->getRegisterNicknameCommand(),
                    ':showRegisterChannelButton' => $this->getShowRegisterChannelButton(),
                    ':registerChannelServiceName' => $this->getRegisterChannelServiceName(),
                    ':registerChannelCommand' => $this->getRegisterChannelCommand(),
                    ':showTimestamps' => $this->getShowTimestamps(),
                    ':timestampFormat' => $this->getTimestampFormat(),
                    ':showJoinPartMessages' => $this->getShowJoinPartMessages(),
                    ':showNewQueriesInBackground' => $this->getShowNewQueriesInBackground(),
                    ':fontSize' => $this->getFontSize(),
                    ':showServerWindow' => $this->getShowServerWindow(),
                    ':showNickSelection' => $this->getShowNickSelection(),
                    ':showIdentifySelection' => $this->getShowIdentifySelection(),
                    ':showServerPasswordSelection' => $this->getShowServerPasswordSelection(),
                    ':showChannelCentral' => $this->getShowChannelCentral(),
                    ':showMenuButton' => $this->getShowMenuButton(),
                    ':showListButton' => $this->getShowListButton(),
                    ':showNickChangeButton' => $this->getShowNickChangeButton(),
                    ':showOptionsButton' => $this->getShowOptionsButton(),
                    ':showChannelCentralButton' => $this->getShowChannelCentralButton(),
                    ':showJoinChannelButton' => $this->getShowJoinChannelButton(),
                    ':showPartChannelButton' => $this->getShowPartChannelButton(),
                    ':soundAlerts' => $this->getSoundAlerts(),
                    ':soundOnNewChannelMessage' => $this->getSoundOnNewChannelMessage(),
                    ':showEmoticonsButton' => $this->getShowEmoticonsButton(),
                    ':emoticonPath' => $this->getEmoticonPath(),
                    ':emoticonList' => $this->getEmoticonList(),
                    ':showRichTextControls' => $this->getShowRichTextControls(),
                    ':showRichTextControlsForegroundColor' => $this->getShowRichTextControlsForegroundColor(),
                    ':showRichTextControlsBackgroundColor' => $this->getShowRichTextControlsBackgroundColor(),
                    ':showSubmitButton' => $this->getShowSubmitButton(),
                    ':showChannelHeader' => $this->getShowChannelHeader(),
                    ':channelHeader' => $this->getChannelHeader(),
                    ':showInfoMessages' => $this->getShowInfoMessages(),
                    ':showVerboseUserInformation' => $this->getShowVerboseUserInformation(),
                    ':userListWidth' => $this->getUserListWidth(),
                    ':useUserListIcons' => $this->getUseUserListIcons(),
                    ':userListCustomIcons' => $this->getUserListCustomIcons(),
                    ':userListCustomFormatting' => $this->getUserListCustomFormatting(),
                    ':showUserListInformationPopup' => $this->getShowUserListInformationPopup(),
                    ':userListInformationPopupItems' => $this->getUserListInformationPopupItems(),
                    ':contextMenuInternalEvent' => $this->getContextMenuInternalEvent(),
                    ':contextMenuExternalEvent' => $this->getContextMenuExternalEvent()
            );
            $qry->execute($data);
            if ($qry->rowCount() > '0') {
                    $this->setId($this->_db->lastInsertId());
                    return true;
            }
            else {
                    return false;
            }
    }
    public function disable() {
        $qry = $this->_db->prepare("UPDATE ".$this->_table." SET obsolete='1' WHERE id=:id;");
        $data = array(':id' => $this->_id);
        $qry->execute($data);
        if ($qry->rowCount() > '0') {
            return true;
        }
        else {
            return false;
        }
    }
    public function update() {
            $qry = $this->_db->prepare("UPDATE ".$this->_table." SET host=:host,port=:port,policyPort=:policyPort,accessKey=:accessKey,charset=:charset,nick=:nick,nickAlternate=:nickAlternate,rememberNickname=:rememberNickname,nickPrefix=:nickPrefix,nickPostfix=:nickPostfix,showNickPrefixes=:showNickPrefixes,showNickPrefixIcons=:showNickPrefixIcons,password=:password,ident=:ident,realname=:realname,quitMessage=:quitMessage,language=:language,languagePath=:languagePath,iconPath=:iconPath,enableQueries=:enableQueries,autojoin=:autojoin,perform=:perform,blockedCommands=:blockedCommands,loopServerCommands=:loopServerCommands,loopClienCommands=:loopClienCommands,autoReconnect=:autoReconnect,showSecurityError=:showSecurityError,customSecurityErrorMessage=:customSecurityErrorMessage,targetFrame=:targetFrame,defaultBanmask=:defaultBanmask,performContinousWhoRequests=:performContinousWhoRequests,webcam=:webcam,rtmp=:rtmp,webcamPreviewBox=:webcamPreviewBox,webcamPrivateOnly=:webcamPrivateOnly,webcamPublicOnly=:webcamPublicOnly,webcamVideoOnly=:webcamVideoOnly,webcamAudioOnly=:webcamAudioOnly,webcamChannelBlacklist=:webcamChannelBlacklist,webcamChannelWhitelist=:webcamChannelWhitelist,styleURL=:styleURL,navigationPosition=:navigationPosition,showNavigation=:showNavigation,identifyPassword=:identifyPassword,identifyMessage=:identifyMessage,identifyCommand=:identifyCommand,showRegisterNicknameButton=:showRegisterNicknameButton,registerNicknameServiceName=:registerNicknameServiceName,registerNicknameCommand=:registerNicknameCommand,showRegisterChannelButton=:showRegisterChannelButton,registerChannelServiceName=:registerChannelServiceName,registerChannelCommand=:registerChannelCommand,showTimestamps=:showTimestamps,timestampFormat=:timestampFormat,showJoinPartMessages=:showJoinPartMessages,showNewQueriesInBackground=:showNewQueriesInBackground,fontSize=:fontSize,showServerWindow=:showServerWindow,showNickSelection=:showNickSelection,showIdentifySelection=:showIdentifySelection,showServerPasswordSelection=:showServerPasswordSelection,showChannelCentral=:showChannelCentral,showMenuButton=:showMenuButton,showListButton=:showListButton,showNickChangeButton=:showNickChangeButton,showOptionsButton=:showOptionsButton,showChannelCentralButton=:showChannelCentralButton,showJoinChannelButton=:showJoinChannelButton,showPartChannelButton=:showPartChannelButton,soundAlerts=:soundAlerts,soundOnNewChannelMessage=:soundOnNewChannelMessage,showEmoticonsButton=:showEmoticonsButton,emoticonPath=:emoticonPath,emoticonList=:emoticonList,showRichTextControls=:showRichTextControls,showRichTextControlsForegroundColor=:showRichTextControlsForegroundColor,showRichTextControlsBackgroundColor=:showRichTextControlsBackgroundColor,showSubmitButton=:showSubmitButton,showChannelHeader=:showChannelHeader,channelHeader=:channelHeader,showInfoMessages=:showInfoMessages,showVerboseUserInformation=:showVerboseUserInformation,userListWidth=:userListWidth,useUserListIcons=:useUserListIcons,userListCustomIcons=:userListCustomIcons,userListCustomFormatting=:userListCustomFormatting,showUserListInformationPopup=:showUserListInformationPopup,userListInformationPopupItems=:userListInformationPopupItems,contextMenuInternalEvent=:contextMenuInternalEvent,contextMenuExternalEvent=:contextMenuExternalEvent WHERE id=:id;");
            $data = array(
                    ':host' => $this->getHost(),
                    ':port' => $this->getPort(),
                    ':policyPort' => $this->getPolicyPort(),
                    ':accessKey' => $this->getAccessKey(),
                    ':charset' => $this->getCharset(),
                    ':nick' => $this->getNick(),
                    ':nickAlternate' => $this->getNickAlternate(),
                    ':rememberNickname' => $this->getRememberNickname(),
                    ':nickPrefix' => $this->getNickPrefix(),
                    ':nickPostfix' => $this->getNickPostfix(),
                    ':showNickPrefixes' => $this->getShowNickPrefixes(),
                    ':showNickPrefixIcons' => $this->getShowNickPrefixIcons(),
                    ':password' => $this->getPassword(),
                    ':ident' => $this->getIdent(),
                    ':realname' => $this->getRealname(),
                    ':quitMessage' => $this->getQuitMessage(),
                    ':language' => $this->getLanguage(),
                    ':languagePath' => $this->getLanguagePath(),
                    ':iconPath' => $this->getIconPath(),
                    ':enableQueries' => $this->getEnableQueries(),
                    ':autojoin' => $this->getAutojoin(),
                    ':perform' => $this->getPerform(),
                    ':blockedCommands' => $this->getBlockedCommands(),
                    ':loopServerCommands' => $this->getLoopServerCommands(),
                    ':loopClienCommands' => $this->getLoopClientCommands(),
                    ':autoReconnect' => $this->getAutoReconnect(),
                    ':showSecurityError' => $this->getShowSecurityError(),
                    ':customSecurityErrorMessage' => $this->getCustomSecurityErrorMessage(),
                    ':targetFrame' => $this->getTargetFrame(),
                    ':defaultBanmask' => $this->getDefaultBanmask(),
                    ':performContinousWhoRequests' => $this->getPerformContinousWhoRequests(),
                    ':webcam' => $this->getWebcam(),
                    ':rtmp' => $this->getRtmp(),
                    ':webcamPreviewBox' => $this->getWebcamPreviewBox(),
                    ':webcamPrivateOnly' => $this->getWebcamPrivateOnly(),
                    ':webcamPublicOnly' => $this->getWebcamPublicOnly(),
                    ':webcamVideoOnly' => $this->getWebcamVideoOnly(),
                    ':webcamAudioOnly' => $this->getWebcamAudioOnly(),
                    ':webcamChannelBlacklist' => $this->getWebcamChannelBlacklist(),
                    ':webcamChannelWhitelist' => $this->getWebcamChannelWhitelist(),
                    ':styleURL' => $this->getStyleURL(),
                    ':navigationPosition' => $this->getNavigationPosition(),
                    ':showNavigation' => $this->getShowNavigation(),
                    ':identifyPassword' => $this->getIdentifyPassword(),
                    ':identifyMessage' => $this->getIdentifyMessage(),
                    ':identifyCommand' => $this->getIdentifyCommand(),
                    ':showRegisterNicknameButton' => $this->getShowRegisterNicknameButton(),
                    ':registerNicknameServiceName' => $this->getRegisterNicknameServiceName(),
                    ':registerNicknameCommand' => $this->getRegisterNicknameCommand(),
                    ':showRegisterChannelButton' => $this->getShowRegisterChannelButton(),
                    ':registerChannelServiceName' => $this->getRegisterChannelServiceName(),
                    ':registerChannelCommand' => $this->getRegisterChannelCommand(),
                    ':showTimestamps' => $this->getShowTimestamps(),
                    ':timestampFormat' => $this->getTimestampFormat(),
                    ':showJoinPartMessages' => $this->getShowJoinPartMessages(),
                    ':showNewQueriesInBackground' => $this->getShowNewQueriesInBackground(),
                    ':fontSize' => $this->getFontSize(),
                    ':showServerWindow' => $this->getShowServerWindow(),
                    ':showNickSelection' => $this->getShowNickSelection(),
                    ':showIdentifySelection' => $this->getShowIdentifySelection(),
                    ':showServerPasswordSelection' => $this->getShowServerPasswordSelection(),
                    ':showChannelCentral' => $this->getShowChannelCentral(),
                    ':showMenuButton' => $this->getShowMenuButton(),
                    ':showListButton' => $this->getShowListButton(),
                    ':showNickChangeButton' => $this->getShowNickChangeButton(),
                    ':showOptionsButton' => $this->getShowOptionsButton(),
                    ':showChannelCentralButton' => $this->getShowChannelCentralButton(),
                    ':showJoinChannelButton' => $this->getShowJoinChannelButton(),
                    ':showPartChannelButton' => $this->getShowPartChannelButton(),
                    ':soundAlerts' => $this->getSoundAlerts(),
                    ':soundOnNewChannelMessage' => $this->getSoundOnNewChannelMessage(),
                    ':showEmoticonsButton' => $this->getShowEmoticonsButton(),
                    ':emoticonPath' => $this->getEmoticonPath(),
                    ':emoticonList' => $this->getEmoticonList(),
                    ':showRichTextControls' => $this->getShowRichTextControls(),
                    ':showRichTextControlsForegroundColor' => $this->getShowRichTextControlsForegroundColor(),
                    ':showRichTextControlsBackgroundColor' => $this->getShowRichTextControlsBackgroundColor(),
                    ':showSubmitButton' => $this->getShowSubmitButton(),
                    ':showChannelHeader' => $this->getShowChannelHeader(),
                    ':channelHeader' => $this->getChannelHeader(),
                    ':showInfoMessages' => $this->getShowInfoMessages(),
                    ':showVerboseUserInformation' => $this->getShowVerboseUserInformation(),
                    ':userListWidth' => $this->getUserListWidth(),
                    ':useUserListIcons' => $this->getUseUserListIcons(),
                    ':userListCustomIcons' => $this->getUserListCustomIcons(),
                    ':userListCustomFormatting' => $this->getUserListCustomFormatting(),
                    ':showUserListInformationPopup' => $this->getShowUserListInformationPopup(),
                    ':userListInformationPopupItems' => $this->getUserListInformationPopupItems(),
                    ':contextMenuInternalEvent' => $this->getContextMenuInternalEvent(),
                    ':contextMenuExternalEvent' => $this->getContextMenuExternalEvent(),
                    ':id' => $this->_id
            );
            $qry->execute($data);
            if ($qry->rowCount() > '0') {
                    return true;
            }
            else {
                    return false;
            }
    }
    //change
    public function getById($id) {
        $this->setId($id);
        $stmp = $this->_db->prepare("SELECT * FROM `".$this->_table."` WHERE `id`= ? AND obsolete='0';");
        $stmp->execute(array($this->getId()));
        if ($stmp->rowCount() > '0') {
            $row = $stmp->fetch(PDO::FETCH_ASSOC);
            $this->setId($row['id']);
            $this->setHost($row['host']);
            //$this->setPort($row['port']);
            $this->setPort($row['65535']);
            $this->setPolicyPort($row['policyPort']);
            $this->setAccessKey($row['accessKey']);
            $this->setCharset($row['charset']);
            $this->setNick($row['nick']);
            $this->setNickAlternate($row['nickAlternate']);
            $this->setRememberNickname($row['rememberNickname']);
            $this->setNickPrefix($row['nickPrefix']);
            $this->setNickPostfix($row['nickPostfix']);
            $this->setShowNickPrefixes($row['showNickPrefixes']);
            $this->setShowNickPrefixIcons($row['showNickPrefixIcons']);
            $this->setPassword($row['password']);
            $this->setIdent($row['ident']);
            $this->setRealname($row['realname']);
            $this->setQuitMessage($row['quitMessage']);
            $this->setLanguage($row['language']);
            $this->setLanguagePath($row['languagePath']);
            $this->setIconPath($row['iconPath']);
            $this->setEnableQueries($row['enableQueries']);
            $this->setAutojoin($row['autojoin']);
            $this->setPerform($row['perform']);
            $this->setBlockedCommands($row['blockedCommands']);
            $this->setLoopServerCommands($row['loopServerCommands']);
            $this->setLoopClientCommands($row['loopClienCommands']);
            $this->setAutoReconnect($row['autoReconnect']);
            $this->setShowSecurityError($row['showSecurityError']);
            $this->setCustomSecurityErrorMessage($row['customSecurityErrorMessage']);
            $this->setTargetFrame($row['targetFrame']);
            $this->setDefaultBanmask($row['defaultBanmask']);
            $this->setPerformContinousWhoRequests($row['performContinousWhoRequests']);
            $this->setWebcam($row['webcam']);
            //$this->setRtmp($row['rtmp']);
            $this->setRtmp("red5.chattersweb.nl:1935");
            $this->setWebcamPreviewBox($row['webcamPreviewBox']);
            $this->setWebcamPrivateOnly($row['webcamPrivateOnly']);
            $this->setWebcamPublicOnly($row['webcamPublicOnly']);
            $this->setWebcamVideoOnly($row['webcamVideoOnly']);
            $this->setWebcamAudioOnly($row['webcamAudioOnly']);
            $this->setWebcamChannelBlacklist($row['webcamChannelBlacklist']);
            $this->setWebcamChannelWhitelist($row['webcamChannelWhitelist']);
            $this->setStyleURL($row['styleURL']);
            $this->setNavigationPosition($row['navigationPosition']);
            $this->setShowNavigation($row['showNavigation']);
            $this->setIdentifyPassword($row['identifyPassword']);
            $this->setIdentifyMessage($row['identifyMessage']);
            $this->setIdentifyCommand($row['identifyCommand']);
            $this->setShowRegisterNicknameButton($row['showRegisterNicknameButton']);
            $this->setRegisterNicknameServiceName($row['registerNicknameServiceName']);
            $this->setRegisterNicknameCommand($row['registerNicknameCommand']);
            $this->setShowRegisterChannelButton($row['showRegisterChannelButton']);
            $this->setRegisterChannelServiceName($row['registerChannelServiceName']);
            $this->setRegisterChannelCommand($row['registerChannelCommand']);
            $this->setShowTimestamps($row['showTimestamps']);
            $this->setTimestampFormat($row['timestampFormat']);
            $this->setShowJoinPartMessages($row['showJoinPartMessages']);
            $this->setShowNewQueriesInBackground($row['showNewQueriesInBackground']);
            $this->setFontSize($row['fontSize']);
            $this->setShowServerWindow($row['showServerWindow']);
            $this->setShowNickSelection($row['showNickSelection']);
            $this->setShowIdentifySelection($row['showIdentifySelection']);
            $this->setShowServerPasswordSelection($row['showServerPasswordSelection']);
            $this->setShowChannelCentral($row['showChannelCentral']);
            $this->setShowMenuButton($row['showMenuButton']);
            $this->setShowListButton($row['showListButton']);
            $this->setShowNickChangeButton($row['showNickChangeButton']);
            $this->setShowOptionsButton($row['showOptionsButton']);
            $this->setShowChannelCentralButton($row['showChannelCentralButton']);
            $this->setShowJoinChannelButton($row['showJoinChannelButton']);
            $this->setShowPartChannelButton($row['showPartChannelButton']);
            $this->setSoundAlerts($row['soundAlerts']);
            $this->setSoundOnNewChannelMessage($row['soundOnNewChannelMessage']);
            $this->setShowEmoticonsButton($row['showEmoticonsButton']);
            $this->setEmoticonPath($row['emoticonPath']);
            $this->setEmoticonList($row['emoticonList']);
            $this->setShowRichTextControls($row['showRichTextControls']);
            $this->setShowRichTextControlsForegroundColor($row['showRichTextControlsForegroundColor']);
            $this->setShowRichTextControlsBackgroundColor($row['showRichTextControlsBackgroundColor']);
            $this->setShowSubmitButton($row['showSubmitButton']);
            $this->setShowChannelHeader($row['showChannelHeader']);
            $this->setChannelHeader($row['channelHeader']);
            $this->setShowInfoMessages($row['showInfoMessages']);
            $this->setShowVerboseUserInformation($row['showVerboseUserInformation']);
            $this->setUserListWidth($row['userListWidth']);
            $this->setUseUserListIcons($row['useUserListIcons']);
            $this->setUserListCustomIcons($row['userListCustomIcons']);
            $this->setUserListCustomFormatting($row['userListCustomFormatting']);
            $this->setShowUserListInformationPopup($row['showUserListInformationPopup']);
            $this->setUserListInformationPopupItems($row['userListInformationPopupItems']);
            $this->setContextMenuInternalEvent($row['contextMenuInternalEvent']);
            $this->setContextMenuExternalEvent($row['contextMenuExternalEvent']);
            return true;
        }
        else {
            return false;
        }
    }

    /**
     *
     * Get functions
     *
     */
    public function getId() {
        return $this->_id;
    }

    public function getAccessKey() {
        return $this->_accessKey;
    }
    public function getHost() {
        return $this->_host;
    }
    public function getPort() {
        return $this->_port;
    }
    public function getPolicyPort() {
        return $this->_policyPort;
    }

    public function getCharset() {
        return $this->_charset;
    }
    public function getNick() {
        return $this->_nick;
    }
    public function getNickAlternate() {
        return $this->_nickAlternate;
    }
    public function getRememberNickname() {
        return $this->_rememberNickname;
    }
    public function getNickPrefix() {
        return $this->_nickPrefix;
    }
    public function getNickPostfix() {
        return $this->_nickPostfix;
    }
    public function getShowNickPrefixes() {
        return $this->_showNickprefixes;
    }
    public function getShowNickprefixIcons() {
        return $this->_showNickPrefixIcons;
    }
    public function getPassword() {
        return $this->_password;
    }
    public function getIdent() {
        return $this->_ident;
    }
    public function getRealname() {
        return $this->_realname;
    }
    public function getQuitMessage() {
        return $this->_quitMessage;
    }
    public function getLanguage() {
        return $this->_language;
    }
    public function getLanguagePath() {
        return $this->_languagePath;
    }
    public function getEmoticonPath() {
        return $this->_emoticonPath;
    }
    public function getIconPath() {
        return $this->_iconPath;
    }
    public function getEnableQueries() {
        return $this->_enableQueries;
    }
    public function getAutojoin() {
        return $this->_autojoin;
    }
    public function getPerform() {
        return $this->_perform;
    }
    public function getBlockedCommands() {
        return $this->_blockedCommands;
    }
    public function getLoopServerCommands() {
        return $this->_loopServerCommands;
    }
    public function getLoopClientCommands() {
        return $this->_loopClientCommands;
    }
    public function getAutoReconnect() {
        return $this->_autoReconnect;
    }
    public function getShowSecurityError() {
        return $this->_showSecurityError;
    }
    public function getCustomSecurityErrorMessage() {
        return $this->_customSecurityErrorMessage;
    }
    public function getTargetFrame() {
        return $this->_targetFrame;
    }
    public function getDefaultBanmask() {
        return $this->_defaultBanmask;
    }
    public function getPerformContinousWhoRequests() {
        return $this->_performContinousWhoRequests;
    }

    public function getWebcam() {
        return $this->_webcam;
    }
    public function getRtmp() {
        return $this->_rtmp;
    }
    public function getWebcamPreviewBox() {
        return $this->_webcamPreviewBox;
    }
    public function getWebcamPrivateOnly() {
        return $this->_webcamPrivateOnly;
    }
    public function getWebcamPublicOnly() {
        return $this->_webcamPublicOnly;
    }
    public function getWebcamVideoOnly() {
        return $this->_webcamVideoOnly;
    }
    public function getWebcamAudioOnly() {
        return $this->_webcamAudioOnly;
    }
    public function getWebcamChannelBlacklist() {
        return $this->_webcamChannelBlacklist;
    }
    public function getWebcamChannelWhitelist() {
        return $this->_webcamChannelWhitelist;
    }

    public function getStyleURL() {
        return $this->_styleURL;
    }
    public function getNavigationPosition() {
        return $this->_navigationPosition;
    }
    public function getShowNavigation() {
        return $this->_showNavigation;
    }

    public function getIdentifyPassword() {
        return $this->_identifyPassword;
    }
    public function getIdentifyMessage() {
        return $this->_identifyMessage;
    }
    public function getIdentifyCommand() {
        return $this->_identifyCommand;
    }

    public function getShowRegisterNicknameButton() {
        return $this->_showRegisterNicknameButton;
    }
    public function getRegisterNicknameServiceName() {
        return $this->_registerNicknameServiceName;
    }
    public function getRegisterNicknameCommand() {
        return $this->_registerNicknameCommand;
    }

//    public function getShowRegisterChannelButton() {
//        return $this->_showRegisterChannelButton;
//    }
    public function getRegisterChannelServiceName() {
        return $this->_registerChannelServiceName;
    }
    public function getRegisterChannelCommand() {
        return $this->_registerChannelCommand;
    }

//    public function getSoundAlerts() {
//        return $this->_soundAlerts;
//    }
    public function getShowTimestamps() {
        return $this->_showTimestamps;
    }
    public function getTimestampFormat() {
        return $this->_timestampFormat;
    }
    public function getShowJoinPartMessages() {
        return $this->_showJoinPartMessages;
    }
    public function getShowNewQueriesInBackground() {
        return $this->_showNewQueriesInBackground;
    }
    public function getFontSize() {
        return $this->_fontSize;
    }

    public function getShowServerWindow() {
        return $this->_showServerWindow;
    }
    public function getShowNickSelection() {
        return $this->_showNickSelection;
    }
    public function getShowIdentifySelection() {
        return $this->_showIdentifySelection;
    }
    public function getShowServerPasswordSelection() {
        return $this->_showServerPasswordSelection;
    }
    public function getShowChannelCentral() {
        return $this->_showChannelCentral;
    }

    public function getShowMenuButton() {
        return $this->_showMenuButton;
    }
    public function getShowListButton() {
        return $this->_showListButton;
    }
    public function getShowNickChangebutton() {
        return $this->_showNickChangeButton;
    }
    public function getShowOptionsButton() {
        return $this->_showOptionsButton;
    }
    public function getShowChannelCentralButton() {
        return $this->_showChannelCentralButton;
    }
    public function getShowJoinChannelButton() {
        return $this->_showJoinChannelButton;
    }
    public function getShowPartChannelButton() {
        return $this->_showPartChannelButton;
    }
    public function getShowRegisterChannelButton() {
        return $this->_showRegisterChannelButton;
    }
//    public function getShowRegisterNicknameButton() {
//        return $this->_showRegisterNicknameButton;
//    }

    public function getSoundAlerts() {
        return $this->_soundAlerts;
    }
    public function getSoundOnNewChannelMessage() {
        return $this->_soundOnNewChannelMessage;
    }

    public function getShowEmoticonsButton() {
        return $this->_showEmoticonsButton;
    }
//    public function getEmoticonPath() {
//        return $this->_emoticonPath;
//    }
    public function getEmoticonList() {
        return $this->_emoticonList;
    }

    public function getShowRichTextControls() {
        return $this->_showRichTextControls;
    }
    public function getShowRichTextControlsForegroundColor() {
        return $this->_showRichTextControlsForegroundColor;
    }
    public function getShowRichTextControlsBackgroundColor() {
        return $this->_showRichTextControlsBackgroundColor;
    }
//    public function getShowEmoticonsButton() {
//        return $this->_showEmoticonsButton;
//    }
    public function getShowSubmitButton() {
        return $this->_showSubmitButton;
    }

    public function getShowChannelHeader() {
        return $this->_showChannelHeader;
    }
    public function getChannelHeader() {
        return $this->_channelHeader;
    }
    public function getShowInfoMessages() {
        return $this->_showInfoMessages;
    }
    public function getShowVerboseUserInformation() {
        return $this->_showVerboseUserInformation;
    }

    public function getUserListWidth() {
        return $this->_userListWidth;
    }
    public function getUseuserListIcons() {
        return $this->_useUserListIcons;
    }
    public function getUserListCustomIcons() {
        return $this->_userListCustomIcons;
    }
    public function getUserListCustomFormatting() {
        return $this->_userListCustomFormatting;
    }
    public function getShowUserListInformationPopup() {
        return $this->_showUserListInformationPopup;
    }
    public function getUserListInformationPopupItems() {
        return $this->_userListInformationPopupItems;
    }

    public function getContextMenuInternalEvent() {
        return $this->_contextMenuInternalEvent;
    }
    public function getContextMenuExternalEvent() {
        return $this->_contextMenuExternalEvent;
    }



    /**
     *
     * Set functions
     *
     */
    public function setId($id) {
        $this->_id = $id;
    }
    public function setAccessKey($accessKey) {
        $this->_accessKey = $accessKey;
    }
    public function setHost($host) {
        $this->_host = $host;
    }
    public function setPort($port) {
        $this->_port = $port;
    }
    public function setPolicyPort($policyPort) {
        $this->_policyPort = $policyPort;
    }

    public function setCharset($charset) {
        $this->_charset = $charset;
    }
    public function setNick($nick) {
        $this->_nick = $nick;
    }
    public function setNickAlternate($nickAlternate) {
        $this->_nickAlternate = $nickAlternate;
    }
    public function setRememberNickname($rememberNickname) {
        $this->_rememberNickname = $rememberNickname;
    }
    public function setNickPrefix($nickPrefix) {
        $this->_nickPrefix = $nickPrefix;
    }
    public function setNickPostfix($nickPostfix) {
        $this->_nickPostfix = $nickPostfix;
    }
    public function setShowNickPrefixes($showNickPrefixes) {
        $this->_showNickprefixes = $showNickPrefixes;
    }
    public function setShowNickprefixIcons($showNickPrefixesIcons) {
        $this->_showNickPrefixIcons = $showNickPrefixesIcons;
    }
    public function setPassword($password) {
        $this->_password = $password;
    }
    public function setIdent($ident) {
        $this->_ident = $ident;
    }
    public function setRealname($realname) {
        $this->_realname = $realname;
    }
    public function setQuitMessage($quitMessage) {
        $this->_quitMessage = $quitMessage;
    }
    public function setLanguage($language) {
        $this->_language = $language;
    }
    public function setLanguagePath($languagePath) {
        $this->_languagePath = $languagePath;
    }
//    public function setEmoticonPath($emoticonPath) {
//        $this->_emoticonPath = $emoticonPath;
//    }
    public function setIconPath($iconPath) {
        $this->_iconPath = $iconPath;
    }
    public function setEnableQueries($enableQueries) {
        $this->_enableQueries = $enableQueries;
    }
    public function setAutojoin($autojoin) {
        $this->_autojoin = $autojoin;
    }
    public function setPerform($perform) {
        $this->_perform = $perform;
    }
    public function setBlockedCommands($blockedCommands) {
        $this->_blockedCommands = $blockedCommands;
    }
    public function setLoopServerCommands($loopServerCommands) {
        $this->_loopServerCommands = $loopServerCommands;
    }
    public function setLoopClientCommands($loopClientCommands) {
        $this->_loopClientCommands = $loopClientCommands;
    }
    public function setAutoReconnect($autoReconnect) {
        $this->_autoReconnect = $autoReconnect;
    }
    public function setShowSecurityError($showSecurityError) {
        $this->_showSecurityError = $showSecurityError;
    }
    public function setCustomSecurityErrorMessage($customSecurityErrorMessage) {
        $this->_customSecurityErrorMessage = $customSecurityErrorMessage;
    }
    public function setTargetFrame($targetFrame) {
        $this->_targetFrame = $targetFrame;
    }
    public function setDefaultBanmask($defaultBanmask) {
        $this->_defaultBanmask = $defaultBanmask;
    }
    public function setPerformContinousWhoRequests($performContinousWhoRequests) {
        $this->_performContinousWhoRequests = $performContinousWhoRequests;
    }

    public function setWebcam($webcam) {
        $this->_webcam = $webcam;
    }
    public function setRtmp($rtmp) {
        $this->_rtmp = $rtmp;
    }
    public function setWebcamPreviewBox($webcamPreviewBox) {
        $this->_webcamPreviewBox = $webcamPreviewBox;
    }
    public function setWebcamPrivateOnly($webcamPrivateOnly) {
        $this->_webcamPrivateOnly = $webcamPrivateOnly;
    }
    public function setWebcamPublicOnly($webcamPublicOnly) {
        $this->_webcamPublicOnly = $webcamPublicOnly;
    }
    public function setWebcamVideoOnly($webcamVideoOnly) {
        $this->_webcamVideoOnly = $webcamVideoOnly;
    }
    public function setWebcamAudioOnly($webcamAudioOnly) {
        $this->_webcamAudioOnly = $webcamAudioOnly;
    }
    public function setWebcamChannelBlacklist($webcamChannelBlacklist) {
        $this->_webcamChannelBlacklist = $webcamChannelBlacklist;
    }
    public function setWebcamChannelWhitelist($webcamChannelWhitelist) {
        $this->_webcamChannelWhitelist = $webcamChannelWhitelist;
    }

    public function setStyleURL($styleURL) {
        $this->_styleURL = $styleURL;
    }
    public function setNavigationPosition($navigationPosition) {
        $this->_navigationPosition = $navigationPosition;
    }
    public function setShowNavigation($showNavigation) {
        $this->_showNavigation = $showNavigation;
    }

    public function setIdentifyPassword($identifyPassword) {
        $this->_identifyPassword = $identifyPassword;
    }
    public function setIdentifyMessage($identifyMessage) {
        $this->_identifyMessage = $identifyMessage;
    }
    public function setIdentifyCommand($identifyCommand) {
        $this->_identifyCommand = $identifyCommand;
    }

//    public function setShowRegisterNicknameButton($showRegisterNicknameButton) {
//        $this->_showRegisterNicknameButton = $showRegisterNicknameButton;
//    }
    public function setRegisterNicknameServiceName($registerNicknameServiceName) {
        $this->_registerNicknameServiceName = $registerNicknameServiceName;
    }
    public function setRegisterNicknameCommand($registerNicknameCommand) {
        $this->_registerNicknameCommand = $registerNicknameCommand;
    }

    public function setShowRegisterChannelButton($showRegisterChannelButton) {
        $this->_showRegisterChannelButton = $showRegisterChannelButton;
    }
    public function setRegisterChannelServiceName($registerChannelServiceName) {
        $this->_registerChannelServiceName = $registerChannelServiceName;
    }
    public function setRegisterChannelCommand($registerChannelCommand) {
        $this->_registerChannelCommand = $registerChannelCommand;
    }

//    public function setSoundAlerts($soundAlerts) {
//        $this->_soundAlerts = $soundAlerts;
//    }
    public function setShowTimestamps($showTimestamps) {
        $this->_showTimestamps = $showTimestamps;
    }
    public function setTimestampFormat($timestampFormat) {
        $this->_timestampFormat = $timestampFormat;
    }
    public function setShowJoinPartMessages($showJoinPartMessages) {
        $this->_showJoinPartMessages = $showJoinPartMessages;
    }
    public function setShowNewQueriesInBackground($showNewQueriesInBackground) {
        $this->_showNewQueriesInBackground = $showNewQueriesInBackground;
    }
    public function setFontSize($fontSize) {
        $this->_fontSize = $fontSize;
    }

    public function setShowServerWindow($showServerWindow) {
        $this->_showServerWindow = $showServerWindow;
    }
    public function setShowNickSelection($showNickSelection) {
        $this->_showNickSelection = $showNickSelection;
    }
    public function setShowIdentifySelection($showIdentifySelection) {
        $this->_showIdentifySelection = $showIdentifySelection;
    }
    public function setShowServerPasswordSelection($showServerPasswordSelection) {
        $this->_showServerPasswordSelection = $showServerPasswordSelection;
    }
    public function setShowChannelCentral($showChannelCentral) {
        $this->_showChannelCentral = $showChannelCentral;
    }

    public function setShowMenuButton($showMenuButton) {
        $this->_showMenuButton = $showMenuButton;
    }
    public function setShowListButton($showListButton) {
        $this->_showListButton = $showListButton;
    }
    public function setShowNickChangebutton($showNickChangeButton) {
        $this->_showNickChangeButton = $showNickChangeButton;
    }
    public function setShowOptionsButton($showOptionsButton) {
        $this->_showOptionsButton = $showOptionsButton;
    }
    public function setShowChannelCentralButton($showChannelCentralButton) {
        $this->_showChannelCentralButton = $showChannelCentralButton;
    }
    public function setShowJoinChannelButton($showJoinChannelButton) {
        $this->_showJoinChannelButton = $showJoinChannelButton;
    }
    public function setShowPartChannelButton($showPartChannelButton) {
        $this->_showPartChannelButton = $showPartChannelButton;
    }
//    public function setShowRegisterChannelButton($showRegisterChannelButton) {
//        $this->_showRegisterChannelButton = $showRegisterChannelButton;
//    }
    public function setShowRegisterNicknameButton($showRegisterNicknameButton) {
        $this->_showRegisterNicknameButton = $showRegisterNicknameButton;
    }

    public function setSoundAlerts($soundAlerts) {
        $this->_soundAlerts = $soundAlerts;
    }
    public function setSoundOnNewChannelMessage($soundOnNewChannelMessage) {
        $this->_soundOnNewChannelMessage = $soundOnNewChannelMessage;
    }

//    public function setShowEmoticonsButton($showEmoticonsButton) {
//        $this->_showEmoticonsButton = $showEmoticonsButton;
//    }
    public function setEmoticonPath($emoticonPath) {
        $this->_emoticonPath = $emoticonPath;
    }
    public function setEmoticonList($emoticonList) {
        $this->_emoticonList = $emoticonList;
    }

    public function setShowRichTextControls($showRichTextControls) {
        $this->_showRichTextControls = $showRichTextControls;
    }
    public function setShowRichTextControlsForegroundColor($showRichTextControlsForegroundColor) {
        $this->_showRichTextControlsForegroundColor = $showRichTextControlsForegroundColor;
    }
    public function setShowRichTextControlsBackgroundColor($showRichTextControlsBackgroundColor) {
        $this->_showRichTextControlsBackgroundColor = $showRichTextControlsBackgroundColor;
    }
    public function setShowEmoticonsButton($showEmoticonsButton) {
        $this->_showEmoticonsButton = $showEmoticonsButton;
    }
    public function setShowSubmitButton($showSubmitButton) {
        $this->_showSubmitButton = $showSubmitButton;
    }

    public function setShowChannelHeader($showChannelHeader) {
        $this->_showChannelHeader = $showChannelHeader;
    }
    public function setChannelHeader($channelHeader) {
        $this->_channelHeader = $channelHeader;
    }
    public function setShowInfoMessages($showInfoMessages) {
        $this->_showInfoMessages = $showInfoMessages;
    }
    public function setShowVerboseUserInformation($showVerboseUserInformation) {
        $this->_showVerboseUserInformation = $showVerboseUserInformation;
    }

    public function setUserListWidth($userListWidth) {
        $this->_userListWidth = $userListWidth;
    }
    public function setUseuserListIcons($useUserListIcons) {
        $this->_useUserListIcons = $useUserListIcons;
    }
    public function setUserListCustomIcons($userListCustomIcons) {
        $this->_userListCustomIcons = $userListCustomIcons;
    }
    public function setUserListCustomFormatting($userListCustomFormatting) {
        $this->_userListCustomFormatting = $userListCustomFormatting;
    }
    public function setShowUserListInformationPopup($showUserListInformationPopup) {
        $this->_showUserListInformationPopup = $showUserListInformationPopup;
    }
    public function setUserListInformationPopupItems($userListInformationPopupItems) {
        $this->_userListInformationPopupItems = $userListInformationPopupItems;
    }

    public function setContextMenuInternalEvent($contextMenuInternalEvent) {
        $this->_contextMenuInternalEvent = $contextMenuInternalEvent;
    }
    public function setContextMenuExternalEvent($contextMenuExternalEvent) {
        $this->_contextMenuExternalEvent = $contextMenuExternalEvent;
    }


    private function _addParam($n,$v) {
        if ($v) {
            echo 'params.'.$n.' = "'.$v.'";'.PHP_EOL;
        }
    }
    public function printConfig() {
        echo "<script>".PHP_EOL;
        echo "var params = {};".PHP_EOL;
        $this->_addParam('host', $this->getHost());
        $this->_addParam('accessKey', $this->getAccessKey());
        //$this->_addParam('port', $this->getPort());
        $this->_addParam('port', "65535");
        $this->_addParam('policyPort', $this->getPolicyPort());
        $this->_addParam('charset', $this->getCharset());
        $this->_addParam('nick', $this->getNick());
        $this->_addParam('nickAlternate', $this->getNickAlternate());
        $this->_addParam('rememberNickname', $this->getRememberNickname());
        $this->_addParam('nickPrefix', $this->getNickPrefix());
        $this->_addParam('nickPostfix', $this->getNickPostfix());
        $this->_addParam('showNickPrefixes', $this->getShowNickPrefixes());
        $this->_addParam('showNickPrefixIcons', $this->getShowNickprefixIcons());
        $this->_addParam('password', $this->getPassword());
        $this->_addParam('ident', $this->getIdent());
        $this->_addParam('realname', $this->getRealname());
        $this->_addParam('quitMessage', $this->getQuitMessage());
        $this->_addParam('language', $this->getLanguage());
        $this->_addParam('languagePath', $this->getLanguagePath());
        $this->_addParam('emoticonPath', $this->getEmoticonPath());
        $this->_addParam('iconPath', "lirc-resources/" . $this->getIconPath());
        $this->_addParam('enableQueries', $this->getEnableQueries());
        $this->_addParam('autojoin', $this->getAutojoin());
        $this->_addParam('perform', $this->getPerform());
        $this->_addParam('blockedCommands', $this->getBlockedCommands());
        $this->_addParam('loopServerCommands', $this->getLoopServerCommands());
        $this->_addParam('loopClientCommands', $this->getLoopClientCommands());
        $this->_addParam('autoReconnect', $this->getAutoReconnect());
        $this->_addParam('showSecurityError', $this->getShowSecurityError());
        $this->_addParam('customSecurityErrorMessage', $this->getCustomSecurityErrorMessage());
        $this->_addParam('targetFrame', $this->getTargetFrame());
        $this->_addParam('defaultBanmask', $this->getDefaultBanmask());
        $this->_addParam('performContinousWhoRequests', $this->getPerformContinousWhoRequests());
        $this->_addParam('webcam', $this->getWebcam());
        $this->_addParam('rtmp', $this->getRtmp());
        $this->_addParam('webcamPreviewBox', $this->getWebcamPreviewBox());
        $this->_addParam('webcamPrivateOnly', $this->getWebcamPrivateOnly());
        $this->_addParam('webcamPublicOnly', $this->getWebcamPublicOnly());
        $this->_addParam('webcamVideoOnly', $this->getWebcamVideoOnly());
        $this->_addParam('webcamAudioOnly', $this->getWebcamAudioOnly());
        $this->_addParam('webcamChannelBlacklist', $this->getWebcamChannelBlacklist());
        $this->_addParam('webcamChannelWhitelist', $this->getWebcamChannelWhitelist());
        $this->_addParam('styleURL', $this->getStyleURL());
        $this->_addParam('navigationPosition', $this->getNavigationPosition());
        $this->_addParam('identifyPassword', $this->getIdentifyPassword());
        $this->_addParam('identifyMessage', $this->getIdentifyMessage());
        $this->_addParam('identifyCommand', $this->getIdentifyCommand());
        $this->_addParam('showRegisterNicknameButton', $this->getShowRegisterNicknameButton());
        $this->_addParam('registerNicknameServiceName', $this->getRegisterNicknameServiceName());
        $this->_addParam('registerNicknameCommand', $this->getRegisterNicknameCommand());
        $this->_addParam('showRegisterChannelButton', $this->getShowRegisterChannelButton());
        $this->_addParam('registerChannelServiceName', $this->getRegisterChannelServiceName());
        $this->_addParam('registerChannelCommand', $this->getRegisterChannelCommand());
        $this->_addParam('soundAlerts', $this->getSoundAlerts());
        $this->_addParam('showTimestamps', $this->getShowTimestamps());
        $this->_addParam('timestampFormat', $this->getTimestampFormat());
        $this->_addParam('showJoinPartMessages', $this->getShowJoinPartMessages());
        $this->_addParam('showNewQueriesInBackground', $this->getShowNewQueriesInBackground());
        $this->_addParam('fontSize', $this->getFontSize());
        $this->_addParam('showServerWindow', $this->getShowServerWindow());
        $this->_addParam('showNickSelection', $this->getShowNickSelection());
        $this->_addParam('showIdentifySelection', $this->getShowIdentifySelection());
        $this->_addParam('showServerPasswordSelection', $this->getShowServerPasswordSelection());
        $this->_addParam('showChannelCentral', $this->getShowChannelCentral());
        $this->_addParam('showMenuButton', $this->getShowMenuButton());
        $this->_addParam('showListButton', $this->getShowListButton());
        $this->_addParam('showNickChangeButton', $this->getShowNickChangebutton());
        $this->_addParam('showOptionsButton', $this->getShowOptionsButton());
        $this->_addParam('showChannelCentralButton', $this->getShowChannelCentralButton());
        $this->_addParam('showJoinChannelButton', $this->getShowJoinChannelButton());
        $this->_addParam('showPartChannelButton', $this->getShowPartChannelButton());
        $this->_addParam('showRegisterChannelButton', $this->getShowRegisterChannelButton());
        //$this->_addParam('showRegisterNicknameButton', $this->getShowRegisterNicknameButton());
        $this->_addParam('soundAlerts', $this->getSoundAlerts());
        $this->_addParam('soundOnNewChannelMessage', $this->getSoundOnNewChannelMessage());
        $this->_addParam('showEmoticonsButton', $this->getShowEmoticonsButton());
        $this->_addParam('emoticonPath', $this->getEmoticonPath());
        $this->_addParam('emoticonList', $this->getEmoticonList());
        $this->_addParam('showRichTextControls', $this->getShowRichTextControls());
        $this->_addParam('showRichTextControlsForegroundColor', $this->getShowRichTextControlsForegroundColor());
        $this->_addParam('showRichTextControlsBackgroundColor', $this->getShowRichTextControlsBackgroundColor());
        $this->_addParam('showEmoticonsButton', $this->getShowEmoticonsButton());
        $this->_addParam('showSubmitButton', $this->getShowSubmitButton());
        $this->_addParam('showChannelHeader', $this->getShowChannelHeader());
        $this->_addParam('channelHeader', $this->getChannelHeader());
        $this->_addParam('showInfoMessages', $this->getShowInfoMessages());
        $this->_addParam('showVerboseUserInformation', $this->getShowVerboseUserInformation());
        $this->_addParam('userListWidth', $this->getUserListWidth());
        $this->_addParam('useUserListIcons', $this->getUseuserListIcons());
        $this->_addParam('userListCustomIcons', $this->getUserListCustomIcons());
        $this->_addParam('userListCustomFormatting', $this->getUserListCustomFormatting());
        $this->_addParam('showUserListInformationPopup', $this->getShowUserListInformationPopup());
        $this->_addParam('userListInformationPopupItems', $this->getUserListInformationPopupItems());
        $this->_addParam('contextMenuInternalEvent', $this->getContextMenuInternalEvent());
        $this->_addParam('contextMenuExternalEvent', $this->getContextMenuExternalEvent());
        echo('/* This loop escapes % signs in parameters. You should not change it */
            for(var key in params) {
              params[key] = params[key].toString().replace(/%/g, "%25");
            }');
        echo "</script>";
    }

}
?>
