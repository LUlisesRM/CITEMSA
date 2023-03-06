<?php
include("cn.php");
$PERSONAL = "SELECT * FROM PERSONAL";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Panel de Edicion</title>
        <meta name="viewport" 
        content="width=device-width,
        user-scalable=no, initial-scale=1.0, maximun-
        scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>

        <div class="container-table container-table--edit"> 
            <!--Columnas-->
            <div class="table__title table__title--edit">DATOS DEL PERSONAL<a href="index.php" class="title_edit">Regresar</a></div>
            <div class="table__header">ID NOMINA</div>
            <div class="table__header">APELLIDO PATERNO</div>
            <div class="table__header">APELLIDO MATERNO</div>
            <div class="table__header">NOMBRE(S)</div>
            <div class="table__header">ID LICENCIA</div>
            <div class="table__header">VENCIMIENTO LICENCIA</div>
            <div class="table__header">Operacion</div>
            
            <!--Datos-->
            <?php $resultado = mysqli_query($conexion,$PERSONAL);
            while($row=mysqli_fetch_assoc($resultado)){?>
            <!--Operador1-->
            <div class="table__item"><?php echo $row["ID_NOMINA"];?></div> 
            <div class="table__item"><?php echo $row["APELLIDO_PATERNO"];?></div>
            <div class="table__item"><?php echo $row["APELLIDO_MATERNO"];?></div>
            <div class="table__item"><?php echo $row["NOMBRE"];?></div>
            <div class="table__item"><?php echo $row["ID_LICENCIA"];?></div>
            <div class="table__item"><?php echo $row["VENCIMIENTO_LICENCIA"];?></div>
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["ID_NOMINA"];?>" class="table__item__link">editar</a> |
                <a href="eliminar.php?id=<?php echo $row["ID_NOMINA"];?>" class="table__item__link">eliminar</a>
           </div>
            <?php } ?>
        </div>
    </body>





</html>