<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device‐width, user-scalable=no, initial‐scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">

</head>


<body>
      <header>
      <?php  
          include ("navbar.php");
      ?>  
      </header> 
      <br>

         
         <div class="container">   
             <div class="row">
                 <div class="col-md-4">
                 </div>
                 <div class="col-md-8">
                     <h2><small>Seleccione la accion que desea realizar </small> </h2> 
                 </div> 
                 <div class="col-md-4">
                 </div>
             </div> 
     	 </div><br><br>

         <div class="container">
             <div class="row">

                  <div class="col-md-2">
                  </div>

     	          <div class="col-md-4">
     	         
     	             <div class="btn-group btn-group-lg">
     	                 <a href="nuevo_registro.php" class="btn   btn-primary" style="width:79px;height:80px"><h3><span class="glyphicon glyphicon-pencil"></span></h3></a>
                         <a href="nuevo_registro.php" class="btn   btn-default " style="width:274px"><h4>Registrar Nuevo Beneficiario<br><small>ingresar a una nueva persona</small></h4></a>                 
                     </div>
                  </div></h3>
                  <div class="col-md-4">
                     <div class="btn-group btn-group-lg ">
     	                 <a href="actualizar.php" class="btn   btn-success" style="width:79px;height:80px"><h3><span class="glyphicon glyphicon-refresh"></span></h3></a>
                         <a href="actualizar.php" class="btn   btn-default " style="width:274px" ><h4>Actualizar un Beneficiario<br><small>modificar los datos a una persona</small></h4></a>                 
                     </div>
                 </div>

                 <div class="col-md-2"> 	
                 </div>

             </div>
         </div>  <br><br>

         <div class="container">
             <div class="row">

                  <div class="col-md-2">
                  </div>

     	          <div class="col-md-4">
     	         
     	             <div class="btn-group btn-group-lg">
     	                 <a href="consultar.php" class="btn btn-danger" style="width:79px;height:80px" ><h3><span class="glyphicon glyphicon-search" ></span></h3></a>
                         <a href="consultar.php" class="btn btn-default" style="width:274px"><h4>Consultar un Beneficiario<br><small>Buscar a una persona registrada</small></h4></a>                 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="btn-group btn-group-lg">
     	                 <a href="estadisticas.php" class="btn   btn-warning disabled" style="width:79px;height:80px"><h3><span class="glyphicon glyphicon-stats"></span></h3></a>
                         <a href="estadisticas.php" class="btn   btn-default disabled " style="width:274px" ><h4>Estadisticas y Reportes<br><small>Informacion de la Base de Datos</small></h4></a>                 
                     </div>
                 </div>

                 <div class="col-md-2"> 	
                 </div>

             </div>
         </div> 
     </div><br><br><br><br><br><br>

     <footer>
         <div class="container text-center">
             <div class="row">
                 <div class="col-md-12">
                    <h4><small>Reatci &copy; Minehv (Ministerio Para El Ecosocialismo, Habitat y Vivienda) 2015.</small></h4>
                 </div>
             </div>
         </div>
     </footer>

<script src="js/jquery.js"></script>
<script type="js/bootstrap.min.js"></script>
</body>
</html>