<?php
    		$dbhost= "localhost";
            $dbuser= "root";
            $dbpass= "";
            $dbname= "utpclinica(v2)";
            $id = $_GET["id"];
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    error_reporting(0);
    ?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR PACIENTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	        
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">	    
</head>
<body>       
    <!-- CABECERA -->
    <?php 
       require_once('headerDoctor.php');
    ?>
<div align="right">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">REGISTRAR NUEVO EXAMEN</button>
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
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">TIPO DE EXAMEN</label><br>
            <select class="form-select">
                <option>a</option>
                <option>a</option>
                <option>a</option>
                <option>a</option>
                <option>a</option>
                <option>a</option>
            </select><br>
        <div class="form-group">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">FECHA PROGRAMDA</label><br>
            <input type="date" class="form-control"/>
            </div>    

            <label for="recipient-name" class="col-form-label">PRIORIDAD</label><br>
            <select class="form-select">
                <option>EMERGENCIA</option>
            </select>
          </div>
        </form>
      </div>
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
    </body>
    <br>
    <br>
    <br>
    <form id="form2" name="form2" method="POST" action="adminlab.php?id=<?php echo $id;?>">
                                <center><label  class="form-label">DATO A BUSCAR</label></center>
                        <div align=center> 

                                <input type="text" id="buscar" name="buscar" style="width:600px;"><br>
                                <input type="submit" class="btn btn-success" value="BUSCAR" name="BUSCAR" style="margin-top: 30px;">
                                <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;">
                        </div>
                <center><p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS</p></center>
        </form>
                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead class="text-center">
                                                                <tr class="bg-success">
                                                                        <th class="text-white"> N° </th>
                                                                        <th class="text-white"> TIPO EXAMEN </th>
                                                                        <th class="text-white"> FECHA PROGRAMADA </th>
                                                                        <th class="text-white"> PRIORIDAD </th>
                                                                        <th class="text-white"> ESTADO </th>
                                                                        <th class="text-white"> ACCION </th>
                                                                        
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                            <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                            <input type="hidden" class="text-center" style="border: 0;"  name="idPersona" value="<?php echo $row["idPersona"];?>">
                            <input type="hidden"  class="text-center" style="border: 0;" name="idAdmin" value="<?php echo $id;?>">
                            <td><input class="text-center" style="border: 0;" name="Numero_Documento">Bryan</td>
                            <td><input class="text-center" style="border: 0;" name="Nombre">9512345789</td>
                            <td><input class="text-center" style="border: 0;" name="Nombre_Especialidad">ORINA</td>
                            <td><input class="text-center" style="border: 0;" name="Correo">2020/11/11</td>
                            <td><input class="text-center" style="border: 0;" name="Contraseña">Urgente</td>
                            <td><input class="text-center" style="border: 0;" name="Estado">Pendiente</td>        
                            </tr>
                        
                </tbody>
                                                        </table>
                                                        <div class="d-grid gap-2">
    <input type="submit" class="btn btn-primary" value="VER RESULTADOS DISPONIBLES ">
    </div> 

                                                        <?php 
    require_once('footer.php');
    ?>

</html>