<?php 
#
# Основен конфигурационен файл
#
ini_set( "display_errors", true );
error_reporting(E_ALL);

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

# Включване на Plates
$templates = new League\Plates\Engine(TEMPLATE_PATH);

# Включване на Бази от данни
require_once(CLASS_PATH.'/db.php');
$db = new Db();

# Включване на PHP Auth
$pdo = $db->pdo();
$phpauth_config = new PHPAuth\Config($pdo);
$auth   = new PHPAuth\Auth($pdo, $phpauth_config);

?>
