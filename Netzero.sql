-- MariaDB dump 10.19  Distrib 10.11.4-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: netzero
-- ------------------------------------------------------
-- Server version	10.11.4-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_11_30_213040_create_sections_home_table',1),
(6,'2023_12_05_113818_create_sections_about_table',1),
(7,'2023_12_05_114145_create_sections_services_table',1),
(8,'2023_12_05_114226_create_sections_projects_table',1),
(9,'2023_12_05_114247_create_sections_news_table',1),
(10,'2023_12_05_114304_create_sections_contact_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections_about`
--

DROP TABLE IF EXISTS `sections_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections_about` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections_about`
--

LOCK TABLES `sections_about` WRITE;
/*!40000 ALTER TABLE `sections_about` DISABLE KEYS */;
INSERT INTO `sections_about` VALUES
(1,'main','header=#=About Us#x#wordheader=#=Harnessing the sun, powering a brighter future#x#details=#=NZ is one of the leading companies in\r\nthe field of renewable energy in Africa\r\nand the Arab world because we focus\r\non quality and efficiency .\r\nWe utilize our purchasing power in order\r\nto present best offers with challenging prices .\r\nWe rely on our highly experienced teamwork\r\nto deliver turnkey solutions so, we help\r\nindividuals and business owners to swap from\r\nfossil fuel to renewable energy which has\r\nbecome one of the most required energies\r\nnowadays .#x#img1=#=images\\about\\a1.jpg#x#img2=#=images\\about\\a2.jpg#x#img3=#=images\\about\\a3.jpg',NULL,'2023-12-15 16:51:33'),
(2,'history','header=#=energify Founding#x#wordheader=#=Enerfexpands its operations internationally, establishing partnerships in key markets across Europe, Asia, and North America. The company starts exporting its solar panels to various countries, contributing to the global growth of solar energy.#x#date=#=1890#x#status=#=appear#x#img=#=images\\about\\h1.jpg#xt#header=#=Completing The First Project#x#wordheader=#=energify expands its operations internationally, establishing partnerships in key markets across Europe, Asia, and North America.#x#date=#=1973 - 1998#x#status=#=appear#x#img=#=images\\about\\h2.jpg#xt#header=#=Reasearch#x#wordheader=#=energify invests heavily in research and development to improve solar panel efficiency and performance. They introduce a new line of advanced solar panels utilizing cutting-edge technology, achieving higher conversion rates and increased durability.#x#date=#=2001#x#status=#=appear#x#img=#=images\\about\\h3.jpg#xt#header=#=Example Title#x#wordheader=#=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.#x#date=#=2005#x#status=#=appear#x#img=#=images\\about\\h4.jpg#xt#header=#=Example Title#x#wordheader=#=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.#x#date=#=2005#x#status=#=appear#x#img=#=images\\about\\h5.jpg',NULL,NULL),
(3,'services','header=#=Solar Energy Squad: Illuminating a Sustainable Future#xt#status=#=appear#x#title1=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#title2=#=Governments and organizations around the world are increasingly investing in solar energy as a key part of their sustainable energy strategies. The continued development and adoption of solar energy technologies hold great potential for a cleaner and more sustainable future.#x#img=#=images\\about\\s1.jpg#xt#status=#=appear#x#title1=#=Solar Panels: Solar panels, also known as photovoltaic (PV) panels, are the most common way to capture solar energy. These panels are made up of interconnected solar cells that convert sunlight directly into electricity. When sunlight hits the solar cells, it excites the electrons in the cells, creating a flow of electricity.#x#title2=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#img=#=images\\about\\s2.jpg',NULL,NULL),
(4,'images','header=#=Showcase#x#wordheader=#=Solar power: Lighting up homes and businesses with clean energye#x#img1=#=images\\about\\sh1.jpg#x#img2=#=images\\about\\sh2.jpg#x#img3=#=images\\about\\sh3.jpg#x#img4=#=images\\about\\sh4.jpg#x#img5=#=images\\about\\sh5.jpg#x#img6=#=images\\about\\sh6.jpg',NULL,NULL);
/*!40000 ALTER TABLE `sections_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections_contact`
--

DROP TABLE IF EXISTS `sections_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections_contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections_contact`
--

LOCK TABLES `sections_contact` WRITE;
/*!40000 ALTER TABLE `sections_contact` DISABLE KEYS */;
INSERT INTO `sections_contact` VALUES
(1,'contact','header=#=Let\'s Talk#x#wordheader=#=Got a project on your mind? Let\'s discuss about the details#x#phone=#=+12 9887 234 122#x#facebook=#=##x#twitter=#=##x#youtube=#=#',NULL,NULL),
(2,'message','',NULL,NULL);
/*!40000 ALTER TABLE `sections_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections_home`
--

DROP TABLE IF EXISTS `sections_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections_home` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections_home`
--

LOCK TABLES `sections_home` WRITE;
/*!40000 ALTER TABLE `sections_home` DISABLE KEYS */;
INSERT INTO `sections_home` VALUES
(1,'slider','title=#=From the sun to Earth#x#details=#=With NZC your business decisions are powered by smart engineering solutions#x#img=#=images\\home\\slide\\1375e7de-a65d-4b47-805f-bc6adbfbd319slide1.jpg#xt#title=#=Backbone our future#x#details=#=At NZC, we believe that energy is the future to enhance the health of our planet in order to accomplish green environment.#x#img=#=images\\home\\slide\\slide2.jpg#xt#title=#=Sustainability in business language#x#details=#=Inspired by the slogan “ Actions speak louder than words “, so we build a good future business for a promising world .#x#img=#=images\\home\\slide\\slide3.jpg#xt#title=#=We are Net Zero Company#x#details=#=We are a successful company powered by a world-class talent tool .Through our innovation#x#img=#=images\\home\\slide\\slide4.jpg',NULL,'2023-12-15 16:46:58'),
(2,'services','header=#=Our Solar Services#x#wordheader=#=Sun-powered solutions for a sustainable world#x#titleclients=#=Clients Around the World#x#numberclients=#=64#x#titleprojects=#=Clients Around the World#x#numberprojects=#=124#x#titlefeet=#=Clients Around the World#x#numberfeet=#=244#x#title1=#=Solar Panel Cleaning#x#title2=#=Energy Efficiency Solutions#x#title3=#=Solar System Upgrades and Expansion#x#title4=#=Solar System Design',NULL,NULL),
(3,'about','header=#=About netzero#x#wordheader=#=Harnessing the sun, powering a brighter future#x#history=#=At netzeroSolar Energy, we are dedicated to providing sustainable and renewable energy solutions to empower individuals, businesses, and communities. With a passion for harnessing the power of the sun, we strive to make a positive impact on the environment while helping our clients reduce their carbon footprint and energy costs#x#mission=#=As a leading solar energy company, we specialize in designing, installing, and maintaining state-of-the-art solar panel systems for residential, commercial, and industrial properties. Our team of highly skilled professionals brings years of expertise in solar technology, ensuring that our clients receive reliable, efficient, and cost-effective solar solutions tailored to their unique needs.#x#vision=#=We believe in the transformative power of solar energy to create a more sustanable future. Our commitment to quality and customer satisfaction is evident in every project we undertake. From the initial consultation to post-installation support, we work closely with our clients, providing personalized guidance, transparent communication, and exceptional service at every step.#x#thistory=#=History#x#tmission=#=Mission#x#tvision=#=Vision#x#row1=#=Energy Efficiency Solutions#x#row2=#=Solar Panel Maintenance and Repair#x#row3=#=Grid-Tied SolarSolutions#x#p1=#=95#x#p2=#=85#x#p3=#=75#x#img1=#=images\\home\\about\\slide1.jpg#x#img2=#=images\\home\\about\\slide2.jpg#x#img3=#=images\\home\\about\\slide3.jpg#x#img=#=images\\home\\about\\back.jpg',NULL,NULL),
(4,'categories','title=#=Initial Consultation#x#details=#=The process begins with an initial consultation where the solar energy company engages with the client to understand their energy needs, goals, and site-specific requirements.#x#icon=#=fas fa-globe-africa#x#status=#=appear#xt#title=#=Site Assessment and Feasibility Study#x#details=#=he solar energy company conducts a detailed site assessment to determine the feasibility of a solar energy system. and structural considerations#x#icon=#=fab fa-artstation#x#status=#=appear#xt#title=#=Customized System Design#x#details=#=Based on the assessment and feasibility study, the solar energy company designs a customized solar system that meets the client\'s specific requirements.#x#icon=#=fab fa-digital-ocean#x#status=#=appear#xt#title=#=Proposal and Contracting#x#details=#=The solar energy company provides a comprehensive proposal outlining the system design, projected energy savings, financial analysis, and cost estimates#x#icon=#=fab fa-creative-commons-sa#x#status=#=appear',NULL,NULL),
(5,'images','img1=#=images\\home\\about\\sh1.jpg#x#img2=#=images\\home\\about\\sh2.jpg#x#img3=#=images\\home\\about\\sh3.jpg#x#img4=#=images\\home\\about\\sh4.jpg#x#img5=#=images\\home\\about\\sh5.jpg#x#img6=#=images\\home\\about\\sh6.jpg',NULL,NULL),
(6,'control','headerprojects=#=Project Solstice#x#wordheaderprojects=#=Celebrating the Power of Solar Energy#x#headernews=#=Latest News#x#wordheadernews=#=Discover the Latest in Solar Energy',NULL,NULL),
(7,'masters','header=#=Meet the Masters of Solar Energy#x#wordheader=#=Powering a Sustainable Future: netzeroSolar Team#xt#name=#=Alisson Taylo#x#position=#=Team Manager#x#facebook=#=##x#twitter=#=##x#insta=#=##x#gmail=#=##x#status=#=appear#x#img=#=images\\home\\master\\person1.jpg#xt#name=#=Roger Craig#x#position=#=CEO#x#facebook=#=##x#twitter=#=##x#insta=#=##x#gmail=#=##x#status=#=appear#x#img=#=images\\home\\master\\person2.jpg#xt#name=#=Allan Cooper#x#position=#=CTO#x#facebook=#=##x#twitter=#=##x#insta=#=##x#gmail=#=##x#status=#=appear#x#img=#=images\\home\\master\\person3.jpg',NULL,NULL),
(8,'contact','header=#=Get in Touch#x#wordheader=#=Make contact with solar power, energize your world#x#title=#=Have a project in mind?#x#wordtitle=#=Do not hesitate to say#x#words=#=hi hola Bonjour Zdravstvuyte Nǐn hǎo',NULL,NULL),
(9,'footer','name=#=New york Office#x#phone=#=555-1296#x#email=#=info@netzero.org#x#address=#=123 Main Street, Suite 200 City: Anytown State: StateName#x#status=#=appear#xt#name=#=Paris Office#x#phone=#=+33 1 23 45 9966#x#email=#=info@netzero.com#x#address=#=123 Rue de la Paix, 75002 Paris, France#x#status=#=appear#xt#name=#=Berlin Office#x#phone=#=+49 30 12343693#x#email=#=info@netzero.com#x#address=#=Mauerstrasse 45, 10117 Berlin, Germany#x#status=#=appear',NULL,NULL);
/*!40000 ALTER TABLE `sections_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections_news`
--

DROP TABLE IF EXISTS `sections_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections_news`
--

LOCK TABLES `sections_news` WRITE;
/*!40000 ALTER TABLE `sections_news` DISABLE KEYS */;
INSERT INTO `sections_news` VALUES
(1,'news','status=#=appear#x#date=#= MAY 18, 2023#x#title=#=Solar Energy Surpasses Milestone#x#wordtitle=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#category=#=NEWS#x#subtitle1=#=Off-Grid and Grid-Connected Systems#x#contentsubtitle1=#=Solar energy can be used in both off-grid and grid-connected systems. Off-grid systems are independent and not connected to the main power grid. They typically use batteries to store excess energy for use during periods of low sunlight. Grid-connected systems, on the other hand, are connected to the utility grid. Excess electricity generated by these systems can be fed back into the grid, and energy can#x#subtitle2=#=Cost and Efficiency Improvements#x#contentsubtitle2=#=The cost of solar panels and associated equipment has significantly decreased over the years, making solar energy more accessible and economically viable. Technological advancements have also improved the efficiency of solar panels, allowing them to convert a higher percentage of sunlight into electricity.#x#subtitle3=#=Applications#x#contentsubtitle3=#=Solar energy can be used for various applications, including residential and commercial electricity generation, water heating, powering small electronic devices, and even in large-scale solar power plants that contribute to the electrical grid.#x#contentend=#=Despite its numerous advantages, solar energy does face some challenges. One of the main limitations is its intermittent nature, as solar power generation depends on sunlight availability. Energy storage technologies, such as batteries, are being developed to address this challenge. Additionally, the initial installation cost of solar systems can be relatively high, although it is often offset by long-term energy savings.#x#img=#=images\\news\\n1.jpg#x#bimg1=#=images\\news\\p11.jpg#x#bimg2=#=images\\news\\p12.jpg#xt#status=#=appear#x#date=#=MAY 18, 2023#x#title=#=Solar-Powered Transportation#x#wordtitle=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#category=#=NEWS#x#subtitle1=#=Off-Grid and Grid-Connected Systems#x#contentsubtitle1=#=Solar energy can be used in both off-grid and grid-connected systems. Off-grid systems are independent and not connected to the main power grid. They typically use batteries to store excess energy for use during periods of low sunlight. Grid-connected systems, on the other hand, are connected to the utility grid. Excess electricity generated by these systems can be fed back into the grid, and energy can#x#subtitle2=#=Cost and Efficiency Improvements#x#contentsubtitle2=#=The cost of solar panels and associated equipment has significantly decreased over the years, making solar energy more accessible and economically viable. Technological advancements have also improved the efficiency of solar panels, allowing them to convert a higher percentage of sunlight into electricity.#x#subtitle3=#=Applications#x#contentsubtitle3=#=Solar energy can be used for various applications, including residential and commercial electricity generation, water heating, powering small electronic devices, and even in large-scale solar power plants that contribute to the electrical grid.#x#contentend=#=Despite its numerous advantages, solar energy does face some challenges. One of the main limitations is its intermittent nature, as solar power generation depends on sunlight availability. Energy storage technologies, such as batteries, are being developed to address this challenge. Additionally, the initial installation cost of solar systems can be relatively high, although it is often offset by long-term energy savings.#x#img=#=images\\news\\n2.jpg#x#bimg1=#=images\\news\\p21.jpg#x#bimg2=#=images\\news\\p22.jpg#xt#status=#=appear#x#date=#=MAY 18, 2023#x#title=#=Solar Energy in Developing Countries#x#wordtitle=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#category=#=INSIGHTS#x#subtitle1=#=Off-Grid and Grid-Connected Systems#x#contentsubtitle1=#=Solar energy can be used in both off-grid and grid-connected systems. Off-grid systems are independent and not connected to the main power grid. They typically use batteries to store excess energy for use during periods of low sunlight. Grid-connected systems, on the other hand, are connected to the utility grid. Excess electricity generated by these systems can be fed back into the grid, and energy can#x#subtitle2=#=Cost and Efficiency Improvements#x#contentsubtitle2=#=The cost of solar panels and associated equipment has significantly decreased over the years, making solar energy more accessible and economically viable. Technological advancements have also improved the efficiency of solar panels, allowing them to convert a higher percentage of sunlight into electricity.#x#subtitle3=#=Applications#x#contentsubtitle3=#=Solar energy can be used for various applications, including residential and commercial electricity generation, water heating, powering small electronic devices, and even in large-scale solar power plants that contribute to the electrical grid.#x#contentend=#=Despite its numerous advantages, solar energy does face some challenges. One of the main limitations is its intermittent nature, as solar power generation depends on sunlight availability. Energy storage technologies, such as batteries, are being developed to address this challenge. Additionally, the initial installation cost of solar systems can be relatively high, although it is often offset by long-term energy savings.#x#img=#=images\\news\\n3.jpg#x#bimg1=#=images\\news\\p31.jpg#x#bimg2=#=images\\news\\p32.jpg#xt#status=#=appear#x#date=#= MAY 18, 2023#x#title=#=Solar Energy Storage Breakthroughs#x#wordtitle=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#category=#=NEWS#x#subtitle1=#=Off-Grid and Grid-Connected Systems#x#contentsubtitle1=#=Solar energy can be used in both off-grid and grid-connected systems. Off-grid systems are independent and not connected to the main power grid. They typically use batteries to store excess energy for use during periods of low sunlight. Grid-connected systems, on the other hand, are connected to the utility grid. Excess electricity generated by these systems can be fed back into the grid, and energy can#x#subtitle2=#=Cost and Efficiency Improvements#x#contentsubtitle2=#=The cost of solar panels and associated equipment has significantly decreased over the years, making solar energy more accessible and economically viable. Technological advancements have also improved the efficiency of solar panels, allowing them to convert a higher percentage of sunlight into electricity.#x#subtitle3=#=Applications#x#contentsubtitle3=#=Solar energy can be used for various applications, including residential and commercial electricity generation, water heating, powering small electronic devices, and even in large-scale solar power plants that contribute to the electrical grid.#x#contentend=#=Despite its numerous advantages, solar energy does face some challenges. One of the main limitations is its intermittent nature, as solar power generation depends on sunlight availability. Energy storage technologies, such as batteries, are being developed to address this challenge. Additionally, the initial installation cost of solar systems can be relatively high, although it is often offset by long-term energy savings.#x#img=#=images\\news\\n4.jpg#x#bimg1=#=images\\news\\p41.jpg#x#bimg2=#=images\\news\\p42.jpg#xt#status=#=appear#x#date=#= MAY 12, 2023#x#title=#=Solar-Powered Innovations#x#wordtitle=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#category=#=INSIGHTS#x#subtitle1=#=Off-Grid and Grid-Connected Systems#x#contentsubtitle1=#=Solar energy can be used in both off-grid and grid-connected systems. Off-grid systems are independent and not connected to the main power grid. They typically use batteries to store excess energy for use during periods of low sunlight. Grid-connected systems, on the other hand, are connected to the utility grid. Excess electricity generated by these systems can be fed back into the grid, and energy can#x#subtitle2=#=Cost and Efficiency Improvements#x#contentsubtitle2=#=The cost of solar panels and associated equipment has significantly decreased over the years, making solar energy more accessible and economically viable. Technological advancements have also improved the efficiency of solar panels, allowing them to convert a higher percentage of sunlight into electricity.#x#subtitle3=#=Applications#x#contentsubtitle3=#=Solar energy can be used for various applications, including residential and commercial electricity generation, water heating, powering small electronic devices, and even in large-scale solar power plants that contribute to the electrical grid.#x#contentend=#=Despite its numerous advantages, solar energy does face some challenges. One of the main limitations is its intermittent nature, as solar power generation depends on sunlight availability. Energy storage technologies, such as batteries, are being developed to address this challenge. Additionally, the initial installation cost of solar systems can be relatively high, although it is often offset by long-term energy savings.#x#img=#=images\\news\\n5.jpg#x#bimg1=#=images\\news\\p51.jpg#x#bimg2=#=images\\news\\p52.jpg#xt#status=#=appear#x#date=#= MAY 15, 2023#x#title=#=The Rise of Solar-Powered Smart Cities#x#wordtitle=#=Solar Thermal Systems: Solar thermal systems use sunlight to heat water or other fluids. These systems are commonly used for heating water in residential and commercial buildings or for generating steam to produce electricity in large-scale power plants.#x#category=#=INSIGHTS#x#subtitle1=#=Off-Grid and Grid-Connected Systems#x#contentsubtitle1=#=Solar energy can be used in both off-grid and grid-connected systems. Off-grid systems are independent and not connected to the main power grid. They typically use batteries to store excess energy for use during periods of low sunlight. Grid-connected systems, on the other hand, are connected to the utility grid. Excess electricity generated by these systems can be fed back into the grid, and energy can#x#subtitle2=#=Cost and Efficiency Improvements#x#contentsubtitle2=#=The cost of solar panels and associated equipment has significantly decreased over the years, making solar energy more accessible and economically viable. Technological advancements have also improved the efficiency of solar panels, allowing them to convert a higher percentage of sunlight into electricity.#x#subtitle3=#=Applications#x#contentsubtitle3=#=Solar energy can be used for various applications, including residential and commercial electricity generation, water heating, powering small electronic devices, and even in large-scale solar power plants that contribute to the electrical grid.#x#contentend=#=Despite its numerous advantages, solar energy does face some challenges. One of the main limitations is its intermittent nature, as solar power generation depends on sunlight availability. Energy storage technologies, such as batteries, are being developed to address this challenge. Additionally, the initial installation cost of solar systems can be relatively high, although it is often offset by long-term energy savings.#x#img=#=images\\news\\n6.jpg#x#bimg1=#=images\\news\\p61.jpg#x#bimg2=#=images\\news\\p62.jpg',NULL,NULL),
(2,'comments','',NULL,NULL);
/*!40000 ALTER TABLE `sections_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections_projects`
--

DROP TABLE IF EXISTS `sections_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections_projects`
--

LOCK TABLES `sections_projects` WRITE;
/*!40000 ALTER TABLE `sections_projects` DISABLE KEYS */;
INSERT INTO `sections_projects` VALUES
(1,'projects','status=#=appear#x#name=#=SolarGlow Initiative#x#title=#=Go solar, make a greener world#x#wordtitle=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#category=#=CLEAN ENERGY#x#subtitle1=#=Solar System Upgrades#x#contentsubtitle1=#=Solar energy companies may provide upgrade services for existing solar systems, such as adding more panels, integrating advanced monitoring systems, or improving energy storage capabilities. This allows customers to optimize their existing systems or expand their solar capacity.#x#subtitle2=#=Off-Grid Solutions#x#contentsubtitle2=#=Companies specializing in off-grid solar systems can design and install standalone solar power systems for remote locations or areas without access to the main power grid. These systems often include a combination of solar panels, batteries, and backup generators.#x#subtitle3=#=System Design and Engineering#x#contentsubtitle3=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#subheader1=#=Renewable Power#x#contentsubheader1=#=A solar energy project refers to an initiative aimed at utilizing solar power as a source of clean and renewable energy. These projects involve the design, installation, and operation of solar systems to capture sunlight and convert it into usable electricity or heat. Solar energy projects can range from small-scale residential installations to large-scale utility projects and can serve various purposes, including powering homes, businesses, or even entire communities.#x#subheader2=#=Clean Energy#x#contentsubheader2=#=The primary objective of a solar energy clean energy project is to transition from fossil fuel-based energy to a sustainable and environmentally friendly energy source. By harnessing the power of the sun, the project seeks to generate clean energy that significantly reduces carbon emissions and contributes to mitigating climate change.#x#contentend=#=The project involves the deployment of solar panels or solar thermal systems to capture sunlight and convert it into usable energy. Solar panels consist of photovoltaic cells that directly convert sunlight into electricity, while solar thermal systems use sunlight to heat water or other fluids to produce heat or steam for electricity generation or other applications.#x#img=#=images\\projects\\p1.jpg#x#bimg1=#=images\\projects\\p11.jpg#x#bimg2=#=images\\projects\\p12.jpg#xt#status=#=appear#x#name=#=SunPower Solutions#x#title=#=Go solar, make a greener world#x#wordtitle=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#category=#=SUSTAINABLE SUN#x#subtitle1=#=Solar System Upgrades#x#contentsubtitle1=#=Solar energy companies may provide upgrade services for existing solar systems, such as adding more panels, integrating advanced monitoring systems, or improving energy storage capabilities. This allows customers to optimize their existing systems or expand their solar capacity.#x#subtitle2=#=Off-Grid Solutions#x#contentsubtitle2=#=Companies specializing in off-grid solar systems can design and install standalone solar power systems for remote locations or areas without access to the main power grid. These systems often include a combination of solar panels, batteries, and backup generators.#x#subtitle3=#=System Design and Engineering#x#contentsubtitle3=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#subheader1=#=Renewable Power#x#contentsubheader1=#=A solar energy project refers to an initiative aimed at utilizing solar power as a source of clean and renewable energy. These projects involve the design, installation, and operation of solar systems to capture sunlight and convert it into usable electricity or heat. Solar energy projects can range from small-scale residential installations to large-scale utility projects and can serve various purposes, including powering homes, businesses, or even entire communities.#x#subheader2=#=Clean Energy#x#contentsubheader2=#=The primary objective of a solar energy clean energy project is to transition from fossil fuel-based energy to a sustainable and environmentally friendly energy source. By harnessing the power of the sun, the project seeks to generate clean energy that significantly reduces carbon emissions and contributes to mitigating climate change.#x#contentend=#=The project involves the deployment of solar panels or solar thermal systems to capture sunlight and convert it into usable energy. Solar panels consist of photovoltaic cells that directly convert sunlight into electricity, while solar thermal systems use sunlight to heat water or other fluids to produce heat or steam for electricity generation or other applications.#x#img=#=images\\projects\\p2.jpg#x#bimg1=#=images\\projects\\p21.jpg#x#bimg2=#=images\\projects\\p22.jpg#xt#status=#=appear#x#name=#=Solaris Power Project#x#title=#=Switch to solar, embrace the energy revolution#x#wordtitle=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#category=#=RENEWABLE POWER#x#subtitle1=#=Solar System Upgrades#x#contentsubtitle1=#=Solar energy companies may provide upgrade services for existing solar systems, such as adding more panels, integrating advanced monitoring systems, or improving energy storage capabilities. This allows customers to optimize their existing systems or expand their solar capacity.#x#subtitle2=#=Off-Grid Solutions#x#contentsubtitle2=#=Companies specializing in off-grid solar systems can design and install standalone solar power systems for remote locations or areas without access to the main power grid. These systems often include a combination of solar panels, batteries, and backup generators.#x#subtitle3=#=System Design and Engineering#x#contentsubtitle3=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#subheader1=#=Renewable Power#x#contentsubheader1=#=A solar energy project refers to an initiative aimed at utilizing solar power as a source of clean and renewable energy. These projects involve the design, installation, and operation of solar systems to capture sunlight and convert it into usable electricity or heat. Solar energy projects can range from small-scale residential installations to large-scale utility projects and can serve various purposes, including powering homes, businesses, or even entire communities.#x#subheader2=#=Clean Energy#x#contentsubheader2=#=The primary objective of a solar energy clean energy project is to transition from fossil fuel-based energy to a sustainable and environmentally friendly energy source. By harnessing the power of the sun, the project seeks to generate clean energy that significantly reduces carbon emissions and contributes to mitigating climate change.#x#contentend=#=The project involves the deployment of solar panels or solar thermal systems to capture sunlight and convert it into usable energy. Solar panels consist of photovoltaic cells that directly convert sunlight into electricity, while solar thermal systems use sunlight to heat water or other fluids to produce heat or steam for electricity generation or other applications.#x#img=#=images\\projects\\p3.jpg#x#bimg1=#=images\\projects\\p31.jpg#x#bimg2=#=images\\projects\\p32.jpg#xt#status=#=appear#x#name=#=Solara Green Energy Project#x#title=#=Go solar, make a greener world#x#wordtitle=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#category=#=GREEN TECHNOLOGY#x#subtitle1=#=Solar System Upgrades#x#contentsubtitle1=#=Solar energy companies may provide upgrade services for existing solar systems, such as adding more panels, integrating advanced monitoring systems, or improving energy storage capabilities. This allows customers to optimize their existing systems or expand their solar capacity.#x#subtitle2=#=Off-Grid Solutions#x#contentsubtitle2=#=Companies specializing in off-grid solar systems can design and install standalone solar power systems for remote locations or areas without access to the main power grid. These systems often include a combination of solar panels, batteries, and backup generators.#x#subtitle3=#=System Design and Engineering#x#contentsubtitle3=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#subheader1=#=Renewable Power#x#contentsubheader1=#=A solar energy project refers to an initiative aimed at utilizing solar power as a source of clean and renewable energy. These projects involve the design, installation, and operation of solar systems to capture sunlight and convert it into usable electricity or heat. Solar energy projects can range from small-scale residential installations to large-scale utility projects and can serve various purposes, including powering homes, businesses, or even entire communities.#x#subheader2=#=Clean Energy#x#contentsubheader2=#=The primary objective of a solar energy clean energy project is to transition from fossil fuel-based energy to a sustainable and environmentally friendly energy source. By harnessing the power of the sun, the project seeks to generate clean energy that significantly reduces carbon emissions and contributes to mitigating climate change.#x#contentend=#=The project involves the deployment of solar panels or solar thermal systems to capture sunlight and convert it into usable energy. Solar panels consist of photovoltaic cells that directly convert sunlight into electricity, while solar thermal systems use sunlight to heat water or other fluids to produce heat or steam for electricity generation or other applications.#x#img=#=images\\projects\\p4.jpg#x#bimg1=#=images\\projects\\p41.jpg#x#bimg2=#=images\\projects\\p42.jpg#xt#status=#=appear#x#name=#=SolarEdge Innovations#x#title=#=Energy independence starts with solar#x#wordtitle=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#category=#=BRIGHT FUTURE#x#subtitle1=#=Solar System Upgrades#x#contentsubtitle1=#=Solar energy companies may provide upgrade services for existing solar systems, such as adding more panels, integrating advanced monitoring systems, or improving energy storage capabilities. This allows customers to optimize their existing systems or expand their solar capacity.#x#subtitle2=#=Off-Grid Solutions#x#contentsubtitle2=#=Companies specializing in off-grid solar systems can design and install standalone solar power systems for remote locations or areas without access to the main power grid. These systems often include a combination of solar panels, batteries, and backup generators.#x#subtitle3=#=System Design and Engineering#x#contentsubtitle3=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#subheader1=#=Renewable Power#x#contentsubheader1=#=A solar energy project refers to an initiative aimed at utilizing solar power as a source of clean and renewable energy. These projects involve the design, installation, and operation of solar systems to capture sunlight and convert it into usable electricity or heat. Solar energy projects can range from small-scale residential installations to large-scale utility projects and can serve various purposes, including powering homes, businesses, or even entire communities.#x#subheader2=#=Clean Energy#x#contentsubheader2=#=The primary objective of a solar energy clean energy project is to transition from fossil fuel-based energy to a sustainable and environmentally friendly energy source. By harnessing the power of the sun, the project seeks to generate clean energy that significantly reduces carbon emissions and contributes to mitigating climate change.#x#contentend=#=The project involves the deployment of solar panels or solar thermal systems to capture sunlight and convert it into usable energy. Solar panels consist of photovoltaic cells that directly convert sunlight into electricity, while solar thermal systems use sunlight to heat water or other fluids to produce heat or steam for electricity generation or other applications.#x#img=#=images\\projects\\p5.jpg#x#bimg1=#=images\\projects\\p51.jpg#x#bimg2=#=images\\projects\\p52.jpg#xt#status=#=appear#x#name=#=SolarSage Initiative#x#title=#=Unleash the power of solar energy#x#wordtitle=#=Solar energy is a renewable form of energy that harnesses the power of the sun to generate electricity or heat. It is considered one of the cleanest and most abundant sources of energy available to us. Solar energy technologies have advanced significantly over the years and are increasingly being adopted as a viable alternative to traditional fossil fuel-based energy sources.#x#category=#=ENERGY INDEPENDENCE#x#subtitle1=#=Solar System Upgrades#x#contentsubtitle1=#=Solar energy companies may provide upgrade services for existing solar systems, such as adding more panels, integrating advanced monitoring systems, or improving energy storage capabilities. This allows customers to optimize their existing systems or expand their solar capacity.#x#subtitle2=#=Off-Grid Solutions#x#contentsubtitle2=#=Companies specializing in off-grid solar systems can design and install standalone solar power systems for remote locations or areas without access to the main power grid. These systems often include a combination of solar panels, batteries, and backup generators.#x#subtitle3=#=System Design and Engineering#x#contentsubtitle3=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#subheader1=#=Renewable Power#x#contentsubheader1=#=A solar energy project refers to an initiative aimed at utilizing solar power as a source of clean and renewable energy. These projects involve the design, installation, and operation of solar systems to capture sunlight and convert it into usable electricity or heat. Solar energy projects can range from small-scale residential installations to large-scale utility projects and can serve various purposes, including powering homes, businesses, or even entire communities.#x#subheader2=#=Clean Energy#x#contentsubheader2=#=The primary objective of a solar energy clean energy project is to transition from fossil fuel-based energy to a sustainable and environmentally friendly energy source. By harnessing the power of the sun, the project seeks to generate clean energy that significantly reduces carbon emissions and contributes to mitigating climate change.#x#contentend=#=The project involves the deployment of solar panels or solar thermal systems to capture sunlight and convert it into usable energy. Solar panels consist of photovoltaic cells that directly convert sunlight into electricity, while solar thermal systems use sunlight to heat water or other fluids to produce heat or steam for electricity generation or other applications.#x#img=#=images\\projects\\p6.jpg#x#bimg1=#=images\\projects\\p61.jpg#x#bimg2=#=images\\projects\\p62.jpg',NULL,NULL);
/*!40000 ALTER TABLE `sections_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections_services`
--

DROP TABLE IF EXISTS `sections_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections_services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections_services`
--

LOCK TABLES `sections_services` WRITE;
/*!40000 ALTER TABLE `sections_services` DISABLE KEYS */;
INSERT INTO `sections_services` VALUES
(1,'main','header=#=Our Services#x#services=#=Solar Panel Installation,Solar System Design,Solar Energy Consultation,Solar System Maintenance,Solar Energy Storage,Solar Financing,Solar System Monitoring,Energy Efficiency Solutions#x#img1=#=images\\services\\main1.jpg#x#img2=#=images\\services\\main2.jpg',NULL,NULL),
(2,'services','status=#=disappea#x#header=#=Empowering you with clean energy#x#title1=#=Solar Panel Installation#x#contenttitle1=#=A solar energy company can provide professional installation services for solar panels on residential, commercial, or industrial properties. This includes assessing the site, designing the system, obtaining necessary permits, and safely installing the solar panels#x#title2=#=System Design and Engineering#x#contenttitle2=#=Solar energy companies can offer system design and engineering services, customizing solar solutions to meet the specific energy needs and requirements of their clients. This includes determining the optimal placement of solar panels, calculating system size, and designing the electrical components.#x#title3=#=Solar Energy Consultation#x#contenttitle3=#=Companies can provide consultation services to guide customers through the process of transitioning to solar energy. This may involve analyzing energy consumption, conducting site assessments, and advising on the most suitable solar solutions based on the customer\'s goals and budget.#x#img=#=images\\services\\s1.jpg#xt#status=#=disappea#x#header=#=Light up your life with solar energy#x#title1=#=Energy Efficiency Audits#x#contenttitle1=#=Solar energy companies can assess the energy efficiency of buildings and recommend energy-saving measures. By identifying areas of energy waste, they can help clients optimize their energy usage and maximize the benefits of solar energy systems#x#title2=#=Maintenance and Monitoring#x#contenttitle2=#=Solar energy companies can assess the energy efficiency of buildings and recommend energy-saving measures. By identifying areas of energy waste, they can help clients optimize their energy usage and maximize the benefits of solar energy systems#x#title3=#=Battery Storage Solutions#x#contenttitle3=#=Some solar energy companies offer battery storage systems to store excess solar energy for use during times of low sunlight or power outages. These systems allow customers to increase self-consumption of solar power and enhance energy independence#x#img=#=images\\services\\s2.jpg',NULL,NULL);
/*!40000 ALTER TABLE `sections_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'AliabdO','admin@gmail.com','2023-12-15 14:49:33','$2y$10$JCNhdWNl2uX3CRFHaMeeXO8JpU44P8QMXUE02gxmY9xaJn4VfrrCC','c5TNck2ZD3','2023-12-15 14:49:33','2023-12-15 14:49:33');
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

-- Dump completed on 2023-12-16  0:46:00
