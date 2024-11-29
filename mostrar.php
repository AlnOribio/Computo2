<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="imagenes/Logo_inicio.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando una BD</title>
</head>
<body>
    <div class="formulario formulario_m">
        <img class="img" src="imagenes/logo-1.jpg" class="Logo" alt="">
        <h1 class="h1 h1_m">Listado</h1>
        <fieldset class="fieldset fieldset_m">
            <fieldset class="fieldset_input">
                <table class="tabla_m" border="5">
                    <tr bgcolor="#1B1C30" style="color:#FF6;">
                        <td>No. Cuenta</td>
                        <td>Nombre</td>
                        <td>Semestre</td>
                    </tr>
                    <?php
                        include "conexion.php";
                        $myconsulta=$conectar->query("select * from alumnos");
                        $filas=$myconsulta->num_rows;        
                        if($filas >= 1)
                        {
                            while($lafila=$myconsulta->fetch_assoc())
                            {
                    ?>  
                    <tr bgcolor="#D8DFD0" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#D8DFD0';">
                        <td> <?php echo $lafila['nocta']; ?> </td>
                        <td> <?php echo $lafila["nombre"]." ".$lafila["apat"]." ".$lafila["amat"]; ?></td>
                        <td> <?php echo $lafila['semestre']; ?> </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </fieldset>
        </fieldset>
    </div>
    <div class="formulario2 formulario2_m">
        <fieldset class="fieldset2 fieldset2_m">
            <fieldset class="fieldset_input">
                <table class="tabla_m" border="5">
                    <tr bgcolor="#1B1C30" style="color:#FF6;">
                        <td>No. Material</td>
                        <td>Material</td>
                        <td>Cantidad</td>
                        <td>descripcion</td>
                    </tr>
                    <?php
                        include "conexion.php";
                        $myconsulta=$conectar->query("select * from material");
                        $filas=$myconsulta->num_rows;        
                        if($filas >= 1)
                        {
                            while($lafila=$myconsulta->fetch_assoc())
                            {
                    ?> 
                    <tr bgcolor="#D8DFD0" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#D8DFD0';">
                        <td> <?php echo $lafila['mocta']; ?> </td>
                        <td> <?php echo $lafila["material"]; ?> </td>
                        <td> <?php echo $lafila['cantidad']; ?> </td>
                        <td> <?php echo $lafila['descripcion']; ?> </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </fieldset>
        </fieldset>
        <footer class="footer_m">
            <a class="a_m" href='index.html'>Pagina Principal</a>
            <h3 class="h3 h3_m">© Copyright FESC-UNAM 2024. Sitio Administrado por [Infonenes]</h3>
        </footer>
    </div>
</body>
</html>
