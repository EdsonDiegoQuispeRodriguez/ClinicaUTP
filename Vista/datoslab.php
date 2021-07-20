<?php
    		$dbhost= "localhost";
            $dbuser= "root";
            $dbpass= "";
            $dbname= "utpclinica";
            $id = $_GET["id"];
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    error_reporting(0);
    ?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>RELLENAR DATOS LAB </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >       
</head>
<body>       
    <!-- CABECERA -->
    <?php 
      require_once('headerLaboratorio.php');
    ?>

<form id="form2" name="form2" method="POST" action="adminlab.php">
                                                
                                        </form>
                                        <legend><h1>PACIENTE</h1></legend>
                                        <input class="form-control" size="170" type="number" name="peso" placeholder="DNI">
                                        <input class="form-control" size="170" type="text" name="nombre" placeholder="NOMBRE" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                        <legend><h1>TIPO DE EXAMEN</h1></legend>
                                        <input class="form-control" size="170" type="text" name="peso" placeholder="EXAMEN">
                                        <div class="d-grid gap-2">
                                        <legend><h1>DETALLES</h1></legend>
                                        <textarea class="form-control"  style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"> </textarea>
                                        <center><a href="adminlab.php"><input type="button" class="btn btn-primary" value="GUARDAR DATOS"></a></center>
                                        </div> 
                                        </body>
                                        <br>
                                        <?php 
                                        require_once('footer.php');
                                        ?>