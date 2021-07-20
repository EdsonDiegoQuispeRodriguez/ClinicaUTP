<?php
include('../Controlador/Administrador/listamedico2.php');
    $idPaciente = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR LISTA </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>       
    <!-- CABECERA -->
	  <?php 
    require_once('headerPaciente.php');
    ?>
    
<div>
<form action="Controlador/Administrador/updatedoctor.php" method="POST" >
    <table class="table">
            <thead class="text-center">
                <tr class="bg-success">
                    <th class="text-white">N° RECETARIO</th>
                    <th class="text-white">ESTADO DE RECETARIO</th>
                    <th class="text-white"> ACCION </th>
                </tr>
                <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">PENDIENTE</td>
                                <td style="text-align: center;"><a href="compramedicina.php">ATENDER RECETARIO</a></td>
                </tr>
            </thead>     
            </table>     

    </body>
    <br>
</html>