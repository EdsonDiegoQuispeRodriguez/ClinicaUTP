<?php
    //$id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>TRIAJE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >	
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerEnfermera.php');
    ?>

<center><div><h1>BIENVENIDO A TRIAJE</h1></div></center>
<form class="form__reg" action="../Controlador/Enfermera/enfermera.php">
    <fieldset  id="datos_personales">
        <legend><h1>INGRESE LOS DATOS PARA EL TRIAJE </h1></legend>  
        <p>NOMBRE</p>
        <input  class="form-control"  type="text" name="nombre" placeholder="NOMBRE">
        <p>DNI</p>
        <input  class="form-control"  type="number" name="DNI" placeholder="DNI" > 
        <p>TALLA</p>
        <input  class="form-control" type="text" name="talla" placeholder="TALLA EN CM">
        <p>PESO</p>
        <input  class="form-control"  type="text" name="peso" placeholder="PESO EN KG">
        <p>PRESION ARTERIAL</p>
        <input  class="form-control" type="text" name="presion" placeholder="PRESION">
        <p>TEMPERATURA</p>
        <input  class="form-control" type="text" name="temperatura" placeholder="TEMPERATURA EN GRADOS CELCIUS" >
        <br>
        <div class="d-grid gap-2">
    <input type="submit" class="btn btn-primary" value="REGISTRAR">
    </div> 
    </body>
    <br>
    <br>
    <br>
	<?php 
    require_once('footer.php');
    ?>
</html>