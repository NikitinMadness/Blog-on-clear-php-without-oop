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

-- Дамп структуры для таблица blogtest.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postAuthor` varchar(50) DEFAULT NULL,
  `titlePost` varchar(50) DEFAULT NULL,
  `commentBody` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='comments ';

-- Дамп данных таблицы blogtest.comments: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
REPLACE INTO `comments` (`ID`, `postAuthor`, `titlePost`, `commentBody`) VALUES
	(3, 'A_Nikitin', 'big post 1000 simbols test test', 'jfsiohsivsiai fsfjspfs\r\ngdmgposjgopigjsdg\r\nd\r\n\r\nfd'),
	(4, 'A_Nikitin', 'big post 1000 simbols test test', 'test comment 2\r\n\r\n\r\nthis comment about this post'),
	(5, 'A_Nikitin', 'big post 1000 simbols test test', 'this is big comment \r\nLorem ipsum dolor sit amet, '),
	(10, 'A_Nikitin', 'big post 1000 simbols test test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint '),
	(11, '', 'big post 1000 simbols test test', 'sfsagsgga'),
	(12, 'testacc', 'big post 1000 simbols test test', 'dsfsgagagggqgggeg32ttgeagsg\r\ngldsgsmdhsh\r\n\r\n\r\n\r\ngosgjeohj304y9qjf0ajvsoa0gea');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
