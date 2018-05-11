<?php 
// session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
?>
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<title>NetComedor</title>
<html lang="es">
<?php
		//Insertamos el header general
require_once 'foothead/header.php';

?>

<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<div class="container">

	<div class="col-sm12">
		<div class="col-sm10">
			<div class="row justify-content-md-center">
				<div class="col-sm4 rectanguloArriba homeimage">
					<a href="menu.php"><img src="img/home/menu.jpg"/></a>
				</div>
				<div class="col-sm4 rectanguloArriba homeimage">
					<a href="normativa.php"><img src="img/home/normativa.jpg"/></a>
				</div>
			</div>
			
			<div class="row justify-content-md-center">
				<div class="col-sm4 rectanguloAbajo homeimage">
					<a href="inscripcion.php"><img src="img/home/inscripcion.jpg" /></a>
				</div>
				<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
				<div class="col-sm4 rectanguloAbajo homeimage">
					<a href="gestionUsuarios.php"><img src="img/home/gestion.jpg"/></a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<form method="get" action="conexion.proc.php">
		<button type="text" name="home" class="btn btn-danger" style="color:white">
			<span class="fas fa-power-off"></span>
		</button>
	</form>
</div>
</div>

<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>
<!-- Fin footer -->