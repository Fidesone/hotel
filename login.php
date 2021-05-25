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
            setcookie("nombre", $result [1], time()+(86400*30), "/");
            switch($_SESSION['roles']){
                case 1: 
                    
                    header('location: admin.php');

                break;
                
                case 2: 
                    header('location: client.php' );
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
<link href="sass/header.css" rel="stylesheet" type="text/css">
<link href="sass/login.css" rel="stylesheet" type="text/css">
<link href="sass/sign_up.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
</head>

<body>
<!-- Creación de formulario para el registro de cada usuario -->
<div class='container_general'>
<div class='container_form'>
    <div class='login_form'>
        
        <form action='#' method='post'>
            
          
        <div class='arrow'> 
            <a href='index.php'> <img src='img/home.png'></img></a>
            <a href='index.php'> HOME </a>
        </div>

            <h1>Login</h1>
            
            <h3>Introduce tus credenciales: </h3>
            <div class='linea'></div>
            <p>Nombre de usuario:</p>
            <input type='text' name='nombre'> 
            <p>Contraseña:</p>
            <input type='password' name='password'> 
            <div class='button_registrate'>
            <input type='submit' value='Login'>
            </div>
            <div class='linea'></div>
            <h3>¿No tienes cuenta? </h3>
            <div class='button_registrate'>
            <a href="sign_up.php">Registrate</a>
            </div>
           
        </form>
    
    </div>

</div>

</div>    
</body>
<html>