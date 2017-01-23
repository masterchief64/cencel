<?php include("../../models/usuarios.php"); ?>

	<?php 
	  if(isset($_POST['usuarios'])){
	  	$datos_usuario = $_POST['usuarios'];
	  	echo $datos_usuario['nombre'];

      

	  	$email = "";
	  	if($datos_usuario['email'] != $email){
        
	  		$Usuario = new Usuario();
        $usuarios = $Usuario->get_users();
        while($row = mysqli_fetch_array($usuarios)){

        }
        echo $row;
	  		$Usuario->add_user($datos_usuario);	
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/themes/material/assets/fonts/icons.woff">
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
  
</head>
<body>


<!-- Main Menu -->
<div class="ui menu">
  <a href="#" class="item">Home</a>
  <div id="user-select" class="ui pointing dropdown link item">
    <span class="text">Usuarios</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">Registrar</div>
      <div class="item">Buscar</div>
      <div class="item">
        <i class="dropdown icon"></i>
        <span>Alterar</span>
        <div class="menu">
          <div class="item">Datos Generales</div>
          <div class="item">Login/Password</div>
        </div>
      </div>
      <div class="item">Bloquear/Desbloquear</div>
      <div class="item">Directorio</div>
    </div>
  </div>
</div>


	
<div class="ui raised very padded text container segment">
  <h2 class="ui header">Registrar Usuario</h2>
  <div class="ui form">
  	<form action="" class="ui form" method="POST">
  		<div class="field">
  			<label for="">Nombre</label>
  			<input type="text" name="usuarios[nombre]" placeholder="Nombre">
  		</div>
  		<div class="field">
  			<label for="">Direccion</label>
  			<input type="text" name="usuarios[direccion]" placeholder="Direccion">
  		</div>
  		<div class="field">
  			<label for="">Poblacion</label>
  			<div class="fields">
  				<div class="twelve wide field">
  					<input type="text" name="usuarios[poblacion]" placeholder="Poblacion">
  				</div>
  				<div class="four wide field">
  					<input type="text" name="usuarios[codigo_postal]" placeholder="Codigo Postal">
  				</div>
  			</div>
  		</div>
  		<div class="field">
  			<label for="">Telefonos</label>
  			<div class="two fields">
  				<div class="field">
  					<input type="text" name="usuarios[telefono1]" placeholder="Telefono 1" maxlength="5">
  				</div>
  				<div class="field">
  					<input type="text" name="usuarios[telefono2]" placeholder="Telefono 2" maxlength="5">
  				</div>
  			</div>
  		</div>
  		<div class="fields">
  			<div class="twelve wide field">
  				<label for="">Email</label>
  				<input type="email" name="usuarios[email]" placeholder="Email">
  			</div>
  			<div class="five wide field">
  				<label for="">RFC</label>
  				<input type="text" name="usuarios[rfc]" placeholder="RFC">
  			</div>
  		</div>
  		<div class="equal width fields">
  			<div class="field">
  				<label for="">Username</label>
  				<input type="text" name="usuarios[login]" placeholder="Login">
  			</div>
  			<div class="field">
  				<label for="">Password</label>
  				<input type="text" name="usuarios[pass]" placeholder="Password">
  			</div>
  			<div class="field">
  				<label for="">Password</label>
  				<input type="text" placeholder="Confirma Password">
  			</div>
  		</div>
  		<div class="equal width fields">
  			<div class="field">
  				<label for="">Perfil</label>
  				<select name="usuarios[perfil]" id="" class="ui fluid dropdown">
  					<option value="">Perfil</option>
  					<option value="tienda">Tienda</option>
  					<option value="almacen">Almacen</option>
  					<option value="subadministrador">Subadministrador</option>
  					<option value="administrador">Administrador</option>
  				</select>
  			</div>
  			<div class="field">
  				<label for="">Presio Asignado</label>
  				<select name="usuarios[precio_asignado]" id="" class="ui fluid dropdown">
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
  				<select name="usuarios[almacen]" id="" class="ui fluid dropdown">
  					<option value="">Almacen</option>
  					<option value="san juan del rio">San Juan del Rio</option>
  				</select>
  			</div>
  			<div class="field">
  				<label for="">Tipo de cliente</label>
  				<select name="usuarios[tipo_cliente]" id="" class="ui fluid dropdown">
  					<option value="">Tipo de cliente</option>
  					<option value="subdistribuidor">Subdistribuidor</option>
  					<option value="tienda propia">Tienda Propia</option>
  					<option value="almacen mayorista">Almacen Mayorista</option>
  				</select>
  			</div>
  		</div>
  		<input type="submit" class="ui green button" value="Registrar">
      <a href="" class="ui blue button">Facebook</a>
  	</form>
  </div>
</div>
<script type="text/javascript">
  $('#user-select').dropdown({transition: 'fade'});
</script>
</body>
</html>