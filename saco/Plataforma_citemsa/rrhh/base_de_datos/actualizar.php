<?php
include ("../../../conexion.php");

$id = $_GET["id"];
$sql = "SELECT * FROM operadores WHERE id_operador = '$id'";

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
  <h2><img src="../../../media/LOGO_MBL5.png" alt="LOGO CITEMSA" width = "120px" align="left">
  SISTEMA DE ADMINISTRACION Y CONTROL DE OPERACIONES
  <img src="../../../media/logo_citemsa.png" alt="LOGO CITEMSA" width = "100px" align="right"></h2>
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
            <th>EDITAR</th>
        </tr>
<?php
        $consulta = mysqli_query($conexion,$sql);
        $count=mysqli_num_rows($consulta);

        if ($count>0){

            
            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<form action='update.php' method = 'post'>";
            echo "<tr>";
            echo "<td>
                  <input type='hidden'name = 'id' value=".$row['id_operador'].">";
            echo "<label>CREDENCIAL DE METROBUS</label>
                  <input type='text' name = 'credencial_mb' value=".$row['credencial_mb']."></br></br>";
            echo "<label>NOMINA</label>
                  <input type='text' name = 'nomina' value=" .$row['nomina']."></br></br>";
            echo "<label>NOMBRE</label>
                  <input type='text' name = 'apellido_paterno' value=".$row['apellido_paterno'].">
                  <input type='text' name = 'apellido_materno' value=".$row['apellido_materno'].">
                  <input type='text' name = 'nombre' value=".$row['nombre']."></br></br>"; 
            echo "<label>ESTATUS</label>
                  <input type='text' name = 'estatus' value=" .$row['estatus']."></br></br>";
            echo "<label>TIPO DE LICENCIA</label>
                  <input type='text' name = 'tipo_licencia' value=".$row['tipo_licencia']."></br></br>";
            echo "<label>ID DE LICENCIA</label>
                  <input type='text' name = 'id_licencia' value=".$row['id_licencia']."></br></br>";
            echo "<label>VENCIMIENTO DE LICENCIA</label>
                  <input type='date' name = 'vencimiento_licencia' value=".$row['vencimiento_licencia']."></br></br>";
            echo "<input type='submit' value = 'ACEPTAR'> <button><a href='edicion.php'>CANCELAR</a></button>
                  </td>";
            echo "</tr>";
            echo "</form>";
            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>
    
</article>
</section>


</body>
</html>