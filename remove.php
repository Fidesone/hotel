<?php
include_once 'connection.php';

$id = $_GET['id'];

//query
$query = "DELETE FROM usuarios WHERE id = '$id'";
$res = $conn->prepare($query);

if($res){
    header("Location: users.php");
} else{
    echo "<script> alert('No se pudo eliminar'); window.history.go(-1);</script>"; //window.history.go vuelve 1 página hacia detrás
}


?>