<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alquiler</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f0; 
            color: #4b2e2e; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #6b3e26;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff5eb; 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #d9b38c;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #a67c52;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #8b5e3c;
        }

        select:hover {
    border-color: #8b5e3c;
        }

                select {
            width: 100%;
            padding: 10px;
            border: 1px solid #d9b38c;
            border-radius: 6px;
            background-color: #fff5eb;
            color: #4b2e2e;
            font-size: 14px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        select:focus {
            outline: none;
            border-color: #a67c52;
            box-shadow: 0 0 5px rgba(166,124,82,0.5);
        }
            </style>
</head>
<body>
    <form action="/alquileres" method="POST">
    @csrf

    <h1>Crear Alquiler</h1>

<label>Coche</label>
<select name="Matricula" required>
    <option value="">-- Seleccione un coche --</option>
    @foreach($coches as $coche)
        <option value="{{ $coche->Matricula }}">
            {{ $coche->Matricula }}
        </option>
    @endforeach
</select>

<label>Cliente</label>
<select name="DNI" required>
    <option value="">-- Seleccione un cliente --</option>
    @foreach($clientes as $cliente)
        <option value="{{ $cliente->DNI }}">
            {{ $cliente->Nombre }} - {{ $cliente->DNI }}
        </option>
    @endforeach
</select>

<label>Seguro</label>
<input type="text" name="Seguro" title="Solo letras"  required>

<label>Precio</label>
<input type="text" name="Precio" pattern="[0-9]+"  title="Solo Numeros"  required>

<label>Días</label>
<input type="text" name="DiasCon" pattern="[0-9]+" title="Solo Numeros"  required>

<button type="submit">Guardar Alquiler</button>
</form>
</body>
</html>