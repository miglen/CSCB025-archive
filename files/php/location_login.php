<?php 

  # Create new Plates instance
  $templates = new League\Plates\Engine(TEMPLATE_PATH);

  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');

  global $db, $uri;
  $result = $db -> select("SELECT * FROM `pages` WHERE `page_id`='".intval($uri[1])."' LIMIT 1;");
  
  if($result){
    #  Render a template
    echo $templates->render('page', ['page_id' => $result[0]['page_id']]);
  }else{
    echo $templates->render('profile', ['name' => '404 не е намерено ниииищо...']);
  }
  

 ?>
