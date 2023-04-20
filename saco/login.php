<?php
require 'conexion.php';
session_start();

$credencial = $_POST['credencial'];
$pass = $_POST['pass'];


$sql = "SELECT COUNT(*) AS id_padmon FROM padmon where credencial_mb = '$credencial' and contraseña = '$pass'";

$consulta = mysqli_query($conexion, $sql);

$array = mysqli_fetch_array($consulta);

if ($array['id_padmon'] > 0) {

    
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['credencial_mb'] = $credencial;

    header("location: Plataforma_citemsa/index.php ");

} else {

    header("location: indexError.php");
}
?>