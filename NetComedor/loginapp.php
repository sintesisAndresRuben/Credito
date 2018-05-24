<?php

define ('dbuser', 'root'); 
define ('dbpw', ''); 
define ('dbhost', 'localhost'); 
define ('dbname', 'bd_comedor'); 
$dbc = mysqli_connect ("localhost", "root", "", "bd_comedor"); if (! $dbc) {

	die("DATABASE CONNECTION FAILED: " .mysqli_error($dbc));

	exit();

}

$dbs = mysqli_select_db ($dbc, dbname);

if (! $dbs) {

	die("DATABASE SELECTION FAILED: " .mysqli_error($dbc));

	exit();

}

$datos=$_REQUEST;

if (isset($datos['mail_usuario'])) {
	

	$Nombre=$datos['mail_usuario'];
	$Clave= md5($datos['password_usuario']);

	$user_id = mysqli_real_escape_string ($dbc, $Nombre);

	$psw = mysqli_real_escape_string ($dbc, $Clave);

	$sql = $dbc-> query ("SELECT * FROM tbl_usuarios WHERE mail_usuario = '$user_id' AND password_usuario = '$psw'");

	if (mysqli_num_rows ($sql)> 0){
		$datos_usuario=(mysqli_fetch_array($sql));
		$idEtapa=$datos_usuario['id_etapa'];
		if ($idEtapa==15) {
			echo "Login Padres";
		} else {
			echo "Login ok";

		}
		// PONER UN IF QUE SI SON PADRES LE APAREZCA UN ALERT CON: Disculpe, la aplicacion esta desarrollada para los alumnos y personal
	} else {
		echo "Login Error";
	}
}



if (isset($datos['mail'])) {
	$Nombre=$datos['mail'];
	$username = mysqli_real_escape_string ($dbc, $Nombre);

	$sql = $dbc-> query ("SELECT * FROM tbl_usuarios WHERE mail_usuario = '$username'");

	if (mysqli_num_rows ($sql)> 0){
		$datos_usuario=(mysqli_fetch_array($sql));
		$idUsuario=$datos_usuario['id_usuario'];
		// echo $idUsuario;
		// Aqui hacer una consulta para recoger el numero de tickets del usuario y devolverselo con un echo
		$sql1= $dbc-> query ("SELECT * FROM tbl_usuario_ticket WHERE para_usuario='$idUsuario'");
		if (mysqli_num_rows ($sql1)> 0){
			$usuTicket=(mysqli_fetch_array($sql1));
			$cantidad=$usuTicket['cantidad_ticket'];
			echo $cantidad;
		} else{
			echo "0";
		}

	} else {
		echo "Error2";
	}
}


if (isset($datos['resul'])) {

	$codigo=$datos['resul'];
	$nombre=$datos['mailU'];

	$code = mysqli_real_escape_string ($dbc, $codigo);
	$username = mysqli_real_escape_string ($dbc, $nombre);

	$comprobarCodigo = $dbc-> query ("SELECT * FROM `tbl_qr` WHERE codigo='$code'");

	if (mysqli_num_rows ($comprobarCodigo)> 0){
		
		$selectUser = $dbc-> query ("SELECT * FROM tbl_usuarios WHERE mail_usuario = '$username'");

		if (mysqli_num_rows ($selectUser)> 0){
			$datos_usuario=(mysqli_fetch_array($selectUser));
			$idUsuario=$datos_usuario['id_usuario'];
			$dbc-> query ("UPDATE tbl_usuario_ticket SET cantidad_ticket=cantidad_ticket-1 WHERE para_usuario=$idUsuario");

			$verUsus= $dbc-> query ("SELECT * FROM tbl_usuario_ticket WHERE para_usuario='$idUsuario'");
			if (mysqli_num_rows ($verUsus)> 0){
				$usuTicket=(mysqli_fetch_array($verUsus));
				$cantidad=$usuTicket['cantidad_ticket'];
				echo $cantidad;
			} else{
				echo "0";
			}


		} else {
			echo "Error actualizar";
		}


	} else {
		echo "Inexistente";
	}

}


// mysqli_close ($dbc);

?>