<?php 
// session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<title>Selección Hijo</title>
<html lang="es">
<?php
		//Insertamos el header general
require_once 'foothead/header.php';
?>

<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<div class="container">
	<br></br>
	<h3>Seleccione su Hijo/a</h3>
	<?php
	$idPadre=$_SESSION['user']['id_usuario'];
//Query para BUSCAR cuantos hijos pertenece al padre que ha iniciado sesion.
	$buscarPadre = "SELECT * FROM `tbl_padres_alu_profe` WHERE id_usu_dep=".$idPadre;
	$resultPadre = mysqli_query($conexion,$buscarPadre);
//Hacer una consulta que me salgan los hijos de los padres pero que no me aparezcan los hijos por cada reserva que hacen entre servicio y ticket.

//Query para RECOGER los datos de los hijos que pertenecen al padre que ha iniciado sesion.
	// $datosHijos= "SELECT tbl_usuarios.* FROM tbl_usuarios INNER JOIN (SELECT id_usuario FROM tbl_padres_alu_profe WHERE id_usu_dep=".$idPadre.") q ON tbl_usuarios.id_usuario=q.id_usuario INNER JOIN tbl_usuario_ticket ON tbl_usuarios.id_usuario=tbl_usuario_ticket.para_usuario WHERE tbl_usuario_ticket.id_usuario=".$idPadre;
	$datosHijos="SELECT tbl_usuarios.* FROM tbl_usuarios INNER JOIN (SELECT id_usuario FROM tbl_padres_alu_profe WHERE id_usu_dep=".$idPadre.") q ON tbl_usuarios.id_usuario=q.id_usuario INNER JOIN tbl_usuario_ticket ON tbl_usuarios.id_usuario=tbl_usuario_ticket.para_usuario WHERE tbl_usuario_ticket.id_usuario=".$idPadre." GROUP BY tbl_usuario_ticket.id_usuario";
	$resultHijos = mysqli_query($conexion,$datosHijos);
	?>

	<div class="col-sm12">
		<div class="row justify-content-md-center">
			<?php
			if (mysqli_num_rows($resultPadre)>1) {
				while ($optionPadre = (mysqli_fetch_array($resultPadre))){
		// echo "Tienes mas de un hijo".$buscarPadre;
					while ($optionHijo = (mysqli_fetch_array($resultHijos))){
						$hijos['hijos']=$optionHijo;
						?>
						<div class="col-sm10 ml-5 rectanguloArriba rectanguloAbajo homeimage">
							<a href="gestionHijo.php?idHijo=<?php echo $hijos['hijos']['id_usuario'];?>">
								<?php 
								if ($hijos['hijos']['sexo_usuario']=='hombre') {
									?>
									<img src="img/sexo/niño.png" alt="">
									<?php
								} else{
									?>
									<img src="img/sexo/niña.png" alt="">
									<?php
								}
								?>
								<p><?php echo $hijos['hijos']['nombre_usuario']." ".$hijos['hijos']['apellido_usuario']; ?></p></a>
							</div>
							<?php
						}
					}
					// Fin while
					?>
				</div>
			</div>
		</div>

		<?php

// Fin num rows
	} else {
		while ($optionPadre = (mysqli_fetch_array($resultPadre))){
			while ($optionHijo = (mysqli_fetch_array($resultHijos))){
				$hijos['hijos']=$optionHijo;
				// $1Hijo=$hijos['hijos']['id_usuario'];
				header("location: gestionHijo.php?idHijo=".$hijos['hijos']['id_usuario']);

			}
		}

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