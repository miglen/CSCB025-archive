
# Създаване на таблица с продукти
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(6) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` TEXT,
  `price` float(6) unsigned,
  `category_id` int(6) unsigned NOT NULL,
  `quantity` int(6) unsigned NOT NULL,
  PRIMARY KEY (`product_id`)
) DEFAULT CHARSET=utf8;

# Създаване на таблица с категории
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(6) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` int(6) unsigned,
  PRIMARY KEY (`category_id`)
) DEFAULT CHARSET=utf8;

# Създаване на таблица със страници
CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(6) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` TEXT,
  PRIMARY KEY (`page_id`)
) DEFAULT CHARSET=utf8;

# Създаване на таблица с потребители
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(6) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` BOOLEAN,
  PRIMARY KEY (`user_id`)
) DEFAULT CHARSET=utf8;

# Създаване на таблица с поръчки
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(6) unsigned NOT NULL,
  `user_id` int(6) unsigned NOT NULL,
  `products` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) DEFAULT CHARSET=utf8;

# Вмъкване на примерни продукти
INSERT INTO `products` (`product_id`, `title`, `text`, `price`, `category_id`, `quantity`) VALUES
  ('1', 'Печка', 'Описание на печката е тук', '22.5', '1', '200'),
  ('2', 'Хладилник', 'Описание на Хладилник е тук', '37.9', '2', '200');


# Вмъкване на примерни категории
INSERT INTO `categories` (`category_id`, `title`, `parent`) VALUES
  ('1', 'Печки', '0'),
  ('2', 'Хладилници', '0');

# Вмъкване на примерни страници
INSERT INTO `pages` (`page_id`, `title`, `text`) VALUES
  ('1', 'За нас', 'Тук можете да намерите кратка иформация за нас и услугите, които предлагаме.'),
  ('2', 'Поръчки', 'Тук ще откриете информация за поръчките ни.');

# Вмъкване на примерни потребители
INSERT INTO `users` (`user_id`, `username`, `password`, `is_admin`) VALUES
  ('1', 'administrator', 'CC27FCD6F386B837BA0ECDA9BEDE45A4EB0F38F03FB812B70BEA3F3B383133A4730C1DF4F9DB35703E91487A4B5492FEA325BBC7999F3A64F8A55A48A5512685', '1'),
  ('2', 'potrebitel', 'FD7BCA6BCE1BA5C6E86B51F90216616D43494FEF03A2800CE7855E7F118096E0A641D2A14A3BF33AA5FBB19C8FBB82E2E31673E5770637005AE04065D3584277', NULL);

# Вмъкване на примерни поръчки
INSERT INTO `orders` (`order_id`, `user_id`, `products`) VALUES
  ('1', '2', '1'),
  ('2', '2', '2');
