<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
        <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f0; 
            margin: 20px;
            color: #4b2e2e; 
        }

        h2 {
            color: #6b3e26; 
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #a67c52; 
            font-weight: bold;
            margin-bottom: 10px;
            display: inline-block;
        }

        a:hover {
            color: #8b5e3c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff5eb; 
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #d9b38c; 
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f0e0d6; 
        }

        tr:hover {
            background-color: #e6d4c1; 
        }

        button {
            background-color: #a67c52; 
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #8b5e3c;
        }
        .volver {
            background-color: #6b3e26;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            margin-right: 10px;
        }
        .derecha {
            float: right;
        }
    </style>
    <h2>Lista de Coches</h2>

<a href="/coches/create">Nuevo Coche</a>

 <a href="/" class="volver derecha">⬅ Volver al menú</a>

<table>
<tr>
<th>Matricula</th>
<th>Marca</th>
<th>Modelo</th>
<th>Grupo</th>
<th>Puertas</th>
<th>Edad Min</th>
<th>Acciones</th>
</tr>

<tbody>
@foreach($resultado as $coches)
<tr>
<td>{{$coches->Matricula}}</td>
<td>{{$coches->Marca}}</td>
<td>{{$coches->Modelo}}</td>
<td>{{$coches->Grupo}}</td>
<td>{{$coches->NumeroPuertas}}</td>
<td>{{$coches->EdadMinima}}</td>
<td>{{$coches->CodOficina}}</td>

<td>
<td><a href="/coches/{{$coches->Matricula}}/edit">Editar</a></td>
</td>

<td>
<form action="/coches/{{$coches->Matricula}}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>

</body>
</html>