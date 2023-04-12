<?php
include("index.php");

echo "<h2>REGISTRAR OPERADOR</h2>
            <form action ='insertar.php' method='post'>
                <lable>CREDENCIAL METROBUS:</lable>
                <input name='credencial_mb' type='text'>
                <lable>NOMINA:</lable>
                <input name='nomina' type='int'>
                <lable>APELLIDO PATERNO:</lable>
                <input name='apellido_paterno' type='text'>
                <lable>APELLIDO MATERNO:</lable>
                <input name='apellido_materno' type='text'>
                <lable>NOMBRE:</lable>
                <input name='nombre' type='text'>
                <lable>ESTATUS:</lable>
                <input name='estatus' type='text'>
                <lable>CORREO INSTITUCIONAL:</lable>
                <input name='correo_institucional' type='text'>
                <lable>CONTRASEÑA:</lable>
                <input name='pass' type='text'>
                <input type='submit' value ='Registrar'>
                 
            </form> 
            <button><a href='index.php'>Cancelar</a></button>";


?>