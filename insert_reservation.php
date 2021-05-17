<?php
 include_once 'connection.php';
 
    

 //query
 
 if (!empty($_POST['nombre_cliente']) && !empty($_POST['apellido_cliente']) && !empty($_POST['movil_cliente'])) {

    $query = "INSERT INTO clientes( nombre_cliente, apellido_cliente,  movil_cliente )VALUES (:nombre_cliente , :apellido_cliente ,  :movil_cliente)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nombre_cliente', $_POST['nombre_cliente']);
    $stmt->bindParam(':apellido_cliente', $_POST['apellido_cliente']);
    $stmt->bindParam(':movil_cliente', $_POST['movil_cliente']);

    if($stmt->execute()){
        echo '<script language="javascript">alert("Habitación actualizada correctamente");</script>';
         header('location: rooms.php');
    } else {
        echo '!Ups, algo salio mal!';
        header('location: index.php');
    }

    

    

  
    
} else echo 'Por favor, complete todos los campos';


?>