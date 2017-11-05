<?php 
#
# Index
#

# Конфигурационен файл
define('PWD', dirname(__FILE__));
define('CLASS_PATH', PWD.'/files/php' );
require_once(CLASS_PATH.'/config.php');

# Create new Plates instance
$templates = new League\Plates\Engine('./files/php/templates');

# Preassign data to the layout
$templates->addData(['company' => 'Име на компанията'], 'layout');

#  Render a template
echo $templates->render('profile', ['name' => 'Вашето име']);
?>
