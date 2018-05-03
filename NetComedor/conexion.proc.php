<?php
	$dbServer = "127.0.0.1"; // Nombre o IP del servidor 10.4.11.200
	$dbUser = "root"; // Nombre de usuario
	$dbPwd = ""; // Contraseña del servidor
	$dbNameBD = "bd_friendlyfood"; // Nombre de la base de datos

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
		$user = $_POST['heroEmail'];
		$pwd = $_POST['heroPassword'];

		$pwd = md5($pwd);

		$sqlLogin = "SELECT * FROM tbl_usuario WHERE usu_email = '$user' AND usu_password = '$pwd'";
		$result = mysqli_query($conexion,$sqlLogin);

		if (mysqli_num_rows($result)>0) {
			$usu_session = (mysqli_fetch_array($result));
			$_SESSION['usu_id'] = $usu_session['usu_id'];
			$_SESSION['usu_nombre'] = $usu_session['usu_nombre'];
			$_SESSION['usu_apellido'] = $usu_session['usu_apellido'];
			$_SESSION['usu_admin'] = $usu_session['usu_admin'];
			$_SESSION['usu_email'] = $user;

			if ($usu_session['usu_admin'] == "Si") {
				header('location: admin.php');
			} else if ($usu_session['usu_admin'] == "No") {
				header('location: platos.php');
			} else {
				echo "La cuenta no existe";
				session_destroy();
			}
		} else {
			echo "Usuario o Contraseña incorrectos";
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

	if (isset($_POST['favoritos'])) {
		$idsesion = $_POST['elimina'];
		$idsesiondel = $_POST['eliminado'];
		$sql = "DELETE FROM tbl_favorito WHERE usu_id_recibe_fav='$idsesion' AND usu_id_da_fav='$idsesiondel'";
		// echo $sql;
		$result = mysqli_query($conexion,$sql);
		header('location: platos.php');
	}

	if (isset($_POST['add_favoritos'])) {
		$idsesion = $_POST['elimina'];
		$idsesiondel = $_POST['eliminado'];
		$sql = "INSERT INTO `tbl_favorito` (`usu_id_da_fav`, `usu_id_recibe_fav`) VALUES ($idsesiondel, $idsesion)";
		// echo $sql;
		$result = mysqli_query($conexion,$sql);
		header('location: platos.php');
	}











	?>