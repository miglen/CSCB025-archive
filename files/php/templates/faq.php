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
                        <!-- *** PAGES MENU *** -->
                        <?php $this->insert('sidebar-pages') ?>
                        <!-- *** PAGES MENU END *** -->
    
    
                        <div class="banner">
                            <a href="#">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>
    
                    <div class="col-md-9">
    
    
                        <div class="box" id="contact">
                            <h1>Често задавани въпроси</h1>
    
                            <p class="lead">Любопитни ли сте за нещо? Имате ли питане относно нашите продукти? Тук можете да намерите отговора.</p>
    
                            <hr>
                            <div class="panel-group" id="accordion">
    
<?php 
global $db;
$result = $db -> select("SELECT * FROM faq WHERE 1;");
foreach($result as $faq){
  
 ?>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
    					    <a data-toggle="collapse" data-parent="#accordion" href="#faq<?=$faq['faq_id']?>">
    						<?=$faq['title']?>
    					    </a>
    
    					</h4>
                                    </div>
                                    <div id="faq<?=$faq['faq_id']?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?=$faq['text']?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- /.panel -->
    <?php 
    
  } ?>
    
                            </div>
                            <!-- /.panel-group -->
    
    
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
