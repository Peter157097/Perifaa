<html>
<style>
    .linkHomeCarrinho {
        position: relative;
        z-index: 10;
        /* Garanta que o link esteja no topo */
    }

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
        padding-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
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
        font-size: 12px;
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
        /* Ajuste conforme necessário */
        height: 100px;
        /* Deve ser igual à largura para manter a proporção 1:1 */
        object-fit: cover;
        /* Para manter a proporção e cortar a imagem se necessário */
        border-radius: 10px;
        /* Adiciona cantos arredondados */
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
        width: 80%;
        gap: 10px;
        background-color: #f8f8f8;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin: 20px;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .containerCardCarrinho:hover {
        transform: scale(1.05);
        /* Aumenta levemente o tamanho do container */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        /* Adiciona uma sombra mais forte */
        background-color: #fafafa;
        /* Alteração leve na cor do fundo */
    }

    /* Estilos gerais - Mantém o design no desktop */
    .cardCaPt1 {
        display: flex;
        justify-content: space-between;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        align-items: center;
        padding: 10px;
        flex-wrap: wrap;
        gap: 10px;
        overflow: hidden;
        max-width: 100%;
        box-sizing: border-box;
        border-radius: 10px 0px 30px 40px;

    }

    .partbrecho {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 1vh;
    }

    .store-icon {
        margin-right: 8px;
        /* Ajusta o espaçamento ao lado do ícone */
        color: #737373;
        font-size: 20px;
    }

    .cardCaPt2 {
        display: flex;
        flex-direction: row;
        gap: 20px;
        /* Espaçamento entre os itens */
        flex-wrap: wrap;
        /* Permite quebra de linha para telas menores */
        align-items: flex-start;
        padding: 10px;
        overflow: hidden;
        /* Evita overflow do conteúdo */
        max-width: 100%;
        /* Garante que o card não exceda a largura disponível */
        box-sizing: border-box;
        /* Inclui padding e bordas no cálculo da largura */
    }

    .detalhesProduto {
        display: flex;
        flex-direction: column;
        gap: 0.5vh;
        /* Ajuste de espaçamento entre elementos */
        flex: 1;
        /* Permite que o elemento se expanda */
        justify-content: center;
        align-items: flex-start;
        min-width: 0;
        /* Previne overflow horizontal dos filhos */
        box-sizing: border-box;
    }

    .parteDetalhesBanco {
        display: flex;
        flex-direction: row;
        gap: 5px;
        /* Ajusta o espaçamento entre textos */
        padding: 1vh;
        font-size: 1.8vh;
        /* Ajuste no tamanho da fonte */
        flex-wrap: wrap;
        /* Permite quebras de linha se necessário */
    }

    .titulosDetalhes {
        display: flex;
        flex-direction: row;
        gap: 10px;
        padding: 1vh;
        flex-wrap: wrap;
        /* Permite quebras de linha se necessário */
    }

    .titulosDetalhes h5 {
        font-size: 2.5vh;
        /* Ajuste da fonte */
        margin: 0;
        /* Remove espaçamento extra */
    }

    /* Media Queries para responsividade - Aplica apenas para telas menores */
    @media (max-width: 768px) {

        .cardCaPt1,
        .cardCaPt2 {
            flex-direction: column;
            /* Muda para coluna em telas menores */
            align-items: center;
            /* Centraliza os itens */
            text-align: center;
            /* Centraliza o texto */
            gap: 15px;
            /* Ajusta o espaçamento entre os elementos */
        }

        .detalhesProduto {
            align-items: center;
            /* Centraliza o conteúdo */
            width: 100%;
            /* Largura total para melhor ajuste */
            margin-bottom: 15px;
            /* Espaçamento entre as seções */
            box-sizing: border-box;
        }

        .titulosDetalhes,
        .parteDetalhesBanco {
            flex-direction: column;
            /* Alinha em coluna em telas menores */
            align-items: center;
            padding: 1vh;
            /* Ajusta o padding para evitar excesso de espaço */
        }

        .titulosDetalhes h5,
        .parteDetalhesBanco h6 {
            font-size: 2.2vh;
            /* Diminui o tamanho da fonte */
            margin: 0;
            /* Remove margens extras */
        }

        .imagemProdutoCarrinho {
            width: 100px;
            /* Ajuste conforme necessário */
            height: 100px;
            /* Deve ser igual à largura para manter a proporção 1:1 */
            object-fit: cover;
            /* Para manter a proporção e cortar a imagem se necessário */
            border-radius: 10px;
            /* Adiciona cantos arredondados */
        }

        .containerCardCarrinho {
            width: 200%;
            align-self: center;
        }
    }

    /* Mantém o estilo original para telas grandes */
    @media (min-width: 1200px) {
        .cardCaPt2 {
            gap: 30px;
            /* Aumenta o espaço entre os itens em telas grandes */
        }

        .titulosDetalhes h5 {
            font-size: 3vh;
            /* Ajusta o tamanho da fonte */
        }

        .parteDetalhesBanco h6 {
            font-size: 2vh;
            /* Ajuste do tamanho da fonte */
        }
    }

    .checkout-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 90%;
        margin: 5vh;
    }

    .checkout-card {
        background-color: #fff;
        border-radius: 15px;
        padding: 25px;
        width: 90%;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .checkout-header h2 {
        font-size: 24px;
        font-weight: 600;
        color: #444;
        margin-bottom: 20px;
    }

    .checkout-body {
        text-align: left;
    }

    .checkout-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .subtotal-value {
        font-weight: bold;
        color: #222;
    }

    hr {
        border: 1px solid #e0e0e0;
        margin-bottom: 20px;
    }

    .checkout-footer {
        text-align: center;
    }

    .finalize-btn {
        background-color: #c1a57a;
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
    }

    .finalize-btn:hover {
        background-color: #523b1d;
        box-shadow: 0 5px 15px rgba(84, 92, 246, 0.3);
    }
</style>
</head>

@include('includes.head')
@include('includes.header')
@include('includes.nav')

<!-- CARRINHO VAZIO -->


@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

@if($carrinho->isEmpty())
    <div class="containerCarrinhoVazio">

        <div class="tituloCarrinhoVazio">
            CARRINHO
        </div>
        <br>
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
@else
    <div class="containerCarrinho">
        <div class="tituloCarrinhoVazio">
            CARRINHO
        </div>
        <br>

        <!-- card carrinho -->
        @foreach ($carrinho as $item)
            <div class="containerCardCarrinho">
                <div class="cardCaPt1">
                    <div class="partbrecho">
                        <i class="fa-solid fa-shop store-icon"></i>
                        <h4>{{ $item->product->vendedor->nomeVendedor }}</h4> <!-- nome do brecho -->
                    </div>
                    <div class="partlixeira">
                        <form action="{{ route('carrinho.destroy', $item->idProduto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                <i class="fa-solid fa-trash trash-icon"></i>
                            </button>
                        </form>



                    </div>
                </div>
                <hr class="linha">

                <div class="cardCaPt2">
                    <div class="parteImagemItem">
                        <img src="{{ $item->product->imagemProduto }}" alt="Imagem do Produto" class="imagemProduto">

                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Peça</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->nomeProduto }}</h6>
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
                            <h5>Cor</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->cor->nomeCor }}</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Tamanho</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->tamanho->nomeTamanho }}</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Valor</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->valorProduto }}</h6>
                        </div>
                    </div>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </div>

            </div>



        @endforeach
        <div class="checkout-wrapper">
            <div class="checkout-card">
                <div class="checkout-header">
                    <h2>Resumo do Pedido</h2>
                </div>
                <div class="checkout-body">
                    <div class="checkout-info">
                        <p>Subtotal</p>
                        <p class="subtotal-value">R$138,00</p>
                    </div>
                    <hr>
                    <div class="checkout-footer">
                        <button class="finalize-btn">Finalizar Compra</button>
                    </div>
                </div>
            </div>
        </div>

@endif
</div>

<!-- Import do javascript -->
<script src="{{('js/script.js')}}"></script>
<!-- Imports do bootstrap do body -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

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
