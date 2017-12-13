<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
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
                <li class="active"><a href="index.html">Начало</a>
                </li>


                <?php
                global $db;
                $result = $db -> select("SELECT * FROM `categories` WHERE `parent` IS NULL;");
                foreach($result as $top_menu){
?>
<li class="dropdown yamm-fw">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><?php echo $top_menu['title']; ?> <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <div class="yamm-content">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>Дрехи</h5>
                        <ul>
                            <li><a href="category.html">Блузи</a>
                            </li>
                            <li><a href="category.html">Ризи</a>
                            </li>
                            <li><a href="category.html">Панталони</a>
                            </li>
                            <li><a href="category.html">Аксесоари</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Обувки</h5>
                        <ul>
                            <li><a href="category.html">Спортни</a>
                            </li>
                            <li><a href="category.html">Сандали</a>
                            </li>
                            <li><a href="category.html">Планински</a>
                            </li>
                            <li><a href="category.html">Официални</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Аксесоари</h5>
                        <ul>
                            <li><a href="category.html">Колани</a>
                            </li>
                            <li><a href="category.html">Гащи</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.yamm-content -->
        </li>
    </ul>
</li>
<?php
                }
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

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Търсене в продуктите">
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
