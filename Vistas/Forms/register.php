<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/register.css">
    <title>Registrarse</title>
</head>
<body>
    <?php 
        include '../navbar.php'; 
    ?>
    <div class="contain">
        <form action="">
            <label class="title">Registrarse | </label>
            <a href="login.php" class="link">Ya tengo una cuenta</a><br><br>
            <label for="">Nombre</label><br>
            <input type="text" placeholder="Ingrese su nombre completo"><br>
            <label for="">Apellidos</label><br>
            <input type="text" placeholder="Ingrese sus apellidos"><br>
            <label for="">Tipo de documento</label><br>
            <select name="" id="">
                <option value="">--Seleccionar--</option>
                <option value="">Tarjeta de identidad</option>
                <option value="">Cédula de ciudadanía</option>
                <option value="">Cédula extranjera</option>
            </select><br>
            <label for="">Número de documento</label><br>
            <input type="text" placeholder="Ingrese su número de documento"><br>
            <label for="">Rol</label><br>
            <select name="" id="">
                <option value="">--Seleccionar--</option>
                <option value="">Aprendiz</option>
                <option value="">Instructor</option>
            </select><br>
            <label for="">Correo electrónico</label><br>
            <input type="email" placeholder="Ingrese su correo electrónico"><br>
            <label for="">Contraseña</label><br>
            <input type="password" placeholder="Cree su contraseña"><br>
            <input type="submit" value="Registrarse">
        </form>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>
</body>
</html>