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
<title>Normativa</title>
<script type="text/javascript">
	function notify1(style) {
		$.notify({
			title: 'ERROR!',
			text: 'El fichero subido ya existe. <br><br>',
            // image: "<img src='images/Mail.png'/>"
        }, {
        	style: 'metro',
        	className: style,
        	autoHide: true,
        	clickToHide: true
        });
	}


	function notify2(style) {
		$.notify({
			title: 'ERROR!',
			text: 'Por favor, seleccione un fichero. <br><br>',
            // image: "<img src='images/Mail.png'/>"
        }, {
        	style: 'metro',
        	className: style,
        	autoHide: true,
        	clickToHide: true
        });
	}
</script>
<html lang="es">
<?php
//Insertamos el header general
require_once 'foothead/header.php';
?>
<script src="js/myScript.js"></script>
<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<div class="container">
	<br><br>
	<h3>Normativa y Guías</h3>
	<br></br>
	<!-- EJEMPLO PARA OCULTAR LAS TABLAS -->
	<p>
		<a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" id="key"><span class="fas fa-eye-slash" id="ojo"></span> Normativa</a>

	</p>
	<div class="col">
		<div class="collapse show" id="multiCollapseExample1">
			<div class="card-body">
				<!-- TABLA NORMATIVA -->
				<?php
				$q = "SELECT * FROM tbl_normativa WHERE tipo_normativa='Normativa'";
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
				<!-- FIN TABLA NORMATIVA -->
			</div>
		</div>
	</div>
</div>
<p>
	<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" id="key1"><span class="fas fa-eye-slash" id="ojo1"></span> Guías y comunicados Servicio de comedor</button>
</p>
<div class="col">
	<div class="collapse show" id="multiCollapseExample2">
		<div class="card-body">
			<!-- TABLA GUIAS Y COMUNICADOS SERVICIO COMEDOR -->
			<?php
			$w = "SELECT * FROM tbl_normativa WHERE tipo_normativa='Guías y comunicados Servicio de comedor'";
			$tablanormativa = mysqli_query($conexion, $w);
			if (mysqli_num_rows($tablanormativa)>0) {
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
					while ($normativa=mysqli_fetch_array($tablanormativa)){
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
			<!-- FIN TABLA GUIAS Y COMUNICADOS SERVICIO COMEDOR -->
		</div>
	</div>
</div>
<p>
	<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3" id="key2"><span class="fas fa-eye-slash" id="ojo2"></span> Guías, Consejos, y Comunicados Administración pública</button>
</p>
<div class="col">
	<div class="collapse show" id="multiCollapseExample3">
		<div class="card-body">
			<!-- TABLA GUIAS, CONSEJOS, Y COMUNICADOS ADMINISTRACION PUBLICA -->
			<?php
			$w = "SELECT * FROM tbl_normativa WHERE tipo_normativa='Guías, Consejos, y Comunicados Administración pública'";
			$tablanormativa = mysqli_query($conexion, $w);
			if (mysqli_num_rows($tablanormativa)>0) {
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
					while ($normativa=mysqli_fetch_array($tablanormativa)){
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
			<!-- FIN TABLA GUIAS, CONSEJOS, Y COMUNICADOS ADMINISTRACION PUBLICA -->
		</div>
	</div>
</div>
</div>
<!-- FIN EJEMPLO PARA OCULTAR LAS TABLAS -->
<!-- BOTON DE VOLVER Y SUBIR LOS FICHEROS DE LAS TABLAS -->
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
			<div class="collapse" id="collapseExample">
				<div class="card-body">
					<form action="normativaSubida.proc.php" method="post" enctype="multipart/form-data">
						<input type="file" name="foto" id="archivo" accept="application/pdf"></input>
						<input type="submit" value="Subir archivo" class="btn btn-primary"></input>
						<h6>Selecciona el tipo de Normativa o Guía:</h6>
						<div class="radio">
							<label><input type="radio" name="norma" id="norma" value="Normativa"> Normativa</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="norma" id="norma" value="Guías y comunicados Servicio de comedor"  checked> Guías y comunicados Servicio de comedor</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="norma" id="norma" value="Guías, Consejos, y Comunicados Administración pública"> Guías, Consejos, y Comunicados Administración pública</label>
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
		<script>
			notify1('error');
		</script>
		<?php  
	}elseif (isset($error2)){
		?>
		<script>
			notify2('error');
		</script>
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
</div>
<br><br><br><br>
<!--Final del contenido-->
<!--Final de la página en sí-->
<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>
</html>