<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.header')
    @include('includes.nav')
    <main>
        <!-- Começo do corpo do site -->
        <div class="container-produtos">
            <h5 class="titulo-produtos">Novidades</h5>
            <div class="produto-line"></div>
            <div class="filtro-produtos">
                <p class="filtro-display">Filtrado por:</p>
                <div class="filtro-itens">1</div>
                <div class="filtro-itens">2</div>
                <div class="filtro-itens">3</div>
            </div>
        </div>
        <div class="produtos-body">
            <div class="accordion-body">
                <div class="accordion-filtro">
                    <!-- Filtros (Você pode adaptar conforme necessário) -->
                    <button class="accordion">Preço</button>
                    <div class="panel">
                        <label for="text" class="label-preco">
                            De
                            <input type="preco" class="preco-filtro">
                        </label>
                        <label for="text" class="label-preco">
                            Até
                            <input type="preco" class="preco-filtro">
                        </label>
                    </div>

                    <button class="accordion">Tamanhos</button>
                    <div class="panel">
                        <div class="tamanhos-check">
                            <!-- Tamanhos -->
                            <label for="tamanho" class="label-tamanho">XGG
                                <input type="checkbox">
                            </label>
                            <label for="tamanho" class="label-tamanho">GG
                                <input type="checkbox">
                            </label>
                            <!-- Adicione mais tamanhos conforme necessário -->
                        </div>
                    </div>

                    <button class="accordion">Condição</button>
                    <div class="panel">
                        <!-- Condições -->
                        <label for="condicao" class="label-condicao">
                            Novo
                            <input type="checkbox">
                        </label>
                        <label for="condicao" class="label-condicao">
                            Seminovo
                            <input type="checkbox">
                        </label>
                        <label for="condicao" class="label-condicao">
                            Usado
                            <input type="checkbox">
                        </label>
                    </div>

                    <button class="accordion">Cores</button>
                    <div class="panel">
                        <!-- Cores -->
                        <label for="cores" class="label-condicao">
                            Preto
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Branco
                            <input type="checkbox">
                        </label>
                        <!-- Adicione mais cores conforme necessário -->
                    </div>

                    <button class="accordion">Local</button>
                    <div class="panel">
                        <!-- Locais -->
                        <label for="local" class="label-condicao">
                            Anúncios Próximos
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            São Paulo
                            <input type="checkbox">
                        </label>
                        <!-- Adicione mais locais conforme necessário -->
                    </div>

                    <button class="accordion">Preferências</button>
                    <div class="panel">
                        <p>N sei</p>
                    </div>
                </div>
            </div>

            <div class="cards-body">
                <div class="container-cards">
                    @foreach($produtos as $produto)
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{ asset($produto->imagemProduto) }}"
                                alt="{{ $produto->nomeProduto }}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p></p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            {{ $produto->nomeProduto }}
                        </div>
                        <p class="valor-produto">{{ $produto->valorProduto }}</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p class="info-produto">{{ $produto->cor->nomeCor ?? 'Cor Desconhecida' }}</p>
                                <p class="info-produto">
                                    {{ $produto->condicao->nomeCondicao ?? 'Condição Desconhecida' }}
                                </p>
                            </div>
                            <div class="row-info">
                                <p class="info-produto">
                                    {{ $produto->categoria->nomeCategoriaProduto ?? 'Categoria Desconhecida' }}
                                </p>
                                <p class="info-produto">{{ $produto->tamanho->nomeTamanho ?? 'Tamanho Desconhecido' }}
                                </p>
                            </div>
                            <div class="row-info">

                                <p class="info-produto">{{ $produto->regiao->nomeRegiao ?? 'Região Desconhecida' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="quebra-pagina">
            <ul class="pagination">
                @if ($produtos->currentPage() == 1)
                <li class="page-item disabled"><a href="#" class="page-link">&lt;</a></li>
                @else
                <li class="page-item"><a href="{{ $produtos->previousPageUrl() }}" class="page-link">&lt;</a></li>
                @endif

                @for ($i = 1; $i <= $produtos->lastPage(); $i++)
                    <li class="page-item @if($i == $produtos->currentPage()) active @endif">
                        <a href="{{ $produtos->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                    @endfor

                    <li class="page-item @if (!$produtos->hasMorePages()) disabled @endif">
                        <a href="{{ $produtos->nextPageUrl() }}" class="page-link">&gt;</a>
                    </li>
            </ul>
        </div>


        <!-- Script para animação do accordion do filtro -->
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
    </main>
    <!-- Fim do corpo do site -->

    @include('includes.footer')

    <!-- Import do JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Imports do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>