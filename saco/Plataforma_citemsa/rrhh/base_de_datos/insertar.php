<?php
include ("../../../conexion.php");

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$credencial = $_POST['credencial_mb'];
$nomina = $_POST['nomina'];
$pass = $_POST["contraseña"];
$paterno = $_POST['apellido_paterno'];
$materno = $_POST['apellido_materno'];
$nombre = $_POST['nombre'];
$status = $_POST['estatus'];
$contrato = $_POST['fecha_contrato'];
$id_licencia = $_POST['id_licencia'];
$fecha_licencia = $_POST['vencimiento_licencia'];
$curp = $_POST['curp'];
$homoc = $_POST['homoclave'];
$seguro = $_POST['nss'];
$phone = $_POST['telefono'];
$cp = $_POST['codigo_postal'];



$sql = "INSERT INTO operadores (imagen,credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
        fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
        VALUES ('$imagen','$credencial','$nomina','$pass','$paterno','$materno','$nombre', '$status','$contrato','$id_licencia',
        '$fecha_licencia','$curp','$homoc','$seguro','$phone','$cp')";



$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); 
    window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}

?>