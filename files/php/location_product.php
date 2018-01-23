<?php 
  global $templates, $db, $auth;
  $result = $db -> select("SELECT * FROM `products` WHERE `product_id`='".intval($uri[1])."' LIMIT 1;");
  
  if($result){
    #  Render a template
    echo $templates->render('product', ['product_id' => $result[0]['product_id'],'price' => $result[0]['price'], 'title' => $result[0]['title']]);
  }else{
    echo $templates->render('profile', ['name' => '404 не е намерено ниииищо...']);
  }
  

 ?>
