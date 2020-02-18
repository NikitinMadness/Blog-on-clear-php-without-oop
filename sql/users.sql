-- --------------------------------------------------------
-- Хост:                         192.168.0.103
-- Версия сервера:               5.6.41 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица blogtest.users
CREATE TABLE IF NOT EXISTS `users` (
  `UserName` varchar(50) DEFAULT NULL,
  `UserEmail` varchar(50) DEFAULT NULL,
  `UserPassword` varchar(50) DEFAULT NULL,
  `UserPassword2` varchar(50) DEFAULT NULL,
  `UserAvatar` blob,
  `UserSurname` varchar(50) DEFAULT NULL,
  `UserLogin` varchar(50) DEFAULT NULL,
  `UserRole` varchar(50) DEFAULT NULL,
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Users Table';

-- Дамп данных таблицы blogtest.users: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`UserName`, `UserEmail`, `UserPassword`, `UserPassword2`, `UserAvatar`, `UserSurname`, `UserLogin`, `UserRole`, `UserID`) VALUES
	('Admin', 'Admin@Admin.com', 'admin', 'admin', NULL, NULL, 'Madnessnes', 'Admin', 1),
	('123123', 'nikitinmvideo@gmail.com', '8d363e7b73565807a469bb2a5c01f293', 'b6cb9e60471cc6459cda816cfc2320f6', NULL, NULL, NULL, NULL, 2),
	('Admin', 'nikitinmvideo@gmail.com', '7eac1657bd02a7c772e6825efae9c907', '7eac1657bd02a7c772e6825efae9c907', NULL, NULL, NULL, NULL, 3),
	('Anton', 'nikitinmvideo@gmail.com', 'faf8c510a7c8e189e8eda01772cfc021', 'faf8c510a7c8e189e8eda01772cfc021', NULL, NULL, NULL, NULL, 4),
	('A_Nikitin', 'NikitinAnton@example.com', '19c252f0876ac3d460b2b11e3c6209f1', '19c252f0876ac3d460b2b11e3c6209f1', NULL, NULL, NULL, 'Admin', 5),
	('testuser', 'test@test.com', 'faf8c510a7c8e189e8eda01772cfc021', 'faf8c510a7c8e189e8eda01772cfc021', NULL, NULL, NULL, NULL, 6),
	('testuser', 'test@test.com', 'faf8c510a7c8e189e8eda01772cfc021', 'faf8c510a7c8e189e8eda01772cfc021', NULL, NULL, NULL, NULL, 7),
	('Admintest', 'test@test.com', 'e43229514ed76bda869ad78918fe5d3f', '86435274afcf574873247fc2f33a0767', NULL, NULL, NULL, NULL, 8),
	('funchik', 'trushka@gmail.com', '25acb5fb2713314214ccfa2a59e5ee65', '25acb5fb2713314214ccfa2a59e5ee65', NULL, NULL, NULL, NULL, 9),
	('testacc', '123123@mail.com', 'faf8c510a7c8e189e8eda01772cfc021', 'faf8c510a7c8e189e8eda01772cfc021', NULL, NULL, NULL, NULL, 10);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
