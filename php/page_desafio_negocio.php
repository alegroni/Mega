<? include("inc_top.php");
include("inc_validacion.php");

$periodo = clean($_REQUEST['desafionegocio_id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META -->
  <meta charset="UTF-8">
  <? include("inc_head.php") ?>
  <!-- STYLESHEETS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

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

  <? include("inc_cabezal.php")?>



  <!-- SEC-MEGA -->
<section class="info-negocio">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-12">
                  <div class="tab-negocio">
                    <div class="head">
                      <div class="icon">
                        <img src="img/s_calendar.svg" alt="">
                      </div>
                      <div class="tittle">
                        <h3>Desafío de Negocio del <strong>Período <?=$periodo?></strong></h3>
                      </div>
                    </div>
                  <div class="body">
                    <p>Vigencia desde <?=$_SESSION['miembro_obj_vigencia_' . $periodo]?></p>
                  </div>
                </div>
              </div>
          </div>
			

			
		  <? if($_SESSION['miembro_tipo'] == "fsf"){?>	
          <div class="row">

            <div class="col-xs-12 col-sm-6">
              <div class="card-objetivo distribucion">
                <div class="body">

                    <img src="img/s_truck.svg" alt="">


                    <h3>Distribuci&oacute;n</h3>

                </div>
              </div>
              <div class="tab-negocio distribucion">

                <div class="body">
                  <div class="table">
                    <table>
                      <thead>
                        <tr>
                          <th>Marca</th>
                          <td>Objetivo</td>
                          <td>Resultado</td>
                          <td>Status</td>
                        </tr>
                      </thead>
                      <tbody>
                        <? 
						$ttit1 = "MEGA";
						$ttit2 = "PM CAPS KS";
						$ttit3 = "CH KS";
						$ttit4 = "PM CAPS BOX";
						$ttitimg1 = "icon_mega.png";
						$ttitimg2 = "icon_pm_capsks.png";
						$ttitimg3 = "icon_chesterfield.png";
						$ttitimg4 = "icon_pm_capsbox.png";
						for ($i = 1; $i <= 3; $i++) {?>
						<? if($_SESSION['miembro_objetivo_distr_producto_'.$i.'_' . $periodo] != ""){?>
						<tr>
                          <th><img src="img/<?=${"ttitimg".$i}?>" alt=""><h5><?=${"ttit".$i}?></h5></th>
                          <td class="td-obj"><span class="value"><?=round($_SESSION['miembro_objetivo_distr_objetivo_'.$i.'_' . $periodo]*100,2)?>%</span><span class="unit"></span></td>
                          <td><span class="value"><?=$_SESSION['miembro_objetivo_distr_resultado_'.$i.'_' . $periodo]?></span><span class="unit"></span></td>
                          <td>
							  	<? $icon = "fa-clock-o";
									if($_SESSION['miembro_objetivo_distr_objetivo_'.$i.'_' . $periodo] != "S/D"){?>
							  	    <? 
									$icon = "fa-times";
									if($_SESSION['miembro_objetivo_distr_objetivo_'.$i.'_' . $periodo] == "CUMPLIDO") $icon = "fa-check";
									?>
							    <? } ?>
							  		<i class="fa <?=$icon?>" aria-hidden="true"></i>
						  </td>
                        </tr>
						<? } 
						   } ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="card-objetivo mix">
                <div class="body">

                    <img src="img/s_pie.svg" alt="">

                    <h3>Volumen Mix</h3>

                </div>
              </div>
              <div class="tab-negocio mix">

                <div class="body">
                  <div class="table">
                    <table>
                      <thead>
                        <tr>
                          <th>Marca</th>
                          <td>Objetivo</td>
                          <td>Resultado</td>
                          <td>Status</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th><img src="img/icon_mega.png" alt=""><h5>MEGA</h5></th>
                          <td class="td-obj"><span class="value"><?=round($_SESSION['miembro_objetivo_mix_objetivo_1_' . $periodo]*100,2)?>%</span><span class="unit"></span></td>
                          <td><span class="value"><?=$_SESSION['miembro_objetivo_mix_resultado_1_' . $periodo]?></span><span class="unit"></span></td>
                          <td>
							  	<? $icon = "fa-clock-o";
									if($_SESSION['miembro_objetivo_mix_cumplimiento_1_' . $periodo] != "S/D"){?>
							  	    <? 
									$icon = "fa-times";
									if($_SESSION['miembro_objetivo_mix_cumplimiento_1_' . $periodo] == "CUMPLIDO") $icon = "fa-check";
									?>
							    <? } ?>
							  		<i class="fa <?=$icon?>" aria-hidden="true"></i>
							  
							</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="tab-negocio stat">
                <div class="head">
                  <div class="icon"><img src="img/s_star.svg" alt=""></div>
                  <div class="tittle"><h3>Puntos por cumplimiento</h3></div>
                </div>
                <div class="body">
                  <p class="points">DUPLICA LOS PUNTOS DE LOS DESAFIOS WEB SUMADOS EN ESTE PER&Iacute;ODO</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              
				<? if($icon == "fa-clock-o"){?>
				<div class="tab-negocio stat">
                <div class="head">
                  <div class="icon"><img src="img/s_status.svg" alt=""></div>
                  <div class="tittle"><h3>Status</h3></div>
                </div>
                <div class="body">
                    <p class="points">SE DAR&Aacute; POR CUMPLIDO EN EL CASO DE CUMPLIR EL OBJETIVO DE VOLUMEN MIX</p>
                </div>


              </div>
				<? } elseif($icon == "fa-check"){?>
					<div class="col-xs-12 col-sm-6">
					  <div class="tab-negocio stat ok">
						<div class="head">
						  <div class="icon"><img src="img/s_status.svg" alt=""></div>
						  <div class="tittle"><h3>Status</h3></div>
						</div>
						<div class="body">
							<div class="stat"><img src="img/s_check.svg" alt=""></div>
							<h3>CUMPLI&Oacute;</h3>
						</div>


					  </div>

					</div>	
				<? } elseif($icon == "fa-times"){?>
				
           <div class="col-xs-12 col-sm-6">
              <div class="tab-negocio stat wrong">
                <div class="head">
                  <div class="icon"><img src="img/s_status.svg" alt=""></div>
                  <div class="tittle"><h3>Status</h3></div>
                </div>
                <div class="body">
                    <div class="stat"><img src="img/s_wrong.svg" alt=""></div>
                    <h3>NO CUMPLI&Oacute;</h3>
                </div>


              </div>

            </div>				
				
			  <? } ?>	
				
            </div>
          </div>
		  <? } ?>
			
			
			
			
			
			
		  <? if($_SESSION['miembro_tipo'] != "fsf"){?>
          <div class="row">

            <div class="col-xs-12">
              <div class="card-objetivo volumen">
                <div class="body">

                    <img src="img/s_chart.svg" alt="">


                    <h3>Volumen</h3>

                </div>
              </div>
              <div class="tab-negocio volumen">

                <div class="body">
                  <div class="table">
                    <table>
                      <thead>
                        <tr>
                          <th>Marca</th>
                          <td>Objetivo</td>
                          <td>Resultado</td>
                          <td>Puntos</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th><img src="img/icon_mega.png" alt=""><h5>MEGA</h5></th>
                          <td class="td-obj"><span class="value"><?=$_SESSION['miembro_obj_vol_objetivo_1_' . $periodo]?></span><span class="unit"><? //%?></span></td>
                          <td><span class="value"><?=$_SESSION['miembro_obj_vol_resultado_1_' . $periodo]?></span><span class="unit"><? //%?></span></td>
                          <td><span class="value"><?=$_SESSION['miembro_obj_vol_cumplimiento_1_' . $periodo]?></span></td>
                        </tr>
                        <? if($_SESSION['miembro_tipo'] == "ka" || $_SESSION['miembro_tipo'] == "kkaastaff"){?>
						<tr>
                          <th><img src="img/icon_fusion.png" alt=""><img src="img/icon_ice.png" alt=""><h5>FLIA MARLBORO CÁPSULAS</h5></th>
                          <td class="td-obj"><span class="value"><?=$_SESSION['miembro_obj_vol_objetivo_2_' . $periodo]?></span><span class="unit"><? //%?></span></td>
                          <td><span class="value"><?=$_SESSION['miembro_obj_vol_resultado_2_' . $periodo]?></span><span class="unit"><? //%?></span></td>
                          <td><span class="value"><?=$_SESSION['miembro_obj_vol_cumplimiento_2_' . $periodo]?></span></td>
                        </tr>
						<? } ?>

                      </tbody>
                    </table>
                  </div>
					 <p >Los objetivos de volumen se miden en atados de 20.</p>
                </div>
              </div>

					<? if($_SESSION['miembro_tipo'] == "gt"){?>
					<div class="col-xs-6 col-sm-6">
					  <div class="tab-negocio stat">
						<div class="head">
						  <div class="icon"><img src="img/s_status.svg" alt=""></div>
						  <div class="tittle"><h3>Puntos por cumplimiento</h3></div>
						</div>
						<div class="body">
						  <h2 class="points">600</h2>
						</div>
					  </div>

					</div>
					<div class="col-xs-6 col-sm-6">
					  <div class="tab-negocio stat">
						<div class="head">
						  <div class="icon"><img src="img/s_star.svg" alt=""></div>
						  <div class="tittle"><h3>PUNTOS OBTENIDOS</h3></div>
						</div>
						<div class="body">
							<h2 class="points">S/D</h2>
						</div>


					  </div>
					</div>
				    <? } ?>

				
				
            </div>

          </div>
		 
		  <? if($_SESSION['miembro_tipo'] == "ka"){?>	
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="tab-negocio stat detalle-puntos">
                <div class="head">
                  <div class="icon"><img src="img/s_status.svg" alt=""></div>

                  <div class="tittle"><h3>Puntos por cumplimiento</h3></div>
                </div>
                <div class="body">
                  <table >
                    <thead>
                      <tr>
                        <th>MARCA</th>
                        <th>PUNTOS</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>MEGA</td>
                        <td><?=$_SESSION['miembro_obj_puntos_cumplimiento_mega_' . $periodo]?></td>
                      </tr>
                      <tr>
                        <td>FLIA MARLBORO CÁPSULAS</td>
                        <td><?=$_SESSION['miembro_obj_puntos_cumplimiento_capsulas_' . $periodo]?></td>
                      </tr>
                      <tr>
                        <td>BONUS</td>
                        <td><?=$_SESSION['miembro_obj_puntos_cumplimiento_bonus_' . $periodo]?></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <p class="points">EL BONUS SE OBTIENE AL CUMPLIR AMBOS OBJETIVOS DE MARLBORO MEGA Y MARLBORO CAPS</p> -->
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="tab-negocio">
                <div class="head">
                  <div class="icon"><img src="img/s_star.svg" alt=""></div>
                  <div class="tittle"><h3>BONUS</h3></div>
                </div>
                <div class="body">
                  <p style="padding-left:0">Los puntos bonus se obtienen al completar ambos objetivos</p>
                </div>
              </div>
              <div class="tab-negocio stat">
                <div class="head">
                  <div class="icon"><img src="img/s_star.svg" alt=""></div>
                  <div class="tittle"><h3>PUNTOS OBTENIDOS</h3></div>
                </div>
                <div class="body">
                    <h2 class="points"><?=sd($_SESSION['miembro_obj_puntos_' . $periodo])?></h2>
                </div>


              </div>

            </div>
          </div>
		  <? } ?>

		  <? if($_SESSION['miembro_tipo'] == "ka"){?>
			<div class="row">

            <div class="col-xs-12">
              <div class="card-objetivo volumen">
                <div class="body">

                    <img src="img/s_pdv.svg" alt="">


                    <h3>Detalle PDV</h3>

                </div>
              </div>
				
			  <?
				$query = "select * from objetivos_ka_summer_detalle where activo = 1 and orden = " . $periodo . " and dni = '" . $_SESSION['miembro_dni'] ."'";
				//echo($query);
				$sql=mysqli_query($connection,$query);
				while($rg=mysqli_fetch_object($sql)){
			  ?>
              <div class="tab-negocio volumen">
                 <div class="head panel-heading">
                   <div class="icon"><img src="img/s_pdv.svg" alt=""></div>
                   <div class="tittle"><h3 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$rg->id?>" aria-expanded="false" class="btn-accordion collapsed"><?=$rg->posis?></a></h3></div>

                 </div>
				  
				  
                 <p class="adress-pdv"><?=$rg->calle?> <?=$rg->numero?> <?$rg->localidad?></p>
                 <div id="collapse<?=$rg->id?>" class="panel-collapse collapse">

                   <div class="panel-body body">
                     <div class="row">
                       <div class="col-xs-12">
                         <div class="tab-negocio volumen pdv">

                           <div class="body">
                             <div class="table">
                               <table>
                                 <thead>
                                   <tr>
                                     <th>Marca</th>
                                     <td>Objetivo</td>
                                     <td>Resultado</td>
                                     <td>Puntos</td>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                     <th><img src="img/icon_mega.png" alt=""><h5>MEGA</h5></th>
                                     <td class="td-obj"><span class="value"><?=$rg->objetivo_1_mega?></span><span class="unit"> </span></td>
                                     <td><span class="value"><?=sd($rg->resultado_1_mega)?></span><span class="unit"></span></td>
                                     <td><span class="value"><?=sd($rg->cumplimiento_1_mega)?></span></td>
                                   </tr>
                                   <tr>
                                     <th><img src="img/icon_fusion.png" alt=""><img src="img/icon_ice.png" alt=""><h5>FLIA MARLBORO CÁPSULAS</h5></th>
                                     <td class="td-obj"><span class="value"><?=$rg->objetivo_2_capsulas?></span><span class="unit"> </span></td>
                                     <td><span class="value"><?=sd($rg->resultado_2_capsulas)?></span><span class="unit"></span></td>
                                     <td><span class="value"><?=sd($rg->cumplimiento_2_capsulas)?></span></td>
                                   </tr>

                                 </tbody>
                               </table>
                             </div>
                           </div>
                         </div>
                         <div class="tab-negocio stat pdv">
                           <div class="head">
                             <div class="icon"><img src="img/s_star.svg" alt=""></div>
                             <div class="tittle"><h3>PUNTOS OBTENIDOS</h3></div>
                           </div>
                           <div class="body">
                               <h2 class="points"><?=sd($rg->puntos)?></h2>
                           </div>


                         </div>
                       </div>
                     </div>


                   </div>
                 </div>
              </div>
				
			  <? } ?>	
				

            </div>
          </div>
		<? } ?>
		<? } ?>

        </div>
      </div>

    </div>
  </section>  
  <!-- END MEGA -->




	<?
	$simple = 1;
	include("inc_footer.php")?>

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

<script type="text/javascript" src="js/counterup.js"></script>
<script type="text/javascript" src="js/events.js"></script>

<script>
  $(document).ready(function(){
      $(".premio").click(function(){
          $(this).find(".listado").slideToggle("slow");
          var b = $(this).find(".titulo span");
          b.toggleClass("lnr-chevron-down-circle lnr-chevron-up-circle");
      });
  });
</script>

</body>

</html>
