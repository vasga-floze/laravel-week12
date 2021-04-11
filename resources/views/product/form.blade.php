<!--AQUI DEBE IR EL FORMULARIO MEDIANTE EL CUAL SE VA A CREAR Y EDITAR UN PRODUCTO-->
@section('title')
FORMULARIO 
@endsection


<form action="{{ url('/product') }}" method="post">
@csrf 

<label for="name">Nombre</label>
<input type="text" name="name" id="name" value=" {{ isset($product->name)?$product->name:'' }} "><hr/>

<label for="description">Descripcion</label>
<input type="text" name="description" id="description" value=" {{ isset($product->description)?$product->description:'' }} "><hr/>

<label for="price">Precio</label>
<input type="text" name="price" id="price" value=" {{ isset($product->price)?$product->price:'' }} "><hr/>

<label for="age">Edad recomendada</label>
<input type="text" name="age" id="age" value=" {{ isset($product->age)?$product->age:'' }} "><hr/>

<label for="modelNumber">Numero de modelo</label>
<input type="text" name="modelNumber" id="modelNumber" value=" {{ isset($product->modelNumber)?$product->modelNumber:'' }} "><hr/>

<button type="submit">Guardar</button>

<a href="{{ url('product') }}">Regresar</a>
</form>