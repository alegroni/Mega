<? include("inc_top.php");
include("inc_validacion.php");
?><!DOCTYPE html>
<html lang="en">

<head>
  <!-- META -->
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Faded | App Landing Page">
  <meta name="author" content="droitlab">
  <!-- SITE TITLE -->
  <title>GoMassalin | Tips de Venta</title>
  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/eurostile.css">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/preset.css">
  <link rel="stylesheet" href="css/scroll-animation.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_mega.css">
  <link rel="stylesheet" href="css/tips.css">
  <link rel="stylesheet" id="triggerColor" href="css/triggerPlate/color0.css">
  <link rel="stylesheet" id="grad_triggerColor" href="css/triggerPlate/gradient/color-0.css">
  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="img/Favicon_app.png">
  <style type="text/css">
<? include("inc_head_bottom.php") ?>

  </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
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

  <? include("inc_cabezal.php")?>

  <? if($_REQUEST['contenido_id'] >0){
	
	  	$query = "select * from contenidos where activo = 1 and tipo = 'tips-gt' and fecha_evento < now() and id = " . $_REQUEST['contenido_id'];
		$sql=mysqli_query($connection,$query); 
		while($rg=mysqli_fetch_object($sql)){
			echo($rg->descripcion_sec);
		}
} else { ?>

  <section class="sec-tips kiosco-bg">

    <div class="container">
      <div class="row">
		  
		<?
		$contar = 1;
	  	$query = "select * from contenidos where activo = 1 and tipo = 'tips-gt' order by fecha_evento asc";
		$sql=mysqli_query($connection,$query); 
		while($rg=mysqli_fetch_object($sql)){
			$contar = $contar + 1;
			if($contar == 3) $contar = 1;
			$link = "tipskiosquero-" . $rg->id;
			$disponible = 1;
			if(strtotime("now") < strtotime($rg->fecha_evento)) {
				$disponible = 0;
				$link = "";
			}
		?>
        <div class="col-xs-12 col-md-4 <? if($contar == 1){?>col-md-offset-2<? } ?>">
          <a href="<?=$link?>"> <div class="tip-kiosco <? if($disponible == 1){?>active<? } ?>">
            <div class="head"style="background-image:url(imagenes/contenidos/<?=$rg->documento1?>)">
              <div class="screen"><h3>Disponible el <?=datetime('d/m',$rg->fecha_evento)?></h3></div>
            </div>
            <div class="titular">
              <h4><?=$rg->titulo?></h4>
            </div>
          </div>
          </a>
        </div>
		  
		<? } ?>  

  </section>
		
	<? } ?>	
	
  <!-- cd-timeline -->
</body>




<!-- FOOTER -->
  <footer class="bg-img">
    <div class="bg-img"></div>
    <h5 class="footer">Copyright &copy; <strong></strong> <?=date('Y')?>. Todos los derechos reservados.<a class="cyan"href="bases">- Bases y Condiciones</a> <a class="cyan" href="cookies"> - Pol&iacute;ticas de cookies</a><a class="cyan"href="privacidad"> - Pol&iacute;ticas de privacidad</a></h5>    

   <p class="footer">Ante cualquier duda, comun&iacute;quese al <a class="cyan"href="tel:0800-888-6275"><i class="fa fa-phone-square" aria-hidden="true"></i> 0800-888-6275</a></p>

</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<!-- Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/custom-animations.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/counterup.js"></script>
<script type="text/javascript" src="js/events.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    var $timeline_block = $('.cd-timeline-block');

    //hide timeline blocks which are outside the viewport
    $timeline_block.each(function() {
      if ($(this).offset().top > $(window).scrollTop() + $(window).height() * 0.75) {
        $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
      }
    });

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function() {
      $timeline_block.each(function() {
        if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden')) {
          $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        }
      });
    });
  });
</script>

<?php mysqli_close($connection);?>

</body>

</html>
