<?php

	session_start();

	//si existe la variable id dentro del array $_SESSION, es que la sesión ha sido iniciada, y lo que hay que hacer es redirigir al usuario a la página principal
	if(isset($_SESSION['id'])){
		header("location: recursos.php.php");
	//si no existe la variable de id dentro del array $_SESSION, es que no hay sesión, y por lo tanto, hay que consultar en la base de datos y hacer lo que sea (iniciar sesión y redirigir, o bien tirar 'para atrás')
	} else {
		include("1718_conexion.proc.php");
		include 'session.php';

		$password_encriptado = md5($_REQUEST['password']);
		//echo $password_encriptado;

		$q = "SELECT * FROM usuario WHERE alias='$_REQUEST[username]' AND pwd='$password_encriptado'";
		//echo $q;
		$resultado = mysqli_query($con, $q);
		if(mysqli_num_rows($resultado)>0){
			$datos_usuario=mysqli_fetch_array($resultado);

			if ($datos_usuario['estado']=="Eliminado") {
				$_SESSION['eliminado']="El usuario esta eliminado";
				header("location: index.php");
			} else {
				$_SESSION['id']=$_REQUEST['username'];
				$_SESSION['nivel']=$datos_usuario['nivel'];
				$_SESSION['foto']=$datos_usuario['foto'];
				header("location: recursos.php");
			}
		} else {
			$_SESSION['error']="Login incorrecto";
			header("location: index.php");
		}
	}




?>