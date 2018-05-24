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

if (isset($datos['codigo'])) {
	

	$cod=$datos['codigo'];

	$codigo = mysqli_real_escape_string ($dbc, $cod);

	$select=$dbc-> query ("SELECT * FROM tbl_qr");

	if (mysqli_num_rows ($select)> 0){
		$dbc-> query ("UPDATE tbl_qr SET codigo=$codigo,fecha=CURRENT_TIMESTAMP");
	} else {
		$dbc-> query ("INSERT INTO tbl_qr (id_qr, codigo, fecha) VALUES (NULL, '$codigo', CURRENT_TIMESTAMP)");	
	}

	
}





// mysqli_close ($dbc);

?>