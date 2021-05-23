<!DOCTYPE html>
<?php

include_once 'connection.php';
// $conn=connect();
// echo "La conexión ha sido exitosa" . "<br>";
include 'header.php';
//include 'sign_up.php';
?>

<head>
<link href="sass/header.css" rel="stylesheet" type="text/css">
<link href="sass/sign_up.css" rel="stylesheet" type="text/css">
<link href="sass/body.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id='container_index'>
        <div class='panel'>
            <div class='left'>
            <a href='sign_up.php'>Registrate</a>
            <div class='img'><img src='img/register_icon.png'></img></div>
            </div>
            <div class='right'>
            <a href='login.php'>Login</a>
            <div class='img'><img src='img/login_icon.png'></img></div>
            </div>
        </div> 
    </div>    
</body>


</html>