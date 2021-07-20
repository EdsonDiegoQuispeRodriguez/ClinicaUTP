<?php
require_once('../Controlador/Medico/listarMedicamentos.php');
$id = $_GET["id"];
$idCita = $_GET["idCita"];
$sql = listarMed($idCita);
$sql2 = listarMedicamentosM();
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS PACIENTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerDoctor.php');
    ?>
    <br><br><br>
    <div align="right">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">REGISTRAR NUEVO MEDICAMENTO</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  id="exampleModalLabel">AÑADIR MEDICAMENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div align="center">
        <form action ="../Controlador/Medico/REGISTRARTRATAMIENTO.php" method = "POST">
        <input type="hidden" class="form-control"name="IDCITA" value="<?php echo $idCita?>">
        <input type="hidden" class="form-control"name="ID" value="<?php echo $id?>">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">TIPO DE TRATAMIENTO</label><br>
            <select class="form-select" aria-label="Default select example" name="TIPO">
            <option>MEDICACION</option>
            </select>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">MEDICAMENTO</label><br>
            <select class="form-select" aria-label="Default select example" name ="MEDICAMENTO">
                <?php
                    while($esp = mysqli_fetch_array($sql2)){
                ?>
                    <option value="<?php echo $esp['idMedicamento']?>"><?php echo $esp['Nombre']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label" >CANTIDAD</label><br>
            <input type="number" class="form-control" name="CANTIDAD">
            </select>
        </div>
        <div class="form-group">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">FECHA DE INICIO DE TRATAMIENTO</label><br>
            <input type="date" class="form-control" name="FECHAINI">
            </div>    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">FECHA DE FIN DE TRATAMIENTO </label><br>
            <input type="date" class="form-control"name="FECHAFIN">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">DETALLE DE TRATAMIENTO</label><br>
            <textarea class="form-control"name="DETALLE"  style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"></textarea>
        </div>
        </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="sumbit" class="btn btn-primary">REGISTRAR</button>
      </div>
      </form>
    </div>



  </div>
</div>      
      
      
</div>        
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
   
    <script src="codigo.js"></script> 
    <form id="form2" name="form2" method="POST" action="pendientes.php?id=<?php echo $id;?>">
                <div>
                        <div>
                                <center><label  class="form-label">DATO A BUSCAR</label><br><br>
                                <input type="text" id="buscar" name="buscar"style="width:600px;" value=""></center>
                        </div>
                        <div>
                                <center>       
                                <input type="submit" class="btn btn-success" value="BUSCAR" name="BUSCAR" style="margin-top: 30px;">
                                <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;"></center>
                        </div>
                </div>
                <center><p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS</p></center>
        </form>
        
<div class="table-responsive">
        <table class="table">
                <thead class="text-center">
                        <tr class="bg-success">
                          <th class="text-white"> TIPO TRATAMIENTO </th>
                          <th class="text-white"> MEDICAMENTO </th>
                          <th class="text-white"> CANTIDAD </th>
                          <th class="text-white"> DETALLES </th>
                          <th class="text-white"> FECHA DE INICIO </th>
                          <th class="text-white"> FECHA DE FIN </th>

                        </tr>
                </thead>
                <tbody>
                        <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;"><?php echo $row["tipoTratamiento"];?></td>
                                <td style="display:none;"><?php echo $rowSql['idDetalle_Atencion']?></td>
                                <td style="text-align: center;"><?php echo $row["Nombre"];?></td>
                                <td style="text-align: center;"><?php echo $row["Cantidad"];?></td>
                                <td style=" text-align: center;"><?php echo $row["Detalle"];?></td>
                                <td style=" text-align: center;"><?php echo $row["FechaInicio"];?></td>
                                <td style=" text-align: center;"><?php echo $row["FechaFin"];?></td>
                        </tr>

                        <?php } mysqli_free_result($sql);?>
                </tbody>
        </table>
</div>
</body>
<br>
<?php 
    require_once('footer.php');
    ?>
</html>