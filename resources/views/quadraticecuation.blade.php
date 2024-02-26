<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ecuación cuadratica</h1>

<form action="{{route('qe.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el valor de a:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Ingrese el numero b:
    <br>
    <input type="number" name="b">
</label>
<br>
<label>
    Ingrese el numero c:
    <br>
    <input type="number" name="c">
</label>
<br>

<button type="submit">Enviar Formulario:</button>

</form>
</body>
</html>
