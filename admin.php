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
<title>admin</title>
</head>
<body>
<h1>Soy un admin</h1>
<a href='session_closed.php'>Cerrar sesión </a>
<body>
</HTML>
