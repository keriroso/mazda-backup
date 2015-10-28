<!doctype html>
<html lang="es">
<head>
    <title>Reportes AJE Ecuador</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <!--<link rel="stylesheet" type="text/css" href="bootstrap.light/bootstrap.light.css"/>-->
    <link  rel= "stylesheet"  href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
    <!--<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>-->
      <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquery.blockUI.js"></script>
     <link type="text/css" href="css/demo_table.css" rel="stylesheet" />
     <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
     
     
</head>
<body>
<div class="container">    
    <div class="row" >
    <center>
    		<?php
		$categoria = $_GET["categoria"];
		/*include('adodb5/toexport.inc.php');
		include('adodb5/adodb.inc.php');
		$server = "localhost";
		$user = "ajeecuad";
		$pwd = "4>!DAZ@xQzh";
		$db = "ajeecuad_origen593f";

		$DB = NewADOConnection('mysql');
		$DB->Connect($server, $user, $pwd, $db);
		# M'soft style data retrieval with binds
		
		$rs = $DB->Execute("SELECT DISTINCT (provincia) as provincia FROM formulario_origen");
		*/
		?>
		<div class="col-lg-12">
		<img src="css/banner_origen_1_2.png" alt="AJE" class="img-responsive">
		</div>
		
		<div class="col-lg-12"><h3 class="page-header">Aqu&iacute; podrá consultar y descargar  informaci&oacute;n de los participantes por categor&iacute;as:</h3></div>
		<?php if($categoria == "pregunta_startup"){ ?>
		<div class="col-lg-3">
			<img src="css/START_UP_05_2.png" alt="Star-Up" class="img-responsive">
		</div>
		<?php } ?>
		<?php if($categoria == "pregunta_innovacion"){ ?>
		<div class="col-lg-3">
			<img src="css/botones_09_2.png" alt="Innovaci&oacute;n" class="img-responsive">
		</div>
		<?php } ?>
		<?php if($categoria == "pregunta_tecnologia"){ ?>
		<div class="col-lg-3">
			<img src="css/botones_07_2.png" alt="Tecnolog&iacute;a" class="img-responsive">
		</div>
		<?php } ?>
		<?php if($categoria == "pregunta_responsabilidad"){ ?>
		<div class="col-lg-3">
			<img src="css/botones_03_3.png" alt="Responsabilidad Social" class="img-responsive">
		</div>
		<?php } ?>
		<div class="col-lg-3">
		<br></br><br></br>
	<form id="frmC" name="frmC" method="post" action="">
	 <input type="hidden" name="hid_categoria" id="hid_categoria" value="<?php echo $categoria; ?>" />
		<input name="btn_enviar" type="button" class="btn btn-success " onclick="btnEnviar_OnClick();" value="Mostrar" />&nbsp;
		<a href="http://www.aje-ecuador.org/origen593/formulario_origen/reportes/"><input name="btn_volver" type="button" class="btn btn-info"  value="Regresar" /></a>
		<!--</a>-->
		
		
		</form>
		</div>
		
		<?php if($categoria == "pregunta_startup"){ ?>
		<div class="col-lg-3">
		<br></br>
			<img src="images/Scale-Up Ecuador LOGO.png" alt="Star-Up" class="img-responsive">
					</div>

			<?php } ?>
			
		<?php if($categoria == "pregunta_innovacion"){ ?>
		<div class="col-lg-3">
			<img src="images/BANCO MUNDIAL.jpg" style="padding-top: 33%;  width: 88%;" alt="Star-Up" class="img-responsive">
					</div>
	<div class="col-lg-3">
			<img src="images/UCG.png" alt="Star-Up" class="img-responsive">
		</div>


		<?php } ?>
				<?php if($categoria == "pregunta_tecnologia"){ ?>
				<div class="col-lg-3">
			<img src="images/AWAKE-01.png" style="width:70%" alt="Star-Up" class="img-responsive">
					</div>
	<div class="col-lg-3">
			<img src="images/espol logo.png"  style="padding-top: 17%;  margin-right: 50%;  width: 50%;" alt="Star-Up" class="img-responsive">
		</div>
		<?php } ?>
			<?php if($categoria == "pregunta_responsabilidad"){ ?>
				<div class="col-lg-3">
			<img src="images/SAMBITO LOGOTIPO color-01.png" style="width:70%;padding-top: 27%;" alt="Star-Up" class="img-responsive">
					</div>
	<div class="col-lg-3">
			<img src="images/COSECHA VERDE - Copy.png" style="width: 60%;  padding-top: 17%; margin-right: 38%;" alt="Star-Up" class="img-responsive">
		</div>
		<?php } ?>

		
	</center>	
		
    </div>
    <div id="div_resultado">
		<!--<iframe src='about:blank' name='iDownload' id='iDownload' width='0' height='0' border='0'></iframe>-->
		</div>
</div>
</body>
</html>
<script type="text/javascript">
function btnEnviar_OnClick() {
                var f = document.frmC;
                categoria = f.hid_categoria.value;
                //ciudad = $(f.cmb_provincia).val();
               $("#iDownload").attr('src', 'exportar.php?hid_categoria='+ categoria +'&cmb_ciudad=' + ciudad);
                  var randomnumber=Math.random()*11;
                $.blockUI({message: "<h3> Procesando... </h3>"});
            	$.get('exportar.php',
                    {hid_categoria: categoria
                     },
                function(respuesta)
                {
                $('#div_resultado').html(respuesta);
                $.unblockUI();
                });
                /*
                $.get('exportar.php',
                        {hid_categoria: categoria,
                            cmb_ciudad: ciudad},
                function(respuesta)
                {
                 $('#div_resultado').append(respuesta);
                $.unblockUI();
       
                });*/
                return true;
            } 

</script>