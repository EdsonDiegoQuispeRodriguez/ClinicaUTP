<?php require_once('Cabecera.php'); ?>	
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR DOCTOR</title>
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
      <th scope="col"><a href="gestionadmin.php?id=<?php echo $id;?>"class="text-white">INICIO</a></th>
      <th scope="col"><a href="listadoctor2.php?id=<?php echo $id;?>"class="text-white">ADMINISTRAR USUARIOS</a></th>
      <th scope="col"><a href="añadirdoctor.php?id=<?php echo $id;?>"class="text-white">AÑADIR NUEVO USUARIO</a></th>
      <th scope="col"><a href="roles.php?id=<?php echo $id;?>"class="text-white">ROLES DEL SISTEMA</a></th>
      <th scope="col"><a href="adminlabor.php?id=<?php echo $id;?>"class="text-white">GESTION LABORATORIO</a></th>
      <th scope="col"><a href="administrador.php"class="text-white">CERRAR SESION</a></th>
    </tr>
  </thead>
</table>
</body>
</html>