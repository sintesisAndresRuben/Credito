<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])) {
	header('location: login.php');
}else {
	$id= $_REQUEST['id'];
	$q = "SELECT * FROM tbl_menu WHERE id_menu=$id";
	$tablaMenu = mysqli_query($conexion, $q);
	if (mysqli_num_rows($tablaMenu)>0) {
		while ($menu=mysqli_fetch_array($tablaMenu)){
						$ruta=$menu['ruta_menu'];
					}
				}
	unlink("$ruta");
	$q ="DELETE FROM `tbl_menu` WHERE `tbl_menu`.`id_menu` = $id";
	mysqli_query($conexion, $q);
	header('location:menu.php');
}
?>