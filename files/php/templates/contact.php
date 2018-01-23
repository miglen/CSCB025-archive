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
                            <li>За контакти</li>
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
                       <h1>За контакт</h1>

                       <p class="lead">Любопитни ли сте за нещо? Имате ли някакъв проблем с нашите продукти?</p>

                       <hr>

                       <div class="row">
                           <div class="col-sm-4">
                               <h3><i class="fa fa-map-marker"></i> Адрес</h3>
                               <p>Дрешник ООД 
                                  <br>Илиенци 
                                  <br>гр. София 
                                  <br>будка 23 
                                  <br><b>България</b>
                               </p>
                           </div>
                           <!-- /.col-sm-4 -->
                           <div class="col-sm-4">
                               <h3><i class="fa fa-phone"></i> Обадете ни се</h3>
                               <p class="text-muted">Безплатни обаждания от цялата страна.</p>
                               <p><strong>+33 9 8155 22 7762</strong>
                               </p>
                           </div>
                           <!-- /.col-sm-4 -->
                           <div class="col-sm-4">
                               <h3><i class="fa fa-envelope"></i> Електронна поща</h3>
                               <p class="text-muted">Пишете ни по всяко време, ние може и да не ви отговорим.</p>
                               <ul>
                                   <li><strong><a href="mailto:">info@dreshnik.com</a></strong>
                                   </li>                               </ul>
                           </div>
                           <!-- /.col-sm-4 -->
                       </div>
                       <!-- /.row -->

                       <hr>

                       <div id="map">
                         <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
                     
                         <script>
                             function initialize() {
                                 var mapOptions = {
                                     zoom: 15,
                                     center: new google.maps.LatLng(42.7401668, 23.3173853),
                                     mapTypeId: google.maps.MapTypeId.ROAD,
                                     scrollwheel: false
                                 }
                                 var map = new google.maps.Map(document.getElementById('map'),
                                     mapOptions);
                     
                                 var myLatLng = new google.maps.LatLng(42.7401668, 23.3173853);
                                 var marker = new google.maps.Marker({
                                     position: myLatLng,
                                     map: map
                                 });
                             }
                     
                             google.maps.event.addDomListener(window, 'load', initialize);
                         </script>
                     

                       </div>

                       <hr>
                       <h2>Форма за контакт</h2>

                       <form>
                           <div class="row">
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label for="firstname">Име</label>
                                       <input type="text" class="form-control" id="firstname">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label for="lastname">Фамилия</label>
                                       <input type="text" class="form-control" id="lastname">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label for="email">Email</label>
                                       <input type="text" class="form-control" id="email">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label for="subject">Телефон</label>
                                       <input type="text" class="form-control" id="subject">
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <label for="message">Съобщение</label>
                                       <textarea id="message" class="form-control"></textarea>
                                   </div>
                               </div>

                               <div class="col-sm-12 text-center">
                                   <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Изпрати съобщението</button>

                               </div>
                           </div>
                           <!-- /.row -->
                       </form>


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
