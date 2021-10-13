<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
$contraseña1=$_POST['password1'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['correo'];



echo $usuario;
echo $contraseña;
echo $contraseña1;

echo $nombre;
echo $apellidos;
echo $email;

foreach($_POST['deportes'] as $seleccionado){
    echo $seleccionado;
}
?>
