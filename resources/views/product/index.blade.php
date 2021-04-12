@extends('layouts.app')
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
  </head>
  <body>

    <div class="text-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark align-items-center">
            <a class="navbar-brand text-center" href="{{ url('product') }}">INICIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-center" href="{{ url('product/create') }}">Agregar producto</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <main role="main">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img class="bd-placeholder-img card-img-top fluid" src="{{asset('images/baner.png')}}" width="100%" height="100%" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"></img>
            </div>
        </div>
        <section class="jumbotron text-center">
            <div class="container">
                <h1>LISTADO DE PRODUCTOS</h1>
                <br>
                <h3><a href="{{ url('product/create') }}">Agregar producto</a></h3>
            </div>
        </section>

        <div class="container card-group">
                <div class="row">
                    @foreach( $products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top fluid" src="{{asset('images/new.png')}}" width="100%" height="100%" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                            <div class="card-body">
                                <p class="card-text"><b>Nombre:</b> {{ $product->name}} </p>
                                <p class="card-text"><b>Descripcion:</b> {{ $product->description}} </p>
                                <p class="card-text"><b>Precio:</b> ${{ $product->price}} </p>
                                <p class="card-text"><b>Edad recomendada:</b> {{ $product->age}} </p>
                                <p class="card-text"><b>Numero de modelo:</b> {{ $product->modelNumber}} </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <td>
                                                <a href="{{ url('/product/'.$product->id.'/edit') }}">Editar</a>
                                            </td>
                                        </button>
                                            <!--Eliminar-->
                                            <form method='POST' action="{{ url('/product/'.$product->id) }}">
                                                @csrf
                                                {{ method_field('DELETE') }} <!--define el metodo que es necesario para eliminar-->
                                                <td>
                                                    <input  type="submit" onclick="return confirm('Desea eliminar el registro?')" value="Eliminar">
                                                </td>
                                            </form>
                                    </div>
                                    <small class="text-muted"><p class="card-text">{{ $product->id}} </p></small>
                                </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
    </main>
  </body>
</html>