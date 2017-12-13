<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->insert('header', ['title' => $this->e($title)]) ?>
</head>
<body>
    <!-- *** TOPBAR *** -->
    <?php $this->insert('topbar') ?>
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR *** -->
    <?php $this->insert('navbar') ?>
    <!-- *** NAVBAR END *** -->
    
    <!-- *** MAIN CONTENT *** -->
    
        <div id="all">
    
            <div id="content">
                <div class="container">
    
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Начало</a>
                            </li>
                            <li>Често задавани въпроси</li>
                        </ul>
    
                    </div>
    
                    <div class="col-md-3">
                        <!-- *** PAGES MENU ***
     _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">
    
                            <div class="panel-heading">
                                <h3 class="panel-title">Страници</h3>
                            </div>
    
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
<?php
  global $db;
  $result = $db -> select("SELECT * FROM `pages` WHERE 1;");
  foreach($result as $page){
?>
<li>
    <a href="/page/<?php echo $page['page_id']; ?>"><?php echo $page['title']; ?></a>
</li>
<?php 
}
?>
<li>
    <a href="/faq">ЧЗВ</a>
</li>
<li>
    <a href="/contact">За контакт</a>
</li>
    
                                </ul>
    
                            </div>
                        </div>
    
                        <!-- *** PAGES MENU END *** -->
    
    
                        <div class="banner">
                            <a href="#">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>
    
                    <div class="col-md-9">
<?php
$result = $db -> select("SELECT * FROM `pages` WHERE `page_id`='".$this->e($page_id)."';");
?>
    
                        <div class="box" id="contact">
                            <h1><?php echo $result[0]['title']; ?></h1>
    
                            <p class="lead"><?php echo $result[0]['text']; ?></p>
  
    
    
                        </div>
    
    
                    </div>
                    <!-- /.col-md-9 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->
    
    

    <!-- *** MAIN CONTENT END *** -->
    
    <?php $this->insert('footer') ?>

</body>
</html>
