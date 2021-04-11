@extends('layouts.app')

@section('title')
LISTADO DE PRODUCTOS <br>
<a href="{{ url('/product/edit') }}">Editar</a><br>
<a href="{{ url('product/create') }}">Agregar</a>
@endsection


<table class="table">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Edad recomendada</th>
        <th>Numero de modelo</th>
    </thead>
    <tbody>
    @foreach( $products as $product)
        <tr>
            <td> {{ $product->id}} </td>
            <td> {{ $product->name}} </td>
            <td> {{ $product->description}} </td>
            <td> {{ $product->price}} </td>
            <td> {{ $product->age}} </td>
            <td> {{ $product->modelNumber}} </td>
        </tr>
    @endforeach
    </tbody>
</table>

