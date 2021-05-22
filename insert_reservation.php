<?php
 include_once 'connection.php';
 
    

 //query
 
 if (!empty($_POST['nombre_cliente']) && !empty($_POST['apellido_cliente']) && !empty($_POST['movil_cliente']) && !empty($_POST['fecha_ini']) && !empty($_POST['fecha_fin']) && !empty($_POST['id_habitacion'])) {

    $query = "INSERT INTO clientes( nombre_cliente, apellido_cliente,  movil_cliente )VALUES (:nombre_cliente , :apellido_cliente ,  :movil_cliente)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nombre_cliente', $_POST['nombre_cliente']);
    $stmt->bindParam(':apellido_cliente', $_POST['apellido_cliente']);
    $stmt->bindParam(':movil_cliente', $_POST['movil_cliente']);

    if($stmt->execute()){
        echo '<script language="javascript">alert("Habitación actualizada correctamente");</script>';
        guardar_reserva($conn , $conn ->lastInsertId(),$_POST ['fecha_ini'], $_POST ['fecha_fin'], $_POST['id_habitacion']); // recuperar el ultimo id fuction()
    } else {
        echo '!Ups, algo salio mal!';
        header('location: index.php');
    }

    

    

  
    
} else echo 'Por favor, complete todos los campos';

function guardar_reserva($conn , $id_cliente, $fecha_ini, $fecha_fin, $id_habitacion){

   echo $id_cliente; 
   echo $fecha_ini; 
   echo $fecha_fin; 

        
        // Hacemos la query
        $query = "INSERT INTO  reservas (id_cliente, fecha_ini ,  fecha_fin) VALUES ( ? , ? , ?)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $id_cliente ); // bindParam vincula un parámetro
        $stmt->bindParam(2, $fecha_ini);
        $stmt->bindParam(3, $fecha_fin);
        
    
        try {
    
        
        if ($stmt->execute()){
            guardar_habitacion($conn, $conn->lastInsertId(), $id_habitacion);
        }else{
            echo "Complete todos los campos";
        }
    
    } catch(PDOException $e){
        echo $e -> getMessage();
    } 
   
}

    function guardar_habitacion($conn, $id_res, $id_habitacion){
        // Hacemos la query
        $query = "INSERT INTO  habitacion_reservas (id_habitacion, id_reserva) VALUES ( ? , ? )";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $id_habitacion ); // bindParam vincula un parámetro
        $stmt->bindParam(2, $id_res);
       
        
    
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
   
}

    
    


?>