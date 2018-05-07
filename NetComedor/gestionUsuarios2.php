<?php 
session_start();
include("conexion.proc.php");
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

<div class="container">
  <table id="my-example">
    <thead>
      <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Mail</th>
          <th>Password</th>
          <th>Tipo</th>
          <th>Admin</th>
          <th>Id_etapa</th>
      </tr>
    </thead>
  </table>
  <br><br>
</div>

				<!--Final del contenido-->

				<!--Final de la página en sí-->

				<?php
		//Insertamos el footer
				require_once 'foothead/footer.php';
				?>
				</html>