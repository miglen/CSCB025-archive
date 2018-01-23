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
                        <?=nav_location($this->e($category_id));?>
                        <li><?=$this->e($title)?></li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->

                    <?php $this->insert('sidebar-categories') ?>

                    <div class="banner">
                        <a href="#">
                            <img src="/files/obaju/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="/files/obaju/img/detailbig1.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="ribbon sale">
                                <div class="theribbon">Разпродажба</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">Ново</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?=$this->e($title)?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Виж описание и размери</a>
                                </p>
                                <p class="price"><?=$this->e($price)?> лв.</p>

                                <p class="text-center buttons">
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Добави в кошницата</a> 
                                </p>


                            </div>

                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="/files/obaju/img/detailbig1.jpg" class="thumb">
                                        <img src="/files/obaju/img/detailsquare.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/files/obaju/img/detailbig2.jpg" class="thumb">
                                        <img src="/files/obaju/img/detailsquare2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/files/obaju/img/detailbig3.jpg" class="thumb">
                                        <img src="/files/obaju/img/detailsquare3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                            <h4>Material & care</h4>
                            <ul>
                                <li>Polyester</li>
                                <li>Machine wash</li>
                            </ul>
                            <h4>Size & Fit</h4>
                            <ul>
                                <li>Regular fit</li>
                                <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                            </ul>

                            <blockquote>
                                <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                </p>
                            </blockquote>

                            <hr>
                            <div class="social">
                                <h4>Сподели на приятели</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>

                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>Подобни продукти</h3>
                            </div>
                        </div>
<?php
  global $db;
  $result = $db -> select("SELECT * FROM `products` WHERE 1 ORDER BY RAND();");
  foreach($result as $product){
?>
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
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
                                    <h3><?=$product['title'];?></h3>
                                    <p class="price"><?=$product['price'];?></p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
<?php 
}
?>
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
