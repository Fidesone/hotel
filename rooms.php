<?php
include 'connection.php';
?>
<h1>Habitaciones disponibles<h1>

<?php
$query = $conn->prepare("SELECT numero_habitacion FROM habitacion ");
   
$query->execute();

while($row = $query->fetch()){?>
    
      
    <?php   echo $row ["numero_habitacion"] . '<br>' ?>
        
      
 
      <?php } 
      ?>
        
 
      

