<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>

	<body><br>
  
      
<!--login modal-->
<div id="loginModal" class="modal show bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
<h1 class="text-center"><br><small>Registro de Atencion al Ciudadano</small></h1>
      <div class="container">
         <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
             <?php
                 if ($_GET["errorusuario"]=="si"){
             ?>
                 <div class="alert alert-danger"><strong> Datos Incorrectos !</strong></div>
             <?php
               }
             ?>
           </div>
           <div class="col-md-4"></div>
         </div>
       </div>

  <div class="modal-dialog modal-sm">
  <div class="modal-content">

      <div class="modal-header" style="background-color:#D9534F;color:#ffffff;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="text-center">Iniciar Sesion</h3>
          
      </div>
       
      <div class="modal-body">
          <form  action="login/autenticacion.php" method="POST" class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-md" name="usuario" placeholder="Usuario" autofocus>
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-md" name="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger btn-md btn-block">ENTRAR  <span class="glyphicon glyphicon-log-in"></span></button>
          </form>
      </div>

      <div class="modal-footer ">
          <h6 class="text-center"><strong> ©Reatci 2015</strong></h6> 
		  </div>	

      </div>
  </div>
  </div>
</div>



	<!-- script references -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
           <?php
             session_start();
             if ($_SESSION["autenticado"] == "SI") {
             session_destroy();
             exit();
             }
         ?>
	</body>
</html>