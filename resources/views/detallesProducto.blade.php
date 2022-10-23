@extends('plantilla')
@section('title', 'Detalles del Producto')

@section('laterales')
    <div class="uk-width-2-3@s">

        <div class="gallery rounded-3">
            <div class="js-gallery-big gallery-big">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="rounded-3"src="img/Productos/C6.jpg" alt="image"></div>
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
            <div class="game-profile-card__media"><img src="img/06.jpg" alt="no se pudo cargar la imagen"></div>
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
@endsection

@section('content')

<hr class="mt-5">
                <div class="uk-width-1-1"> 
                    <h1 class="card-title text-center titulo">PRODUCTOS</h1>
                    <p class="text-center">Seleccione uno de los productos a continuación para acceder a todos sus detalles:</p>
                    <br>
    
                    <div class="js-popular">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img class="rounded-3" src="img/Productos/C1.jpg" alt="image"></div>
                                            <div class="game-card__info"><p class="game-card__title">Ensalada</p>
                                                <div class="game-card__genre">Ensalada de espina...</div>

                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button class="btn btn-danger">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 100</span></div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    </div>
                                </div>
  
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C2.jpg" alt="image"></div>
                                            <div class="game-card__info"><p class="game-card__title">Sandwich</p>
                                                <div class="game-card__genre">Sandwich vegetari...</div>

                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button class="btn btn-danger">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 80</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C3.jpg" alt="image"></div>
                                            <div class="game-card__info"><p class="game-card__title">Crepas</p>
                                                <div class="game-card__genre">Crepas de queso...</div>

                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button class="btn btn-danger">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 120</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C5.jpg" alt="image"></div>
                                            <div class="game-card__info"><p class="game-card__title">Masa Madre</p>
                                                <div class="game-card__genre">Comida vegana de...</div>

                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button class="btn btn-danger">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 150</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C6.jpg" alt="image"></div>
                                            <div class="game-card__info"><p class="game-card__title">Burritos</p>
                                                <div class="game-card__genre">Burritos en salsa BBQ</div>

                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button class="btn btn-danger">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 100</span></div>
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


<!--FIN CONTENIDO PRINCIPAL-->

@endsection 