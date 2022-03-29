<?php

//-------------
//PRACTICA
//Crea una API cliente que dado una API de ejemplo (la de chistes de chuck norris), te devuelva cada vez un chiste aleatorio de chuck norris
//-------------


//Cogemos el contenido que nos devuelve la API en JSON y lo pasamos a array asociativo
$array_json = json_decode(file_get_contents("http://api.icndb.com/jokes/random"), TRUE);

//print_r($array_json); //Para ver como devuelve los datos el JSON

//Cogemos chiste
$chiste = $array_json["value"]["joke"];

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" name="Chistes Chuck Norris" content="Chistes">
		<title></title>
	</head> 
	<body>
        <p> <?php echo $chiste ?> </p>
	</body>
</html>