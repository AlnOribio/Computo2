<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando una BD</title>
    <link rel="icon" href="imagenes/Logo_inicio.png">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <div class="inicio centered-container">
        <img src="imagenes/logo-1.jpg" class="logo_inicio" alt="">
        <div class="tabla_inicio">
            <h1 class="b">Manipulando una BD</h1>
            <div class="seleccion">
                <?php
                $no_cuenta = $_POST["no_cuenta"];
                $nombre = $_POST["nombre"];
                $apat = $_POST["apat"];
                $amat = $_POST["amat"];
                $semestre = $_POST["semestre"];

                if (!empty($no_cuenta) && !empty($nombre) && !empty($apat) && !empty($amat) && !empty($semestre)) {
                    include "conexion.php";

                    $consulta="insert into alumnos(nocta, nombre, apat, amat, semestre) VALUES ('$no_cuenta','$nombre','$apat','$amat','$semestre')";
                    $conectar->query($consulta);
                    echo "<div class='seleccion'><a href='index.html'>Pagina Principal</a></div>";

                } else {
                    echo "<div class='seleccion'>Ingresa todos los datos por favor</div>";
                    echo "<div class='seleccion'><a href='index.html'>Pagina Principal</a></div>";
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabla = document.querySelector('.tabla_inicio');
            var waveCreated = false;

            tabla.addEventListener('mouseenter', function(event) {
                if (!waveCreated) {
                    var wave = document.createElement('div');
                    wave.className = 'wave';
                    document.body.appendChild(wave);

                    var rect = tabla.getBoundingClientRect();
                    var waveX = rect.left + (rect.width / 2);
                    var waveY = rect.top + (rect.height / 2);

                    wave.style.left = waveX + 'px';
                    wave.style.top = waveY + 'px';

                    setTimeout(function() {
                        wave.style.transform = 'scale(100)';
                        wave.style.opacity = '0';
                    }, 10);

                    waveCreated = true;
                    document.body.classList.add('invertido');
                }
            });

            tabla.addEventListener('mouseleave', function() {
                document.body.classList.remove('invertido');
                waveCreated = false;
            });

            // Adding click event to redirect to index.html
            tabla.addEventListener('click', function() {
                window.location.href = 'index.html';
            });
        });
    </script>
</body>
</html>
