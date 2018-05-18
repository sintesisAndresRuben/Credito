<?php 
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
// if(($_SESSION['user']['id_etapa']=='7') OR ($_SESSION['user']['id_etapa']=='8') OR ($_SESSION['user']['id_etapa']=='9')){
// 	header('location:home.php');
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
<div class="container" style="/*background-color: gray*/;">
	
	<div class="col-12">
	</br></br>
	<h3>Nueva Compra</h3>
	</br></br>
	<hr>
	<!-- ############################################################## -->
	<div class="row">
		<div class="col-lg-6">
			<form action="inscripcion.proc.php" method="get" id="compra">
				<input type="hidden" name="fecha" value="2018-08-30">
				<div class="col">
					<!-- NOMBRE Y APELLIDO -->
					<div class="form-group row">
						<div class="col-12 col-sm mr-md-2 mr-lg-5">
							<label for="nombre">Nombre:</label>
							<input type="text" class="form-control" id="nombre" name="nombreU" value="<?php echo $_SESSION['user']['nombre_usuario'];?>" disabled="">
						</div>
						<div class="col-12 col-sm">
							<label for="apellido">Apellido:</label>
							<input type="text" class="form-control" id="apellido" name="apellidoU" value="<?php echo $_SESSION['user']['apellido_usuario'];?>" disabled="">
						</div>
					</div>
					<!-- TIPO TIQUET y CANTIDAD -->
					<div class="form-group row">
						<div class="col-12 col-sm mr-md-2 mr-lg-5">
							<label for="nombre">Tipo ticket:</label>
							<select class="form-control" id="tipoTicket" name="tipoT" required="">
								<option value="" id="0" selected="selected"></option>
								<?php
								$sqlOption = "SELECT * FROM `tbl_ticket` WHERE id_etapa=".$_SESSION['user']['id_etapa'];
								$result = mysqli_query($conexion,$sqlOption);

								if (mysqli_num_rows($result)>0) {
									while ($option = (mysqli_fetch_array($result))){
										$tbl_T['ticket']=$option;
										?>
										<!-- <option value="<?php echo $tbl_T['ticket']['importe_ticket'] ?>"><?php echo $tbl_T['ticket']['tipo_ticket']?></option> -->
										<option value="<?php echo $tbl_T['ticket']['id_ticket'] ?>" name="<?php echo $tbl_T['ticket']['tipo_ticket'] ?>" id="<?php echo $tbl_T['ticket']['importe_ticket'] ?>"><?php echo $tbl_T['ticket']['tipo_ticket']?></option>
										<?php

									}
								}
								?>
							</select>
							<input type="hidden" id="valor_ticket" name="valor_ticket" value=""><!-- modificar y ponerlo hidden (PONER EL PRECIO Y MULTIPLICAR TIPO TICKET POR CANTIDAD) -->
						</div>
						<div class="col-12 col-sm">
							<label for="apellido" id="david">Cantidad:</label>
							<input type="number" class="form-control" id="cantidadTicket" required name="cantidadT" value="1" min="1" max="200">




						</div>
					</div>

					<!-- FECHA CAD -->
					<div class="form-group row">
						<div class="col-12 col-sm mr-md-2 mr-lg-5">
							<label for="apellido">Fecha caducidad:</label>
							<input type="text" class="form-control" id="FechaCadTicket" name="fecha" disabled="" value="30/05/2019">
						</div>
						<div class="col mb-5">
							<!-- CANTIDAD DE CHECKBOX SELECCIONADOS -->
							<div id="checks">
								<input type="hidden" id="cantidad" value="0">

								<label for="apellido">Elegir los dias de la semana:</label>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="lunes" id="lunes" value="0"> LUN.
									</label>
								</div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="martes" id="martes" value="0"> MAR.
									</label>
								</div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="miercoles" id="miercoles" value="0"> MIE.
									</label>
								</div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="jueves" id="jueves" value="0"> JUE.
									</label>
								</div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="viernes" id="viernes" value="0"> VIE.
									</label>
								</div>
								<div><span id="seleccionados" hidden="true">0</span></div>
							</div>
						</div>
					</div>
					<input type="hidden" id="insertPrecio" value="" name="insertPrecio">
				</div>
				<!-- ############################################################## -->
			</div>
			<div class="offset-lg-1"></div>
			<div class="col-lg-5">
				<div class="card">
					<h3 class="card-header text-center">FACTURA</h3>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<b>TIPO TIQUET:</b>
							</div>
							<div class="col-6" id="txtTicket">Ticket comedor </div>
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
								<h3 class="precioTotal">TOTAL:</h3>
							</div>
							<div class="col-4">
								<h4 id="precio"></h4>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-lg-2 col-sm">

			<button type="submit" class="btn btn-primary btn-block" id="submit" ><i class="fas fa-shopping-cart"></i> COMPRAR</button>
			<br>


		</div>

	</form>
	<!-- <button onclick="notify('error')">Err</button> -->
</div>
<!-- FIN CONTAINTER -->

</div>
<br><br><br><br>
<script type="text/javascript">
	function notify1(style) {
		$.notify({
			title: 'ERROR!',
			text: 'Selecciona el numero de dias que permite el ticket seleccionado <br><br>',
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
			text: 'No puedes seleccionar mas días de los que permite el tipo de ticket <br><br>',
            // image: "<img src='images/Mail.png'/>"
        }, {
        	style: 'metro',
        	className: style,
        	autoHide: true,
        	clickToHide: true
        });
	}
</script>


<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>

</html>