<?php
  // Creamos la conexión a la base de datos creada
  
    $user="root";
    $pass="";
    $server="localhost";
    $db= "hotel";
  
    

    $con = new PDO("mysql:host=localhost;dbname=hotel", "root", "" ) or die ("Ha saltado un error al conectar" .mysqli_connect());
    
    

    
?> 