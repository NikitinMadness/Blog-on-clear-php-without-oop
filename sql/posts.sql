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

-- Дамп структуры для таблица blogtest.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` varchar(9999) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `createdate` varchar(50) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='posts table';

-- Дамп данных таблицы blogtest.posts: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`id`, `title`, `content`, `author`, `createdate`, `likes`, `comments`) VALUES
	(6, 'test user post', '214fsdfijafg ouhpfmewlkf sdfsofji qf efewfwafsadfdsfsadgsagkhdsf\r\nfdkgaksglkahgfkjaflkshakdfsakfnsdlkfsaklgs\r\ngdgnsajgsiafbonaefpnfieogfas', 'Admintest', 'Wednesday 12th 2020f February 2020 03:0:33 PM', NULL, NULL),
	(7, 'Funchik', 'Hello, everybody. my name Funchik and this is my blog', 'funchik', 'Wednesday 12th 2020f February 2020 06:0:13 PM', NULL, NULL),
	(17, '1231313211231кцф афа', '123213123122фафафпеафафа\r\nLorem ipsum dolor sit amet, est at dico essent, eius paulo dolor his no. Dico virtute accumsan cum cu, nibh saperet ornatus ei vel. No eum mutat appetere consulatu, ne maiorum corpora sea. Vis in paulo virtute quaeque, accusata disputationi ne nec, ei dicam aliquip inciderint nam.\r\n\r\nQuod tempor appellantur ea quo, suscipit partiendo ius an. Sed id postulant adversarium, regione feugiat convenire ex his, has ut purto feugiat. Option suscipiantur eum ea, cu vidit errem conceptam vel. Affert vituperata in quo, ea usu autem dolorum dissentiet, te duo fuisset suscipiantur. Paulo integre sea in, ut duo complectitur mediocritatem.\r\n\r\nCu sed eros necessitatibus. Ne vix nostro mediocritatem, laudem ocurreret persequeris nam ei. Te eum iudico incorrupte vituperatoribus. Id eos agam assum consul, ut alia dicunt euripidis his, nam aliquam cotidieque an. At quo dolorem imperdiet, eum decore quaeque apeirian te.\r\n\r\nEa tale pertinacia abhorreant sea. Tale delenit scribentur est ex. At diam mandamus his, et sensibus periculis his, nullam veritus in his. At appetere dissentiet mea, vis in fugit urbanitas.\r\n\r\nEa sea timeam inimicus dissentiet, novum iracundia sea ne, vim libris apeirian erroribus te. Nam diam esse at, sed nobis dissentiet id, ex qui dolores adipisci voluptatibus. Utamur oblique persecuti eam in. Fastidii postulant assueverit ut vix, ei mea electram partiendo repudiare. Partem legere suscipit et pro, ea quot adolescens scriptorem nec.', 'A_Nikitin', 'Thursday 13th 2020f February 2020 09:0:58 PM', NULL, NULL),
	(19, '1231313211231кцф афа', '123213123122фафафпеафафа', 'A_Nikitin', 'Friday 14th 2020f February 2020 01:0:17 PM', NULL, NULL),
	(20, '1231313211231кцф афаsdfasdfasdfsa', '12321312312afdsfsadf2фафафпеафафаавыаып', 'A_Nikitin', 'Friday 14th 2020f February 2020 01:0:25 PM', NULL, NULL),
	(22, 'привет мой пост 23', 'этот пост о бла бла бала бла и мне почти 23', 'A_Nikitin', 'Friday 14th 2020f February 2020 03:0:32 PM', NULL, NULL),
	(23, 'big post 1000 simbols test test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.мLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'A_Nikitin', 'Sunday 16th 2020f February 2020 12:0:44 PM', NULL, NULL),
	(24, 'fsfsf', 'sfsfsdfdsfs', 'testacc', 'Tuesday 18th 2020f February 2020 03:0:04 PM', NULL, NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
