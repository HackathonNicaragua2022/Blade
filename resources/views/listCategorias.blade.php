@extends('plantilla')
@section('title', 'Multi Emprende')
@section('content')

<!--INICIO DE CONTENIDO PRINCIPAL-->

    <div class="container" id="encab">
        <div class="row">
         <img src="img/inicio/multi_emprende_nicaragua.jpg" alt="No se pudo cargar la imagen">
        </div>
      </div>

  <section id="Listado">
     <div class="container">
        <!-- INICIO DE GATEGORIAS -->
        <h1 class="text-center titulo mt-2">GASTRONOMÍA</h1>
        <p class="text-center mb-4">Te presentamos nuestra colección de emprendimientos en base a la categoría que has seleccionado:</p>

        <div class="card mb-12 b5">
            <div class="row g-0">
                <div class="card-image col-md-3">
                    <img class="img-fluid" src="img/negocios/1.jpg" alt="No se pudo cargar la imagen">
                </div>
            
            <div class="col-md-7">
                <div class="card-body">
                        <h3 class="card-title">
                            Restaurante La Cabaña
                        </h3>
                    <div class="text-muted">
                        <a href="#"><i class="bi bi-geo-alt-fill"></i>
                        </a> De la catedral, dos cuadras al norte, León
                    </div>
        
                    <p class="card-text">
                      Es un restaurante de comida tradicional y a la carta ubicado en la ciudad de Estelí.
                    </p>
                    <div class="card-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="/detallesdelnegocio"><span class="bi bi-eye-fill px-1"></span>Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 d-md-none d-xl-block py-3 text-center">
                
                <div class="etiquet-price">
                    <p>León</p>
                    <div></div>
            </div>
            </div>
        </div>
      
      </div>
  <!-- FINAL DE GATEGORIAS -->

    <div class="card mb-12 b5 mt-2">
      <div class="row g-0">
          <div class="card-image col-md-3">
              <img class="img-fluid"  src="img/negocios/2.jpg" alt="No se pudo cargar la imagen">
          </div>
      
      <div class="col-md-7">
          <div class="card-body">
                  <h3 class="card-title">
                      Restaurante Bendición de Dios
                  </h3>
              <div class="text-muted">
                  <a href="#"><i class="bi bi-geo-alt-fill"></i>
                  </a> Del hospital primario, 4 cuadras al este, Rivas
              </div>
  
              <p class="card-text">
                La mejor opción de comida tradicional en Rivas.
              </p>
              <div class="card-icons">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-whatsapp"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="/detallesdelnegocio"><span class="bi bi-eye-fill px-1"></span>Detalles</a>
              </div>
          </div>
      </div>
      <div class="col-md-2 d-md-none d-xl-block py-3 text-center">

          <div class="etiquet-price">
              <p>Rivas</p>
              <div></div>
      </div>
      </div>
  </div>

</div>

<div class="card mb-12 b5 mt-2">
    <div class="row g-0">
        <div class="card-image col-md-3">
            <img class="img-fluid"  src="img/negocios/3.jpg" alt="">
        </div>
    
    <div class="col-md-7">
        <div class="card-body">
                <h3 class="card-title">
                    Restaurante Zeus
                </h3>
            <div class="text-muted">
                <a href="#"><i class="bi bi-geo-alt-fill"></i>
                </a> De ENABAS, 3 cuadras al oeste, Jinotega
            </div>

            <p class="card-text">
              El restaurante por excelencia de la ciudad de las brumas.
            </p>
            <div class="card-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="/detallesdelnegocio"><span class="bi bi-eye-fill px-1"></span>Detalles</a>
            </div>
        </div>
    </div>
    <div class="col-md-2 d-md-none d-xl-block py-3 text-center">
        
        <div class="etiquet-price">
            <p>Jinotega</p>
            <div></div>
    </div>
    </div>
</div>

</div>
<div class="card mb-12 b5 mt-2">
<div class="row g-0">
    <div class="card-image col-md-3">
        <img class="img-fluid"  src="img/negocios/4.jpg" alt="">
    </div>

<div class="col-md-7">
    <div class="card-body">
            <h3 class="card-title">
                Restaurante Sunset
            </h3>
        <div class="text-muted">
            <a href="#"><i class="bi bi-geo-alt-fill"></i>
            </a> Del parque central, tres cuadras al norte, Chontales
        </div>

        <p class="card-text">
          Es un restaurante especialista en comida peruana y mexicana.
        </p>
        <div class="card-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="/detallesdelnegocio"><span class="bi bi-eye-fill px-1"></span>Detalles</a>
        </div>
    </div>
</div>
<div class="col-md-2 d-md-none d-xl-block py-3 text-center">
    
    <div class="etiquet-price">
        <p>Chontales</p>
        <div></div>
</div>
</div>
</div>

</div>

<!-- INICIO DE PAGINACIÓN -->
<nav aria-label="">
    <ul class="pagination d-flex justify-content-center mt-5">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>
</nav>
</div>
<!-- FINAL DE PAGINACIÓN -->
</section>

<!--FIN CONTENIDO PRINCIPAL-->

@endsection