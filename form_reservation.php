<?
include_once 'connection.php';

session_start();

    if(!isset($_SESSION['roles'])){
        header('location:login.php');
    } else{
        if($_SESSION['roles']!=2){
        header('location:login.php');
        }
    }
?>

<DOCTYPE html>
<html>
<head>
<link href="sass/form_reservation.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Reservar una habitación</h1>
    <div class="container_rooms">
    <div class="room1">
        <img src="img/hab_individual.jpg"></img>
        <div>
        <h2> 1. Individual</h2>
        <form action="insert_rooms.php" method="post" class="container_form">
        <h2 class="container_newuser">Registrar una nueva habitación</h2>
        <input type="number" name='num_habitacion' placeholder='Número de habitación'> <br><br>
        <input type="number" name='num_camas' placeholder='Número de camas'> <br><br>
        <select name="op">
            <option value= "una"> Uno </option>
            <option value= "dos"> Dos </option>
        
        <input type="submit" name='registrar'>
    </form> 
        </div>
        
    </div> 
    <br></br>
    <div class="room2">
        <img src="img/hab_doble.jpg"></img>
        <h2> 2. Doble</h2>
    </div> 
    <br></br>
    <div class="room3">
        <img src="img/hab_suite.jpg"></img>
        <h2> 3. Suite</h2>
    </div> 

    </div>
</body>
</html>
