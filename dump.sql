-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `room_service_user_pack_benefit`
--

DROP TABLE IF EXISTS `room_service_user_pack_benefit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_service_user_pack_benefit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `benefit_id` int(10) unsigned NOT NULL,
  `user_pack_id` int(10) unsigned NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_service_user_pack_benefit`
--

LOCK TABLES `room_service_user_pack_benefit` WRITE;
/*!40000 ALTER TABLE `room_service_user_pack_benefit` DISABLE KEYS */;
INSERT INTO `room_service_user_pack_benefit` VALUES (1,1,1,'Thành viên linh hoạt',NULL,NULL),(2,1,2,'Thành viên tháng',NULL,NULL),(3,1,3,'Chỗ ngồi cố định',NULL,NULL),(4,1,4,'Văn phòng riêng',NULL,NULL),(5,2,1,'Từ 300.000 VNĐ',NULL,NULL),(6,2,2,'Từ 2.000.000 VNĐ',NULL,NULL),(7,2,3,'Từ 2.500.000 VNĐ',NULL,NULL),(8,2,4,'Chỉ từ 10.000.000 VNĐ',NULL,NULL),(9,3,1,'24/7 trong vòng 03 ngày. Đóng thêm 100,000đ cho các ngày tiếp theo',NULL,NULL),(10,3,2,'24/7 tất cả các ngày',NULL,NULL),(11,3,3,'24/7 tất cả các ngày',NULL,NULL),(12,3,4,'24/7 tất cả các ngày',NULL,NULL),(13,4,1,'01 giờ sử dụng phòng họp miễn phí.',NULL,NULL),(14,4,2,'04 giờ sử dụng phòng họp miễn phí. Giảm giá 40% cho các giờ sử dụng tiếp theo',NULL,NULL),(15,4,3,'06 giờ sử dụng phòng họp miễn phí. Giảm giá 40% cho các giờ sử dụng tiếp theo',NULL,NULL),(16,4,4,'20 giờ sử dụng phòng họp miễn phí. Giảm giá 40% cho các giờ sử dụng tiếp theo',NULL,NULL),(17,5,1,'Mạng wifi tốc độ cao',NULL,NULL),(18,5,2,'Mạng wifi tốc độ cao',NULL,NULL),(19,5,3,'Mạng wifi tốc độ cao',NULL,NULL),(20,5,4,'Mạng wifi tốc độ cao',NULL,NULL),(21,6,1,'Sử dụng miễn phí',NULL,NULL),(22,6,2,'Sử dụng miễn phí',NULL,NULL),(23,6,3,'Sử dụng miễn phí',NULL,NULL),(24,6,4,'Sử dụng miễn phí',NULL,NULL),(25,7,1,'Sử dụng miễn phí',NULL,NULL),(26,7,2,'Sử dụng miễn phí',NULL,NULL),(27,7,3,'Sử dụng miễn phí',NULL,NULL),(28,7,4,'Sử dụng miễn phí',NULL,NULL),(29,8,1,'Có',NULL,NULL),(30,8,2,'Có',NULL,NULL),(31,8,3,'Có',NULL,NULL),(32,8,4,'Có',NULL,NULL),(33,9,1,'Có',NULL,NULL),(34,9,2,'Có',NULL,NULL),(35,9,3,'Có',NULL,NULL),(36,9,4,'Có',NULL,NULL),(37,10,1,' ',NULL,NULL),(38,10,2,'Tham gia miễn phí',NULL,NULL),(39,10,3,'Tham gia miễn phí',NULL,NULL),(40,10,4,'Tham gia miễn phí',NULL,NULL),(41,11,1,' ',NULL,NULL),(42,11,2,'Có hỗ trợ',NULL,NULL),(43,11,3,'Có hỗ trợ',NULL,NULL),(44,11,4,'Có hỗ trợ',NULL,NULL),(45,12,1,' ',NULL,NULL),(46,12,2,'Có hỗ trợ',NULL,NULL),(47,12,3,'Có hỗ trợ',NULL,NULL),(48,12,4,'Có hỗ trợ',NULL,NULL),(49,13,1,' ',NULL,NULL),(50,13,2,'In 50 trang miễn phí',NULL,NULL),(51,13,3,'In 50 trang miễn phí',NULL,NULL),(52,13,4,'In 50 trang miễn phí',NULL,NULL),(53,14,1,' ',NULL,NULL),(54,14,2,'Miễn phí',NULL,NULL),(55,14,3,'Miễn phí',NULL,NULL),(56,14,4,'Miễn phí',NULL,NULL),(57,15,1,' ',NULL,NULL),(58,15,2,' ',NULL,NULL),(59,15,3,'Có',NULL,NULL),(60,15,4,'Có',NULL,NULL),(61,16,1,' ',NULL,NULL),(62,16,2,' ',NULL,NULL),(63,16,3,' ',NULL,NULL),(64,16,4,'Có',NULL,NULL),(65,17,1,' ',NULL,NULL),(66,17,2,' ',NULL,NULL),(67,17,3,' ',NULL,NULL),(68,17,4,'Có',NULL,NULL),(69,18,1,' ',NULL,NULL),(70,18,2,' ',NULL,NULL),(71,18,3,' ',NULL,NULL),(72,18,4,'Có',NULL,NULL);
/*!40000 ALTER TABLE `room_service_user_pack_benefit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_service_benefits`
--

DROP TABLE IF EXISTS `room_service_benefits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_service_benefits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_service_benefits`
--

LOCK TABLES `room_service_benefits` WRITE;
/*!40000 ALTER TABLE `room_service_benefits` DISABLE KEYS */;
INSERT INTO `room_service_benefits` VALUES (1,'GÓI THÀNH VIÊN',NULL,NULL),(2,'GIÁ GÓI THÀNH VIÊN',NULL,NULL),(3,'GIỜ LÀM VIỆC	',NULL,NULL),(4,'PHÒNG HỌP',NULL,NULL),(5,'MẠNG INTERNET',NULL,NULL),(6,'KHU VỰC BẾP HIỆN ĐẠI, TIỆN NGHI',NULL,NULL),(7,'TRÀ VÀ CAFÉ',NULL,NULL),(8,'KẾT NỐI VÀ THAM GIA CỘNG ĐỒNG UP',NULL,NULL),(9,'ƯU ĐÃI TỪ ĐỐI TÁC CỦA UP',NULL,NULL),(10,'SỰ KIỆN TẠI UP',NULL,NULL),(11,'DỊCH VỤ LỄ TÂN GỬI VÀ NHẬN BƯU PHẨM',NULL,NULL),(12,'TỦ ĐỰNG ĐỒ CÁ NHÂN',NULL,NULL),(13,'DỊCH VỤ IN ẤN',NULL,NULL),(14,'GỬI XE',NULL,NULL),(15,'CHỖ NGỒI CỐ ĐỊNH',NULL,NULL),(16,'MẠNG INTERNET RIÊNG',NULL,NULL),(17,'DỊCH VỤ ĐIỆN THOẠI CỐ ĐỊNH',NULL,NULL),(18,'DỊCH VỤ ĐIỆN THOẠI CỐ ĐỊNH',NULL,NULL);
/*!40000 ALTER TABLE `room_service_benefits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_service_user_packs`
--

DROP TABLE IF EXISTS `room_service_user_packs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_service_user_packs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail` text,
  `avatar_url` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_service_user_packs`
--

LOCK TABLES `room_service_user_packs` WRITE;
/*!40000 ALTER TABLE `room_service_user_packs` DISABLE KEYS */;
INSERT INTO `room_service_user_packs` VALUES (1,'THÀNH VIÊN LINH HOẠT',NULL,'2018-01-27 22:46:35','Bạn luôn di chuyển & không dành quá nhiều thời gian trong văn phòng? Hay một không gian làm việc yên tĩnh và sáng tạo cho những ngày cuối tuần? Bao gồm 3 ngày làm việc 24/7, gói 300,000 VNĐ cực kỳ linh hoạt và tiết kiệm chi phí cho bạn.','http://up-co.vn/wp-content/uploads/2016/07/khong-gian-lam-viec-1.jpg',1),(2,'CHỖ NGỒI CỐ ĐỊNH',NULL,'2018-02-01 22:38:49','Bạn hay nhóm của bạn cần chỗ ngồi làm việc sáng tạo, ổn định hơn quán cafe, đầy đủ tiện nghi và chi phí thấp hơn nhiều lần so với thuê văn phòng ở ngoài, gói Thành Viên Tháng sẽ đáp ứng toàn bộ các nhu cầu của bạn.','http://up-co.vn/wp-content/uploads/2016/06/cho-ngoi-co-dinh-up-cowoking-space.jpg',1),(3,'THÀNH VIÊN THÁNG',NULL,'2018-03-25 09:40:17','Bạn cần một chỗ cố định cho máy tính và các đồ dùng làm việc, một không gian riêng tư để tập trung làm việc, hãy sử dụng gói thành viên cố định tại UP. Làm việc không giới hạn tại chỗ ngồi làm việc riêng của bạn.','http://up-co.vn/wp-content/uploads/2016/06/cho-ngoi-co-dinh-up-cowoking-space.jpg',1),(4,'VĂN PHÒNG RIÊNG',NULL,'2018-02-25 15:26:25','Bạn và startup của bạn cần không gian riêng tư để tiện trao đổi trong công việc nhưng vẫn muốn kết nối với cộng đồng khởi nghiệp tại UP, đăng kí văn phòng riêng tại UP để thỏa mãn nhu cầu của bạn. Giá gốc: 15,000,000 VND/tháng\n\nGiá đặc biết: 10,000,000 VND/tháng khi thanh toán 1 năm trả trước.','http://up-co.vn/wp-content/uploads/2016/07/khong-gian-lam-viec-1.jpg',1);
/*!40000 ALTER TABLE `room_service_user_packs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-06 14:39:01
