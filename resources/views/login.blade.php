
@extends('layouts.loginMaster')
@extends('layouts.navbar')
@section('style')
<style>
   
</style>
@endsection

@section('contenido')

    <main class="container align-center p-5">
        <form method="POST" action="{{route('inicia-sesion')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable">
            </div>
            <div class="mb-3">
                <label for="`passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                <label class="form-check-label" for="rememberCheck">Mantener sesion iniciada</label>
            </div>
            <div>
                <p>¿No tienes cuenta? <a href="{{route('registro')}}">Registrate</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Acceder</button>
        </form>
    </main>
    <style>
        header{
          color: black;
          font-family: Impact;
        }
        body{
            text-align: center;
            color: rgb(0, 0, 0);
            background-color: #a6d480;
             padding: 5px;
             font-size: 18px;
        }
        button{
            text-align: center;
            color: rgb(0, 0, 0);
            background-color: rgb(137, 168, 235);
             padding: 5px;
             font-size: 18px;
             font-family: Impact;
        }
</style>
</html>


   @endsection

   
  