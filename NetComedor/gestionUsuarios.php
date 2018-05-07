<?php 
session_start();
include("conexion.proc.php");
// if (!isset($_SESSION['user'])) {
//     header('location: index.php');
// }

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

	$q = "SELECT * FROM tbl_usuarios";

	$tablaUsuarios = mysqli_query($conexion, $q);
	if (mysqli_num_rows($tablaUsuarios)>0) {
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br><br>
					<h4>Gestion Usuarios</h4>
					<br>
					<div class="table-responsive" style="margin: auto;  ">
						<table id="mytable" class="table table-bordred table-striped">
							<thead>
								<tr>
									<th style="display:none;">ID</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Mail</th>
									<th>Tipo</th>
									<th>Admin</th>
									<th>Id_etapa</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>

							<?php
			//echo "<img src='$foto'>";
							while ($usuarios=mysqli_fetch_array($tablaUsuarios)){
								$idU=$usuarios['id_usuario'];
								$nombreU=$usuarios['nombre_usuario'];
								$apellidoU=$usuarios['apellido_usuario'];
								$mailU=$usuarios['mail_usuario'];
								$tipoU=$usuarios['tipo_usuario'];
								$adminU=$usuarios['admin'];
								$idEtapaU=$usuarios['id_etapa'];		
								?>	


								<tr>
									<td style="display:none;">
										<?php echo $idU; ?>
									</td> 
									<td>
										<?php echo $nombreU; ?>
									</td>
									<td>
										<?php echo $apellidoU; ?>
									</td>
									<td>
										<?php echo $mailU; ?>
									</td>
									<td>
										<?php echo $tipoU; ?>
									</td>
									<td>
										<?php echo $adminU; ?>
									</td>
									<td>
										<?php echo $idEtapaU; ?>
									</td>

									<td>
										<!--MODIFICAR-->
										<a href="modificarusuari?id=<?php echo $mailU; ?>"><p data-placement="top" data-toggle="tooltip" title="Editar producto"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fas fa-pencil-alt"></i></button></p></a>
									</td> 
									<td>
										<!--ELIMINAR-->
										<a href="eliminarusuari?id=<?php echo $mailU; ?>"><p data-placement="top" data-toggle="tooltip" title="Eliminar producto"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fas fa-trash"></span></button></p></a>
									</td>
								</tr>
								<?php
                // FIN WHILE
							}
							?>
						</table>
						<div class="row">
							<form method="get" action="home.php">
								<button type="text" class="btn btn-success" style="color:white; margin-left: 40%;"><span class="fas fa-user-plus"></span></button>
							</form>
							<form method="get" action="home.php">
								<button type="text" class="btn btn-warning" style="color:white; margin-left: 60%"><span class="fas fa-arrow-alt-circle-left"></span></button>
							</form>
						</div>
						<br><br>
						<?php

// FIN ARRAY
					}
					?>

					<!--Final del contenido-->

					<!--Final de la página en sí-->

					<?php
		//Insertamos el footer
					require_once 'foothead/footer.php';
					?>
					</html>