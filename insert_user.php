<?php
 include_once 'connection.php';
 
    

 //query
 if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['id_roles'])) {

    $query = "INSERT INTO usuarios(nombre, apellido,  email, id_roles )VALUES (:nombre , :apellido,  :email, :id_roles)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':id_roles', $_POST['id_roles']);

    if($stmt->execute()){
        echo '<script language="javascript">alert("Usuario actualizado correctamente");</script>';
        // header('location: users.php');
    } else {
        echo '!Ups, algo salio mal!';
        header('location: index.php');
    }

    

    

  
    
} else echo 'Por favor, complete todos los campos';
 

?>