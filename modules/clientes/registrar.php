<?php include("../../models/clientes.php"); ?>

	<?php 
	  if(isset($_POST['clientes'])){
	  	$datos_cliente = $_POST['clientes'];
	  	echo $datos_cliente['nombre'];

      if($datos_cliente )

	  	$email = "yo@gmail.com";
	  	if($datos_cliente['email'] != $email){

	  		$Cliente = new Cliente();
        $usuarios = $Cliente->get_users();
        while($row = mysqli_fetch_array($usuarios)){

        }
        echo $row;
	  		$Cliente->add($datos_cliente);	
	  	}else{
	  		echo "El email ya existe";
	  	}

	  	
	  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar Usuario</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>




	
<div class="ui raised very padded text container segment">
  <h2 class="ui header">Registrar Usuario</h2>
  <div class="ui form">
  	<form action="" class="ui form" method="POST">
  		<div class="field">
  			<label for="">Nombre</label>
  			<input type="text" name="clientes[nombre]" placeholder="Nombre">
  		</div>
  		<div class="field">
  			<label for="">Direccion</label>
  			<input type="text" name="clientes[direccion]" placeholder="Direccion">
  		</div>
  		<div class="field">
  			<label for="">Poblacion</label>
  			<div class="fields">
  				<div class="twelve wide field">
  					<input type="text" name="clientes[poblacion]" placeholder="Poblacion">
  				</div>
  				<div class="four wide field">
  					<input type="text" name="clientes[codigo_postal]" placeholder="Codigo Postal">
  				</div>
  			</div>
  		</div>
  		<div class="field">
  			<label for="">Telefonos</label>
  			<div class="two fields">
  				<div class="field">
  					<input type="text" name="clientes[telefono1]" placeholder="Telefono 1">
  				</div>
  				<div class="field">
  					<input type="text" name="clientes[telefono2]" placeholder="Telefono 2">
  				</div>
  			</div>
  		</div>
  		<div class="fields">
  			<div class="twelve wide field">
  				<label for="">Email</label>
  				<input type="email" name="clientes[email]" placeholder="Email">
  			</div>
  			<div class="five wide field">
  				<label for="">RFC</label>
  				<input type="text" name="clientes[rfc]" placeholder="RFC">
  			</div>
  		</div>
  		<div class="equal width fields">
  			<div class="field">
  				<label for="">Username</label>
  				<input type="text" name="clientes[login]" placeholder="Login">
  			</div>
  			<div class="field">
  				<label for="">Password</label>
  				<input type="text" name="clientes[pass]" placeholder="Password">
  			</div>
  			<div class="field">
  				<label for="">Password</label>
  				<input type="text" placeholder="Confirma Password">
  			</div>
  		</div>
  		<div class="equal width fields">
  			<div class="field">
  				<label for="">Perfil</label>
  				<select name="clientes[perfil]" id="" class="ui fluid dropdown">
  					<option value="">Perfil</option>
  					<option value="tienda">Tienda</option>
  					<option value="almacen">Almacen</option>
  					<option value="subadministrador">Subadministrador</option>
  					<option value="administrador">Administrador</option>
  				</select>
  			</div>
  			<div class="field">
  				<label for="">Presio Asignado</label>
  				<select name="clientes[precio_asignado]" id="" class="ui fluid dropdown">
  					<option value="">Precio Asignado</option>
  					<option value="publico">Publico</option>
  					<option value="subdistribuidor">Subdistribuidor</option>
  					<option value="distribuidor">Distribuidor</option>
  					<option value="medio mayoreo">Medio Mayoreo</option>
  					<option value="mayoreo">Mayoreo</option>
  					<option value="costo">Costo</option>
  				</select>
  			</div>
  		</div>
  		<div class="equal width fields">
  			<div class="field">
  				<label for="">Almacen</label>
  				<select name="clientes[almacen]" id="" class="ui fluid dropdown">
  					<option value="">Almacen</option>
  					<option value="san juan del rio">San Juan del Rio</option>
  				</select>
  			</div>
  			<div class="field">
  				<label for="">Tipo de cliente</label>
  				<select name="clientes[tipo_cliente]" id="" class="ui fluid dropdown">
  					<option value="">Tipo de cliente</option>
  					<option value="subdistribuidor">Subdistribuidor</option>
  					<option value="tienda propia">Tienda Propia</option>
  					<option value="almacen mayorista">Almacen Mayorista</option>
  				</select>
  			</div>
  		</div>
  		<input type="submit" class="ui green button" value="Registrar">
  	</form>
  </div>
</div>
<script>
  $('.ui.dropdown')
  .dropdown();
</script>
</body>
</html>