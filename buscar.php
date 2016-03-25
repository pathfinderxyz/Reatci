<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <title>Actualizar</title>
  <meta name="viewport" content="width=device‐width, user-scalable=no, initial‐scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  
</head>


<body>
      <header>
      <?php  
          include ("navbar.php");
      ?>  
      </header> <br>
           <div class="container">
             <div class="row">
               <div class="col-md-4">
                       <div class="well">
                           <h5><strong>Introduzca el Numero de Cedula</strong></h5>
                           <form  method="post" action="buscar.php"> 
                             <div class="input-group">
                               <input type="text" class="form-control" name="cedula" autofocus placeholder="Buscar">

                                  <span class="input-group-btn">
                                     <button class="btn btn-danger" type="submit">
                                       <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                 </span>
                             </div>
                           </form>  
                       </div>
               </div>
                  
           <?php 
             //include ("../errores/mostrar_errores.php");
             include ("php/conexion.php");

             $n=0;
             $cedula=$_POST['cedula'];
             $primer=substr($cedula,0,1);

             if ($cedula == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM beneficiarios WHERE cedula = '$cedula' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $nombre=$row['nombre'];
                $cedula=$row['cedula'];
                $telefono=$row['telefono'];
                $telefono2=$row['telefono2'];
                $municipio=$row['municipio'];
                $direccion=$row['direccion'];
                $fc=$row['fecha_nacimiento'];
                $grup_fam=$row['grupo_fam'];
                $cond_hab=$row['cond_hab'];
                $tipo_viv=$row['tipo_viv'];
                $casos_esp=$row['casos_esp'];
                $ultimo_registro=$row['ultimo_registro'];
                $observacion=$row['observacion'];
    
            echo 
                "
                <div class='container'> 
                   <div class='row'>
                     <div class='col-md-8'>
                       <div class='well'>
                         <h3><strong>$nombre</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Cedula: </strong><span class='text-primary'><strong> $cedula </strong></span><h4></li>
                                <li><h4><strong>Telefonos: </strong><span class='text-primary'><strong> $telefono $telefono2 </strong></span><h4></li>
                                <li><h4><strong>Municipio: </strong> <span class='text-primary'><strong> $municipio</strong></span><h4></li>
                                <li><h4><strong>Direccion:</strong> <span class='text-primary'><strong> $direccion</strong></span><h4></li>
                                <li><h4><strong>Fecha Nacimiento: </strong> <span class='text-primary'><strong> $fc </strong></span><h4></li>
                                <li><h4><strong>Grupo Familiar: </strong> <span class='text-primary'><strong> $grup_fam</strong></span><h4></li>
                                <li><h4><strong>Condicion de Habitacion: </strong> <span class='text-primary'><strong> $cond_hab</strong></span><h4></li>
                                <li><h4><strong>Tipo de Vivienda:</strong><span class='text-primary'><strong> $tipo_viv</strong></span><h4></li>
                                <li><h4><strong>Casos Especiales:</strong> <span class='text-primary'><strong> $casos_esp</strong></span><h4></li>
                                <li><h4><strong>Ultimo Registro: </strong> <span class='text-primary'><strong> $ultimo_registro </strong></span><h4></li>
                                <li><h4><strong>Observacion:</strong> <span class='text-primary'><strong>$observacion </strong></span></li><h4>
                                
                            </ul>
                            
                       </div>
                     </div>
                    </div>                
                </div>
                </div>
                </div>";

              
           }
     if ($n==0) { 
        echo 
              "<div class='container'>
                     <div class='row'>
                         <div class='col-md-4'>
                           <div class='alert alert-danger'>
                              <strong>No se ha encontrado ningun resultado para la cedula '$cedula' </strong>
                           </div>
                         </div>
                     </div> 
               </div>";
        }
          pg_free_result($result);
     }
?>       





         
     <br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
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