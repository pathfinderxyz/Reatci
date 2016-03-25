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
                           <form  method="post" action="actualizar.php"> 
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

              if (isset($_GET['mensaje'])) {
                             if ($_GET['mensaje'] == 1) {
                                 echo '<div class="row">
                                           <div class="col-md-4">
                                             <div class="alert alert-success">
                                                 <strong>Persona Actualizada Correctamente</strong>
                                             </div>
                                           </div>
                                       </div>';   
                         }elseif ($_GET['mensaje'] == 0) {
                              echo '<div class="row">
                                       <div class="col-md-4">
                                           <div class="alert alert-danger">
                                             <strong>Error la persona no se pudo actualizar</strong>
                                           </div>
                                       </div>
                                     </div>';
                                     }
                                   }

             if ($cedula == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM beneficiarios WHERE cedula = '$cedula' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $nombre=$row['nombre'];
                $cedula2=$row['cedula'];
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
                                <li><h4><strong>Cedula: </strong><span class='text-primary'><strong> $cedula2 </strong></span><h4></li>
                                <li><h4><strong>Telefonos: </strong><span class='text-primary'><strong> $telefono $telefono2 </strong></span><h4></li>
                                <li><h4><strong>Municipio: </strong> <span class='text-primary'><strong> $municipio</strong></span><h4></li>
                                <li><h4><strong>Direccion:</strong> <span class='text-primary'><strong> $direccion</strong></span><h4></li>
                                <li><h4><strong>Fecha Nacimiento: </strong> <span class='text-primary'><strong> $fc </strong></span><h4></li>
                                <li><h4><strong>Grupo Familiar: </strong> <span class='text-primary'><strong> $grup_fam</strong></span><h4></li>
                                <li><h4><strong>Condicion de Habitacion: </strong> <span class='text-primary'><strong> $cond_hab</strong></span><h4></li>
                                <li><h4><strong>Tipo de Vivienda:</strong><span class='text-primary'><strong> $tipo_viv</strong></span><h4></li>
                                <li><h4><strong>Casos Especiales:</strong> <span class='text-primary'><strong> $casos_esp</strong></span><h4></li>
                                <li><h4><strong>Ultimo Registro: </strong> <span class='text-primary'><strong> $ultimo_registro </strong></span><h4></li>
                                <li><h4><strong>Observacion:</strong> <span class='text-primary'><strong>$observacion </strong></span></li><h4><br>
                                <a href='actualizar.php' class='btn btn-danger pull-right' >No hacer Cambios</a>
                                <a href='#ventana1' class='btn btn-primary pull-left' data-toggle='modal' data-backdrop='static' >Actualizar</a><br>     
                            </ul> 
                       </div>
                     </div>
                    </div>                
                 </div>
                 <div class='modal fade'  id='ventana1'>
                   <div class='modal-dialog '>
                     <div class='modal-content'><br>

                         <div class='modal-header'>
                             <button tyle='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                             <h4 class='modal-title'>Introduzca los datos actualizados</h4>
                         </div><br>

                         <form  method='post' action='php/actualizar2.php?ci=$cedula2'  id='registrationForm'>
                         <div class='modal-body'>
                                  <div class='container-fluid'>
                                     <div class='row'>
                                         <div class='col-md-4'>
                                           <div class='form-group'>
                                             <label  class='control-label' for='Telefono'> Telefono</label>
                                             <input class='form-control' type='text' name='Telefono' onkeypress='return validation_number(event)' placeholder='Ingrese su tlf'>
                                           </div> 
                                         </div>
                                         <div class='col-md-4'>
                                           <div class='form-group'>
                                             <label  class='control-label' for='Telefono'> Telefono Alternativo</label>
                                             <input class='form-control' type='text' name='Telefono2' onkeypress='return validation_number(event)'>
                                           </div> 
                                         </div>
                                         <div class='col-md-4'>
                                           <div class='form-group'>
                                             <label  class='control-label' for='Municipio'>Municipio</label>
                                             <select class='form-control' name='Municipio'>
                                                 <option value=''></option>
                                                 <option value='Antolin del Campo'>Antolin del Campo</option>
                                                 <option value='Arismendi'>Arismendi</option>
                                                 <option value='Garcia'>Garcia</option>
                                                 <option value='Gomez'>Gomez</option>
                                                 <option value='Marcano'>Marcano</option>
                                                 <option value='Marino'>Marino</option>
                                                 <option value='Maneiro'>Maneiro</option>
                                                 <option value='Peninsula de Macanao'>Peninsula de Macanao</option>
                                                 <option value='Tubores'>Tubores</option>
                                                 <option value='Villalba'>Villalba</option>
                                             </select>
                                           </div>
                                         </div>  
                                     </div><br>    

                                     <div class='row'>
                                       <div class='col-md-4'>
                                           <div class='form-group'>
                                               <label class='control-label' for='Grupo_familiar'>Grupo Familiar</label>
                                               <select class='form-control' name='Grupo_familiar'>
                                                 <option value=''></option>
                                                 <option value='0'>0</option>
                                                 <option value='1'>1</option>
                                                 <option value='2'>2</option>
                                                 <option value='3'>3</option>
                                                 <option value='4'>4</option>
                                                 <option value='5 o mas'>5 o mas</option>
                                               </select>
                                           </div>
                                       </div>
                                       <div class='col-md-4'>
                                           <div class='form-group'>
                                             <label class='control-label' for='Cond_hab'>Cond de Habitacion</label>
                                             <select class='form-control' name='Cond_hab'>
                                               <option value=''></option>
                                               <option value='Situacion de Calle'>Situacion de Calle</option>
                                               <option value='Al Cuido'>Al Cuido</option>
                                               <option value='Arrimado'>Arrimado</option>
                                               <option value='Alquilado'>Alquilado</option>
                                             </select>
                                           </div>
                                       </div>
                                       <div class='col-md-4'>
                                           <div class='form-group'>
                                             <label class='control-label' for='tipo_vivienda'>Tipo de Vivienda</label>
                                             <select class='form-control' name='tipo_vivienda'>
                                               <option value=''></option>
                                               <option value='No Posee'>No Posee</option>
                                               <option value='Refugio'>Refugio</option>
                                               <option value='Rancho'>Rancho</option>
                                               <option value='Anexo'>Anexo</option>
                                               <option value='Habitacion'>Habitacion</option>
                                               <option value='Casa'>Casa</option>
                                               <option value='Apartamento'>Apartamento</option>
                                             </select>
                                           </div>
                                       </div>
                                     </div><br>

                                     <div class='row'>
                                       <div class='col-md-12'>
                                           <div class='form-group'>      
                                               <label for='Direccion'>Direccion</label>
                                               <textarea  class='form-control' rows='3' name='Direccion'>
                                               </textarea>
                                           </div>
                                       </div>
                                     </div>  
                                   </div>
                         </div>
                                   
                         <div class='modal-footer'>
                             <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                             <button type='submit' class='btn btn-primary' >Guardar Cambios</button>
                         </div>
                         </form>
                     </div>
                   </div>
                 </div>  

     </div>
   </div>" ;
     
     

              
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
         
     <br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br><br>
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
<script src="http://oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="validaciones/validation_type_date.js"></script>
<script type="text/javascript" src="validaciones/validator.js"></script>
</body>
</html>