<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/verFichas.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
    <?php 
        include '../navbaruser.php'; 
    ?>
    <div class="contain">
        <div class="cont">            
            <div class="back"><a href="fichas.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a></div>
            <div><h2>Fichas</h2></div>
        </div>
        <table>
            <thead>
                <th>Número de Ficha</th>
                <th>Programa de Formación</th>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#">2141041 <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                    <td>ADSI</td>
                </tr>
                <tr>
                    <td><a href="lista.php">2251038 <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                    <td>ADSI</td>
                </tr>
                <tr>
                    <td><a href="#">3014001 <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                    <td>ADSI</td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>