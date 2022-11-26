@extends('layouts.app')

@section('title')
    Rede
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Redes</h3>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <div class="float-right mx-3">
                                        <a href="{{ route('redes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Crear Nuevo') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>
                                                
										<th>Nombre</th>
										<th>Url</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($redes as $rede)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
											<td>{{ $rede->nombre }}</td>
											<td>{{ $rede->url }}</td>

                                                    <td>
                                                        <form class="d-flex" action="{{ route('redes.destroy',$rede->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary mx-1" href="{{ route('redes.show',$rede->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                            <a class="btn btn-sm btn-success mx-1" href="{{ route('redes.edit',$rede->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm mx-1"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $redes->links() !!}
                    </div>
                </div>
            </div>              
        </div>
    </section>
@endsection



