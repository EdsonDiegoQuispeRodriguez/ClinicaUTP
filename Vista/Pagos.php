<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>GESTION LABORATORIO</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="css/css2.css" rel="stylesheet" type="text/css"/>
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	         
      
    <link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css">  
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerAdministrador.php');
    ?>
    <br>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">Generar nuevo tipo de examen</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  id="exampleModalLabel">PAGO TOTAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div align="center">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">TIPO DE PAGO</label><br>
            <select>
                <option>Efectivo</option>
                <option>Tarjeta</option>
            </select>
            <br>
            <label for="recipient-name" class="col-form-label">TOTAL A PAGAR</label><br>
            <input type="name" value="S/. 121.20" disabled><br>
            
            
            <table border="1" cellspacing="">
                <tr id='titulo'>
                    <th>Consulta</th>
                    <th>Costo</th>
                    
                </tr>
                <tr id='item'>
                    <td>Consulta medica</td>
                    <td>S/. 30.00</td>
                </tr>
                <tr id='item'>
                    <td>Hemograma completo</td>
                    <td>S/. 60.00</td>
                </tr>
                <tr id='item'>
                    <td>Acido Fólico</td>
                    <td>S/. 31.20</td>
                </tr>

            </table>   
        </form>
      </div>
      <center><div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Pagar</button>
      </div></center>
    </div>
  </div>
</div>      
      
      
</div>        
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
   
    <script src="codigo.js"></script> 	  
    <table border=1 class='tabla_datos'>
            <thead>
                <tr id='titulo'>
                    <td>Tipo de examen</td>
                    <td>Precio</td>
                    <td>Estado</td>
                </tr>

            </thead>          
    </tbody>
    </body>
    <br>
    <section class="principal">
<div class="formulario">
    <label for="caja_busqueda">Buscar</label>
    <input type="text" name="caja_busqueda" id="caja_busqueda"></input>
</div>
</section>
<script type="text/javascript" src="js/js/jquery.min.js"></script>
<script type="text/javascript" src="js/js/main.js"></script>
</body>
</html>