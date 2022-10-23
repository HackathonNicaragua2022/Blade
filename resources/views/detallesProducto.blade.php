@extends('plantilla')
@section('title', 'Multi Emprende')
@section('content')

<!--INICIO DE CONTENIDO PRINCIPAL-->

<!--DETALLES DEL PRODUCTO-->
<ul class="uk-breadcrumb">
    <li><a href=""><span data-uk-icon="chevron-left"></span><span>Regresar</span></a></li>
</ul>
<div class="uk-grid uk-grid-small" data-uk-grid>
    <div class="uk-width-2-3@s">

        <div class="gallery rounded-3">
            <div class="js-gallery-big gallery-big">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="rounded-3"src="" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-width-1-3@s det">
        <div class="game-profile-card">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title"><i class="bi bi-exclude px-2"></i>Burritos</h3>
                        <p class="card-text">Burritos bañados en salsa BBQ acompañados de la bebida de su preferencia y aperitivos de cortesía.</p>
                    </div>
                    <div class="price">
                        <p>100</p>
                        <div></div>
                    </div>
                </div>
        </div>

        <div class="game-profile-card">
            <div class="game-profile-card__media"><img src="" alt="no se pudo cargar la imagen"></div>
            <div class="game-profile-card__intro"><span>Restaurante La Cabaña es un establecimiento ubicado en la ciudad de León que cuenta con una variada oferta gastronómica.</span></div>

            <div class="game-card__rating py-3">
                <svg class="bi" width="15" height="15"><use xlink:href="#estrellas"/></svg>
                <svg class="bi" width="15" height="15"><use xlink:href="#estrellas"/></svg>
                <svg class="bi" width="15" height="15"><use xlink:href="#estrellas"/></svg>
                <svg class="bi" width="15" height="15"><use xlink:href="#estrellas"/></svg>
                <svg class="bi" width="15" height="15"><use xlink:href="#estrellas"/></svg>
            </div>

          <div class="text-muted">
            <a href="#"><i class="bi bi-geo-alt-fill"></i>
            </a>De la catedral, dos cuadras al norte, León
        </div>
            <div class="social-media">
                <div class="d-flex justify-content-center mb-3">
                    <a href="#">
                        <svg class="bi" width="30" height="24"><use xlink:href="#facebook"/></svg>
                        <span class="tooltip-social">Facebook</span>
                    </a>
                    <a href="#">
                        <svg class="bi" width="30" height="24"><use xlink:href="#whatsapp"/></svg>
                        <span class="tooltip-social">Whatsapp</span>
                    </a>
                    <a href="#">
                        <svg class="bi" width="30" height="24"><use xlink:href="#instagram"/></svg>
                        <span class="tooltip-social">Instagram</span>
                    </a>
                    <a href="#">
                        <svg class="bi" width="30" height="24"><use xlink:href="#telefono"/></svg>
                        <span class="tooltip-social">Teléfono</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<hr class="mt-5">
<!--Productos-->
          </div>

<!--FIN CONTENIDO PRINCIPAL-->

@endsection