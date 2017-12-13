<?php 
#
# Index
#

# Конфигурационен файл
define('PWD', dirname(__FILE__));
define('CLASS_PATH', PWD.'/files/php' );
require_once(CLASS_PATH.'/config.php');
require_once(CLASS_PATH.'/functions.php');
$uri = get_uri_paths();
display_the_page();

?>
