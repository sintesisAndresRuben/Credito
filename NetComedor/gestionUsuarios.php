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
            <div class="row">
                <div class="col-md-12">
                    <h4>ADMINISTRADORES</h4>
                    <br>
                    <div class="table-responsive" style="width:800px; margin: auto;  ">
                        <table id="mytable" class="table table-bordred table-striped">
            <thead>
                <tr>
                    <th style="display:none;">ID</th>
                     <th>CORREO</th>
                    <th>PASSWORD</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <c:forEach var="valor2" items="${listaper}">
                <tr>
                    <td style="display:none;">
                        ${valor2.getId()}
                    </td> 
                    <td>
                        ${valor2.getCorreo()}
                    </td>
                    <td>
                          ${valor2.getPassword()}
                    </td>
                    <td>
                        <!--MODIFICAR-->
                      <a href="modificarusuari?id=${valor2.getId()}"><p data-placement="top" data-toggle="tooltip" title="Editar producto"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt"></i></button></p></a>
                    </td> 
                    <td>
                        <!--ELIMINAR-->
                        <a href="eliminarusuari?id=${valor2.getId()}"><p data-placement="top" data-toggle="tooltip" title="Eliminar producto"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fas fa-trash"></span></button></p></a>
                    </td>
                </tr>       
            </c:forEach>
        </table>
        <form method="get" action="home">
            <button type="text" class="btn btn-warning" style="color:white;">Volver</button>
        </form>














	
	<!--Final del contenido-->

	<!--Final de la página en sí-->

	<?php
		//Insertamos el footer
		require_once 'foothead/footer.php';
	?>

</html>