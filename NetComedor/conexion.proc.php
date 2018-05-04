<?php
	$dbServer = "127.0.0.1"; // Nombre o IP del servidor 10.4.11.200
	$dbUser = "root"; // Nombre de usuario
	$dbPwd = ""; // Contraseña del servidor
	$dbNameBD = "bd_comedor"; // Nombre de la base de datos

	$conexion = mysqli_connect ($dbServer, $dbUser, $dbPwd, $dbNameBD);
	mysqli_query($conexion,"SET NAMES 'utf8'"); // Establece el texto a mostrar, de la base de datos, en UTF8

	if (!$conexion) {
		echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
		echo "Errno de depuración: " . mysqli_connect_errno () . PHP_EOL;
		echo "Error de depuración: " . mysqli_connect_error () . PHP_EOL;
		exit;
	}

	if (isset($_POST['login'])) {
		session_start();
		$user = $_POST['username'];
		$pwd1 = $_POST['password'];

		$pwd = md5($pwd1);

		$sqlLogin = "SELECT * FROM tbl_usuarios WHERE mail_usuario = '$user' AND password_usuario = '$pwd'";
		$result = mysqli_query($conexion,$sqlLogin);

		if (mysqli_num_rows($result)>0) {
			$usu_session = (mysqli_fetch_array($result));
			$_SESSION['id_usuario'] = $usu_session['id_usuario'];
			$_SESSION['nombre_usuario'] = $usu_session['nombre_usuario'];
			$_SESSION['apellido_usuario'] = $usu_session['apellido_usuario'];
			$_SESSION['tipo_usuario'] = $usu_session['tipo_usuario'];
			$_SESSION['mail_usuario'] = $user;
			$_SESSION['admin'] = $usu_session['admin'];

			//Admin = 1 (sí) - Admin = 0/NULL (no)
			if ($_SESSION['admin'] == "si") {
				header('location: admin.php');
			} else if ($_SESSION['admin'] == "no") {
				header('location: net.php');
			} else {
				echo "La cuenta no existe";
				session_destroy();
			}
		} else {
			header('Location: error.html');
			session_destroy();
		}

		// header('Location: platos.php');
	}
	// Comprueba que la opción "Cerrar Sesión" se ha seleccionado
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['usu_email']);
		mysqli_close($conexion);
		header('location: index.php');
	}

	?>