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
            display: block;
            /* Cada botão vai ocupar uma linha */
            width: 100%;
            /* Ocupa toda a largura disponível */
            margin-bottom: 10px;
            /* Espaçamento entre os botões */
            text-align: left;
            /* Ajusta o alinhamento do texto, se necessário */
        }

        .checkbox-buttons:checked {
            background-color: #663300; /* Cor marrom */
            border-color: #663300;
        }

       
        /* Destacar a label quando a checkbox estiver marcada */
        input[type="checkbox"]:checked+label {
            background-color: blue;
            /* Fundo da label ao marcar */
            color: red;
            /* Texto da label ao marcar */
            font-weight: bold;
            /* Texto em negrito para maior visibilidade */
            padding: 8px;
            /* Um pequeno espaçamento interno */
            border-radius: 4px;
            /* Bordas arredondadas para a label */
        }

        /* Para garantir que a label receba o estilo */
        label {
            cursor: pointer;
            /* Muda o cursor para indicar que a label é clicável */
            padding-left: 20px;
            /* Espaço entre a checkbox e o texto */
        }

        .button-group {
            display: flex;
            /* Exibe os botões em linha */
            justify-content: center;
            /* Centraliza os botões horizontalmente */
            gap: 20px;
            /* Espaçamento entre os botões */
            margin-top: 20px;
            /* Espaçamento acima dos botões */
        }

        /* Estilo dos botões */
        .btn-primary {
            background-color: #663300;
            /* Cor marrom para o fundo */
            border: none;
            /* Remove bordas */
            color: white;
            /* Cor do texto branco */
            padding: 10px 20px;
            /* Adiciona padding interno para os botões */
            border-radius: 5px;
            /* Bordas arredondadas */
            font-size: 16px;
            /* Tamanho da fonte */
            cursor: pointer;
            /* Cursor de mão para indicar que é clicável */
            transition: background-color 0.3s ease;
            /* Transição suave ao passar o mouse */
        }

        .btn-primary:hover {
            background-color: #A0522D;
            /* Muda a cor marrom ao passar o mouse */
        }
        .btn-filter {
    background-color: #d2cfc8; /* cor de fundo do botão */
    color: #444; /* cor do texto */
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    margin: 5px; /* espaçamento entre os botões */
    cursor: pointer;
    display: inline-flex;
    align-items: center;
}

.btn-filter .remove-filter {
    margin-left: 5px;
    cursor: pointer;
    color: red; /* cor do 'x' para remover o filtro */
}

.btn-filter:hover {
    background-color: #b8b8b3; /* cor de fundo ao passar o mouse */
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
            <div class="filtros-aplicados">
            @if($request->filled('preco_ate'))
                <button type="button" class="btn btn-filter" onclick="removeFilter('preco_ate')">
                    Preço até R$ {{ $request->input('preco_ate') }}
                    <span class="remove-filter">&times;</span>
                </button>
            @endif
            @if($request->filled('tamanho'))
                    @foreach($tamanhos->whereIn('idTamanho', $request->input('tamanho')) as $tamanho)
                    <button type="button" class="btn btn-filter" onclick="removeFilter('tamanho[]', '{{ $tamanho->idTamanho }}')">
                        Tamanho: {{ $tamanho->nomeTamanho }}
                        <span class="remove-filter">&times;</span>
                    </button>
                @endforeach
            @endif
            @if($request->filled('condicoes'))
                @foreach($condicoes->whereIn('idCondicao', $request->input('condicoes')) as $condicao)
                    <button type="button" class="btn btn-filter" onclick="removeFilter('condicoes[]', '{{ $condicao->idCondicao }}')">
                        Condição: {{ $condicao->nomeCondicao }}
                        <span class="remove-filter">&times;</span>
                    </button>
                @endforeach
            @endif
            @if($request->filled('cores'))
                @foreach($cores->whereIn('idCor', $request->input('cores')) as $cor)
                    <button type="button" class="btn btn-filter" onclick="removeFilter('cores[]', '{{ $cor->idCor }}')">
                        Cor: {{ $cor->nomeCor }}
                        <span class="remove-filter">&times;</span>
                    </button>
                @endforeach
            @endif
            @if($request->filled('regioes'))
                @foreach($regioes->whereIn('idRegiao', $request->input('regioes')) as $regiao)
                    <button type="button" class="btn btn-filter" onclick="removeFilter('regioes[]', '{{ $regiao->idRegiao }}')">
                        Região: {{ $regiao->nomeRegiao }}
                        <span class="remove-filter">&times;</span>
                    </button>
                @endforeach
            @endif
        </div>
        </div>
        <div class="produtos-body">
            <div class="accordion-body">
            <form id="filter-form" method="GET" action="{{ url('/produtos') }}">
    <div class="accordion-filtro">
        <button type='button' class="accordion">Preço</button>
        <div class="panel">
            <div class="panelContainer">
                <div class="precoFiltroTudo">
                    <label for="preco-ate" class="label-preco">
                    <p>Até</p>
                    <input type="number" id="preco-ate" name="preco_ate" class="preco-filtro"
                        value="{{ isset($filtros['preco_ate']) ? $filtros['preco_ate'] : '' }}" 
                        min="0" placeholder="R$">
                    </label>
                </div>
           <div class="parte-botaoPreco">
            <button type="submit" class="btn btn-primary" id="botaoPreco">Aplicar filtro</button>
           </div>
           
            </div>
           
        </div>

        <button type='button' class="accordion">Tamanhos</button>
        <div class="panel">
            <div class="panelContainer">
            <div class="tamanhos-buttons">
                @foreach($tamanhos as $tamanho)
                <label>
                    <input type="checkbox" name="tamanho[]" value="{{ $tamanho->idTamanho }}" class="checkbox-buttons"
                           {{ isset($filtros['tamanho']) && in_array($tamanho->idTamanho, $filtros['tamanho']) ? 'checked' : '' }}>
                    {{ $tamanho->nomeTamanho }}
                </label>
                @endforeach
            </div>
            </div>
        </div>

        <button type='button' class="accordion">Condição</button>
        <div class="panel">
            <div class="panelContainer">
            <div class="condicoes-buttons">
                @foreach($condicoes as $condicao)
                <label>
                    <input type="checkbox" name="condicoes[]" value="{{ $condicao->idCondicao }}" class="checkbox-buttons"
                           {{ isset($filtros['condicoes']) && in_array($condicao->idCondicao, $filtros['condicoes']) ? 'checked' : '' }}>
                    {{ $condicao->nomeCondicao }}
                </label>
                @endforeach
            </div>
            </div>
        </div>

        <button type='button' class="accordion">Cores</button>
        <div class="panel">
            <div class="panelContainer">
            @foreach($cores as $cor)
            <label>
                <input type="checkbox" name="cores[]" value="{{ $cor->idCor }}" class="checkbox-buttons"
                       {{ isset($filtros['cores']) && in_array($cor->idCor, $filtros['cores']) ? 'checked' : '' }}>
                {{ $cor->nomeCor }}
            </label>
            @endforeach
            </div>
        </div>

        <button type='button' class="accordion">Local</button>
        <div class="panel">
        <div class="panelContainer">
            @foreach($regioes as $regiao)
            
            <label>
                <input type="checkbox" name="regioes[]" value="{{ $regiao->idRegiao }}" class="checkbox-buttons"
                       {{ isset($filtros['regioes']) && in_array($regiao->idRegiao, $filtros['regioes']) ? 'checked' : '' }}>
                {{ $regiao->nomeRegiao }}
            </label>
           
            @endforeach
            </div>
     
        </div>
                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                            <a href="{{ url('/produtos') }}" class="btn btn-primary">Resetar Filtros</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="cards-body">

                <div class="container-cards">
                    @foreach($produtos as $produto)
                        <a href="{{ url('/entrar-produto', $produto->idProduto)}}">
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
                                        <p class="info-produto">
                                            {{ $produto->tamanho->nomeTamanho ?? 'Tamanho Desconhecido' }}
                                        </p>
                                    </div>
                                    <div class="row-info">

                                        <p class="info-produto">{{ $produto->regiao->nomeRegiao ?? 'Região Desconhecida' }}
                                        </p>
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
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
            document.querySelectorAll('.remove-filter').forEach(button => {
                button.addEventListener('click', function() {
                    const filterName = this.getAttribute('data-filter');
                    // Redireciona para a URL com o filtro removido
                    let url = new URL(window.location.href);
                    const params = new URLSearchParams(url.search);

                    // Remove o filtro correspondente
                    if (filterName.includes('[]')) {
                        const name = filterName.replace('[]', '');
                        params.delete(name);
                    } else {
                        params.delete(filterName);
                    }

                    // Atualiza a URL
                    url.search = params.toString();
                    window.location.href = url.toString(); // Redireciona para a nova URL
                });
            });

            function removeFilter(filterName, value = null) {
        const form = document.getElementById('filter-form');

        // Remove o valor do filtro específico
        if (value) {
            const input = form.querySelector(`input[name="${filterName}"][value="${value}"]`);
            if (input) {
                input.checked = false;
            }
        } else {
            // Se o filtro não tem valor, simplesmente removemos o input do filtro de preço
            const input = form.querySelector(`input[name="${filterName}"]`);
            if (input) {
                input.value = '';
            }
        }

        // Atualiza a página enviando o formulário
        form.submit();
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