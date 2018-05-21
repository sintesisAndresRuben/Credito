<!DOCTYPE html>
<html>
<head>
	<title>Codigo QR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-8 align-self-center">
			<form action="code.php" name="f1" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Codigo QR</label>
					<input type="text" class="form-control" name="codigoQR" id="code" aria-describedby="emailHelp" placeholder="Inserte un codigo" require>
					<small id="emailHelp" class="form-text text-muted">Por favor, inserte un codigo para canjear los tickets del dia de hoy.</small>
				</div>
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>			

		</div>
	</div>

</body>
</html>