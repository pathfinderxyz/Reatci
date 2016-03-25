<?php
     //include ("../errores/mostrar_errores.php");
     include ("conexion.php");

     $CI = $_GET['ci'];
     $telefono2 = $_POST['Telefono'];
     $telefono3 = $_POST['Telefono2'];
     $municipio2 = $_POST['Municipio'];
     $grup_fam2 = $_POST['Grupo_familiar'];
     $cond_hab2 = $_POST['Cond_hab'];
     $tipo_viv2 = $_POST['tipo_vivienda'];
     $direccion2 = $_POST['Direccion'];

     date_default_timezone_set('America/Caracas');
     $fechaa = date('Y-m-d');

             $result = pg_query("Update Beneficiarios Set telefono='$telefono2',telefono2='$telefono3',municipio='$municipio2',grupo_fam='$grup_fam2',cond_hab='$cond_hab2',tipo_viv='$tipo_viv2',direccion='$direccion2',ultimo_registro='$fechaa' Where cedula='$CI' ");
            
     if ($result) {
          header('Location: ../actualizar.php?page=guardado&mensaje=1');//Se guardo
       }else {
          header('Location: ../actualizar.php?page=guardado&mensaje=0');//No se guardo
     }
?>     

