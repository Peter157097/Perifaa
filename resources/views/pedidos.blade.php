@include('includes.head')

<!--Começo do body-->

<body>
    @include('includes.header')

    @include('includes.nav')

    <main>
        <div class="pedidosContainer">
            <div class="containerMensagens">
                @if(session('is_Cliente'))
                    <div class="panelPedidos">
                        <div class="pedidosTitlePanel">
                            Meus pedidos
                        </div>
                        <div class="optPedidos">
                            <a href="contato">
                                <i class="fa-solid fa-phone"></i>
                                Suporte
                            </a>
                            <a href="favorites">
                                <i class="fa-solid fa-heart"></i>
                                Favoritos
                            </a>
                            <a href="perfil">
                                <i class="fa-solid fa-house"></i>
                                Meus endereços
                            </a>
                            <a href="centralAjuda">
                                <i class="fa-solid fa-circle-question"></i>
                                Central de ajuda
                            </a>
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
                                                <li class="situacaoPedido">Enviado</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ajudaPedido">
                                        <ul class="listAjuda">
                                            <li><i class="fa-solid fa-circle-info"></i>Detalhes</li>
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
                                                <li class="situacaoPedido">Enviado</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ajudaPedido">
                                        <ul class="listAjuda">
                                            <li><i class="fa-solid fa-circle-info"></i>Detalhes</li>
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
                                                <li class="situacaoPedido">Enviado</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ajudaPedido">
                                        <ul class="listAjuda">
                                            <li><i class="fa-solid fa-circle-info"></i>Detalhes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif(session('is_vendedor'))
                    <div class="panelPedidos">
                        <div class="pedidosTitlePanel">
                            Seus pedidos
                        </div>
                        <div class="itensPedidosContainer">
                            <div class="itensWrap">
                                <!-- Card de exemplo para quando o cliente não está logado -->
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
                                                <li class="situacaoPedido">Enviado</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Adicione mais cards se necessário -->
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
                                    <<h4>Quem é você?</h4>
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
    </main>

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