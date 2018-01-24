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
    <?php 
    global $db;
     ?>
        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="/">Начало</a>
                        </li>
                        <?=nav_location($this->e($category_id));?>
                    </ul>

                    <div class="box">
                        <h1><?=$this->e($title)?></h1>
                    </div>


                    <div class="row products">

    <?php
                      global $db;
                      $result = $db -> select("SELECT * FROM `products` WHERE category_id IN (
  SELECT category_id FROM categories 
    WHERE category_id = '".$this->e($category_id)."' OR parent = '".$this->e($category_id)."'
);");
                      foreach($result as $product){
    ?>
    <div class="col-md-3 col-sm-4">
        <div class="product">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <a href="/product/<?=$product['product_id'];?>">
                            <img src="/files/obaju/img/product<?=rand(1,3);?>.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="back">
                        <a href="/product/<?=$product['product_id'];?>">
                            <img src="/files/obaju/img/product<?=rand(1,3);?>_2.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
            <a href="/product/<?=$product['product_id'];?>" class="invisible">
                <img src="/files/obaju/img/product<?=rand(1,3);?>.jpg" alt="" class="img-responsive">
            </a>
            <div class="text">
                <h3><a href="/product/<?=$product['product_id'];?>"><?=$product['title'];?></a></h3>
                <p class="price"><?=$product['price'];?></p>
                <p class="buttons">
                    <a href="/product/<?=$product['product_id'];?>" class="btn btn-default">Виж повече</a>
                    <a href="/cart" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Добави в количката</a>
                </p>
            </div>
            <!-- /.text -->
        </div>
        <!-- /.product -->
    </div>
    <?php 
    }
     ?>
                    </div>
                    <!-- /.products -->


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
