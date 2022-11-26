@extends('plantilla')
@section('title', 'Detalles del Producto')

@section('content')
<!--INICIO DE DETALLE DE PRODUCTOS-->
<section>
    <div class="py-3 px-5 mb-5 mt-5"  style="background-color: #00438E">
        <h3 class="text-light">Detalles del Producto</h3>
        <p class="card-text"><small class="text-light">Negocio / Detalles del producto</small></p>
    </div>
</section>
<section class="detalles">
    <div class="container mt-5">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
                <img class="rounded" src="img/Productos/C2.jpg" alt="" class="img-fluid rounded mb-5">
            </div>
            <div class="col-lg-4">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><strong>Burritos</strong></h4>
                    <p class="card-text px-3">Burritos en salsa BBQ acompañados del
                        refresco de su preferencia con la opción de agrandar su orden por tan
                        solo C$40 adecionales al precio original.
                    </p>
                    <div class="price">
                        <p> 120</p>
                        <div></div>
                    </div>
                </div>
                </div>
                <div class="card mt-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/04.jpg" class="img-fluid rounded-start" alt="Card title">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Restaurante La Cabaña</h5>
                        <p class="card-text">Ponte en contacto con el negocio para obtener mayores detalles sobre este producto.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="productos">
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-5">PRODUCTOS</h2>
            <p class="text-center">Seleccione uno de los productos a continuación para acceder a todos sus
                detalles:</p>
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
                                    <div class="game-card__media"><img src="img/Productos/C2.jpg"
                                            alt="image"></div>
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
                                    <div class="game-card__media"><img src="img/Productos/C3.jpg"
                                            alt="image"></div>
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
                                    <div class="game-card__media"><img src="img/Productos/C5.jpg"
                                            alt="image"></div>
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
                                    <div class="game-card__media"><img src="img/Productos/C6.jpg"
                                            alt="image"></div>
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
</section>
<!--FINAL DE DETALLE DE PRODUCTOS-->

@endsection