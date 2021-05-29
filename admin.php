<?php
    
    session_start();

    if(!isset($_SESSION['roles'])){
        header('location:login.php');
    } else{
        if($_SESSION['roles']!=1){
        header('location:login.php');
        }
    }

?>
<!DOCTYPE HTML>
<head>
<title>Admninistracion</title>

<link href="sass/admin.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
</head>
<body>
<div class='container_user'>
    <div class='user'>
        
    <?php
        echo '<h1> Bienvenido: '.$_COOKIE[ "nombre"].' </h1>';
        ?>
    </div>

    <div class='container_client'>
        <h2> ¿Qué deseas hacer? </h2>
        <h3> Ir a... </h3>
        
        <div class='right'>
        <a  class='nav-admin' href='users.php'> Usuarios </a>
        </div>
        <div class='right'>
        <a  class='nav-admin' href='rooms.php'> Habitaciones</a>
        </div>
        <div class='right'>
        <a  class='nav-admin' href='booking.php'> Reservas </a>
        </div>
        <div class='right_1'>
        <a  class='nav-admin' href='session_closed.php'>Cerrar sesión </a>
        </div>
        
    </div>
</div>
<body>
</HTML>


    
    
    
    
    
