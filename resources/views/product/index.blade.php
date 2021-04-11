@extends('layouts.app')

@section('title')
LISTADO DE PRODUCTOS <br>
<a href="{{ url('/product/edit') }}">Editar</a><br>
<a href="{{ url('product/create') }}">Agregar</a>
@endsection

@include('product.form')

