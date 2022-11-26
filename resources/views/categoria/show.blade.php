@extends('layouts.app')

@section('title')
    {{ $categoria->name ?? 'Detalles Categoria' }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Detalles Categoria</h3>
        </div>
        <div class="section-body">
           <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left mx-3">
                                    <a class="btn btn-primary" href="{{ route('categorias.index') }}">Atrás</a>
                                </div>
                            </div>

                            <div class="card-body">
                                
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $categoria->descripción }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $categoria->foto }}
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection