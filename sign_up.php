<?php

 include_once 'connection.php';

 session_start(); // Inicia una nueva sesión

 if (isset($_GET['session_closed'])){

    session_unset (); // libera todas las variables de sesion actualmente registradas

    session_destroy(); // Destruye la info vinculada a una sesión

    header('location: index.php'); //Queremos que una vez finalizada la sesión, nos devuelva al Index.
 }

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
            $rol = $result[6];
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
            // no existe usuario o contraseña, o son incorrectos.
        }
    }

?>


<!DOCTYPE html>
<!-- Creación de formulario para el registro de cada usuario -->
<div class='container-form'>

<h1 id="saludo">Bienvenidos</h1>

<div class='login-form'>
    
    <form action='#' method='post'>
        <h1>Sign-Up</h1>
        <h3>Introduce tus credenciales </h3>
        <input type='text' name='dni' placeholder='Introduce tu dni'>
        <input type='text' name='nombre' placeholder='Introduce tu nombre'>
        <input type='text' name='primer_apellido' placeholder='Introduce tu primer apellido'>
        <input type='text' name='segundo_apellido' placeholder='Introduce tu segundo apellido'>
        <input type='email' name='email' placeholder='Introduce tu email'>
        <input type='password' name='password' placeholder='Introduce tu contraseña'>
        <input type='submit' value='Sign Up'>
    </form>
</div>



    

<html>