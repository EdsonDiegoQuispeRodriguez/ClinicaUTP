<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>CLINICA UTP</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">

	<script src="Vista/js/jquery-3.1.0.min.js"></script>
	<script src="Vista/js/main.js"></script>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>    
     <!-- CABECERA -->
    <?php 
        require_once('Cabecera.php');
    ?>
    <!-- CARRUSEL -->
        <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" height="500" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
				<img src="img/img2.jpg"  height="500"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
				<img src="img/img3.jpg"  height="500" class="d-block w-100" alt="...">
            </div>
			<div class="carousel-item">
				<img src="img/img4.png" height="500" class="d-block w-100" alt="...">
            </div>
            
            <!--Controles NEXT y PREV-->
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                <span class="sr-only" color="black">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--Controles de indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active" color="black"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
				<li data-target="#carousel1" data-slide-to="3"></li>
            </ol>
            <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
			<script>
			//$('.carousel').carousel();
			</script>  
        </div>
    <br><br><br><br><br><br><br><br>
    <!-- CONTENIDO -->
    <div class="container" id="mision-vision">
        <br>
        <br>
        <div class="row">
          <div class="col-1">
          </div>
          <div class="col-10">
            <br>
            <center><h1>QUIENES SOMOS</h1>
            <h3>
              <p style="text-align:justify">Somos una institución comprometida con la salud de las personas,
                con una cultura de servicio que nos impulsa a poner al paciente en el centro de nuestras labores diarias, 
                y cuyo trabajo está basado en estándares internacionales de seguridad y calidad, razón por la cual.
            respaldada por un distinguido cuerpo médico y un selecto grupo de profesionales y técnicos en salud que, de la
             mano de la tecnología médica más avanzada ofrecemos calidad y garantia hacia nuestros pacientes.</p>
            </h3>
          </div>
          <div class="col-1">
    
          </div>
        </div>
      </div>


    <div class="container" id="mision-vision">
        <br>
        <br>
        <div class="row">
          <div class="col-1">
          </div>
          <div class="col-5">
            <br>
            <center><h1>MISION</h1>
            <h3>
              <p style="text-align:justify">Transformar el cuidado de tu salud.</p>
            </h3>
          </div>
          <div class="col-5">
            <br>
            <center><h1>VISION</h1>
            <h3>
              <p style="text-align:justify">Ser el líder y referente de la salud en Latinoamérica con atención centrada en las
                personas.</p>
            </h3>
          </div>
          <div class="col-1">
    
          </div>
        </div>
      </div>

      <div class="container" id="objetivos">
        <br>
        <br>
        <br>
    
        <center><h1 class="display-4 mb-5">NUESTROS VALORES</h1></center>
        <div class="row ">
          <div class="col-md-4">
            <h4>EMPATÍA</h4>
            <p class="lead">Genuino y vivo interés y pasión por comprender tus necesidades y emociones
                como si fueran las nuestras.</p>
          </div>
          <div class="col-md-4">
            <h4>EXCELENCIA</h4>
            <p class="lead">Siempre brindamos la mejor calidad y el más alto estándar en el cuidado de tu
                salud y bienestar.</p>
          </div>
          <div class="col-md-4">
            <h4>INTEGRIDAD</h4>
            <p class="lead">Honestidad y ética en lo que hacemos para merecer tu confianza.</p>
          </div>
          <div class="col-md-4">
            <h4>COLABORACIÓN</h4>
            <p class="lead">Trabajamos en conjunto y de forma integrada (entre nosotros y contigo y tu
                familia) ante tus necesidades.</p>
          </div>
          <div class="col-md-4">
            <h4>INNOVACIÓN</h4>
            <p class="lead">Nos renovamos y reinventamos para siempre ser los mejores al servirte.</p>
          </div>
        </div>
      </div>
    <div></div>
    </body>
    <br><br>
    <footer  class="f">
        <center><p>
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>
