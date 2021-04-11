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
    <h1>Usuarios totales</h1>
    <table class='user_table'>
    
        <tr>
                
            <th>Nombre</th>
            <th>Apellido</th>
            <th>email</th>
            <th>Rol</th>
        </tr>
    
                
    <?php
        $query= $conn->prepare("SELECT * FROM usuarios");
        $query->execute();
        while($row = $query->fetch()){
    ?>

        <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['apellido'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['id_roles'] ?></td>
        </tr>

    <?php
        }
    ?>  
    </table>         
            
           
                  
        
</body>

</html>