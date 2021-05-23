<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<link href="sass/sign_up.css" rel="stylesheet" type="text/css">
<title>Registro de usuario</title>
</head>
    <body>
    <!-- El form se envia a register.php -->
    <div class='container_general'>
        <div class='container_form'>
        <div class='login_form'>
        <form action='sign_up.php'   method="post">
            <h1>Registrate</h1>
            <h3>Introduce tus credenciales: </h3>
            <p>Nombre de usuario:</p>
            <input type="text" name='nombre'> 
            <p>Primer Apellido:</p>
            <input type="text" name='apellido'> 
            <p>Email:</p>
            <input type="email" name='email'> 
            <p>Contraseña:</p>
            <input type="password" name='password'> 
            <div class='button_registrate'>
            <input type="submit" name='register'>
            </div>
            <div class='linea'></div>
            <h3>¿Ya tienes cuenta? Pincha aquí abajo</h2>
            <div class='button_registrate'>
            <a href="login.php">Iniciar sesion</a>
            </div>
        </form>
    </div>
    </div>      
    </div>
    </body>
</html>

<?php


     
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $query = "INSERT INTO usuarios(nombre, apellido,  email, password)VALUES (:nombre , :apellido,  :email, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellido', $_POST['apellido']);
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
