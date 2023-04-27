<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina privada</title>
</head>
<body>
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
        <h2>Tu seccion privada</h2>
    </article>
</body>
<style>
    header{
      color: black;
      font-family: Impact;
    }
    body{
        text-align: center;
        color: black;
        background-color: #B880D4;
         padding: 5px;
         font-size: 18px;
    }
    button{
        text-align: center;
        color: black;
        background-color: rgb(114, 3, 169);
         padding: 5px;
         font-size: 18px;
         font-family: Impact;
    }
</style>
</html>