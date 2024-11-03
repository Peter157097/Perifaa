<!DOCTYPE html>
<html>
<head>
    <title>Verificar Código</title>
</head>
<body>
    @if(session('sucesso'))
        <div style="color: green;">
            {{ session('sucesso') }}
        </div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            {{ $errors->first('codigo') }}
        </div>
    @endif

    <form action="{{ route('verificar.codigo') }}" method="POST">
        @csrf
        <label for="codigo">Digite o código de verificação:</label>
        <input type="text" name="codigo" id="codigo" required>
        <button type="submit">Verificar Código</button>
    </form>
</body>
</html>
