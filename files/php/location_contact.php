<?php 
  global $templates, $db, $auth;
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'contact');
  $templates->addData(['title' => 'Име на компанията'], 'contact');

  #  Render a template
  echo $templates->render('contact', ['name' => 'Вашето име']);  

 ?>
