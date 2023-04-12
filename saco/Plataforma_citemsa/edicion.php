<?php
include ("../conexion.php");

//consulta
$sql="SELECT * FROM alumnos";

 $consulta=$conexion->query($sql);

 $count=mysqli_num_rows($consulta);
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
        if ($count>0){

            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr>";
            echo "<td>" .$row['grado']. "</td>";
            echo "<td>".$row['apellido_paterno']. ' ' .$row['apellido_materno']. ' ' .$row['nombre']."</td>";
            echo "<td>".$row['correo_institucional']."</td>";
            echo "<td>".$row['pass']."</td>";
            echo "<td> <a href= actualizar.php?id=" .$row['id_alumno']. ">editar</a> |
                       <a href= eliminar.php?id=" .$row['id_alumno']. ">eliminar</a> </td> ";
            echo "</tr>";

            
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>
<br>
<button><a href="index.php">Regresar</a></button>