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
  <link rel="stylesheet" href="estilo.css">
  <title>SACO</title>

</head>

<body>
  <header>
    <h2><img src="../../../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width="120px" align="left">
      SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
      <img src="../../../media/logo_citemsa.png" alt="LOGO CITEMSA" width="100px" align="right">
    </h2>
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
  
      <div class="container-all" id="modal">

        <div class="popup">

          <div class="container-text">

            <table border="2px">
              <tr>
                <th>REGISTRAR</th>
              </tr>
              <form action='insertar.php' method='post'>
                <tr>
                  <td>
                    <lable>CREDENCIAL METROBUS:</lable>
                    <input name='credencial_mb' type='text'>
                    <lable>NOMINA:</lable>
                    <input name='nomina' type='int'>
                    <lable>CONTRASEÑA:</lable>
                    <input name='contraseña' type='int'>
                    <lable>APELLIDO PATERNO:</lable>
                    <input name='apellido_paterno' type='text'> <br>
                    <lable>APELLIDO MATERNO:</lable>
                    <input name='apellido_materno' type='text'>
                    <lable>NOMBRE:</lable>
                    <input name='nombre' type='text'>
                    <lable>ESTATUS:</lable>
                    <input name='estatus' type='text'>
                    <lable>FECHA DE CONTRATO:</lable>
                    <input name='fecha_contrato' type='date'>
                    <lable>TIPO DE LICENCIA:</lable>
                    <input name='tipo_licencia' type='text'>
                    <lable>ID LICENCIA:</lable>
                    <input name='id_licencia' type='text'>
                    <lable>VENCIMIENTO DE LICENCIA:</lable>
                    <input name='vencimiento_licencia' type='date'>
                    <lable>CURP:</lable>
                    <input name='curp' type='text'>
                    <lable>HOMOCLAVE:</lable>
                    <input name='homoclave' type='text'>
                    <lable>NUMERO DE SEGURO SOCIAL (NSS):</lable>
                    <input name='nss' type='int'>
                    <lable>TELEFONO:</lable>
                    <input name='telefono' type='int'>
                    <lable>CODIGO POSTAL:</lable>
                    <input name='codigo_postal' type='int'>
                    <br> <br>
                    <input type='submit' value='ACEPTAR'> <button><a href='index.php'>CANCELAR</a></button>
                  </td>
                </tr>
              </form>
              <br>
            </table>
          </div>

        </div>

      </div>




    </article>
  </section>

</body>

</html>