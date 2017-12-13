<?php 

  # Create new Plates instance
  $templates = new League\Plates\Engine(TEMPLATE_PATH);

  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');

  #  Render a template
  echo $templates->render('profile', ['name' => '404 не е намерено ниииищо...']);

 ?>
