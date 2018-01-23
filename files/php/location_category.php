<?php 
  global $templates, $db, $auth;
  $result = $db -> select("SELECT * FROM `categories` WHERE `category_id`='".intval($uri[1])."' LIMIT 1;");
  
  if($result){
    #  Render a template
    echo $templates->render('category', ['category_id' => $result[0]['category_id'], 'title' => $result[0]['title']]);
  }else{
    echo $templates->render('profile', ['name' => '404 не е намерено ниииищо...']);
  }
  

 ?>
