<HTML>
<link rel="stylesheet" href="style.css">
<img src="imagenes/logo-1.jpg" class="Logo"  alt="">
<h1>
<CENTER>
Datos del Material
</h1>
</CENTER>
<BR>
<center>
<table border="5"> 
  <tr bgcolor="#1B1C30" style="color:#FF6";><td>No. Material</td><td>Material</td><td>Cantidad</td><td>Descripcion</td></tr>
<?php
   $CLAVE = $_POST["CLAVE"];
   include "conexion.php";
   $myconsulta=$conectar->query("select * from material where mocta='$CLAVE' ");
   $filas=$myconsulta->num_rows;      
   if($filas >= 1) 
   {
      while($lafila=$myconsulta->fetch_assoc()) 
      {
?>
<tr bgcolor="#CEF6F5" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#CEF6F5';">
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
<br>
<a href='index.html'>Pagina Principal</a> //link a pagina principal
</center>
</HTML>