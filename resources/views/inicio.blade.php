@extends('plantilla')
@section('title', 'Multi Emprende')
@section('content')

<!--CONTENIDO PRINCIPAL-->

  <div class="container" id="encab">
    <div class="row">
     <img src="img/inicio/multi_emprende_nicaragua.jpg" alt="No se pudo cargar la imagen">     
    </div>
  </div>
  
<!--SOBRE NOSOTROS-->
  <section class="sobrenosotros" id="nosotros">
    <div class="container">
    <hr>
          <div class="card mb-12 b5 px-2 py-2">
            <div class="row g-0">
                <div class="card-image col-md-3">
                    <img class="img-fluid" src="img/Servicios/nosotros.png" alt="No se pudo cargar la imagen">
                </div>
            
            <div class="col-md-9">
                <div class="card-body">
                        <h3 class="card-title">
                            Sobre Nosotros
                        </h3
        
                    <p class="card-text">
                      Multi emprende es una plataforma de proyección de los emprendimientos en Nicaragua que permite a las mentes creativas exponer sus productos o servicios en un espacio compartido en la web y cuyo enfonque es cultivar la seguridad de la información que se comparte con el público nicaragüense.
                    </p>
                    <div class="card-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
      
      </div>
      <br>
    </div>
  </section>
<!--FIN SOBRE NOSOTROS-->

<!--TARJETAS-->
  <div class="uk-width-1-1"  id="negocios">     
    <h2 class="card-title text-center titulo negocios">NEGOCIOS</h2>
    <p class="text-center">Selecciona una de las categorías a continuación y accede al listado de emprendimientos inscritos:</p>
    <br>

      <div class="js-popular">
          <div class="swiper">
              <div class="swiper-wrapper">

                  <div class="swiper-slide">
                      <div class="game-card">
                          <div class="game-card__box">
                              <div class="game-card__media"><img src="img/Categorías/artesanías_nicaragua.jpg" alt="Solitary Crusade"/></div>
                              <div class="game-card__info"><p class="game-card__title"> Artesanías</p>
                                  <div class="game-card__genre">Madera, barro, bambú, etc.</div>
                                  <div class="game-card__rating-and-price">
                                    <div class="game-card__price"><a href="LisCategorías.html">Ingresar</a></div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide">
                      <div class="game-card">
                          <div class="game-card__box">
                              <div class="game-card__media"><img src="img/Categorías/cuero_calzado_nicaragua.jpg" alt="Immortal Tombs" /></div>
                              <div class="game-card__info"><p class="game-card__title"> Cuero / Calzado</p>
                                  <div class="game-card__genre">Zapatos, fajas, billeteras, etc.</div>
                                  <div class="game-card__rating-and-price">
                                    <div class="game-card__price"><a href="LisCategorías.html">Ingresar</a></div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide">
                      <div class="game-card">
                          <div class="game-card__box">
                              <div class="game-card__media"><img src="img/Categorías/gastronomía_nicaragua.jpg" alt="Kill of Democracy" /></a></div>
                              <div class="game-card__info"><p class="game-card__title">Gastronomía</p>
                                  <div class="game-card__genre">Comidas, bebidas...</div>
                                  <div class="game-card__rating-and-price">
                                      <div class="game-card__price"><a href="LisCategorías.html">Ingresar</a></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide">
                      <div class="game-card">
                          <div class="game-card__box">
                              <div class="game-card__media"><img src="img/Categorías/hoteles_nicaragua.jpg" alt="Kill of Democracy" /></div>
                              <div class="game-card__info"><p class="game-card__title">Hotelería</p>
                                  <div class="game-card__genre">Hoteles, hostales, etc.</div>
                                  <div class="game-card__rating-and-price">
                                    <div class="game-card__price"><a href="LisCategorías.html">Ingresar</a></div>
                                </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide">
                      <div class="game-card">
                          <div class="game-card__box">
                              <div class="game-card__media"><img src="img/Categorías/ropa_textiles_vestuario_nicaragua.jpg" alt="Kill of Democracy" /></div>
                              <div class="game-card__info"><p class="game-card__title">Textil / Vestuario</p>
                                  <div class="game-card__genre">Ropa, telas, etc.</div>
                                  <div class="game-card__rating-and-price">
                                    <div class="game-card__price"><a href="LisCategorías.html">Ingresar</a></div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  
                  <div class="swiper-slide">
                      <div class="game-card">
                          <div class="game-card__box">
                              <div class="game-card__media"><img src="img/Categorías/turismo_nicaragua..jpg" alt="Kill of Democracy" /></div>
                              <div class="game-card__info"><p class="game-card__title">Turismo</p>
                                  <div class="game-card__genre">Canopy, sanboarding, etc.</div>
                                  <div class="game-card__rating-and-price">
                                    <div class="game-card__price"><a href="LisCategorías.html">Ingresar</a></div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
          </div>
      </div>
  </div>
<!--FIN TARJETAS-->

<!-- SERVICIOS -->
         <section id="servicios">
            <div class="container">
            <br>
              <h2 class="titulo text-center">SERVICIOS</h2>
              <p class="text-center">Multi Emprende ofrece los siguientes servicios:</p>
              <hr>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="img/Servicios/aseso1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="game-card__price py-2"><i class="bi bi-1-square-fill px-2"></i>Asesoramiento</h5>
                      <p class="game-card__genre">Recibe toda la orientación necesaria previo a tu inscripción.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="img/Servicios/control.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="game-card__price py-2"><i class="bi bi-2-square-fill px-2"></i>Control de Calidad</h5>
                      <p class="game-card__genre">Monitoreamos el contenido que ingresa a nuestra plataforma para verificar su utilidad.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="img/Servicios/Seguimiento.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="game-card__price py-2"><i class="bi bi-3-square-fill px-2"></i>Seguimiento</h5>
                      <p class="game-card__genre">Posterior a tu inscripción seguirás recibiendo atención personalizada.</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </section>
<!-- FIN SERVICIO -->

<!--FIN CONTENIDO PRINCIPAL-->

@endsection 