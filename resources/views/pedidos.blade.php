@include('includes.head')

<!--Começo do body-->

<style>
    /* Reset para remover o foco padrão */
    button:focus {
        outline: none;
    }

    /* Estilo da barra de navegação */
    .nav {
        display: flex;
        border-bottom: 1px solid #846E49;
        background-color: #f5f5f5;
    }

    .nav button {
        padding: 10px 20px;
        border: none;
        background-color: transparent;
        color: #523b1d;
        cursor: pointer;
        font-size: 16px;
        position: relative;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav button.pedidosActive {
        color: #523b1d;
    }

    .nav button:hover {
        color: #806544;
    }

    .nav button.pedidosActive::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 3px;
        width: 100%;
        background-color: #523b1d;
        animation: expand 0.4s ease forwards;
    }

    @keyframes expand {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    /* Estilo e animação para o conteúdo */

    .content {
        position: absolute;
        left: 0;
        width: 100%;
        opacity: 0;
        transform: translateX(0px);
        transition: opacity 0.4s ease, transform 0.4s ease;
        visibility: hidden;
        /* Esconde o conteúdo fora da área visível */
    }

    .content.pedidosActive {
        opacity: 1;
        transform: translateX(0);
        visibility: visible;
        padding: 0;
    }
</style>

<body>

    @include('includes.header')

    @include('includes.nav')
    <div id="pedidos" class="content pedidosActive">
        <div class="pedidosContainer">
            <div class="panelPedidos">
                <div class="pedidosTitlePanel">
                    Meus pedidos
                </div>

                <div class="itensPedidosContainer">
                    <div class="itensWrap">
                        @if ($vendas->isEmpty())
                            <div class="pedidoVazioContainer">
                                <div class="pedidoVazioIcon">
                                    <i>Ops...</i>
                                </div>
                                <div class="pedidoVazioText">
                                    <p>Parece que você ainda não fez um pedido </p>
                                    <p>Relaxa, o mar tá cheio de peixe...</p>
                                </div>
                                <a href="produtos" class="linkHomeCarrinho">Voltar às compras</a>
                            </div>
                        @else
                            @foreach($vendas as $venda)

                                <div class="cardPedido">
                                    <div class="imgProdutoPedido">
                                        <img src="{{ url($venda->produto->imagemProduto) }}">
                                    </div>
                                    <div class="infoProdutoPedido">
                                        <div class="infoPedido">
                                            <ul class="labelPedido">
                                                <li class="nomeVendPedido">
                                                    <span class="texto-inicial">{{$venda->produto->nomeProduto}}</span>

                                                </li>

                                                <li>R$ {{ number_format($venda->produto->valorProduto, 2, ',', '.') }}</li>
                                            </ul>
                                            <ul class="statusPedido">
                                                <li class="sttsPedido">Status</li>
                                                <li class="situacaoPedido">
                                                    @if($venda->idLoc == 0)
                                                        Pagamento realizado
                                                    @elseif($venda->idLoc == 1)
                                                        Enviado - Código: {{ $venda->codigoCorreio ?? 'N/A' }}
                                                    @else
                                                        Pagamento Recusado
                                                    @endif
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ajudaPedido">
                                        <ul class="listAjuda">
                                            <li><i class="fa-solid fa-circle-info"></i> Detalhes</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>