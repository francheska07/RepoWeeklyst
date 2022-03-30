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
        <form action="" id="formulario" >
            <label class="title">Registrarse | </label>
            <a href="login.php" class="link">Ya tengo una cuenta</a><br><br>
            <label for="">Nombre</label><br>
            <input id="nombre" type="text" placeholder="Ingrese su nombre completo"><br>
            <label for="">Apellidos</label><br>
            <input id="apellido" type="text" placeholder="Ingrese sus apellidos"><br>
            <label for="">Tipo de documento</label><br>
            <select name="" id="tipocedula" >
                <option value="">--Seleccionar--</option>
                <option value="1">Tarjeta de identidad</option>
                <option value="2">Cédula de ciudadanía</option>
                <option value="3">Cédula extranjera</option>
            </select><br>
            <label for="">Número de documento</label><br>
            <input id="documento" type="text" placeholder="Ingrese su número de documento"><br>
            <label for="">Rol</label><br>
            <select name="rol" id="rol">
                <option value="">--Seleccionar--</option>
                <option value="1">Aprendiz</option>
                <option value="2">Instructor</option>
            </select><br>
            <label for="">Correo electrónico</label><br>
            <input id="email" type="email" placeholder="Ingrese su correo electrónico"><br>
            <label   for="">Contraseña</label><br>
            <input id="Contraseña"  type="password" placeholder="Cree su contraseña"><br>
            <input type="submit" value="Registrarse">
        </form>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
    <script src="../../js/validacionRegistro.js"></script>
</body>
</html>
</body>
</html>