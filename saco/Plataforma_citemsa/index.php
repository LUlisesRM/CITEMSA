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
    <link rel="stylesheet" href="estilo_saco.css">
    <title>SACO</title>
    
</head>
<body>
<header>
  <h2><img src="../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width = "120px" align="left">
  SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
  <img src="../media/logo_citemsa.png" alt="LOGO CITEMSA" width = "100px" align="right"></h2>
</header>

<section>
  <nav>
    <ul>
    <li><a href='index.php'>INICIO</a></li><br>
      <li><a href='operaciones/index.php'>OPERACIONES</a></li><br>
      <li><a href='administracion/index.php'>ADMINISTRACION</a></li><br>
      <li><a href='rrhh/index.php'>RECURUSOS HUMANOS</a></li><br>
      <li><a href='../salir.php'>SALIR</a></li>
    </ul>
  </nav>
  
  <article>
    <h1><font SIZE=5>Bienvenido </font> 
    
    <?php 
    $sql="SELECT * FROM padmon";
    $consulta=$conexion->query($sql);
    $row=mysqli_fetch_assoc($consulta);

     
    
    echo $row['apellido_paterno'].' '.$row['apellido_materno'].' '.$row['nombre'];?> 
  
  </h1>
    
   


</article>
</section>


</body>
</html>

