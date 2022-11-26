@extends('layouts.app')

@section('title')
    {{ $negocio->name ?? 'Detalles Negocio' }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Detalles Negocio</h3>
        </div>
        <div class="section-body">
           <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left mx-3">
                                    <a class="btn btn-primary" href="{{ route('negocios.index') }}">Atrás</a>
                                </div>
                            </div>

                            <div class="card-body">
                                
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $negocio->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $negocio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $negocio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $negocio->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $negocio->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $negocio->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $negocio->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Raiting:</strong>
                            {{ $negocio->raiting }}
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection