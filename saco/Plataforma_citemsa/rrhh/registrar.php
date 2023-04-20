<?php
include ("../../conexion.php");

//consulta
$sql="SELECT * FROM operadores";

 $consulta=$conexion->query($sql);

 $count=mysqli_num_rows($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo_saco.css">
    <title>SACO</title>
    
</head>
<body>
<header>
  <h2><img src="../../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width = "120px" align="left">
  SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
  <img src="../../media/logo_citemsa.png" alt="LOGO CITEMSA" width = "100px" align="right"></h2>
</header>

<section>
 
  <nav>
    <ul>
    <li><a href='../index.php'>INICIO</a></li><br>
      <li><a href='../operaciones/index.php'>OPERACIONES</a></li><br>
      <li><a href='../administracion/index.php'>ADMINISTRACION</a></li><br>
      <li><a href='../rrhh/index.php'>RECURUSOS HUMANOS</a></li><br>
      <li><a href='../../salir.php'>SALIR</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>BASE DE DATOS OPERADORES</h1>

    <table border="2px"> 
        <tr>
            <th>CREDENCIAL METROBUS</th>
            <th>NOMINA</th>
            <th>NOMBRE</th>
            <th>ESTATUS</th>
            <th>TIPO DE LICENCIA</th>
            <th>ID DE LICENCIA</th>
            <th>VENCIMIENTO DE LA LICENCIA</th>
        </tr>
    <?php
        if ($count>0){

            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr>";
            echo "<td>" .$row['credencial_mb']. "</td>";
            echo "<td>" .$row['nomina']. "</td>";
            echo "<td>".$row['apellido_paterno']. ' ' .$row['apellido_materno']. ' ' .$row['nombre']."</td>";
            echo "<td>".$row['estatus']."</td>";
            echo "<td>".$row['tipo_licencia']."</td>";
            echo "<td>".$row['id_licencia']."</td>";
            echo "<td>".$row['vencimiento_licencia']."</td>";
            echo "</tr>";

            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>

<br>

    <h2>REGISTRAR OPERADOR</h2>
            <form action ='insertar.php' method='post'>
                <lable>CREDENCIAL METROBUS:</lable>
                <input name='credencial_mb' type='text'>
                <lable>NOMINA:</lable>
                <input name='nomina' type='int'>
                <lable>APELLIDO PATERNO:</lable>
                <input name='apellido_paterno' type='text'>
                <lable>APELLIDO MATERNO:</lable>
                <input name='apellido_materno' type='text'>
                <lable>NOMBRE:</lable>
                <input name='nombre' type='text'>
                <lable>ESTATUS:</lable>
                <input name='estatus' type='text'>
                <lable>CORREO INSTITUCIONAL:</lable>
                <input name='correo_institucional' type='text'>
                <lable>CONTRASEÑA:</lable>
                <input name='pass' type='text'> <br> <br>
                <input type='submit' value ='Registrar'>
                 
            </form>
            <br>
            <button><a href='index.php'>Cancelar</a></button>


</article>
</section>


</body>
</html>