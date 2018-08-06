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

-- Дамп структуры для таблица packagist-web-freelancer.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `name_en` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы packagist-web-freelancer.menu: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `name`, `link`, `attachment`, `name_en`) VALUES
	(3, 'Услуги', '/services', 'main', 'stravita');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


-- Дамп структуры для таблица packagist-web-freelancer.menu-dropdown
CREATE TABLE IF NOT EXISTS `menu-dropdown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы packagist-web-freelancer.menu-dropdown: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `menu-dropdown` DISABLE KEYS */;
INSERT INTO `menu-dropdown` (`id`, `name`, `link`, `attachment`) VALUES
	(1, 'Страхование детей', '/page', 'stravita'),
	(7, 'Здоровье', '/health', 'belrosstrah');
/*!40000 ALTER TABLE `menu-dropdown` ENABLE KEYS */;


-- Дамп структуры для таблица packagist-web-freelancer.portfolio_full
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

-- Дамп данных таблицы packagist-web-freelancer.portfolio_full: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `portfolio_full` DISABLE KEYS */;
INSERT INTO `portfolio_full` (`id`, `name`, `img`, `img_site`, `type_project`, `description`, `technology`, `link`, `link_site`) VALUES
	(1, 'Спорт-Костюковка', 'sportkostukovka.jpg', 'sportkostukovka_site.jpg', 'Сайт-визитка', '<p>Сайт разработан на некоммерческой основе.</p>\r\n<p>Основные навигационные вкладки сайта показывают все виды спорта, которыми занимаются дети микрорайна Костюковка города Гомеля.</p>\r\n<p>Дополнительные вкладки рассказывают об истории комплекса, предоставляемые услуги, расписание и другая полезная информация для жителей микрорайона.</p>', '<li>HTML/CSS;</li>\r\n<li>JavaScript/JQuery/AJAX;</li>\r\n<li>PHP/MySQLi;</li>\r\n<li>Yii2 - php-фреймворк;</li>\r\n<li>CMS Wordpress - вкладка СПОРТ. СОБЫТИЯ ведет на поддомен news.sport-kostukovka.by</li>', '/?work=sportkostukovka', 'sport-kostukovka.by'),
	(2, 'БелСтеклоПром', 'belstekloprom.jpg', 'belstekloprom_site.jpg', 'Сайт-визитка', '<p>Сайт разработан на коммерческой основе. Заказчиком выступило Унитарное производственное предприятие "Белстеклопром" г. Гомеля.</p>\r\n<p>Интернет ресурс является своего рода сайтом-визиткой предприятия, который предоставляет своим потенциальным клиентам информацию о видах выпускаемой продукции и закупаемых материалах.</p>\r\n<p>Сайт мультиязычный: русский и английский.</p>', '<li>HTML/CSS;</li>\r\n<li>JavaScript/JQuery/AJAX;</li>\r\n<li>PHP/MySQLi;</li>\r\n<li>Yii2 - php-фреймворк;</li>', '/?work=belstekloprom', 'belstekloprom.com');
/*!40000 ALTER TABLE `portfolio_full` ENABLE KEYS */;


-- Дамп структуры для таблица packagist-web-freelancer.price
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `works` varchar(100) NOT NULL,
  `price` int(4) NOT NULL,
  `time` int(3) NOT NULL,
  `service` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы packagist-web-freelancer.price: ~9 rows (приблизительно)
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


-- Дамп структуры для таблица packagist-web-freelancer.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(30) NOT NULL,
  `link` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `technology` text NOT NULL,
  `what_we_do` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы packagist-web-freelancer.services: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`, `img`, `link`, `description`, `technology`, `what_we_do`) VALUES
	(1, 'Дизайн сайтов', 'service_id', '/site-design', '<p>Первое, что видят посетители, заходя к Вам на сайт – дизайн. И, если человека встречают по одежке, то сайт оценивают по дизайну.</p>\r\n<p>С его помощью можно привлечь посетителя, или положительно повлиять на решение потенциального покупателя. \r\nВедь многие доверяют именно первому впечатлению, которое оказывает на них дизайн сайта. Он должен быть не просто привлекательным с эстетической точки зрения, но и максимально отвечать концепции сайта и общему стилю компании.</p>', 'Дизайн – это лицо сайта, благодаря которому у поситителей ресурса формируется первое впечатление о самой компании. Таким образом. Грамотно продуманный и воплощенный в реальность дизайн сайта – это прекрасное средство, которое позволяет привлечь новых клиентов.', '<li>Разработка логотипа</li>\r\n<li>Дизайн сайта</li>\r\n<li>Корпоративный стиль</li>\r\n<li>Инфографика</li>'),
	(2, 'Верстка сайтов', 'service_dev', '/site-creation', '<p>Одним из основных направлений нашей студии является разработка сайта.</p>\r\n<p>Наша задача – создать сайт максимально удобным для пользователей и максимально выгодным для вашего бизнеса. Мы, в отличие от других студий, даем гарантию результата и возвращаем деньги, если его нет.</p>', 'Сдедующий этап после дизайна сайта - это верстка. Т.е. далее рисованный макет переносится в рабочее состояние из составных частей, на которые разбивается макет — это может быть текст, картинки, таблицы и другие элементы.', '<li>Интернет-магазин</li>\r\n<li>Корпоративный сайт</li>\r\n<li>Сайт-визитка</li>\r\n<li>Лендинг</li>\r\n<li>Системы автоматизации</li>'),
	(3, 'SEO-продвижение', 'service_analytics', '/site-analytics', '<p>Популярность интернет пространства, несомненно, влечет за собой конкурентную борьбу между сайтами за внимание пользователей.</p>\r\n<p>После разработки сайта одним из самых важных вопросов является веб-аналитика. Именно благодаря аналитике можно получить ответы на большинство вопросов, которые помогут увеличить конверсию и увеличить прибыль.</p>', 'Третий этап определяющий популярность интернет ресурса - это SEO-оптимизация.\r\n Т.е. комплекс мер по внутренней и внешней оптимизации для поднятия позиций сайта в результатах выдачи поисковых систем по определённым запросам пользователей.', '<li>Аналитика сайта</li>\r\n<li>Контекстная реклама</li>\r\n<li>Юзабилити</li>\r\n<li>Поддержка сайта</li>\r\n<li>Копирайтинг и рерайтинг</li>');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;


-- Дамп структуры для таблица packagist-web-freelancer.slide
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `alt` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы packagist-web-freelancer.slide: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` (`id`, `image`, `name`, `description`, `alt`, `class`) VALUES
	(1, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5', 'Example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', '', 'active'),
	(2, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5', 'Another example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', '', ''),
	(3, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5', 'One more for good measure.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', '', '');
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
