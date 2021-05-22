<?php
// if (isset($_GET['session_closed'])){

//     session_unset (); // libera todas las variables de sesion actualmente registradas

//     session_destroy(); // Destruye la info vinculada a una sesión

//     header('location: index.php'); //Queremos que una vez finalizada la sesión, nos devuelva al Index.
//  }


 
session_start();
session_unset (); // libera todas las variables de sesion actualmente registradas

session_destroy(); // Destruye la info vinculada a una sesión
setcookie("nombre", "", time()-3600, "/");
unset($_COOKIE["nombre"]);
header('location: index.php'); //Queremos que una vez finalizada la sesión, nos devuelva al Index.
 
?>