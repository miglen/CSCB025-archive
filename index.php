<?php 
#
# Index
#
# Текуща директория на проекта
ini_set( "display_errors", true );
error_reporting(E_ALL);

define('PWD', dirname(__FILE__));
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'cscb025');
define('DB_NAME', 'cscb025');
define('TEMPLATE_PATH', PWD.'/files/php/templates' );
define('CLASS_PATH', PWD.'/files/php' );
define('CSS_PATH', PWD.'/files/css' );
define('JS_PATH', PWD.'/files/js' );

# Включване на Функции
require_once(CLASS_PATH.'/functions.php');

# Composer modules loading
require_once(PWD.'/vendor/autoload.php');

# Включване на Бази от данни
require_once(CLASS_PATH.'/db.php');

# Включване на Plates
$templates = new League\Plates\Engine(TEMPLATE_PATH);
$db = new Db();

# Включване на PHP Auth
$pdo = $db->pdo();
$phpauth_config = new PHPAuth\Config($pdo);
$auth   = new PHPAuth\Auth($pdo, $phpauth_config);

# Визуализиране на страницата
$uri = get_uri_paths();
display_the_page();

?>
