<? if($includes != "si") exit(); ?>


<? if($_SESSION['miembro_tipo'] == "gtx"){
		$habilitado = 0;
		$query = "select * from posis_1008 where (posis = '" . $_SESSION['miembro_posis'] . "' or posis = '0000" . $_SESSION['miembro_posis'] . "')";
		$sql=mysqli_query($connection,$query);
		while($rg=mysqli_fetch_object($sql)){
			$habilitado = 1;
		}
	if($habilitado == 1){?>
    <!-- DESAFIO SORPRESA GT -->
    <div class="modal fade modal-center" id="ds-gt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog " role="document">
         <form  action="index.html" method="post">
          <div class="modal-content modal-summer violet">
            <div class="modal-body" style="width:100%;text-align:center;">
              <svg style="max-width: 120px;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
              <style type="text/css">
              	.st0{fill:#FFFFFF;}
              </style>
              <g>
              	<path class="st0" d="M82.1,215.9l-0.9-3.4c-1.6-5.8-3.1-11.4-4.6-17c-0.6-2.3-1.2-4.6-1.8-6.9c-0.6-2.2-1.2-4.3-1.7-6.5
              		c-22.6-2.8-40.5-20.6-43.6-43.3C26.2,114.9,41,91.6,63.9,84.5c0.8-0.3,1-0.5,1.3-1.2c6.2-14.4,16-26.1,29.2-35
              		c11.8-8,25.3-12.6,40.3-13.7c36.7-2.4,70.4,19.9,82,54.2c9.8,28.7,5.1,55.3-14,79c-10.9,13.5-25.6,22.7-43.6,27.5
              		c-14.8,3.9-29.9,8-44.4,11.9c-8.3,2.2-16.7,4.5-25,6.7c-0.8,0.3-1.6,0.4-2.4,0.6c-0.5,0.1-1.1,0.2-1.7,0.4L82.1,215.9z M74.1,175.2
              		c2.9,0.2,4.7,1.8,5.6,4.6c0.6,2.4,1.2,4.7,1.9,7c0.6,2.3,1.3,4.6,1.9,6.9c1.2,4.5,2.4,9,3.7,13.7c0.2,0,0.3-0.1,0.5-0.1l0.1,0
              		c8.4-2.2,16.7-4.5,25-6.7c14.6-3.9,29.6-8,44.5-11.9c16.8-4.4,29.9-12.6,40-25.1c17.5-21.7,21.8-46.1,12.8-72.3
              		c-10.6-31.3-41.4-51.6-74.8-49.4c-13.9,1-25.9,5.1-36.8,12.5c-12,8.1-21,18.8-26.6,31.9c-1.1,2.6-2.9,4.2-5.6,5.1
              		c-19.7,6.1-32.4,26.1-29.6,46.7C39.1,157.6,54.6,172.9,74.1,175.2z"/>
              </g>
              <g>
              	<path class="st0" d="M136.6,106.8c5.2-3.7,10.6-4.4,16.4-2.8c6.1,1.7,10.6,6.6,10.9,12.9c0.4,8.8,0.3,17.6,0.1,26.4
              		c-0.1,3.9-2.6,6.1-6,6.2c-3.3,0.1-6.1-2.4-6.2-6.1c-0.3-7.2-0.2-14.5-0.2-21.8c0-4.7-2.6-7.7-7-7.8c-4.7-0.2-7.7,2.5-7.8,7.3
              		c-0.2,6.8-0.1,13.6-0.1,20.4c0,1.2-0.1,2.4-0.4,3.5c-0.7,2.8-3.1,4.5-6,4.5c-2.7,0-5-1.9-5.7-4.6c-0.2-1-0.4-2-0.4-3
              		c0-16.6,0-33.3,0-49.9c0-3.9,1.5-6.3,4.2-7.2c4.3-1.4,8.2,1.5,8.3,6.3C136.7,96.1,136.6,101.3,136.6,106.8z"/>
              	<path class="st0" d="M117.8,126.4c-0.1,11.1-6.3,20-15.4,22.6c-11.1,3.2-21.7-2-26.2-12.7c-4-9.6-1.5-21.1,6.3-28.1
              		c9.9-8.9,26-5.7,32.3,6.4C116.9,118.5,118,122.5,117.8,126.4z M105.8,126.8c-0.5-4.2-1.6-7.2-3.6-9.5c-3.4-3.7-9.9-3.4-12.6,0.8
              		c-3.4,5.2-3.5,10.6-0.5,16.2c2.7,5.1,11.3,5.9,14.4-0.1C104.5,131.9,105,129.3,105.8,126.8z"/>
              	<path class="st0" d="M189,110.1c0,5.3,0,10.7,0,16c0,2.9-1.6,4.9-4.3,5.7c-2.9,0.8-6-0.2-7.3-2.6c-0.5-0.9-0.8-1.9-0.8-2.9
              		c-0.1-10.8,0-21.7-0.1-32.5c0-3,2.6-5.5,5.9-5.6c3.6-0.2,6.5,2.2,6.5,5.6C189.1,99.2,189,104.6,189,110.1L189,110.1z"/>
              	<path class="st0" d="M182.9,136.5c3.7,0,6.6,2.9,6.6,6.7c0,3.7-2.9,6.7-6.7,6.8c-3.5,0.1-6.6-2.9-6.6-6.3
              		C176.3,139.2,178.7,136.5,182.9,136.5z"/>
              </g>
              </svg>
              <h2 class="txt-white">&iquest;Quer&eacute;s ganarte una Gift Card por $1.500?</h2>

              <!-- PREMIO KKAA SUPERVISORES -->
              <p>&iexcl;Entonces no dejes pasar este sorteo y particip&aacute;!</p>
              <!--  -->
              <button   class="btn-mega-w btn-summer-out participar" data-dismiss="modal" onclick="location.href='https://www.gomassalin.com/desafio-sorpresagt';" formtarget="_blank">PARTICIPAR</button>

            </div>
            <div class="modal-footer">
              <button class="btn-mega-out btn-summer-out" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </form>
      </div>
    </div>
<script type="text/javascript">
  $(window).on('load',function(){
       $('#ds-gt').modal('show');
  });
</script>


<? } } ?>


<? if($_SESSION['miembro_tipo'] == "gt" && $_SESSION['miembro_promocode'] == ""){?>
    <!-- Modal CODIGO  -->
    <div class="modal fade modal-center" id="codigo-fb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-summer blue">
                <div class="modal-body" style="width: 100%">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>&iexcl;Ingres&aacute; tu código <br><span>y sum&aacute; 140 chances!</span></h2>
                            <p>Si no lo recibiste llam&aacute; al call center <a href="tel:0800-888-6275"><i class="fa fa-phone" aria-hidden="true"></i> 0800-888-6275</a> y pedilo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="logeo" style="padding: 20px 0px">
                                <form class="contact_form form_register" method="post" name="formpromo" id="formpromo">
                                    <div class="form-group">
                                        <label for="">Código promocional</label>
                                        <input class="form-control" name="promocode" id="promocode" placeholder="Ingresá tu código promocional" type="text">
                                    </div>
									  <div class="modal-footer">
										<button type="submit" onClick="document.forms['formpromo'].submit();" form="form1" value="Submit" class="btn-mega-w btn-summer-out">Enviar</button>

									  </div>
									
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn-mega-out btn-summer-out" data-dismiss="modal">Continuar</button>
                </div>
            </div>
        </div>
    </div>
	<script>
        $(window).on('load', function() {
            $('#codigo-fb').modal('show');
        });
	</script>
<? } ?>

<? if($recien_ingresa_gt_promo == 1){?>
<div class="modal fade modal-center modal-summer" id="ds-gt-end" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-mega" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="img/logo.png" alt="">
          <h2 class="blue-dark">&iexcl;GRACIAS POR PARTICIPAR! </h2>

        </div>
        <div class="modal-footer">
          <button class="btn-mega-out btn-summer-out" data-dismiss="modal">Continuar</button>
        </div>
      </div>
    </div>
  </div>
	<script>
        $(window).on('load', function() {
            $('#ds-gt-end').modal('show');
        });
	</script>
<? } ?>




<?
		$habilitado = 0;
		$query = "select * from posis_varios where tipo = 'modal_wapp' and (posis = '" . $_SESSION['miembro_posis'] . "' or posis = '0000" . $_SESSION['miembro_posis'] . "')";
		$sql=mysqli_query($connection,$query);
		while($rg=mysqli_fetch_object($sql)){
			$habilitado = 1;
		}
	if($habilitado == 1 && $_SESSION['miembro_celular'] == ""){?>

    <!-- Whatsapp -->
     <div class="modal fade modal-center" id="whatsapp" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-mega" role="document">
         <div class="modal-content whatsapp">
           <div class="modal-body ">
             <div class="head">
               <div class="grilla-wa">
                 <h5>Form&aacute; parte de nuestra lista de difusi&oacute;n en whatsapp y enterate de las novedades de GoMassalin antes que nadie.</h5>
                 <div class="button-wa">
                  <a target="_blank" href="https://wa.me/5491132833571?text=Participá"> <img src="img/addcontact.svg" alt=""><h4> 11 3283 3571</h4> <h5>Agendar contacto</h5></a>
                  <h6>Agendanos y envi&aacute; un mensaje con la palabra "particip&aacute;" para formar parte de la lista de difusi&oacute;n</h6>
                </div>

              </div>
             </div>
             <div class="body">
               <div class="grilla-wa">
                 <form action="" method="post">

                 <h5>Registr&aacute; tu n&uacute;mero y agend&aacute; a GoMassalin como contacto en tu celular</h5>
                 <div class="input">
                   <input type="text" name="celular" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Ingres&aacute; tu celular</label>

                 </div>
                 <h5>&iexcl;Ya no tenes m&aacute;s excusas para sumar chances y ganar premios incre&iacute;bles!</h5>
                 <img src="img/icons-modalwhatsapp.png" alt="">

               </div>
               <div class="modal-footer">
                 <button type="submit" class="btn-mega-out">Agregar</button>
                 <button class="btn-mega-out" data-dismiss="modal">Cerrar</button>

               </div>
               </form>

             </div>
           </div>

         </div>
       </div>
     </div>
<script type="text/javascript">
  $(window).on('load',function(){
       $('#whatsapp').modal('show');
  });
</script>

	<? } ?>




<? if($_SESSION['miembro_tipo'] == "ka" && $_SESSION['miembro_carga_staff'] == 1){?>
    <!-- DESAFIO SORPRESA GT -->
    <div class="modal fade modal-center" id="call-staff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog " role="document">
         <form  action="index.html" method="post">
          <div class="modal-content modal-summer violet">
            <div class="modal-body" style="width:100%;text-align:center;">

              <h2 class="txt-white">&iquest;Quer&eacute;s registrar a tu staff?</h2>

              <button  class="btn-mega-w btn-summer-out participar" data-dismiss="modal" data-toggle="modal" data-target="#steps-staff" >ENTERATE COMO <i class="fa fa-chevron-right" aria-hidden="true"></i></button>

            </div>
            <div class="modal-footer">
              <button class="btn-mega-out btn-summer-out" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- REGISTRO STAFF -->
    <form class="modal multi-step" id="steps-staff">
        <div class="modal-dialog">
            <div class="modal-content modal-summer steps ">
                <div class="modal-header violet">
                    <h4 class="modal-title step-1" data-step="1">Como registar a tu Staff</h4>
                    <h4 class="modal-title step-2" data-step="2">Como registar a tu Staff</h4>
                    <h4 class="modal-title step-3" data-step="3">Como registar a tu Staff</h4>
                    <h4 class="modal-title step-4" data-step="4">Como registar a tu Staff</h4>
                    <h4 class="modal-title step-5" data-step="5">Como registar a tu Staff</h4>
                    <h4 class="modal-title step-6" data-step="6">Como registar a tu Staff </h4>
                    <h4 class="modal-title step-7" data-step="7">Como registar a tu Staff</h4>
                    <div class="m-progress">
                        <div class="m-progress-bar-wrapper">
                            <div class="m-progress-bar">
                            </div>
                        </div>
                        <div class="m-progress-stats">
                            <span class="m-progress-current">
                            </span>
                            /
                            <span class="m-progress-total">
                            </span>
                        </div>
                        <div class="m-progress-complete">
                            Completed
                        </div>
                    </div>
                </div>
                <div class="modal-body step-1" data-step="1">
                    <h5>Ingresá a https://www.gomassalin.com/</h5>
                </div>
                <div class="modal-body step-2" data-step="2">
                  <img src="img/02staff.jpg" alt="">
                    <h5>Entrá a tu perfil.</h5>
                </div>
                <div class="modal-body step-3" data-step="3">
                  <img src="img/03staff.jpg" alt="">
                    <h5>Seleccioná la pestaña "Mi equipo".</h5>
                </div>
                <div class="modal-body step-4" data-step="4">
                  <img src="img/04staff.jpg" alt="">
                    <h5>En la pestaña vas a encontrar cada uno de tus puntos de ventas. Clickeá en +Agregar para sumar un nuevo miembro en cada PDV</h5>
                </div>
                <div class="modal-body step-5" data-step="5">
                  <img src="img/05staff.jpg" alt="">
                  <h5>Ingresá el nombre, apellido, DNI, teléfono y mail de cada miembro de tu staff.</h5>
                </div>
                <div class="modal-body step-6" data-step="6">
                    <h5>Una vez ingresados estos datos automáticamente le va a llegar un mail al miembro registrado con su usuario y contraseña genérica.</h5>
                </div>
                <div class="modal-body step-7" data-step="7">
                    <h5>El nuevo usuario deberá cambiar la contraseña una vez que acceda al sitio y ya podrá disfrutar de la experiencia Go Massalin.</h5>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-mega-out btn-summer-close" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn-mega-out btn-summer-out step step-2" data-step="2" onclick="sendEvent('#steps-staff', 1)">ATRÁS</button>
                    <button type="button" class="btn-summer step step-1" data-step="1" onclick="sendEvent('#steps-staff', 2)">SIGUIENTE</button>

                    <button type="button" class="btn-mega-out btn-summer-out step step-3" data-step="3" onclick="sendEvent('#steps-staff', 2)">ATRÁS</button>
                    <button type="button" class="btn-summer step step-2" data-step="2" onclick="sendEvent('#steps-staff', 3)">SIGUIENTE</button>

                    <button type="button" class="btn-mega-out btn-summer-out step step-4" data-step="4" onclick="sendEvent('#steps-staff', 3)">ATRÁS</button>
                    <button type="button" class="btn-summer step step-3" data-step="3" onclick="sendEvent('#steps-staff', 4)">SIGUIENTE</button>

                    <button type="button" class="btn-mega-out btn-summer-out step step-5" data-step="5" onclick="sendEvent('#steps-staff', 4)">ATRÁS</button>
                    <button type="button" class="btn-summer step step-4" data-step="4" onclick="sendEvent('#steps-staff', 5)">SIGUIENTE</button>

                    <button type="button" class="btn-mega-out btn-summer-out step step-6" data-step="6" onclick="sendEvent('#steps-staff', 5)">ATRÁS</button>
                    <button type="button" class="btn-summer step step-5" data-step="5" onclick="sendEvent('#steps-staff', 6)">SIGUIENTE</button>

                    <button type="button" class="btn-mega-out btn-summer-out step step-7" data-step="7" onclick="sendEvent('#steps-staff', 6)">ATRÁS</button>
                    <button type="button" class="btn-summer step step-6" data-step="6" onclick="sendEvent('#steps-staff', 7)">SIGUIENTE</button>
                </div>
            </div>
        </div>
    </form>
<script type="text/javascript" src="js/events.js"></script>    
<script type="text/javascript">
  sendEvent = function(sel, step) {
       $(sel).trigger('next.m.' + step);
  };
  $(window).on('load',function(){
       $('#call-staff').modal('show');
  });
</script>

<? } ?>
