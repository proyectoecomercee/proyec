@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Atras</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>vaya!</strong> Tuviste problemas con tu entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{$product->nombre}}" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>unidades:</strong>
                    <input type="number" name="unidades" value="{{$product->unidades}}" class="form-control" placeholder="unidades">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>precio:</strong>
                    <input type="number" name="precio" value="{{$product->precio}}" class="form-control" placeholder="precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tamaño:</strong>
                    <input type="text" name="tamaño" value="{{$product->tamaño}}" class="form-control" placeholder="tamaño">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>descripcion:</strong>
                    <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripcion">{{$product->descripcion}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="Agregar" class="btn btn-primary">Agregar</button>
            </div>
        </div>
   
    </form>
@endsection