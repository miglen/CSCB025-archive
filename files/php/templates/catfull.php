<div id="all">
<?php 
global $db;
 ?>
    <div id="content">
        <div class="container">

            <div class="col-md-12">


                <div class="box">
                    <h1>Начало</h1>
                </div>


                <div class="row products">

<?php
                  global $db;
                  $result = $db -> select("SELECT * FROM `products` WHERE 1;");
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


    <!-- *** FOOTER ***
