<?php 
  global $templates, $db, $auth;
  
  if($auth->isLogged()){
    header("Location: /profile");
    exit;
  }
  
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');
  echo $templates->render('register', ['title' => 'Регистрация']);

 ?>
