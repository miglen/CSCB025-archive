<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="/" data-animate-hover="bounce">
                <img src="/files/img/logo.png" alt="Obaju logo" class="hidden-xs">
                <img src="/files/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Начална страница</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Покажи навигация</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Покажи търсене</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="basket.html">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 продукта в кошницата</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="/">Начало</a>
                </li>


                <?php
                global $db;
                $result = $db -> select("SELECT * FROM `categories` WHERE 1;");
                foreach($result as $top_menu){
                  if(!$top_menu['parent']){
?>
<li class="dropdown yamm-fw">
    <a href="/category/<?php echo $top_menu['category_id']; ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><?php echo $top_menu['title']; ?> <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <div class="yamm-content">
                <div class="row">
                    <div class="col-sm-1">
                        <ul>
                        <?php 
                        foreach($result as $sub_menu){
                          if($top_menu['category_id'] == $sub_menu['parent']){
                            echo '<li><a href="/category/'.$sub_menu['category_id'].'">'.$sub_menu['title'].'</a></li>';
                          }  
                        }
                         ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.yamm-content -->
        </li>
    </ul>
</li>
<?php
}}
#print_r($result);
?>
          
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 продукта в кошницата</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Покажи търсенето</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search" method="post" action="/search/">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Търсене в продуктите">
                    <span class="input-group-btn">

  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->
