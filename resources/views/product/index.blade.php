@extends('layouts.app')

@section('title')
LISTADO DE PRODUCTOS <br>
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
            <th>Editar</th>
            <th>Eliminar</th>
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

                <td><a href="{{ url('/product/'.$product->id.'/edit') }}">Editar</a></td>
                <!--Eliminar-->
                <form method='POST' action="{{ url('/product/'.$product->id) }}">
                    @csrf
                    {{ method_field('DELETE') }} <!--define el metodo que es necesario para eliminar-->
                    <td>
                        <input type="submit" onclick="return confirm('Desea eliminar el registro?')" value="Eliminar">
                    </td>
                </form>
            </tr>
        @endforeach
        </tbody>
</table>

