<?php
include 'connection.php';
include 'header.php';


?>

<!DOCTYPE html>
<html>
<head>
<link href="sass/footer.css" rel="stylesheet" type="text/css">
<link href="sass/header.css" rel="stylesheet" type="text/css">
<link href="sass/sign_up.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">

</head>
<title>Registro de usuario</title>
</head>
    <body>
    <!-- El form se envia a register.php -->
    <div class='container_general'>
        <div class='container_form'>
        <div class='login_form'>
        <form action='sign_up.php'   method="post">
        <div class='arrow'> 
            <a href='index.php'> <img src='img/home.png'></img></a>
            <a href='index.php'> HOME </a>
        </div>
            <h1>Registrate</h1>
            <h3>Introduce tus credenciales: </h3>
            <div class='linea'></div>
            <p>Nombre de usuario:</p>
            <input type="text" name='nombre' autocomplete='username'> 
            <p>Primer Apellido:</p>
            <input type="text" name='apellido'> 
            <p>Email:</p>
            <input type="email" name='email'> 
            <p>Contraseña:</p>
            <input type="password" name='password' autocomplete='new-password' id='new-password'> 
            <div class='button_registrate'>
            <input type="submit" name='register' value='Registrar'>
            </div>
            <div class='linea'></div>
            <h3>¿Ya tienes cuenta? </h2>
            <div class='button_registrate'>
            <a href="login.php">Iniciar sesion</a>
            </div>
        </form>
    </div>
    </div>      
    </div>
    </body>
    <?php
    include 'footer.php'
    ?>
</html>

<?php


    if($_SERVER['REQUEST_METHOD']=='POST')
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
