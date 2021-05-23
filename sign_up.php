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
    <div class='container_form_sing_up'>
        <div class='container_form'>
        <div class='login_form'>
        <form action='sign_up.php'   method="post">
            <h2>Registrate</h2>
            <input type="text" name='nombre' placeholder=' Introduce tu nombre'> 
            <input type="text" name='apellido' placeholder='Introduce tu apellido'> 
            <input type="email" name='email' placeholder='Introduce tu email'> 
            <input type="password" name='password' placeholder='Contraseña'> 
            <input type="submit" name='register'>
            <p>
            <h3>¿Ya tienes cuenta? Pincha aquí abajo</h2>
            <a href="login.php">Iniciar sesion</a>
            </p>
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
