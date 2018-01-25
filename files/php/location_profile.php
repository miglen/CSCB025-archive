<?php 
  global $templates, $db, $auth;
  
  if(!$auth->isLogged()){
    header("Location: /");
    exit;
  }
  echo $templates->render('profile', ['title' => 'Потребителски профил']);

 ?>
