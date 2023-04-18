<?php
include ("../conexion.php");

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
    <title>Document</title>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  height: 400px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 85%;
  background-color: #f1f1f1;
  height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
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
<button><a href="edicion.php">Editar</a></button>
<button><a href="registrar.php">Regristrar</a></button>
<br>
    
</article>
</section>


</body>
</html>

