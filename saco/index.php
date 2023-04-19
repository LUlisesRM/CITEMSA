<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo_login.css">
    <title>Login</title>
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
            <img src="media/logo_citemsa.png" alt="LOGO CITEMSA" width = "100px" align="right"> <br><br>
        </div>
        <div class="form-group">
            <div>
                <label>Credencial MB</label><br>
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