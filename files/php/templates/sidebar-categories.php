<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
        <h3 class="panel-title">Категории</h3>
    </div>
<?php 
global $db;

  $sql = 'SELECT
  c.*, COALESCE(COUNT(p.category_id),0) AS total_products
  FROM categories c
  LEFT JOIN products p ON p.category_id = c.category_id
  GROUP BY c.category_id;';

  $result = $db -> select($sql);

 ?>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
<?php 
foreach($result as $main_category){
  if(!$main_category['parent']){
?>
<li>
    <a href="/category/<?=$main_category['category_id']?>"><?=$main_category['title']?> <span class="badge pull-right"><?=$main_category['total_products']?></span></a>
    <ul>
      <?php
      foreach($result as $sub_category){
        if($main_category['category_id'] == $sub_category['parent']){
          echo '<li><a href="/category/'.$sub_category['category_id'].'">'.$sub_category['title'].' ('.$sub_category['total_products'].')</a></li>';
      }}     
           
           ?>
    </ul>
</li>
<?php
  }
}
 ?>
        </ul>
    </div>
</div>
