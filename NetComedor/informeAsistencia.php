<?php 
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
if(($_SESSION['user']['id_etapa']=='7') OR ($_SESSION['user']['id_etapa']=='8') OR ($_SESSION['user']['id_etapa']=='9')){
	header('location:home.php');
}
?>
<?php
		//Insertamos el header general
require_once 'foothead/headerGESTION.php';
?>
<!DOCTYPE html>
<html lang="es">
<title>Informe Asistencias</title>
<!--Inicio de la página en sí-->
<!--Inicio del contenido-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><br>
			<h3>Informe Asistencias</h3>
			<br><br>
			<?php
			$q="SELECT `tbl_usuarios`.`mail_usuario`, `tbl_usuarios`.`id_usuario`, `tbl_usuario_ticket`.`id_usuario`, `tbl_usuario_ticket`.`para_usuario`, `tbl_etapa`.`nombre_etapa`,`tbl_dias_reserva`.`lunes`, `tbl_dias_reserva`.`martes`, `tbl_dias_reserva`.`miercoles`, `tbl_dias_reserva`.`jueves`, `tbl_dias_reserva`.`viernes` FROM `tbl_usuarios` INNER JOIN `tbl_usuario_ticket` ON `tbl_usuarios`.`id_usuario`= `tbl_usuario_ticket`.`para_usuario` INNER JOIN `tbl_etapa` ON `tbl_usuarios`.`id_etapa` = `tbl_etapa`.`id_etapa` INNER JOIN `tbl_dias_reserva` ON `tbl_usuario_ticket`.`id_usuario_ticket` = `tbl_dias_reserva`.`id_usuario_ticket` WHERE `tbl_etapa`.`id_etapa` BETWEEN 7 AND 9";

			$tablaTicketUsuarios = mysqli_query($conexion, $q);
			if (mysqli_num_rows($tablaTicketUsuarios)>0) {
				?>
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

							if ($lunes=='1'){
								$lunes = 'x';	
							} else {
								$lunes ='';
							}
							if ($martes=='1'){
								$martes = 'x';	
							} else {
								$martes ='';
							}
							if ($miercoles=='1'){
								$miercoles = 'x';	
							} else {
								$miercoles ='';
							}
							if ($jueves=='1'){
								$jueves = 'x';	
							} else {
								$jueves ='';
							}
							if ($viernes=='1'){
								$viernes = 'x';	
							} else {
								$viernes ='';
							}
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

				<?php
// FIN ARRAY
			}else{
				?>
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Correo</th>
							<th>Etapa</th>
							<th>Tipo ticket</th>
							<th>Importe</th>
							<th>Cantidad</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="6">No hay resultados a mostrar!</td>
						</tr>
					</tbody>
				</table>
				<?php 
			} 
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<form method="get" action="informe.php">
			<button type="text" class="btn btn-warning" style="color:white; margin-left: 60%"><span class="fas fa-arrow-alt-circle-left"></span></button>
		</form>
	</div>
<br><br><br><br>
</div>
<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>
</html>