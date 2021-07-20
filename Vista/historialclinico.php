<?php
include('Controlador/Medico/listamedico.php');
$id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <?php include 'Cabecera.php'; ?>	
    <header class="header">
        <div class="container" >
        <label for="btn-menu" ><center>MENU DE  OPERACIONES</center></label>
        </div>
    </header>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
        <a href="gestionadmin.php?id=<?php echo $id;?>">INICIO</a>
            <a href="listadoctor2.php?id=<?php echo $id;?>">ADMINISTRAR DOCTORES</a>
            <a href="añadirdoctor.php?id=<?php echo $id;?>">AÑADIR DOCTORES</a>
			<a href="listapaciente.php?id=<?php echo $id;?>">ADMINISTRAR PACIENTES</a>
			<a href="historialcitas.php?id=<?php echo $id;?>">HISTORIAL DE CITAS</a>
            <a href="historialclinico.php?id=<?php echo $id;?>">HISTORIAL CLINICO</a>
            <a href="roles.php?id=<?php echo $id;?>">ROLES DEL SISTEMA</a>
            <a href="adminlabor.php?id=<?php echo $id;?>">GESTION CUENTAS LABORATORIO</a>
            <a href="#">HISTORIAL DE LABORATORIOS</a>
            <a href="administrador.php">CERRAR SESION</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<table style="width: 100%">
    <tr>
    <th>
                N
        </th>
        <th>
                Nombre del paciente
        </th>
        <th>
                Nombre del doctor
        </th>
        <th>
                Especialidad
        </th>
        <th>
                Tipo de tratamiento
        </th>
        <th>
                Tipo de sangre 
        </th>
        <th>
                Fecha Atendida
        </th>
        <th>
                Precio
        </th>
    </tr> 
</table>

    <div class="btn__form">
        <a href="gestionadmin.php?id=<?php echo $id;?>" class="btn__submit" type="button" value="GUARDAR"><center> SALIR</center> </a>           
    </div>
    </body>
    <br>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>