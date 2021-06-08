<!DOCTYPE html>
<?php
include_once 'connection.php';
// echo "La conexión ha sido exitosa";
include 'header.php';
?>
<head>
<title>Hotel Monturiel</title>
<link rel="icon" href="img/h_logo.png" type="image/png" >
<link href="sass/footer.css" rel="stylesheet" type="text/css">
<link href="sass/header.css" rel="stylesheet" type="text/css">
<link href="sass/sign_up.css" rel="stylesheet" type="text/css">
<link href="sass/body.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">

</head>

<body>
    <div id='container_index'>
    
        <div class='panel'>
            <h1 class='title'>Bienvenido</h1>
            <h3 class='subtitle'>Empieza a disfrutar de nuestros servicios</h3>
            <div class='linea'></div>
            <div class='izde'>
            <div class='left'>
            <a href='sign_up.php' >Registrate</a>
            <div class='img'><img src='img/register_icon.png'></img></div>
            </div>
            <div class='right'>
            <a href='login.php'>Login</a>
            <div class='img'><img src='img/login_icon.png'></img></div>
            </div>
            </div>

            
        </div> 
    </div>  
    
</body>
<?php 
include 'footer.php';
?>

</html>