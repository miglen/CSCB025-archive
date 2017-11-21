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
        
        <?=$this->section('content')?>
        
        </div>
        <!-- /#content -->
    <!-- *** MAIN CONTENT END *** -->
    
    <?php $this->insert('footer') ?>

</body>
</html>
