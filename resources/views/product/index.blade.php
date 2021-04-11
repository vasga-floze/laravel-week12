@extends('layouts.app')
<div class="text-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('product') }}">INICIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('product/create') }}">Crear registro</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

@section('title')
    LISTADO DE PRODUCTOS
    <br>
    <a href="{{ url('product/create') }}">Agregar producto</a>
@endsection


@section('tabla')
    <table class="table table-hover">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Edad recomendada</th>
            <th scope="col">Numero de modelo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
        @foreach( $products as $product)
            <tr>
                <td scope="row"> {{ $product->id}} </td>
                <td> {{ $product->name}} </td>
                <td> {{ $product->description}} </td>
                <td> {{ $product->price}} </td>
                <td> {{ $product->age}} </td>
                <td> {{ $product->modelNumber}} </td>
                <!--Editar-->
                <td>
                    <a href="{{ url('/product/'.$product->id.'/edit') }}">Editar</a>
                </td>

                <!--Eliminar-->
                <form method='POST' action="{{ url('/product/'.$product->id) }}">
                    @csrf
                    {{ method_field('DELETE') }} <!--define el metodo que es necesario para eliminar-->
                    <td>
                        <input class="btn btn-primary" type="submit" onclick="return confirm('Desea eliminar el registro?')" value="Eliminar">
                    </td>
                </form>
            </tr>
        @endforeach
        </tbody>
</table>
@endsection

