<?php 
  global $templates, $db, $auth;
  $search_query = $_REQUEST['q'];
  
  $result = $db -> select("
    (SELECT page_id as id, title, 'page' as type FROM pages WHERE text LIKE '%".$search_query."%' OR title LIKE '%".$search_query."%') 
    UNION
    (SELECT product_id as id, title, 'product' as type FROM products WHERE text LIKE '%".$search_query."%' OR title LIKE '%".$search_query."%');
  ");
  #print_r($result);
  #  Render a template
  $templates->addData(['search_result'=>$result], 'search');
  echo $templates->render('search', ['search_query' => $search_query,'title'=>'Търсене']);  

 ?>
