-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: oscgeeksdb
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `committee_images`
--

DROP TABLE IF EXISTS `committee_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committee_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `committee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committee_images`
--

LOCK TABLES `committee_images` WRITE;
/*!40000 ALTER TABLE `committee_images` DISABLE KEYS */;
INSERT INTO `committee_images` VALUES (4,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/art/ocamel.png',5),(5,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/art/post%20college%20or%20SA.png',5),(6,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/art/CS.png',5),(13,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/1.png',11),(14,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/2-1.jpg',11),(15,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/5-2.jpg',11),(16,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/2-2.jpg',11),(17,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/4-2.jpg',11),(18,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/5-1.jpg',11),(19,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/3-1.jpg',11),(20,'https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/logistics/1-2.jpg',11),(21,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/art/13620972_651166068383103_9066307935557221591_n.jpg?raw=true',5),(22,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/art/14322587_676901932476183_2382096579957205857_n.jpg?raw=true',5),(23,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/art/linux%20story.png?raw=true',5),(24,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/22046899_1376407685791545_959523078336136426_n.jpg?raw=true',7),(25,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/BEDROOM%20MD.png?raw=true',7),(26,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/Bubble%20%20Gum%20MMachine.png?raw=true',7),(27,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/Dental%20clinic.png?raw=true',7),(28,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/final%20result.png?raw=true',7),(29,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/hazem-yousef-laptop0.jpg?raw=true',7),(30,'https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/blender_images_new/motorcycle%20model%2015.PNG?raw=true',7);
/*!40000 ALTER TABLE `committee_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `committees`
--

DROP TABLE IF EXISTS `committees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committees`
--

LOCK TABLES `committees` WRITE;
/*!40000 ALTER TABLE `committees` DISABLE KEYS */;
INSERT INTO `committees` VALUES (1,'Linux'),(2,'Projects'),(3,'Web'),(4,'CCC'),(5,'Artwork'),(6,'English Heroes'),(7,'Blender'),(8,'HR'),(9,'PR'),(10,'FR'),(11,'LR');
/*!40000 ALTER TABLE `committees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageurl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Ubuntu Release Party (URP)','https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/events/1.jpg','It\'s a one day event that takes place twice a year since we hold it to celebrate the release of a new version of Ubuntu based distributions of Linux OS, those releases happen in April and October of every year. In this event we tell FCIS students about the open source concept’s most famous application \"Linux\" in general, and the new distributions specifically, we display laptops with various distros installed to give students the chance to try them and see the difference between them first hand, as well as offer technical support if they want them installed on their laptops.'),(2,'Workshops','https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/events/2.png','An event in which we provide 3 workshops ●Linux ●Blender ●Laravel The workshops’ instructors are students with knowledge vast enough to put the applicants on the right path. The workshops are completely free, they start at level zero and build up until participants have enough information to follow their own path. We also follow up with them through our public groups, and facebook fan page.'),(3,'Recruitment','https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/events/3.jpg','An event in which we open our gate for the students to join OSC and learn various skills. We explain the structure of OSC (as on the inside we are 4 families containing 12 committees), and then our Human Resources place the applicants where they fit best, once in you can work everywhere and learn from everybody.'),(4,'Sala5ana','https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/events/4.png','It\'s a one day event where we invite our fellow students to work with us as if they were OSC members, each committee displays their work and lets people join in, this way people learn and have fun as the day is also themed; we have games and activities related to each committee, participants play to earn Mohsens (The OSC currency) and at the end of the day the one with the most number of Mohsens gets a present. The purpose of this day is that instead of telling them, we show them what we do, how we do it, and what it means to be an OSCian.');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2017_04_26_184951_create_events_table',1),(3,'2017_04_26_185356_create_committees_table',1),(4,'2017_09_29_003816_create_workshops_table',1),(5,'2017_10_10_211134_create_positions_table',1),(6,'2017_10_10_211302_create_user_committees_table',1),(7,'2017_10_14_131409_create_committee_images_table',1),(8,'2017_10_14_131559_create_recruitments_table',1),(9,'2018_08_14_175511_create_recruits_table',2),(10,'2018_09_27_181525_create_workshops_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'President'),(2,'SeniorVicePresident'),(3,'VicePresident'),(4,'Head'),(5,'Member');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruits`
--

DROP TABLE IF EXISTS `recruits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_committee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_committee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruits`
--

LOCK TABLES `recruits` WRITE;
/*!40000 ALTER TABLE `recruits` DISABLE KEYS */;
INSERT INTO `recruits` VALUES (1,'Mohammed Tarek Roshdy','mohammedtarek74@yahoo.com','01201285555','Second Year','Human Resources','Web',1,5),(2,'Mohamed Abdelkhalek Salah','mohamed.a.salah11@gmail.com','01019510902','Second Year','Linux','Linux',6,5),(3,'marwa mohamed abo elnasr','meromohamed642@gmail.com','01000807292','Second Year','Linux','English Heroes',4,1),(5,'Ahmed ragab','aragab22@gmail.com','01026009808','Second Year','Projects','Web',2,2),(6,'Aya Rabea Said','ayarabea378@gmail.com','01110784564','Third Year','Projects','Human Resources',3,2),(7,'Ahmed Adel Ahmed','ahmedcrspo55@gmail.com','01153344217','Third Year','Projects','Web',5,2),(8,'Michael Raoof Amin','raoofmichael@yahoo.com','01207121341','Third Year','Projects','Web',3,1),(9,'Doha Adel Fathy','Dohaa1638@gmail.com','01098674522','Second Year','Web','Human Resources',5,4),(11,'Mohamed mamdouh elaraby','Elarabym857@gmail.com','01019950706','Second Year','Web','Artwork',5,4),(12,'Ahmad Sabry Aly','ahmadSabry.std@cis.asu.edu.eg','01145191130','Third Year','Projects','Web',5,5),(13,'maryhansherif','maryhansherif999@gmail.com','01150161164','First Year','Web','Blender',5,1),(14,'ahmed hamdy','ahmedhamdy.fcis@gmail.com','01156242994','Fourth Year','Projects','Web',1,5),(15,'Hisham magdi','heshamelsisi99@gmail.com','01145983209','Second Year','Projects','Web',1,5),(17,'mohamed adel aboeldahab','mohamedmax728@yahoo.com','01112669711','Second Year','Web','Projects',3,1),(19,'Ahmed Saber talaat','A7mdsaber99@gmail.com','01100131596','Second Year','Web','Public Relations',1,5),(20,'nada nagah heidar','nada.nod25522@gmail.com','01006828491','Third Year','Public Relations','Linux',5,3),(21,'Mohamed Badawy Mohamed','Mohamed.badawy0001@gmail.com','01098988863','First Year','Public Relations','English Heroes',6,5),(23,'Ahmed Yasser','ahmedyasser4222@gmail.com','01015062311','First Year','Linux','Projects',6,1),(24,'Aya Magdy Ibrahim','magdyaya37@gmail.com','01102722001','Fourth Year','Public Relations','Human Resources',5,3),(25,'Eman Ehab','emanehabn@gmail.com','01015101929','Fourth Year','Linux','Projects',5,5),(26,'omar','oh83521@gmail.com','01154659015','Third Year','Web','Projects',6,3),(27,'maryhan sherif','maryhansherif999@gmail.com','01150161164','First Year','Web','Blender',5,2),(28,'Christeena Bekheet William','Christeenabekheet@cis.asu.edu.eg','01228861551','Third Year','Web','Web',4,5),(29,'Nada mohamed fareed','nadafareed1999@gmail.com','01155404707','Second Year','Projects','Linux',6,4),(30,'Mariam Mostafa','mariam.m.ali273@gmail.com','01094135475','Second Year','Linux','English Heroes',1,2),(33,'Salma montaser','salmamontaser81@gmail.com','01093968957','Third Year','Logistics','Human Resources',4,3),(34,'Salma Essa Fouad','salmaeissa826@gmail.com','01120146680','Third Year','Web','Projects',5,4),(35,'shrouk tarek ahmed talat','shrouk.talat98@gmail.com','01028822087','Third Year','Web','Projects',5,4),(37,'Abanoub Moris','abanoub.moris1@yahoo.com','01274198513','First Year','Linux','Projects',6,2),(38,'Fady Amir Karam','fadytgk@gmail.com','01282938903','First Year','Web','Linux',5,5),(39,'Abdelrahman abdalla','bedoabdalla24@gmail.com','01013877905','Second Year','Projects','Public Relations',2,4),(40,'Beshoy Mikhail Abe-Elrazek','bbeshoymikhail@gmail.com','01225977151','Second Year','Projects','Web',3,1),(41,'Ahmed Magdy','am4266710@gmail.com','01129997591','Third Year','Web','Human Resources',2,1),(42,'Menna t-Allah Magdy Khalil','mennamagdykh@gmail.com','01111802362','Third Year','Human Resources','Public Relations',4,2),(43,'Nada Mohamed','nada.mohamed7781@gmail.com','01091631837','Second Year','Human Resources','-',5,5),(44,'hend shaker abd-elmegid ahmed','hendshaker118@gmail.com','01019920192','Second Year','Human Resources','-',5,4),(45,'shimaa abdallah abdelfattah','shimaa.abdallah92@yahoo.com','01124782031','Third Year','Human Resources','Artwork',2,3),(46,'Mo\'men Mustafa','zaaza1233@gmail.com','01550936355','Second Year','Projects','Projects',1,1),(47,'Hala Ali','hala86225@gmail.com','01121421981','Second Year','Human Resources','Linux',1,1),(48,'Reham Mohamed','rery.mohamed1100@gmail.com','01112515045','Third Year','Linux','Projects',3,2),(49,'Ayman Mohammed Ibrahim','ayman.m.ibrahim.1994@gmail.com','01097348399','Fourth Year','Human Resources','Linux',4,5),(82,'omnia mohamed sayed','omnia.mohamed.wd@gmail.com','01029624383','Second Year','Web','Projects',5,1),(116,'Ahmed salama Bayomi abdo','ahmedsalamafcis@gmail.com','01068992271','Second Year','Web','Public Relations',6,1),(117,'Alaa Sherif Elghazaly','alaasherif97@gmail.com','01090542958','Fourth Year','Web','Artwork',6,3),(118,'Layla hamdy','laylahamdy711@gmail.com','01156627127','Second Year','Logistics','Public Relations',5,2),(119,'Ahmed mahmoud mohamed','ahmed.m.m.ismael2017@gmail.com','01062770842','Second Year','Web','English Heroes',3,1),(120,'Aya Magdy','magdyaya37@gmail.com','01102722001','Third Year','Public Relations','-',6,4),(121,'Shimaa Ahmed abd El-maksoud','shimaa.a.maksoud@gmail.com','01014105159','Third Year','Projects','Web',1,1),(122,'Marlin magdy','marlinmagdy9@gmail.com','01205871093','First Year','Web','Human Resources',4,5),(123,'مها سرور عبدالرحيم محمد','maha.sroorfcis@gmail.com','01150263950','Third Year','Web','Linux',6,2),(125,'كوثر  محمد محمد','kwtharmohammed@gmail.com','01092960956','First Year','Human Resources','Public Relations',3,3),(127,'احمد عصام عبدالهادي','ahmedesam21561@gmail.com','01147302415','Third Year','Web','Web',6,5),(128,'Abdelrhman Ahmed','abdo.terbo00@gmail.com','01148750511','Third Year','Artwork','Blender',3,5),(129,'Yasmen el mkdad','yasmiin.mkdad@gmail.com','01027812444','Second Year','Web','Logistics',5,1),(130,'Somaya Adel Ahmed','somayaadel04@gmail.com','01149786203','Third Year','Web','Web',4,5),(131,'hebaabdelwhab','hebaabdelwhab99@gmail.com','01274992489','Second Year','Web','Projects',5,2),(132,'eslam nawar','eslamnawar55@Gmail.com','01110177328','Third Year','Human Resources','Fundraising',6,1),(133,'Aml Saber galal','amlsaber326@gmail.com','01022690912','Third Year','Projects','Public Relations',6,1),(134,'Menna Hossam','hossammenna1997@gmail.com','01003687632','Third Year','Human Resources','Fundraising',4,2),(135,'Mostafa Ashraf mostafa','mostafaashraf1381@gmail.com','01149045177','Second Year','Web','-',6,5),(136,'mohga yasser','migoyasserg@gmail.com','01158329197','Second Year','Web','Projects',5,3),(137,'Bassant fakhry mohamed','bassantfakhry@gmail.com','01099670596','Third Year','Blender','Public Relations',5,3),(138,'Ebaa Osama Mohamed','ebaosama14@gmail.com','01202901274','Second Year','Public Relations','Human Resources',4,2),(139,'Mohamed Magdy Abusharaa','mohamedscholes80@gmail.com','01006822327','Third Year','Web','Projects',4,1),(140,'Heba Tawfeek','hebatawfeek88@gmail.com','01152105806','Second Year','Public Relations','Human Resources',4,1),(142,'Radwa samir','rdwousa123@gmail.com','01204006179','Second Year','Web','Linux',4,5),(143,'karim ehab yehia','karimehab97@gmail.com','01068750663','Third Year','Human Resources','Fundraising',4,3),(144,'ahmed mahmoud mohamed ahmed','ahmedmyusuf98@gmail.com','01100848184','Third Year','Human Resources','Web',2,1),(145,'Amr mohsen mohamed','Sonic7298@gmail.com','01068773637','Third Year','Human Resources','Fundraising',6,2),(147,'Abdelrahman Mohamed hossam','abdohossam.5090@gmail.com','01028873400','Third Year','Linux','Public Relations',3,3),(148,'Adhm rabie','adhmrabie2@gmail.com','01128239474','Second Year','Web','Public Relations',6,2),(149,'Mohmed mahmoud and el latif','mohmed.mahmoud98@outlook.com','01150390467','Third Year','English Heroes','Artwork',6,4),(150,'Ahmed Hossam Eldon mohamed','a7mad.hossam23@gmail.com','01005659363','Second Year','Linux','Projects',4,3),(152,'Ahmed hossam','a7mad.hossam22@gmail.com','01005659363','Second Year','Linux','Projects',3,3),(153,'Haidy khaled','haidykhaled548@gmail.com','01069290830','Second Year','Web','Logistics',6,3),(154,'Sayed Osama elsisi','sayedelcc@gmail.com','01062816995','Third Year','Linux','Web',6,2),(155,'mohamed magdy ziada','mohamed.ziada74@gmail.com','01032714345','Second Year','Blender','Linux',3,4),(156,'mohamed mohsen mohamed sabbah','mohamed.farouk@cis.asu.edu.eg','01062922537','Fourth Year','Projects','Linux',6,4),(157,'mohamed ali','ali507343@gmail.com','01112489730','Second Year','Public Relations','Fundraising',4,1),(159,'Manar Ramadan','manar.ramadan1996@gmail.com','01158685268','Fourth Year','Web','Human Resources',2,5),(160,'yomna ali','yomna0222@gmail.com','01022915751','Second Year','Public Relations','Human Resources',2,1),(161,'Nourhan Mohamed Helmy','noorhan.m1998@gmail.com','01123883422','Third Year','Public Relations','Human Resources',2,2),(162,'Ali Taha Abd Elsalam','taha44131@gmail.com','01120548471','Third Year','Web','Linux',6,3),(163,'Hend Abdelfattah Mohamed','hendabdelfta7@gmail.com','01125115818','Third Year','Linux','Blender',4,3),(164,'Aya Elshahat Abd Elsalam','ayaelshahat0100243@sci.asu.edu.eg','01124218650','Fourth Year','Content Creators','Logistics',2,3),(165,'Naden alaa ahmed','nadenalaa22@gmail.com','01009973730','Third Year','Web','Linux',4,4);
/*!40000 ALTER TABLE `recruits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_committees`
--

DROP TABLE IF EXISTS `user_committees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_committees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `committee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_committees`
--

LOCK TABLES `user_committees` WRITE;
/*!40000 ALTER TABLE `user_committees` DISABLE KEYS */;
INSERT INTO `user_committees` VALUES (40,2,1),(41,2,2),(42,2,3),(43,2,4),(44,2,5),(45,2,6),(46,2,7),(47,2,8),(48,2,9),(49,2,10),(50,2,11),(51,1,1),(52,1,2),(53,1,3),(54,1,4),(55,1,5),(56,1,6),(57,1,7),(58,1,8),(59,1,9),(60,1,10),(61,1,11);
/*!40000 ALTER TABLE `user_committees` ENABLE KEYS */;
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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'OSCgeeks','osc@oscgeeks.org','01063593802','1','$2y$10$7lZZ.SDnGnIcSETgfDXWQOVhMpa7p8YPqPBPCxgkB.tBFFLdf5FpO',1,'GuktUJfHBcd8Fv1sT0cnPgYnAp0F92B8Bx0Yhx7bgljiT8plQiTN84AbvWJ7'),(2,'OSCgeeks','member@oscgeeks.org','0','5','$2y$10$tTHrgmsDtTzHrrPAgvPGDOFlE2JRgPrXpbSo.oQEsV35x4ax64Fe6',1,'DCKsPsuWT86rG22OfDZm0nAqkR06MQ7YLQ9ZWDUUo5giHwFhl4On8Qv94tAI');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workshops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_workshop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workshops`
--

LOCK TABLES `workshops` WRITE;
/*!40000 ALTER TABLE `workshops` DISABLE KEYS */;
INSERT INTO `workshops` VALUES (4,'Aya Tarek','aya_tarek1999@live.com','01097728224','Second Year','FCIS','Linux',2,2),(5,'Ahmed Salama Ahmed','salamaa135@gmai.com','01093498811','Second Year','FCIS','Blender',1,4),(6,'fatma said ahmed','batwetlovely@yahoo.com','01119062270','First Year','FCIS','Linux',4,7),(7,'Ahmed Reda','redaa3744@gmail.com','01090390348','Second Year','FCIS','Laravel',1,2),(8,'Habiba Mohamed','ixplatinum@icloud.com','01119992708','Second Year','FCIS','Linux',1,4),(9,'Loaa Osama','loaa.osama.fcis@gmail.com','01094267850','First Year','FCIS','Blender',5,6),(10,'Yasmen Mkdad','yasmiin.mkdad@gmail.com','01027812444','Second Year','FCIS','Linux',4,2),(11,'Haidy Khaled','haidykhale548@gmail.com','01069290830','Second Year','FCIS','Linux',4,2),(12,'Mustafa Maher Abd-Elatief','mustafamaher87@gmail.com','01018306365','Second Year','FCIS','Linux',1,2),(13,'Mai Emad El_dain','maiemad666@gmail.com','01226668559','Second Year','FCIS','Blender',2,5),(14,'Nermin Hussein','nerminhussein200@gmail.com','01100606541','First Year','FCIS','Blender',5,6),(15,'Mariam Abo_Elhamd Abd_Elbary','mariamhashem8@gmail.com','01061909324','Second Year','FCIS','Blender',4,5),(16,'Ahmed Salah Mohamed','a7medse7a10@gmail.com','01111888780','Third Year','FCIS','Linux',4,5),(17,'Ahmed Ismail Zkaria','ahmedismail5050@gmail.com','01015599708','Third Year','FCIS','Linux',4,5),(18,'Marawan Khaled','marwankhaled2356@gmail.com','01151802733','Second Year','FCIS','Blender',3,6),(19,'Marwa Mohamed Abo_Elnasr','meromohamed642@gmail.com','01000807292','Second Year','FCIS','Blender',3,6),(20,'Mustafa Kazem Mahmoud','mustafakazem69@gmail.com','01063264729','Second Year','FCIS','Linux',1,2),(21,'Nada Mohamed Faried','nadaafareed1999@gmail.com','01155404707','Second Year','FCIS','Blender',3,6),(22,'Fyrouz ayman mostafa','rozaayman.fa@gmail.com','01112201542','Second Year','FCIS','Blender',3,6),(23,'Ahmed Adel Ahmed','ahmedcrspo55@gmail.com','01153344217','Third Year','FCIS','Laravel',5,1),(24,'Ahmed Salama bayomi','ahmedsalamafcis@gmail.com','01068992271','Third Year','FCIS','Laravel',5,3),(25,'Ahmed Abd Abdelaziz','ahmeedhassanin@gmail.com','01155436392','Third Year','FCIS','Blender',5,1),(26,'Mohamed Medhat Mohamed','m.mido1914@gmail.com','01140746790','Second Year','FCIS','Linux',4,2),(27,'Omar Mohamed Elsaid','omar.shagar@gmail.com','01033995142','First Year','FCIS','Linux',4,5),(28,'Ahmed Reda Mohy Husien','aaboseta29@gmail.com','01278941935','First Year','FCIS','Linux',2,3),(29,'Raafat Alaa El  Din Sayed','raafatalaa2018@gmail.com','01013498536','First Year','FCIS','Linux',2,5),(30,'Nadeen Hossam Sameir','nadeenhossam202@gmail.com','01018375013','First Year','FCIS','Linux',3,4),(31,'Osama Aly Abd El Salam','x_man.2015@yahoo.com','01115632938','First Year','FCIS','Linux',4,5),(32,'Hossam Ahmed Younis','hossamyounes4@gmail.com','01155411818','First Year','FCIS','Linux',4,5),(33,'Hassan Ahmed Mansour','hassaio25@gmail.com','01102594009','First Year','FCIS','Linux',2,4),(34,'Rawan Tarek Atef','ronatarek20006@gmail.com','01023315566','First Year','FCIS','Linux',2,5),(35,'Reem Abd_Elraheem Ahmed','reemgadelrab99@gmail.com','01550278122','Second Year','FCIS','Linux',2,2),(36,'Shrouk Hussien Darwish','shroukhussein2001@gmail.com','01007582031','First Year','FCIS','Linux',2,5),(37,'Aya Mokhtar','ayaemam174@gmail.com','01125443530','First Year','FCIS','Linux',2,5),(38,'Salma Alaa Abd-Elraoof','salma99kasem@gmail.com','01068624365','Second Year','FCIS','Linux',4,1),(39,'Rahma Mohamed','rahma9000@outlook.com','01026693328','First Year','FCIS','Linux',2,3),(40,'Salma Ahmed Fouad','salmaomran29@gmail.com','01212562514','First Year','FCIS','Linux',2,1),(41,'Marihan Shrief Fares','maryhansherif999@gmail.com','01150161164','Second Year','FCIS','Linux',4,2),(42,'amar atef','ammaratef919@gmail.com','01013966249','First Year','FCIS','Blender',4,3),(43,'Alaa Alsayed Alfauomy','alaa_alsayed@cis.asu.edu.eg','01211965282','Second Year','FCIS','Linux',1,3),(44,'zeyad abd elnaby 7assan','ziadabddelnaby46@gmail.com','01007448572','Second Year','FCIS','Linux',3,1),(45,'MARIAM AHMED','59mariamahmed@gmail.com','01008460799','Second Year','fcis','Laravel',3,7),(46,'nada hesham','nadahalwagy@outlook.com','01006906620','Second Year','FCIS','Laravel',3,7),(47,'rashad abd alah','rashad.roshdy27@gmail.com','01115784418','Second Year','FCIS','Linux',3,1),(48,'romany adel','romany1998adel1998@gmail.com','01155668717','Second Year','FCIS','Linux',3,1),(49,'Martina Gerges Abd-Elnoor','martinagerges20@gmail.com','01200969318','Second Year','FCIS','Linux',3,7),(51,'Mustafa Ashraf Mustafa','mostafaashraf1381@gmail.com','01149045177','Second Year','FCIS','Blender',5,5),(52,'karem hany','kareemghorab3@gmail.com','01128887241','Second Year','FCIS','Linux',4,1),(53,'Ahmed Hatem Said','ahmedhatemsayed@gmail.com','01551523924','Second Year','FCIS','Blender',4,1),(54,'mohamed maher','mmohammedmaher207@gmail.com','01009516329','Second Year','FCIS','Blender',5,1),(55,'Michael Sobhy Shawey','michaelsobhyfcis@gmail.com','01228808450','Second Year','FCIS','Linux',1,6),(56,'abdallah abd elnor','abdallhfcis97@gmail.com','01126622069','Second Year','FCIS','Linux',3,1),(57,'Ebtihal Sherif Yousef','ebtihalsherif@gmail.com','01118568574','Second Year','FCIS','Blender',5,2),(58,'ayaalla mohamed altab3y','yokaeltabey792gmail.com','01145087969','Second Year','FCIS','Blender',5,2),(60,'enas sayed deif','enasdeif@gmail.com','01120220096','Second Year','FCIS','Blender',5,2),(61,'shreef mokhtar','shreefmokhtar98@gmail.com','01118148620','Second Year','FCIS','Linux',2,6),(62,'Zyad Antar Abd-elsamie','zyadkamba@gmail.com','01111805962','Second Year','FCIS','Linux',2,6),(63,'zyad ahmed','zi789adah789med@gmail.com','01100308123','Second Year','FCIS','Linux',2,6),(64,'Saif Eldeen Sameh','seifeldeens15@gmail.com','01155282212','Second Year','FCIS','Linux',2,6),(65,'saad ibrahim saad','se8328436@gmail.com','01026301949','Second Year','FCIS','Linux',5,5),(66,'mahmod saied','m7odahero@yahoo.com','01099066282','First Year','FCIS','Linux',2,4),(67,'Ghadeer Gamal Abd-Elmaksoud','marsleen2cool@gmail.com','01100435809','Second Year','FCIS','Blender',1,3),(68,'ahmed zaky','ahmedzaky592@gmail.com','01027624496','First Year','FCIS','Laravel',5,6),(69,'Menna Allah Abd-Elfattah Mouhamed','mennaabdelfatah16@gmail.com','01229741621','Second Year','FCIS','Blender',4,6),(70,'karema magdy','kareema.magdy@gmail.com','01141831233','Second Year','FCIS','Blender',4,6),(71,'Ahmed Abd-Elgawad Farag','ahmed.abdelgawad.farag@gmail.com','01149605878','First Year','FCIS','Linux',5,3),(72,'heba abdelwhab','hebaabdelwhab99@gmal.com','01274992489','Second Year','FCIS','Linux',2,4),(73,'Mona Khaled Mohamed','mnkhaled1@gmail.com','01128101811','Second Year','FCIS','Linux',2,4),(74,'mohamed elmasry','elmasrymohammed1000@gmail.com','01151271301','Second Year','FCIS','Linux',2,6),(75,'abdallah mahmoud','gheyadabdalla3@gmail.com','01008061806','Second Year','FCIS','Laravel',4,7),(76,'ahmed saber','a7mdsaber99@gmail.com','01100131596','Second Year','FCIS','Laravel',1,5),(77,'reem osama','reemosama216@gmail.com','01000666360','Second Year','FCIS','Blender',3,2),(78,'mariam moubarak','mariammoubarak2552@gmail.com','01128317848','Second Year','FCIS','Blender',3,2),(79,'nayera mohamed','nayeramoh7@gmail.com','01005583969','Second Year','FCIS','Blender',3,2),(80,'hossam aldin esam','hossameldinesam@gmail.com','01124895096','Third Year','FCIS','Blender',3,4),(81,'Ahmed Mahmoud Ahmed','ahmedmk1812@gmail.com','01211322050','Second Year','FCIS','Linux',1,6),(82,'hana tarek','Hana.elshaal16@gmail.com','01100308010','Second Year','FCIS','Linux',4,7),(83,'mohamed ail','mohamedail12504@gmail.com','01155483243','First Year','FCIS','Linux',3,5),(84,'Magdy Yacoub','magdyyakob32@gmail.com','0121107749','Second Year','FCIS','Linux',5,3),(85,'Ali Adel','aliadel283@yahoo.com','01227989522','Second Year','FCIS','Blender',5,3),(86,'ahmed nasr','ahmednasr25889@gmail.com','01150225286','Third Year','FCIS','Laravel',3,4),(87,'Abdelrahman refaat','abdelrahmanrefaat.m@gmail.com','01152225903','Second Year','FCIS','Linux',4,4),(88,'mohamed abdallah mohamed','medokingdom7@gmail.com','01141354474','Second Year','FCIS','Linux',4,4),(89,'adb al rahman mohmed fahmy','abdofahmy2018@yahoo.com','01206397860','First Year','FCIS','Laravel',5,7),(90,'Ahmed Mohamed Abdelfattah','ahmedmohamed203977@yahoo.com','01286582134','First Year','FCIS','Laravel',2,3),(91,'islam mohamed','islam22.em@gmail.com','01200630742','First Year','FCIS','Laravel',5,7),(92,'shimaa ahmed','shimaa.a.maksoud@gmail.com','01014105159','Third Year','FCIS','Laravel',5,2),(93,'Farah Mohamed abd elaziz','farahmnassar99@gmail.com','01114144115','Third Year','FCIS','Laravel',5,7),(94,'ola adel','olaadel3@gmail.com','01125734575','Third Year','FCIS','Laravel',5,7),(95,'Saad Hossam saad','saadhossam839@gmail.com','01015791799','Third Year','FCIS','Laravel',3,2),(96,'salim eslam','salimeslam55@gmail.com','01156846579','Third Year','FCIS','Laravel',3,2),(97,'ahmed abo basha','ahmed_abobasha01@yahoo.com','01007515476','Second Year','FCIS','Laravel',2,3),(98,'Mostafa Ayman','mostafaayman98@gmail.com','01156720777','Second Year','FCIS','Linux',2,4),(99,'menna muhammad','mennamuhammad18@gmail.com','01286807939','First Year','FCIS','Linux',4,7),(100,'sara tarek','saratarekx3@gmail.com','01129519916','First Year','FCIS','Linux',3,3),(101,'Ahmed Hamed  Mohamed','ahmedsstem@gmail.com','01121922997','First Year','FCIS','Linux',2,7),(102,'Abdelrahman mohamed','abdoeltawil78@gmail.com','01157187700','First Year','FCIS','Linux',2,7),(103,'assem Hossam','assem99.hossam@gmail.com','01550108415','First Year','FSIC','Linux',2,5),(104,'alli ibrahim ramdan','Aly.hema224@gmail.com','01123523901','First Year','fcis','Linux',2,5),(105,'abdalla sayed seleem','abdullah.s.selim1@gmail.com','01006680751','First Year','fcis','Linux',2,5),(106,'salma zakrya','salmazakaria99@gmail.com','01011963288','First Year','fcis','Blender',2,2),(107,'Asser Ayman Taha','asser.ayman@gmail.com','01289888674','Second Year','fcis','Linux',2,4),(108,'yasmine hazem','yassmenhazemali555@gmail.com','01062377447','First Year','fcis','Blender',3,5),(109,'emad mohamed ahmed','emmohamed9106@gmail.com','01125053984','Third Year','fcis','Laravel',2,6),(110,'samy osama kodos','samykodoos@gmail.com','01203228551','Second Year','fcis','Laravel',5,4),(111,'Doha Sherif Nofal','dohashiref22@gmail.com','01144427782','Second Year','FCIS','Laravel',4,6),(112,'Nasser Abdallah','nassermoogeza99@gmail.com','01127895656','Second Year','FCIS','Laravel',5,3),(113,'Omar Taha Mohammed','tahamohamed947@gmail.com','01019362736','Second Year','fcis','Linux',4,6),(114,'asmaa ayman ismail','asmaa__ayman@hotmail.com','01060445067','Second Year','fcis','Linux',3,4),(115,'Farah Mohamed Badran','b.badran676@gmial.com','01279873666','Second Year','FCIS','Linux',3,4),(116,'rehab essaam','rehabessam967@gmail.com','01142261058','First Year','FCIS','Linux',2,7),(117,'reem yasser ahmed hamdy','myasserfcis@gamil.com','01140452296','Fourth Year','fcis','Linux',2,3),(118,'Sahar Saber','saharrsaber@gmail.com','01155828350','First Year','FCIS','Laravel',3,5),(119,'Mohamed Ahmed','mohamedahmed55080@gmail.com','01114439207','First Year','FCIS','Linux',3,7),(120,'kholod gamal allam','kholood.gamalfcis@gmail.com','01141369158','Fourth Year','fcis','Linux',2,6);
/*!40000 ALTER TABLE `workshops` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-09 10:29:01
