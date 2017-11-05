<?php 
#
# Index
#

# Конфигурационен файл
require_once('./config.php');

# Create new Plates instance
$templates = new League\Plates\Engine('./files/php/templates');

# Preassign data to the layout
$templates->addData(['company' => 'Име на компанията'], 'layout');

#  Render a template
echo $templates->render('profile', ['name' => 'Вашето име']);
?>
