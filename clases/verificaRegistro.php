<?php

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$rutUser = $_POST["rut"];
$telefono = $_POST["telefono"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$email = $_POST["email"];

function datosRegistros(){

	if(isset($_POST["rut"], $_POST["nombres"], $_POST["apellidos"], $_POST["telefono"], $_POST["password"],
		$_POST["password2"],$_POST["email"];)) {
		return true;
	}
	return false;
}

function datosLogin(){

	if(isset($_POST["rut"],  $_POST["password"])) {
		return true;
	}
	return false;
}


function validaRut($rutUser){
	//Valida RUT
	if(strpos($rut,"-")==false){
		$RUT[0] = substr($rutUser, 0, -1);
		$RUT[1] = substr($rutUser, -1);
	}else{
		$RUT = explode("-", trim($rutUser));
	}
	$elRut = str_replace(".", "", trim($RUT[0]));
	$factor = 2;
	for($i = strlen($elRut)-1; $i >= 0; $i--):
		$factor = $factor > 7 ? 2 : $factor;
	$suma += $elRut{$i}*$factor++;
	endfor;
	$resto = $suma % 11;
	$dv = 11 - $resto;
	if($dv == 11){
		$dv=0;
	}else if($dv == 10){
		$dv="k";
	}else{
		$dv=$dv;
	}
	if($dv == trim(strtolower($RUT[1]))){
		return true;
	}else{
		return false;
	}
}

function validaFono ($telefono) {
	// Valida el numero de telefono
	if (validaNumero($telefono)){
		if (preg_match("^[2|345679][0-9]{8}$", $telefono)){
			return true;
		}
		return false;
	}
	return false;
}

function validaSoloTexto ($varTexto) {
	//Valida que el campo solo sean letras requiere variable a usar
	if (validaNoVacio($varTexto)){
		
		if (preg_match("^[a-zA-Z\-]",$varTexto)){
			return true;
		}

		return false;
	}

	return false;
}

function validaPassword($pass){
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $pass)) {
		return false;
	  }
	  
	  	return true;
}

function comparaPassword($pass1, $pass2){
	if(validaPassword($pass1) && validaPassword($pass2)){
		if($pass1 == $pass2){
			return true;
		}else{
			echo "Las claves no coinciden";
			return false;
	}
	echo "La clave no cumple con los requisitos de seguridad necesarios";
		return false;
	}

}

function validaNumero($numero){
	if(is_numeric($numero) && is_int($numero)){
		if($numero > 0){
			return true;
		}
		return false;
	}
	return false;
}

function validaCorreo($email){
	//Valida Email
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		return true;
	}
	return false;
}



/*
function numeroCuotas($cuotasCredito){
	if(validaNumero($cuotasCredito)){
		if ($cuotasCredito >= 6 && $cuotasCredito <= 120 ) {
			return true;
		}
		return false;
	}
	return false
}

function interesPrestamo($interes){
	if(validaNumero($interes)){
		if ($cuotasCredito == 4) {
			return true;
		}
		return false;

		return false;
	}

	function validaIngreso ($sueldoCliente){
		if(validaNumero($montoSolicitado)){
			if($montoSolicitado > 149999){
				return true;
			}
			return false;
		}
		return false;
	}

	function valida
*/



	?>