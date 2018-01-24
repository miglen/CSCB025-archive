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
                             <div class="row">
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="firstname">Име</label>
                                         <input type="text" name="firstname" class="form-control" id="firstname">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="lastname">Фамилия</label>
                                         <input type="text" name="lastname" class="form-control" id="lastname">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="email">Email</label>
                                         <input type="text" name="email" class="form-control" id="email">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="phone">Телефон</label>
                                         <input type="text" name="phone" class="form-control" id="phone">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="password">Парола</label>
                                         <input type="password" name="password" class="form-control" id="password">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="confirm_password">Потвърди парола</label>
                                         <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label for="subject">Колко прави две плюс двеста и осем?</label>
                                         <input type="text" name="address" class="form-control" id="subject">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                   <div class="form-group">
                                       <label for="a"></label>
                                       <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Регистрирай се!</button>
                                   </div>
                                </div>
                             </div>
                             <!-- /.row -->
                         </form>
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
