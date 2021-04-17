<?php
 include_once 'connection.php';
 
    

 //query
 if (!empty($_POST['num_habitacion']) && !empty($_POST['num_camas']) && !empty($_POST['precio']) && !empty($_POST['id_tipo'])) {

    $query = "INSERT INTO habitacion( num_habitacion, num_camas,  precio, id_tipo )VALUES (:num_habitacion , :num_camas,  :precio, :id_tipo)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':num_habitacion', $_POST['num_habitacion']);
    $stmt->bindParam(':num_camas', $_POST['num_camas']);
    $stmt->bindParam(':precio', $_POST['precio']);
    $stmt->bindParam(':id_tipo', $_POST['id_tipo']);

    if($stmt->execute()){
        echo '<script language="javascript">alert("Habitación actualizada correctamente");</script>';
         header('location: rooms.php');
    } else {
        echo '!Ups, algo salio mal!';
        header('location: index.php');
    }

    

    

  
    
} else echo 'Por favor, complete todos los campos';
 

?>