<? include("inc_top.php");
include("inc_validacion.php");

// Envia datos a BONDA
if($_SESSION['miembro_bonda'] == 0 && $_SESSION['miembro_tipo'] == "gt"){
	include("cron_bonda_usuarios.php");
	$queryu = "update comercios set bonda = 1 where id = " .  $_SESSION['miembro_id'];
	$result = mysqli_query($connection,$queryu);
}

// Sube foto del pack - Desafio negocio 1
if($_REQUEST['fotopackdsf'] == 5){
	$id_file = 0;
	$query = "select * from desafios_negocio_respuestas where activo = 1 and desafio_id = 5 and comercio_id = " . $_SESSION['miembro_id'];
	$sql=mysqli_query($connection,$query);
	while($rg=mysqli_fetch_object($sql)){
		$id_file = $rg->id;
	}

	$tabla = "desafios_negocio_respuestas";
	$carpeta_ubicacion = $tabla . "/";
	$carpeta_ubicacion_adicional = date('Y') . "-" . date('m') . "/";
	$carpeta_ubicacion = $carpeta_ubicacion . $carpeta_ubicacion_adicional;
	$makedir = $carpeta_upload . $carpeta_ubicacion;

	if (!is_dir($makedir)) {
		mkdir($makedir,0777);
	}
	$nombre_foto = guiones_fotos($_FILES['documento1']['name']);

	if($nombre_foto != ""){
		if($id_file == 0){
			$queryins = "insert into desafios_negocio_respuestas (activo,desafio_id,comercio_id,fecha) values (1,'5','" . $_SESSION['miembro_id'] . "',now())";
			//echo($queryins);
			$sql=mysqli_query($connection,$queryins);
			$id_file = mysqli_insert_id($connection);
		}

		$adjunto_file_nombre = $id_file. "-" . $nombre_foto;
		$adjunto_file = $carpeta_ubicacion . $id_file. "-" . $nombre_foto;
		//echo($_FILES['documento1']['tmp_name'] . ": ". $carpeta_upload . $adjunto_file . "<br><br>");
		move_uploaded_file($_FILES['documento1']['tmp_name'], $carpeta_upload . $adjunto_file);
		chmod($carpeta_upload . $adjunto_file, 0755);
		$result = "UPDATE desafios_negocio_respuestas SET documento1 ='" . $carpeta_ubicacion_adicional . $adjunto_file_nombre."', fecha = now() WHERE id='".$id_file."'";
		$sql=mysqli_query($connection,$result);
		$recien_ingresa_foto = 1;
	}

}


// Sube foto - Desafio especial 1
if($_REQUEST['fotopackdsf2'] == 1){
	$id_file = 0;
	$query = "select * from desafios_especiales_respuestas where activo = 1 and desafio_id = 1 and comercio_id = " . $_SESSION['miembro_id'];
	//echo($query);
	$sql=mysqli_query($connection,$query);
	while($rg=mysqli_fetch_object($sql)){
		$id_file = $rg->id;
	}

	$tabla = "desafios_especiales_respuestas";
	$carpeta_ubicacion = $tabla . "/";
	$carpeta_ubicacion_adicional = date('Y') . "-" . date('m') . "/";
	$carpeta_ubicacion = $carpeta_ubicacion . $carpeta_ubicacion_adicional;
	$makedir = $carpeta_upload . $carpeta_ubicacion;

	if (!is_dir($makedir)) {
		mkdir($makedir,0777);
	}
	$nombre_foto = guiones_fotos($_FILES['documento1']['name']);

	if($nombre_foto != ""){
		if($id_file == 0){
			$queryins = "insert into desafios_especiales_respuestas (activo,desafio_id,comercio_id,fecha) values (1,'1','" . $_SESSION['miembro_id'] . "',now())";
			//echo($queryins);
			$sql=mysqli_query($connection,$queryins);
			$id_file = mysqli_insert_id($connection);
		}

		$adjunto_file_nombre = $id_file. "-" . $nombre_foto;
		$adjunto_file = $carpeta_ubicacion . $id_file. "-" . $nombre_foto;
		//echo($_FILES['documento1']['tmp_name'] . ": ". $carpeta_upload . $adjunto_file . "<br><br>");
		move_uploaded_file($_FILES['documento1']['tmp_name'], $carpeta_upload . $adjunto_file);
		chmod($carpeta_upload . $adjunto_file, 0755);
		$result = "UPDATE desafios_especiales_respuestas SET documento1 ='" . $carpeta_ubicacion_adicional . $adjunto_file_nombre."', fecha = now() WHERE id='".$id_file."'";
		$sql=mysqli_query($connection,$result);
		$recien_ingresa_foto_especial = 1;
	}

}

// Envia Desafio Sorpresa 1007
if($_REQUEST['des1007'] == 1 && $_REQUEST['radio1'] != ""){
			$queryins = "insert into desafios_sorpresa_respuestas (activo,desafio_id,comercio_id,r1,fecha) values (1,'1007','" . $_SESSION['miembro_id'] . "','" . $_REQUEST['radio1'] .  "', now())";
			//echo($queryins);
			$sql=mysqli_query($connection,$queryins);
			$_SESSION['miembro_desafiosorpresa1007'] = 1;
			$recien_ingresa_1007 = 1;
			$do = evento(1007);
	
}

// Envia Cekular
if($_REQUEST['celular'] != ""){
			$queryins = "update comercios set celular = '" . clean($_REQUEST['celular']) . "' where id = " . $_SESSION['miembro_id'];
			//echo($queryins);
			$sql=mysqli_query($connection,$queryins);
			$_SESSION['miembro_celular'] = clean($_REQUEST['celular']);
			$do = evento(30);
}



// Sube foto - Desafio sorpresa 1005
if($_SESSION['miembro_tipo'] == "ka" && $_REQUEST['desafio1005'] == 1 && $_SESSION['miembro_desafiosorpresa1005'] != 1){
	$id_file = 0;
	$query = "select * from desafios_sorpresa_respuestas where activo = 1 and desafio_id = 1005 and comercio_id = " . $_SESSION['miembro_id'];
	//echo($query);
	$sql=mysqli_query($connection,$query);
	while($rg=mysqli_fetch_object($sql)){
		$id_file = $rg->id;
	}

	$tabla = "desafios_sorpresa_respuestas";
	$carpeta_ubicacion = $tabla . "/";
	$carpeta_ubicacion_adicional = date('Y') . "-" . date('m') . "/";
	$carpeta_ubicacion = $carpeta_ubicacion . $carpeta_ubicacion_adicional;
	$makedir = $carpeta_upload . $carpeta_ubicacion;

	if (!is_dir($makedir)) {
		mkdir($makedir,0777);
	}
	$nombre_foto = guiones_fotos($_FILES['documento1']['name']);

	if($nombre_foto != ""){
		if($id_file == 0){
			$queryins = "insert into desafios_sorpresa_respuestas (activo,desafio_id,comercio_id,r1,r2,fecha) values (1,'1005','" . $_SESSION['miembro_id'] . "','" . $_REQUEST['radio1'] .  "','" . $_REQUEST['radio2'] . "', now())";
			//echo($queryins);
			$sql=mysqli_query($connection,$queryins);
			$id_file = mysqli_insert_id($connection);
		}

		$adjunto_file_nombre = $id_file. "-" . $nombre_foto;
		$adjunto_file = $carpeta_ubicacion . $id_file. "-" . $nombre_foto;
		//echo($_FILES['documento1']['tmp_name'] . ": ". $carpeta_upload . $adjunto_file . "<br><br>");
		move_uploaded_file($_FILES['documento1']['tmp_name'], $carpeta_upload . $adjunto_file);
		chmod($carpeta_upload . $adjunto_file, 0755);
		$result = "UPDATE desafios_sorpresa_respuestas SET documento1 ='" . $carpeta_ubicacion_adicional . $adjunto_file_nombre."', fecha = now() WHERE id='".$id_file."'";
		$sql=mysqli_query($connection,$result);
		$recien_ingresa_foto_especial = 1;
	}
	$_SESSION['miembro_desafiosorpresa1005'] = 1;

}


?><!DOCTYPE html>
<html lang="en">

<head>
  <!-- META -->
  <meta charset="UTF-8">

<? include("inc_head.php") ?>
 <link rel="stylesheet" href="css/desafios.css">

<? include("inc_head_bottom.php") ?>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	 <? include("inc_body.php")?>
  <!--Loader-->
  <div class="loading">
    <div class="loading-center">
      <div class="loading-center-absolute">
        <div class="object object_one"></div>
        <div class="object object_two"></div>
        <div class="object object_three"></div>
      </div>
    </div>
  </div>

  <!-- MAIN NAV -->
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main">
            <img src="img/logo.png" alt="logo">
            <img class="logo-blue" src="img/logo.png" alt="logo">
          </a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="main#team">Desaf&iacute;os</a></li>
            <li><a href="main#sec-mega">Mega</a></li>
            <li><a href="main#screenshots">Portfolio</a></li>
            <? if($_SESSION['miembro_tipo'] == "merchand"){?>
			  <li><a href="proximamente.html">Tips de Kiosquero</a></li>
            <?  } elseif($_SESSION['miembro_tipo'] == "gt"){?>
			  <li><a href="tipsgt">Tips de Kiosquero</a></li>
			<? } else {?>
			  <li><a href="tips">Tips de Venta</a></li>
			<? } ?>
            <? if($_SESSION['miembro_tipo'] == "gt"){?><li><a href="beneficios">Beneficios</a></li><? } ?>
            <li><a href="main#faq">Como Participar</a></li>
            <!-- <li><a href="#faq">Faq's</a></li>
            <li><a href="#">Tutoriales</a></li> -->
            <li><a href="perfil">Perfil</a></li>
            <li><a href="logout">Salir</a></li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- END MAIN NAV -->




  <!-- Carousel Default -->
  <section class="carousel-default">
    <div id="carousel-default" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?
			$contar = -1;
			$query = "select * from banners where activo = 1 and tipo = 'home-slider' and publico = '" . $_SESSION['miembro_tipo'] . "'";
			if($_SESSION['miembro_tipo'] == "ka" || $_SESSION['miembro_tipo'] == "ka_owner"){
				if($_SESSION['miembro_ka_venta'] == 1) {
					$query .= " and venta = 1";
				} else {
					$query .= " and venta = 0";
				}
			}
			if($_SESSION['miembro_tipo'] == "gt"){
				if($_SESSION['chances_txt'] == "chances") {
					$query .= " and chances = 1";
				} else {
					$query .= " and chances = 0";
				}
			}
		  	//echo($query);
		  	$query .= " order by orden asc";
			$sql=mysqli_query($connection,$query);
			while($rg=mysqli_fetch_object($sql)){
			$contar = $contar + 1;
				$clase = '';
				$responsive = $rg->documento1;
				if($rg->documento2 != "") $responsive = $rg->documento2;
				if($responsive )
				if($contar == 0) $clase = "active";
				$slider .= '<div class="item ' . $clase . '" style="cursor:pointer" onClick="document.location.href=\''. $rg->link . '\'">
							  <picture>
							  <source srcset="imagenes/banners/' . $rg->documento1 . '" media="(min-width: 767px)">
							  <img src="imagenes/banners/' . $responsive .'">
							  </picture>
							</div>
							';
		?>
		<li data-target="#carousel-default" data-slide-to="<?=$contar?>" class="<?=$clase?>"></li>
		<? } ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?=$slider?>
      </div>
      <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- /end Carousel Default -->

	
  <? if($_SESSION['miembro_tipo'] != "ka_owner" && $_SESSION['miembro_tipo'] != "ezd" && $_SESSION['miembro_tipo'] != "merchand"){?>
  <!--Puntos Start -->
  <section id="overview" class="sec-overview bg-white">
    <div class="container">
		<h2 class="sec-title">TUS RESULTADOS</h2>
      <div class="row">

        <div class="col-xs-6 col-md-<? if($_SESSION['chances_txt'] == "puntos"){?>3<? } else {?>4<? } ?>">
          <div class="wrapper ovi-item">
            <div class="wrapper-img">
              <!-- <img src="img/overview/ov1.png" alt="Overview icon" /> -->
              <!-- <span class="overview-img lnr lnr-pencil"></span> -->
              <span class="overview-img">
                <!-- agregar data-count=""-->
                <span class="counter"><?=$_SESSION['miembro_total_desafios_web']?></span> | 12
              </span>
              <!-- <i class="overview-img fa fa-pencil" aria-hidden="true"></i> -->
            </div>
            <hr>
            <h5>DESAF&Iacute;OS WEB</h5>
            <!-- <p>Sed maximus eu massa non mattis etiam eu porttitor lorem eu euismod velit etiam et leo quis</p> -->
          </div>
        </div>
        <div class="col-xs-6 col-md-<? if($_SESSION['chances_txt'] == "puntos"){?>3<? } else {?>4<? } ?>">
          <div class="wrapper ovi-item">
            <div class="wrapper-img">
              <!-- <img src="img/overview/ov2.png" alt="Overview icon" /> -->
              <span class="overview-img ">
                <!-- agregar data-count=""-->
                <span class="counter"><?=$_SESSION['miembro_total_desafios_negocio']?></span> | 4
              </span>
              <!-- <i class="overview-img fa fa-heart" aria-hidden="true"></i> -->
            </div>
            <hr>
            <h5>DESAF&Iacute;OS DE NEGOCIO</h5>
            <!-- <p>Sed maximus eu massa non mattis etiam eu porttitor lorem eu euismod velit etiam et leo quis</p> -->
          </div>
        </div>
        <div class="col-xs-6 col-md-<? if($_SESSION['chances_txt'] == "puntos"){?>3<? } else {?>4<? } ?>">
          <div class="wrapper ovi-item">
            <div class="wrapper-img ">

              <span class="overview-img">
                <!-- agregar  en el span para pasar el valor -->
                <span class="counter"><?=$_SESSION['miembro_puntos_acumulados']?></span>
              </span>

            </div>
            <hr>
            <h5><?=strtoupper($_SESSION['chances_txt'])?> ACUMULADOS</h5>

          </div>
        </div>

		<? if($_SESSION['chances_txt'] == "puntos"){?>
		<div class="col-xs-6 col-md-3">
          <div class="wrapper ovi-item animate delay-c">
            <div class="wrapper-img">
              <!-- agregar data-count=""-->
              <span class="overview-img ">
                <span class="counter rank"  ><?=$_SESSION['miembro_ranking']?></span>
              </span>
            </div>
            <hr>
            <h5>RANKING</h5>

          </div>
        </div>
		<? } ?>

      </div>
    </div>
  </section>
  <!-- Puntos End -->
  <? } ?>
	

	
	<? if($_SESSION['miembro_tipo'] != "ka_owner" && $_SESSION['miembro_tipo'] != "ezd" && $_SESSION['miembro_tipo'] != "merchand") include("inc_desafios.php")?>	
	

 <? //include("inc_desafio_especial1.php") ?>
	
 <? include("inc_premios.php") ?>
	

  <!-- SEC-MEGA -->
  <section id="sec-mega" class="sec-faq section-mega">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5 pack">
          <img src="img/pack-capsula.png" alt="capsula mega" class="left-pack animate delay-a">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-7 frase">
          <img src="img/frase-mega.png" alt="" class="right-banner animate delay-c">
          <!--accordion-->
        </div>

        <div class="col-xs-12 col-sm-6 pack">
          <a href="productomega" class="btn-mega left-pack animate delay-b">CONOC&Eacute; M&Aacute;S</a>
        </div>

      </div>
    </div>
  </section>
  <!-- END MEGA -->

  <!-- PORTFOLIO MARCAS -->
  <? include("inc_portfolio.php")?>
  <!-- END PORTFOLIO -->

	
  <? include("inc_combos_video.php")?>	






  <!-- FAQ -->
  <section id="faq" class="sec-faq bg-gradient-vertical">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7">
          <div class="faq-inner">
            <h2 class="sec-title">Mecánica y Premios</h2>
	          <? /*<a href="tutoriales" class="btn-mega-w"><i class="fa fa-play" aria-hidden="true"></i> Ver Tutoriales</a>*/ ?>
	          <br><br>
            <!-- <div class="hr"></div> -->
            <!-- <p class="subheader">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, perferendis?</p> -->
            <!--accordion-->
            <div class="panel-group" id="accordion">

			  <?
				$contar = 0;
				$query = "select * from contenidos where activo = 1 and tipo = 'faqs' and publico = '" . $_SESSION['miembro_tipo'] . "'";
				if($_SESSION['miembro_tipo'] == "ka" || $_SESSION['miembro_tipo'] == "ka_owner"){
					if($_SESSION['miembro_ka_venta'] == 1) {
						$query .= " and venta = 1";
					} else {
						$query .= " and venta = 0";
					}
				}
				if($_SESSION['miembro_tipo'] == "gt"){
					if($_SESSION['chances_txt'] == "chances") {
						$query .= " and chances = 1";
					} else {
						$query .= " and chances = 0";
					}
				}
		  		//echo($query);
				$query .= " order by orden asc";
				$sql=mysqli_query($connection,$query);
				while($rg=mysqli_fetch_object($sql)){
					$contar = $contar + 1;
			  ?>
			  <div class="panel panel-default animate <? if($contar >1){?>delay-a<? } ?>">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$contar?>" class="btn-accordion"><?=$rg->titulo?></a>
                  </h4>
                </div>
                <div id="collapse<?=$contar?>" class="panel-collapse collapse <? if($contar == 1){?>in<? } ?>">
                  <div class="panel-body"><?=$rg->descripcion?></div>
                </div>
              </div>

			  <? } ?>
            </div>

          </div>
        </div>
        <div class="col-sm-4 col-md-5 ">
          <div class="wrapper-img">
            <img src="img/faq/faq.png" alt="faq" class="animate delay-c">
          </div>
        </div>
      </div>
    </div>
  </section>



	
	
<? if($_SESSION['miembro_tipo'] == "ka"){?>	
	<? for ($i = 1; $i <= 3; $i++) { ?>
	<!--MODAL PUNTOS PDV -->
	<div class="modal fade modal-center modal-tabla-pdv" id="tabla-pdv<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-mega" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<table class="table table-responsive table-striped">
			  <thead>
				<tr>
				  <th>Direccion</th>
				  <th>Objetivo</th>
				</tr>
			  </thead>
			  <tbody>
				  <?
					$query = "select * from objetivos_ka_detalle where activo = 1 and orden = " . $i . " and dni_encargado = '" . $_SESSION['miembro_dni'] ."'";
					//echo($query);
					$sql=mysqli_query($connection,$query);
					while($rg=mysqli_fetch_object($sql)){
				  ?>
				<tr>
				  <td><?=$rg->calle?> <?=$rg->numero?> - <?=$rg->localidad?></td>
				  <th><?=$rg->objetivo_volumen?></th>
				</tr>
				<? } ?>
			  </tbody>
			</table>
		  </div>
		  <div class="modal-footer">
			<button class="btn-mega" data-dismiss="modal">Cerrar</button>
		  </div>
		</div>
	  </div>
	</div>
  <? } ?>	
	<!--END MODAL PUNTOS PDV -->	
  <? } ?>	

	
<? if(($_SESSION['miembro_tipo'] == "ka"|| $_SESSION['miembro_tipo'] == "kkaastaff") && $_SESSION['miembro_desafiosorpresa1007'] != 1){?>	
<div class="modal fade modal-center" id="ds-gt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
       <form action="" method="post" name="form1006" id="form1007">
        <div class="modal-content modal-summer violet">
          <div class="modal-body" style="width: 540px;">
            <h2 class="txt-white">&iexcl;APURATE! </h2>

            <p>SI SOS UNO DE LOS <? if($_SESSION['miembro_tipo'] == "ka"){?>7<? } else {?>30<? }?> PRIMEROS EN RESPONDER TE GANAS UNA </p>
            <p><strong>OH GIFT CARD POR $1000</strong></p>
            <!--  -->
			  
           <div class="desafio_sorpresa">

               <div class="mm-survery-content">
				<?
					$query = "select * from preguntas where activo = 1 and desafio_id = 1007";
					$sql=mysqli_query($connection,$query);
					while($rg=mysqli_fetch_object($sql)){
				?>
                <div class="mm-survey-question">
                 <h3 ><strong><?=$rg->pregunta?></strong></h3>
                </div>
				<? for ($i = 1; $i <= 4; $i++) { ?>   
                <div class="mm-survey-item border-mega-neon ">
                 <input type="radio" id="radio0<?=$i?>" data-item="1" name="radio1" value="<?=$rg->{"r".$i}?>" />
                 <label for="radio0<?=$i?>"><span></span><p><?=$rg->{"r".$i}?></p></label>
                </div>
				<? } ?>

               </div>
			   
			   <? }	 ?>

           </div>
          </div>
          <div class="modal-footer">
			  <input type="hidden" name="des1007" value="1">
            <button type="submit" onClick="document.forms['form1007'].submit();" form="form1" value="Submit" class="btn-mega-w btn-summer-out">Enviar</button>

          </div>
        </div>
      </form>
    </div>
  </div>	
<? } ?>	
	
<? if($recien_ingresa_1007 == 1){?>
<div class="modal fade modal-center modal-summer" id="ds-gt-end" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-mega" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="img/logo.png" alt="">
          <h2 class="blue-dark">&iexcl;GRACIAS POR PARTICIPAR! </h2>
          <p class="blue-dark">En breve comunicaremos a los ganadores</p>

        </div>
        <div class="modal-footer">
          <button class="btn-mega-out btn-summer-out" data-dismiss="modal">Continuar</button>
        </div>
      </div>
    </div>
  </div>
<? } ?>
	
	

	
	<?
	$especial = 2;
	$sin_cierre = 1;
	include("inc_footer.php")?>



	<? if($recien_ingresa_foto == 1 || $recien_ingresa_foto_especial == 1){?>
	<div class="modal fade modal-center modal-error-registro" id="pic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-mega" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<h4>Tu foto ha sido enviada con &eacute;xito</h4>
			<p>Gracias por participar</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn-mega" data-dismiss="modal">Cerrar</button>
		  </div>
		</div>
	  </div>
	</div>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('#pic').modal('show');

		});
	</script>
	<? } ?>
<? /*
<script>
$(document).ready(function() {
    owl = $("#owl-desafios").data('owlCarousel');
	owl.jumpTo(6);
	<? if($_SESSION['miembro_tipo'] == "gt"){?>	
    owl2 = $("#objetivos-gt").data('owlCarousel');
    owl2.jumpTo(1);
	<? } ?>
	<? if($_SESSION['miembro_tipo'] == "fsf" || $_SESSION['miembro_tipo'] == "ezd"){?>	
    owl2 = $("#objetivos-fsf").data('owlCarousel');
    owl2.jumpTo(1);
	<? } ?>
	<? if($_SESSION['miembro_tipo'] == "ka"){?>	
    owl2 = $("#objetivos-kkaa").data('owlCarousel');
    owl2.jumpTo(2);
	<? } ?>
});
</script>
*/ ?>

<? if(parametro('conmodales') == 1)	include("inc_modales.php") ?>	
	
<script>
  $(document).ready(function(){
      $(".premio").click(function(){
          $(this).find(".listado").slideToggle("slow");
          var b = $(this).find(".titulo span");
          b.toggleClass("lnr-chevron-down-circle lnr-chevron-up-circle");

      });
  });
</script>

<script>
  $(document).ready(function(){
      $(".premio").click(function(){
          $(this).find(".listado").slideToggle("slow");
          var b = $(this).find(".titulo span");
          b.toggleClass("lnr-chevron-down-circle lnr-chevron-up-circle");
      });
  });
</script>
<script type="text/javascript">
  $('.desafio-web').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
})
	
</script>	

<script type="text/javascript">
$(window).on('load',function(){
	<? if(($_SESSION['miembro_tipo'] == "ka"|| $_SESSION['miembro_tipo'] == "kkaastaff") && $_SESSION['miembro_desafiosorpresa1007'] != 1){?>	
    $('#ds-gt').modal('show');
	<? } ?>	
	<? if($recien_ingresa_1007 == 1){?>
    $('#ds-gt-end').modal('show');
	<? } ?>
});
	
$(document).ready(function() {
 	owl = $(".carousel-desafios").data('owlCarousel');
    owl.jumpTo(<?=round($periodo_activoo)?>);
	});
	
</script>

	
	
<?php mysqli_close($connection);?>
</body>

</html>
