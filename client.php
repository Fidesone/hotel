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
<title>Haz tu reserva</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
<link href="sass/client.css" rel="stylesheet" type="text/css">
<link href="sass/header.css" rel="stylesheet" type="text/css">
<link href="sass/footer.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class='container_user'>
    <div class='user'>
        
        <?php
        echo '<h1> Bienvenido: '.$_COOKIE[ "nombre"].' </h1>';
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
</div>
</body>
</HTML>