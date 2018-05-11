<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])) {
	header('location: index.php');
}else {
	$id= $_REQUEST['id'];
	$q = "SELECT * FROM tbl_normativa WHERE id_normativa=$id";
	$tablaNormativa = mysqli_query($conexion, $q);
	if (mysqli_num_rows($tablaNormativa)>0) {
		while ($normativa=mysqli_fetch_array($tablaNormativa)){
						$ruta=$normativa['ruta_normativa'];
					}
				}
	unlink("$ruta");
	$q ="DELETE FROM `tbl_normativa` WHERE `tbl_normativa`.`id_normativa` = $id";
	mysqli_query($conexion, $q);
	header('location:normativa.php');
}
?>