<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="imagenes/Logo_inicio.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
</head>
<body>
    <div class="formulario formulario_m">
        <img class="img" src="imagenes/logo-1.jpg" class="Logo"  alt="">
        <fieldset class="fieldset fieldset_ba">
            <h1>Datos del Material</h1>
            <fieldset class="fieldset_input fieldset_input_bm">
            <table class="tabla_m" border="5"> 
  <tr bgcolor="#1B1C30" style="color:#FF6";><td>No. Material</td><td>Material</td><td>Cantidad</td><td>Descripcion</td></tr>
<?php
   $CLAVE = $_POST["CLAVE1"];
   include "conexion.php";
   $myconsulta=$conectar->query("select * from material where mocta='$CLAVE' ");
   $filas=$myconsulta->num_rows;      
   if($filas >= 1) 
   {
      while($lafila=$myconsulta->fetch_assoc()) 
      {
?>
<tr bgcolor="#D8DFD0" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#D8DFD0';">
     <td> <?php echo $lafila['mocta']; ?> </td> 
     <td> <?php echo $lafila["material"]; ?></td>
     <td> <?php echo $lafila['cantidad']; ?> </td>
     <td> <?php echo $lafila['descripcion']; ?> </td>
  </tr>

<?php
      }//fin del while
   } else 
   {
     echo "<BR><h1> Registro no encontrado </h1><BR>"; 
     echo "<a href=buscar.html>Volver a buscar\n"; 
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