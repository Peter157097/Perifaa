@include('includes.head')
@include('includes.header')
@include('includes.nav')

<!DOCTYPE html>
<html>

<head>
    <title>Perifa</title>
    <style>
        .btn-favorite {
            background-color: gray;
            /* Cor padrão */
            color: white;
        }

        .btn-favorite.favorited {
            background-color: brown;
            /* Cor quando favoritado */
        }
    </style>
</head>

<body>
    <main>
        <div class="container-title-fav">
            <h1>Meus Favoritos</h1> 
            <p>Peças que você se amarrou...</p>
        </div>
        <div class="produto-line"></div>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @if($favorites->isEmpty())
        <div class="container-fav-vazio">
            <h3>Pelo visto você ainda não curtiu nenhuma peça :(</h3>
            <p>Por quê não continua procurando? Tem bastante! </p>

            <a href="produtos" class="linkHomeCarrinho">
                Voltar às compras
            </a>
        </div>
        @else
            <ul style="padding:0">
                <div class="cards-body">
                    <div class="container-cards-favorite">
                        @foreach ($favorites as $favorite)
                            <li style="list-style:none">                    
                                <div class="card-produto">
                                    <div class="image-display">
                                        <img class="img-card-produto" src="{{ asset($favorite->product->imagemProduto) }}">
                                    </div>
                                    <div class="txt-info-vendedor">
                                        <p></p>
                                        <p>Recente</p>
                                    </div>
                                    <div class="txt-nome-produto">
                                        {{ $favorite->product->nomeProduto }} <!-- Nome do produto -->
                                    </div>
                                    <p class="valor-produto">{{ $favorite->product->valorProduto }}</p>
                                    <div class="txt-info-produto">
                                        <div class="row-info">
                                            <p class="info-produto">{{ $favorite->product->cor->nomeCor ?? 'Cor Desconhecida' }}</p>
                                            <p class="info-produto">{{ $favorite->product->condicao->nomeCondicao ?? 'Condição Desconhecida' }}</p>
                                        </div>
                                        <div class="row-info">
                                            <p class="info-produto">{{ $favorite->product->categoria->nomeCategoriaProduto ?? 'Categoria Desconhecida' }}</p>
                                            <p class="info-produto">{{ 
                                            $favorite->product->tamanho->nomeTamanho ?? 'Tamanho Desconhecido' }}</p>
                                        </div>
                                        <div class="row-info">
                                            <p class="info-produto">{{ $favorite->product->regiao->nomeRegiao ?? 'Região Desconhecida' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('favorites.destroy', $favorite->idProduto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-fav-btn">Remover</button>
                                </form>
                            </li>
                        @endforeach
                    </div>
                </div>   
            </ul>
        @endif
    </main>
    @include('includes.footer')
</body>

</html>
