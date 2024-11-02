<!DOCTYPE html>
<html>

@include('includes.head') 

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
                <div class="tituloCarrinho">
                    Favoritos
                </div>
                <br>
                <div class="tituloCarrinho">
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
                            <div class="card-produto">
                                <div class="image-display">
                                    <div class="btnAmeiContainer">
                                        <form action="{{ route('favorites.destroy', $favorite->idProduto) }}" method="POST"
                                            class="formBtnProdutos">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="buttonAmei">
                                                <i class="fa-solid fa-heart fa-lg botaoAmei clicado"></i>
                                            </button>
                                        </form>
                                    </div>
                                    @if ($favorite->product)
                                        <img class="img-card-produto" src="{{ $favorite->product->imagemProduto }}"
                                            alt="imagem produto">
                                    @else
                                        <p>Produto não encontrado.</p>
                                    @endif
                                </div>
                                <div class="txt-info-produto-top">
                                    <p class="valor-produto">R${{ $favorite->product->valorProduto }}</p>
                                    <div class="dataPubProduto">
                                        <p>5d</p>
                                    </div>
                                    <div class="labelNomeProduto">
                                        <p>{{ $favorite->product->nomeProduto  }}</p>
                                    </div>
                                </div>


                                <div class="txt-info-produto-bottom">
                                    <div class="row-info">
                                        <p class="info-produto">{{ $favorite->product->cor->nomeCor ?? 'Cor Desconhecida' }}
                                        </p>
                                        <p class="info-produto">
                                            {{ $favorite->product->condicao->nomeCondicao ?? 'Condição Desconhecida' }}
                                        </p>
                                    </div>
                                    <div class="row-info">
                                        <p class="info-produto">
                                            {{ $favorite->product->categoria->nomeCategoriaProduto ?? 'Categoria Desconhecida' }}
                                        </p>
                                        <p class="info-produto">
                                            {{ $favorite->product->tamanho->nomeTamanho ?? 'Tamanho Desconhecido' }}
                                        </p>
                                    </div>
                                    <div class="row-info">
                                        <p class="info-produto">
                                            <i class="fa-solid fa-location-dot"></i>
                                            {{ $favorite->product->regiao->nomeRegiao ?? 'Região Desconhecida' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </ul>
        @endif
    </main>

    @include('includes.footer')

</body>

</html>