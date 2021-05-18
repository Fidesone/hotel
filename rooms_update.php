<?php
include_once 'connection.php';

if(isset($_GET['upd'])) $id_habitacion = $_GET['upd'];

$query = "SELECT * FROM habitacion WHERE id_habitacion = :id_habitacion";
$stmt = $conn->prepare($query);
$stmt->bindParam('id_habitacion', $id_habitacion);
$stmt->execute();
$res = $stmt->rowCount();

if ($res > 0){
    $data = $stmt->fetch();
}

?>
<DOCTYPE html>
<html>
<head>
<link href="sass/users.css" rel="stylesheet" type="text/css">
<head>
<body>

<div class="container_form">
<div><h1>Actualizar habitacion</h1></div>
<form action='rooms_upd.php' method="post">
<table class='user_table'>
        <tr>
                
         
            <th>número de camas</th>
            <th>Precio</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <!-- <th>Operacion</th> -->
        </tr>
        <tr>
        <input type="hidden" name='id_habitacion' value="<?= $data['id_habitacion']?>">
        
        <td><input type="text" name='num_camas' placeholder='numero de camas' value="<?= $data['num_camas']?>"></td>
        <td><input type="text" name='precio' placeholder='Precio' value="<?= $data['precio']?>"></td>
        <td><input type="text" name='nombre' placeholder='Rol' value="<?= $data['nombre'] ?>"></td>
        <td><input type="text" name='descrip' placeholder='Rol' value="<?= $data['descrip'] ?>"></td>
        <td><input type="text" name='imagen' placeholder='Rol' value="<?= $data['imagen'] ?>"></td>
        <td><input type=submit name='Actualizar'></td>
        </tr>
    
    
</table>
</form>
</div>
</body>
</html>