<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
<?php

class qwerty {

	function azerty($cadena){
		for($x=0; $x<4; $x++){
		$cadena = base64_encode($cadena);
		}
		return $cadena; //Devuelve el string encriptado
	}

	function ytreza($cadena){
		for($x=0; $x<4; $x++){
			$cadena = base64_decode($cadena);
		}
		return $cadena;  //Devuelve el string desencriptado
	}
}
?>
</body>
</html>
