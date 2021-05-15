<?php
  // Creamos la conexión a la base de datos creada (mediante PDO)
    
  // function connect(){
    $user="root";
    $pass="";
    $server="localhost";
    $db= "bbdd_hotel";

    $conn = new PDO("mysql:host=localhost;dbname=bbdd_hotel", "root", "" ) or die ("Ha saltado un error al conectar" .mysqli_connect());
  //   return $conn;
  // }
    
  // $conn = mysqli_connect("localhost:3307", "root", "", "hotel");

    
?> 