<?php 
  global $templates, $db, $auth;
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');

  echo $templates->render('register', ['title' => 'Регистрация']);

 ?>
