<!DOCTYPE html>
<?php
include('principal.php');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Registro</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		<link rel="stylesheet" href="styles.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<nav class="nav-main">
			<img src="C:\xampp2\htdocs\petalrescate-of\petlogo.jpeg" alt="PetAlRescateLogo" class="nav-brand">

			<ul class="nav-menu">
			<li>
					<a href="PetAlRescate.html">INICIO</a>
				</li>
				<li>
					<a href="quienes_somos.php">¿QUIENES SOMOS?</a>
				</li>
				<li>
					<a href="registro.php">INICIAR SESION</a>

				<li>
					<a href="contactanos.php">CONTACTANOS</a>
				</li>
				</li>
			</ul>
			<ul class="mav-menu-right">
				<li>
					<a href="#">
						<i class="fas fa-search"></i>
					</a>
				</li>
		</nav>
		<hr>
	</div>
    <center>
	
	<h4><p><font color="black">Por favor ingrese los datos solicitados:</font></p></h4><br>
	<div class="col-mid-9">
    
		<form action="registro.php" method="POST">
		<table bgcolor="yellow">
			
				<p><p><label class="e" ><font color="black">Escriba su nombre</font></label>
				<input type="text" name="nombre" placeholder="nombre" required><br><br></p>
	
				<p><label class="e"><font color="black">Escriba su apellido</font></label>
				<input type="text" name="apellido" placeholder="apellido" required><br><br></p>
	
				<p><label class="e"><font color="black">Numero de documento</font></label>
				<input type="text" name="numdoc" placeholder="numero de documento" required><br><br></p>
	
				<p><label class="e"><font color="black">Direccion de residencia</font></label>
				<input type="text" name="direccion" placeholder="direccion" required><br><br></p>
	
				<p><label class="e"><font color="black">Ingrese su numero de telefono</font></label>
				<input type="text" name="telef" placeholder="telefono" required><br><br>
                <p><label class=""><font color="black">Correo electronico</font></label>
				<input type="email" name="correo" placeholder="correo" required><br><br>
				<p><font color="black">BARRIO</font>

	  <select class= "e"name="barrios" >
	  <option value="">seleccione el barrio</option>

	  <?php
	  
			 $consulta= "SELECT * FROM barrios_2";
			 $ejecutar=mysqli_query($con, $consulta);
			 $i=0;
			 while ($row=mysqli_fetch_array($ejecutar) ){
			  
			  echo '<option value="'.$row[ID_BARRIO].'">'.$row[barrios].'</option>';
				}      
					  
	 ?>
	 </select></p>
	 <p>
				<input type="submit" name="ingresar" value="Entrar"></p>
    
			
		</form>
        </center>
	</div>
	<?php
	
		if (isset($_POST['ingresar'])) {
			$nomb=$_POST['nombre'];
			$apell=$_POST['apellido'];
			$numdoc=$_POST['numdoc'];
			$dirre=$_POST['direccion'];
			$numtf=$_POST['telef'];
			$barrio=$_POST['barrios'];
			$correo=$_POST['correo'];
	
			$insertar= "INSERT INTO usuario(NOMBRE_US, APELLIDOS_US, DOC_US, DIRECCION_US, TELEFONO, ID_BARRIO, CORREO) VALUES ('$nomb','$apell','$numdoc','$dirre','$numtf','$barrio','$correo')";
	
			$ejecutar=mysqli_query($con,$insertar);
			if($ejecutar){
	
				echo "Ingreso exitoso";
			}
			
	
	
		}
	
	?>
	<script src="js/jquery.js"></script>   
<script src="js/bootstrap.min.js"></script>	
</body>
</html>