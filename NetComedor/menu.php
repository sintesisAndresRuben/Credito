<?php 
//session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
?>
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<title>Menú</title>
<html lang="es">
<?php
//Insertamos el header general
require_once 'foothead/header.php';
?>
<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<div class="container">
	<br><br>
	<h4>Menú</h4>
	<br>
	<?php
	$q = "SELECT * FROM tbl_menu WHERE tipo_menu='Menu General'";
	$tablaMenu = mysqli_query($conexion, $q);
	if (mysqli_num_rows($tablaMenu)>0) {
		?>
		<div class="table-responsive" style="margin: auto;  ">
			<h6>Menú general</h6>
			<table id="mytable" class="table table-bordred table-striped"> 
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Última modificación</th>
					</tr>
				</thead>
				<?php
				while ($menu=mysqli_fetch_array($tablaMenu)){
					$id_menu=$menu['id_menu'];
					$nombre_menu=$menu['nombre_menu'];
					$ruta_menu=$menu['ruta_menu'];
					$fecha_menu=$menu['fecha_menu'];	
					?>	
					<tr>
						<td style="display:none;">
							<?php echo $id_menu; ?>
						</td> 
						<td>
							<a href="<?php echo"$ruta_menu"; ?>" target="_blank"><?php echo $nombre_menu; ?></a>
						</td>
						<td>
							<!--  -->
							<?php  
							$date = new DateTime($fecha_menu);
							echo $date->format('d-m-Y');
							?>
						</td>
					</tr>
					<?php
                // FIN WHILE
				}
				?>
			</table>
			<!-- FIN TABLA -->
			<?php
		// FIN ARRAY
		}
		?>
	</br>
	<h6>Menú adaptado</h6>
	<?php
	$w = "SELECT * FROM tbl_menu WHERE tipo_menu='Menu Adaptado'";
	$tablaMenu = mysqli_query($conexion, $w);
	if (mysqli_num_rows($tablaMenu)>0) {
		?>
		<table id="mytable" class="table table-bordred table-striped"> 
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Última modificación</th>
				</tr>
			</thead>
			<?php
			while ($menu=mysqli_fetch_array($tablaMenu)){
				$id_menu=$menu['id_menu'];
				$nombre_menu=$menu['nombre_menu'];
				$ruta_menu=$menu['ruta_menu'];
				$fecha_menu=$menu['fecha_menu'];	
				?>	
				<tr>
					<td style="display:none;">
						<?php echo $id_menu; ?>
					</td> 
					<td>
						<a href="<?php echo"$ruta_menu"; ?>" target="_blank"><?php echo $nombre_menu; ?></a>
					</td>
					<td>
						<!--  -->
						<?php  
						$date = new DateTime($fecha_menu);
						echo $date->format('d-m-Y');
						?>
					</td>
				</tr>
				<?php
                // FIN WHILE
			}
			?>
		</table>
		<!-- FIN TABLA -->
		<?php
		// FIN ARRAY
	}
	?>
	</br>
	<form method="get" action="home.php">
		<button type="text" class="btn btn-warning" style="color:white"><span class="fas fa-arrow-alt-circle-left"></span></button>
	</form>
</br>
</div>
<!--Final del contenido-->
<!--Final de la página en sí-->
<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>
</html>