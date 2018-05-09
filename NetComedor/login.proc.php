<?php

session_start();

	//si existe la variable id dentro del array $_SESSION, es que la sesión ha sido iniciada, y lo que hay que hacer es redirigir al usuario a la página principal
if(isset($_SESSION['user'])){
	header("location: home.php");
	//si no existe la variable de id dentro del array $_SESSION, es que no hay sesión, y por lo tanto, hay que consultar en la base de datos y hacer lo que sea (iniciar sesión y redirigir, o bien tirar 'para atrás')
} else {
	include("conexion.proc.php");
	$password_encriptado = md5($_REQUEST['password']);
		//echo $password_encriptado;

	$q = "SELECT * FROM usuario WHERE mail_usuario ='$_REQUEST[mail]' AND pwd='$password_encriptado'";
	echo $q;
	$resultado = mysqli_query($conexion, $q);
	if (mysqli_num_rows($resultado)>0){
		$datos_usuario=(mysqli_fetch_array($resultado));
			// if ($datos_usuario['estado']=="Eliminado") {
			// 	$_SESSION['eliminado']="El usuario esta eliminado";
			// 	header("location: login.php");
			// } else {
		$_SESSION['user']=$_REQUEST['mail'];
			//$_SESSION['nivel']=$datos_usuario['nivel'];
			// $_SESSION['foto']=$datos_usuario['foto'];
		header("location: home.php");
			// }
	} else {
		$_SESSION['error']="Login incorrecto";
		//header("location: login.php");
	}
}
?>