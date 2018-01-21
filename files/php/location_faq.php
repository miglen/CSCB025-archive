<?php 

  #global $db, $uri;
  #$result = $db -> select("SELECT * FROM `faq` WHERE 1;");
  
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');
  $templates->addData(['title' => 'Име на компанията'], 'layout');

  #  Render a template
  echo $templates->render('faq', ['name' => 'Вашето име']);  

 ?>
