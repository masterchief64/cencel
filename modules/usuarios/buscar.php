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

	<form action="" method="POST">
		<div class="ui action input">
			<input type="text" name="usuarios" required placeholder="Nombre Usuario">			
			<button class="ui icon button">
				<i class="search icon"></i>
			</button>
		</div>
	</form>
	<div class="results">
		<?php while($row = mysqli_fetch_array($usuarios)){ ?>
			<span><?php echo $row['nombre'];  ?></span>
			<?php } ?>		
	</div>
</body>
</html>