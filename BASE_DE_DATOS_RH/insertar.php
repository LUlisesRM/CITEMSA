<?php
include ("cn.php");

$id_nomina = $_POST["id_nomina"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$nombre = $_POST["nombre"];
$id_licencia = $_POST["id_licencia"];
$vencimiento = $_POST["vencimiento"];

$insertar = "INSERT INTO PERSONAL(ID_NOMINA,APELLIDO_PATERNO,APELLIDO_MATERNO,NOMBRE,ID_LICENCIA,VENCIMIENTO_LICENCIA)
             VALUES('$id_nomina','$apellido_paterno','$apellido_materno','$nombre','$id_licencia','$vencimiento')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); window.location='/BASE_DE_DATOS_RH/index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}
?>