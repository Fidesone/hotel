<?php
include_once 'connection.php';

if(isset($_POST['Actualizar'])){
if (!empty($_POST['id_habitacion']) && !empty($_POST['num_habitacion']) && !empty($_POST['num_camas']) && !empty($_POST['precio']) && !empty($_POST['id_tipo'])){
    
    // Hacemos la query
    $query = "UPDATE habitacion SET id_habitacion = :id_habitacion , num_habitacion = :num_habitacion , num_camas = :num_camas,  precio = :precio , id_tipo = :id_tipo WHERE id_habitacion = :id_habitacion";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id_habitacion", $_POST['id_habitacion']); // bindParam vincula un parámetro
    $stmt->bindParam(":num_habitacion", $_POST['num_habitacion']);
    $stmt->bindParam(":num_camas", $_POST['num_camas']);
    $stmt->bindParam(":precio", $_POST['precio']);
    $stmt->bindParam(":id_tipo", $_POST['id_tipo']);

    // 
    if ($stmt->execute()){
        echo '<script language="javascript">alert("Habitación actualizada correctamente");</script>';
         header("location:rooms.php");
    }else{
        echo "Complete todos los campos";
    }
}
}

?>