@extends('plantilla')
@section('title', 'Detalles del Negocio')

@section('content')
    <!--INICIO DE CONTENIDO PRINCIPAL-->
    <section class="detalles mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="gallery rounded-3 mb-5">
                        <div class="js-gallery-big gallery-big">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C1.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C2.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C3.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C5.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C6.jpg"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-gallery-small gallery-small">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C1.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C2.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C3.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C5.jpg"
                                            alt="image">
                                    </div>
                                    <div class="swiper-slide"><img class="rounded-3" src="img/Productos/C6.jpg"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--INICIO DE INFORMACION DEL NEGOCIO-->
                <div class="col-lg-4">
                    <div class="game-profile-card">
                        <h3 class="text-center titulo">Restaurante La Cabaña</h3>
                        <div><img class="img-fluid rounded-3" src="img/06.jpg" alt="No se pudo cargar la imagen">
                        </div>
                        <div class="game-profile-card__intro"><span>Restaurante La Cabaña es un establecimiento
                                ubicado en la ciudad de León que cuenta con una variada oferta gastronómica.</span>
                        </div>
                        <div class="game-card__rating py-3">
                            <svg class="bi" width="15" height="15">
                                <use xlink:href="#estrellas" />
                            </svg>
                            <svg class="bi" width="15" height="15">
                                <use xlink:href="#estrellas" />
                            </svg>
                            <svg class="bi" width="15" height="15">
                                <use xlink:href="#estrellas" />
                            </svg>
                            <svg class="bi" width="15" height="15">
                                <use xlink:href="#estrellas" />
                            </svg>
                            <svg class="bi" width="15" height="15">
                                <use xlink:href="#estrellas" />
                            </svg>
                        </div>
                        <div class="text-muted">
                            <a href="#"><i class="bi bi-geo-alt-fill"></i>
                            </a>De la catedral, dos cuadras al norte, León
                        </div>
                        <div class="social-media">
                            <div class="d-flex justify-content-center mb-3">
                                <a href="#">
                                    <svg class="bi" width="30" height="24">
                                        <use xlink:href="#facebook" />
                                    </svg>
                                    <span class="tooltip-social">Facebook</span>
                                </a>
                                <a href="#">
                                    <svg class="bi" width="30" height="24">
                                        <use xlink:href="#whatsapp" />
                                    </svg>
                                    <span class="tooltip-social">Whatsapp</span>
                                </a>
                                <a href="#">
                                    <svg class="bi" width="30" height="24">
                                        <use xlink:href="#instagram" />
                                    </svg>
                                    <span class="tooltip-social">Instagram</span>
                                </a>
                                <a href="#">
                                    <svg class="bi" width="30" height="24">
                                        <use xlink:href="#telefono" />
                                    </svg>
                                    <span class="tooltip-social">Teléfono</span>
                                </a>
                            </div>
                        </div>
                        <!--FINAL DE INFORMACION DEL NEGOCIO-->
                        <!--INICIO DE VISTA DEL PRODUCTOS-->
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="cliente"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdgmce2CiEabpU1IvLbNHvgHFlhdHD_4q0yw&usqp=CAU"
                                    alt="Title" style="overflow: hidden;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Marcos Jirón</h5>
                                    <p class="card-text">Propietario</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="negocios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="card-title text-center titulo mt-5">PRODUCTOS</h1>
                    <p class="text-center">Seleccione uno de los productos a continuación para acceder a todos sus
                        detalles:</p>
                    <br>
                    <div class="js-popular">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img class="rounded-3"
                                                    src="img/Productos/C1.jpg" alt="image"></div>
                                            <div class="game-card__info">
                                                <p class="game-card__title">Ensalada</p>
                                                <div class="game-card__genre">Ensalada de espina...</div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button
                                                            class="btn btn-link">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 100</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C2.jpg" alt="image">
                                            </div>
                                            <div class="game-card__info">
                                                <p class="game-card__title">Sandwich</p>
                                                <div class="game-card__genre">Sandwich vegetari...</div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button
                                                            class="btn btn-link">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 80</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C3.jpg" alt="image">
                                            </div>
                                            <div class="game-card__info">
                                                <p class="game-card__title">Crepas</p>
                                                <div class="game-card__genre">Crepas de queso...</div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button
                                                            class="btn btn-link">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 120</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C5.jpg" alt="image">
                                            </div>
                                            <div class="game-card__info">
                                                <p class="game-card__title">Masa Madre</p>
                                                <div class="game-card__genre">Comida vegana de...</div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button
                                                            class="btn btn-link">Detalles</button></a>
                                                    <div class="game-card__price py-2"><span>C$ 150</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="game-card">
                                        <div class="game-card__box">
                                            <div class="game-card__media"><img src="img/Productos/C6.jpg" alt="image">
                                            </div>
                                            <div class="game-card__info">
                                                <p class="game-card__title">Burritos</p>
                                                <div class="game-card__genre">Burritos en salsa BBQ</div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detallesProducto.html"><button
                                                            class="btn btn-link">Detalles</button></a>
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
            </div>
        </div>
        <!--FINAL DE VISTA DEL PRODUCTOS-->
    </section>
    <section>
        <!--INICIA VISTA DEL MAPA-->
        <section>
            <div class="container mt-5">
                <iframe class="w-100 rounded-3 mx-3 mt-5"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3896.231176340479!2d-86.880855!3d12.434312!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38a4208de3a7182f!2sMoncho&#39;s%20Le%C3%B3n!5e0!3m2!1ses-419!2sni!4v1666499953605!5m2!1ses-419!2sni"
                    style="height:500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
        <!--FINAL DE VISTA DEL MAPA--
        </section>
        {{-- FIN CONTENIDO PRINCIPAL --}}

@endsection
