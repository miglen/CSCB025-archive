<?php 
  global $templates, $db, $auth;
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');
  $templates->addData(['title' => 'Име на компанията'], 'layout');

  #  Render a template
  echo $templates->render('faq', ['name' => 'Вашето име']);  

 ?>
