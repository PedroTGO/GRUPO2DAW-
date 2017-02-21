# GRUPO2DAW17
<?php
/*Para instalar la aplicacion es necesario editar el archivo Config.php para introducir los datos de nuestra base de datos. 
A continuacion ejecutar el fichero  instalacion.php. */

include_once("../app/Config.php");

$host=Config:: $mvc_bd_hostname;
$user=Config:: $mvc_bd_usuario;
$pass=Config:: $mvc_bd_clave;


$conexion=mysqli_connect($host,$user,$pass)or die("Imposible conectar");

if(mysqli_query($conexion,"CREATE DATABASE IF NOT EXISTS u108111224_pres2")){
	echo "se ha creado la base de datos alimentos para la aplicación";
}else{
	echo "Error al crear la base de datos";

		}

mysqli_select_db($conexion,"u108111224_pres2");
$tabla_alimentos="CREATE TABLE IF NOT EXISTS alimentos(
`id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,0) NOT NULL,
  `proteina` decimal(10,0) NOT NULL,
  `hidratocarbono` decimal(10,0) NOT NULL,
  `fibra` decimal(10,0) NOT NULL,
  `grasatotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";


if(mysqli_query($conexion,$tabla_alimentos)){
	echo "se ha creado o ya existe la tabla usuario para la aplicacion";
}else{
	echo "error en la creacion de la tabla";
}

	?>
