<?php
include ("../conexion.php");

$id = $_GET["id"];
$sql = "SELECT * FROM alumnos WHERE id_alumno = '$id'";

?>

<table border="2px"> 
        <tr>
            <th>Grado</th>
            <th>Nombre</th>
            <th>Correo Institucional</th>
            <th>Contraseña</th>
            <th>Edicion</th>
        </tr>
    <?php
        $consulta = mysqli_query($conexion,$sql);
        $count=mysqli_num_rows($consulta);

        if ($count>0){

            
            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr>";
            echo "<td> <input type='text'value=" .$row['grado']. "> </td>";
            echo "<td> <input type='text'value=" .$row['apellido_paterno']. "> 
                 <input type='text'value=" .$row['apellido_materno']. ">
                 <input type='text'value=" .$row['nombre']. "></td>";
            echo "<td><input type='text'value=" .$row['correo_institucional']."></td>";
            echo "<td><input type='text'value=" .$row['pass']."></td>";
            echo "<td> <a href= update.php>actualizar</a>";
            echo "</tr>";
    
            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>
<br>
<button><a href="edicion.php">Regresar</a></button>