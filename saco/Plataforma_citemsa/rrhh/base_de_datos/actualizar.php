<?php
include ("../../../conexion.php");

$id = $_GET["id"];
$sql = "SELECT * FROM operadores WHERE id_operador = '$id'";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo_saco.css">
    <title>SACO</title>
    
</head>
<body>
<header>
  <h2><img src="../../../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width = "120px" align="left">
  SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
  <img src="../../../media/logo_citemsa.png" alt="LOGO CITEMSA" width = "100px" align="right"></h2>
</header>

<section>
 
  <nav>
  <div class=sidebar>
      <h2>Menú</h2>
      <ul>
        <li><a href='../../index.php'>INICIO</a></li>
        <li><a href='../../operaciones/index.php'>OPERACIONES</a></li>
        <li><a href='../../administracion/index.php'>ADMINISTRACION</a></li>
        <li><a href='../index.php'>RECURSOS HUMANOS</a>
          <ul class=submenu>
            <li class=menu__item><a href="index.php" class=menu__link>Base de Datos</a></li>
          </ul>
        </li>
        <li><a href='../../../salir.php'>SALIR</a></li>
      </ul>
    </div>
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
        $consulta = mysqli_query($conexion,$sql);
        $count=mysqli_num_rows($consulta);

        if ($count>0){

            
            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr>";
            echo "<td> <input type='text'value=" .$row['credencial_mb']. "> </td>";
            echo "<td> <input type='text'value=" .$row['nomina']. "> </td>";
            echo "<td> <input type='text'value=" .$row['apellido_paterno']. "> 
                 <input type='text'value=" .$row['apellido_materno']. ">
                 <input type='text'value=" .$row['nombre']. "></td>";
            echo "<td><input type='text'value=" .$row['estatus']."></td>";
            echo "<td><input type='text'value=" .$row['tipo_licencia']."></td>";
            echo "<td><input type='text'value=" .$row['id_licencia']."></td>";
            echo "<td><input type='text'value=" .$row['vencimiento_licencia']."></td>";
            echo "<td> <a href= update.php>actualizar</a>";
            echo "</tr>";
            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>

<br>
<button><a href="edicion.php">Regresar</a></button>
<br>
    
</article>
</section>


</body>
</html>