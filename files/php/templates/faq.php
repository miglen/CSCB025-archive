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
    
    
                        <div class="box" id="contact">
                            <h1>Често задавани въпроси</h1>
    
                            <p class="lead">Любопитни ли сте за нещо? Имате ли питане относно нашите продукти? Тук можете да намерите отговора.</p>
    
                            <hr>
    
                            <div class="panel-group" id="accordion">
    
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
    
    					    <a data-toggle="collapse" data-parent="#accordion" href="#faq1">
    
    						1. What to do if I have still not received the order?
    
    					    </a>
    
    					</h4>
                                    </div>
                                    <div id="faq1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                                Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->
    
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
    
    					    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
    
    						2. What are the postal rates?
    
    					    </a>
    
    					</h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                            craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->
    
    
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
    
    					    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
    
    						3. Do you send overseas?
    
    					    </a>
    
    					</h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                            craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->
    
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
