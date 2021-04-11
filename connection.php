<?php
  // Creamos la conexión a la base de datos creada (mediante PDO)
  
    $user="root";
    $pass="";
    $server="localhost";
    $db= "hotel";
  
    
    
  
    $conn = new PDO("mysql:host=localhost;dbname=hotel", "root", "" ) or die ("Ha saltado un error al conectar" .mysqli_connect());
    
    








    // $conn = mysqli_connect("localhost:3307", "root", "", "hotels");

    
?> 