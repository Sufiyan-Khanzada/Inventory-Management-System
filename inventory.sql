/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.24-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;

/*Table structure for table `expense` */

DROP TABLE IF EXISTS `expense`;

CREATE TABLE `expense` (
  `ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `Inv_number` varchar(255) DEFAULT NULL,
  `paid_to` varchar(255) DEFAULT NULL,
  `expense_date` varchar(255) DEFAULT NULL,
  `payement_mode` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image_bill` varchar(255) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `expense` */

insert  into `expense`(`ID`,`Inv_number`,`paid_to`,`expense_date`,`payement_mode`,`category`,`amount`,`description`,`image_bill`,`last_update`) values (8,'62403','jhgjg','2022-09-01','Bank Transfer','Utility Bills','3444','adsdasdsad\r\nasdasdsa\r\nasdasd\r\nsadas\r\ndasd\r\nasd\r\nsad','../expense-images/Capture.PNG','0000-00-00 00:00:00'),(9,'62403','jhgjg','2022-09-01','Bank Transfer','Utility Bills','3444','adsdasdsad\r\nasdasdsa\r\nasdasd\r\nsadas\r\ndasd\r\nasd\r\nsad','../expense-images/Capture.PNG','0000-00-00 00:00:00');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `Item_number` varchar(255) DEFAULT NULL,
  `Item_name` varchar(255) DEFAULT NULL,
  `Item_price` varchar(255) DEFAULT NULL,
  `Item_qty` varchar(255) DEFAULT NULL,
  `Item_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `products` */

insert  into `products`(`ID`,`Item_number`,`Item_name`,`Item_price`,`Item_qty`,`Item_status`) values (1,'62904','glass9','500','450','Inactive');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
