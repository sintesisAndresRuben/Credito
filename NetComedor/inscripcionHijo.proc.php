<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])){
	header("location:principal.php");
		// echo "Hola";
} else {
	$idTicket = $_REQUEST['tipoT'];
	$cantidad = $_REQUEST['cantidadT'];
	$fechaCad = $_REQUEST['fecha'];
	$precioTotal = $_REQUEST['insertPrecio'];
	$idHijo = $_REQUEST['idHijo'];
	$tipoTick = $_REQUEST['tipoTick'];
	$UpServicio = $_REQUEST['updateServicio'];

	if (isset($_REQUEST['lunes'])) {
		$lunes = $_REQUEST['lunes'];	
	} else {
		$lunes='0';
	}
	
	if (isset($_REQUEST['martes'])) {
		$martes = $_REQUEST['martes'];	
	} else {
		$martes='0';
	}

	if (isset($_REQUEST['miercoles'])) {
		$miercoles = $_REQUEST['miercoles'];	
	} else {
		$miercoles='0';
	} 

	if (isset($_REQUEST['jueves'])) {
		$jueves = $_REQUEST['jueves'];	
	} else {
		$jueves='0';
	} 

	if (isset($_REQUEST['viernes'])) {
		$viernes = $_REQUEST['viernes'];	
	} else {
		$viernes='0';
	}
	// echo "lunes: $lunes</br>";
	// echo "martes: $martes</br>";
	// echo "miercoles: $miercoles</br>";
	// echo "jueves: $jueves</br>";
	// echo "viernes: $viernes</br>";
	// echo "Al principio de la pagina: $tipoTick</br>";
	// echo "$tipoTick";
	$id_usuario_ticket=0;

	if ($tipoTick=="Ticket comedor ") {
		// echo "Estoy entrando por el tipo ticket comedor</br>";
		// echo "Tipo ticket: ".$tipoTick;
		$tcomedor="SELECT * FROM tbl_usuario_ticket WHERE id_ticket=".$idTicket." AND para_usuario=".$idHijo;
		// echo $tcomedor;
		$tinforme="SELECT * FROM tbl_usuario_ticket_informes WHERE id_ticket=".$idTicket." AND para_usuario=".$idHijo;
		// echo $tinforme;
		$tickCom=mysqli_query($conexion, $tcomedor);
		$tickComInf=mysqli_query($conexion, $tinforme);
		if (mysqli_num_rows($tickCom)>0) {
			$actualizar="UPDATE tbl_usuario_ticket SET cantidad_ticket=cantidad_ticket+$cantidad,precio_ticket=precio_ticket+$precioTotal WHERE id_ticket=".$idTicket." AND para_usuario=".$idHijo;
			$sumar=mysqli_query($conexion, $actualizar);

			if (mysqli_num_rows($tickComInf)>0) {
				$actualizarInf="UPDATE tbl_usuario_ticket_informes SET cantidad_ticket=cantidad_ticket+$cantidad,precio_ticket=precio_ticket+$precioTotal WHERE id_ticket=".$idTicket." AND para_usuario=".$idHijo;
				$sumarInf=mysqli_query($conexion, $actualizarInf);
			}
			$primer_tiquet_comedor=false;
			// echo "<br>false";
		} else {
			$primer_tiquet_comedor=true;
			// echo "<br>true";
		}
		// header("location:home.php");
	} 

	if ($tipoTick!="Ticket comedor ") {
		// echo "Estoy entrando por los difernetes servicios de comedor</br>";
		// echo "Tipo ticket: ".$tipoTick;
		// echo "$precioTotal</br>";
		// echo "Id del ticket: $idTicket</br>";
		// echo "Id del ticket anterior: ".$UpServicio;
		//
		// echo "Consulta para ver el registro del comedor del alumno con su determinado ticket: $tcomedor</br>";
		$tcomedor="SELECT * FROM tbl_usuario_ticket WHERE (id_ticket=1 AND para_usuario=18) 
		OR (id_ticket=2 AND para_usuario=$idHijo) 
		OR (id_ticket=3 AND para_usuario=$idHijo)
		OR (id_ticket=6 AND para_usuario=$idHijo) 
		OR (id_ticket=7 AND para_usuario=$idHijo)
		OR (id_ticket=8 AND para_usuario=$idHijo) 
		OR (id_ticket=10 AND para_usuario=$idHijo)
		OR (id_ticket=11 AND para_usuario=$idHijo) 
		OR (id_ticket=12 AND para_usuario=$idHijo)";
		$tickCom=mysqli_query($conexion, $tcomedor);
		if (mysqli_num_rows($tickCom)>0) {

			$actualizar="UPDATE tbl_usuario_ticket SET cantidad_ticket=1, precio_ticket=".$precioTotal.", id_ticket=".$idTicket." WHERE  id_ticket=".$UpServicio." AND para_usuario=".$idHijo;

			$sumar=mysqli_query($conexion, $actualizar);

			$a="SELECT tbl_usuario_ticket.id_usuario_ticket, tbl_usuario_ticket.id_ticket FROM tbl_usuario_ticket WHERE (id_ticket=1 AND para_usuario=".$idHijo.") 
			OR (id_ticket=2 AND para_usuario=".$idHijo.") 
			OR (id_ticket=3 AND para_usuario=".$idHijo.")
			OR (id_ticket=6 AND para_usuario=".$idHijo.") 
			OR (id_ticket=7 AND para_usuario=".$idHijo.")
			OR (id_ticket=8 AND para_usuario=".$idHijo.") 
			OR (id_ticket=10 AND para_usuario=".$idHijo.")
			OR (id_ticket=11 AND para_usuario=".$idHijo.") 
			OR (id_ticket=12 AND para_usuario=".$idHijo.")";
			$r = mysqli_query($conexion, $a);
			if (mysqli_num_rows($r)>0){
				$d=(mysqli_fetch_array($r));
			$h['datos']=$d;
			$h['datos']['id_usuario_ticket'];
			}
			// echo "</br>".$h['datos']['id_usuario_ticket'];
			$dias="UPDATE tbl_dias_reserva SET tbl_dias_reserva.lunes=".$lunes.", tbl_dias_reserva.martes=".$martes.", tbl_dias_reserva.miercoles=".$miercoles.", tbl_dias_reserva.jueves=".$jueves.", tbl_dias_reserva.viernes=".$viernes." WHERE tbl_dias_reserva.id_usuario_ticket=".$h['datos']['id_usuario_ticket'];

			$actudias=mysqli_query($conexion, $dias);
			// echo "</br>$dias";
			$informes="INSERT INTO tbl_usuario_ticket_informes (id_usuario,para_usuario,id_ticket,fecha_caducidad,cantidad_ticket,precio_ticket) VALUES (".$_SESSION['user']['id_usuario'].",".$idHijo.", $idTicket, '$fechaCad', $cantidad, $precioTotal)";

			$insertar=mysqli_query($conexion, $informes);
			// echo "Actualizacion registro: $actualizar</br>";
			// echo "Actualizacion dias: $dias</br>";


			$primer_tiquet_comedor=false;
			// echo "false";
		} else {
			$primer_tiquet_comedor=true;
			// echo "<br>true";
		}
		// header("location:home.php");
	} 


	if($primer_tiquet_comedor){
		$q = "INSERT INTO tbl_usuario_ticket (id_usuario,para_usuario,id_ticket,fecha_caducidad,cantidad_ticket,precio_ticket) VALUES (".$_SESSION['user']['id_usuario'].",$idHijo, $idTicket, '$fechaCad', $cantidad, $precioTotal)";
		$comprarTicket=mysqli_query($conexion, $q);
		$informes="INSERT INTO tbl_usuario_ticket_informes (id_usuario,para_usuario,id_ticket,fecha_caducidad,cantidad_ticket,precio_ticket) VALUES (".$_SESSION['user']['id_usuario'].",".$idHijo.", $idTicket, '$fechaCad', $cantidad, $precioTotal)";
		$insertar=mysqli_query($conexion, $informes);
		// echo $informes;

		if ($_SESSION['user']['tipo_usuario']=='padre' OR 'padre2') {

			if ($q==true) {
				$tbl_ultimo_registro="SELECT * FROM tbl_usuario_ticket ORDER BY id_usuario_ticket DESC LIMIT 1";
				$uRegistro=mysqli_query($conexion,$tbl_ultimo_registro);
				while ($ultimo=mysqli_fetch_array($uRegistro)){

					$id_usu_ticket=$ultimo['id_usuario_ticket'];
			// echo $id_usu_ticket;
				} 

				if ($tbl_ultimo_registro==true) {
					if ($tipoTick!="Ticket comedor ") {
						$tbl_dias_reserva="INSERT INTO tbl_dias_reserva (id_usuario_ticket, lunes, martes, miercoles, jueves, viernes,servicio) VALUES ($id_usu_ticket, $lunes, $martes, $miercoles, $jueves, $viernes,'Si')";
						$registrarAsistencia=mysqli_query($conexion,$tbl_dias_reserva);
					} else {
						$tbl_dias_reserva="INSERT INTO tbl_dias_reserva (id_usuario_ticket, lunes, martes, miercoles, jueves, viernes) VALUES ($id_usu_ticket, $lunes, $martes, $miercoles, $jueves, $viernes)";
						$registrarAsistencia=mysqli_query($conexion,$tbl_dias_reserva);
					}


		// echo $tbl_dias_reserva;
		// echo $id_usu_ticket;
				}

			} else {
				echo "Error al hacer la compra. VOLVER A INTENTAR";
			}

		}
	}
header("location:home.php");
}