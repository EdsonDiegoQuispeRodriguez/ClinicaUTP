<?php require_once('Cabecera.php'); ?>	
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>PACIENTE PORTAL</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	  
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>    
</head>
<body>
<table class="table">

  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col"><a href="gestionpaciente.php?id=<?php echo $id;?>" class="text-white">INICIO</a></th>
      <th scope="col"><a href="registrar.php?id=<?php echo $id;?>" class="text-white">CREAR CITA</a></th>
      <th scope="col"><a href="historialcitaspaciente.php?id=<?php echo $id;?>" class="text-white">HISTORIAL CITAS</a></th>
      <th scope="col"><a href="estadolab.php?id=<?php echo $id;?>" class="text-white">HISTORIAL CITAS DE LABORATORIO</a></th>
      <th scope="col"><a href="estadofar.php?id=<?php echo $id;?>" class="text-white">GESTION DE FARMACIA</a></th>
      <th scope="col"><a href="paciente.php?id=<?php echo $id;?>" class="text-white">CERRAR SESION</a></th>
    </tr>
  </thead>
</table>
</body>
</html>