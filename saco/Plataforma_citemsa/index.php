<?php
include ("../conexion.php");
session_start();
$credencial= $_SESSION['credencial_mb'];
$sql = "SELECT * FROM padmon WHERE credencial_mb = '$credencial'";
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
    <div class=sidebar>
      <h2>Menú</h2>
      <ul class=menu id=menu>
        <li class=menu__item><a href='index.php'>INICIO</a></li>
        <li class=menu__item><a href='operaciones/index.php'>OPERACIONES</a>
          <ul class=submenu>
            <li class=menu__item><a href="" class=menu__link>Horarios</a></li>
            <li class=menu__item><a href="" class=menu__link>Checador</a></li>
            <li class=menu__item><a href="" class=menu__link>Reloj</a></li>
          </ul>
        </li>
        <li><a href='administracion/index.php'>ADMINISTRACION</a></li>
        <li><a href='rrhh/index.php'>RECURUSOS HUMANOS</a></li>
        <li><a href='../salir.php'>SALIR</a></li>
      </ul>
    </div>
  </nav>
  
  <article>
    <h1><font SIZE=5>BIENVENIDO 
    
    <?php
        $consulta = mysqli_query($conexion,$sql);
        $count=mysqli_num_rows($consulta);

        if ($count>0){

            
            while($row=mysqli_fetch_assoc($consulta) ){

            echo $row['apellido_paterno'].' '.$row['apellido_materno'].' '.$row['nombre'] ;
    
            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
  
  </font> 
  </h1>
    
   


</article>
</section>


</body>
</html>

