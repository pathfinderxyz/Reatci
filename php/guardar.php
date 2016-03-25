<?php
     include ("../errores/mostrar_errores.php");
     include ("conexion.php");
     $nombre = $_POST['nombre'];
     $cedula = $_POST['cedula'];
     $telefono = $_POST['Telefono'];
     $telefono2 = $_POST['Telefono2'];
     $municipio = $_POST['Municipio'];
     $direccion = $_POST['Direccion'];
     $fech_nac = $_POST['FC'];
     $grup_fam = $_POST['Grupo_familiar'];
     $cond_hab = $_POST['Cond_hab'];
     $tipo_viv = $_POST['tipo_vivienda'];
     $casos_esp = $_POST['casos_especiales'];
     $extr_urg = $_POST['opcion'];
     $gmvv = $_POST['opcion2'];
     $observacion = $_POST['observacion'];

     date_default_timezone_set('America/Caracas');
     $fecha = date('Y-m-d');

       $result = pg_query("INSERT INTO beneficiarios (nombre,cedula,telefono,telefono2,municipio,direccion,fecha_nacimiento,grupo_fam,cond_hab,tipo_viv,casos_esp,ext_urg,gmvv,ultimo_registro,observacion) VALUES ('$nombre','$cedula','$telefono','$telefono2','$municipio','$direccion','$fech_nac','$grup_fam','$cond_hab','$tipo_viv','$casos_esp','$extr_urg','$gmvv','$fecha','$observacion')");


       if ($result) {
          header('Location: ../nuevo_registro.php?page=guardado&mensaje=1');//Se guardo
       }else {
          header('Location: ../nuevo_registro.php?page=guardado&mensaje=0');//No se guardo
     }
        
?>