<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión formulario </title>
</head>
<body>
<h1 align="center">Holaaaaa!!!</h1>
        <fieldset>
            <legend align="center"></legendalign>Inicio de sesión de tu cuenta</legend> 
            <br><br>
            <label for="usuario">Nombre de usuario:</label>
                <input id="usuario" name="usuario" type="text" required/>
            <br><br>
            <label for="contraseña">Contraseña:</label>
                <input id="contraseña" name="contraseña" type="text" required/>
            <br><br>
            <button type="submit" class="boton">Acceder</button>
            <button type="reset" class="boton">Borrar</button>
            <button class="boton">Crear cuenta</button>
            <!-- Aquí se deben de revisar con la base de datos si existe o si no existe
            if(usuario no encontrado en base de datos){
                Crear un nuevo atributo en la entidad
            } else{
                *anuncio de que ya existe esa cuenta y que puedes iniciar sesion*
            }
            y los botones deben de redireccionar
        
        -->
        </fieldset>
    </form> 
</body>
</html>