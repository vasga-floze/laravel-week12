<!--AQUI DEBE IR EL FORMULARIO MEDIANTE EL CUAL SE VA A CREAR Y EDITAR UN PRODUCTO-->

<div class="card">
    <div class="card-body">
            <label for="name">Nombre</label><br>
            <input type="text" name="name" id="name" class="form-control" value=" {{ isset($product->name)?$product->name:'' }} "><hr/>


            <label for="description">Descripcion</label><br>
            <input class="form-control" type="text" name="description" id="description" value=" {{ isset($product->description)?$product->description:'' }} "><hr/>


            <label for="price">Precio</label><br>
            <input type="text" name="price" id="price" class="form-control" value=" {{ isset($product->price)?$product->price:'' }} "><hr/>

            <label for="age">Edad recomendada</label><br>
            <input type="text" name="age" id="age" class="form-control" value=" {{ isset($product->age)?$product->age:'' }} "><hr/>

            <label for="modelNumber">Numero de modelo</label><br>
            <input type="text" name="modelNumber" id="modelNumber" class="form-control" value=" {{ isset($product->modelNumber)?$product->modelNumber:'' }} "><hr/>

            <button type="submit" class="btn btn-primary">Guardar</button><br>
            <a href="{{ url('product') }}">Regresar</a>
        </form>
    </div>
</div>