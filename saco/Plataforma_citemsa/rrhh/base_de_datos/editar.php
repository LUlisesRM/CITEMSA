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
                        <th>CREDENCIAL DE METROBUS</th>
                        <th>NOMBRE</th>
                    </tr>

                    <?php
                    include("../../../conexion.php");

                    //consulta
                    $sql = "SELECT * FROM operadores";

                    $consulta = $conexion->query($sql);

                    $count = mysqli_num_rows($consulta);

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


    </div>
    </article>
    </section>

    <div class="modal">
        <div class="contenido_modal" align=center>
            
                <?php
                include("../../../conexion.php");

                $id = $_GET["id"];
                $sql = "SELECT * FROM operadores WHERE id_operador = '$id'";
                $consulta = mysqli_query($conexion, $sql);
                $count = mysqli_num_rows($consulta);

                if ($count > 0) {


                    while ($row = mysqli_fetch_assoc($consulta)) {

                        echo "<h2>DATOS DEL OPERADOR </h2>";
                        echo "<form action='update.php' method = 'POST' enctype='multipart/form-data' >";
                        echo "<table class='tabla_modal'>";
                        echo "<tr>";
                        ?>
                        
                        
                        <td><input required type='file' name='imagen' style="width: 265px;"></td>
                        
                        <?php
                        echo "<td> ";
                        echo "<input type='hidden' name = 'id' value=" . $row['id_operador'] . ">";
                        echo "NOMBRE: <input type='text' name = 'nombre' value=".$row['nombre']."><input type='text' name = 'apellido_paterno' value=".$row['apellido_paterno']. "><input type='text' name = 'apellido_materno' value=".$row['apellido_materno']. "><br>";
                        echo "CREDENCIAL METROBUS: <input type='text' name = 'credencial_mb' value=" . $row['credencial_mb'] . "><br>";
                        echo "NOMINA: <input type='text' name = 'nomina' value=" . $row['nomina'] . "><br>";
                        echo "ESTATUS: <input type='text' name = 'estatus' value=" . $row['estatus'] . "><br>";


                        echo "FECHA DE CONTRATO: <input type='text' name = 'fecha_contrato' value=" . $row['fecha_contrato'] . "><br>";
                        echo "ID DE LICENCIA: <input type='text' name = 'id_licencia' value=" . $row['id_licencia'] . "><br>";
                        echo "VENCIMIENTO DE LICENCIA: <input type='date' name = 'vencimiento_licencia' value=" . $row['vencimiento_licencia'] . "><br>";
                        echo "CURP: <input type='text' name = 'curp' style='width:168px;' value=" . $row['curp'] . "><br>";
                        echo "NUMERO DE SEGURO SOCIAL: <input type='text' name = 'nss' value=" . $row['nss'] . "><br>";

                        echo "</td></tr>";
                        echo "</table> <br><br>";
                        echo "<input type='submit' value = 'ACEPTAR' style='width:89px;'> <button><a href= mostrar.php?id=" . $row['id_operador'] . ">CANCELAR</a></button>";
                        echo "</form>";
                    


                    }
                } else {
                    echo "<h1>Sin registro</h1>";
                }

                ?>

        </div>
    </div>

</body>

</html>