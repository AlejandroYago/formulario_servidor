<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
$contraseña1=$_POST['password1'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['correo'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="php3.php" method="POST">
        <input hidden type="text" name="usuario" placeholder="usuario" value="<?php echo $usuario?>"/>
        <input hidden type="password" name="password" placeholder="password" value="<?php echo $contraseña?>"/>
        <input hidden type="password" name="password1" placeholder="password" value="<?php echo $contraseña1?>"/>
       
        <input hidden type="text" name="nombre" placeholder="nombre" value="<?php echo $nombre?>"/>
        <input hidden type="text" name="apellidos" placeholder="apellidos" value="<?php echo $apellidos?>"/>
        <input hidden type="text" name="correo" placeholder="e-mail" value="<?php echo $email?>"/>
        
       
        <input type="checkbox" name="deportes[]" value="Futbol"/>Futbol<br>
        <input type="checkbox" name="deportes[]" value="Baloncesto"/>Baloncesto<br>
        <input type="checkbox" name="deportes[]" value="Hockey"/>Hockey<br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>