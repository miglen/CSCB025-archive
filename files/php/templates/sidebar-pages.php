

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
<li><a href="/contact">За контакт</a></li>
<li><a href="/register">Регистрация</a></li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->
