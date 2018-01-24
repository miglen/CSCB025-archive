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
                            <li><?=$this->e($title)?></li>
                        </ul>
    
                    </div>
    
                    <div class="col-md-3">
                        <!-- *** PAGES MENU *** -->
                      <?php $this->insert('sidebar-pages') ?>
                        <!-- *** PAGES MENU END *** -->
    
    
                        <div class="banner">
                            <a href="#">
                                <img src="/img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>
    
                    <div class="col-md-9">
    
    
                        <div class="box" id="contact">
                            <h1><?=$this->e($title)?></h1>
                            
                            <form class="navbar-form" role="search" method="post" action="/search/">
                                <div class="input-group" style="width:100%;">
                                    <input type="text" name="q" class="form-control" placeholder="Търсене в продуктите" value="<?=$this->e($search_query)?>">
                                    <span class="input-group-btn">

                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                    </span>
                                </div>
                            </form>
                            
                            <p class="lead">
                              <ul>
<?php 

foreach($search_result as $r){
  if($r['type']=='page'){
    echo '<li><a href="/page/'.$r['id'].'">Страница: '.$r['title'].'</a></li>';
  }else{
    echo '<li><a href="/product/'.$r['id'].'">Продукт: '.$r['title'].'</a></li>';
  }
}
?>
</ul>      </p>
                            
                            <hr>
  
    
    
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
