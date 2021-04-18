<!--Esta es la vista-->
<!--Se indica que la plantilla extiende de la carpeta layout la plantilla web-->
@extends('layouts.app')
<!--Agrega navbar-->
<div class="text-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('product') }}">INICIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>

@section('title')
AGREGAR PRODUCTO
@endsection

@section('formulario')
<form action="{{ url('/product') }}" method="post">

    @csrf
 
    @include('product.form')

</form>
@endsection
