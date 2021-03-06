@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{Session::get('Mensaje')}}
        </div>

    @endif
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Productos</div>
                    <div class="card-body">
                        <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="nuevo producto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Registrar un nuevo producto
                        </a>

                        <form method="GET" action="{{ url('/products') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Nombre, detalle o precio..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Detalle</th><th>Precio</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->detalle }}</td><td>{{ $item->precio }}</td>
                                        <td>
                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="editarprod"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-warning btn-sm" title="borrarproducto" onclick="return confirm(&quot;Desea borrar el producto?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection