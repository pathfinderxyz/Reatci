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
           <div class="container text-center">
             <div class="row">
               <div class="col-mod-12">
                     <div class="page-header">
                         <h1><small>Ingrese Todos los Campos del Formulario</small></h1>
                     </div>
               </div>
             </div>  
             <div class="row">
                 <div class="col-md-4"></div>
                 <div class="col-md-4">    
                     <?php  
                         if (isset($_GET['mensaje'])) {
                             if ($_GET['mensaje'] == 1) {
                                 echo '<div class="row">
                                           <div class="col-md-12">
                                             <div class="alert alert-success">
                                                 <strong>Persona Registrada.</strong>
                                             </div>
                                           </div>
                                       </div>';   
                         }elseif ($_GET['mensaje'] == 0) {
                              echo '<div class="row">
                                       <div class="col-md-12">
                                           <div class="alert alert-danger">
                                             <strong>Error al guardar el registro la persona ya existe</strong>
                                           </div>
                                       </div>
                                     </div>';
                                     }
                                   }
                      ?>
                 </div>
                 <div class="col-md-4"></div>
             </div> 
           </div>    

          <div class="container"><br>
             <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                   <form  method="post" action="php/guardar.php"  id="registrationForm">

                             <div class="form-group">                           
                                 <label class="control-label" for="nombre"> Nombre y Apellido *</label>
                                 <input class="form-control"  type="text" name="nombre" onkeypress="return validation_letra(event)" placeholder="Ingrese su Nombre" autofocus> 
                             </div>

                             <div class="form-group">   
                                 <label class="control-label" for="cedula"> Cedula *</label>
                                 <input class="form-control" type="text" name="cedula" onkeypress="return validation_number(event)" placeholder="Ingrese su Cedula">
                             </div> 

                             <div class="form-group">
                                 <label  class="control-label" for="Telefono"> Telefono</label>
                                 <input class="form-control" type="text" name="Telefono" onkeypress="return validation_number(event)" placeholder="Ingrese su telefono">
                             </div> 

                             <div class="form-group">
                                 <label  class="control-label" for="Telefono2"> Telefono 2</label>
                                 <input class="form-control" type="text" name="Telefono2" onkeypress="return validation_number(event)" placeholder="Ingrese otro numero de telefono">
                             </div> 

                             <div class="form-group">
                                 <label  class="control-label" for="Municipio">Municipio</label>
                                 <select class="form-control" name="Municipio">
                                     <option value=""></option>
                                     <option value="Antolin del Campo">Antolin del Campo</option>
                                     <option value="Arismendi">Arismendi</option>
                                     <option value="Garcia">Garcia</option>
                                     <option value="Gomez">Gomez</option>
                                     <option value="Marcano">Marcano</option>
                                     <option value="Marino">Marino</option>
                                     <option value="Maneiro">Maneiro</option>
                                     <option value="Peninsula de Macanao">Peninsula de Macanao</option>
                                     <option value="Tubores">Tubores</option>
                                     <option value="Villalba">Villalba</option>
                                 </select>
                             </div>   

                             <div class="form-group">      
                                     <label for="Direccion">Direccion</label>
                                     <textarea  class="form-control" rows="4" name="Direccion">
                                     </textarea>
                             </div>

                             <div class="form-group">
                                   <label class="control-label" for="FC">Fecha de Nacimiento</label>
                                   <input style="white-space:1px" class="form-control" type="date" name="FC" placeholder="DD-MM-AA">                
                             </div>
                             

                             <div class="form-group">
                                 <label class="control-label" for="Grupo_familiar">Grupo Familiar</label>
                                 <select class="form-control" name="Grupo_familiar">
                                     <option value=""></option>
                                     <option value="0">0</option>
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5 o mas">5 o mas</option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label class="control-label" for="Cond_hab">Condicion de Habitacion</label>
                                 <select class="form-control" name="Cond_hab">
                                     <option value=""></option>
                                     <option value="Situacion de Calle">Situacion de Calle</option>
                                     <option value="Al Cuido">Al Cuido</option>
                                     <option value="Arrimado">Arrimado</option>
                                     <option value="Alquilado">Alquilado</option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label class="control-label" for="tipo_vivienda">Tipo de Vivienda</label>
                                 <select class="form-control" name="tipo_vivienda">
                                     <option value=""></option>
                                     <option value="No Posee">No Posee</option>
                                     <option value="Refugio">Refugio</option>
                                     <option value="Rancho">Rancho</option>
                                     <option value="Anexo">Anexo</option>
                                     <option value="Habitacion">Habitacion</option>
                                     <option value="Casa">Casa</option>
                                     <option value="Apartamento">Apartamento</option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label  class="control-label" for="casos_especiales">Casos Especiales</label>
                                 <div class="checkbox">
                                   <label for="casos_especiales" class="checkbox-inline">
                                     <input type="checkbox" name="casos_especiales" value="Hacinamiento">Hacinamiento        
                                  </label>
                                  <label for="casos_especiales" class="checkbox-inline">
                                     <input type="checkbox" name="casos_especiales" value="Salud">Salud        
                                  </label>
                                  <label for="casos_especiales" class="checkbox-inline">
                                     <input type="checkbox" name="casos_especiales" value="Discapacidad">Discapacidad        
                                  </label>
                                  <label for="casos_especiales" class="checkbox-inline">
                                     <input type="checkbox" name="casos_especiales" value="Alto Riesgo">Alto Riesgo        
                                  </label>    
                               </div>   
                              </div> 

                             <div class="form-group">
                                 <label class="control-label" for="extrema_urgencia">Extrema Urgencia</label>
                                 <div class="radio">
                                   <label for="radio1">
                                     <input type="radio" name="opcion" value="Si">Si
                                   <label>
                                   <label for="radio2">
                                     <input type="radio" name="opcion" value="No">No
                                   <label>
                                 </div>  
                             </div>

                             <div class="form-group">
                                 <label class="control-label" class="control-label" for="GMVV">Inscrito en GMVV</label>
                                 <div class="radio">
                                   <label for="radio1">
                                     <input type="radio" name="opcion2" value="si">Si
                                   <label>
                                   <label for="radio2">
                                     <input type="radio" name="opcion2" value="No">No
                                   <label>
                                 </div>  
                             </div>
                             <div class="form-group">      
                                     <label for="Observacion">Observacion</label>
                                     <textarea  class="form-control" rows="4" name="observacion" onkeypress="return validation_alphanumber(event)" >
                                     </textarea>
                             </div><br>
                             
                                     
                                 <a href="ini.php" class="btn btn-danger"> Cancelar</a>

                                 <button class="btn btn-success pull-right" type="submit">Guardar</button>
                      </form>
                      </div>
                      <div class="col-md-6"></div>
        </div>
     </div> <br>  

     <footer>
         <div class="container text-center">
             <div class="row">
                 <div class="col-md-12">
                    <h4><small>Reatci &copy; Minehv (Ministerio Para El Ecosocialismo, Habitat y Vivienda) 2015.</small></h4>
                 </div>
             </div>
         </div>
     </footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/jquery.js"> </script>
<script type="js/bootstrap.min.js"> </script>
<script src="http://oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="validaciones/validation_type_date.js"></script>
 <script type="text/javascript" src="validaciones/validator.js"></script>

</body>
</html>