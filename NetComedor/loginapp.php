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
		echo "Login ok";
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
		$sql1="SELECT * FROM tbl_usuario_ticket WHERE para_usuario=".$idUsuario;
		if (mysqli_num_rows ($sql1)> 0){
		$datos_usuario=(mysqli_fetch_array($sql1));
		$cantidad=$datos_usuario['cantidad_ticket'];
		echo $cantidad;
		} else{
			echo "0";
		}

	} else {
		echo "Error";
	}


}



// mysqli_close ($dbc);

?>