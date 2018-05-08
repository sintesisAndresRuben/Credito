<?php
	session_start();
	if(isset($_SESSION['id'])){
		header("location: 171124_principal.php");
	} else if(isset($_SESSION['error'])){
		$error = $_SESSION['error'];
		session_destroy();
	} else if(isset($_SESSION['eliminado'])){
		$eliminado = $_SESSION['eliminado'];
		session_destroy();
	}	
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/prueba.css">
		<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
		<title>Iniciar Sesion</title>
	</head>
	<body>

		
		<div class="loginBox">
			<div class="glass">
				<img src="img/user.png" class="user">

				<h3>Iniciar Sesion</h3>
				<form action="171124_login.proc.php" method="get">
					<div class="inputBox">
							<input type="text" name="username" placeholder="Usuario">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
					<div class="inputBox">
							<input type="password" name="password" placeholder="Contraseña">
							<span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
							<?php
			if(isset($error)){
				echo "<p style='color: red;'>".$error."</p>";

			} else if (isset($eliminado)) {
				echo "<p style='color: red;'>".$eliminado."</p>";
			}
		?>
					</div>
						<input type="submit" value="Acceder"/>
				</form>
				
		</body>

</html>
