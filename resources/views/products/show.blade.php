@extends('products.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mostrar producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Atras</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $product->nombre }}
                <strong>Unidades:</strong>
                {{ $product->unidades }}
                <strong>Precio:</strong>
                {{ $product->precio }}
                <strong>Tamaño:</strong>
                {{ $product->tamaño }}
                <strong>Descripcion:</strong>
                {{ $product->descripcion }}
            </div>
        </div>
    </div>
@endsection