<?php

class qwerty {

	function azerty($cadena){
		for($x=0; $x<10; $x++){
		$cadena = base64_encode($cadena);
		}
		return $cadena; //Devuelve el string encriptado
	}

	function ytreza($cadena){
		$decrypted = base64_decode($cadena);
		return $decrypted;  //Devuelve el string desencriptado
	}
}