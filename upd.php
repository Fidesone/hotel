<?php
include_once 'connection.php';

if(isset($_POST['Actualizar'])){
if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['id_roles'])){
    
    // Hacemos la query
    $query = "UPDATE usuarios SET id = :id , nombre = :nombre , apellido = :apellido, password = :password,   email = :email , id_roles = :id_roles WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $_POST['id']); // bindParam vincula un parámetro
    $stmt->bindParam(":nombre", $_POST['nombre']);
    $stmt->bindParam(":apellido", $_POST['apellido']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":id_roles", $_POST['id_roles']);

    // 
    if ($stmt->execute()){
        echo '<script language="javascript">alert("Usuario actualizado correctamente");</script>';
         header("location:users.php");
    }else{
        echo "Complete todos los campos";
    }
}
}

?>