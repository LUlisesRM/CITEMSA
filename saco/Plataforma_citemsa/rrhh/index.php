<?php
include ("../../conexion.php");
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
    <link rel="stylesheet" href="../estilo_saco.css">
    <title>SACO</title>
    
</head>
<body>

<header>
  <div class="encabezado">
    <div class="img-left-enc">
      <img src="../../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width="150px">
    </div>

    <div class="text-enc">
      CORREDOR INTEGRAL DE TRANSPORTE EDUARDO MOLINA CITEMSA S.A. DE C.V.
      <br>
      SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
    </div>

    <div class="img-right-enc">
      <img src="../../media/logo_citemsa.png" alt="LOGO CITEMSA" width="130px">
    </div>
  </div>
  </header>

  <section>
    <nav>
      <div class=sidebar>
        <h2>Menú</h2>
        <ul class=menu id=menu>
          <li class=menu__item><a href='../index.php'>INICIO</a></li>
          <li class=menu__item><a href='../operaciones/index.php'>OPERACIONES</a></li>
          <li><a href='../administracion/index.php'>ADMINISTRACION</a></li>
          <li><a href='index.php'>RECURSOS HUMANOS</a>
            <ul class=submenu>
              <li class=menu__item><a href="base_de_datos/index.php" class=menu__link>Base de Datos</a></li>
            </ul>
          </li>
          <li><a href='../../salir.php'>SALIR</a></li>
        </ul>
      </div>
    </nav>


  <article>
  <h1>RECURSOS HUMANOS 
    
    <?php
        $consulta = mysqli_query($conexion,$sql);
        $count=mysqli_num_rows($consulta);

        if ($count>0){

            
            while($row=mysqli_fetch_assoc($consulta) ){

            /* echo $row['apellido_paterno'].' '.$row['apellido_materno'].' '.$row['nombre'] ; */
    
            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
  
  </h1>
    
   


</article>
</section>


</body>
</html>

