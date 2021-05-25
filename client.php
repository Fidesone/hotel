<?php

session_start();

    if(!isset($_SESSION['roles'])){
        header('location:login.php');
    } else{
        if($_SESSION['roles']!=2){
        header('location:login.php');
        }
    }

?>
<!DOCTYPE HTML>
<head>
<title>cliente</title>
<link href="sass/client.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class='container_user'>
    <div class='user'>
        <?php

        echo '<h1> '.$_COOKIE[ "nombre"].' </h1>';
        ?>
    </div>

    <div class='container_client'>
        <div class='left'>
        <a href='form_reservation.php'>Reservar una habitación </a>
        </div>
        <div class='right'>
        <a href='session_closed.php'>Cerrar sesión </a>
    </div>
</div>
</body>
</HTML>