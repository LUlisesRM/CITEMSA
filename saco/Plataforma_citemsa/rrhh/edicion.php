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
    <title>EDICION</title>
</head>
<body>
<header>
  <h2>SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href='../salir.php'>SALIR</a></li>
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
            <th>ACCIÓN</th>
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
            echo "<td> <a href= actualizar.php?id=" .$row['id_operador']. ">editar</a> |
                       <a href= eliminar.php?id=" .$row['id_operador']. ">eliminar</a> </td> ";
            echo "</tr>";

            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>
<br>
<button><a href="index.php">Regresar</a></button>
<br> 

</article>
</section>


</body>
</html>