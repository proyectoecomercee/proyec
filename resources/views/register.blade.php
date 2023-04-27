<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <meta charset="iso-8559-1"/>
</head>
<body>
    <main class="container align-center p-5">
        <form method="POST" action="{{route('validar-registro')}}">
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
                <label for="userInput" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="userInput" name="name" required autocomplete="disable">
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </main>
    </body>
    <style>
        header{
          color: black;
          font-family: Impact;
        }
        body{
            text-align: center;
            color: rgb(15, 15, 15);
            background-color: #80d4c2;
             padding: 10px;
             font-size: 30px;
        }
        button{
            text-align: center;
            color: rgb(0, 0, 0);
            background-color: rgb(90, 116, 172);
             padding: 5px;
             font-size: 15px;
             font-family: Impact;
        }
</style>
</html>