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

<nav>
<?php

echo '<h1> '.$_COOKIE["nombre"].' </h1>';
?>

    <a  class='nav-admin' href='users.php'> Usuarios </a>
    <a  class='nav-admin' href='rooms.php'> Habitaciones</a>
    <a  class='nav-admin' href='booking.php'> Reservas </a>
    <a  class='nav-admin' href='#'> algo mas </a>
    <a  class='nav-admin' href='session_closed.php'>Cerrar sesión </a>
<nav>

   

<body>
</HTML>
