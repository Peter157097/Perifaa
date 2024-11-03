<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Email</title>
</head>
<body>
    @if(session('sucesso'))
        <div style="color: green;">
            {{ session('sucesso') }}
        </div>
    @endif

    <form action="{{ route('enviar.email') }}" method="GET">
        <button type="submit">Enviar Email</button>
    </form>
</body>
</html>
