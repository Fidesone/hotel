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
            <form action="insert_reservation.php" method="post" class="container_form">
                <h2 class="container_newuser">Registrar una nueva habitación</h2>
                <h3 class="container_newuser">Datos personales del cliente</h3>
                <p>Nombre del cliente </p>
                <input type="text" name='nombre_cliente'>  
                <p>Apellido del cliente</p>
                <input type="text" name='apellido_cliente'> 
                <p>Móvil del cliente</p>
                <input type="number" name='movil_cliente'> 
                <p>Número de habitacion</p>
                <select name='id_habitacion'> 
                    <option>101</option>
                    <option>102</option>
                    <option>103</option>
                </select>
                <p>Numero de camas</p>
        
                <select name="num_camas">
                    <option value= "una"> Uno </option>
                    <option value= "dos"> Dos </option>
                    <option value= "tres"> Tres </option>
                
                </select> 

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
