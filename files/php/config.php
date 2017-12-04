<?php 
#
# Основен конфигурационен файл
#
# ini_set( "display_errors", true );
# error_reporting(E_ALL);

define('DB_HOST', 'localhost');
define('DB_USER', 'cscb025');
define('DB_PASS', 'cscb025');
define('DB_DB', 'cscb025');
define('TEMPLATE_PATH', PWD.'/files/templates' );
define('CSS_PATH', PWD.'/files/css' );
define('JS_PATH', PWD.'/files/js' );

function exception_handler($exception) {
  echo("Sorry, a problem occurred. Please try later.");
  error_log($exception->getMessage());
}

set_exception_handler('exception_handler');

# Включване на темплейти (Platesphp.com)
require_once(CLASS_PATH.'/plates/Engine.php');

?>
