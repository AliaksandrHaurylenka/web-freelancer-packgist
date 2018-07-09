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

-- Дамп структуры для таблица web-freelancer.portfolio_full
CREATE TABLE IF NOT EXISTS `portfolio_full` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `img_site` varchar(50) NOT NULL,
  `type_project` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `technology` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `link_site` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы web-freelancer.portfolio_full: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `portfolio_full` DISABLE KEYS */;
INSERT INTO `portfolio_full` (`id`, `name`, `img`, `img_site`, `type_project`, `description`, `technology`, `link`, `link_site`) VALUES
	(1, 'Спорт-Костюковка', 'sportkostukovka.jpg', 'sportkostukovka_site.jpg', 'Сайт-визитка', '<p>Сайт разработан на некоммерческой основе.</p>\r\n<p>Основные навигационные вкладки сайта показывают все виды спорта, которыми занимаются дети микрорайна Костюковка города Гомеля.</p>\r\n<p>Дополнительные вкладки рассказывают об истории комплекса, предоставляемые услуги, расписание и другая полезная информация для жителей микрорайона.</p>', '<li>HTML/CSS;</li>\r\n<li>JavaScript/JQuery/AJAX;</li>\r\n<li>PHP/MySQLi;</li>\r\n<li>Yii2 - php-фреймворк;</li>\r\n<li>CMS Wordpress - вкладка СПОРТ. СОБЫТИЯ ведет на поддомен news.sport-kostukovka.by</li>', 'index.php?page=one-work&work=sportkostukovka', 'sport-kostukovka.by'),
	(2, 'БелСтеклоПром', 'belstekloprom.jpg', 'belstekloprom_site.jpg', 'Сайт-визитка', '<p>Сайт разработан на коммерческой основе. Заказчиком выступило Унитарное производственное предприятие "Белстеклопром" г. Гомеля.</p>\r\n<p>Интернет ресурс является своего рода сайтом-визиткой предприятия, который предоставляет своим потенциальным клиентам информацию о видах выпускаемой продукции и закупаемых материалах.</p>\r\n<p>Сайт мультиязычный: русский и английский.</p>', '<li>HTML/CSS;</li>\r\n<li>JavaScript/JQuery/AJAX;</li>\r\n<li>PHP/MySQLi;</li>\r\n<li>Yii2 - php-фреймворк;</li>', 'index.php?page=one-work&work=belstekloprom', 'belstekloprom.com');
/*!40000 ALTER TABLE `portfolio_full` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
