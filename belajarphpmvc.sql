/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.13-MariaDB : Database - belajarphpmvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`belajarphpmvc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `belajarphpmvc`;

/*Table structure for table `t_mahasiswa` */

DROP TABLE IF EXISTS `t_mahasiswa`;

CREATE TABLE `t_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `t_mahasiswa` */

insert  into `t_mahasiswa`(`id`,`nama`,`nim`,`email`,`jurusan`) values (1,'Wildan Kurniadi','10113211','dankurniadi10@gmail.com','Teknik Informatika'),(2,'Arif Hidayat','10113222','arif.hidayat@gmail.com','Teknik Informatika'),(3,'Anindya Khoirunnisa','10113333','anindyadesign@gmail.com','Desain Komunikasi Visual'),(6,'Yanti Yuliawati','10111111','sayangwildan@wildan.com','Ilmu Komunikasi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
