<?php 
include("conexion.proc.php");
// if (!isset($_SESSION['user'])) {
//     header('location: login.php');
// }
if(($_SESSION['user']['id_etapa']=='7') OR ($_SESSION['user']['id_etapa']=='8') OR ($_SESSION['user']['id_etapa']=='9')){
	header('location:home.php');
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
	<title>Gestión Asistencia</title>
</head>
<!--Inicio de la página en sí-->
<!--Inicio del contenido-->
<?php
$q="SELECT `tbl_usuarios`.`mail_usuario`, `tbl_etapa`.`nombre_etapa`, `tbl_dias_reserva`.`lunes`, `tbl_dias_reserva`.`martes`, `tbl_dias_reserva`.`miercoles`, `tbl_dias_reserva`.`jueves`, `tbl_dias_reserva`.`viernes`FROM `tbl_dias_reserva`, `tbl_etapa`INNER JOIN `tbl_usuarios` ON `tbl_usuarios`.`id_etapa` = `tbl_etapa`.`id_etapa`";

$tablaTicketUsuarios = mysqli_query($conexion, $q);
if (mysqli_num_rows($tablaTicketUsuarios)>0) {
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br><br>
				<h3>Gestión Asistencia</h3>
				<br><br>
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Mail</th>
							<th>Etapa</th>
							<th>Lunes</th>
							<th>Martes</th>
							<th>Miercoles</th>
							<th>Jueves</th>
							<th>Viernes</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while ($ticket_usuario=mysqli_fetch_array($tablaTicketUsuarios)){
							$mail=$ticket_usuario['mail_usuario'];
							$etapa=$ticket_usuario['nombre_etapa'];
							$lunes=$ticket_usuario['lunes'];
							$martes=$ticket_usuario['martes'];
							$miercoles=$ticket_usuario['miercoles'];
							$jueves=$ticket_usuario['jueves'];
							$viernes=$ticket_usuario['viernes'];
							?>	

							<tr>
								<td><?php echo $mail; ?></td>
								<td><?php echo $etapa; ?></td>
								<td><?php echo $lunes; ?></td>
								<td><?php echo $martes; ?></td>
								<td><?php echo $miercoles; ?></td>
								<td><?php echo $jueves; ?></td>
								<td><?php echo $viernes; ?></td>
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