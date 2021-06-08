<?php
    include_once 'connection.php';
    session_start();

    if(!isset($_SESSION['roles'])){
        
        header('location:login.php');
        
    } else{
        if($_SESSION['roles']!=1){
        header('location:login.php');

        
        // Avisar de que no se puede acceder a esta página (no funciona)
        //  echo 'script type="text/javascript">'
        //  alert("No puedes navegar a esa página");
        //  '</script>';
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
    <form action="insert_rooms.php" method="post" class="container_form">
    <h2 class="container_newuser">Registrar una nueva habitación</h2>
        <input type="number" name='id_habitacion' placeholder='Número de habitación'> <br><br>
        <input type="number" name='num_camas' placeholder='Número de camas'> <br><br>
        <input type="number" name='precio' placeholder='Precio'> <br><br>
        <input type="text" name='nombre' placeholder='id_tipo'> <br><br>
        <input type="submit" name='registrar'>
    </form> 

    <div class="container_table">
    <h2>Habitaciones totales</h2>
    <table class='user_table'>
    
        <tr>
                
            <th>Número de Habitación</th>
            <th>Número de camas</th>
            <th>Precio</th>
            <th>Tipo</th>
            <!-- <th>Operacion</th> -->
        </tr>
    
                
    <?php
        $query= $conn->prepare("SELECT * FROM habitacion");
        $query->execute();
        while($row = $query->fetch()){
    ?>

        <tr>
            <td><?php echo $row['id_habitacion'] ?></td>
            <td><?php echo $row['num_camas'] ?></td>
            <td><?php echo $row['precio'] ?></td>
            <td><?php echo $row['nombre'] ?></td>
            <td><a href="rooms_update.php?upd=<?php echo $row['id_habitacion']; ?>">Editar</a></td>
            <td><a href="remove_rooms.php?upd=<?php echo $row['id_habitacion']; ?>"class="item_link">Eliminar</a></td>
        </tr>

    <?php
        }
    ?>  
    </table>   
    </div>      
            
           
                  
<script src="js/confirmation.js"></script>      
</body>

</html>