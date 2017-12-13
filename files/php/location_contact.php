<?php 

  # Create new Plates instance
  $templates = new League\Plates\Engine(TEMPLATE_PATH);

  #global $db, $uri;
  #$result = $db -> select("SELECT * FROM `faq` WHERE 1;");
  
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'contact');
  $templates->addData(['title' => 'Име на компанията'], 'contact');

  #  Render a template
  echo $templates->render('contact', ['name' => 'Вашето име']);  

 ?>
