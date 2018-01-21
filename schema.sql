
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES utf8;

--
-- Database: `cscb025`
--

-- --------------------------------------------------------

--
-- Table structure for table `attempts`
--

CREATE TABLE `attempts` (
  `id` int(11) NOT NULL,
  `ip` varchar(39) NOT NULL,
  `expiredate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `parent`) VALUES
(1, 'Мъже', NULL),
(2, 'Жени', NULL),
(3, 'Деца', NULL),
(4, 'Облекла', 1),
(5, 'Блузи', 4),
(6, 'Ризи', 4),
(7, 'Панталони', 4),
(8, 'Аксесоари', 4),
(9, 'Обувки', 1),
(10, 'Спортни', 9),
(11, 'Сандали', 9),
(12, 'Официални', 9);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `setting` varchar(100) NOT NULL,
  `value` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`setting`, `value`) VALUES
('attack_mitigation_time', '+30 minutes'),
('attempts_before_ban', '30'),
('attempts_before_verify', '5'),
('bcrypt_cost', '10'),
('cookie_domain', NULL),
('cookie_forget', '+30 minutes'),
('cookie_http', '0'),
('cookie_name', 'authID'),
('cookie_path', '/'),
('cookie_remember', '+1 month'),
('cookie_secure', '0'),
('emailmessage_suppress_activation', '0'),
('emailmessage_suppress_reset', '0'),
('mail_charset', 'UTF-8'),
('password_min_score', '3'),
('request_key_expiration', '+10 minutes'),
('site_activation_page', 'activate'),
('site_email', 'no-reply@phpauth.cuonic.com'),
('site_key', 'fghuior.)/!/jdUkd8s2!7HVHG7777ghg'),
('site_name', 'PHPAuth'),
('site_password_reset_page', 'reset'),
('site_timezone', 'Europe/Paris'),
('site_url', 'https://github.com/PHPAuth/PHPAuth'),
('smtp', '0'),
('smtp_auth', '1'),
('smtp_host', 'smtp.example.com'),
('smtp_password', 'password'),
('smtp_port', '25'),
('smtp_security', NULL),
('smtp_username', 'email@example.com'),
('table_attempts', 'attempts'),
('table_requests', 'requests'),
('table_sessions', 'sessions'),
('table_users', 'users'),
('verify_email_max_length', '100'),
('verify_email_min_length', '5'),
('verify_email_use_banlist', '1'),
('verify_password_min_length', '3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(6) UNSIGNED NOT NULL,
  `user_id` int(6) UNSIGNED NOT NULL,
  `products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `products`) VALUES
(1, 2, '1'),
(2, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `text`) VALUES
(1, 'За нас', '<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->\r\n<h1 style=\"color: #5e9ca0;\">You can edit <span style=\"color: #2b2301;\">this demo</span> text!</h1>\r\n<h2 style=\"color: #2e6c80;\">How to use the editor:</h2>\r\n<p>Paste your documents in the visual editor on the left or your HTML code in the source editor in the right. <br />Edit any of the two areas and see the other changing in real time.&nbsp;</p>\r\n<p>Click the <span style=\"background-color: #2b2301; color: #fff; display: inline-block; padding: 3px 10px; font-weight: bold; border-radius: 5px;\">Clean</span> button to clean your source code.</p>\r\n<h2 style=\"color: #2e6c80;\">Some useful features:</h2>\r\n<ol style=\"list-style: none; font-size: 14px; line-height: 32px; font-weight: bold;\">\r\n<li style=\"clear: both;\"><img style=\"float: left;\" src=\"https://html-online.com/img/01-interactive-connection.png\" alt=\"interactive connection\" width=\"45\" /> Interactive source editor</li>\r\n<li style=\"clear: both;\"><img style=\"float: left;\" src=\"https://html-online.com/img/02-html-clean.png\" alt=\"html cleaner\" width=\"45\" /> HTML Cleaning</li>\r\n<li style=\"clear: both;\"><img style=\"float: left;\" src=\"https://html-online.com/img/03-docs-to-html.png\" alt=\"Word to html\" width=\"45\" /> Word to HTML conversion</li>\r\n<li style=\"clear: both;\"><img style=\"float: left;\" src=\"https://html-online.com/img/04-replace.png\" alt=\"replace text\" width=\"45\" /> Find and Replace</li>\r\n<li style=\"clear: both;\"><img style=\"float: left;\" src=\"https://html-online.com/img/05-gibberish.png\" alt=\"gibberish\" width=\"45\" /> Lorem-Ipsum generator</li>\r\n<li style=\"clear: both;\"><img style=\"float: left;\" src=\"https://html-online.com/img/6-table-div-html.png\" alt=\"html table div\" width=\"45\" /> Table to DIV conversion</li>\r\n</ol>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n<h2 style=\"color: #2e6c80;\">Cleaning options:</h2>\r\n<table class=\"editorDemoTable\">\r\n<thead>\r\n<tr>\r\n<td>Name of the feature</td>\r\n<td>Example</td>\r\n<td>Default</td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Remove tag attributes</td>\r\n<td><img style=\"margin: 1px 15px;\" src=\"images/smiley.png\" alt=\"laughing\" width=\"40\" height=\"16\" /> (except <strong>img</strong>-<em>src</em> and <strong>a</strong>-<em>href</em>)</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Remove inline styles</td>\r\n<td><span style=\"color: green; font-size: 13px;\">You <strong style=\"color: blue; text-decoration: underline;\">should never</strong>&nbsp;use inline styles!</span></td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Remove classes and IDs</td>\r\n<td><span id=\"demoId\">Use classes to <strong class=\"demoClass\">style everything</strong>.</span></td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Remove all tags</td>\r\n<td>This leaves <strong style=\"color: blue;\">only the plain</strong> <em>text</em>. <img style=\"margin: 1px;\" src=\"images/smiley.png\" alt=\"laughing\" width=\"16\" height=\"16\" /></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Remove successive &amp;nbsp;s</td>\r\n<td>Never use non-breaking spaces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to set margins.</td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Remove empty tags</td>\r\n<td>Empty tags should go!</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Remove tags with one &amp;nbsp;</td>\r\n<td>This makes&nbsp;no sense!</td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Remove span tags</td>\r\n<td>Span tags with <span style=\"color: green; font-size: 13px;\">all styles</span></td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Remove images</td>\r\n<td>I am an image: <img src=\"images/smiley.png\" alt=\"laughing\" /></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Remove links</td>\r\n<td><a href=\"https://html-online.com\">This is</a> a link.</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Remove tables</td>\r\n<td>Takes everything out of the table.</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Replace table tags with structured divs</td>\r\n<td>This text is inside a table.</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Remove comments</td>\r\n<td>This is only visible in the source editor <!-- HELLO! --></td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Encode special characters</td>\r\n<td><span style=\"color: red; font-size: 17px;\">&hearts;</span> <strong style=\"font-size: 20px;\">☺ ★</strong> &gt;&lt;</td>\r\n<td><strong style=\"font-size: 17px; color: #2b2301;\">x</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Set new lines and text indents</td>\r\n<td>Organize the tags in a nice tree view.</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Save this link into your bookmarks and share it with your friends. It is all FREE! </strong><br /><strong>Enjoy!</strong></p>\r\n<p><strong>&nbsp;</strong></p>'),
(2, 'Поръчки', 'Тук ще откриете информация за поръчките ни.'),
(3, 'Условия за ползване', 'Условия за ползване'),
(4, 'За нас', 'Информация за нас и другите..');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text,
  `price` float UNSIGNED DEFAULT NULL,
  `category_id` int(6) UNSIGNED NOT NULL,
  `quantity` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `text`, `price`, `category_id`, `quantity`) VALUES
(1, 'Печка', 'Описание на печката е тук', 22.5, 1, 200),
(2, 'Хладилник', 'Описание на Хладилник е тук', 37.9, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `rkey` varchar(20) NOT NULL,
  `expire` datetime NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `hash` varchar(40) NOT NULL,
  `expiredate` datetime NOT NULL,
  `ip` varchar(39) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `cookie_crc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `uid`, `hash`, `expiredate`, `ip`, `agent`, `cookie_crc`) VALUES
(31, 1, '738fece4bf4a30e53a3dbaf9dfc007f7e21cc32e', '2018-02-21 15:02:47', '37.228.234.199', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'ea769c10f8a45cebfb88b0d70c10e2adb280b469');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `isactive`, `dt`) VALUES
(1, 'cscb025@miglen.com', '$2y$10$KLSB5qDcm4Ll78d/vyasSeb.HCLakbKbGFn4iS2wUpGvA98ghNGhK', 1, '2018-01-21 13:54:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempts`
--
ALTER TABLE `attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD UNIQUE KEY `setting` (`setting`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempts`
--
ALTER TABLE `attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
