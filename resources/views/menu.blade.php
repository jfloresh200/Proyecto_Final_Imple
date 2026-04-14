<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f0;
            margin: 20px;
            color: #4b2e2e;
            text-align: center;
        }

        h1 {
            color: #6b3e26;
            margin-bottom: 10px;
        }

        .rol-badge {
            display: inline-block;
            background: #a67c52;
            color: #fff;
            font-size: 0.8rem;
            padding: 3px 12px;
            border-radius: 20px;
            margin-bottom: 30px;
            text-transform: capitalize;
        }

        a {
            text-decoration: none;
            color: #a67c52;
            font-weight: bold;
            margin: 10px;
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #a67c52;
            border-radius: 6px;
            transition: all 0.3s;
        }

        a:hover {
            color: #fff;
            background-color: #a67c52;
        }

        .user-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 14px;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(107,62,38,0.08);
        }

        .user-bar span {
            color: #6b3e26;
            font-weight: bold;
        }

        .btn-logout {
            background: none;
            border: 2px solid #a67c52;
            color: #a67c52;
            padding: 6px 16px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .btn-logout:hover {
            background-color: #a67c52;
            color: #fff;
        }

        .menu-links {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="user-bar">
        <span>👤 {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" class="btn-logout">Cerrar sesión</button>
        </form>
    </div>

    <h1>Menu Principal</h1>
    <div class="rol-badge">{{ Auth::user()->role }}</div>

    <div class="menu-links">
        {{-- Clientes: todos los roles --}}
        <a href="/clientes">Clientes</a>
        <br>

        {{-- Oficinas: solo administrador --}}
        @if(Auth::user()->isAdmin())
            <a href="/oficinas">Oficinas</a>
            <br>
        @endif

        {{-- Alquileres: administrador y encargado --}}
        @if(Auth::user()->hasRole(['administrador', 'encargado']))
            <a href="/alquileres">Alquileres</a>
            <br>
        @endif

        {{-- Coches: todos los roles --}}
        <a href="/coches">Coches</a>
    </div>

</body>
</html>
