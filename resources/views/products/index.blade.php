@extends('products.layout')
 
@section('content')
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-beetween py-3 mb-4 border-bottom">
    <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        Pagina privada @auth de {{Auth::user()->name}}       @endauth
    </a>
    <div class="col-md-3 text-end">
        <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">Salir</button></a>
    </div>
    </header>
</div>

<article class="container">
    <h2>Estas en tu seccion privada</h2>
</article>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Accsesorios</h2>
            </div>
@role('admin')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">Nuevo Producto</a>
@endrole
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>descripcion</th>
            <th>unidades</th>
            <th>nombre</th>
            <th>precio</th>
            <th>tamaño</th>
            <th width="280px">Action</th>
        </tr>
        {{-- //repite y trae los datos de la base --}}
        @foreach ($products as $product)
        {{-- <div class="product-content-wrap">
            <div class="product-category">
                <a href="shop.html">Clothing</a>
            </div>
            <h2><a href="product-details.html">Colorful Pattern Shirts</a></h2>
            <div class="rating-result" title="90%">
                <span>
                    <span>90%</span>
                </span>
            </div>
            <div class="product-price">
                <span>$238.85 </span>
                <span class="old-price">$245.8</span>
            </div> --}}
            <div class="product-action-1 show">
                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
            </div>
        </div>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->descripcion}}</td>
            <td>{{ $product->unidades}}</td>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->precio }}</td>
            <td>{{ $product->tamaño}}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar Productos</a>
                    @role('admin')
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    @endrole
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection