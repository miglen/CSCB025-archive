<?php 
#
# Index
#
# Текуща директория на проекта
define('PWD', dirname(__FILE__));

# Включване на конфигурационен файл
require_once(PWD.'/files/php/config.php');

# Визуализиране на страницата
$uri = get_uri_paths();
display_the_page();

?>
