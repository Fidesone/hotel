<?php
include_once 'connection.php';

$id = $_GET['id'];

?>
<DOCTYPE html>
<html>
<head>
<link href="sass/users.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="users.php">
    <table class='user_table'>

        <tr>
                
                <th>Nombre</th>
                <th>Apellido</th>
                <th>email</th>
                <th>Rol</th>
                <!-- <th>Operacion</th> -->
        </tr>
            <?php
            $query= $conn->prepare("SELECT * FROM usuarios WHERE id = '$id'");
            $query->execute();
            while($row = $query->fetch()){
        ?>

        <tr>
            <!-- <td> <input type="hidden" value="<?php echo $row['id'] ?>" name='id'></td> -->
            <td> <input type="text" value="<?php echo $row['nombre'] ?>" name='nombre'></td>
            <td> <input type="text" value="<?php echo $row['apellido'] ?>"name='apellido'></td>
            <td> <input type="text" value="<?php echo $row['email'] ?>"name='email'></td>
            <td> <input type="text" value="<?php echo $row['id_roles'] ?>"name='id_roles'></td>
            <td><input type="submit" value="Actualizar"></td>
            
        <tr>
        <?php
         }
    ?>  
            
    </table> 
    </form>

    <?php
    $id = $_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    
    //actualizar los datos
    $query= $conn->prepare("UPDATE usuarios SET nombre='$nombre', apellido = $apellido , email = $email WHERE id = '$id'");
    $query->execute();
    ?>

</body>
</html>