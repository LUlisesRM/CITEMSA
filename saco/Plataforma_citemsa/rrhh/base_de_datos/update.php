<?php
include ("../../../conexion.php");

$id = $_POST["id"];
$credencial = $_POST['credencial_mb'];
$nomina = $_POST['nomina'];
$paterno = $_POST['apellido_paterno'];
$materno = $_POST['apellido_materno'];
$nombre = $_POST['nombre'];
$status = $_POST['estatus'];
$licencia = $_POST['tipo_licencia'];
$id_licencia = $_POST['id_licencia'];
$fecha_licencia = $_POST['vencimiento_licencia'];


//actualizar datos
$sql = "UPDATE operadores SET credencial_mb = '$credencial', nomina = '$nomina', apellido_paterno ='$paterno', 
apellido_materno = '$materno', nombre = '$nombre', estatus = '$status', tipo_licencia = '$licencia', id_licencia = '$id_licencia',
vencimiento_licencia = '$fecha_licencia' WHERE id_operador = '$id' ";

$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); 
    window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}

?>