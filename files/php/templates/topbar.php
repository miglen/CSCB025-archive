
   <div id="top">
       <div class="container">
           <div class="col-md-6 offer" data-animate="fadeInDown">
               <a href="/page/5" class="btn btn-success btn-sm" data-animate-hover="shake">Оферта на деня</a>  <a href="#">Получете -35% при покупки над 100 лева!</a>
           </div>
           <div class="col-md-6" data-animate="fadeInDown">
               <ul class="menu">

                   <?php 
                   global $auth;
                   if($auth->isLogged()){
                    ?>
                    <li><a href="/profile">Профил</a></li>
                    <li><a href="/login?logout">Изход</a></li>
                    <?php }else{ ?>
                   <li><a href="#" data-toggle="modal" data-target="#login-modal">Вход за потребители</a></li>
                   <li><a href="/register">Регистрация</a></li>
                   <?php  } ?>
                   <li><a href="/contact">За контакти</a>
                   </li>
               </ul>
           </div>
       </div>
       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
           <div class="modal-dialog modal-sm">

               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       <h4 class="modal-title" id="Login">Вход за потребители</h4>
                   </div>
                   <div class="modal-body">
                       <form action="/login" method="post">
                           <div class="form-group">
                               <input type="text" name="username" class="form-control" id="email-modal" placeholder="е-мейл">
                           </div>
                           <div class="form-group">
                               <input type="password" name="password" class="form-control" id="password-modal" placeholder="парола">
                           </div>

                           <p class="text-center">
                               <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Вход</button>
                           </p>

                       </form>

                       <p class="text-center text-muted">Не сте регистрирани?</p>
                       <p class="text-center text-muted"><a href="/register"><strong>Регистрирайте се сега</strong></a>! Лесно е и ще отнеме секунди!</p>

                   </div>
               </div>
           </div>
       </div>

   </div>
