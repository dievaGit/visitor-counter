<?php 
//contador de visitas con un archivo txt, es mejor con una BD
//vamos a hacer una funcion que cuente cuantos usuarios entran a la pagina
function contar_usuarios(){
	$archivo = 'contador.txt';

    //primero pregunto si el archivo existe
	if (file_exists($archivo)) {
		//ejecutamos esta funcion para ver que tenemos dentro del archivo y poder contar
		//tomamos el valor que ya tenemos mas 1
		$cuenta = file_get_contents($archivo) + 1;

		//sumamos 1 cada vez que el usuario recarga la pagina
		file_put_contents($archivo, $cuenta);
     
      return $cuenta;
	}else {
		//si el archivo no existe creamos un nuevo archivo inicializado en 1
		file_put_contents($archivo, 1);
		return 1;
	}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="styles.css">
   <title>Contador de Visitas</title>
  
</head>
<body>
   <h1>Contador de Visitas</h1>
   <div class="visitantes">
   	  <p class="numero"><?php echo contar_usuarios(); ?></p>
   	  <p class="texto">Visitas</p>
   </div>	  
</body>
</html> 
