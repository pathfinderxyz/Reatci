<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>consulta</title>
	<meta name="viewport" content="width=device‐width, user-scalable=no, initial‐scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<style>
    body { font-size: 140%; 
    }

    thead { background-color: #d9534f;
           color: #ffffff;

       }
</style>
</head>


<body>
      <header>
      <?php  
          include ("navbar.php");
      ?>  
      </header> 
          <?php
              include ("../errores/mostrar_errores.php");
              include ("php/conexion.php");

              $result = pg_query("select * from beneficiarios"); //se guarda la consulta en la variable $result
           ?>
           <div class="page-header text-center"><h1><small> Listado General de Personas Registradas</small></h1></div>
           <div class="container">
                 <div>
                     <table id="example" class="table table-hover table-condensed " cellspacing="0" width="100%">
                       <thead>
                         <tr>
                            <th>Nombre</th>
                            <th>Cedula</th>
                            <th>Telefono</th>
                            <th>Municipio</th>
                            <th>Grupo Familiar</th>
                            <th>Habitacion</th>
                            <th>Vivienda</th>
                            <th>Casos Especiales</th>
                            <th>Ultima Actualizacion</th>
                           </tr> 
                       </thead>
                       <tfoot>
                         <tr class="active">
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                            <th>.</th>
                           </tr> 
                       </tfoot>
                       <tbody>
                           <?php
                              while ($row = pg_fetch_assoc($result)) {
                                 echo 
                                   '<tr>
                                     <td>'.$row['nombre'].'</td>
                                     <td>'.$row['cedula'].'</td>
                                     <td>'.$row['telefono'].'</td>
                                     <td>'.$row['municipio'].'</td>
                                     <td>'.$row['grupo_fam'].'</td>
                                     <td>'.$row['cond_hab'].'</td>
                                     <td>'.$row['tipo_viv'].'</td>
                                     <td>'.$row['casos_esp'].'</td>
                                     <td>'.$row['ultimo_registro'].'</td>
                                   </tr>';
                                   }
                                   pg_free_result($result)
                           ?>
                       </tbody>
                     </table>
                 </div>
           </div>
         
         
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
<script type="text/javascript" language="javascript" src="datatables/DataTables-1.10.7/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="datatables/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>

     <script>
         $(document).ready(function() {
         $('#example').DataTable();
         } );
     </script>
</body>
</html>