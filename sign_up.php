<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Registro de usuario</title>
</head>
    <body>
    <!-- El form se envia a register.php -->
        <form action='sign_up.php'   method="post">
            <h2>Registrate</h2>
            <input type="text" name='nombre' placeholder='Nombre'> <br><br>
            <!-- <input type="text" name='primer_apellido' placeholder='Primer Apellido'> <br><br>
            <input type="text" name='segundo_apellido' placeholder='Segundo Apellido'> <br><br> -->
            <input type="email" name='email' placeholder='Email'> <br><br>
            <input type="password" name='password' placeholder='Contraseña'> <br><br>
            <input type="submit" name='register'>
        </form>
        <p>
        <h2>¿Ya tienes cuenta? Pincha aquí abajo</h2>
        <a href="login.php">Iniciar sesion</a>
        

        </p>
    </body>
</html>

<?php

//funciona en tabla hotels. cambiar campos para que funcione para hotel.
     
    if (!empty($_POST['nombre']) && !empty($_POST['email']) &&!empty($_POST['password'])) {
        $query = "INSERT INTO usuarios(nombre,  email, password)VALUES (:nombre ,   :email, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        // $stmt->bindParam(':primer_apellido', $_POST['primer_apellido']);
        // $stmt->bindParam(':segundo_apellido', $_POST['segundo_apellido']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $_POST['password']);

        if($stmt->execute()){
            echo 'Usuario registrado correctamente';
            header('location: login.php');
        } else {
            echo '!Ups, algo salio mal!';
            header('location: index.php');
        }

        

     } else echo 'Por favor, complete todos los campos';


?>
