<?php 
// session_start();
include("conexion.proc.php");
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
?>
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<title>NetComedor</title>
<html lang="es">
<?php
		//Insertamos el header general
require_once 'foothead/header.php';

?>

<!--Inicio de la página en sí-->
<!--Inicio del contenido--> 
<div class="container">
	<?php  if (($_SESSION['user']['id_etapa']=='7') OR ($_SESSION['user']['id_etapa']=='8') OR ($_SESSION['user']['id_etapa']=='9')) { ?>
	</br></br></br>
	<?php
}
?>
<div class="col-sm12">
	<div class="col-sm10">
		<div class="row justify-content-md-center">
			<div class="col-sm4 rectanguloArriba homeimage">
				<a href="menu.php"><img src="img/home/menu.jpg"/></a>
			</div>
			<div class="col-sm4 rectanguloArriba homeimage">
				<a href="normativa.php"><img src="img/home/normativa.jpg"/></a>
			</div>
		</div>
		<?php  if (($_SESSION['user']['id_etapa']=='10') OR ($_SESSION['user']['id_etapa']=='11') OR ($_SESSION['user']['id_etapa']=='12')OR($_SESSION['user']['id_etapa']=='13') OR($_SESSION['user']['id_etapa']=='14') OR ($_SESSION['user']['id_etapa']=='15')) { ?>
			<div class="row justify-content-md-center">
				<div class="col-sm4 rectanguloAbajo homeimage">
					<?php
					if ($_SESSION['user']['id_etapa']=='15'){
						?>
						<a href="elegirHijo.php"><img src="img/home/inscripcion.jpg" /></a>
						<?php
					} else {
						?>
						<a href="inscripcion.php"><img src="img/home/inscripcion.jpg" /></a>

						<?php

					}
					?>
				</div>
				<?php
			}
			?>
			<div class="col-sm4 rectanguloAbajo homeimage">
				<?php
				//CONSULTA PARA SACAR QUIEN TIENE HECHA LA RESERVA
					// $a="SELECT * FROM tbl_usuario_ticket WHERE `tbl_usuario_ticket`.`para_usuario`=".$_SESSION['user']['id_usuario'];
					// $quien = mysqli_query($conexion, $a);
					// if (mysqli_num_rows($quien)>0) {
					// 	while ($quienes=mysqli_fetch_array($quien)){
					// 		$id_usuario=$quienes['id_usuario'];
					// 	}
					// }
				//CONSULTA PARA CLASIFICAR EL TIPO DE ETAPA SI ERES UN PADRE
						$g="SELECT `tbl_padres_alu_profe`.`id_usu_dep`, `tbl_usuarios`.`id_usuario`, `tbl_etapa`.`id_etapa` FROM `tbl_padres_alu_profe` INNER JOIN `tbl_usuarios` ON `tbl_padres_alu_profe`.`id_usuario` = `tbl_usuarios`.`id_usuario` INNER JOIN `tbl_etapa` ON `tbl_usuarios`.`id_etapa` = `tbl_etapa`.`id_etapa` WHERE `tbl_padres_alu_profe`.`id_usu_dep`=".$_SESSION['user']['id_usuario'];
						$gestiones = mysqli_query($conexion, $g);
						if (mysqli_num_rows($gestiones)>0) {
							while ($gestion=mysqli_fetch_array($gestiones)){
								$nombre_etapa=$gestion['id_etapa'];
								if (($_SESSION['user']['id_etapa']=='15') AND (($nombre_etapa=='7')OR($nombre_etapa=='8')OR($nombre_etapa=='9'))) {
								}
							}
							?>
							<a href="gestionElegirHijo.php"><img src="img/home/gestion.jpg" /></a>
							<?php
						}  else if (($_SESSION['user']['id_etapa']=='10') OR ($_SESSION['user']['id_etapa']=='11')OR ($_SESSION['user']['id_etapa']=='12')OR ($_SESSION['user']['id_etapa']=='13')OR ($_SESSION['user']['id_etapa']=='14')OR ($_SESSION['user']['id_etapa']=='15')) {
							?>
							<a href="gestion.php"><img src="img/home/gestion.jpg" /></a>
							<?php
						}else {	
						}
				?>
			</div>
			<?php  if ($_SESSION['user']['mail_usuario']=='jantonio.lopez@fje.edu'){ ?>
				<!-- Este es el enlace para ir a la pagina de informes -->
				<div class="col-sm4 rectanguloAbajo homeimage">
					<a href="informe.php"><img src="img/home/informes.jpg"/></a>
				</div>
				<!-- FIN de la caja de Informes-->
				<?php
			}
			?>
		</div>
	</div>
	<?php  if (($_SESSION['user']['id_etapa']=='7') OR ($_SESSION['user']['id_etapa']=='8') OR ($_SESSION['user']['id_etapa']=='9')) { ?>
	</br></br></br>
	<?php
}
?>
<form method="get" action="conexion.proc.php">
	<button type="text" name="home" class="btn btn-danger" style="color:white">
		<span class="fas fa-power-off"></span>
	</button>
</form>
</div>
</div>
<br><br><br><br>
<!--Final del contenido-->

<!--Final de la página en sí-->

<?php
		//Insertamos el footer
require_once 'foothead/footer.php';
?>
<!-- Fin footer -->