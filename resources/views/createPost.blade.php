@extends('layouts.main')

@section('createPost')

    <div id="createPostDisplay">
        <div>
            <div>
                <h2>Crea una publicación.</h2>
            <p>Poné un articulo mas a la venta en tu tienda</p>

            <form method="POST" action="{{ route('product.create') }}" enctype="multipart/form-data">

                @csrf

                <div>
                    @if($errors->has('images'))

                        <span class="errorMsj">{{ $errors->first('images') }}</span>

                    @endif

                    <div class="imageExample"></div>

                    <input type="file" name="images[]" multiple/>
                </div>

                <div>
                    @if($errors->has('name'))

                        <span class="errorMsj">{{ $errors->first('name') }}</span>

                    @endif

                    <input type="text" name="name" placeholder="Nombre del producto"/>
                </div>

                <div>
                    @if($errors->has('description'))

                        <span class="errorMsj">{{ $errors->first('description') }}</span>

                    @endif

                    <textarea name="description" placeholder="Descripción del producto"></textarea>
                </div>

                <div>
                    @if($errors->has('price'))

                        <span class="errorMsj">{{ $errors->first('price') }}</span>

                    @endif

                    <input type="number" name="price" placeholder="Precio del producto" step="any"/>
                </div>

                <div>
                    @if($errors->has('discount'))

                        <span class="errorMsj">{{ $errors->first('discount') }}</span>

                    @endif

                    <input type="number" name="discount" placeholder="Precio con descuento aplicado" step="any"/>
                </div>

                <div>
                    @if($errors->has('brand'))

                        <span class="errorMsj">{{ $errors->first('brand') }}</span>

                    @endif

                    <input type="text" name="brand" placeholder="Marca del producto"/>
                </div>

                <div>
                    @if($errors->has('model'))

                        <span class="errorMsj">{{ $errors->first('model') }}</span>

                    @endif

                    <input type="text" name="model" placeholder="Modelo del producto"/>
                </div>

                <div>
                    @if($errors->has('gender'))

                        <span class="errorMsj">{{ $errors->first('gender') }}</span>

                    @endif

                    <input type="text" name="gender" placeholder="Genero del producto"/>
                </div>

                <input type="submit" value="Crear publicación"/>
            </form>
            </div>
        </div>
    </div>

@endsection