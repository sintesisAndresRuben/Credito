<?php
session_start();
// echo "dentro conexion";
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
// Login desde la NET
	if (isset($_POST['login'])) {
		// echo "isset post login";
		$user = $_POST['username'];
		$pwd1 = $_POST['password'];

		$pwd = md5($pwd1);

		$sqlLogin = "SELECT * FROM tbl_usuarios WHERE mail_usuario = '$user' AND password_usuario = '$pwd'";
		$result = mysqli_query($conexion,$sqlLogin);

		if (mysqli_num_rows($result)>0) {
			$usu_session = (mysqli_fetch_array($result));
			$_SESSION['user'] = $usu_session;
			if ($_SESSION['user']['admin'] == 'si') {
				header('location: admin.php');
			} else if ($_SESSION['user']['admin'] == 'no') {
				header('location: net.php');
			}else{
				echo "La cuenta no existe";
				session_destroy();
			}
		} else {
			header('location: error.html');
			session_destroy();
		}
	}
// Login hecho por nosotros
	if (isset($_POST['login_propio'])) {
		echo "isset post login_propio";
		//session_start();
		$user = $_POST['username'];
		$pwd1 = $_POST['password'];

		$pwd = md5($pwd1);

		$sqlLogin = "SELECT * FROM tbl_usuarios WHERE mail_usuario = '$user' AND password_usuario = '$pwd'";
		$result = mysqli_query($conexion,$sqlLogin);
		if (mysqli_num_rows($result)>0) {
			$usu_session = (mysqli_fetch_array($result));
			$_SESSION['user'] = $usu_session;
			if ($_SESSION['user']['admin'] == 'si') {
				header('location: home.php');
			} else if ($_SESSION['user']['admin'] == 'no') {
				header('location: home.php');
			}else{
				echo "La cuenta no existe";
				session_destroy();
			}
		} else {
			$_SESSION['error']="Login incorrecto";
			header('location: login.php');
			
		}
	}

	//Cerrar Sesión
	if (isset($_REQUEST['home'])) {
		session_start();
		unset($_SESSION['user']);
		mysqli_close($conexion);
		session_destroy();
		header('location: login.php');
	}elseif (isset($_GET['net'])) {
		session_start();
		unset($_SESSION['user']);
		mysqli_close($conexion);
		session_destroy();
		header('location: index.php');
	}
	?>