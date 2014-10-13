<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Carrusel</title>

</head>
<body>
	<script src="js/jquery.min.js"></script>	<!--bootstrap lo necesita pra realizar acciones-->
	<script src="js/bootstrap.js"></script>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
       <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Ingresa y enterate de lo nuevo</h1>
            <div class="account-wall">

                <form name="form1" action="iniciar.php" target="_blank" method="post">
               nombre:<input name="nombre" type="text" class="form-control" placeholder="Nombre" required autofocus>
                contrasenia:<input name="contrasenia" type="password" class="form-control" placeholder="Contraseña" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Iniciar sesion</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Recordarme
                </label>
                <a href="#" class="pull-right need-help">Ayuda? </a><span class="clearfix"></span>
                </form>
            </div>
            <form class="form-signin" name="form1" action="registrarse.php" target="_blank" method="get">
             <button class="text-center new-account" type="submit">
                    Registrase</button>
        	</form>
        </div>
    </div>
</div>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/pug.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
     <img src="img/cafe.jpg" alt="...">
      <div class="carousel-caption">

        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="img/bosque.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	<!--tienen jerarquia !!! (igual que css) -->
	<script src="js/jquery.min.js"></script>	<!--bootstrap lo necesita pra realizar acciones-->
	<script src="js/bootstrap.js"></script>	
	
</body>
</html>