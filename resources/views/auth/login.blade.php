<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f0;
            color: #4b2e2e;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(107, 62, 38, 0.15);
            width: 100%;
            max-width: 420px;
        }

        h1 {
            color: #6b3e26;
            text-align: center;
            margin-bottom: 8px;
            font-size: 1.8rem;
        }

        .subtitle {
            text-align: center;
            color: #a67c52;
            margin-bottom: 30px;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #6b3e26;
            font-size: 0.9rem;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 14px;
            border: 2px solid #d4a97a;
            border-radius: 6px;
            font-size: 1rem;
            color: #4b2e2e;
            background-color: #fffaf6;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #a67c52;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }

        .checkbox-group input {
            width: 16px;
            height: 16px;
            accent-color: #a67c52;
        }

        .checkbox-group label {
            margin: 0;
            font-weight: normal;
            font-size: 0.9rem;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #a67c52;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #6b3e26;
        }

        .error-bag {
            background-color: #fde8e8;
            border: 1px solid #e57373;
            border-radius: 6px;
            padding: 12px 16px;
            margin-bottom: 20px;
            color: #b71c1c;
            font-size: 0.88rem;
        }

        .error-bag ul {
            padding-left: 18px;
        }

        .field-error {
            color: #c0392b;
            font-size: 0.82rem;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>🚗 Alquiler</h1>
        <p class="subtitle">Inicia sesión para continuar</p>

        @if ($errors->any())
            <div class="error-bag">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="correo@ejemplo.com"
                    required
                    autofocus
                >
                @error('email')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="••••••••"
                    required
                >
                @error('password')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Recordarme</label>
            </div>

            <button type="submit" class="btn-login">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
