<!DOCTYPE html>
<html>
<head>
    <title>Enviar Código de Verificação</title>
</head>
<body>
    @if(session('sucesso'))
        <div style="color: green;">
            {{ session('sucesso') }}
        </div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            {{ $errors->first('email') }}
        </div>
    @endif

    <form action="{{ route('enviar.codigo') }}" method="POST">
        @csrf
        <label for="email">Digite seu email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Enviar Código</button>
    </form>
</body>
</html>
