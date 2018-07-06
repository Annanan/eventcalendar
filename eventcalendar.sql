-- MySQL dump 10.13  Distrib 5.5.59, for Linux (x86_64)
--
-- Host: localhost    Database: eventcalendar
-- ------------------------------------------------------
-- Server version	5.5.59

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `eventdate` int(11) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `prefecture` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `description` text,
  `price` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'インクレディブル・ファミリー',1,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','第77回アカデミー長編アニメ映画賞を受賞したディズニー／ピクサーの大ヒット作「Mr.インクレディブル」の14年ぶりとなる続編。','１８００円','2018-07-05 03:35:38'),(2,'センセイ君主',1,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','幸田もも子による人気少女漫画を、竹内涼真と浜辺美波という注目若手俳優共演で実写映画化した学園ラブコメディ。','１８００円','2018-07-05 03:35:38'),(3,'青夏　きみに恋した３０日',1,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','講談社「別冊フレンド」で2013年から17年にかけて連載された南波あつこの人気コミックを、NHK連続テレビ小説「わろてんか」の葵わかなと「ちはやふる　結び」の佐野勇斗の主演で実写映画化した青春ラブストーリー。','１８００円','2018-07-05 03:35:38'),(4,'ミッション：インポッシブル　フォールアウト',3,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','トム・クルーズ主演の人気スパイアクション「ミッション：インポッシブル」シリーズ第6作。','１８００円','2018-07-05 03:35:38'),(5,'劇場版　仮面ライダービルド　Be The One',4,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','平成仮面ライダーシリーズの19作目として2018年9月からテレビ放送開始の「仮面ライダービルド」の劇場版。','１８００円','2018-07-05 03:35:38'),(6,'アローン',6,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','ヨーロッパの人気コミックシリーズを実写映画化したフランス製SFファンタジースリラー。','１８００円','2018-07-05 03:35:38'),(7,'アルカディア',8,'各映画館のスケジュールを参照ください。','東京都','新宿シネマカリテ','映画','新宿シネマカリテの特集企画「カリコレ2018／カリテ・ファンタスティック！シネマコレクション2018」（18年7月14日～8月24日）上映作品。','１８００円','2018-07-05 03:35:38'),(8,'オーシャンズ８',10,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','スティーブン・ソダーバーグ監督が手がけ、主演のジョージ・クルーニーほかオールスターキャスト共演で話題を集めた「オーシャンズ」シリーズを、新たにオール女性キャストで描くクライムエンタテインメント。','１８００円','2018-07-05 03:35:38'),(9,'英国総督　最後の家',11,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','1947年、独立前夜のインドを舞台に、激動する歴史に翻弄された人々の姿を描いたヒューマンドラマ。','１８００円','2018-07-05 03:35:38'),(10,'ゾンからのメッセージ',11,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','「ゾン」と呼ばれる謎の現象によって囲まれ、時が止まったかのような不思議な懐かしい町を舞台に、町の住人たちが織り成す人間模様を描いたSF群像劇。','１８００円','2018-07-05 03:35:38'),(11,'タナー・ホール　胸騒ぎの誘惑',12,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','「キャロル」「ドラゴン・タトゥーの女」のルーニー・マーラ、「ルーム」でアカデミー賞を受賞したブリー・ラーソンら、後に頭角を現すブレイク前の若手女優たちが共演し、2009年に製作された青春ガールズムービー。','１８００円','2018-07-05 03:35:38'),(12,'サムソン',14,'各映画館のスケジュールを参照ください。','東京都','新宿シネマカリテ','映画','新宿シネマカリテの特集企画「カリコレ2018／カリテ・ファンタスティック！シネマコレクション2018」（18年7月14日～8月24日）上映作品。','１８００円','2018-07-05 03:35:38'),(13,'銀魂２　起きては破るためにこそある',17,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','空知英秋による人気コミックを小栗旬主演＆福田雄一監督のタッグで実写映画化し、2017年の邦画実写でナンバーワンの大ヒットを記録した「銀魂」の続編。','１８００円','2018-07-05 03:35:38'),(14,'劇場版　七つの大罪　天空の囚われ人',18,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','「週刊少年マガジン」の看板コミックとして人気を集める「七つの大罪」を、原作者・鈴木央の描き下ろしネームをもとにした完全オリジナルストーリーでアニメ映画化。','１８００円','2018-07-05 03:35:38'),(15,'チャーチル　ノルマンディーの決断',18,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','英国首相チャーチルのノルマンディー上陸作戦決行までの96時間を描いたヒューマンドラマ。','１８００円','2018-07-05 03:35:38'),(16,'ミューズ',19,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','「REC レック」シリーズのジャウマ・バラゲロ監督がメガホンをとり、大学教授が殺人事件の予知夢を見たことから恐ろしい事態に巻き込まれていく様子を描いたサスペンススリラー。','１８００円','2018-07-05 03:35:38'),(17,'マンマ・ミーア！　ヒア・ウィーゴー',24,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','同名のミュージカルを映画化した2008年の映画『マンマ・ミーア!』から10年後の現在と、過去の青春時代を描く続編。','１８００円','2018-07-05 03:35:38'),(18,'検察側の罪人',24,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','木村拓哉と二宮和也の初共演で、「犯人に告ぐ」などで知られる雫井脩介の同名ミステリー小説を映画化。','１８００円','2018-07-05 03:35:38'),(19,'若い女',25,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','フランスの若手女性監督レオノール・セライユがフランス国立映画学校の卒業制作として書いた脚本をもとにメガホンをとり、2017年・第70回カンヌ国際映画祭で新人監督賞にあたるカメラドールを受賞した人間ドラマ。','１８００円','2018-07-05 03:35:38'),(20,'アントマン＆ワスプ',31,'各映画館のスケジュールを参照ください。','全国','全国の映画館','映画','マーベルコミック原作で「マーベル・シネマティック・ユニバース」に属する映画「アントマン」のシリーズ第2弾。','１８００円','2018-07-05 03:35:38');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `loginid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_loginid_index` (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loginid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_loginid_unique` (`loginid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'eventon','eventon','$2y$10$5MI1HVTm3GiU4x0dmDIL6.SL39bMlGpMjvBfb.1ijM1nuceOfHkaW','OjzDRSyKIQtcDjH4hBUGUQhcrI4fMvRAL9VY7vyC7QvQ9t9PvHKx2Xjl4DKk','2018-07-05 11:01:31','2018-07-05 11:01:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-06  3:17:10
