@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Registro de Roles</h3>

                            @can('crear-rol')
                                <a href="{{route('roles.create')}}" class="btn btn-warning">Nuevo</a>
                            @endcan

                            <div class="table-responsive mt-3">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rol</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($roles as $role)
                                        <tr>
                                            <td scope="row">{{$role->name}}</td>
                                            <td>
                                               @can('editar-rol')
                                                   <a href="{{route('roles.edit', $role->id)}}" class="btn btn-primary">Editar</a>
                                               @endcan

                                                @can('borrar-rol')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display: inline']) !!}
                                                        {!! Form::submit('Eliminar', ['class'=> 'btn btn-danger'])!!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>  
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                <div class="pagination justify-content-end">
                                    {!! $roles->links()!!}
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection