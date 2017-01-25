<?php include("../../models/usuarios.php"); ?>
<?php 
	if(isset($_POST['user'])){
		$Usuario = New Usuario();
		$id_user = $_POST['user'];
		$usuario = $Usuario->get_by_id($id_user);
		$row = mysqli_fetch_array($usuario);
	}
	if(isset($_POST['usuarios'])){
		$datos_login = $_POST['usuarios'];
		$Usuario = new Usuario();
		print_r($datos_login);
		$id_user = $datos_login['id_usuario'];
		$Usuario->update_login($datos_login, $id_user);
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/themes/material/assets/fonts/icons.woff">
  <link rel="stylesheet" href="static/css/login-form.css" />
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
  <script src="static/js/login-form.js"></script>
</head>
<body>
	<?php require_once("../../templates/menu.php"); ?>
	<!--Caja de busqueda-->
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
  	<div class="field">
  		<label for="">Clave</label>
  		<input  type="text" name="usuarios[id_usuario]" id="id_usuario" value="<?php echo $row['id_usuario']; ?> " placeholder="id">
  	</div>
  		
      <div class="field">
  			<label for="">Login</label>
  			<input type="text" name="usuarios[login]" placeholder="Nombre" value="<?php echo $row['login'] ?>">
  		</div>
  		<div class="field">
  			<label for="">Password</label>
  			<input type="text" name="usuarios[pass]" placeholder="Direccion">
  		</div>
  		<div class="field">
  			<label for="">Confirmar Password</label>
  			<div class="fields">	
  				<div class="twelve wide field">
  					<input type="text" name="usuario_pass" placeholder="Confirmar Password">
  				</div>
  			</div>
  		</div>
  		
  		<div class="equal width fields">
  		
  			<div class="field">
  				<label for="">Perfil</label>
  				<select name="usuarios[perfil]" id="" class="ui fluid dropdown" value="<?php echo $row['perfil'] ?>">
  					<option value="">Seleccionar Perfil</option>
  					<option value="publico">Tienda</option>
  					<option value="subdistribuidor">Almacen</option>
  					<option value="distribuidor">Subadministrador</option>
  					<option value="medio mayoreo">Administrador</option>
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