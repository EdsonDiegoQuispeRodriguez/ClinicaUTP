<?php
    		/*$dbhost= "localhost";
            $dbuser= "root";
            $dbpass= "";
            $dbname= "utpclinica";
            $id = $_GET["id"];
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    error_reporting(0);*/
    ?>
  <?php
require_once('../Controlador/Administrador/listaRol.php');
$id = $_GET["id"];
$sql = listarRol();
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR ROLES</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>    

</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerAdministrador.php');
    ?>

    <br><br>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@nombreDeUsuario">GENERAR UN NUEVO ROL</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  id="exampleModalLabel">AÑADIR ROL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div align="center">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ESCRIBE EL NUEVO ROL PARA EL SISTEMA</label><br>
            <input type="text" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"><br>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary">REGISTRAR</button>
      </div>
    </div>
  </div>
</div>      
      
      
</div>        
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
<form id="form2" name="form2" method="POST" action="roles.php">
                                                <div >
                                                        <div>
                                                        <center><label  class="form-label">DATO A BUSCAR</label><br><br>
                                                        <input type="text" id="buscar" name="buscar" class="form-control" value=""></center>
                                                        </div>
                                                        <div>
                                                         <center>       
                                                        <input type="submit" class="btn btn-success" value="BUSCAR" style="margin-top: 30px;">
                                                        <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;"></center>
                                                        </div>
                                                </div>

                                                
                                                  <center><p class="text-success"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS</p></center>
                                        </form>


                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead class="text-center">
                                                                <tr class="bg-success">
                                                                        <th class="text-white"> ROLES DEL SISTEMA </th>
                                                                        <th class="text-white"> ESTADO</th>
                                                                        <th class="text-white"> OPERACION </th>
                                                                        
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php while ($rowSql = mysqli_fetch_assoc($sql)){ ?>
                                                
                                                                <tr>
                                                                <td style="text-align: center;"><?php echo $rowSql["tipo"] ?></td>
                                                                <td style=" text-align: center;">HABILITADO</td>  
                                                                <td style=" text-align: center;"><a href="#">EDITAR</a></td>  
                                                                </tr>
                                                
                                                <?php } ?>
                                                        </tbody>
                                                </table>
                                        </div>


                                </div>
                        </div>
    </body>
    <br>
    <?php 
    require_once('footer.php');
    ?>