<? if($includes != "si") exit(); ?>

<section id="screenshots" class="sec-screenshots bg-white">
    <div class="container">
      <h2 class="sec-title">Nuestro Portfolio</h2>
      <div class="hr"></div>
      <p class="subheader">Conocé todos nuestros productos</p>
      <a href="lista_de_precios.pdf" target="_blank" class="btn-mega"> Descargar Lista de Precios <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
      <!-- <div class="filter-btns">
        <a href="#" id="all" class="filter-btn active">TODOS</a>
        <a href="#" id="cat-1" class="filter-btn">MARLBORO</a>
        <a href="#" id="cat-2" class="filter-btn">PHILIP MORRIS</a>
        <a href="#" id="cat-3" class="filter-btn">CHESTERFIELD</a>
        <a href="#" id="cat-4" class="filter-btn">L&M</a>
      </div> -->
      <div class="row">
        <div id="owl-id" class="screenshots owl-carousel">
      		  <?/*
      			$query = "select * from contenidos where activo = 1 and tipo = 'porfolio' order by orden asc";
      			$sql=mysqli_query($connection,$query);
      			while($rg=mysqli_fetch_object($sql)){
      		  ?>
                <a href="imagenes/contenidos/<?=$rg->documento2?>" class="screenshot cat-<?=$rg->categoria?>"><img src="imagenes/contenidos/<?=$rg->documento1?>" alt="<?=$rg->titulo?>"></a>

      		  <? } */?>
      <!-- Marlboro -->
          <div class="screenshot cat-1">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/marlboro_original.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>MARLBORO RED BOX</td>
                          <td>$75,00</td>
                        </tr>
                        <tr>
                          <td>MARLBORO RED KS</td>
                          <td>$71,00</td>
                        </tr>
                        <tr>
                          <td>MARLBORO RED BOX 10</td>
                          <td>$38,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-1">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/marlboro_core.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>MARLBORO RED CF BOX (COMPACTO)</td>
                          <td>$69,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-1">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/marlboro_mega.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>NUEVO MARLBORO MEGA BOX 20</td>
                          <td>$75,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-1">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/marlboro_fusion_blast.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>MARLBORO FUSION BLAST BOX</td>
                          <td>$76,00</td>
                        </tr>
                        <tr>
                          <td>MARLBORO FUSION BLAST BOX 10</td>
                          <td>$40,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!--mega -->
          <div class="screenshot cat-1">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/marlboro_gold.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>MARLBORO GOLD ORIGINAL BOX</td>
                          <td>$75,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!--mega -->
          <div class="screenshot cat-1">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/marlboro_ice_blast.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>MARLBORO ICE BLAST BOX</td>
                          <td>$75,00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- End Marlboro -->

          <!-- Philip Morris -->
          <div class="screenshot cat-2">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/philip_morris_ks.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>PHILIP MORRIS KS</td>
                          <td>$68,00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-2">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/philip_morris_box.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>PHILIP MORRIS BOX</td>
                          <td>$71,00</td>
                        </tr>
                        <tr>
                          <td>PHILIP MORRIS BOX 10</td>
                          <td>$37,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-2">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/philip_morris_caps_ks.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>PHILIP MORRIS CAPS KS</td>
                          <td>$68,00</td>
                        </tr>


                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-2">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/philip_morris_caps_box.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>PHILIP MORRIS CAPS BOX</td>
                          <td>$71,00</td>
                        </tr>
                        <tr>
                          <td>PHILIP MORRIS CAPS BOX 10</td>
                          <td>$37,00</td>
                        </tr>


                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End Philip Morris -->

          <!-- Parliament -->
          <div class="screenshot cat-4">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/parliament.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>PARLIAMENT RCB</td>
                          <td>$80,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End Parliament -->

          <!-- CHESTERFIELD -->
          <div class="screenshot cat-3">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/chesterfield_fresh.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>CHESTERFIELD FRESH BOX 20</td>
                          <td>$64,00</td>
                        </tr>
                        <tr>
                          <td>CHESTERFIELD FRESH BOX 10</td>
                          <td>$33,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-3">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/chesterfield_original.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>CHESTERFIELD RED BOX</td>
                          <td>$64,00</td>
                        </tr>
                        <tr>
                          <td>CHESTERFIELD RED KS</td>
                          <td>$61,00</td>
                        </tr>
                        <tr>
                          <td>CHESTERFIELD RED BOX 15</td>
                          <td>$45,00</td>
                        </tr>
                        <tr>
                          <td>CHESTERFIELD RED BOX 10</td>
                          <td>$33,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- END CHESTERFIELD -->

          <!-- Benson -->
          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/benson_hedges.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>BENSON & HEDGES 100’s BOX</td>
                          <td>$80,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End Benson -->

          <!-- Virginia -->
          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/virginia.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>VIRGINIA S. SUPER SLIMS 100’s BOX</td>
                          <td>$80,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End Virginia -->

          <!-- L&M -->

          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/l&m_red_ks_soff.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>L&M RED KS</td>
                          <td>$56,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/l&m_blue_label.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>L&M BLUE KS</td>
                          <td>$56,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/l&m_blue_100s.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>L&M BLUE 100's</td>
                          <td>$59,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End L&M -->

          <!-- Particulares -->
          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/particulares.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>PARTICULARES KS</td>
                          <td>$61,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End Particulares -->

          <!-- Imparciales -->
          <div class="screenshot cat-5">
            <button data-text-swap="Ver Box" data-text-original="Ver Precios" class="flipButton action-button btn-mega">Ver Precios</button>
            <div class="flip-container" >
              <div class="flipper">
                <div class="front">
                  <img src="./img/packs/imparciales.png" alt="">
                </div>

                <div class="back">
                  <!-- <div class="back-logo "></div> -->
                  <div class="back-title">
                    <table class="table blue-dark">

                      <tbody>
                        <tr>
                          <td>IMPARCIALES 100'S</td>
                          <td>$61,00</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- End Imparciales -->


        </div>
      </div>
    </div>
  </section>


<? if($_SESSION['miembro_tipo'] == "fsf" || $_SESSION['miembro_tipo'] == "ka"){?>

<section id="team" class="sec-team bg-white">
    <div class="container">
      <h2 class="sec-title">COMBOS MARLBORO MEGA BLAST</h2>
      <div class="hr"></div>
      <p class="subheader">Llegaron los Nuevo Mega combos, ofrecelos a tus clientes y diferenciate del resto</p>
      <div class="row-desafios dark-controls" id="owl-combos">
        <div class="animate buck-combo">
          <div class="">
            <img class="img-responsive" src="img/combo-1.png" alt="team">
          </div>
          <div class="detalle blue-dark">
            <p>1 MARLBORO <STRONG>MEGA BLAST</STRONG> BOX 20 <br> + 1 CENICERO SOFT TOUCH</p>

          </div>
          <hr>
          <div class="ver">
            <span class="btn-mega">1 PACK + <strong>$150,00</strong></span>
          </div>
        </div>
        <div class="animate buck-combo">
          <div class="">
            <img class="img-responsive" src="img/combo-2.png" alt="team">
          </div>
          <div class="detalle blue-dark">
            <p>1 MARLBORO <STRONG>MEGA BLAST</STRONG> BOX 20 <br> + 1 USB TOUCH LIGHTER</p>

          </div>
          <hr>
          <div class="ver">
            <span class="btn-mega">1 PACK + <strong>$180,00</strong></span>
          </div>
        </div>
        <div class="animate buck-combo">
          <div class="">
            <img class="img-responsive" src="img/combo-3.png" alt="team">
          </div>
          <div class="detalle blue-dark">
            <p>1 MARLBORO <STRONG>MEGA BLAST</STRONG> BOX 20 <br> + 1 USB SOFT LIGHTER</p>

          </div>
          <hr>
          <div class="ver">
            <span class="btn-mega">1 PACK + <strong>$150,00</strong></span>
          </div>
        </div>


      </div>

    </div>
  </section>

<? } ?>
