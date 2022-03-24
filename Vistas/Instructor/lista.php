<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/lista.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
    <?php 
        include '../navbaruser.php'; 
    ?>
    <div class="contain">
        <div class="cont">            
            <div class="back"><a href="verFichas.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a></div>
            <div><h2>Lista</h2></div>
        </div>
        <table>
            <thead>
                <th>Aprendiz</th>
                <th>Asistencia</th>
            </thead>
            <tbody>
                <tr>
                    <td>Pepito Juarez</td>
                    <td><a href="#" class="check"><i class="fa-solid fa-square-check"></i></a><a href="#" class="fail"><i class="fa-solid fa-square-xmark"></i></a></td>
                </tr>
                <tr>
                    <td>Juanito Martinez</td>
                    <td><a href="#" class="check"><i class="fa-solid fa-square-check"></i></a><a href="#" class="fail"><i class="fa-solid fa-square-xmark"></i></a></td>
                </tr>
                <tr>
                    <td>Bryan Díaz</td>
                    <td><a href="#" class="check"><i class="fa-solid fa-square-check"></i></a><a href="#" class="fail"><i class="fa-solid fa-square-xmark"></i></a></td>
                </tr>
                <tr>
                    <td>Juliana Gómez</td>
                    <td><a href="#" class="check"><i class="fa-solid fa-square-check"></i></a><a href="#" class="fail"><i class="fa-solid fa-square-xmark"></i></a></td>
                </tr>
                <tr>
                    <td>Pedro Sánchez</td>
                    <td><a href="#" class="check"><i class="fa-solid fa-square-check"></i></a><a href="#" class="fail"><i class="fa-solid fa-square-xmark"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>