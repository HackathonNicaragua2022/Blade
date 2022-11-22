@extends('plantilla')
@section('title', 'Multi Emprende')
@section('content')

<!--CONTENIDO PRINCIPAL-->

<section id="encabezado" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid" src="img/foto.png" alt="No se pudo cargar la imagen">
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0">
      <h2 class="title text-center">MULTI EMPRENDE</h2>
      <p class="text-justified">Multi emprende es una plataforma de proyección de los emprendimientos en Nicaragua que permite a las mentes creativas exponer sus productos o servicios en un espacio compartido en la web y cuyo enfonque es cultivar la seguridad de la información que se comparte con el público nicaragüense.
      </p>
    </div>
  </div>
</div>
</section>

<!--INICIO DE TARJETAS-->

  <div class="uk-width-1-1 mt-5" id="negocios">
    <h2 class="title text-center">NEGOCIOS</h2>
    <p class="text-center">Selecciona una de las categorías a continuación y accede al listado de emprendimientos inscritos:</p>


    <div class="js-popular mt-2">
      <div class="swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            
            <!--inicio de la tarjeta-->
            <div class="game-card">
              <div class="game-card__box">
                <div class="game-card__media"><img src="img/Categorías/artesanías_nicaragua.jpg" alt="Solitary Crusade" /></div>
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
                <div class="game-card__media"><img src="img/Categorías/cuero_calzado_nicaragua.jpg" alt="Immortal Tombs" /></div>
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
                <div class="game-card__media"><img src="img/Categorías/gastronomía_nicaragua.jpg" alt="Kill of Democracy" /></a></div>
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
                <div class="game-card__media"><img src="img/Categorías/hoteles_nicaragua.jpg" alt="Kill of Democracy" /></div>
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
                <div class="game-card__media"><img src="img/Categorías/ropa_textiles_vestuario_nicaragua.jpg" alt="Kill of Democracy" /></div>
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
                <div class="game-card__media"><img src="img/Categorías/turismo_nicaragua..jpg" alt="Kill of Democracy" /></div>
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
<!--FIN DE TARJETAS-->

<!-- INICIO DE SERVICIOS -->
  <section id="servicios">
      <div class="container">

        <div class="text-center my-5">
          <h2 class="title">SERVICIOS</h2>
          <p>El Sisteme de Control Universitario (SCRUNIV) está comprometido en brindar la mejor experiencia
              al personal docente faciltando la manera en que se realiza el registro y seguimiento del estudiantado.

          </p>
        </div>

        <div class="row">
          <div class="card bg-light rounded-4 py-3 col-xl-3 col-md-4">
            <div class="icon-box">
              <div class="icon p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                  <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
                  </svg>
              </div>
              <h4><a href="#">Asesormiento</a></h4>
              <p>Realiza inscripciones desde donde estés.</p>
            </div>
          </div>
            
          <div class="card bg-light rounded-4 px-3 py-3 col-xl-3 col-md-4">
            <div class="icon-box">
              <div class="icon p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dpad-fill" viewBox="0 0 16 16">
                  <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v3a.5.5 0 0 1-.5.5h-3A1.5 1.5 0 0 0 0 6.5v3A1.5 1.5 0 0 0 1.5 11h3a.5.5 0 0 1 .5.5v3A1.5 1.5 0 0 0 6.5 16h3a1.5 1.5 0 0 0 1.5-1.5v-3a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 0 16 9.5v-3A1.5 1.5 0 0 0 14.5 5h-3a.5.5 0 0 1-.5-.5v-3A1.5 1.5 0 0 0 9.5 0h-3Zm1.288 2.34a.25.25 0 0 1 .424 0l.799 1.278A.25.25 0 0 1 8.799 4H7.201a.25.25 0 0 1-.212-.382l.799-1.279Zm0 11.32-.799-1.277A.25.25 0 0 1 7.201 12H8.8a.25.25 0 0 1 .212.383l-.799 1.278a.25.25 0 0 1-.424 0Zm-4.17-4.65-1.279-.798a.25.25 0 0 1 0-.424l1.279-.799A.25.25 0 0 1 4 7.201V8.8a.25.25 0 0 1-.382.212Zm10.043-.798-1.278.799A.25.25 0 0 1 12 8.799V7.2a.25.25 0 0 1 .383-.212l1.278.799a.25.25 0 0 1 0 .424Z"/>
                  </svg>
              </div>
              <h4><a href="#">Control de Calidad</a></h4>
              <p>Establece un control de tus registros.</p>
            </div>
          </div>
            
          <div class="card bg-light rounded-4 px-3 py-3 col-xl-3 col-md-4">
            <div class="icon-box">
              <div class="icon p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                  <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
                  </svg>
              </div>
              <h4><a href="#">Seguimiento</a></h4>
              <p>Monitorea la información ingresada.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
<!-- FIN SERVICIO -->

<!--FIN CONTENIDO PRINCIPAL-->

@endsection