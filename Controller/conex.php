<?php
$host= "localhost";
$user= ""; //EL USUARIO DE TU BD
$password=""; //LA CONTRASEÑA DE TU BD
$bd="";//EL NOMBRE DE LA BD

$conexion=mysqli_connect($host,$user,$password,$bd);

if($conexion ->connect_errno){
    die("Conexion Fallida".$conexion->connect_errno);
}
?>
