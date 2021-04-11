<!--AQUI DEBE IR EL FORMULARIO MEDIANTE EL CUAL SE VA A CREAR Y EDITAR UN PRODUCTO-->
@section('title')
FORMULARIO 
@endsection


<form action="{{ url('/product') }}" method="post">
@csrf 

<label for="name">Nombre</label>
<input type="text" name="name" id="name"><hr/>

<label for="description">Descripcion</label>
<input type="text" name="description" id="description"><hr/>

<label for="price">Precio</label>
<input type="text" name="price" id="price"><hr/>

<label for="age">Edad recomendada</label>
<input type="text" name="age" id="age"><hr/>

<label for="modelNumber">Numero de modelo</label>
<input type="text" name="modelNumber" id="modelNumber"><hr/>

<button type="submit">Guardar</button>
</form>