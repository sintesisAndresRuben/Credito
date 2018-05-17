<DOCTYPE html>
	<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
	<title>Informes</title>
	<html lang="es">
	<?php 
	include("conexion.proc.php");
	if (!isset($_SESSION['user'])) {
		header('location: login.php');
	}
	if($_SESSION['user']['mail_usuario']=='jantonio.lopez@fje.edu'){
		?>
		<?php
		//Insertamos el header general
		require_once 'foothead/header.php';
		?>

		<!--Inicio de la página en sí-->
		<!--Inicio del contenido-->
		<div class="container">
			<br></br>
			<h3>Informes</h3>
		</br>
		<div class="col-sm12">
			<div class="col-sm10">
				<div class="row justify-content-md-center">
					<div class="col-sm4 rectanguloArriba homeimage">
						<a href="informeCompras.php"><img src="img/home/menu.jpg"/></a>
					</div>
					<div class="col-sm4 rectanguloArriba homeimage">
						<a href="informeAsistencia.php"><img src="img/home/menu.jpg"/></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</br>
<div class="container">
	<div class="row">
		<form method="get" action="home.php">
			<button type="text" class="btn btn-warning mr-3 ml-3" style="color:white"><span class="fas fa-arrow-alt-circle-left"></span></button>
		</form>
	</div>
</div>
<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>

</html>
<?php
}else{
	header('location:home.php');
}
?>