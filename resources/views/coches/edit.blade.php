<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Coche</title>

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
    border-radius:10px;
    width:400px;
}
label {font-weight:bold; display:block; margin-top:10px;}
input {
    width:100%;
    padding:8px;
    margin-top:5px;
}
button {
    margin-top:15px;
    width:100%;
    padding:10px;
    background:#a67c52;
    color:white;
    border:none;
}
.error {background:#f8d7da; padding:10px; margin-bottom:10px;}
</style>
</head>

<body>

<form action="/coches/{{$cochesE->Matricula}}" method="POST">
@csrf
@method('PUT')

<h1>Editar Coche</h1>

@if ($errors->any())
<div class="error">{{ $errors->first() }}</div>
@endif

<label>Matricula</label>
<input type="text" name="Matricula" value="{{ old('Matricula', $cochesE->Matricula) }}">

<label>Marca</label>
<input type="text" name="Marca" value="{{ old('Marca', $cochesE->Marca) }}">

<label>Modelo</label>
<input type="text" name="Modelo" value="{{ old('Modelo', $cochesE->Modelo) }}">

<label>Grupo</label>
<input type="text" name="Grupo" value="{{ old('Grupo', $cochesE->Grupo) }}">

<label>Número Puertas</label>
<input type="text" name="NumeroPuertas" value="{{ old('NumeroPuertas', $cochesE->NumeroPuertas) }}">

<label>Edad Mínima</label>
<input type="text" name="EdadMinima" value="{{ old('EdadMinima', $cochesE->EdadMinima) }}">

<label>Código Oficina</label>
<input type="text" name="CodOficina" value="{{ old('CodOficina', $cochesE->CodOficina) }}">

<button type="submit">Actualizar coche</button>

</form>

</body>
</html>