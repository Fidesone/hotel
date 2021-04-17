<?php

 include_once 'connection.php';
 

 session_start(); // Inicia una nueva sesión

 // Redirige según seas un cliente o un administrador
 if (isset($_SESSION['roles'])){
     switch($_SESSION['roles']){
        case 1: 
            header('location: admin.php');
        break;
        
        case 2: 
            header('location: client.php');
        break;
        default:
     }

 }
    if(isset($_POST['nombre']) && isset($_POST['password'])){
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];

        // $db = new Database();
        $query= $conn->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND password = :password');
        $query->execute([
            'nombre'=> $nombre, 
            'password'=> $password,
            ]);

        $result = $query->fetch(PDO::FETCH_NUM);
        if ($result){
            //valida rol
            $rol = $result[5];
            $_SESSION['roles'] = $rol;
            switch($_SESSION['roles']){
                case 1: 
                    header('location: admin.php');
                break;
                
                case 2: 
                    header('location: client.php');
                break;
                default:
             }
        } else{
            echo 'no existe usuario o contraseña, o son incorrectos.' ;
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
<link href="sass/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Creación de formulario para el registro de cada usuario -->
<div class='container-form'>
    <div class='login-form'>
        <form action='#' method='post'>
            <h1>Login</h1>
            <h3>Introduce tus credenciales </h3>
        
            <input type='text' name='nombre' placeholder='Introduce tu nombre'> 
            <input type='password' name='password' placeholder='Introduce tu contraseña'> 
            <input type='submit' value='Sign Up'>
            <p>
            <h3>¿Ya tienes cuenta? Pincha aquí abajo</h2>
            <a href="sign_up.php">Registrate</a>
        

            </p>
        </form>
    
    </div>

</div>

    
</body>
<html>