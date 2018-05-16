<?php 
// session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<title>Comedor</title>
<html lang="es">
<?php
		//Insertamos el header general
require_once 'foothead/header.php';
?>

<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<?php
$buscarPadre = "SELECT * FROM `tbl_padres_alu_profe` WHERE id_usu_dep=".$_SESSION['user']['id_usuario'];
$result = mysqli_query($conexion,$buscarPadre);

if (mysqli_num_rows($result)>1) {
	while ($option = (mysqli_fetch_array($result))){
		$hijos['hijos']=$option;
		
		// AQUI HAY QUE METER LAS OPCIONES DE ELEGIR AL HIJ@

	// Fin while
	}

// Fin num rows
} else{
?>
	<a href="inscripcion.php">

<?php
// Fin else
}

?>






</div>

<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>

</html>