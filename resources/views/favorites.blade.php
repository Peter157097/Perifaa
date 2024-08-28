@include('includes.head')
@include('includes.header')
@include('includes.nav')

<!DOCTYPE html>
<html>
<head>
    <title>Perifa</title>
    <style>
        .btn-favorite {
            background-color: gray; /* Cor padrão */
            color: white;
        }

        .btn-favorite.favorited {
            background-color: brown; /* Cor quando favoritado */
        }


    </style>
</head>
<body>
    <h1>Meus Favoritos</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @if($favorites->isEmpty())
        <p>Você ainda não tem favoritos.</p>
    @else
        <ul>
        @foreach ($favorites as $favorite)
    <li>
        {{ $favorite->product->nomeProduto }} <!-- Nome do produto -->
        <form action="{{ route('favorites.destroy', $favorite->idProduto) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Remover</button>
        </form>
    </li>
@endforeach


        </ul>
    @endif


</body>
</html>
