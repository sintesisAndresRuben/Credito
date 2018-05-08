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
		<div class="col-6">
			
			<h3>Nueva Compra</h3>
			<hr>
			<!-- ############################################################## -->
			<form action="#">
				<!-- NOMBRE Y APELLIDO -->
				<div class="form-group row">
					<div class="col-xs-3 mr-5">
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" id="nombre" name="nombreU" value="Rubén" disabled>
					</div>
					<div class="col-xs-3">
						<label for="apellido">Apellido:</label>
						<input type="text" class="form-control" id="apellido" name="apellidoU" value="Díaz Ruiz" disabled>
					</div>
				</div>
				<!-- TIPO TIQUET y CANTIDAD -->
				<div class="form-group row">
					<div class="col-xs-3 mr-4">
						<label for="nombre">Tipo ticket:</label>
						<select class="form-control" id="tipoTicket">
							<option value=""></option>
							<option value="">Servicio comedor 5 dias</option>
							<option value="">Servicio comedor 4 dias</option>
							<option value="">Servicio comedor 3 dias</option>
							<option value="">Servicio comedor 2 dias</option>
							<option value="">Servicio comedor 1 dias</option>
							<option value="">Servicio comedor 1 dias</option>
							<option value="">Ticket comedor</option>
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
						<input type="text" class="form-control" id="FechaCadTicket" name="FechaCadT" disabled value="30/05/2019">
					</div>
				</div>
			</div>

			








			<!-- ############################################################## -->





			<div class="col-sm-3">
				<div class="card">
					<h3 class="card-header text-center">FACTURA</h3>
					<div class="card-body">
						<h4 class="card-title">Special title treatment</h4>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#!" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>				<!-- FACTURA -->
			</div>

			<div class="row">
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary">COMPRAR</button>
				</form>
			</div>
		</div>

	</div>
	<br><br>





</div>

<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>

</html>