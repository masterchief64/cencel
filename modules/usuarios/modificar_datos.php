<?php include("../../models/usuarios.php"); ?>
<?php
		$id_user = "";
		

		if(isset($_POST['user'])){
			$Usuario = new Usuario();
			$id_user = $_POST['user'];
 			$usuario = $Usuario->get_by_id($id_user);
 			$row = mysqli_fetch_array($usuario);
    }  	
      if(isset($_POST['usuarios'])){
      $datos_usuario = $_POST['usuarios'];
      $Usuario = new Usuario();
      print_r($datos_usuario);
      $id_user = $datos_usuario['id_usuario'];
      $Usuario->update_user($datos_usuario, $id_user);
    
    }

		
 ?>
 <?php 
 		
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Modificar Datos</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/themes/material/assets/fonts/icons.woff">
  <link rel="stylesheet" href="static/css/login-form.css" />
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
  <script src="static/js/login-form.js"></script>
</head>
<body>
	<?php require_once("../../templates/menu.php") ?>
	<div class="ui four column centered grid">
		<div class="column">
			<form action="" method="POST">
				<div class="ui big fluid category search">
					<div class="ui icon input">
						<input type="text" class="prompt" name="user" placeholder="Clave Usuario">
					</div>
					<button class="circular ui teal icon button">
						<i class="icon search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!--Formulario Datos-->
	<div class="ui raised very padded text container segment">
  <h2 class="ui header">Modificar Usuario</h2>
  <div class="ui form">
  	<form action="" class="ui form" method="POST">
  <input  type="text" name="usuarios[id_usuario]" id="id_usuario" value="<?php echo $row['id_usuario']; ?> " placeholder="id">
  		
      <div class="field">
  			<label for="">Nombre</label>
  			<input type="text" name="usuarios[nombre]" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
  		</div>
  		<div class="field">
  			<label for="">Direccion</label>
  			<input type="text" name="usuarios[direccion]" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
  		</div>
  		<div class="field">
  			<label for="">Poblacion</label>
  			<div class="fields">	
  				<div class="twelve wide field">
  					<input type="text" name="usuarios[poblacion]" placeholder="Poblacion" value="<?php echo $row['poblacion'] ?>">
  				</div>
  				<div class="four wide field">
  					<input type="text" name="usuarios[codigo_postal]" placeholder="Codigo Postal" value="<?php echo $row['codigo_postal'] ?>">
  				</div>
  			</div>
  		</div>
  		<div class="field">
  			<label for="">Telefonos</label>
  			<div class="two fields">
  				<div class="field">
  					<input type="text" name="usuarios[telefono1]" placeholder="Telefono 1" maxlength="5" value="<?php echo $row['telefono1'] ?>">
  				</div>
  				<div class="field">
  					<input type="text" name="usuarios[telefono2]" placeholder="Telefono 2" maxlength="5" value="<?php echo $row['telefono2'] ?>">
  				</div>
  			</div>
  		</div>
  		<div class="fields">
  			<div class="twelve wide field">
  				<label for="">Email</label>
  				<input type="email" name="usuarios[email]" placeholder="Email" value="<?php echo $row['email'] ?>">
  			</div>
  			<div class="five wide field">
  				<label for="">RFC</label>
  				<input type="text" name="usuarios[rfc]" placeholder="RFC" value="<?php echo $row['rfc'] ?>">
  			</div>
  		</div>
  		<div class="equal width fields">
  		
  			<div class="field">
  				<label for="">Precio Asignado</label>
  				<select name="usuarios[precio_asignado]" id="" class="ui fluid dropdown" value="<?php echo $row['precio_asignado'] ?>">
  					<option value="">Precio Asignado</option>
  					<option value="publico">Publico</option>
  					<option value="subdistribuidor">Subdistribuidor</option>
  					<option value="distribuidor">Distribuidor</option>
  					<option value="medio mayoreo">Medio Mayoreo</option>
  					<option value="mayoreo">Mayoreo</option>
  					<option value="costo">Costo</option>
  				</select>
  			</div>

				<div class="field">
  				<label for="">Almacen</label>
  				<select name="usuarios[almacen]" id="" class="ui fluid dropdown" value="<?php echo $row['almacen'] ?>">
  					<option value="">Almacen</option>
  					<option value="san juan del rio">San Juan del Rio</option>
  				</select>
  			</div>
  			<div class="field">
  				<label for="">Tipo de cliente</label>
  				<select name="usuarios[tipo_cliente]" id="" class="ui fluid dropdown" value="<?php echo $row['tipo_cliente'] ?>">
  					<option value="">Tipo de cliente</option>
  					<option value="subdistribuidor">Subdistribuidor</option>
  					<option value="tienda propia">Tienda Propia</option>
  					<option value="almacen mayorista">Almacen Mayorista</option>
  				</select>
  			</div>
  		</div>
  		<input type="submit" class="ui green button" value="Actualizar">
      <a href="" class="ui blue button">Facebook</a>
  	</form>
  </div>
</div>

	<script>
		$('#user-select').dropdown();
  $('#almacen-select').dropdown();
	</script>
</body>
</html>