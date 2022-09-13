<?php 
//Credeciales de la base de datos
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'pruevatecnica';

//Conectamos a la base de datos
try{
    //Creamos la conexion
    //$conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    $conn = mysqli_connect($server,$username,$password,$database);
}catch(PDOException $e){
    //Si hay un error, lo mostramos
    die('conexion failed: ' .$e->getMessage());
}
