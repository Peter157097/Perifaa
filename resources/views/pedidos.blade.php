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

    <div class="nav">
        <button onclick="openTab(event, 'pedidos')" class="active">Pedidos</button>
        <button onclick="openTab(event, 'mensagens')">Compras</button>
    </div>


    <div id="pedidos" class="content pedidosActive">
        <div class="pedidosContainer">
            @if(session('is_Cliente'))
                <div class="panelPedidos">
                    <div class="pedidosTitlePanel">
                        Meus pedidos
                    </div>
                    
                    <div class="itensPedidosContainer">
                        <div class="itensWrap">
                            <div class="cardPedido">
                                <div class="imgProdutoPedido">
                                    <img src="{{ url('images/teste.jpg') }}">
                                </div>
                                <div class="infoProdutoPedido">
                                    <div class="infoPedido">
                                        <ul class="labelPedido">
                                            <li class="nomeVendPedido">
                                                <span class="texto-inicial">Vestindo a Quebrada</span>
                                                <a href="/mensagens" class="texto-hover">
                                                    Falar com vendedor
                                                </a>
                                            </li>
                                            <li><span class="nomeItemPedido">Nike Tech Fleece</span></li>
                                            <li>R$49,90</li>

                                        </ul>
                                        <ul class="statusPedido">
                                            <li class="sttsPedido">Status</li>
                                            <li class="situacaoPedido">
                                                Entregue 
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
                            <div class="cardPedido">
                                <div class="imgProdutoPedido">
                                    <img src="{{ url('images/teste.jpg') }}">
                                </div>
                                <div class="infoProdutoPedido">
                                    <div class="infoPedido">
                                        <ul class="labelPedido">
                                            <li class="nomeVendPedido">
                                                <span class="texto-inicial">Vestindo a Quebrada</span>
                                                <a href="/mensagens" class="texto-hover">
                                                    Falar com vendedor
                                                </a>
                                            </li>
                                            <li><span class="nomeItemPedido">Nike Tech Fleece</span></li>
                                            <li>R$49,90</li>
                                        </ul>
                                        <ul class="statusPedido">
                                            <li class="sttsPedido">Status</li>
                                            <li class="situacaoPedido">
                                                Entregue
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
                            <div class="cardPedido">
                                <div class="imgProdutoPedido">
                                    <img src="{{ url('images/teste.jpg') }}">
                                </div>
                                <div class="infoProdutoPedido">
                                    <div class="infoPedido">
                                        <ul class="labelPedido">
                                            <li class="nomeVendPedido">
                                                <span class="texto-inicial">Vestindo a Quebrada</span>
                                                <a href="/mensagens" class="texto-hover">
                                                    Falar com vendedor
                                                </a>
                                            </li>
                                            <li><span class="nomeItemPedido">Nike Tech Fleece</span></li>
                                            <li>R$49,90</li>
                                        </ul>
                                        <ul class="statusPedido">
                                            <li class="sttsPedido">Status</li>
                                            <li class="situacaoPedido">
                                                Entregue
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
                        </div>
                    </div>
                </div>
            @elseif(session('is_vendedor'))
                <div class="panelPedidos">
                    <div class="pedidosTitlePanel">
                        Meus pedidos
                    </div>
                    <div class="itensPedidosContainer">
                        <div class="itensWrap">
                            <div class="cardPedido">
                                <div class="imgProdutoPedido">
                                    <img src="{{ url('images/teste.jpg') }}">
                                </div>
                                <div class="infoProdutoPedido">
                                    <div class="infoPedido">
                                        <ul class="labelPedido">
                                            <li>Vestindo a Quebrada</li>
                                            <li>Nike Tech Fleece</li>
                                            <li>R$49,90</li>
                                        </ul>
                                        <ul class="statusPedido">
                                            <li class="sttsPedido">Status</li>
                                            <li class="situacaoPedido">
                                                Entregue
                                                <i class="fa-solid fa-circle-check"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="panelPedidos">
                    <div class="pedidosTitlePanel">
                        Meus pedidos
                    </div>
                    <div class="itensPedidosContainer">
                        <div class="containerNoRegister">
                            <div class="noRegisterImg">
                                <img src="{{url('images/msgSemRegistro.png')}}" class="noContentImg">
                            </div>
                            <div class="noRegisterMsg">
                                <h4>Quem é você?</h4>
                                <p>Faça
                                    <a href="#">
                                        <button class="abrir-modal" data-modal="modal-1">
                                            login
                                        </button>
                                    </a>
                                    ou
                                    <a href="#">
                                        <button class="abrir-modal" data-modal="modal-2">
                                            cadastre-se
                                        </button>
                                    </a>para ver seus
                                    <span>
                                        pedidos.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div id="mensagens" class="content">
        <div class="pedidosContainer">
            <div class="containerMensagens">
                @if(session('is_Cliente'))
                    <div class="panelPedidos">
                        <div class="pedidosTitlePanel">
                            Suas compras
                        </div>
                        
                        <div class="itensPedidosContainer">
                            <div class="itensWrap">
                                <div class="cardPedido">
                                    <div class="imgProdutoPedido">
                                        <img src="{{ url('images/teste.jpg') }}">
                                    </div>
                                    <div class="infoProdutoPedido">
                                        <div class="infoPedido">
                                            <ul class="labelPedido">
                                                <li class="nomeVendPedido">
                                                    <span class="texto-inicial">Vestindo a Quebrada</span>
                                                    <a href="/mensagens" class="texto-hover">
                                                        Falar com vendedor
                                                    </a>
                                                </li>
                                                <li>Nike Tech Fleece</li>
                                                <li>R$49,90</li>
                                            </ul>
                                            <ul class="statusPedido">
                                                <li class="sttsPedido">Status</li>
                                                <li class="situacaoPedido">
                                                    Entregue
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
                                <div class="cardPedido">
                                    <div class="imgProdutoPedido">
                                        <img src="{{ url('images/teste.jpg') }}">
                                    </div>
                                    <div class="infoProdutoPedido">
                                        <div class="infoPedido">
                                            <ul class="labelPedido">
                                                <li class="nomeVendPedido">
                                                    <span class="texto-inicial">Vestindo a Quebrada</span>
                                                    <a href="/mensagens" class="texto-hover">
                                                        Falar com vendedor
                                                    </a>
                                                </li>
                                                <li>Nike Tech Fleece</li>
                                                <li>R$49,90</li>
                                            </ul>
                                            <ul class="statusPedido">
                                                <li class="sttsPedido">Status</li>
                                                <li class="situacaoPedido">
                                                    Entregue
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
                                <div class="cardPedido">
                                    <div class="imgProdutoPedido">
                                        <img src="{{ url('images/teste.jpg') }}">
                                    </div>
                                    <div class="infoProdutoPedido">
                                        <div class="infoPedido">
                                            <ul class="labelPedido">
                                                <li class="nomeVendPedido">
                                                    <span class="texto-inicial">Vestindo a Quebrada</span>
                                                    <a href="/mensagens" class="texto-hover">
                                                        Falar com vendedor
                                                    </a>
                                                </li>
                                                <li>Nike Tech Fleece</li>
                                                <li>R$49,90</li>
                                            </ul>
                                            <ul class="statusPedido">
                                                <li class="sttsPedido">Status</li>
                                                <li class="situacaoPedido">
                                                    Entregue
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
                            </div>
                        </div>
                    </div>
                @elseif(session('is_vendedor'))
                    <div class="panelPedidos">
                        <div class="pedidosTitlePanel">
                            Suas compras
                        </div>
                        <div class="itensPedidosContainer">
                            <div class="itensWrap">
                                <div class="cardPedido">
                                    <div class="imgProdutoPedido">
                                        <img src="{{ url('images/teste.jpg') }}">
                                    </div>
                                    <div class="infoProdutoPedido">
                                        <div class="infoPedido">
                                            <ul class="labelPedido">
                                                <li>Vestindo a Quebrada</li>
                                                <li>Nike Tech Fleece</li>
                                                <li>R$49,90</li>
                                            </ul>
                                            <ul class="statusPedido">
                                                <li class="sttsPedido">Status</li>
                                                <li class="situacaoPedido">
                                                    Entregue
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="panelPedidos">
                        <div class="pedidosTitlePanel">
                            Seus pedidos
                        </div>
                        <div class="itensPedidosContainer">
                            <div class="containerNoRegister">
                                <div class="noRegisterImg">
                                    <img src="{{url('images/msgSemRegistro.png')}}" class="noContentImg">
                                </div>
                                <div class="noRegisterMsg">
                                    <h4>Quem é você?</h4>
                                    <p>Faça
                                        <a href="#">
                                            <button class="abrir-modal" data-modal="modal-1">
                                                login
                                            </button>
                                        </a>
                                        ou
                                        <a href="#">
                                            <button class="abrir-modal" data-modal="modal-2">
                                                cadastre-se
                                            </button>
                                        </a>para ver seus
                                        <span>
                                            pedidos.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function openTab(event, tabName) {
            // Remove a classe 'active' de todas as abas e conteúdos
            const tabs = document.querySelectorAll('.nav button');
            const contents = document.querySelectorAll('.content');

            tabs.forEach(tab => tab.classList.remove('pedidosActive'));
            contents.forEach(content => content.classList.remove('pedidosActive'));

            // Adiciona a classe 'active' na aba e conteúdo selecionados
            event.currentTarget.classList.add('pedidosActive');
            const currentContent = document.getElementById(tabName);
            currentContent.classList.add('pedidosActive');
        }
    </script>
    <!--Import do javascript-->
    <script src="{{ url('js/script.js') }}"></script>
    <!--Imports do bootstrap do body-->
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
<!--Fim do body-->

</html>
