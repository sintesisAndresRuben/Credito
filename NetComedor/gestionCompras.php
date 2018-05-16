<?php 
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}

?>
<?php
		//Insertamos el header general
require_once 'foothead/header.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"></script>
	<script src="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap4.min.css"></script>
	<script src="js/table.js"></script>
	<title>Gestión Compras</title>
</head>
<!--Inicio de la página en sí-->
<!--Inicio del contenido-->
<?php
$q="SELECT `tbl_usuarios`.`nombre_usuario`, `tbl_usuarios`.`apellido_usuario`, `tbl_usuarios`.`mail_usuario`, `tbl_etapa`.`nombre_etapa`, `tbl_usuario_ticket`.`cantidad_ticket`, `tbl_ticket`.`tipo_ticket`, `tbl_usuario_ticket`.`precio_ticket` FROM `tbl_ticket` INNER JOIN `tbl_usuario_ticket` ON `tbl_usuario_ticket`.`id_ticket` = `tbl_ticket`.`id_ticket` INNER JOIN `tbl_etapa` ON `tbl_ticket`.`id_etapa` = `tbl_etapa`.`id_etapa` INNER JOIN `tbl_usuarios` ON `tbl_usuarios`.`id_etapa` = `tbl_etapa`.`id_etapa`";

$tablaTicketUsuarios = mysqli_query($conexion, $q);
if (mysqli_num_rows($tablaTicketUsuarios)>0) {
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br><br>
				<h3>Gestión Compras</h3>
				<br><br>
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Mail</th>
							<th>Etapa</th>
							<th>Cantidad tickets</th>
							<th>Tipo ticket</th>
							<th>Precio_total</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while ($ticket_usuario=mysqli_fetch_array($tablaTicketUsuarios)){
							$nombre=$ticket_usuario['nombre_usuario'];
							$apellido=$ticket_usuario['apellido_usuario'];
							$mail=$ticket_usuario['mail_usuario'];
							$etapa=$ticket_usuario['nombre_etapa'];
							$cantidad=$ticket_usuario['cantidad_ticket'];
							$tipo=$ticket_usuario['tipo_ticket'];
							$precio=$ticket_usuario['precio_ticket'];	
							?>	

							<tr>
								<td><?php echo $nombre; ?></td>
								<td><?php echo $apellido; ?></td>
								<td><?php echo $mail; ?></td>
								<td><?php echo $etapa; ?></td>
								<td><?php echo $cantidad; ?></td>
								<td><?php echo $tipo; ?></td>
								<td><?php echo "$precio €"; ?></td> 
							</tr>
							<?php

    // FIN WHILE
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="row">
				<form method="get" action="home.php">
					<button type="text" class="btn btn-warning" style="color:white; margin-left: 60%"><span class="fas fa-arrow-alt-circle-left"></span></button>
				</form>
			</div></div></div>
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