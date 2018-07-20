-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.48 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица web-freelancer.price
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `works` varchar(100) NOT NULL,
  `price` int(4) NOT NULL,
  `time` int(3) NOT NULL,
  `service` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы web-freelancer.price: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` (`id`, `works`, `price`, `time`, `service`) VALUES
	(1, 'Дизайн сайта', 2000, 14, 'design'),
	(2, 'Адаптация под мобильные', 4000, 14, 'design'),
	(3, 'Дизайн обложек', 1500, 10, 'design'),
	(4, 'Дизайн визиток', 2000, 7, 'design'),
	(5, 'Личный блог', 1500, 5, 'verstka'),
	(6, 'Сайт визитка', 2000, 14, 'verstka'),
	(7, 'Корпоративный сайт', 5000, 20, 'verstka'),
	(8, 'Интернет-магазин', 7000, 30, 'verstka'),
	(9, 'Landing-page', 1500, 14, 'verstka');
/*!40000 ALTER TABLE `price` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
