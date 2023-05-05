<?php
include("../../../conexion.php");

//consulta
$sql = "SELECT * FROM operadores";

$consulta = $conexion->query($sql);

$count = mysqli_num_rows($consulta);
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
    <div class="encabezado">
      <div class="img-left-enc">
        <img src="../../../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width="150px">
      </div>

      <div class="text-enc">
        CORREDOR INTEGRAL DE TRANSPORTE EDUARDO MOLINA CITEMSA S.A. DE C.V.
        <br>
        SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
      </div>

      <div class="img-right-enc">
        <img src="../../../media/logo_citemsa.png" alt="LOGO CITEMSA" width="130px">
      </div>
    </div>
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
      <div>
      <h1>BASE DE DATOS OPERADORES</h1>
      </div>


      <div>
        <table class="centered">
          <tr>
            <th>CREDENCIAL DE METROBUS</th>
            <th>NOMBRE</th>
          </tr>
          <?php
          if ($count > 0) {

            while ($row = mysqli_fetch_assoc($consulta)) {

              echo "<tr>";
              echo "<td><a href= mostrar.php?id=" . $row['id_operador'] . ">" . $row['credencial_mb'] . "</a></td>";
              echo "<td>" . $row['apellido_paterno'] . ' ' . $row['apellido_materno'] . ' ' . $row['nombre'] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<h1>Sin registro</h1>";
          }

          ?>
        </table>
        <br><br>
        
        <div align=center>
        <a  href="registrar.php" >Registrar</a>
        </div>
        
        
        <br>
        
      </div>
      
    </article>
    
  </section>

  

</body>

</html>