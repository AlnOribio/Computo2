<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registro</title>
    <link rel="icon" href="imagenes/Logo_inicio.png">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <div class="inicio centered-container">
        <img src="imagenes/logo-1.jpg" class="logo_inicio" alt="">
        <div class="tabla_inicio">
            <h1 class="b">Actualizar Registro</h1>
            <div class="seleccion">
                <?php
                include "conexion.php";
                $cta = $_POST["nocta"];
                $nombre = $_POST["nombre"];
                $paterno = $_POST["apat"];
                $materno = $_POST["amat"];
                
                $consulta="update alumnos set nombre = '$nombre', apat = '$paterno', amat = '$materno' where nocta= '$cta'";
                $conectar->query($consulta);
                ?>
                <div align="center" class="b">Registro Actualizado</div>
            </div>
            <div align="center" class="seleccion"><a href="index.html">Pagina Principal</a></div>
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

            tabla.addEventListener('click', function() {
                window.location.href = 'index.html';
            });
        });
    </script>
</body>
</html>
