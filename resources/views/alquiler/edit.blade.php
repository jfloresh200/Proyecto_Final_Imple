<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Alquiler</title>

<style>
body {
    font-family: Arial;
    background:#fdf6f0;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

form {
    background:#fff5eb;
    padding:30px;
    width:400px;
    border-radius:10px;
}

label {font-weight:bold;}
input {
    width:100%;
    padding:8px;
    margin-top:5px;
    margin-bottom:10px;
}

button {
    width:100%;
    padding:10px;
    background:#a67c52;
    color:white;
    border:none;
}

.error {
    background:#f8d7da;
    padding:10px;
    margin-bottom:10px;
}

.success {
    background:#d4edda;
    padding:10px;
    margin-bottom:10px;
}
</style>
</head>

<body>

<form action="/alquileres/{{ $alquilerE->IDAlquiler }}" method="POST">
@csrf
@method('PUT')

<h1>Editar Alquiler</h1>

@if ($errors->any())
<div class="error">{{ $errors->first() }}</div>
@endif

<label>Matricula</label>
<input type="text" name="Matricula" value="{{ old('Matricula', $alquilerE->Matricula) }}">

<label>DNI</label>
<input type="text" name="DNI" value="{{ old('DNI', $alquilerE->DNI) }}">

<label>Seguro</label>
<input type="text" name="Seguro" value="{{ old('Seguro', $alquilerE->Seguro) }}">

<label>Precio</label>
<input type="text" name="Precio" value="{{ old('Precio', $alquilerE->Precio) }}">

<label>Días</label>
<input type="text" name="DiasCon" value="{{ old('DiasCon', $alquilerE->DiasCon) }}">

<button type="submit">Actualizar Alquiler</button>

</form>

</body>
</html>