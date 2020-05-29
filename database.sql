-- MySQL dump 10.13  Distrib 5.6.45, for Linux (x86_64)
--
-- Host: localhost    Database: chameleon
-- ------------------------------------------------------
-- Server version	5.6.45

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chameleon_chat`
--

DROP TABLE IF EXISTS `chameleon_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chameleon_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lirc_id` int(11) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createrip` varchar(50) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `lastcalled` datetime DEFAULT NULL,
  `calls` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `bgcolor` varchar(50) DEFAULT NULL,
  `style` varchar(50) DEFAULT NULL,
  `iconstyle` varchar(50) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `radio_enabled` varchar(10) DEFAULT 'false',
  `radio_streamtype` varchar(256) DEFAULT NULL,
  `radio_type` varchar(50) DEFAULT NULL,
  `radio_name` varchar(50) DEFAULT NULL,
  `radio_url` varchar(256) DEFAULT NULL,
  `radio_port` int(11) DEFAULT NULL,
  `radio_link` varchar(256) DEFAULT NULL,
  `ads_enabled` varchar(10) NOT NULL DEFAULT 'true',
  `obsolete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_chameleon_chat_chameleon_lirc` (`lirc_id`),
  CONSTRAINT `FK_chameleon_chat_chameleon_lirc` FOREIGN KEY (`lirc_id`) REFERENCES `chameleon_lirc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2242 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chameleon_dev_chat`
--

DROP TABLE IF EXISTS `chameleon_dev_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chameleon_dev_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lirc_id` int(11) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createrip` varchar(50) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `lastcalled` datetime DEFAULT NULL,
  `calls` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `bgcolor` varchar(50) DEFAULT NULL,
  `style` varchar(50) DEFAULT NULL,
  `iconstyle` varchar(50) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `radio_enabled` varchar(10) DEFAULT '0',
  `radio_streamtype` varchar(256) DEFAULT NULL,
  `radio_type` varchar(50) DEFAULT NULL,
  `radio_name` varchar(50) DEFAULT NULL,
  `radio_url` varchar(256) DEFAULT NULL,
  `radio_port` int(11) DEFAULT NULL,
  `radio_link` varchar(256) DEFAULT NULL,
  `obsolete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_chameleon_dev_chat_chameleon_dev_lirc` (`lirc_id`),
  CONSTRAINT `FK_chameleon_dev_chat_chameleon_dev_lirc` FOREIGN KEY (`lirc_id`) REFERENCES `chameleon_dev_lirc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chameleon_dev_lirc`
--

DROP TABLE IF EXISTS `chameleon_dev_lirc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chameleon_dev_lirc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(128) DEFAULT '0',
  `port` varchar(10) DEFAULT '0',
  `policyPort` varchar(10) DEFAULT '0',
  `accessKey` varchar(50) DEFAULT '0',
  `charset` varchar(50) DEFAULT '0',
  `nick` varchar(50) DEFAULT '0',
  `nickAlternate` varchar(50) DEFAULT '0',
  `rememberNickname` varchar(10) DEFAULT '0',
  `nickPrefix` varchar(50) DEFAULT '0',
  `nickPostfix` varchar(50) DEFAULT '0',
  `showNickPrefixes` varchar(100) DEFAULT '0',
  `showNickPrefixIcons` varchar(10) DEFAULT '0',
  `password` varchar(128) DEFAULT '0',
  `ident` varchar(50) DEFAULT '0',
  `realname` varchar(50) DEFAULT '0',
  `quitMessage` varchar(512) DEFAULT '0',
  `language` varchar(50) DEFAULT '0',
  `languagePath` varchar(128) DEFAULT '0',
  `iconPath` varchar(128) DEFAULT '0',
  `enableQueries` varchar(10) DEFAULT '0',
  `autojoin` varchar(256) DEFAULT '0',
  `perform` varchar(256) DEFAULT '0',
  `blockedCommands` varchar(256) DEFAULT '0',
  `loopServerCommands` varchar(10) DEFAULT '0',
  `loopClienCommands` varchar(10) DEFAULT '0',
  `autoReconnect` varchar(10) DEFAULT '0',
  `showSecurityError` varchar(10) DEFAULT '0',
  `customSecurityErrorMessage` varchar(512) DEFAULT '0',
  `targetFrame` varchar(50) DEFAULT '0',
  `defaultBanmask` varchar(128) DEFAULT '0',
  `performContinousWhoRequests` varchar(10) DEFAULT '0',
  `webcam` varchar(10) DEFAULT '0',
  `rtmp` varchar(128) DEFAULT '0',
  `webcamPreviewBox` varchar(10) DEFAULT '0',
  `webcamPrivateOnly` varchar(10) DEFAULT '0',
  `webcamPublicOnly` varchar(10) DEFAULT '0',
  `webcamVideoOnly` varchar(10) DEFAULT '0',
  `webcamAudioOnly` varchar(10) DEFAULT '0',
  `webcamChannelBlacklist` varchar(1024) DEFAULT '0',
  `webcamChannelWhitelist` varchar(1024) DEFAULT '0',
  `styleURL` varchar(128) DEFAULT '0',
  `navigationPosition` varchar(50) DEFAULT '0',
  `showNavigation` varchar(10) DEFAULT '0',
  `identifyPassword` varchar(50) DEFAULT '0',
  `identifyMessage` varchar(128) DEFAULT '0',
  `identifyCommand` varchar(128) DEFAULT '0',
  `showRegisterNicknameButton` varchar(10) DEFAULT '0',
  `registerNicknameServiceName` varchar(50) DEFAULT '0',
  `registerNicknameCommand` varchar(50) DEFAULT '0',
  `showRegisterChannelButton` varchar(10) DEFAULT '0',
  `registerChannelServiceName` varchar(50) DEFAULT '0',
  `registerChannelCommand` varchar(50) DEFAULT '0',
  `showTimestamps` varchar(10) DEFAULT '0',
  `timestampFormat` varchar(50) DEFAULT '0',
  `showJoinPartMessages` varchar(10) DEFAULT '0',
  `showNewQueriesInBackground` varchar(10) DEFAULT '0',
  `fontSize` varchar(10) DEFAULT '0',
  `showServerWindow` varchar(10) DEFAULT '0',
  `showNickSelection` varchar(10) DEFAULT '0',
  `showIdentifySelection` varchar(10) DEFAULT '0',
  `showServerPasswordSelection` varchar(10) DEFAULT '0',
  `showChannelCentral` varchar(10) DEFAULT '0',
  `showMenuButton` varchar(10) DEFAULT '0',
  `showListButton` varchar(10) DEFAULT '0',
  `showNickChangeButton` varchar(10) DEFAULT '0',
  `showOptionsButton` varchar(10) DEFAULT '0',
  `showChannelCentralButton` varchar(10) DEFAULT '0',
  `showJoinChannelButton` varchar(10) DEFAULT '0',
  `showPartChannelButton` varchar(10) DEFAULT '0',
  `soundAlerts` varchar(10) DEFAULT '0',
  `soundOnNewChannelMessage` varchar(10) DEFAULT '0',
  `showEmoticonsButton` varchar(10) DEFAULT '0',
  `emoticonPath` varchar(128) DEFAULT '0',
  `emoticonList` varchar(1024) DEFAULT '0',
  `showRichTextControls` varchar(10) DEFAULT '0',
  `showRichTextControlsForegroundColor` varchar(10) DEFAULT '0',
  `showRichTextControlsBackgroundColor` varchar(10) DEFAULT '0',
  `showSubmitButton` varchar(10) DEFAULT '0',
  `showChannelHeader` varchar(10) DEFAULT '0',
  `channelHeader` varchar(512) DEFAULT '0',
  `showInfoMessages` varchar(10) DEFAULT '0',
  `showVerboseUserInformation` varchar(10) DEFAULT '0',
  `userListWidth` varchar(10) DEFAULT '0',
  `useUserListIcons` varchar(10) DEFAULT '0',
  `userListCustomIcons` varchar(128) DEFAULT '0',
  `userListCustomFormatting` varchar(128) DEFAULT '0',
  `showUserListInformationPopup` varchar(10) DEFAULT '0',
  `userListInformationPopupItems` varchar(128) DEFAULT '0',
  `contextMenuInternalEvent` varchar(128) DEFAULT '0',
  `contextMenuExternalEvent` varchar(128) DEFAULT '0',
  `obsolete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chameleon_lirc`
--

DROP TABLE IF EXISTS `chameleon_lirc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chameleon_lirc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(128) DEFAULT '0',
  `port` varchar(10) DEFAULT '0',
  `policyPort` varchar(10) DEFAULT '0',
  `accessKey` varchar(50) DEFAULT '0',
  `charset` varchar(50) DEFAULT '0',
  `nick` varchar(50) DEFAULT '0',
  `nickAlternate` varchar(50) DEFAULT '0',
  `rememberNickname` varchar(10) DEFAULT '0',
  `nickPrefix` varchar(50) DEFAULT '0',
  `nickPostfix` varchar(50) DEFAULT '0',
  `showNickPrefixes` varchar(100) DEFAULT '0',
  `showNickPrefixIcons` varchar(10) DEFAULT '0',
  `password` varchar(128) DEFAULT '0',
  `ident` varchar(50) DEFAULT '0',
  `realname` varchar(50) DEFAULT '0',
  `quitMessage` varchar(512) DEFAULT '0',
  `language` varchar(50) DEFAULT '0',
  `languagePath` varchar(128) DEFAULT '0',
  `iconPath` varchar(128) DEFAULT '0',
  `enableQueries` varchar(10) DEFAULT '0',
  `autojoin` varchar(256) DEFAULT '0',
  `perform` varchar(256) DEFAULT '0',
  `blockedCommands` varchar(256) DEFAULT '0',
  `loopServerCommands` varchar(10) DEFAULT '0',
  `loopClienCommands` varchar(10) DEFAULT '0',
  `autoReconnect` varchar(10) DEFAULT '0',
  `showSecurityError` varchar(10) DEFAULT '0',
  `customSecurityErrorMessage` varchar(512) DEFAULT '0',
  `targetFrame` varchar(50) DEFAULT '0',
  `defaultBanmask` varchar(128) DEFAULT '0',
  `performContinousWhoRequests` varchar(10) DEFAULT '0',
  `webcam` varchar(10) DEFAULT '0',
  `rtmp` varchar(128) DEFAULT '0',
  `webcamPreviewBox` varchar(10) DEFAULT '0',
  `webcamPrivateOnly` varchar(10) DEFAULT '0',
  `webcamPublicOnly` varchar(10) DEFAULT '0',
  `webcamVideoOnly` varchar(10) DEFAULT '0',
  `webcamAudioOnly` varchar(10) DEFAULT '0',
  `webcamChannelBlacklist` varchar(1024) DEFAULT '0',
  `webcamChannelWhitelist` varchar(1024) DEFAULT '0',
  `styleURL` varchar(128) DEFAULT '0',
  `navigationPosition` varchar(50) DEFAULT '0',
  `showNavigation` varchar(10) DEFAULT '0',
  `identifyPassword` varchar(50) DEFAULT '0',
  `identifyMessage` varchar(128) DEFAULT '0',
  `identifyCommand` varchar(128) DEFAULT '0',
  `showRegisterNicknameButton` varchar(10) DEFAULT '0',
  `registerNicknameServiceName` varchar(50) DEFAULT '0',
  `registerNicknameCommand` varchar(50) DEFAULT '0',
  `showRegisterChannelButton` varchar(10) DEFAULT '0',
  `registerChannelServiceName` varchar(50) DEFAULT '0',
  `registerChannelCommand` varchar(50) DEFAULT '0',
  `showTimestamps` varchar(10) DEFAULT '0',
  `timestampFormat` varchar(50) DEFAULT '0',
  `showJoinPartMessages` varchar(10) DEFAULT '0',
  `showNewQueriesInBackground` varchar(10) DEFAULT '0',
  `fontSize` varchar(10) DEFAULT '0',
  `showServerWindow` varchar(10) DEFAULT '0',
  `showNickSelection` varchar(10) DEFAULT '0',
  `showIdentifySelection` varchar(10) DEFAULT '0',
  `showServerPasswordSelection` varchar(10) DEFAULT '0',
  `showChannelCentral` varchar(10) DEFAULT '0',
  `showMenuButton` varchar(10) DEFAULT '0',
  `showListButton` varchar(10) DEFAULT '0',
  `showNickChangeButton` varchar(10) DEFAULT '0',
  `showOptionsButton` varchar(10) DEFAULT '0',
  `showChannelCentralButton` varchar(10) DEFAULT '0',
  `showJoinChannelButton` varchar(10) DEFAULT '0',
  `showPartChannelButton` varchar(10) DEFAULT '0',
  `soundAlerts` varchar(10) DEFAULT '0',
  `soundOnNewChannelMessage` varchar(10) DEFAULT '0',
  `showEmoticonsButton` varchar(10) DEFAULT '0',
  `emoticonPath` varchar(128) DEFAULT '0',
  `emoticonList` varchar(1024) DEFAULT '0',
  `showRichTextControls` varchar(10) DEFAULT '0',
  `showRichTextControlsForegroundColor` varchar(10) DEFAULT '0',
  `showRichTextControlsBackgroundColor` varchar(10) DEFAULT '0',
  `showSubmitButton` varchar(10) DEFAULT '0',
  `showChannelHeader` varchar(10) DEFAULT '0',
  `channelHeader` varchar(512) DEFAULT '0',
  `showInfoMessages` varchar(10) DEFAULT '0',
  `showVerboseUserInformation` varchar(10) DEFAULT '0',
  `userListWidth` varchar(10) DEFAULT '0',
  `useUserListIcons` varchar(10) DEFAULT '0',
  `userListCustomIcons` varchar(128) DEFAULT '0',
  `userListCustomFormatting` varchar(128) DEFAULT '0',
  `showUserListInformationPopup` varchar(10) DEFAULT '0',
  `userListInformationPopupItems` varchar(128) DEFAULT '0',
  `contextMenuInternalEvent` varchar(128) DEFAULT '0',
  `contextMenuExternalEvent` varchar(128) DEFAULT '0',
  `obsolete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2257 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-29  7:12:04
