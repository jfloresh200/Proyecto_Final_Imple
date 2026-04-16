<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear Coche</title>

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
.success {background:#d4edda; padding:10px; margin-bottom:10px;}
</style>
</head>

<body>

<form action="/coches" method="POST">
@csrf

<h1>Registrar Coche</h1>

@if ($errors->any())
<div class="error">{{ $errors->first() }}</div>
@endif

@if (session('success'))
<div class="success">{{ session('success') }}</div>
@endif

<label>Matricula</label>
<input type="text" name="Matricula" required>

<label>Marca</label>
<input type="text" name="Marca" required>

<label>Modelo</label>
<input type="text" name="Modelo" required>

<label>Grupo</label>
<input type="text" name="Grupo" required>

<label>Número Puertas</label>
<input type="text" name="NumeroPuertas" required>

<label>Edad Mínima</label>
<input type="text" name="EdadMinima" required>

<label>Código Oficina</label>
<input type="text" name="CodOficina" required>

<button type="submit">Guardar coche</button>

</form>

</body>
</html>