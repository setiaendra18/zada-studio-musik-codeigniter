/*
Navicat MySQL Data Transfer

Source Server         : DATABASE-ENDRA
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : studiomusik_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-08-10 21:43:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlpn` char(12) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'FUSION ADMIN', 'admin', 'admin', 'admin@studio.com', 'yogyakarta', '081343316931');

-- ----------------------------
-- Table structure for `bayar`
-- ----------------------------
DROP TABLE IF EXISTS `bayar`;
CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(15) DEFAULT '',
  `tipe_bayar` enum('dp','lunas') DEFAULT NULL,
  `nominal_bayar` int(11) DEFAULT NULL,
  `status_bayar` enum('tolak','terima','peninjauan') DEFAULT 'peninjauan',
  `bukti_bayar` varchar(100) DEFAULT '',
  `keterangan` varchar(100) DEFAULT '',
  `id_admin` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bayar
-- ----------------------------
INSERT INTO `bayar` VALUES ('48', '0408200001', 'lunas', '15000', 'tolak', 'index.jpg', 'hiya', null);

-- ----------------------------
-- Table structure for `detail_bayar`
-- ----------------------------
DROP TABLE IF EXISTS `detail_bayar`;
CREATE TABLE `detail_bayar` (
  `id_detail_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `id_bayar` int(11) DEFAULT NULL,
  `tanggal_bayar` datetime DEFAULT NULL,
  `nominal_bayar` int(11) DEFAULT NULL,
  `status_bayar` enum('diterima','ditolak') DEFAULT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_bayar`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_bayar
-- ----------------------------

-- ----------------------------
-- Table structure for `jam`
-- ----------------------------
DROP TABLE IF EXISTS `jam`;
CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL AUTO_INCREMENT,
  `jam` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jam`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jam
-- ----------------------------
INSERT INTO `jam` VALUES ('1', '09:00 - 10:00');
INSERT INTO `jam` VALUES ('2', '10:00 - 11:00');
INSERT INTO `jam` VALUES ('3', '11:00 - 12:00');
INSERT INTO `jam` VALUES ('4', '12:00 - 13:00');
INSERT INTO `jam` VALUES ('5', '13:00 - 14:00');
INSERT INTO `jam` VALUES ('6', '15:00 - 16:00');
INSERT INTO `jam` VALUES ('7', '16:00 - 17:00');
INSERT INTO `jam` VALUES ('9', '17:00 - 18:00');
INSERT INTO `jam` VALUES ('11', '09:00 - 20:00');

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(125) DEFAULT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlpn` char(12) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', 'Endra Cakep', 'endra', 'endra', 'setiaendra118@gmail.com', 'Yogyakartaadf', '081343316931');
INSERT INTO `member` VALUES ('2', 'hamid hsb', 'hamid', '37fff357c237d67f2365eab6706bc898', 'hamid@gmail.com', 'bantul', '081268129971');
INSERT INTO `member` VALUES ('6', 'Endra Setiawan', '', '123123123', 'setiaendra18@gmail.com', 'Setiaeajafjsdfaidfaisdf', '018238123812');

-- ----------------------------
-- Table structure for `studio`
-- ----------------------------
DROP TABLE IF EXISTS `studio`;
CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL AUTO_INCREMENT,
  `nama_studio` varchar(125) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `tarif` int(125) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_studio`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studio
-- ----------------------------
INSERT INTO `studio` VALUES ('1', 'Studio A', 'his is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '15000', '1.jpg');
INSERT INTO `studio` VALUES ('2', 'Studio B', 'his is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '175001', '2.jpg');
INSERT INTO `studio` VALUES ('3', 'Studio C', 'his is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '22500', '3.jpg');

-- ----------------------------
-- Table structure for `transaksi_sewa`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_sewa`;
CREATE TABLE `transaksi_sewa` (
  `id_transaksi` varchar(15) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_member` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `status_sewa` enum('booking','selesai','batal') CHARACTER SET latin5 DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `FK_MEMBER` (`id_member`),
  KEY `FK_STUDIO` (`id_studio`),
  CONSTRAINT `FK_MEMBER` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_STUDIO` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_sewa
-- ----------------------------
INSERT INTO `transaksi_sewa` VALUES ('0408200001', '2020-08-04', '1', '1', '1', 'selesai');
INSERT INTO `transaksi_sewa` VALUES ('0408200002', '2020-08-04', '1', '11', '1', null);
