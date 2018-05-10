<?php 
//session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: index.php');
}
?>
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<title>Normativa</title>
<html lang="es">
<?php
//Insertamos el header general
require_once 'foothead/header.php';
?>
<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<div class="container">
	<br><br>
	<h4>Normativa</h4>
	<br>
	<?php
	$q = "SELECT * FROM tbl_normativa";
	$tablaNormativa = mysqli_query($conexion, $q);
	if (mysqli_num_rows($tablaNormativa)>0) {
		?>
		<div class="table-responsive" style="margin: auto;  ">
			<table id="mytable" class="table table-bordred table-striped"> 
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Última modificación</th>
					</tr>
				</thead>
				<?php
				while ($normativa=mysqli_fetch_array($tablaNormativa)){
					$id_normativa=$normativa['id_normativa'];
					$nombre_normativa=$normativa['nombre_normativa'];
					$ruta_normativa=$normativa['ruta_normativa'];
					$fecha_normativa=$normativa['fecha_normativa'];	
					?>	
					<tr>
						<td style="display:none;">
							<?php echo $id_normativa; ?>
						</td> 
						<td>
							<a href="<?php echo"$ruta_normativa"; ?>" target="_blank"><?php echo $nombre_normativa; ?></a>
						</td>
						<td>
							<!--  -->
							<?php  
							$date = new DateTime($fecha_normativa);
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
	<div class="container">
	<div class="row">
		<form method="get" action="home.php">
			<button type="text" class="btn btn-warning mr-3 ml-4" style="color:white"><span class="fas fa-arrow-alt-circle-left"></span></button>
		</form>
		<!-- boton de herraminetas -->
		<p>
			<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="fas fa-wrench"></span></button>
		</p>
	</div>
	<div class="row">
		<div class="col-8">
			<div class="collapse" id="collapseExample">
				<div class="card-body">
					<form action="normativaSubida.proc.php" method="get" enctype="multipart/form-data">
						<input type="file" name="archivo" id="archivo"></input>
						<input type="submit" value="Subir archivo" class="btn btn-primary"></input>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- fin boton de herramientas -->
</br>
</div>
<!--Final del contenido-->
<!--Final de la página en sí-->
<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>
</html>