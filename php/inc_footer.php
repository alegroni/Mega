<? if($includes != "si") exit(); ?>

<? if($simple != 1){?>
  <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  <!-- Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/custom-animations.js"></script>
  <? /*<script type="text/javascript" src="js/theme.js"></script>*/?>

<? } ?>

<? if($especial == 2){?>
  <footer class="bg-img">
    <div class="bg-img"></div>
    <h5 class="footer">Copyright &copy; <strong></strong> <?=date('Y')?>. Todos los derechos reservados.<a class="cyan"href="bases">- Bases y Condiciones</a> <a class="cyan" href="cookies"> - Pol&iacute;ticas de cookies</a><a class="cyan"href="privacidad"> - Pol&iacute;ticas de privacidad</a></h5>

   <p class="footer">Ante cualquier duda, comun&iacute;quese al <a class="cyan"href="tel:0800-888-6275"><i class="fa fa-phone-square" aria-hidden="true"></i> 0800-888-6275</a> -
     <a class="cyan"target="_blank" href="https://wa.me/5491138283571?text=Hola%2C%20deseo%20adquirir%20un%20soporte%20con%20ustedes"><i class="fa fa-whatsapp" aria-hidden="true"></i> 11 3828 3571</a> -

   <a class="cyan" target="_blank" href="mailto:go.massalin@pmi.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>go.massalin@pmi.com</a>
   </p>

</footer>


	<!-- END FOOTER -->
  <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  <!-- Scripts -->
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

<? } ?>


<? if($especial == 3){?>
 <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
 <!-- Scripts -->
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
 <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
 <script type="text/javascript" src="js/owl.carousel.min.js"></script>
 <script type="text/javascript" src="js/plugins.js"></script>
 <script type="text/javascript" src="js/gmap.js"></script>
 <script type="text/javascript" src="js/theme.js"></script>
 <script type="text/javascript" src="js/desafios.js"></script>
 <script type="text/javascript" src="js/custom-animations.js"></script>

<? } ?>

<script>
function enviarform1c(){
	 document.forms["form1c"].submit();
}
</script>

<?php if($sin_cierre != 1)	mysqli_close($connection);?>
