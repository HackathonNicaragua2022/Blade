@extends('plantilla')
@section('title', 'Multi Emprende')
@section('content')

    <!--CONTENIDO PRINCIPAL-->

    <section id="encabezado" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/" alt="No se pudo cargar la imagen">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0">
                    <h2 class="title text-center">MULTI EMPRENDE</h2>
                    <p class="text-justified">Multi emprende es una plataforma de proyección de los emprendimientos en
                        Nicaragua que permite a las mentes creativas exponer sus productos o servicios en un espacio
                        compartido en la web y cuyo enfonque es cultivar la seguridad de la información que se comparte con
                        el público nicaragüense.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--INICIO DE TARJETAS NEGOCIOS-->
    <section id="negocios">
        <div class="uk-width-1-1 mt-5" id="negocios">
            <h2 class="title text-center">NEGOCIOS</h2>
            <p class="text-center">Selecciona una de las categorías a continuación y accede al listado de emprendimientos
                inscritos:</p>


            <div class="js-popular mt-2">
                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <!--inicio de la tarjeta-->
                            <div class="game-card">
                                <div class="game-card__box">
                                    <div class="game-card__media"><img src="img/Categorías/artesanías_nicaragua.jpg"
                                            alt="Solitary Crusade" /></div>
                                    <div class="game-card__info">
                                        <p class="game-card__title">Artesanías</p>
                                        <div class="game-card__genre">Madera, bambú, etc.</div>
                                    </div>
                                    <a class="btn btn-link" href="/lista-categorias">Ingresar</a>
                                </div>
                            </div>
                            <!--FIN DE LA TARJETA-->
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card">
                                <div class="game-card__box">
                                    <div class="game-card__media"><img src="img/Categorías/cuero_calzado_nicaragua.jpg"
                                            alt="Immortal Tombs" /></div>
                                    <div class="game-card__info">
                                        <p class="game-card__title"> Cuero / Calzado</p>
                                        <div class="game-card__genre">Zapatos, billeteras, etc.</div>
                                    </div>
                                    <a class="btn btn-link" href="/lista-categorias">Ingresar</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card">
                                <div class="game-card__box">
                                    <div class="game-card__media"><img src="img/Categorías/gastronomía_nicaragua.jpg"
                                            alt="Kill of Democracy" /></a></div>
                                    <div class="game-card__info">
                                        <p class="game-card__title">Gastronomía</p>
                                        <div class="game-card__genre">Comidas, bebidas...</div>
                                    </div>
                                    <a class="btn btn-link" href="/lista-categorias">Ingresar</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card">
                                <div class="game-card__box">
                                    <div class="game-card__media"><img src="img/Categorías/hoteles_nicaragua.jpg"
                                            alt="Kill of Democracy" /></div>
                                    <div class="game-card__info">
                                        <p class="game-card__title">Hotelería</p>
                                        <div class="game-card__genre">Hoteles, hostales, etc.</div>
                                    </div>
                                    <a class="btn btn-link" href="/lista-categorias">Ingresar</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card">
                                <div class="game-card__box">
                                    <div class="game-card__media"><img
                                            src="img/Categorías/ropa_textiles_vestuario_nicaragua.jpg"
                                            alt="Kill of Democracy" /></div>
                                    <div class="game-card__info">
                                        <p class="game-card__title">Textil / Vestuario</p>
                                        <div class="game-card__genre">Ropa, telas, etc.</div>
                                    </div>
                                    <a class="btn btn-link" href="/lista-categorias">Ingresar</a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="game-card">
                                <div class="game-card__box">
                                    <div class="game-card__media"><img src="img/Categorías/turismo_nicaragua..jpg"
                                            alt="Kill of Democracy" /></div>
                                    <div class="game-card__info">
                                        <p class="game-card__title">Turismo</p>
                                        <div class="game-card__genre">Canopy, tours, etc.</div>
                                    </div>
                                    <a class="btn btn-link" href="/lista-categorias">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PAGINACIÓN DEL SWIPER-->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!--TERMINA PAGINACIÓN DEL SWIPER-->
            </div>
        </div>
    </section>
    <!--FIN DE TARJETAS NEGOCIOS-->

    <!-- INICIO DE SERVICIOS -->
    <section id="servicios">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="text-center my-5">
                    <h2>Servicios</h2>
                    <p>El Sisteme de Control Universitario (SCRUNIV) está comprometido en brindar la mejor experiencia
                        al personal docente faciltando la manera en que se realiza el registro y seguimiento del
                        estudiantado.
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="card card-servicios rounded mt-4">
                      <img class="img-servicios" src="img/Servicios/Recursos_Asesoramiento.png" alt="No se pudo cargar cargar la imagen">
                        <div class="card-body">
                          <h4 class="card-tittle text-light">Asesoramiento</h4>
                        <p class="card-text">Multi Emprende establece un canal de conexión con los emprendedores para garantizar el óptimo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                  <div class="card card-servicios rounded mt-4">
                    <img class="img-servicios" src="img/Servicios/Recursos_Asesoramiento.png" alt="No se pudo cargar cargar la imagen">
                      <div class="card-body">
                        <h4 class="card-tittle text-light">Control de Calidad</h4>
                      <p class="card-text">Monitoreamos el contenido que ingresa a nustra plataforma para verificar su utilidad.</p>
                      </div>
                  </div>
              </div>

              <div class="col-md-3">
                <div class="card card-servicios rounded mt-4">
                  <img class="img-servicios" src="img/Servicios/Recursos_Asesoramiento.png" alt="No se pudo cargar cargar la imagen">
                    <div class="card-body">
                      <h4 class="card-tittle text-light">Seguimiento</h4>
                    <p class="card-text">Posterior a tu inscripción seguirás reciiendo atención personalizada.</p>
                    </div>
                </div>
            </div>
            </div>
    </section>
    <!-- FIN SERVICIO -->

    {{-- INICIO DE PLANES --}}
    <section class="planes-precio my-5 bg-light py-4">
        <div class="container">
            <h2 class="text-center">Nuestros Planes</h2>
            <p class="text-center">Multi Emprende ofrece planes de suscripción que se adapatan a tu bolsillo.</p>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <div class="card mt-4">
                        <p class="title">Gratuito</p>
                        <div class="pricecontainer">
                            <p class="precio">$0.00</p>
                            <p class="pricedescriptor">/mes</p>
                        </div>
                        <p class="includes">Este plan incluye:</p>
                        <ul class="benefitlist">
                            <li>Anuncios</li>
                            <li>Una foto por producto</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <p class="title">Standard</p>
                        <div class="pricecontainer">
                            <p class="precio">$8.00</p>
                            <p class="pricedescriptor">/month</p>
                        </div>
                        <p class="includes">This Plan Includes:</p>
                        <ul class="benefitlist">
                            <li>Awesome Benefits</li>
                            <li>10% Discount</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <p class="title">Premium</p>
                        <div class="pricecontainer">
                            <p class="precio">$12.00</p>
                            <p class="pricedescriptor">/month</p>
                        </div>
                        <p class="includes">This Plan Includes:</p>
                        <ul class="benefitlist">
                            <li>Libre de anuncios</li>
                            <li>Aparece en la sección destacados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FIN DE PLANES --}}

    <!--FIN CONTENIDO PRINCIPAL-->

@endsection
