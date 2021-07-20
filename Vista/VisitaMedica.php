<?php
    $id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>FICHA MEDICA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerDoctor.php');
    ?>
<center><div><h1>VISITA MEDICA DE RUTINA</h1></div></center>
<form class="form__reg" action="Controlador/Medico/ATENCION.php">
<div class="d-grid gap-2">
    <a href="ver.php"><button type="button" class="btn btn-primary">VER HISTORIAL DEL PACIENTE</button></a>
    <div align="right">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">SELECCIONAR PERSONA</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  id="exampleModalLabel">Añadir para laboratorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div align="center">
        <form>
        <?php
        include('emergencia.php');
      ?>   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="adminlab.php"><button type="button" class="btn btn-primary">Registrar</button></a>
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
</div>
    <fieldset  id="datos_personales" align=left> 
        <legend><h1>PACIENTE</h1></legend>
         <input class="form-control" size="170" type="number" name="peso" placeholder="DNI">
         <input class="form-control" size="170" type="text" name="nombre" placeholder="NOMBRE" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
        <legend><h1>DATOS TRIAJE</h1></legend>
        <p>TALLA</p>
        <input class="input"  type="hidden" name="idCita" value="<?php echo $idCita;?>">
        <input class="input"  type="hidden" name="idDoc" value="<?php echo $id;?>">
        <input class="form-control" size="170" type="name" name="talla" placeholder="TALLA EN CM" required autofocus>
        <p>PESO</p>
        <input class="form-control" size="170" type="name" name="peso" placeholder="PESO EN KG" required autofocus>
        <p>PRESION ARTERIAL </p>
        <input class="form-control" size="170" type="name" name="presion" placeholder="PRESION" required autofocus>
        <p>TEMPERATURA</p>
        <input class="form-control" size="170" type="name" name="temperatura" placeholder="TEMPERATURA EN GRADOS CELCIUS" required autofocus>
        <legend><h1>DATOS VISITA MEDICA</h1></legend>
        <p>ALERGIAS PRESENTADAS</p>
        <textarea class="form-control"  style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"></textarea>
        <p>DETALLE DE VISITA</p>
        <textarea class="form-control"  style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"></textarea>
        <p>MEDICAMENTOS QUE REQUIERE</p>
        <textarea class="form-control"  style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"></textarea>
        <p>ESTADO DEL PACIENTE</p>
        <select class="form-select" >
        <option>NO APTO</option>
        <option>APTO(ALTA)</option>
        </select>
    </fieldset><br><br><br>
    </body>
    <div class="d-grid gap-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">REGISTRAR DATOS</button>
</div>
	<?php 
    require_once('footer.php');
    ?>
</html>