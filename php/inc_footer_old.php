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
  <script type="text/javascript" src="js/theme.js"></script>

<? } ?>

<? if($especial == 2){?>
  <footer class="bg-img">
    <div class="bg-img"></div>
    <h5 class="footer">Copyright &copy; <strong></strong> <?=date('Y')?>. Todos los derechos reservados.</h5>
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

<?php mysqli_close($connection);?>
