<?php
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: index.php');
}

?>