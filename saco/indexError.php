<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo_login.css">
    <title>Login con session</title>
</head>

<body>
<div>
    <header>
        
    </header>
</div>
    
<div  >
        <form method="POST" action="login.php" class="login">
                <h3 color: red>LOGIN ERROR</h3>
            <div class="form-group">
                <label>Credencial MB</label><br>
                <input type="text" name="credencial" placeholder="Escriba su correo" required>
            </div>
            <div class="form-group">
                <label>Contraseña</label><br>
                <input type="text" name="pass" placeholder="Escriba su contraseña" required>
            </div>
            
            <button type="submit" >Inicar Sesion</button>
        </form>
</div>

</body>

</html>