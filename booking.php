<?php
include_once 'connection.php';
 session_start();

 if(!isset($_SESSION['roles'])){
     header('location:login.php');
 } else{
     if($_SESSION['roles']!=1){
     header('location:login.php');
     }
 }

?>
<DOCTYPE html>
<html>
<head>
<link href="sass/users.css" rel="stylesheet" type="text/css">

</head>
<body>
</div>
    <form action="insert_user.php" method="post" class="container_form">
    <h2 class="container_newuser">Registrar una nueva Reserva</h2>
        <input type="text" name='nombre' placeholder='Nombre'> <br><br>
        <input type="text" name='id_cliente' placeholder='ID Cliente'> <br><br>
        <input type="text" name='fecha_ini' placeholder='Fecha Inicio'> <br><br>
        <input type="email" name='fecha_fin' placeholder='Fecha Fin'> <br><br>
        <input type="submit" name='registrar'>
    </form>
<div class="container_table">
    <h2>Reservas Totales</h2>
    <table class='user_table'>
    
        <tr>
                
            <th>Id Cliente</th>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <!-- <th>Operacion</th> -->
        </tr>
    
                
    <?php
        $query= $conn->prepare("SELECT * FROM reservas");
        $query->execute();
        while($row = $query->fetch()){
    ?>

        <tr>
            <td><?php echo $row['id_cliente'] ?></td>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['fecha_ini'] ?></td>
            <td><?php echo $row['fecha_fin'] ?></td>
            <!-- <td><a href="update.php?upd=<?php echo $row['id']; ?>">Editar</a></td>
            <td><a href="remove.php?upd=<?php echo $row['id']; ?>"class="item_link">Eliminar</a></td> -->
        </tr>

    <?php
        }
    ?>  
    </table>   
    </div>  
    <script src="js/confirmation.js"></script>    
    </body>
    </html>