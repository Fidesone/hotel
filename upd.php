<?php
include_once 'connection.php';
// !empty($_POST['id'])&&
if ( !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['id_roles'])){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $id_roles = $_POST['id_roles'];

    $query = "UPDATE usuarios SET id = :id, nombre = :nombre, email = :email , id_roles = :id_roles WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":apellido", $apellido);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":id_roles", $id_roles);

    //DA ERROR
    if ($stmt->execute()){
        echo '<script language="javascript">alert("Usuario actualizado correctamente");</script>';
        // header("location:users.php");
    }else{
        echo "Complete todos los campos";
    }
}

?>