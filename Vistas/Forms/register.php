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
        <form action="Procesos/procesoRegistro.php" id="formulario" method="post">
            <label class="title">Registrarse | </label>

            <a href="login.php" class="link">Ya tengo una cuenta</a><br><br>

            <label for="">Nombre</label><br>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre completo"><br>
            <label for="">Apellidos</label><br>
            <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos"><br>
            <label for="">Tipo de documento</label><br>
            <select name="tipo_docu" id="tipo_docu">
                <option value="">--Seleccionar--</option>
                <option value="Tarjeta de Identidad.">Tarjeta de identidad</option>
                <option value="Cédula de Ciudadanía.">Cédula de ciudadanía</option>
                <option value="Cédula Extranjera">Cédula extranjera</option>
            </select><br>
            <label for="">Número de documento</label><br>
            <input type="text" name="num_docu" id="num_docu" placeholder="Ingrese su número de documento"><br>
            <label for="">Rol</label><br>
            <select name="roles">
                <option value="">--Seleccionar--</option>
                <option value="1">Instructor</option>
                <option value="2">Aprendiz</option>                
            </select><br>
            <label for="">Correo electrónico</label><br>
            <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electrónico"><br>
            <label for="">Contraseña</label><br>
            <input type="password" name="pass" id="pass" placeholder="Cree su contraseña"><br>
            <input type="submit" name="btn" value="Registrarse">
        </form>
    </div>

    <script src="../../../js/formulario.js"></script>

    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>
</body>
</html>