<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO DE GUARDAR IMAGEN</title>
</head>
<body>
    <center> <br> <br> <br>
        <form action="guardar.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="NOMBRE" value="">
            <input type="file" name="imagen">
            <input type="submit" value="ACEPTAR">
        </form>

    </center>



</body>
</html>