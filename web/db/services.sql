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

-- Дамп структуры для таблица web-freelancer.services
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

-- Дамп данных таблицы web-freelancer.services: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`, `img`, `link`, `description`, `technology`, `what_we_do`) VALUES
	(1, 'Дизайн сайтов', 'service_id', 'index.php?page=site-design', '<p>Первое, что видят посетители, заходя к Вам на сайт – дизайн. И, если человека встречают по одежке, то сайт оценивают по дизайну.</p>\r\n<p>С его помощью можно привлечь посетителя, или положительно повлиять на решение потенциального покупателя. \r\nВедь многие доверяют именно первому впечатлению, которое оказывает на них дизайн сайта. Он должен быть не просто привлекательным с эстетической точки зрения, но и максимально отвечать концепции сайта и общему стилю компании.</p>', 'Дизайн – это лицо сайта, благодаря которому у поситителей ресурса формируется первое впечатление о самой компании. Таким образом. Грамотно продуманный и воплощенный в реальность дизайн сайта – это прекрасное средство, которое позволяет привлечь новых клиентов.', '<li>Разработка логотипа</li>\r\n<li>Дизайн сайта</li>\r\n<li>Корпоративный стиль</li>\r\n<li>Инфографика</li>'),
	(2, 'Верстка сайтов', 'service_dev', 'index.php?page=site-creation', '<p>Одним из основных направлений нашей студии является разработка сайта.</p>\r\n<p>Наша задача – создать сайт максимально удобным для пользователей и максимально выгодным для вашего бизнеса. Мы, в отличие от других студий, даем гарантию результата и возвращаем деньги, если его нет.</p>', 'Сдедующий этап после дизайна сайта - это верстка. Т.е. далее рисованный макет переносится в рабочее состояние из составных частей, на которые разбивается макет — это может быть текст, картинки, таблицы и другие элементы.', '<li>Интернет-магазин</li>\r\n<li>Корпоративный сайт</li>\r\n<li>Сайт-визитка</li>\r\n<li>Лендинг</li>\r\n<li>Системы автоматизации</li>'),
	(3, 'SEO-продвижение', 'service_analytics', 'index.php?page=site-analytics', '<p>Популярность интернет пространства, несомненно, влечет за собой конкурентную борьбу между сайтами за внимание пользователей.</p>\r\n<p>После разработки сайта одним из самых важных вопросов является веб-аналитика. Именно благодаря аналитике можно получить ответы на большинство вопросов, которые помогут увеличить конверсию и увеличить прибыль.</p>', 'Третий этап определяющий популярность интернет ресурса - это SEO-оптимизация.\r\n Т.е. комплекс мер по внутренней и внешней оптимизации для поднятия позиций сайта в результатах выдачи поисковых систем по определённым запросам пользователей.', '<li>Аналитика сайта</li>\r\n<li>Контекстная реклама</li>\r\n<li>Юзабилити</li>\r\n<li>Поддержка сайта</li>\r\n<li>Копирайтинг и рерайтинг</li>');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;