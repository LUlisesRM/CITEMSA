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
  <div>

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
            <th>NOMBRE</th>
          </tr>

          <?php

          if ($count > 0) {

            while ($row = mysqli_fetch_assoc($consulta)) {

              echo "<tr>";
              echo "<td>" . $row['credencial_mb'] . "</td>";
              echo "<td>" . $row['apellido_paterno'] . ' ' . $row['apellido_materno'] . ' ' . $row['nombre'] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<h1>Sin registro</h1>";
          }

          ?>
        </table>
  </div>
  </article>
  </section>

  <div class="modal">
    <div class="contenido_modal">
      <div align=center>
      <h2>REGISTRO</h2> <br>
      </div>
      <form action='insertar.php' method = 'POST' enctype='multipart/form-data'>
        <lable>NOMBRE:</lable>
        <input name='nombre' required type='text'>
        <lable>APELLIDO PATERNO:</lable>
        <input name='apellido_paterno' required type='text'>
        <lable>APELLIDO MATERNO:</lable>
        <input name='apellido_materno' required type='text'>

        <lable>CREDENCIAL METROBUS:</lable>
        <input name='credencial_mb' required type='text'>
        <lable>NOMINA:</lable>
        <input name='nomina' required type='int'>
        <lable>CONTRASEÑA:</lable>
        <input name='contraseña' required type='int'>


        <lable>ESTATUS:</lable>
        <input name='estatus' required type='text'>
        <lable>FECHA DE CONTRATO:</lable>
        <input name='fecha_contrato' required type='date'>
        <lable>ID LICENCIA:</lable>
        <input name='id_licencia' required type='text'>
        <lable>VENCIMIENTO DE LICENCIA:</lable>
        <input name='vencimiento_licencia' required type='date'>

        <lable>CURP:</lable>
        <input name='curp' required type='text'>
        <lable>HOMOCLAVE:</lable>
        <input name='homoclave' required type='text'>
        <lable>NUMERO DE SEGURO SOCIAL (NSS):</lable>
        <input name='nss' required type='int'>
        <lable>TELEFONO:</lable>
        <input name='telefono' required type='int'><br>
        <lable>CODIGO POSTAL:</lable>
        <input name='codigo_postal' required type='int'>
        <br><br>
        <div align=center>
        <label>FOTOGRAFÍA:</label>
        <input required type='file' name='imagen' style="width:300px;" ><br>
        </div>
        <br><br><br>
        <div align=center>
        <input type='submit' value='ACEPTAR'> <button><a href='index.php'>CANCELAR</a></button>
        </div>


      </form>

    </div>
  </div>

</body>

</html>