<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=centroescolarbd', 'root', 'hola1234');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>