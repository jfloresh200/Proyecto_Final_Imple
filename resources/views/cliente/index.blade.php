<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
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

        .btn-desactivar {
            background-color: #c0392b;
        }

        .btn-desactivar:hover {
            background-color: #a93226;
        }

        .btn-activar {
            background-color: #27ae60;
        }

        .btn-activar:hover {
            background-color: #1e8449;
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
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="/clientes/create">Crear Cliente</a>

    <a href="/" class="volver derecha">⬅ Volver al menú</a>

    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Editor</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->DNI }}</td>
                <td>{{ $cliente->Nombre }}</td>

                <td>
                    <a href="/clientes/{{ $cliente->DNI }}/edit">Editor</a>
                </td>

                <td>
                    @if ($cliente->activo == 1)
                        <a href="/clientes/{{ $cliente->DNI }}/desactivar">
                            <button class="btn-desactivar">Desactivar</button>
                        </a>
                    @else
                        <a href="/clientes/{{ $cliente->DNI }}/activar">
                            <button class="btn-activar">Activar</button>
                        </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>