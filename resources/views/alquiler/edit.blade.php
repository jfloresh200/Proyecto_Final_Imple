<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alquiler</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #4b2e2e;
        }

        h1 {
            text-align: center;
            color: #6b3e26;
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

        input {
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
        }

        button:hover {
            background-color: #8b5e3c;
        }
    </style>
</head>
<body>

<form action="/alquileres/{{ $alquilerE->IDAlquiler }}" method="POST">
    @csrf
    @method('PUT')

    <h1>Editar Alquiler</h1>

    <label>Matricula</label>
    <input type="text" name="Matricula" value="{{ $alquilerE->Matricula }}">

    <label>DNI</label>
    <input type="text" name="DNI" value="{{ $alquilerE->DNI }}">

    <label>Seguro</label>
    <input type="text" name="Seguro" value="{{ $alquilerE->Seguro }}">

    <label>Precio</label>
    <input type="text" name="Precio" value="{{ $alquilerE->Precio }}">

    <label>Días</label>
    <input type="text" name="DiasCon" value="{{ $alquilerE->DiasCon }}">

    <button type="submit">Actualizar Alquiler</button>
</form>

</body>
</html>