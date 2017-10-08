<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
 	echo '<p>Hola Mundo</p>';
 	$cont = file_get_contents("formulario.php"); 
 	echo $cont;
 	echo 'Sumo dos variables y realizo la operacion, que es:'
 	$v1=5;
 	$v2=2;
 	
 	$operacio=$v1/$v2;

 	echo $operacio;
 	echo 'metode fantasma';

 ?>
 </body>
</html>