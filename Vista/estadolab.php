<?php
include('../Controlador/Medico/listamedico.php');
$id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL LABORATORIO</title>
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
<table class="table">
                <thead class="text-center">
                        <tr class="bg-success">
                                <th class="text-white"> EXAMEN </th>
                                <th class="text-white"> PRECIO </th>
                                <th class="text-white"> FECHA|HORA PROGRAMADA </th>
                                <th class="text-white"> ESTADO DEL PAGO</th>
                                <th class="text-white"> ACCION </th>
                                <th class="text-white"> VER RESULTADOS </th>

                        </tr>
                </thead>
                <tbody>
            
                <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;">RAYOS X</td>
                                <td style="text-align: center;">30</td>
                                <td style="text-align: center;">28/06/2021</td>
                                <td style=" text-align: center;">NO PAGADO</td>
                                <td style=" text-align: center;"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">REALIZAR PAGO</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  id="exampleModalLabel">REGISTRAR EL PAGO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div align="center">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">SELECCIONE MEDIO DE PAGO</label><br>
            <select>
            <option>TARJETA</option>
            <option>PAYPAL</option>
            <option>YAPE</option>
            <option>OTRO</option>
            </select>        
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <a href="estadolab.php"><button type="button" class="btn btn-primary">REGISTRAR PAGO</button></a>
      </div>
    </div>
  </div>
</div>      
      
      
</div>        
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  </td>
                        </tr>
                </tbody>
                
</table>
    </body>
    <br>
	<?php 
    require_once('footer.php');
    ?>

</html>