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
            <h1 class="b">Material registrado</h1>
            <div class="seleccion">
                <?php
                $no_material = $_POST["no_material"];
                $Material = $_POST["material"];
                $Cantidad = $_POST["cantidad"];
                $descripcion = $_POST["descripcion"];

                if (!empty($no_material) && !empty($Material) && !empty($Cantidad) && !empty($descripcion)) {
                    include "conexion.php";

                    $consulta="insert into material(mocta, material, cantidad, descripcion) values ('$no_material','$Material','$Cantidad','$descripcion')";
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
