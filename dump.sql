-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: homeservice
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `query` (
  `uid` varchar(50) DEFAULT NULL,
  `qname` varchar(30) DEFAULT NULL,
  `qemail` varchar(50) DEFAULT NULL,
  `qsubject` varchar(50) DEFAULT NULL,
  `qmessage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `query`
--

LOCK TABLES `query` WRITE;
/*!40000 ALTER TABLE `query` DISABLE KEYS */;
INSERT INTO `query` VALUES ('5e86d279e0916','Anusha ','anushahm046@gmail.com ','qwerty','qwerty'),('5ee8af1f1eb1d','Keerthana','keerthanasnair1998@gmail.com  ','qwerty','qwerty'),('5e4371855b120','Sujan','sujanreganti@gmail.com ','qwerty','qwerty'),('5e870c67ad79b','Charan','charanrajls97@gmail.com','qwerty','qwerty'),('5ef2f8492f21c','sujanr','sujan@gmail.com','qwert','somethimg');
/*!40000 ALTER TABLE `query` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `kathe` varchar(500) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (0,'Plumbing','A person who fits and repairs the pipes,fittings and other appearatues of water supply,sanitation or heating system','plumber.jpeg'),(1,'Electrical','An electrician is a tradesman specializing in electrical wiring of buildings, transmission lines, stationary machines, and related equipment.','ele.jpeg'),(2,'Cleaning','A cleaner is a trade person who cleans homes for payment.He cleans Bathroom,furnitures,Kicthen.','clean.jpeg'),(3,'Massage','Massage is the manipulation of soft tissues in the body. Massage techniques are commonly applied with hands,devices etc.','massage.jpeg'),(4,'Saloon','This means a place or a shop where you can get Hair services, Beauty Treatments and all hair care facility is available','saloon.jpeg'),(5,'Painting','Painting is the application of pigments to a support surface that establishes an image, design or decoration. In art the term “painting” describes both the act and the result.','painitng.jpeg'),(6,'Smart Home','Home automation or domotics is building automation for a home, called a smart home or smart house. A home automation system will control lighting, climate, entertainment systems, and appliances.','smart.jpeg'),(7,'Handyman','A person able or employed to do occasional domestic repairs and minor renovations.','handy.jpeg');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subservice`
--

DROP TABLE IF EXISTS `subservice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subservice` (
  `sid` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `kathe` varchar(500) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `ssid` int(11) NOT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `temp` varchar(25) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ssid`),
  KEY `sid` (`sid`),
  CONSTRAINT `subservice_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `service` (`sid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subservice`
--

LOCK TABLES `subservice` WRITE;
/*!40000 ALTER TABLE `subservice` DISABLE KEYS */;
INSERT INTO `subservice` VALUES (0,'Roof Plumbing Work','Roof cleaning is the process of removing algae, mold, mildew, lichen and moss from roofs. Also cleaning oxidation on metal roofs. Cleaning can extend the duration of a roof ability to function','Rs 500',0,0,'4PLUROO','roof.jpeg'),(0,'Water Leakage Plumbing work','Leaks from pipes, plumbing fixtures and fittings are a significant source of water waste for many households. ... Some leaks are obvious, such as dripping faucets and leaking water heaters.','Rs 350',1,1,'4PLUWAT','pluwat.jpeg'),(0,'Pipe/Tap fitting','fitting or adapter is used in pipe systems to connect straight sections of pipe or tube, adapt to different sizes or shapes, and for other purposes such as regulating fluid flow. \n','Rs 450',2,1,'4PLUPIP','plupipe.jpeg'),(0,'Sink Replacement','Sink replacement is a straightforward project that you can probably tackle yourself. After turning off the water supply, remove the sink by taking apart the pipes, cutting the caulk, and undoing the sink\'s clamps.','Rs 400',3,1,'4PLUSIN','plusink.jpeg'),(0,'Repairs & Fixes','repair, patch, rebuild mean to put into good order something that is injured, damaged, or defective. mend implies making whole or sound something broken, torn, or injured. mended the torn dress repair applies to the fixing of more extensive damage or dilapidation.','Rs 350',4,1,'4PLUREP','plurepair.jpeg'),(0,'Installation Services','Installation Services means all those services ancillary to the supply of the Plant and Equipment for the Facilities, to be provided by the Contractor under the Contract; e.g., transportation and provision of marine or other similar insurance, inspection, expediting, Site preparation works.','Rs 450',5,1,'4PLUINS','pluinsta.jpeg'),(2,'Bathroom Cleaning','Dust the room, and spray bathroom cleaner on all of the surfaces, including the shower, sink, and exterior of the toilet. Clean each area with its own designated sponge or towel to prevent the spread of germs. Scrub the toilet bowl and flush before sweeping and mopping the floor.','Rs 350',6,1,'4CLEBAT','clebat.jpeg'),(2,'Sofa Cleaning','Sofa cleaning  is the process of cleaning the fabric that upholsters your furniture. But the process is more difficult than it might sound at first. For one thing, upholstery is often made up of relatively delicate natural fabrics like cotton.','Rs 400',7,1,'4CLESOF','clesofa.jpeg'),(2,'Home Deep Cleaning','Deep cleaning is different from regular or spring cleaning because it reaches the deep grime and dirt in your home. It covers areas which aren\'t traditionally covered by a regular or spring clean for example: behind kitchen appliances like the washing machine and oven, cutting through the grime that builds up.','Rs 600',8,1,'4CLEHOD','clehomedeep.jpeg'),(2,'Kitchen Cleaning','To clean a kitchen, start by cleaning all of the appliances, like the oven, microwave, and stovetop, by wiping them down with a soapy cloth or sponge. Next, wash any dishes in the sink and clean the sink with a sponge and some white vinegar. Finish up by sweeping and mopping the floors.','Rs 500',9,1,'4CLEKIT','clekicthen.jpeg'),(2,'Pest Control','They include insecticides used for insect control, herbicides used for weed control, fungicides used for fungi and mould control, and rodenticides used for rodent control. Household pests can include insects such as flies, cockroaches and mosquitoes, or rodents like mice or rats.','Rs 550',10,1,'4CLEPES','clepest.jpeg'),(2,'Home Sanitization','First, wash surfaces with soap and warm, clean water to remove dirt and debris. Next, sanitize surfaces with household bleach.','Rs 300',11,1,'4CLEHOS','clehomesani.jpeg'),(3,'Massage for Women','Start at her shoulders and then move to the muscles at the base of her neck before working down each arm. Gently pinch (between your thumb and fingers), squeeze, and knead her skin. If she winces, lighten up; she should be completely relaxed','Rs 500',12,1,'4MASWOM','maswom.jpeg'),(3,'Massage for Men','Begin with your hands parallel to each other and slide them down each side of the spine, massaging all the way down to the lower back and over the buttocks. Then slide your hands up all the way to the neck, over the shoulders, and down the arms to the fingertips. Repeat this motion at least six times.\n','Rs 500',13,1,'4MASMEN','masmen.jpeg'),(3,'Massage for Infants','Infant massage is a type of complementary and alternative treatment that uses massage therapy for babies. Evidence is insufficient to support its use in either full term or preterm babies to achieve physical growth.','Rs 450',14,1,'4MASINF','masinfant.jpeg'),(1,'Electrical Earthing','Electrical wiring is an electrical installation of cabling and associated devices such as switches, distribution boards, sockets, and light fittings in a structure. Wiring is subject to safety standards for design and installation. ','Rs 300',15,1,'4ELEELE','elewiring.jpeg'),(1,'Earthing','In an electrical installation, an earthing system or grounding system connects specific parts of that installation with the Earth\'s conductive surface for safety and functional purposes. The point of reference is the Earth\'s conductive surface.','Rs 350',16,1,'4ELEEAR','eleearth.jpeg'),(1,'Repairs & Fixes','Repair, patch, rebuild mean to put into good order something that is injured, damaged, or defective. mend implies making whole or sound something broken, torn, or injured. mended the torn dress repair applies to the fixing of more extensive damage or dilapidation.','Rs 350',17,1,'4ELEREP','plurepair.jpeg'),(1,'Smart Security Cam Installation','An average security system installation will cost about 1,500. The price for professional installation can vary drastically depending on system type and number of cameras. On top of equipment costs, each camera will range between 1000 to 2000 for professional installation.','Rs 300',18,1,'4ELESMA','elecam.jpeg'),(1,'Light Switch Installation','Turn off the power to the switch at the main circuit breaker or fuse panel. Unscrew and remove the switch plate; then use a voltage tester to make sure that the circuit is dead. Unscrew the switch from the electrical box and pull it out with the wires still attached.','Rs 450',19,1,'4ELELIG','elelightswitch.jpeg'),(1,'Installation Services','Installation Services means all those services ancillary to the supply of the Plant and Equipment for the Facilities, to be provided by the Contractor under the Contract; e.g., transportation and provision of marine or other similar insurance, inspection, expediting, Site preparation works ','Rs 450',20,1,'4ELEINS','pluinsta.jpeg'),(4,'Pedicure / Manicure','A manicure is a cosmetic beauty treatment for the fingernails and hands performed at home or in a nail saloon.A pedicure Beauty treatments for the feet and toenails. Pedicures include care not only for the toenails; dead skin cells are rubbed off the bottom of the feet using a rough stone. ','Rs 1000',21,1,'4SALPED','salped.jpeg'),(4,'Hair cut / Coloring',' Hair coloring, or hair dyeing, is the practice of changing the hair color. The main reasons for this are cosmetic: to cover gray or white hair, to change to a color regarded as more fashionable or desirable, or to restore the original hair color after it has been discolored by hairdressing processes or sun bleaching.','Rs 1500',22,1,'4SALHAI','salhair.jpeg'),(4,'Facial','A facial is a family of skin care treatments for the face, including steam, exfoliation, extraction, creams, lotions, facial masks, peels, and massage. They are normally performed in beauty salons, but are also a common spa treatment. They are used for general skin health as well as for specific skin conditions.','Rs 650',23,1,'4SALFAC','salfac.jpeg'),(4,'Waxing & Threading',' Waxing and threading both have the aim of removing the entire hair from the follicle, providing about four weeks\' worth well-shaped brows with no strays. Threading uses a string to remove hair, while waxing involves placing a resin on the skin and then taking it off to banish strays and shape the brows.','Rs 700',24,1,'4SALWAX','salwax.jpeg'),(4,'Makeup & Hairstyle','Cosmetics such as lipstick or powder applied to the face, used to enhance or alter the appearance. A particular way in which a person\'s hair is cut or arranged.','Rs 750',25,1,'4SALMAK','salmakeup.jpeg'),(4,'Skin Care Treatment','Skin care is a routine daily procedure in many settings, such as skin that is either too dry or too moist, and prevention of dermatitis and prevention of skin injuries. Skin care is a part of the treatment of wound healing, radiation therapy and some medications.','Rs 1200',26,1,'4SALSKI','salskin.jpeg'),(5,'Baseboard Painting','Painting interior trim such as window or door casing and crown molding nearly always guarantees that your room will look fresher and neater. The same idea holds true for baseboards. Painting your baseboards is one of the best remodeling projects you can do for a room and it only takes a day or two.','Rs 650',27,1,'4PAIBAS','paibase.jpeg'),(5,'Interior Painting ',' Interior paint is made to be scrubbed, resist staining, and allow cleaning. Exterior paints are made to combat against fading and mildew.','Rs 550',28,1,'4PAIINT','paiinterior.jpeg'),(5,'Bedroom Painting','For a relaxing atmosphere in your bedroom, look to cooler hues — shades of gray, blue, green and purple — to lend a hand. These colors have been shown to reduce stress and anxiety. They can also make a space seem more expansive, so they\'re a great choice if your bedroom is on the small side.','Rs 450',29,1,'4PAIBED','paibed.jpeg'),(5,'Door Painting',' Doors take a lot of use and abuse, so when painting them, choose a durable paint finish that has a semigloss or gloss sheen. Semigloss or gloss makes cleaning easier and holds up to frequent cleaning.','Rs 400',30,1,'4PAIDOO','paidoor.jpeg'),(5,'Crown molding Painting','First, cut in the ceiling and roll it; then paint crown molding; after the molding has dried completely, cut in each wall and roll it. If you\'re painting the crown molding a light color, apply two coats of paint to ensure good coverage.','Rs 350',31,1,'4PAICRO','paicrown.jpeg'),(5,'Accent Wall Painting','An accent wall is a wall painted a different color from the rest of the room and will naturally garner attention. Choosing the right wall will highlight an already prominent feature of the room. It\'s best to select a wall in an open area that has lots of light, either natural or artificial.','Rs 400',32,1,'4PAIACC','paiaccent.jpeg'),(6,'Smart Home hub setup','Set up the Connect Home hub. With the Samsung Connect Home hub, you you can transform your Wi-Fi network and experience corner-to-corner coverage. You can also connect the hub to SmartThings, where you\'ll be able to connect and control compatible devices like lights, security devices, and more.','Rs 550',33,1,'4SMHHUB','smahub.jpeg'),(6,'Smart Device Installation ',' Home automation is the next step in technology becoming more integrated into our everyday lives. While some products are being sold to the consumer as ‘plug and play\' items, the truth is that many need professional installation to ensure that they are configured correctly and work properly.','Rs 450',34,1,'4SMHDEV','smadev.jpeg'),(6,'Smart Lock Installation','Smart locks replace standard locks with an electronic device, often battery-powered, that can be accessed using a phone app, digital keypad or even fingerprint sensors. Using a smartphone, you can turn the lock via Bluetooth if you\'re nearby, or remotely over a secure network if you\'re not.','Rs 550',35,1,'4SMHLOC','smalock.jpeg'),(6,'Smart Thermostat Installation','Thermostat technology has come a long way – today\'s thermostats give users so many options, even the option of effortless comfort control through smart features. Smart thermostat installation in your home helps you create the ultimate smart home, with precision control over indoor comfort and energy consumption.\n','Rs 500',36,1,'4SMHTHE','smathermo.jpeg'),(6,'Video Doorbell Installation','Feed the two cable ends through the back of the doorbell and mount the doorbell to the wall. Connect the two black wires together, using a wire nut. Connect the two white wires to the terminal screws on the doorbell.','Rs 350',37,1,'4SMHVID','smavideo.jpeg'),(6,'WiFi Router Setup','Routers and wireless routers enable you to share your broadband internet connection with multiple devices. To do so, you will need to connect your broadband modem to the router. For best results, place your router near your modem. Connect the router and the modem with an Ethernet cable.','Rs 450',38,1,'4SMHWIF','smawifi.jpeg'),(7,'Air conditioner Installation/ Uninstallation','Air conditioning can be used in both domestic and commercial environments. ... Electric refrigerant-based AC units range from small units that can cool a small bedroom, which can be carried by a single adult, to massive units installed on the roof of office towers that can cool an entire building.','Rs 750',39,1,'4HADAIR','hanair.jpeg'),(7,'Carpentry Repairs  ',' Carpentry is a skilled trade and a craft in which the primary work performed is the cutting, shaping and installation of building materials during the construction of buildings, ships, timber bridges, concrete formwork, etc.','Rs 600',40,1,'4HADCAR','hancar.jpeg'),(7,'Furniture Assemy','Ready-to-assemble furniture (RTA), also known as knock-down furniture (KD), flat pack furniture, or kit furniture, is a form of furniture that requires customer assembly. ... The furniture is generally simple to assemble with basic tools such as screwdrivers, which are also sometimes included.','Rs 550',41,1,'4HADFUR','hanfur.jpeg'),(7,'Knobs Installation',' Insert the knob’s latch into the side of the door. Make sure the tapered side of the latch is facing the door frame. Screw the latch plate into the door..\n','Rs 550',42,1,'4HADKNO','hanknob.jpeg'),(7,'Locks Installation','It is important to make sure that your new lock installation is carried out by a professional because there are many parts of the installation process that could lead to a damaged door if it is not carried out properly.\n','Rs 600',43,1,'4HADLOC','hanlock.jpeg'),(7,'Moving',' A moving company, removalist or van line is a company that helps people and businesses move their goods from one place to another. It offers all-inclusive services for relocations like packing, loading, moving, unloading, unpacking, arranging of items to be shifted.','Rs 1000',44,1,'4HADMOV','hanmove.jpeg');
/*!40000 ALTER TABLE `subservice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thirdparty`
--

DROP TABLE IF EXISTS `thirdparty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thirdparty` (
  `uid` varchar(13) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `passwordhash` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `joined` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thirdparty`
--

LOCK TABLES `thirdparty` WRITE;
/*!40000 ALTER TABLE `thirdparty` DISABLE KEYS */;
INSERT INTO `thirdparty` VALUES ('1','third','party','party@t.com','2020-02-05','2020-02-10','Hassan','Plumbing',1234567890),('2','third2','party2','party2@t.com','2020-02-05','2020-02-10','Hassan','Electrical',1234567890),('3','third3','party3','party3@t.com','2020-02-05','2020-02-10','Hassan','Cleaning',1234567890),('4','third4','party4','party4@t.com','2020-02-05','2020-02-10','Hassan','Massage',1234567890),('5','third5','party5','party5@t.com','2020-02-05','2020-02-10','Hassan','Saloon',1234567890),('6','third6','party6','party6@t.com','2020-02-05','2020-02-10','Hassan','Painting',1234567890),('7','third7','party7','party7@t.com','2020-02-05','2020-02-10','Hassan','Smart Home',1234567890),('8','third8','party8','party8@t.com','2020-02-05','2020-02-10','Hassan','Handyman',1234567890);
/*!40000 ALTER TABLE `thirdparty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans`
--

DROP TABLE IF EXISTS `trans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans` (
  `uid` varchar(13) DEFAULT NULL,
  `bookedtime` datetime DEFAULT NULL,
  `ssid` int(11) DEFAULT NULL,
  `customerPaid` tinyint(1) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `acceptedtime` datetime DEFAULT NULL,
  `tid` varchar(13) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transid` varchar(25) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  `completedtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ssid` (`ssid`),
  KEY `tid` (`tid`),
  CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`ssid`) REFERENCES `subservice` (`ssid`) ON DELETE CASCADE,
  CONSTRAINT `trans_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `thirdparty` (`uid`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans`
--

LOCK TABLES `trans` WRITE;
/*!40000 ALTER TABLE `trans` DISABLE KEYS */;
INSERT INTO `trans` VALUES ('5e4371855b120','2020-02-12 00:00:00',0,1,1,'2020-06-08 04:06:31','1',18,'4PLUROO04',1,'2020-06-10 04:06:31'),('5e4371855b120','2020-02-19 00:00:00',0,1,1,'2020-06-10 01:06:31','1',31,'4PLUROO05',1,'2020-06-10 04:06:31'),('5e4371855b120','2020-05-11 00:00:00',15,1,1,'2020-06-10 01:06:31','2',35,'4ELEELE06',1,'2020-06-10 08:06:31'),('5e4371855b120','2020-05-11 00:00:00',15,1,1,'2020-06-10 01:06:31','2',36,'4ELEELE07',1,'2020-06-18 08:06:31'),('5e4371855b120','2020-05-11 04:05:20',6,1,0,NULL,NULL,37,'4CLEBAT08',0,NULL),('5e4371855b120','2020-05-30 07:05:16',0,1,1,NULL,'1',38,'4PLUROO09',1,'2020-06-20 04:06:31'),('5e4371855b120','2020-05-30 07:05:22',12,1,0,NULL,NULL,39,'4MASWOM10',0,NULL),('5e4371855b120','2020-06-03 03:06:30',0,1,1,'2020-06-20 04:06:35','1',40,'4PLUROO10',1,'2020-06-20 04:06:41'),('5e4371855b120','2020-06-04 09:06:54',33,1,0,NULL,NULL,59,'4SMHHUB12',0,NULL),('5dbab844df668','2020-06-09 11:06:56',12,0,0,NULL,NULL,60,'4MASWOM13',NULL,NULL),('5e4371855b120','2020-06-18 03:06:38',33,1,0,NULL,NULL,61,'4SMHHUB14',0,NULL),('5e4371855b120','2020-06-18 04:06:37',15,1,0,NULL,'2',62,'4ELEELE15',0,NULL),('5ee8af1f1eb1d','2020-06-18 04:06:02',0,0,1,'2020-06-21 08:06:38','1',63,'4PLUROO16',1,'2020-06-21 08:06:41'),('5e86d279e0916','2020-06-19 01:06:37',1,0,1,'2020-06-23 11:06:13','1',64,'4PLUWAT14',0,NULL),('5e85f855d6e71','2020-06-19 01:06:54',2,0,0,NULL,'1',65,'4PLUPIP15',0,NULL),('5ee8af1f1eb1d','2020-06-19 01:06:13',5,0,0,NULL,NULL,66,'4PLUINS16',0,NULL),('5e4371855b120','2020-06-19 01:06:32',0,1,1,'2020-06-21 09:06:37','1',67,'4PLUROO17',1,'2020-06-21 10:06:49'),('5e4371855b120','2020-06-22 01:06:57',21,1,0,NULL,NULL,69,'4SALPED19',0,NULL),('5e4371855b120','2020-06-23 11:06:43',15,0,0,NULL,NULL,70,'4ELEELE19',0,NULL),('5e4371855b120','2020-06-23 11:06:49',2,0,1,'2020-06-24 01:06:53','1',71,'4PLUPIP20',1,'2020-06-24 01:06:06'),('5ef2f8492f21c','2020-06-24 12:06:05',2,1,1,'2020-06-24 12:06:30','1',72,'4PLUPIP21',0,NULL);
/*!40000 ALTER TABLE `trans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` varchar(13) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `passwordhash` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `joined` date NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('1','root','toor','admin@admin.com','2019-01-01','2019-01-01','-1','-1','root'),('5e4371855b120','Sujan','sujan','sujanreganti@gmail.com','2020-02-12','1998-12-12','Ravindra nagars','9740310863','user'),('5e85e30537992','service','1234','sujanr12121998@gmail.com','2020-04-02','1970-01-01','sdsas','9740310863','user'),('5e85f855d6e71','Charan','1234','sujanreganti@gmail.com','2020-04-02','2020-05-04','sdsas','9740310863','user'),('5e85f8cdba951','Sujan','1234','sujanreganti@gmail.com','2020-04-02','1998-12-12','HAssan','7892708063','user'),('5e86d279e0916','Anusha','1234','anushahm046@gmail.com','2020-04-03','1997-06-04','sdsas','8660509203','user'),('5e870c67ad79b','Charan','1234','charanrajls97@gmail.com','2020-04-03','1998-03-01','HAssan','9964232616','user'),('5ee8af1f1eb1d','Keerthana','keeru','keerthanasnair1998@gmail.com','2020-06-16','1998-05-18','hassan','7019899217','user'),('5eef76500087a','s','s','s@gmail.com','2020-06-21','2020-01-06','hassan','6360323549','user'),('5ef2f32bb2c4c','admin','1234','Sujan@gamil.com','2020-06-24','1970-01-01','hassan','9740310863','user'),('5ef2f342a7855','admin','1234','Sujan@gamil.com','2020-06-24','1970-01-01','hassan','9740310863','user'),('5ef2f3d646287','admin','1234','Sujan@gamil.com','2020-06-24','1970-01-01','hassan','9740310863','user'),('5ef2f457d3033','admin','1234','Sujan@gamil.com','2020-06-24','1970-01-01','hassan','9740310863','user'),('5ef2f4ba68bb9','admin','1234','Sujan@gamil.com','2020-06-24','1970-01-01','hassan','9740310863','user'),('5ef2f529e2c3e','admin','1234','Sujan@gamil.com','2020-06-24','1970-01-01','hassan','9740310863','user'),('5ef2f8492f21c','SujanR','1234','Sujan@gamil.com','2020-06-24','2020-06-24','hassan','9740310860','user'),('5ef2ffd7da2eb','sujanr','1234','sujanreganti@gmail.com','2020-06-24','2020-06-03','HAssan','9740310863','user');
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

-- Dump completed on 2020-07-29 15:04:28
