<?php
    error_reporting(E_ALL ^ E_WARNING); 
    require('functions.php');
    require('config.php');
    session_start();
    mainHeadTag();
?>

<body>
    <nav class="nav justify-content-center">
        <ul class="row main-row text-center">
        <div class="nav-item col-sm-4"><a href="?menu=main" class="nav-link text-dark">HOME</a></div>
        <div class="nav-item col-sm-4"><a href="?menu=about" class="nav-link text-dark">ABOUT</a></div>
        <div class="nav-item col-sm-4"><a href="?menu=product" class="nav-link text-dark">ORDER</a></div>
        </ul>
    </nav>

    <?php            
        if(!$_GET['menu']){
            
            include('content/main.php');	
        }
        if($_GET['menu']){
            
            include('content/'.$_GET['menu'].'.php');	
        }
    ?>




</body>
</html>