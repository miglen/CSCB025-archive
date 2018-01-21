<?php 

  global $db, $uri;
  $search_query = $_REQUEST['q'];
  
  #$result = $db -> select("SELECT * FROM `products` WHERE `text` LIKE '%".$search_string."%';");
  $result = $db -> select("SELECT * FROM `pages` WHERE `text` LIKE '%".$search_query."%';");
  #print_r($result);
  #  Render a template
  echo $templates->render('search', ['search_query' => $search_query,'title'=>'Търсене','name' => $result[0]['title']]);  

 ?>
