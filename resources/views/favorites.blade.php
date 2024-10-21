<!DOCTYPE html>
<html>

<head>
    <title>Perifa</title>
    <style>
        .btn-favorite {
            background-color: gray;
            color: white;
        }

        .btn-favorite.favorited {
            background-color: brown;
        }
    </style>
</head>

<body>
    @include('includes.head')
    @include('includes.header')
    @include('includes.nav')

    <main>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @if($favorites->isEmpty())

            <div class="containerCarrinhoVazio">
                <div class="tituloCarrinhoVazio">
                    Favoritos
                </div>
                <br>
                <div class="tituloCarrinhoVazio">
                    <h3>Tá meio deserto aqui...</h3>
                </div>
                <div class="textoCarrinhoVazio">
                    Parece que você não favoritou nada até o momento.
                    <br>
                    Continue procurando algo que você goste!
                </div>
                <br>
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
                                        @if ($favorite->product)
                                            <img class="img-card-produto" src="{{ $favorite->product->imagemProduto }}"
                                                alt="imagem produto">
                                        @else
                                            <p>Produto não encontrado.</p>
                                        @endif
                                    </div>
                                    <div class="txt-info-vendedor">
                                        <p></p>
                                        <p>Recente</p>
                                    </div>
                                    <div class="txt-nome-produto">
                                        {{ $favorite->product->nomeProduto ?? 'Produto Desconhecido' }}
                                    </div>
                                    <p class="valor-produto">{{ $favorite->product->valorProduto ?? 'Valor Desconhecido' }}</p>
                                    <div class="txt-info-produto">
                                        <div class="row-info">
                                            <p class="info-produto">{{ $favorite->product->cor->nomeCor ?? 'Cor Desconhecida' }}
                                            </p>
                                            <p class="info-produto">
                                                {{ $favorite->product->condicao->nomeCondicao ?? 'Condição Desconhecida' }}</p>
                                        </div>
                                        <div class="row-info">
                                            <p class="info-produto">
                                                {{ $favorite->product->categoria->nomeCategoriaProduto ?? 'Categoria Desconhecida' }}
                                            </p>
                                            <p class="info-produto">
                                                {{ $favorite->product->tamanho->nomeTamanho ?? 'Tamanho Desconhecido' }}</p>
                                        </div>
                                        <div class="row-info">
                                            <p class="info-produto">
                                                {{ $favorite->product->regiao->nomeRegiao ?? 'Região Desconhecida' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('favorites.destroy', $favorite->idProduto) }}" method="POST"
                                    style="display:inline;">
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