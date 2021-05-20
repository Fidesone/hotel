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
    <form action="insert_user.php" method="post" class="container_form">
    <h2 class="container_newuser">Registrar nuevo usuario</h2>
        <input type="text" name='nombre' placeholder='Nombre'> <br><br>
        <input type="text" name='apellido' placeholder='Apellido'> <br><br>
        <input type="text" name='password' placeholder='Contraseña'> <br><br>
        <input type="email" name='email' placeholder='Email'> <br><br>
        <input type="number" name='id_roles' placeholder='ROL'> <br><br>
        <input type="submit" name='registrar'>
    </form>

    <div class="container_table">
    <h2>Usuarios totales</h2>
    <table class='user_table'>
    
        <tr>
                
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Password</th>
            <th>email</th>
            <th>Rol</th>
            <!-- <th>Operacion</th> -->
        </tr>
    
                
    <?php
        $query= $conn->prepare("SELECT * FROM usuarios");
        $query->execute();
        while($row = $query->fetch()){
    ?>

        <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['apellido'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['id_roles'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['id']; ?>">Editar</a></td>
            <td><a href="remove.php?upd=<?php echo $row['id']; ?>"class="item_link">Eliminar</a></td>
        </tr>

    <?php
        }
    ?>  
    </table>   
    </div>      
            
           
                  
<script src="js/confirmation.js"></script>      
</body>

</html>