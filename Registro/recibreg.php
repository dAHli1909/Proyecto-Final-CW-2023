<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $contraseña_1=(isset($_POST["contraseña1"]) && $_POST["contraseña1"] != "")? $_POST["contraseña1"] : false;
    $contraseña_2=(isset($_POST["contraseña2"]) && $_POST["contraseña2"] != "")? $_POST["contraseña2"] : false;
    $nombre=(isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $numcuenta=(isset($_POST["numcuenta"]) && $_POST["numcuenta"] != "")? $_POST["numcuenta"] : false;

    if($contraseña_1 == $contraseña_2)
                echo "Datos correctos";
    else 
        echo "Datos érroneos";
    
    ?>
</body>
</html>