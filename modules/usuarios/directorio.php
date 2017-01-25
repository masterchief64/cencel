<?php include("../../models/usuarios.php"); ?>
<?php include("../../models/almacenes.php"); ?>
<?php 
	$Usuario = new Usuario();
	$usuarios = $Usuario->get_users();
	$Almacen = new Almacen();
	$almacenes = $Almacen->get_almacenes();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Directorio</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/themes/material/assets/fonts/icons.woff">
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
</head>
<!-- Main Menu -->
<?php require_once("../../templates/menu.php") ?>
<body>
	<div class="ui four column centered grid">
		<div class="column">
			<div id="almacen-select" class="ui floating dropdown labeled green icon button">
				<i class="filter icon"></i>
				<span class="text">Filtrar Almacenes</span>
				<div class="menu">
					<div class="ui icon search input">
						<i class="search icon"></i>
						<input type="text" placeholder="Buscar">
					</div>
					<div class="divider"></div>
					<div class="header">
						<i class="tags icon"></i>
						Tag Label
					</div>
					<div class="scrolling menu">
						<?php while($row = mysqli_fetch_array($almacenes)){ ?>
						<div class="item">
							<div class="ui red empty circular label"></div>
							<?php echo $row['almacen']; ?>
						</div>
							<?php } ?>
					</div>
				</div>
			</div>	
		</div>
	</div>

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

	<script type="text/javascript">
  $('#user-select').dropdown({transition: 'fade'});
</script>
</body>
</html>