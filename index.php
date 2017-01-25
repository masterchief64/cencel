<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema CENCEL</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/themes/material/assets/fonts/icons.woff">
  <link rel="stylesheet" href="static/css/login-form.css" />
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
  <script src="static/js/login-form.js"></script>

</head>
<body>
<?php require_once("templates/menu.php"); ?>
	<!-- Main Menu -->

  


  <!-- Login Form -->
  <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      
      <div class="content">
        Iniciar Sesión
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <label for=""></label>
            <input type="text" name="email" placeholder="Usuario">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">
          <i class="unlock alternate icon"></i>
          Entrar
        </div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>

       
	<h1>Proyecto CENCEL</h1>


<script type="text/javascript">
  $('#user-select').dropdown();
  $('#almacen-select').dropdown();
</script>


	

</body>
</html>