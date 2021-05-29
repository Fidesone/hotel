<?php
include_once 'connection.php';
include 'header.php';

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
<link href="sass/header.css" rel="stylesheet" type="text/css">
<link href="sass/form_reservation.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Reservar una habitación</h1>
    <h2>Elige alguna entre los diferentes tipos:</h2>

    <div class="container_rooms">
    <?php
        $query= $conn->prepare("SELECT * FROM habitacion");
        $query->execute();
        while($row = $query->fetch()){
    ?>
    <div class="room1">
    <div class='login_form'>
        <img src="<?php echo $row['imagen'] ?>"></img>
            <div>
                <div class='individual'>
                <h2><?php echo $row['nombre'] ?></h2>
                <h3><?php echo $row['descrip'] ?></h3>
                </div>
            
            <form action="insert_reservation.php" method="post" class="container_form">
                <input type="hidden" name="id_habitacion" value="<?php echo $row['id_habitacion']?>">
                <h2 class="container_newuser">Registrar una nueva habitación</h2>
                <h3 class="container_newuser">Datos personales:</h3>

                <p>Nombre del cliente </p>
                <input type="text" name='nombre_cliente'>  
                <p>Apellido del cliente</p>
                <input type="text" name='apellido_cliente'> 
                <p>Móvil del cliente</p>
                <input type="number" name='movil_cliente'> 
                <p>Fecha Inicio</p>
                <input type="date" name='fecha_ini' placeholder='Fecha Inicio'> 
                <p>Fecha Fin</p>
                <input type="date" name='fecha_fin' placeholder='Fecha Fin'> 
                <input type="submit" name='registrar'>
            </form> 
        
        </div>
        </div>
        
    </div> 
    <br></br>
        

    <?php
        }
    ?>
    
    

    </div>
</body>
</html>
