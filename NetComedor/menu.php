<?php 
//session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
} else if(isset($_SESSION['error'])){
	$error = $_SESSION['error'];
} else if(isset($_SESSION['error2'])){
	$error2 = $_SESSION['error2'];
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
	<h3>Menú</h3>
	<br></br>
	<?php
	$q = "SELECT * FROM tbl_menu WHERE tipo_menu='Menu General'";
	$tablaMenu = mysqli_query($conexion, $q);
	if (mysqli_num_rows($tablaMenu)>0) {
		?>
		<!-- EJEMPLO PARA OCULTAR LAS TABLAS -->
		<p>
			<a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" id="key"><span class="fas fa-eye-slash" id="ojo"></span> Menu General</a>

		</p>
		<div class="col">
			<div class="collapse show" id="multiCollapseExample1">
				<div class="card-body">
					<!-- EMPIEZA MENU GENERAL -->
					<div class="table-responsive" style="margin: auto;  ">
						<table id="mytable" class="table table-bordred table-striped"> 
							<thead>
								<tr>
									<th>Titulo</th>
									<th>Última modificación</th>
									<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){
										?>
										<th>Eliminar</th>
										<?php
									}
									?>
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
									<td>
										<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
											<a href="menuEliminar.proc.php?id=<?php echo $id_menu; ?>"><p data-placement="top" data-toggle="tooltip" title="Eliminar producto"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fas fa-trash"></span></button></p></a>
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
					<!-- FIN MENU GENERAL -->
				</div>
			</div>
		</div>
	</div>

		<p>
			<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"id="key1"><span class="fas fa-eye-slash"id="ojo1"></span> Menu Adaptado</button>
		</p>
		<div class="col">
			<div class="collapse show" id="multiCollapseExample2">
				<div class="card-body">
					<!-- MENU ADAPTADO -->
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
									<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
										<th>Eliminar</th>
										<?php
									}
									?>
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
									<?php  if ($_SESSION['user']['tipo_usuario']=='personal'){ ?>
										<td>
											<a href="menuEliminar.proc.php?id=<?php echo $id_menu; ?>"><p data-placement="top" data-toggle="tooltip" title="Eliminar producto"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fas fa-trash"></span></button></p></a>
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
					<!-- FIN DE LAS TABLAS -->
					<!-- FIN MENU ADAPTADO -->
				</div>
			</div>
		</div>
		<!-- FIN EJEMPLO PARA OCULTAR LAS TABLAS -->
	</br>
<!-- EMPIEZA EL BOTON DE VOLVER Y DE SUBIDA DE FICHEROS -->
<div class="container">
	<div class="row">
		<form method="get" action="home.php">
			<button type="text" class="btn btn-warning mr-3 ml-3" style="color:white"><span class="fas fa-arrow-alt-circle-left"></span></button>
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
						<form action="menuSubida.proc.php" method="post" enctype="multipart/form-data">
							<input type="file" name="foto" id="archivo" accept="application/pdf"></input>
							<input type="submit" value="Subir archivo" class="btn btn-primary"></input>
							<h6>Selecciona el tipo de Menú:</h6>
							<div class="radio">
								<label><input type="radio" name="menu" id="menu" value="Menu General" checked> Menú general</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="menu" id="menu" value="Menu Adaptado"> Menú adaptado</label>
							</div>
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

<?php
}
?>
</div>
</br></br></br></br>
<!--Final del contenido-->
<!--Final de la página en sí-->
<?php
//Insertamos el footer
require_once 'foothead/footer.php';
?>
</html>