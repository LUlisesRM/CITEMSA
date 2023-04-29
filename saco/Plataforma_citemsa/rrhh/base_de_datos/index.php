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
        if ($count > 0) {

          while ($row = mysqli_fetch_assoc($consulta)) {

            echo "<tr>";
            echo "<td>" . $row['credencial_mb'] . "</td>";
            echo "<td>" . $row['nomina'] . "</td>";
            echo "<td>" . $row['apellido_paterno'] . ' ' . $row['apellido_materno'] . ' ' . $row['nombre'] . "</td>";
            echo "<td>" . $row['estatus'] . "</td>";
            echo "<td>" . $row['tipo_licencia'] . "</td>";
            echo "<td>" . $row['id_licencia'] . "</td>";
            echo "<td>" . $row['vencimiento_licencia'] . "</td>";
            echo "</tr>";
          }
        } else {
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