<?php
$host= "localhost";
$user= "id21473201_admin"; //EL USUARIO DE TU BD
$password="Angel3216@"; //LA CONTRASEÑA DE TU BD
$bd="id21473201_personal";//EL NOMBRE DE LA BD

$conexion=mysqli_connect($host,$user,$password,$bd);

if($conexion ->connect_errno){
    die("Conexion Fallida".$conexion->connect_errno);
}
?>