<?php
  // Creamos la conexión a la base de datos creada (mediante PDO)
  
    $user="root";
    $pass="";
    $server="localhost:3307";
    $db= "hotels";
  
    
    
  
    $conn = new PDO("mysql:host=localhost:3307;dbname=hotels", "root", "" ) or die ("Ha saltado un error al conectar" .mysqli_connect());
    
    








    // $conn = mysqli_connect("localhost:3307", "root", "", "hotels");

    
?> 