@extends('layouts.app')

@section('title')
    Crear Cliente
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Cliente</h3>
        </div>

        <div class="section-body">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @includeif('partials.errors')

                        <div class="card card-default">
                    
                            <div class="card-body">
                                <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                                 @csrf

                                 @include('cliente.form')

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
@endsection