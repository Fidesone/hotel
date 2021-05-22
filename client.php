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
</head>
<body>
<?php

echo '<h1> '.$_COOKIE["nombre"].' </h1>';
?>
<a href='form_reservation.php'>Reservar una habitación </a>
<a href='session_closed.php'>Cerrar sesión </a>
<body>
</HTML>