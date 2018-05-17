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
<div class="container" style="background-color: gray;">
	<?php
	$idPadre=$_SESSION['user']['id_usuario'];
//Query para BUSCAR cuantos hijos pertenece al padre que ha iniciado sesion.
	$buscarPadre = "SELECT * FROM `tbl_padres_alu_profe` WHERE id_usu_dep=".$idPadre;
	$resultPadre = mysqli_query($conexion,$buscarPadre);

//Query para RECOGER los datos de los hijos que pertenecen al padre que ha iniciado sesion.
	$datosHijos= "SELECT tbl_usuarios.* FROM tbl_usuarios INNER JOIN (SELECT id_usuario FROM tbl_padres_alu_profe WHERE id_usu_dep=$idPadre) q ON tbl_usuarios.id_usuario=q.id_usuario";
	$resultHijos = mysqli_query($conexion,$datosHijos);



	if (mysqli_num_rows($resultPadre)>1) {
		while ($optionPadre = (mysqli_fetch_array($resultPadre))){
		// echo "Tienes mas de un hijo".$buscarPadre;
			while ($optionHijo = (mysqli_fetch_array($resultHijos))){
				$hijos['hijos']=$optionHijo;
				?>
				<a href="inscripcionHijo.php?idHijo=<?php echo $hijos['hijos']['id_usuario'];?>"><?php echo $hijos['hijos']['nombre_usuario']; ?></a>
				
				<?php
			}



	// Fin while
		}

// Fin num rows
	} else {
		header("location: inscripcionHijo.php");

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