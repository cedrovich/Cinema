<?php
$host = "localhost";
$user = "root";
$contrasena = "";
$bd = "films";

$conectar = mysqli_connect($host,$user,$contrasena, $bd);

if(!$conectar){
  echo "No funciona la BD";
}else{
  echo '';
}
?>