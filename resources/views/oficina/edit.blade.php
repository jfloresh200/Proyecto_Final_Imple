<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Oficina</title>
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
    </style>
</head>
<body>

<form action="/oficinas/{{$oficinaE->id}}" method="POST">
    @csrf
    @method('PUT')

    <h1>Editar Oficina</h1>

    <label for="Ciudad">Ciudad</label>
    <input type="text" name="Ciudad" value="{{ $oficinaE->Ciudad }}">

    <label for="Direccion">Dirección</label>
    <input type="text" name="Direccion" value="{{ $oficinaE->Direccion }}">

    <label for="CodigoPostal">Código Postal</label>
    <input type="text" name="CodigoPostal" value="{{ $oficinaE->CodigoPostal }}">

    <label for="Telefono">Teléfono</label>
    <input type="text" name="Telefono" value="{{ $oficinaE->Telefono }}">

    <button type="submit">Actualizar Oficina</button>
</form>

</body>
</html>