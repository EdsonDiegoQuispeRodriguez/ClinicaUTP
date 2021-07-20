<?php
require_once('../Controlador/Medico/listarPendientes.php');
$id = $_GET["id"];
$idCita = $_GET["idCita"];
$sql = listarAnalisis($idCita);
$sql2 = listarExamenM();
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS PACIENTE</title>
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
    <br><br><br>
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
        <form action ="../Controlador/Medico/REGISTRAREXAMEN.php" method = "POST">
        <div class="form-group">
            <input name="id" type="hidden" value="<?php echo $id;?>"/>
            <input name="idCita" type="hidden" value="<?php echo $idCita;?>"/>
            <label for="recipient-name" class="col-form-label">TIPO DE EXAMEN</label><br>
            <select class="form-select" name="tipoExamen">
              <?php
                    while($esp = mysqli_fetch_array($sql2)){
                ?>
                    <option value="<?php echo $esp['Tipo']?>"><?php echo $esp['Tipo']?></option>
                <?php } ?>
            </select><br>
        <div class="form-group">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">FECHA PROGRAMADA</label><br>
            <input name ="fecha" type="date" class="form-control"/>
            </div>    
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">HORA PROGRAMDA</label><br>
            <input name="hora" type="time" class="form-control"/>
            </div> 

            <label for="recipient-name" class="col-form-label">PRIORIDAD</label><br>
            <select class="form-select" name="prioridad">
                <option>NORMAL</option>
                <option>EMERGENCIA</option>
            </select>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="sumbit" class="btn btn-primary">REGISTRAR</button>
      </div>
      </form>
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
                                                                        <th class="text-white"> HORA </th>
                                                                        <th class="text-white"> PRECIO </th>
                                                                        <th class="text-white"> ESTADO </th>
                                                                        <th class="text-white"> ACCION </th>
                                                                        
                                                                </tr>
                                                        </thead>
                <tbody>
                        <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;"><?php echo $row["idDetalle_Atencion"];?></td>
                                <td style="text-align: center;"><?php echo $row["Tipo"];?></td>
                                <td style="text-align: center;"><?php echo $row["Fecha"];?></td>
                                <td style=" text-align: center;"><?php echo $row["Hora"];?></td>
                                <td style=" text-align: center;"><?php echo $row["Precio"];?></td>
                                <td style=" text-align: center;"><?php echo $row["Estado"];?></td>
                                <td style=" text-align: center;"><a href="verResultado.php?id=<?php echo $id;?>&idAtencion=<?php echo  $row["idDetalle_Atencion"]; ?>&idExamen=<?php echo $row["idExamen"];?>&idCita=<?php echo $idCita;?>" class="table__item__link">VER RESULTADO</a></td>
                        </tr>

                        <?php } mysqli_free_result($sql);?>
                </tbody>
                                                        </table>
                                                        <div class="d-grid gap-2">
    <input type="submit" class="btn btn-primary" value="VER RESULTADOS DISPONIBLES ">
    </div> 

                                                        <?php 
    require_once('footer.php');
    ?>
</html>