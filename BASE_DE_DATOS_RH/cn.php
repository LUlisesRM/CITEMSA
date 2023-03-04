<?php

$host_db = "127.0.0.1:3306";
$user_db = "root";
$pass_db = "1293";
$db_name = "citemsa_rh";



$conexion = mysqli_connect($host_db,$user_db,$pass_db,$db_name);
mysqli_set_charset($conexion,"utf8");

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>