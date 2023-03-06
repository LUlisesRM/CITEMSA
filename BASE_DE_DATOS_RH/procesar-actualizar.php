<?php
include ("cn.php");

$id = $_POST["id"];
$id_nomina = $_POST["id_nomina"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$nombre = $_POST["nombre"];
$id_licencia = $_POST["id_licencia"];
$vencimiento = $_POST["vencimiento"];

//actualizar datos
$actualizar ="UPDATE PERSONAL SET id_nomina='$id_nomina',
apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',
nombre='$nombre',id_licencia='$id_licencia',vencimiento='$vencimiento' WHERE ID_NOMINA = '$id' ";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado){
    
    echo"<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para continuar'); window.location='/BASE_DE_DATOS_RH/edicion.php';</script>";
} else{
    echo"<script>alert('No se pudo actualizar los datos'); window.history.go(-1);</script>";
} 


?>