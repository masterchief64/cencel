<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema CENCEL</title>
	<link rel="stylesheet" href="static/css/semantic.min.css" />
	<link rel="stylesheet" href="static/css/icon.css" />
</head>
<body>
	<!-- Dropdown Structure -->
<div class="ui stackable menu">
  <div class="item">
    <img src="/images/logo.png">
  </div>
  <a class="item">Features</a>
  <a class="item">Testimonials</a>
  <div class="ui vertical menu">
  <div class="ui dropdown item">
    Categories
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item">Electronics</a>
      <a class="item">Automotive</a>
      <a class="item">Home</a>
    </div>
  </div>
</div>
</div>
       
	<h1>Proyecto CENCEL</h1>

	<script src="static/js/materialize.min.js"></script>
	<script src="static/js/jquery.js"></script>
	<script src="static/js/jquery.timeago.min.js"></script>
	<script src="static/js/prism.js"></script>
	<script src="static/js/lunr.min.js"></script>
	<script src="static/js/search.js"></script>
	<script src="static/js/init.js"></script>

	<script>
		$( document ).ready(function){
			$(".dropdown-button").dropdown();
		}
	</script>


	

</body>
</html>