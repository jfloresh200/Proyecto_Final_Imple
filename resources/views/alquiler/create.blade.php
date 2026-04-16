<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear Alquiler</title>

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
input, select {
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

<form action="/alquileres" method="POST">
@csrf

<h1>Crear Alquiler</h1>

@if ($errors->any())
<div class="error">{{ $errors->first() }}</div>
@endif

@if (session('success'))
<div class="success">{{ session('success') }}</div>
@endif

<label>Coche</label>
<select name="Matricula" required>
    <option value="">Seleccione</option>
    @foreach($coches as $coche)
        <option value="{{ $coche->Matricula }}">
            {{ $coche->Matricula }}
        </option>
    @endforeach
</select>

<label>Cliente</label>
<select name="DNI" required>
    <option value="">Seleccione</option>
    @foreach($clientes as $cliente)
        <option value="{{ $cliente->DNI }}">
            {{ $cliente->Nombre }} - {{ $cliente->DNI }}
        </option>
    @endforeach
</select>

<label>Seguro</label>
<input type="text" name="Seguro" required>

<label>Precio</label>
<input type="text" name="Precio" required>

<label>Días</label>
<input type="text" name="DiasCon" required>

<button type="submit">Guardar Alquiler</button>

</form>

</body>
</html>