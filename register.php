<?php
include 'connection.php';
//almacenar datos en variables
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

//crear consulta con PDO
$query = $conn-> prepare ("INSERT INTO usuarios(dni, nombre, primer_apellido, segundo_apellido, email, contraseña) VALUES ('$dni', '$nombre', '$primer_apellido', '$segundo_apellido', '$email', '$contraseña')");
$query ->execute();

if (!$query){
    echo 'Error en el registro de usuario';
} else echo 'Usuario registrado con éxito';


//cerrar conexión con PDO
$query = null;
$conn = null;

?>