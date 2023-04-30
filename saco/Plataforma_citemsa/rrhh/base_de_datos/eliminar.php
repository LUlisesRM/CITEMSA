<?php
include "../../../conexion.php";
$id = $_GET['id'];

$sql="DELETE FROM operadores WHERE id_operador = '$id'";



$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); 
    window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}
?>