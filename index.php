<?php 
#
# Index
#

# Конфигурационен файл
define('PWD', dirname(__FILE__));
define('CLASS_PATH', PWD.'/files/php' );
require_once(CLASS_PATH.'/config.php');

# Get the URI paths
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_paths = explode("/",$uri);
# URI Category
$uric = (isset($uri_paths[1]) && strlen($uri_paths[1])>=1 ? $uri_paths[1]:false);
# URI Type
$urit = (isset($uri_paths[2]) && strlen($uri_paths[2])>=1 ? $uri_paths[2]:false);
# URI Item
$urii = (isset($uri_paths[3]) && strlen($uri_paths[3])>=1 ? $uri_paths[3]:false);


echo($uric." - ".$urit);
echo("\n\n<br><br>");

# Create new Plates instance
$templates = new League\Plates\Engine('./files/php/templates');

# Preassign data to the layout
$templates->addData(['company' => 'Име на компанията'], 'layout');

#  Render a template
echo $templates->render('profile', ['name' => 'Вашето име']);
?>
