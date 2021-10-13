<?php
$nombre=$_POST['usuario'];
$contraseña=$_POST['password'];
$contraseña1=$_POST['password1'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="php2.php" method="POST">
        <input hidden type="text" name="usuario" placeholder="usuario" value="<?php echo $nombre?>"/>
        <input hidden type="password" name="password" placeholder="password" value="<?php echo $contraseña?>"/>
        <input hidden type="password" name="password1" placeholder="password" value="<?php echo $contraseña1?>"/>
       
        <input type="text" name="nombre" placeholder="nombre"/>
        <input type="text" name="apellidos" placeholder="apellidos"/>
        <input type="text" name="correo" placeholder="e-mail"/>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>