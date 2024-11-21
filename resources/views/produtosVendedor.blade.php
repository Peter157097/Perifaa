@include('includes.headVendedor')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
.imagem-horizontal {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding-top: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.imagem-horizontal img {
    width: 95%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.wrapper {
    width: 300px;
    height: 500px;
    background: white;
    margin: auto;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0;
    transform: scale(0.95);
    transition: box-shadow 0.5s, transform 0.5s;
}

.wrapper:hover {
    transform: scale(1);
    box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
}


.bottom {
    width: 100%;
    height: 40%;
    /* Resto do espaço para os detalhes */
    padding: 10px;
    box-sizing: border-box;
    background-color: #f4f4f4;
}

.details {
    padding: 10px 0;
}

.details h1 {
    font-size: 18px;
    margin: 0;
    font-family: "Poppins", sans-serif;
}

.details p {
    font-size: 16px;
    margin: 5px 0;
    color: #333;
}

.edit {
    cursor: pointer;
    color: #254053;
    transition: color 0.3s;
}

.edit:hover {
    color: #00394B;
}

.wrapper {
    width: 300px;
    height: 500px;
    background: white;
    margin: auto;
    position: relative;
    overflow: hidden;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0;
    transform: scale(0.95);
    transition: box-shadow 0.5s, transform 0.5s;

    &:hover {
        transform: scale(1);
        box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
    }

    .container {
        width: 100%;
        height: 100%;

        .top {
            overflow: hidden;
            background-color: rgb(0, 0, 0);
            width: 100%;
            height: 80%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            position: relative;
        }

        .top img {
            overflow: hidden;
            background-color: rgb(0, 0, 0);
            width: 100%;
            height: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            position: relative;
        }

        .bottom {
            width: 200%;
            height: 20%;
            transition: transform 0.5s;

            &.clicked {
                transform: translateX(-50%);
            }

            h1 {
                font-family: "Poppins", sans-serif;
                margin: 0;
                padding: 0;
            }

            p {
                margin: 0;
                padding: 0;
            }

            .left {
                height: 100%;
                width: 50%;
                background: #f4f4f4;
                position: relative;
                float: left;

                .details {
                    padding: 20px;
                    float: left;
                    width: calc(70% - 40px);
                }

                .buy {
                    float: right;
                    width: calc(30% - 2px);
                    height: 100%;
                    background: #f1f1f1;
                    transition: background 0.5s;
                    border-left: solid thin rgba(0, 0, 0, 0.1);

                    i {
                        font-size: 30px;
                        padding: 30px;
                        color: #254053;
                        transition: transform 0.5s;
                    }

                    &:hover {
                        background: #A6CDDE;
                    }

                    &:hover i {
                        transform: translateY(5px);
                        color: #00394B;
                    }
                }
            }

            .right {
                width: 50%;
                background: #A6CDDE;
                color: white;
                float: right;
                height: 200%;
                overflow: hidden;

                .details {
                    padding: 20px;
                    float: right;
                    width: calc(70% - 40px);
                }

                .done {
                    width: calc(30% - 2px);
                    float: left;
                    transition: transform 0.5s;
                    border-right: solid thin rgba(255, 255, 255, 0.3);
                    height: 50%;

                    i {
                        font-size: 30px;
                        padding: 30px;
                        color: white;
                    }
                }

                .remove {
                    width: calc(30% - 1px);
                    clear: both;
                    border-right: solid thin rgba(255, 255, 255, 0.3);
                    height: 50%;
                    background: #BC3B59;
                    transition: transform 0.5s, background 0.5s;

                    &:hover {
                        background: #9B2847;
                    }

                    &:hover i {
                        transform: translateY(5px);
                    }

                    i {
                        transition: transform 0.5s;
                        font-size: 30px;
                        padding: 30px;
                        color: white;
                    }
                }

                &:hover {

                    .remove,
                    .done {
                        transform: translateY(-100%);
                    }
                }
            }
        }
    }

    .inside {
        z-index: 9;
        background: #617D00;
        width: 140px;
        height: 140px;
        position: absolute;
        top: -70px;
        right: -70px;
        border-radius: 0px 0px 200px 200px;
        transition: all 0.5s, border-radius 2s, top 1s;
        overflow: hidden;

        .icon {
            position: absolute;
            right: 85px;
            top: 85px;
            color: #1DA361;
            opacity: 1;
        }

        &:hover {
            width: 100%;
            right: 0;
            top: 0;
            border-radius: 0;
            height: 80%;

            .icon {
                opacity: 0;
                right: 15px;
                top: 15px;
            }

            .contents {
                opacity: 1;
                transform: scale(1);
                transform: translateY(0);
            }
        }

        .contents {
            padding: 5%;
            opacity: 0;
            transform: scale(0.5);
            transform: translateY(-200%);
            transition: opacity 0.2s, transform 0.8s;

            table {
                text-align: left;
                width: 100%;
            }

            h1,
            p,
            table {
                color: white;
            }

            p {
                font-size: 13px;
            }
        }
    }

    .product-info {
        list-style-type: none;
        padding: 0;
        margin: 0;
        color: white;
        font-size: 14px;
    }

    .product-info li {
        margin: 10px 0;
        padding: 5px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .product-info li strong {
        font-family: "Poppins", sans-serif;
        font-size: 20px;
    }
}

.prod {
    display: flex;
    justify-content: center;
    flex-direction: row;
    width: 100%;
    margin: 0 auto;
    background-color: #617d00;
}

.containerProdutoVendedor {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.part2 {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding-top: 50px;
}

.search-bar {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    text-align: center;
}

.search-bar input {
    width: 50%;
    height: 50px;
    padding: 5px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
}

.search-bar input:focus {
    border-color: #7453fc;
    /* Cor do tema */
    box-shadow: 0 0 5px rgba(116, 83, 252, 0.5);
}

/* Estilo para o fundo do título */
.titulo-loja {
    padding: 20px;
    text-align: center;
}

/* Estilo do título principal */
.titulo-principal {
    font-size: 36px;
    font-weight: bold;
    font-family: "Poppins", sans-serif;
    color: #000;
    /* Preto para o texto */
    margin: 0;
    /* Remove espaçamento extra */
}

/* Estilo do subtítulo */
.subtitulo {
    font-size: 16px;
    color: #eee;
    /* Cinza claro para contraste */
    margin: 0;
    /* Remove espaçamento extra */
}
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const carouselItems = document.querySelectorAll('.carousel-item');

    // Filtrar produtos conforme o texto digitado
    searchInput.addEventListener('input', () => {
        const filter = searchInput.value.toLowerCase();
        let hasVisibleItems = false;

        carouselItems.forEach(item => {
            const productName = item.querySelector('.details h1').textContent.toLowerCase();
            if (productName.includes(filter)) {
                item.style.display = 'block';
                hasVisibleItems = true;
            } else {
                item.style.display = 'none';
            }
        });

        // Caso não tenha texto, mostra todos os produtos
        if (!filter.trim()) {
            carouselItems.forEach(item => (item.style.display = 'block'));
        }
    });
});
</script>

<body>
    @include('includes.menuVendedor')
    <div class="containerProdutoVendedor">
        <div class="imagem-horizontal">
            <img src="images/vendeProd.png" alt="">
        </div>
        <div class="part2">
            <div class="carousel-container">
                <div class="search-bar">
                    <div class="titulo-loja">
                        <h1 class="titulo-principal">{{$vendedor->nomeVendedor}}</h1>
                        <p class="subtitulo">Clique no produto para visualizar e editar mais detalhes.</p>
                    </div>
                    <input type="text" id="searchInput" placeholder="Pesquise produtos...">
                </div>
                <button class="carousel-arrow left" id="prev">&lt;</button>
                <div class="carousel-wrapper" id="carousel">
                    @foreach($produtos as $produto)
                    <div class="carousel-item">
                        <div class="wrapper">
                            <div class="container">
                                <div class="top">
                                    <!-- Aqui você pode adicionar a imagem do produto -->
                                    <img src="{{ url($produto->imagemProduto) }}" alt="{{ $produto->nomeProduto }}">
                                </div>
                                <div class="bottom">
                                    <div class="left">
                                        <div class="details">
                                            <h1>{{ $produto->nomeProduto }}</h1>
                                            <p>R$ {{ number_format($produto->valorProduto, 2, ',', '.') }}</p>
                                            <!-- Formatação do preço -->
                                        </div>
                                        <div class="edit" data-modal-target="#modal-editar-{{ $produto->idProduto }}">
                                            <i class="material-icons">edit</i>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="done"><i class="material-icons">done</i></div>
                                        <div class="details">
                                            <h1>Camisa</h1>
                                            <p>Adicionado ao carrinho</p>
                                        </div>
                                        <div class="remove"><i class="material-icons">clear</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inside">
                                <div class="icon"><i class="material-icons">info_outline</i></div>
                                <div class="contents">
                                    <ul class="product-info">
                                        <li><strong>Tamanho:</strong> {{$produto->tamanho->nomeTamanho}}</li>
                                        <li><strong>Cor:</strong> {{$produto->cor->nomeCor}}</li>
                                        <li><strong>Condição:</strong> {{$produto->condicao->nomeCondicao}}</li>
                                        <li><strong>Categoria:</strong>{{$produto->categoria->nomeCategoriaProduto}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal específico para cada produto -->
                    <div class="modal" id="modal-editar-{{ $produto->idProduto }}">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="{{ route('produtos.update', $produto->idProduto) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf @method('POST')
                                <label for="nome">Nome</label>
                                <input type="text" name="nomeProduto" id="nome-{{ $produto->idProduto }}"
                                    value="{{$produto->nomeProduto}}">
                                <label for="valor">Valor</label>
                                <input type="text" name="valorProduto" id="valor-{{ $produto->idProduto }}"
                                    value="{{$produto->valorProduto}}">
                                <label for="descricao">Descrição</label>
                                <textarea id="descricao-{{ $produto->idProduto }}" name="descricaoProduto"
                                    value="Peça em bom estado, nunca usada">{{$produto->descricaoProduto}}</textarea>
                                <label for="cor">Cor</label>
                                <select id="cor" name="cor">
                                    <option value="">Selecione</option>
                                    @foreach($cores as $cor)
                                    <option value="{{ $cor->idCor }}"
                                        {{ $cor->idCor == $produto->idCor ? 'selected' : '' }}> {{ $cor->nomeCor }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="regiao">Região</label>
                                <select id="regiao" name="regiao">
                                    <option value="">Selecione</option>
                                    @foreach($regioes as $regiao)
                                    <option value="{{ $regiao->idRegiao }}"
                                        {{ $regiao->idRegiao == $produto->idRegiao ? 'selected' : '' }}>
                                        {{ $regiao->nomeRegiao }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="tamanho">Tamanho</label>
                                <select id="tamanho" name="tamanho">
                                    <option value="">Selecione</option>
                                    @foreach($tamanhos as $tamanho)
                                    <option value="{{ $tamanho->idTamanho }}"
                                        {{ $tamanho->idTamanho == $produto->idTamanho ? 'selected' : '' }}>
                                        {{ $tamanho->nomeTamanho }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="genero">Gênero</label>
                                <select id="genero" name="roupa">
                                    <option value="">Selecione</option>
                                    @foreach($generos as $genero)
                                    <option value="{{ $genero->idGenero }}"
                                        {{ $genero->idGenero == $produto->idGenero ? 'selected' : '' }}>
                                        {{ $genero->nomeGenero }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="categoria">Categoria</label>
                                <select id="categoria" name="categoria">
                                    <option value="">Selecione</option>
                                    @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->idCategoriaProduto }}"
                                        {{ $categoria->idCategoriaProduto == $produto->idCategoriaProduto ? 'selected' : '' }}>
                                        {{ $categoria->nomeCategoriaProduto }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="condicao">Condição</label>
                                <select id="condicao" name="condicao">
                                    <option value="">Selecione</option>
                                    @foreach($condicoes as $condicao)
                                    <option value="{{ $condicao->idCondicao }}"
                                        {{ $condicao->idCondicao == $produto->idCondicao ? 'selected' : '' }}>
                                        {{ $condicao->nomeCondicao }}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="image-upload-section">
                                    <label for="image-upload-{{ $produto->idProduto }}" class="image-label">Editar
                                        Imagem
                                    </label>
                                    <input type="file" name="imagemProduto" id="image-upload-{{ $produto->idProduto }}"
                                        value="{{$produto->imagemProduto}}" class="image-input" accept="image/*">
                                    <div class="image-preview">
                                        <img id="image-preview-{{ $produto->idProduto }}"
                                            src="{{ url($produto->imagemProduto) }}" alt="Nenhuma imagem selecionada">
                                    </div>
                                    <p class="image-placeholder">Tudo pronto? Salve as alterações!</p>
                                    <input type="submit" value="Salvar" class="salvar-btn"></input>
                                </div>
                            </form>
                            <div class="image-upload-section">
                                <p class="image-placeholder">Deseja deletar este produto?</p>
                                <form action="{{ route('produtos.destroy', $produto->idProduto) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="deletar-btn"
                                        title="Clique para deletar o produto">Deletar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-arrow right" id="next">&gt;</button>
            </div>
        </div>
        <!-- Modal para editar produto -->
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Abrir modal ao clicar no botão de editar
            document.querySelectorAll('.edit').forEach(button => {
                button.addEventListener('click', function() {
                    const modalId = this.getAttribute('data-modal-target');
                    const modal = document.querySelector(modalId);
                    if (modal) {
                        modal.style.display = 'block'; // Abre o modal
                    }
                });
            });

            // Fechar o modal ao clicar no "x"
            document.querySelectorAll('.close').forEach(closeBtn => {
                closeBtn.addEventListener('click', function() {
                    this.closest('.modal').style.display = 'none'; // Fecha o modal
                });
            });

            // Fechar o modal ao clicar fora dele
            window.addEventListener('click', (event) => {
                const modals = document.querySelectorAll('.modal');
                modals.forEach(modal => {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            });

            // Carousel navigation
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            const carousel = document.getElementById('carousel');

            if (prevButton && nextButton && carousel) {
                prevButton.addEventListener('click', () => {
                    carousel.scrollBy({
                        left: -200,
                        behavior: 'smooth'
                    });
                });

                nextButton.addEventListener('click', () => {
                    carousel.scrollBy({
                        left: 200,
                        behavior: 'smooth'
                    });
                });
            }
        });
        </script>
        <style>
        .carousel-container {
            width: 80%;
            overflow: hidden;
            background-color: #1DA361;
            margin: 40px;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .carousel-container {
            width: 80%;
            overflow: hidden;
            background-color: #617D00;
            /* Verde similar ao da imagem */
            padding: 20px;
            border-radius: 10px;
            position: relative;
        }

        .carousel-wrapper {
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            transition: transform 0.3s ease-in-out;
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
        }

        /* Esconde a barra de rolagem */
        .carousel-wrapper::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }

        .carousel-item {
            min-width: 200px;
            margin: 0 10px;
            flex-shrink: 0;
            text-align: center;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .carousel-item p {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        /* Estilos para as setas de navegação */
        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carousel-arrow:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .carousel-arrow.left {
            left: 10px;
        }

        .carousel-arrow.right {
            right: 10px;
        }

        /* Estilo da seção de upload de imagem */
        .image-upload-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
            text-align: center;
        }

        .image-label {
            display: inline-block;
            background-color: #007700;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .image-label:hover {
            background-color: #005500;
        }

        .image-input {
            display: none;
        }

        /* Estilo da pré-visualização da imagem */
        .image-preview {
            margin-top: 10px;
            width: 150px;
            height: 150px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            /* Escondido inicialmente */
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-placeholder {
            font-size: 14px;
            color: white;
            margin-top: 10px;
        }

        /* Estilo para a lista de informações do produto */
        .product-info {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: white;
            font-size: 14px;
        }

        .product-info li {
            margin: 10px 0;
            padding: 5px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .product-info li strong {
            color: white;
        }

        /* Estilo do modal */
        /* Estilo do modal */
        .modal {
            font-family: "Poppins", sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            transform: scale(0.8);
            transition: opacity 0.3s ease, transform 0.2s ease, visibility 0s 0.2s;
        }

        /* Quando ativo, o modal torna-se visível */
        .modal.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0s;
        }

        .pum {
            font-size: 14px;
            color: white;
            margin-top: 10px;
        }

        .sla {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2px;
        }

        .modal-content {
            background-color: #1DA361;
            margin: 5% auto;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            max-height: 80vh;
            overflow-y: auto;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .modal.active .modal-content {
            opacity: 1;
            transform: translateY(0);
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
        }

        .modal-content label {
            color: white;
            margin: 10px 0 5px;
        }

        .modal-content input,
        .modal-content select,
        .modal-content textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        .modal-content .salvar-btn {
            font-family: "Poppins", sans-serif;
            background-color: white;
            color: #617d00;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        .modal-content .deletar-btn {
            width: 100%;
            font-family: "Poppins", sans-serif;
            background-color: red;
            margin: 5px;
            color: whitesmoke;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilizando a barra de rolagem do modal */
        .modal-content {
            /* Outros estilos já existentes */
            overflow-y: auto;
            /* Garante que a barra de rolagem apareça quando necessário */
            max-height: 80vh;
            /* Altura máxima do modal */
        }

        /* Para navegadores WebKit (Chrome, Safari) */
        .modal-content::-webkit-scrollbar {
            width: 8px;
            /* Largura da barra de rolagem */
            background: rgba(0, 0, 0, 0.1);
            /* Cor de fundo da barra de rolagem */
        }

        .modal-content::-webkit-scrollbar-thumb {
            background: #007700;
            /* Cor da parte que pode ser arrastada */
            border-radius: 4px;
            /* Bordas arredondadas */
        }

        .modal-content::-webkit-scrollbar-thumb:hover {
            background: #005500;
            /* Cor ao passar o mouse */
        }

        /* Para Firefox */
        .modal-content {
            scrollbar-width: thin;
            /* Largura da barra de rolagem */
            scrollbar-color: #007700 rgba(0, 0, 0, 0.1);
            /* Cor da barra e da área de fundo */
        }

        /* Estilo para o botão de editar */
        .edit {
            float: right;
            width: calc(30% - 2px);
            height: 100%;
            background: #f1f1f1;
            transition: background 0.5s;
            border-left: solid thin rgba(0, 0, 0, 0.1);
        }

        .edit i {
            font-size: 30px;
            padding: 30px;
            color: #254053;
            transition: transform 0.5s;
        }

        .edit:hover {
            background: #A6CDDE;
        }

        .edit:hover i {
            transform: translateY(5px);
            color: #00394B;
        }
        </style>
        <script>
        // Abrir modal ao clicar no botão de editar
        document.querySelectorAll('.edit').forEach(button => {
            button.addEventListener('click', function() {
                const modal = document.querySelector(button.getAttribute('data-modal-target'));
                modal.classList.add('active');
            });
        });

        // Fechar modal ao clicar no botão de fechar
        document.querySelectorAll('.close').forEach(button => {
            button.addEventListener('click', function() {
                const modal = button.closest('.modal');
                modal.classList.remove('active');
            });
        });

        // Fechar modal ao clicar fora do modal
        window.addEventListener('click', function(event) {
            const modals = document.querySelectorAll('.modal.active');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.classList.remove('active');
                }
            });
        });
        </script>
</body>

</html>