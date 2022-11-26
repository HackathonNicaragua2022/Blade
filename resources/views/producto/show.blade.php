@extends('layouts.app')

@section('title')
    {{ $producto->name ?? 'Detalles Producto' }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Detalles Producto</h3>
        </div>
        <div class="section-body">
           <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left mx-3">
                                    <a class="btn btn-primary" href="{{ route('productos.index') }}">Atrás</a>
                                </div>
                            </div>

                            <div class="card-body">
                                
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $producto->foto }}
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection