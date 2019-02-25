<? include("inc_top.php");
include("inc_validacion.php");



if($_SESSION['miembro_desafio'.$desafio_id] == ""){
} else {
//	header("location:main");
//	exit();
}


$query = "SELECT *, DATE_ADD(NOW(), INTERVAL 1 WEEK) AS proxima_semana, DATE_ADD(fecha_desde, INTERVAL 1 WEEK) AS vto FROM desafios WHERE activo = 1  ORDER BY fecha_desde ASC";
$sql=mysqli_query($connection,$query);
while($rg=mysqli_fetch_object($sql)) {

	if(strtotime("now") < strtotime($rg->fecha_desde)) {
		${"desafio_ok".$rg->id} = 0;
	} elseif(strtotime("now") > strtotime($rg->vto)) {
		${"desafio_ok".$rg->id} = 0;
	} else{
		${"desafio_ok".$rg->id} = 1;
	}

}
//echo($desafio_ok1 . "A");
if(${"desafio_ok".$desafio_id} == 1) $desafio_valido = 1;

$existe_respuesta = 0;
$query = "select * from desafios_respuestas where comercio_id = " . $_SESSION['miembro_id'] . " and desafio_id = " . $desafio_id;
$sql=mysqli_query($connection,$query);
while($rg=mysqli_fetch_object($sql)) {
	$existe_respuesta = $rg->id;
}
if($existe_respuesta >0) $desafio_valido = 0;


if($_SESSION['miembro_id'] != '8198'){
	if($desafio_valido != 1){
		mysqli_close($connection);
		header("location:main");
		exit();

	}
}

if($_REQUEST['enviar'] == 1){
		$repondio = 1;
		$correctas = $incorrectas =  $puntos = 0;
		$queryins = "insert into desafios_respuestas (activo,desafio_id,comercio_id,fecha,puntos,p1,p2,p3,p4,p5)
		values (1,'" . $desafio_id . "','" . $_SESSION['miembro_id'] . "',now(),'zzpuntos','" . $_REQUEST['radio1'] . "','" . $_REQUEST['radio2'] . "','" . $_REQUEST['radio3'] . "','" . $_REQUEST['radio4'] . "','" . $_REQUEST['radio5'] . "')";
		$contar_orden = 0;
		$query = "select * from preguntas where activo = 1 and desafio_id = " . $desafio_id . " order by orden asc";
		$sql=mysqli_query($connection,$query);
		while($rg=mysqli_fetch_object($sql)){
			$contar_orden = $contar_orden + 1;
			if($_REQUEST['radio'.$contar_orden] == $rg->respuesta){
				$correctas = $correctas + 1;
			} elseif($rg->respuesta != 0) {
				$incorrectas = $incorrectas + 1;
			}
		}
		$do = $do = evento($desafio_id);
		if($desafio_id == 2) $incorrectas = 0;
		if($incorrectas == 0) $puntos = puntoscorrectos();
		//echo($incorrectas . "-" . $correctas . "-" .  $puntos);
		$queryins = str_replace('zzpuntos',$puntos,$queryins);
		//echo($queryins);
		if($_SESSION['queryins'] != $queryins){
			$result = mysqli_query($connection,$queryins);
			$_SESSION['queryins'] = $queryins;
		}
		$_SESSION['miembro_desafio'.$desafio_id] = $puntos;

}

if($_REQUEST['fotopackdsf'] == 1){
	$id_file = 0;
	$query = "select * from desafios_respuestas where activo = 1 and desafio_id = " . $desafio_id . " and comercio_id = " . $_SESSION['miembro_id'];
	//echo($query);
	$sql=mysqli_query($connection,$query);
	while($rg=mysqli_fetch_object($sql)){
		$id_file = $rg->id;
	}

	$tabla = "desafios_respuestas";
	$carpeta_ubicacion = $tabla . "/";
	$carpeta_ubicacion_adicional = date('Y') . "-" . date('m') . "/";
	$carpeta_ubicacion = $carpeta_ubicacion . $carpeta_ubicacion_adicional;
	$makedir = $carpeta_upload . $carpeta_ubicacion;

	if (!is_dir($makedir)) {
		mkdir($makedir,0777);
	}
	//echo($_FILES['documento1']['name']);
	$nombre_foto = guiones_fotos($_FILES['documento1']['name']);
	$puntos = puntoscorrectos();

	if($nombre_foto != ""){
		if($id_file == 0){
			$queryins = "insert into desafios_respuestas (activo,desafio_id,puntos,comercio_id,fecha) values (1,'" . $desafio_id . "','" . $puntos ."','" . $_SESSION['miembro_id'] . "',now())";
			//echo($queryins);
			$sql=mysqli_query($connection,$queryins);
			$id_file = mysqli_insert_id($connection);
		}

		$adjunto_file_nombre = $id_file. "-" . $nombre_foto;
		$adjunto_file = $carpeta_ubicacion . $id_file. "-" . $nombre_foto;
		//echo($_FILES['documento1']['tmp_name'] . ": ". $carpeta_upload . $adjunto_file . "<br><br>");
		move_uploaded_file($_FILES['documento1']['tmp_name'], $carpeta_upload . $adjunto_file);
		chmod($carpeta_upload . $adjunto_file, 0755);
		$result = "UPDATE desafios_respuestas SET documento1 ='" . $carpeta_ubicacion_adicional . $adjunto_file_nombre."', fecha = now() WHERE id='".$id_file."'";
		$sql=mysqli_query($connection,$result);
		$recien_ingresa_foto = 1;
		$do = evento($desafio_id);
		$repondio = 1;
		$_SESSION['miembro_desafio'.$desafio_id] = $puntos;

	}

}




if($desafio_id == 2) $sin_preguntas = 1;

?><!DOCTYPE html>
<html lang="en">

<head>
 <!-- META -->
 <meta charset="UTF-8">
<? include("inc_head.php") ?>
 <link rel="stylesheet" href="css/desafios.css">
<? if($desafio_id == 9){?>
<link href="./css/game.css" rel="stylesheet" type="text/css">
<? } ?>

<? include("inc_head_bottom.php") ?>

</head>

<body class="bg-challenge">
 <!--Loader-->
 <div class="loading load_log">
  <div class="loading-center">
   <div class="loading-center-absolute">
    <div class="object object_one"></div>
    <div class="object object_two"></div>
    <div class="object object_three"></div>
   </div>
  </div>
 </div>

 <!-- LOGUIN -->

<form name="form1c" id="form1c" method="post" enctype="multipart/form-data">
<section id="sec-desafio" class="sec-desafio">
  <div class="container">
   <div class="row row_log">
    <div class="col-xs-12 col-sm-6 col-lg-8 ">

     <div class="mm-survey animate delay-a">

      <div class="mm-survey-progress">
       <div class="mm-survey-progress-bar mm-progress"></div>
      </div>

     <? if($repondio == 1){?>
	 <div class="mm-survey-results  gradient-pack" style="display: block !important">
       <div class="mm-survey-results-container">
        <h3>Gracias por participar</h3>
		<? if($puntos >0){?>
		   <h3>	Respondiste el desafío correctamente<br>
			Ganaste <?=$puntos?> <?=$_SESSION['chances_txt']?> </h3>
        <? } ?>
		 </div>
       <div class="mm-survey-results-controller">
        <div class="mm-back-btn">
         <a href="main" class="btn-mega">VOLVER</a>
        </div>

       </div>
      </div>
      <? } else {?>


		<?
			if($desafio_id == 6){
				include("inc_desafio_6.php");
			} elseif($desafio_id == 9){
				include("inc_desafio_9.php");
			} else {
				include("inc_desafio_preguntas.php");
			}
		?>


	 <? } ?>
     </div>
    </div>
   </div>
  </div>
</section>
</form>
 <!-- END LOGUIN -->

	<? if($desafio_id == 9){?>
    <!--Third Party Libs-->
    <script src="./js/vendors/jquery-3.3.1.min.js"></script>
    <script src="./js/vendors/phaser-ce-2.11.0.min.js"></script>
    <script src="./js/vendors/lodash.min.js"></script>
    <script src="./js/vendors/matter.min.js"></script>
    <script src="./js/vendors/objectdetect.js"></script>
    <script src="./js/vendors/objectdetect.handfist.js"></script>
    <script src="./js/vendors/countUp.js"></script>
    <script src="./js/vendors/compatibility.js"></script>
    <script src="./js/vendors/pleaserotate-modified.js"></script>
    <script src="./js/polyfills/ie-event-polyfill.js"></script>
    <!-- Massalin Scripts -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>


    <!--Scripts-->
    <script src="./js/main.js"></script>
	<? mysqli_close($connection);?>
	<? } else {?>
	<?
	$especial = 3;
	include("inc_footer.php");
	}
	?>


</body>

</html>
