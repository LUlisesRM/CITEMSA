<?php
include "../../../conexion.php";
$id = $_GET['id'];

$sql="DELETE FROM operadores WHERE id_operador = '$id'";


mysqli_query($conexion,$sql);
header('Location: eliminar.php');


?>