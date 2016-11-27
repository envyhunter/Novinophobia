-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: novinophobia
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'envyhunter','Oniv','Sean','Pearson');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userpreference`
--

DROP TABLE IF EXISTS `userpreference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userpreference` (
  `userId` int(11) DEFAULT NULL,
  `intensity` int(11) DEFAULT NULL,
  `spicy` int(11) DEFAULT NULL,
  `chocolate` int(11) DEFAULT NULL,
  `acidity` int(11) DEFAULT NULL,
  `light_bodied` int(11) DEFAULT NULL,
  `medium_bodied` int(11) DEFAULT NULL,
  `full_bodied` int(11) DEFAULT NULL,
  `dry` int(11) DEFAULT NULL,
  `sweet` int(11) DEFAULT NULL,
  `elegant` int(11) DEFAULT NULL,
  `earthy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userpreference`
--

LOCK TABLES `userpreference` WRITE;
/*!40000 ALTER TABLE `userpreference` DISABLE KEYS */;
/*!40000 ALTER TABLE `userpreference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `winelist`
--

DROP TABLE IF EXISTS `winelist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `winelist` (
  `wineId` int(11) NOT NULL AUTO_INCREMENT,
  `description` blob,
  `wineName` varchar(30) DEFAULT NULL,
  `intensity` int(11) DEFAULT NULL,
  `spicy` int(11) DEFAULT NULL,
  `chocolate` int(11) DEFAULT NULL,
  `acidity` int(11) DEFAULT NULL,
  `light_bodied` int(11) DEFAULT NULL,
  `medium_bodied` int(11) DEFAULT NULL,
  `full_bodied` int(11) DEFAULT NULL,
  `dry` int(11) DEFAULT NULL,
  `sweet` int(11) DEFAULT NULL,
  `elegant` int(11) DEFAULT NULL,
  `earthy` int(11) DEFAULT NULL,
  PRIMARY KEY (`wineId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `winelist`
--

LOCK TABLES `winelist` WRITE;
/*!40000 ALTER TABLE `winelist` DISABLE KEYS */;
INSERT INTO `winelist` VALUES (1,'With bold flavors of blackberry and cherry supported by firm tannins, brown spice and a dark chocolate espresso finish, this Cabernet was carefully aged to develop dark fruit flavors and dark roast aromas.','Dark Horse Cabernet',0,0,0,0,0,0,1,1,0,1,0),(2,'Aromas of blackberries, plums and black cherries. Expressive flavors of cherries and berries are joined by subtle nuances of mocha and spice. Blackberries are repeated on the palate with notes of cherries and spice.','14 Hands Merlot',0,0,0,0,0,0,1,1,0,1,0),(3,'This classic red wine varietal is well known for its rich personality and taste. Barefoot Merlot is the perfect combo of cherry, boysenberry, plum, and chocolate. A mocha finish is complemented by hints of smoky vanilla oak. Raised right, it’s well rounded with mild tannins.','Barefoot Merlot',1,0,1,0,0,0,1,0,0,0,0),(4,'Washington- Flavors and aromas of sweet cherries, ripe red raspberries, succulent plums and marshmallow-y vanilla leading to a soft and silky finish. Enjoy with red meats, grilled fish and sharp cheeses.','Radius Merlot',0,0,1,1,0,1,0,0,0,0,0),(5,' California- This Merlot presents aromas of mixed red berries, juicy cherries and hints of vanilla oak. The wine is medium-bodied with flavors of sweet berries and black cherry that linger with hints of oak through a long, smooth finish. Keep it simple, go after the Low Hanging Fruit.','Low Hanging Fruit Merlot',0,0,0,0,0,1,0,0,0,1,0),(6,'Mendoza, Argentina- A luscious blend of primarily Malbec. These grapes are hand picked from the best of Tupungato and Barrancas and have been aged for 12 months in oak barrels to create this full-bodied wine with well rounded tannins and a dark fruit palate. Try it with Osso Buco.','Flichman Malbec Tupungato',0,0,0,0,0,0,0,0,0,0,0),(7,'Mendoza, Argentina- This 100% Malbec is sourced from three iconic high altitude vineyards in the famed region of Mendoza. Revealing rich black fruit and red plum aromas, a spicy, structured palate and a long firm finish. Classic match with grilled meats.','Cruz Alta Malbec Reserve',0,0,0,0,0,1,0,0,1,0,0),(8,'James Suckling-Mendoza, Argentina -  An attractive red with notes of dried berry and light chocolate. Spicy too. Full body, juicy and rich with a long and flavorful finish. I like the balsamic undertone to this. This is a real malbec.','Alamos Malbec, 2015',0,0,0,1,0,1,0,0,0,0,0),(9,'Mendoza, Argentina- Fresh and powerful red blend with 70% Malbec, 15% Cabernet and 15% Merlot. Fruit and spices explode first on the nose and then on the palate leading to a juicy finish. Great accompaniment to grilled meats, pasta or Thai food.','Phebus Malbec MMC',0,0,0,1,0,1,0,0,0,0,0),(10,'Gnarly Head Old Vine Zinfandel is made using grapes sourced from gnarled 35-80 year old head trained vines. As some of the oldest vines in California, the fruit produced is exceptional, intense and full-flavored. This intrepid Old Vine Zinfandel has a gnarly core of rich, jammy blackberries and mocha flavors with layers of spice and vanilla balanced by complex French and American oak toast. Try pairing this bold wine with braised short ribs, chicken enchiladas or dark chocolate.','Gnarly Head Zinfandel',1,0,0,0,0,0,1,0,0,0,1),(11,'Dry Creek Valley, Sonoma, CA- Aromas of blackberry and blueberry jam, graham cracker crust and hints of espresso and spice are followed by rich, layered flavors of black cherry and mocha.','The Fugitive Red Dry Creek Val',1,0,0,0,0,0,1,0,0,0,0),(12,'Wine Spectator-Napa Valley, CA -  Plump and jammy, with a solid core of structure. Aromas of huckleberry and spicy mocha combine with supple flavors orf raspberry and cherry plus cinnamon and pepper. Zinfandel, Cabernet Sauvignon, Petite Sirah and Charbono.','The Prisoner Red Blend, 2014',1,0,0,0,0,1,0,0,0,0,0),(13,'Lodi, CA- A robust wine packed with fat, ripe fruit (cherries, cassis, and blackberries) yet enough acidity to give it lift. Smoky, cola flavors that do not overpower. Finished with ripe tannins. A terrific wine from an underrated region. Pair with BBQ beef or stir fry.','Oak Ridge Zinfandel Lodi AV',1,1,0,0,0,1,0,0,0,0,0),(14,'Wine Spectator-Tuscany, Italy -  Starts out with ample cherry and plum flavors before the leather and tobacco elements and chewy tannins emerge. A traditional style that balances fruit and savory notes.','Leone D\'Oro Vino Nobile di Mon',0,0,0,1,0,0,1,0,0,0,1),(15,'James Suckling-Tuscany, Italy -  Lots of pretty and subtle  sweet fruit character with roses, cedar and orange peel undertones. Medium to full body, bright acidity and a clean finish. Drink now.','Tenuta di Renieri Chianti Clas',1,1,0,0,0,0,1,0,0,0,0),(16,'Wine Spectator-Tuscany, Italy -  Rich and round, boasting black cherry, blackcurrant and floral aromas and flavors. Tightens up but the fruit persists, balancing the dusty tannins and spicy, earthy accents.','Tesoro della Regina Chianti Cl',1,0,1,0,0,0,1,0,0,0,0),(17,'Sonoma County, CA- Fifth-generation Belle Glos Wines winemaker Joseph Wagner has crafted another stunning Pinot Noir. Aromas of cranberry, red apple, toasty cinnamon and vanilla hint at the flavors to come. On the palate bright fruit and light tannins round out the wine nicely.','TULI Pinot Noir Sonoma County',1,0,0,0,0,1,0,0,0,0,0),(18,'California- This beautiful Pinot Noir carries aromas of tobacco, dark red fruits and fresh berries. The rich cherry flavor is complemented by notes of cedar, raspberry and strawberry. Enjoy with turkey, salmon or beef dishes.','Meiomi Pinot Noir',0,0,0,0,0,1,0,0,0,1,0),(19,'Vin de Pays, France- Oak aging gives this elegant Pinot Noir rich undertones of vanilla and spice, accenting classic notes of cherry and cassis. The  big brother  of our most popular Pinot Noir, this reserve bottling shows an amazing richness at an incredible value.','D\'Autrefois Reserve Pinot Noir',0,1,0,0,0,0,1,0,0,1,0),(20,'Intense fruit aromas and flavors of rhubarb and black cherry  that are complemented by hints of mocha and vanilla.  The plush, velvety mouthfeel and smooth finish round  out this intriguing, full-bodied red blend.','Apothic Red',0,0,0,1,0,1,0,0,0,0,0),(21,'A rich, elegant red wine with aromas of chocolate,  deep dark blackberries and luscious red fruits that  follow through to the palate. Finishes with a hint  of coconut and creamy mocha that shows  unmistakable intensity and length.','Cupcake Red Velvet',0,0,0,0,0,1,0,1,0,1,0),(22,'Wine Spectator-South Eastern Australia, Australia-  Light and snappy, with pretty cherry and herb flavors, followed by a silky finish.  Great served with BBQ, spicy Asian dishes, or as an everyday red.',' Mallee Point Shiraz',0,0,0,0,0,1,0,0,0,1,0),(23,'Australia- The Boxer Shiraz exhibits a black/blue/purple color, an incredible density of fruit along with that tell-tale purity, blackberries, white flowers, melted chocolate, sweet licorice, and subtle wood. Full-bodied, beautifully textured and layered with an awesome finish.',' Molly Dooker Shiraz The Boxer',0,1,0,0,0,1,0,0,0,1,0),(24,'Barossa, Australia- Another winner from the Thorne-Clarke family! Ripe, jammy black fruit flavors with a dollop of strawberry cream on the soft, lush finish. The perfect party red. Excellent with Broiled Lamb Chops. Aged 12 months in oak.','Milton Park Shiraz',0,0,0,0,0,0,1,0,1,0,0),(25,'Wine Spectator-South Eastern Australia-  This vibrant red  shows juicy blackberry flavors and hints of spice, finishing with an open texture.  The palate is perfectly balanced, with soft tannins and fine French oak, complemented by ripe fruit flavors.','Yellow Tail Shiraz',0,0,0,0,0,0,1,0,0,1,0),(26,'Wine Spectator-South Eastern Australia, Australia-  Light and snappy, with pretty cherry and herb flavors, followed by a silky finish.  Great served with BBQ, spicy Asian dishes, or as an everyday red.','Mallee Point Shiraz',0,0,0,1,0,1,0,0,0,0,0),(27,'Australia- The Boxer Shiraz exhibits a black/blue/purple color, an incredible density of fruit along with that tell-tale purity, blackberries, white flowers, melted chocolate, sweet licorice, and subtle wood. Full-bodied, beautifully textured and layered with an awesome finish.','Molly Dooker Shiraz The Boxer',0,0,1,0,0,1,0,0,0,0,0),(28,'Barossa, Australia- Another winner from the Thorne-Clarke family! Ripe, jammy black fruit flavors with a dollop of strawberry cream on the soft, lush finish. The perfect party red. Excellent with Broiled Lamb Chops. Aged 12 months in oak.','Milton Park Shiraz',0,0,0,1,0,1,0,0,0,0,0),(29,'Wine Spectator-South Eastern Australia-  This vibrant red  shows juicy blackberry flavors and hints of spice, finishing with an open texture.  The palate is perfectly balanced, with soft tannins and fine French oak, complemented by ripe fruit flavors.','Yellow Tail Shiraz',0,1,0,1,0,1,0,0,0,0,0);
/*!40000 ALTER TABLE `winelist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `winereview`
--

DROP TABLE IF EXISTS `winereview`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `winereview` (
  `userId` int(11) DEFAULT NULL,
  `wineId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `winereview`
--

LOCK TABLES `winereview` WRITE;
/*!40000 ALTER TABLE `winereview` DISABLE KEYS */;
/*!40000 ALTER TABLE `winereview` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-27  4:27:32
