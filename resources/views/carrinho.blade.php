@include('includes.head')
@include('includes.header')
@include('includes.nav')
<style>
    /* Estilo para carrinho vazio */
    .containerCarrinhoVazio {
        display: flex;
        align-items: first baseline;
        justify-content: flex-start;
        flex-direction: column;
        padding: 15vh;
        font-family: "Poppins", sans-serif;
        font-size: 2vh;
    }

    .linkHomeCarrinho {
        text-decoration: none;
        color: #5e3e24;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .linkHomeCarrinho:hover {
        transform: scale(1.1);
        color: #5e3e24;
    }

    .tituloCarrinhoVazio {
        white-space: nowrap;
        font-weight: 700;
        font-style: oblique;
    }

    .containerCarrinho {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
    }

    .checkoutContainer h3 {
        font-size: 2.6vh;
    }

    .parteFinalizarContainer {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #ffff;
        width: 100%;
        margin: 10px;
        border-radius: 10px 20px 30px 40px;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .botaoFinalizar {
        bottom: 20px;
        right: 20px;
    }

    .checkoutContainer {
        padding: 4px;
        padding-top: 20px;
    }

    .linha {
        background-color: #5e3e24;
        border: none;
        border-top: 1px solid #ccc;
        width: 90%;
    }

    .parteSubtotal h2 {
        font-size: 2vh;
    }

    .parteSubtotal {
        padding: 6px;
        display: flex;
        flex-direction: row;
        width: 90%;
        justify-content: space-between;
        align-items: center;
    }

    .button {
        background-color: #5e3e24;
        border: 1px solid transparent;
        color: white;
        padding: 10px 24px;
        font-size: 14px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-weight: 500;
        transition: background-color 0.3s, transform 0.2s, border-color 0.3s;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .button:hover {
        background-color: #A68064;
        border-color: #0056b3;
    }

    .button:active {
        transform: scale(0.98);
    }

    .button:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
    }

    .imagemProduto {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }

    .nomeProduto {
        font-weight: 600;
        font-size: 2vh;
    }

    .checkbox {
        margin-right: 10px;
        background-color: #0056b3;
    }

    .containerCardCarrinho {
        width: 100%;
        background-color: #f8f8f8;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        padding: 20px;
    }

/* Estilos gerais - Mantém o design no desktop */
.cardCaPt1 {
    display: flex;
    justify-content: space-between;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    align-items: center;
    padding: 10px;
    flex-wrap: wrap; /* Permite ajuste de layout para telas menores */
    gap: 10px; /* Adiciona espaçamento entre os elementos */
    overflow: hidden; /* Evita que elementos saiam do card */
    max-width: 100%; /* Garante que o card não exceda a largura disponível */
    box-sizing: border-box; /* Inclui padding e bordas no cálculo da largura */
}

.partbrecho {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 1vh;
}

.store-icon {
    margin-right: 8px; /* Ajusta o espaçamento ao lado do ícone */
    color: #737373;
    font-size: 30px;
}

.cardCaPt2 {
    display: flex;
    flex-direction: row;
    gap: 20px; /* Espaçamento entre os itens */
    flex-wrap: wrap; /* Permite quebra de linha para telas menores */
    align-items: flex-start;
    padding: 10px;
    overflow: hidden; /* Evita overflow do conteúdo */
    max-width: 100%; /* Garante que o card não exceda a largura disponível */
    box-sizing: border-box; /* Inclui padding e bordas no cálculo da largura */
}

.detalhesProduto {
    display: flex;
    flex-direction: column;
    gap: 0.5vh; /* Ajuste de espaçamento entre elementos */
    flex: 1; /* Permite que o elemento se expanda */
    justify-content: center;
    align-items: flex-start;
    min-width: 0; /* Previne overflow horizontal dos filhos */
    box-sizing: border-box;
}

.parteDetalhesBanco {
    display: flex;
    flex-direction: row;
    gap: 5px; /* Ajusta o espaçamento entre textos */
    padding: 1vh;
    font-size: 1.8vh; /* Ajuste no tamanho da fonte */
    flex-wrap: wrap; /* Permite quebras de linha se necessário */
}

.titulosDetalhes {
    display: flex;
    flex-direction: row;
    gap: 10px;
    padding: 1vh;
    flex-wrap: wrap; /* Permite quebras de linha se necessário */
}

.titulosDetalhes h5 {
    font-size: 2.5vh; /* Ajuste da fonte */
    margin: 0; /* Remove espaçamento extra */
}

/* Media Queries para responsividade - Aplica apenas para telas menores */
@media (max-width: 768px) {
    .cardCaPt1, .cardCaPt2 {
        flex-direction: column; /* Muda para coluna em telas menores */
        align-items: center; /* Centraliza os itens */
        text-align: center; /* Centraliza o texto */
        gap: 15px; /* Ajusta o espaçamento entre os elementos */
    }

    .detalhesProduto {
        align-items: center; /* Centraliza o conteúdo */
        width: 100%; /* Largura total para melhor ajuste */
        margin-bottom: 15px; /* Espaçamento entre as seções */
        box-sizing: border-box;
    }

    .titulosDetalhes,
    .parteDetalhesBanco {
        flex-direction: column; /* Alinha em coluna em telas menores */
        align-items: center;
        padding: 1vh; /* Ajusta o padding para evitar excesso de espaço */
    }

    .titulosDetalhes h5,
    .parteDetalhesBanco h6 {
        font-size: 2.2vh; /* Diminui o tamanho da fonte */
        margin: 0; /* Remove margens extras */
    }

    .imagemProdutoCarrinho {
        width: 80%; /* Reduz a largura da imagem em telas menores */
        height: auto; /* Mantém a proporção da imagem */
    }
    .containerCardCarrinho{
        width: 200%;
        align-self: center;
    }
}

/* Mantém o estilo original para telas grandes */
@media (min-width: 1200px) {
    .cardCaPt2 {
        gap: 30px; /* Aumenta o espaço entre os itens em telas grandes */
    }

    .titulosDetalhes h5 {
        font-size: 3vh; /* Ajusta o tamanho da fonte */
    }

    .parteDetalhesBanco h6 {
        font-size: 2vh; /* Ajuste do tamanho da fonte */
    }
}

</style>
</head>

<body>


    <div class="containerCarrinhoVazio">
        <!-- CARRINHO VAZIO -->
        <div class="tituloCarrinhoVazio">
            CARRINHO
        </div>
        <br>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @if($carrinho->isEmpty())
                <div class="tituloCarrinhoVazio">
                    <h3>Tá meio deserto aqui...</h3>
                </div>
                <div class="textoCarrinhoVazio">
                    Parece que você não adicionou nada no carrinho até o momento.
                    <br>
                    Continue procurando algo do seu interesse!
                </div>
                <br>
                <a href="produtos" class="linkHomeCarrinho">
                    Voltar às compras
                </a>
            </div>
            <div class="containerCarrinho">
        @else


            <!-- card carrinho -->
            <div class="containerCardCarrinho">
                <div class="cardCaPt1">
                    <div class="partbrecho">
                        <i class="fa-solid fa-shop store-icon"></i>
                        <h4>Brechó do Jhow</h4> <!-- nome do brecho -->
                    </div>
                    <div class="partlixeira">
                        <i class="fa-solid fa-trash trash-icon"></i>

                    </div>
                </div>
                <hr class="linha">

                <div class="cardCaPt2">
                    <div class="parteImagemItem">
                        <img src="{{url('images/card-image-five.png')}}" alt="Imagem do Produto"
                            class="imagemProdutoCarrinho">

                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Peça</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>Blusa Nike Dry-Fit</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Peça</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>Blusa Nike Dry-Fit</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Estado</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>Blusa Nike Dry-Fit</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Variação</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>Azul e branco</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Tamanho</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>M</h6>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo do carrinho -->
                <!-- @foreach ($carrinho as $item)
                                            <div class="parteFinalizarContainer">
                                                <div class="checkoutContainer">
                                                    <h3>CHECKOUT</h3>
                                                </div>
                                                <hr class="linha">

                                                <div class="parteSubtotal">
                                                    <input type="checkbox" class="checkbox" data-preco="{{ $item->product->valorProduto }}">
                                                    <img src="{{ $item->product->imagemProduto }}" alt="Imagem do Produto" class="imagemProduto">
                                                    <div class="detalhesProduto">
                                                        <div class="nomeProduto">{{ $item->product->nomeProduto }}</div>
                                                        <div class="precoCarrinho">
                                                            {{ $item->product->valorProduto }}
                                                        </div>
                                                    </div>
                                                    <div class="botaoFinalizar">
                                                        <input type="submit" value="Finalizar" class="button">
                                                    </div>
                                                    <form action="{{ route('carrinho.destroy', $item->idProduto) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Remover</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @endforeach

                                            <div class="parteSubtotal">
                                                <h3>Total Selecionado: R$ <span id="totalSelecionado">0</span></h3>
                                            </div> -->

            </div>
        @endif


        <!-- Import do javascript -->
        <script src="{{('js/script.js')}}"></script>
        <!-- Imports do bootstrap do body -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            crossorigin="anonymous"></script>

        <script>
            document.querySelectorAll('.checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    let total = 0;
                    document.querySelectorAll('.checkbox:checked').forEach(checked => {
                        total += parseFloat(checked.getAttribute('data-preco'));
                    });
                    document.getElementById('totalSelecionado').textContent = total.toFixed(2);
                });
            });
        </script>
</body>

</html>
@include('includes.footer')
