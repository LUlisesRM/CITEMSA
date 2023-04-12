<?php
include ("../conexion.php");

$grado = $_POST['grado'];
$matricula = $_POST['matricula'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$nombre = $_POST['nombre'];
$CURP = $_POST["CURP"];
$correo_institucional = $_POST["correo_institucional"];
$contraseña = $_POST["pass"];

$sql = "INSERT INTO alumnos (grado,matricula,apellido_paterno,apellido_materno,nombre,CURP,correo_institucional,pass)
             VALUES('$grado','$matricula','$apellido_paterno','$apellido_materno','$nombre','$CURP','$correo_institucional','$contraseña')";

$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}

?>