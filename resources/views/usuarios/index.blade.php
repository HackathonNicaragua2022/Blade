@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Registro de Usuarios</h3>
                            <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>

                            <div class="table-responsive mt-3">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th class="d-none" scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Rol</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($usuarios as $usuario)
                                        <tr class="">
                                            <td class="d-none"scope="row">{{$usuario->id}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>
                                                @if (!empty($usuario->getRoleNames()))
                                                @foreach ($usuario->getRoleNames() as $rolName)
                                                            <h5><span class="badge dark">{{$rolName}}</span></h5>
                                                    
                                                @endforeach
                    
                                                @endif
                                                <td>
                                                    <a href="{{route ('usuarios.edit', $usuario->id)}}" class="btn btn-info">Editar</a>

                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $usuario->id], 'style' => 'display: inline']) !!}
                                                     {!! Form::submit('Eliminar', ['class'=> 'btn btn-danger'])!!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </td>
                                        </tr>  
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                <div class="pagination justify-content-end">
                                    {!! $usuarios->links()!!}
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection