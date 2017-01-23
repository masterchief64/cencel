<?php include("../../models/usuarios.php"); ?>
<?php
	if(isset($_POST['usuarios'])){
		$data_name = $_POST['usuarios'];
		$Usuario = new Usuario();
		$usuarios = $Usuario->search($data_name);
	} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/themes/material/assets/fonts/icons.woff">
</head>
<body>
<!-- Menu -->
<div class="ui menu">
    <a class="item">
      Home
    </a>
    <a class="ui dropdown item" id="user-select">
      Usuarios
      <i class="dropdown icon"></i>
      <div class="menu">
      <div class="item">Registrar</div>
      <div class="item">Buscar</div>
        <div class="item">
          <i class="dropdown icon"></i>
          <span class="text">Alterar</span>
          <div class="menu">
            <div class="item">Datos Generales</div>
            <div class="item">Login/Password</div>
          </div>
        </div>
        <div class="item">Bloquear/Desbloquear</div>
        <div class="item">Directorio</div>
      </div>
    </a>
    
  </div>

	<div class="ui four column centered grid">
		<div class="column">
			<form action="" method="POST">
		<div class="ui big fluid category search">
			<div class="ui icon input">
				<input type="text" class="prompt" name="usuarios" placeholder="Buscar Usuario...">
			</div>
			<button class="circular ui teal icon button">
				<i class="icon search"></i>
			</button>
		</div>
	</form>		
		</div>
		<div class="four column centered row">
			<div class="column">b</div>
			<div class="column">c</div>
		</div>
	</div>
	
	<!-- Tabla de Usuarios -->

	<table class="ui striped table">
		<thead>
			<tr>
				<th>Clave</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Poblacion</th>
				<th>CP</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>RFC</th>
				<th>Usuario</th>
				<th>Nivel de Acceso</th>
				<th>Precio Asignado</th>
				<th>Almacen</th>
			</tr>
		</thead>
		<tbody>
		<?php while($row = mysqli_fetch_array($usuarios)){ ?>
			<tr>
				<td><?php echo $row['id_usuario']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['direccion']; ?></td>
				<td><?php echo $row['poblacion']; ?></td>
				<td><?php echo $row['codigo_postal']; ?></td>
				<td><?php echo $row['telefono1']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['rfc']; ?></td>
				<td><?php echo $row['login']; ?></td>
				<td><?php echo $row['precio_asignado']; ?></td>
				<td><?php echo $row['precio_asignado']; ?></td>
				<td><?php echo $row['almacen']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<div class="results">
		<?php while($row = mysqli_fetch_array($usuarios)){ ?>
			<span><?php echo $row['nombre'];  ?></span>
			<?php } ?>		
	</div>
</body>
</html>