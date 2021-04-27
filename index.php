<?php
include_once("views/layout/top.php");
?>
    
    <?php
    if(isset($_GET['action'])){
        include_once("views/{$_GET['action']}.php");
    }
    else{
        include_once("views/inicio.php");
    }

    ?>
    
<?php
include_once("views/layout/footer.php");
?>