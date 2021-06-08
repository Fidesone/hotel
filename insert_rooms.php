<?php
 include_once 'connection.php';
 
    

 //query
 if (!empty($_POST['id_habitacion']) && !empty($_POST['num_camas']) && !empty($_POST['precio']) && !empty($_POST['nombre'])) {

    $query = "INSERT INTO habitacion( id_habitacion, num_camas,  precio, nombre )VALUES (:id_habitacion , :num_camas,  :precio, :nombre)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_habitacion', $_POST['id_habitacion']);
    $stmt->bindParam(':num_camas', $_POST['num_camas']);
    $stmt->bindParam(':precio', $_POST['precio']);
    $stmt->bindParam(':nombre', $_POST['nombre']);

    if($stmt->execute()){
        echo '<script language="javascript">alert("Habitación actualizada correctamente");</script>';
         header('location: rooms.php');
    } else {
        echo '!Ups, algo salio mal!';
        header('location: index.php');
    }

    

    

  
    
} else echo 'Por favor, complete todos los campos';
 
echo $_POST['id_habitacion'];
echo $_POST['num_camas'];
echo $_POST['precio'];
echo $_POST['id_tipo'];

?>