<?php
include_once 'connection.php';

if(isset($_POST['Actualizar'])){
if (!empty($_POST['id_habitacion']) && !empty($_POST['num_camas']) && !empty($_POST['precio']) && !empty($_POST['nombre']) && !empty($_POST['descrip']) && !empty($_POST['imagen'])){
    
    // Hacemos la query
    $query = "UPDATE habitacion SET   num_camas = ? ,  precio = ?  , nombre = ? , descrip = ? , imagen = ? WHERE id_habitacion = ?";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $_POST['num_camas']); // bindParam vincula un parámetro
    $stmt->bindParam(2, $_POST['precio']);
    $stmt->bindParam(3, $_POST['nombre']);
    $stmt->bindParam(4, $_POST['descrip']);
    $stmt->bindParam(5, $_POST['imagen']);
    $stmt->bindParam(6, $_POST['id_habitacion']);

    try {

    
    if ($stmt->execute()){
        echo '<script language="javascript">alert("Habitación actualizada correctamente");</script>';
         header("location:rooms.php");
    }else{
        echo "Complete todos los campos";
    }

} catch(PDOException $e){
    echo $e -> getMessage();
} 
}else{
    echo "faltan datos";
}
}

?>