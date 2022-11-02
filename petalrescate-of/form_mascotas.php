<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MASCOTAS</title>
</head>
<body>
<div class="col-md-6">
	<form action="insertar_usuario.php" method="POST"><br>
		<center>
			<label class="form-control">Escriba el nombre de su mascota</label>
			<input type="text" name="nombre mascota" placeholder="nombre" required><br><br>

			<label class="form-control">Escriba la raza de su mascota</label>
			<input type="text" name="raza" placeholder="raza" required><br><br>

			<label class="form-control">Edad de su mascota</label>
			<input type="text" name="Edad" placeholder="edad" required><br><br>

			<label class="form-control">Sector</label>
			<input type="text" name="Sector" placeholder="Sector" required><br><br>

			<label class="form-control">Tipo de animal</label>
			<input type="text" name="tipo animal" placeholder="tipo animal" required><br><br>

			<button type="submit" name="ingresar">Registrarse</button>
		</center>
	</form>
</div>
<?php
include('principal.php');
	if (isset($_POST['ingresar'])) {
		$nomb=$_POST['nombre'];
		$raza=$_POST['raza'];
		$edad=$_POST['edad'];
		$sector=$_POST['sector'];
		$tipoanimal=$_POST['tipo animal'];
		

		$insertar= "INSERT INTO usuario(NOMBRE, RAZA, EDAD, SECTOR, TIPOAN) VALUES ('$nomb','$raza','$edad','$sector','$tipoanimal')";


		$ejecutar=mysqli_query($con,$insertar);
		if($ejecutar){

			echo "Ingreso exitoso";
		}
		


	}

?>


</body>
</html>
