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
    
<div class="container_table">
    <h2>Reservas Totales</h2>
    <table class='user_table'>
    
        <tr>
                
            <th>Id Reservas</th>
            <th>Nombre</th>
            <th>Habitación</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <!-- <th>Operacion</th> -->
        </tr>
    
                
    <?php
        $query= $conn->prepare("SELECT r.id_res, c.nombre_cliente, r.fecha_ini , r.fecha_fin, h.nombre FROM reservas r INNER JOIN clientes c on r.id_cliente = c.id_cliente INNER JOIN habitacion_reservas hr on r.id_res= hr.id_reserva INNER JOIN habitacion h on hr.id_habitacion = h.id_habitacion");
        $query->execute();
        while($row = $query->fetch()){
    ?>

        <tr>
            <td><?php echo $row['id_res'] ?></td>
            <td><?php echo $row['nombre_cliente'] ?></td>
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