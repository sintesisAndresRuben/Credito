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

$Nombre=$datos['mail_usuario'];
$Clave=$datos['password_usuario'];

$user_id = mysqli_real_escape_string ($dbc, $Nombre);

$psw = mysqli_real_escape_string ($dbc, $Clave);

$sql = $dbc-> query ("SELECT * FROM tbl_usuarios WHERE mail_usuario = '$user_id' AND password_usuario = '$psw'");

if (mysqli_num_rows ($sql)> 0)

{

	echo "Login ok";

}

else {

	echo "Login Error";

}

mysqli_close ($dbc);

?>