<?php
$conexion = new mysqli("127.0.0.1:3306","root","3271","imagen");
if($conexion){
echo "conexion exitosa";

}else{
    echo "fallo de conexion";
}





?>