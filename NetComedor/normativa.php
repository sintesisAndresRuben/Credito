<?php 
//session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: index.php');
} else if(isset($_SESSION['error'])){
	$error = $_SESSION['error'];
} else if(isset($_SESSION['error2'])){
	$error2 = $_SESSION['error2'];
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
						<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
							<th>Eliminar</th>
							<?php
						}
						?>
						
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
						<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
							<td>
								<a href="normativaEliminar.proc.php?id=<?php echo $id_normativa; ?>"><p data-placement="top" data-toggle="tooltip" title="Eliminar producto"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fas fa-trash"></span></button></p></a>
							</td>
							<?php
						}
						?>
						
					</tr>
					<?php
                // FIN WHILE
				}
				?>
			</table>
			<!-- FIN TABLA -->
			<?php
		// FIN ARRAY
		}else{
			?>

			<div class="table-responsive" style="margin: auto;  ">
				<table id="mytable" class="table table-bordred table-striped"> 
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Última modificación</th>

							<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
								<th>Eliminar</th>
								<?php
							}
							?>
							
						</tr>
					</thead>
					<tr>
						<td colspan="3">
							No hay datos que mostrar
						</td> 
					</tr>
				</table>
			</div>
			<?php	
		}
		?>
	</br>
	<div class="container">
		<div class="row">
			<form method="get" action="home.php">
				<button type="text" class="btn btn-warning mr-3 ml-4" style="color:white"><span class="fas fa-arrow-alt-circle-left"></span></button>
			</form>
			<!-- boton de herraminetas -->
			<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
				<p>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="fas fa-wrench"></span></button>
				</p>
			</div>
			<div class="row">
				<div class="col-8">
					<div class="collapse" id="collapseExample">
						<div class="card-body">
							<form action="normativaSubida.proc.php" method="post" enctype="multipart/form-data">
								<input type="file" name="foto" id="archivo" accept="application/pdf"></input>
								<input type="submit" value="Subir archivo" class="btn btn-primary"></input>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Mostramos el mensaje de erro que se repite el pdf -->
			<?php
			if(isset($error)){
				?>
				<div class="row justify-content-md-center">
					<div class="alert alert-danger col-6 text-center" role="alert">
						<strong>ERROR!</strong> El fichero ya existe
					</div>
				</div>
			</div>
			<?php  
		}elseif (isset($error2)){
			?>
			<div class="row justify-content-md-center">
				<div class="alert alert-danger col-6 text-center" role="alert">
					<strong>ERROR!</strong> No has seleccionado el fichero
				</div>
			</div>
		</div>
		<?php
	}
	//Matamos la sesion para que no se muestre el mensaje de error al recargar la pagina
	unset($_SESSION['error']);
	unset($_SESSION['error2']);
	?>
	<!-- fin boton de herramientas -->
</br>
<?php
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