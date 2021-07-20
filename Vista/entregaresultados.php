<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>AÑADIR ATENCION</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	              
    <link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css">  
</head>
<body>       
   <!-- CABECERA -->
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
			<a href="gestionpaciente.php?id=<?php echo $id;?>">Inicio</a>
            <a href="registrar.php?id=<?php echo $id;?>">Crear Cita</a>
            <a href="historialcitaspaciente.php?id=<?php echo $id;?>">Historial Citas</a>
            <a href="laboratorio.php?id=<?php echo $id;?>">Laboratorio</a>
            <a href="estadolab.php?id=<?php echo $id;?>">Historial de laboratorio</a>
            <a href="paciente.php?id=<?php echo $id;?>">Cerrar Sesion</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>	
    <header class="header">
        

<form class="form__reg" action="Controlador/Medico/ATENCION.php">
    <fieldset  id="datos_personales">
        <legend><h1>Gestión entrega de Resultados</h1></legend>    
        <p>Paciente</p>
        <input class="input"  type="hidden" name="idCita" value="<?php echo $idCita;?>">
        <input class="input"  type="hidden" name="idDoc" value="<?php echo $id;?>">
        <input class="input" size="170" type="name" name="paciente" placeholder="" required autofocus>
        <p>Laboratorista</p>
        <input class="input" size="170" type="name" name="laboratorista" placeholder="" required autofocus>
        <p>Fecha</p>
        <input class="input" size="170" type="name" name="fecha" placeholder="" required autofocus>
        <p>Detalles</p>
        <input class="input" size="170" type="name" name="detalles" placeholder="DETALLE" required autofocus>
    </fieldset><br><br><br>
</div>
<div align="right">
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">VOLVER</button>
        <button type="button" class="btn btn-primary">TRATAR</button>
      </div>
    </div>
  </div>
</div>      
      
      
</div>        
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
   
    <script src="codigo.js"></script> 	  
    </body>
    <br>
    <br>
    <br>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>