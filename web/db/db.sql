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

-- Дамп структуры для таблица insurance.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `name_en` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы insurance.menu: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `name`, `link`, `attachment`, `name_en`) VALUES
	(2, 'Белросстрах', '/link1', 'main', 'belrosstrah'),
	(3, 'Стравита', '/linl2', 'main', 'stravita');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


-- Дамп структуры для таблица insurance.menu-dropdown
CREATE TABLE IF NOT EXISTS `menu-dropdown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы insurance.menu-dropdown: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `menu-dropdown` DISABLE KEYS */;
INSERT INTO `menu-dropdown` (`id`, `name`, `link`, `attachment`) VALUES
	(1, 'Страхование детей', '/children', 'stravita'),
	(2, 'Страхование жизни', '/life_1', 'stravita'),
	(3, 'АВТОКАСКО', '/autokasko', 'belrosstrah'),
	(4, 'Имущество', '/property', 'belrosstrah'),
	(6, 'Туризм', '/tourism', 'belrosstrah'),
	(7, 'Здоровье', '/health', 'belrosstrah'),
	(8, 'Защищенный кредит', '/life_2', 'stravita'),
	(10, 'Пенсия', '/pension_2', 'stravita'),
	(11, 'Пенсия+', '/pension_1', 'stravita');
/*!40000 ALTER TABLE `menu-dropdown` ENABLE KEYS */;


-- Дамп структуры для таблица insurance.program
CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `program_en` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы insurance.program: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `program` DISABLE KEYS */;
INSERT INTO `program` (`id`, `program`, `description`, `program_en`) VALUES
	(1, 'КАСКО-Оптима', '<p><strong>Программа «КАСКО-Оптима»</strong> - как следует из ее названия — наиболее оптимальный вариант защиты вашего автомобиля.</p>\r\n        <p>Договором страхования предусмотрено возмещение ущерба, полученного в следующих случаях:</p>\r\n        <ul>\r\n          <li>дорожно-транспортное происшествие (авария);</li>\r\n          <li>пожар, взрыв;</li>\r\n          <li>стихийные явления природы, провал (оседание) грунта;</li>\r\n          <li>попадание или падение камней и предметов;</li>\r\n          <li>повреждение или уничтожение деталей остекления, освещения транспортного средства из-за попадания (падения) камней, посторонних предметов (например, из-под колес впереди идущей машины);</li>\r\n          <li>действия третьих лиц, повлекшие за собой повреждение или уничтожение транспортного средства, включая хищение отдельных частей и деталей транспортного средства (дополнительного оборудования);</li>\r\n          <li>хищение транспортного средства.</li>\r\n        </ul>\r\n\r\n        <p>По программе «КАСКО-Оптима» можно застраховаться как по <strong>варианту А</strong>, так и по <strong>варианту Б</strong>.</p>\r\n\r\n        <p>При страховании по Варианту А некоторые исключения из стандартного страхового покрытия теперь можно включить в полис за дополнительную плату. Например, вам может быть возмещен ущерб в результате:</p>\r\n        <ul>\r\n          <li>повреждения, разрыва или прокола шин;</li>\r\n          <li>повреждения или кражи декоративных колесных колпаков, брызговиков, щеток стеклоочистителя, номерных знаков, ключей замков зажигания, брелока от противоугонной системы;</li>\r\n          <li>повреждения автомобиля при его погрузке, выгрузке или транспортировке любым видом транспорта, например при эвакуации органами ГАИ:</li>\r\n          <li>повреждения автомобиля животными, насекомыми.</li>\r\n        </ul>', 'optima');
/*!40000 ALTER TABLE `program` ENABLE KEYS */;


-- Дамп структуры для таблица insurance.slide
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы insurance.slide: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` (`id`, `image`, `class`, `alt`) VALUES
	(1, '2.jpg', 'active', ''),
	(2, '4.jpg', '', '');
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
