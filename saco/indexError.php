<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo_login.css">
    <title>Login con session</title>
</head>

<body class=fondo>
<div>
    <header>

    </header>
</div>
    
<div >
    <form method="POST" action="login.php" class="login">
        <div>
            <img src="media/LOGO_MBL5.png" alt="LOGO CITEMSA" width = "120px" align="left">
            <a href= "../inicio/index.php"><img src="media/logo_citemsa.png" alt="LOGO CITEMSA" width = "100px" align="right"></a> <br><br>
        </div>

        <div>
            <h4 align="center" > <FONT FACE="Arial Unicode MS" SIZE=3 COLOR="red">USUARIO Y/O CONTRASEÑA INCORRECTA</FONT></h4>
        </div>
        
        <div class="form-group">
            <div>
                <label>Usuario</label><br>
                <input name="credencial" placeholder="Escriba su credencial de Metrobus" required size="47">
            </div>
            <div>
             <label>Contraseña</label><br>
             <input type="password" name="pass" placeholder="Escriba su contraseña" required size="47">
            </div><br>
            <div align="center">
             <button type="submit" >Inicar Sesion</button>
            </div>
        </div>
        
    </form>
</div>

</body>

</html>