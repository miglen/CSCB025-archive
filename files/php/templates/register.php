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
                            <li><a href="/">Начало</a>
                            </li>
                            <li>Регистрация</li>
                        </ul>
    
                    </div>
    
                    <div class="col-md-3">
                      <!-- *** PAGES MENU *** -->
                      <?php $this->insert('sidebar-pages') ?>
                      <!-- *** PAGES MENU END *** -->
                        <!-- *** PAGES MENU END *** -->
    
    
                        <div class="banner">
                            <a href="#">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>
    
                    <div class="col-md-9">
    
                        <div class="box" id="contact">
                            <h1>Регистрация</h1>
    <?php 
global $auth,$db;

if (isset($_POST['submit']) && isset($_POST['address']) && intval($_POST['address'])==202) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $auth->register($email, $password, $confirm_password);
  ?>
  Вие се регистрирахте успешно...
  <?php

}else{
  ?>
  <form method="post" action="/register">
    E-mail: <input type="text" name="email"><br><br>
    Парола: <input type="password" name="password"><br><br>
    Повтори парола: <input type="password" name="confirm_password"><br><br>
    Колко е две плюс двеста?: <input type="text" name="address"><br><br>
    <input type="submit" value="Ok" name="submit">
  </form>
  <?php
}

     ?>
                            <p class="lead">eohoo</p>
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
