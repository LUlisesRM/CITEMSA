<?php
include "../conexion.php";
$id = $_GET['id'];

$sql="DELETE FROM alumnos WHERE id_alumno = '$id'";


mysqli_query($conexion,$sql);
header('Location: eliminar.php');


?>