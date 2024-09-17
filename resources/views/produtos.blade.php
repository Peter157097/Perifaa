<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.header')
    @include('includes.nav')

    <style>
        .accordion2 {
            display: block; /* Cada botão vai ocupar uma linha */
            width: 100%; /* Ocupa toda a largura disponível */
            margin-bottom: 10px; /* Espaçamento entre os botões */
            text-align: left; /* Ajusta o alinhamento do texto, se necessário */
        }
    </style>
    <main>
        <!-- Começo do corpo do site -->
        <div class="container-produtos">
            <h5 class="titulo-produtos">Novidades</h5>
            <div class="produto-line"></div>
            <div class="filtro-produtos">
                <p class="filtro-display">Filtrado por:</p>
            </div>
        </div>
        <div class="produtos-body">
            <div class="accordion-body">
            <form id="filter-form" method="GET" action="{{ url('/produtos') }}">
                <div class="accordion-filtro">
                    <button type='button' class="accordion">Preço</button>
                    <div class="panel">
                    <label for="preco-ate" class="label-preco">
            Até
            <input type="number" id="preco-ate" name="preco_ate" class="preco-filtro" min="0" placeholder="Digite o valor">
        </label>
        <button type="submit" class="btn btn-primary" >Aplicar</button>
                    </div>

                    <button type='button' class="accordion">Tamanhos</button>
                    <div class="panel">
                    <div class="tamanhos-buttons">

                        @foreach($tamanhos as $tamanho)
                            <button type="submit" name="tamanho" value="{{ $tamanho->idTamanho }}" class="accordion2">
                                {{ $tamanho->nomeTamanho }}
                            </button>
                        @endforeach
                    </div>
                    </div>

                    <button type='button' class="accordion">Condição</button>
                    <div class="panel">
                    <div class="condicoes-buttons">
                        @foreach($condicoes as $condicao)
                            <button type="submit" name="condicoes[]" value="{{ $condicao->idCondicao }}" class="accordion2">
                                {{ $condicao->nomeCondicao }}
                            </button>
                        @endforeach
                    </div>
                    </div>

                    <button type='button' class="accordion">Cores</button>
                    <div class="panel">
                        <!-- Cores -->
                        @foreach($cores as $cor)
                            <button type="submit" name="cores[]" value="{{ $cor->idCor }}"  class="accordion2" style="background-color: {{ $cor->rgbCor }}; color: {{ $cor->nomeCor == 'Branco' ? 'black' : 'white' }};">
                                {{ $cor->nomeCor }}
                            </button>
                        @endforeach
                        
                        
                    </div>

                    <button type='button' class="accordion">Local</button>
                    <div class="panel">
                    @foreach($regioes as $regiao)
                        <button type="submit" name="regioes[]" value="{{ $regiao->idRegiao }}" class="accordion2"  >
                            {{ $regiao->nomeRegiao }}
                        </button>
                    @endforeach
                    </div>

                    <a href="{{url('/produtos')}}" class="btn btn-primary">Restar Fieltros</a>
                </div>
            </form>
            </div>

            <div class="cards-body">
             
                <div class="container-cards">
                    @foreach($produtos as $produto)
                    <a href="{{ url('/entrar-produto',$produto->idProduto)}}">
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
                </a>
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
