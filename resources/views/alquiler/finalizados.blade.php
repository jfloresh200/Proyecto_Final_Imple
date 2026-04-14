<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquileres Finalizados</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f0; 
            margin: 20px;
            color: #4b2e2e; 
        }

        h1 {
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
    </style>
</head>
<body>
    <form action="/alquileres" method="POST">
    @csrf

    <h1>Alquileres Finalizados</h1>

<a href="/alquileres">Volver a activos</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Matricula</th>
            <th>DNI</th>
            <th>Seguro</th>
            <th>Precio</th>
            <th>Días</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resultado as $alquiler)
        <tr>
            <td>{{ $alquiler->IDAlquiler }}</td>
            <td>{{ $alquiler->Matricula }}</td>
            <td>{{ $alquiler->DNI }}</td>
            <td>{{ $alquiler->Seguro }}</td>
            <td>{{ $alquiler->Precio }}</td>
            <td>{{ $alquiler->DiasCon }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>