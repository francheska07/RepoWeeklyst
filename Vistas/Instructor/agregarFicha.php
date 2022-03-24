<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/addficha.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
    <?php 
        include '../navbaruser.php'; 
    ?>
    <div class="contain">
        <div>
            <form action="">
            <div class="back"><a href="fichas.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a>
            <label for="" class="title">Agregar Fichas</label></div><br><br>
                <label for="">Nombre del programa de formación</label><br>
                <input type="text" placeholder="Escriba el nombre del programa"><br>
                <label for="">Número de Ficha</label><br>
                <input type="text" placeholder="Ingrese el número de la ficha correspondiente al programa"><br><br>
                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>