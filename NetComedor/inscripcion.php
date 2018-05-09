<?php 
session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
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
<div class="container" style="/*background-color: gray*/;">
	
	<div class="col-12">
			<h3>Nueva Compra</h3>
			<hr>
			<!-- ############################################################## -->
		<div class="row">
			<div class="col-7">
			<form action="inscripcion.proc.php" method="get">
				<input type="hidden" name="fecha" value="30/05/2019">
				<div class="col">
					<!-- NOMBRE Y APELLIDO -->
					<div class="form-group row">
						<div class="col-xs-3 mr-5">
							<label for="nombre">Nombre:</label>
							<input type="text" class="form-control" id="nombre" name="nombreU" value="<?php echo $_SESSION['user']['nombre_usuario']; ?>" disabled>
						</div>
						<div class="col-xs-3">
							<label for="apellido">Apellido:</label>
							<input type="text" class="form-control" id="apellido" name="apellidoU" value="<?php echo $_SESSION['user']['apellido_usuario']; ?>" disabled>
						</div>
					</div>
					<!-- TIPO TIQUET y CANTIDAD -->
					<div class="form-group row">
						<div class="col-xs-3 mr-4">
							<label for="nombre">Tipo ticket:</label>
							<select class="form-control" id="tipoTicket" name="tipoT" required>
								<option value="" selected="selected"></option>
								<option value="1">Servicio comedor 5 dias</option>
								<option value="2">Servicio comedor 4 dias</option>
								<option value="3">Servicio comedor 3 dias</option>
								<option value="4">Servicio comedor 2 dias</option>
								<option value="5">Servicio comedor 1 dias</option>
								<option value="6">Servicio comedor 1 dias</option>
								<option value="7">Ticket comedor</option>
							</select>
						</div>
						<div class="col-xs-3">
							<label for="apellido">Cantidad:</label>
							<input type="number" class="form-control" id="cantidadTicket" name="cantidadT" min="1">
						</div>
					</div>

					<!-- FECHA CAD -->
					<div class="form-group row">
						<div class="col-xs-3">
							<label for="apellido">Fecha caducidad:</label>
							<input type="text" class="form-control" id="FechaCadTicket" name="fecha" disabled value="30/05/2019">
						</div>
					</div>
				</div>
				<!-- ############################################################## -->

				
				<br><br>
				<div class="row">
						<button type="submit" class="btn btn-primary">COMPRAR</button>
					</div>

			</form>	
			</div>
			<div class="col-5">
					<div class="card">
						<h3 class="card-header text-center">FACTURA</h3>
						<div class="card-body">
							<div class="row">
							<div class="col-6">
								<b>TIPO TIQUET:</b>
							</div>
							<div class="col-6" id="txtTicket">
							</div>
							</div>
							<hr>
							<div class="row">
							<div class="col-9">
								<b id="cantidad">CANTIDAD:</b>
							</div>
							<div class="col-3">
								<h7 id="textoCant"></h7>
							</div>
							</div>							
						</div>
						<div class="card-footer">
							<div class="row">
							<div class="col-8">
								<h3>TOTAL:</h3>
							</div>
							<div class="col-4">
								<h4>00.00€</h4>
							</div>
							</div>
						</div>
					</div>	
			</div>

		</div>
	</div>

	<!-- FIN CONTAINTER -->
</div>
<br><br>







<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>

</html>