<?php
  // Creamos la conexión a la base de datos creada (mediante PDO)
    
  // function connect(){
    $user="root";
    $pass="";
    $server="localhost";
    $db= "hotel:3307";

    $conn = new PDO("mysql:host=localhost:3307;dbname=hotel", "root", "" ) or die ("Ha saltado un error al conectar" .mysqli_connect());
  //   return $conn;
  // }
    
  // $conn = mysqli_connect("localhost:3307", "root", "", "hotel");

    
?> 