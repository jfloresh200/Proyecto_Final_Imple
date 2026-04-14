<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Coches</title>
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

<form action="/coches/{{$cochesE->Matricula}}" method="POST">
@csrf
@method('PUT')

<h1>Editar Coche</h1>

<label for="Matricula">Matricula</label>
<input type="text" name="Matricula" value="{{ $cochesE->Matricula }}">

<label for="Marca">Marca</label>
<input type="text" name="Marca" value="{{ $cochesE->Marca }}">

<label for="Modelo">Modelo</label>
<input type="text" name="Modelo" value="{{ $cochesE->Modelo }}">

<label for="Grupo">Grupo</label>
<input type="text" name="Grupo" value="{{ $cochesE->Grupo }}">

<label for="NumeroPuertas">Numero de Puertas</label>
<input type="text" name="NumeroPuertas" value="{{ $cochesE->NumeroPuertas }}">

<label for="EdadMinima">Edad Minima</label>
<input type="text" name="EdadMinima" value="{{ $cochesE->EdadMinima }}">

<label for="CodOficina">Codigo de Oficina</label>
<input type="text" name="CodOficina" value="{{ $cochesE->CodOficina }}">

<button type="submit">Actualizar coche</button>
</form>

</body>
</html>