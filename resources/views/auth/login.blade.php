<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Usuario: <input type="text" name="usuario" id="lg-usuario"></label>
        </div>
        <div>
            <label>Clave: <input type="password" name="clave" id="lg-clave"></label>
        </div>
        <div>
            <button>LOGIN</button>
        </div>
    </form>
</body>
</html>