<div id="all">
<?php 
global $db;
 ?>
    <div id="content">
        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>Ladies</li>
                </ul>

                <div class="box">
                    <h1>Ladies</h1>
                    <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                </div>

                <div class="box info-bar">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 products-showing">
                            Showing <strong>12</strong> of <strong>25</strong> products
                        </div>

                        <div class="col-sm-12 col-md-8  products-number-sort">
                            <div class="row">
                                <form class="form-inline">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-number">
                                            <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-sort-by">
                                            <strong>Sort by</strong>
                                            <select name="sort-by" class="form-control">
                                                <option>Price</option>
                                                <option>Name</option>
                                                <option>Sales first</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

                <div class="pages">

                    <p class="loadMore">
                        <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p>

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>


            </div>
            <!-- /.col-md-9 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


    <!-- *** FOOTER ***
