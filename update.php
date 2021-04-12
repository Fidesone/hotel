<?php
include_once 'connection.php';

if(isset($_GET['upd'])) $id = $_GET['upd'];

$query = "SELECT * FROM usuarios WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam('id', $id);
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
<div><h1>Actualizar usuario</h1></div>
<form action='upd.php' method="post">
<table class='user_table'>
        <tr>
                
            <th>Nombre</th>
            <th>Apellido</th>
            <th>email</th>
            <th>Rol</th>
            <!-- <th>Operacion</th> -->
        </tr>
        <tr>
        <input type="hidden" name='id' value="<? $data['id']?>">
        <td><input type="text" name='nombre' placeholder='nombre' value="<?= $data['nombre']?>"></td>
        <td><input type="text" name='apellido' placeholder='apellido' value="<?= $data['apellido']?>"></td>
        <td><input type="text" name='email' placeholder='email' value="<?= $data['email']?>"></td>
        <td><input type="text" name='id_roles' placeholder='Rol' value="<?= $data['id_roles'] ?>"></td>
        <td><input type=submit name='Actualizar'></td>
        </tr>
    
    
</table>
</form>
</div>
</body>
</html>