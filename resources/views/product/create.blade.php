<!--Esta es la vista-->
<!--Se indica que la plantilla extiende de la carpeta layout la plantilla web-->
@extends('layouts.app')

@section('title')
AGREGAR PRODUCTO
@endsection


<form action="{{ url('/product') }}" method="post">

    @csrf
    {{ method_field('PUT') }}
    @include('product.form')

</form>