<?php
include_once 'connection.php';

$id = $_GET['upd'];
echo $id;
echo "<script> alert( . '$id'. );</script>";
//query
$query = "DELETE FROM habitacion WHERE id_habitacion = ". $id;

$res = $conn->prepare($query);

if($res->execute()){
   header("Location: rooms.php");
} else{
    echo "<script> alert('No se pudo eliminar'); window.history.go(-1);</script>"; //window.history.go vuelve 1 página hacia detrás
}


?>