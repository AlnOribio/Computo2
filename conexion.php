
<?php
$host="localhost"; //en todos los casos debe ser localhost
$usuario="root";//usuario de la base de datos
$password="";//password si lo tiene y si no es vacio
$basedatos="gimnasio";//base de datos a utilizar
/***********************************
establece la conexion 
***********************************/
$conectar= new mysqli($host,$usuario,$password,$basedatos);
//evalua si se estabeció la conexion
if($conectar->connect_error)
{
  echo "Error en la conexion";
}

else {
echo "\tConexion exitosa!!!\n";
}
/*$conectar->close(); 
la conexion debe permanecer abierta para las opciones de index.html*/
?>