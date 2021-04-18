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


<!--Se crean las tarjetas para mostrar el avatar y informacion de los estudiantes-->
<div class="container card-group" style="width: 50rem;">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('images/avatarKilmar.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estudiante</h5>
          <p class="card-text">Roberto Kilmar Chevez Reyes</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/avatarVasti.png')}}"" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estudiante</h5>
          <p class="card-text">Vasti Gabriela Flores Zelaya</p>
        </div>
      </div>
</div>

