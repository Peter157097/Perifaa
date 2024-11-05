@include('includes.head')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Etapas de Pagamento</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        text-align: center;
        align-items: center;
    }

    .nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
    }

    .step {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #bfbfbf;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        color: white;
        transition: background-color 0.3s, transform 0.3s;
    }

    .circle:hover {
        transform: scale(1.1);
    }

    .circle.step-active {
        background-color: #8a6d3b;
        transform: scale(1.2);
        /* Aumenta o ícone ativo */
    }

    .divider {
        width: 40px;
        height: 4px;
        background-color: #666;
        margin: 0 10px;
    }

    .content {
        display: none;
        margin-top: 20px;
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.5s ease;
        transform: translateY(20px);
        /* Inicia um pouco abaixo */
    }

    .content.step-active {
        display: block;
        opacity: 1;
        transform: translateY(0);
        /* Move para a posição final */
    }

    /* Card do formulário */
    .form-card {
        width: 300px;
        padding: 20px;
        background-color: #f0ebe3;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-card h2 {
        font-size: 20px;
        color: #3b3b3b;
    }

    /* Estilos dos campos do formulário */
    .form-card input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-card input[type="text"]:focus {
        border-color: #a38968;
        box-shadow: 0px 0px 5px rgba(163, 137, 104, 0.5);
        outline: none;
    }

    .form-card .double-input {
        display: flex;
        gap: 10px;
    }

    .form-card .double-input input[type="text"] {
        width: 100%;
    }

    /* Botão de enviar */
    .form-card button {
        padding: 10px;
        font-size: 16px;
        color: #fff;
        background-color: #a38968;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-card button:hover {
        background-color: #8d7356;
    }

    /* Estilos gerais */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
    }

    /* Card do formulário */
    .form-card {
        width: 100%;
        padding: 25px;
        background-color: #f5f0e8;
        border-radius: 10px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        gap: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.15);
    }

    .form-card h2 {
        font-size: 22px;
        color: #4e3629;
        /* Marrom escuro */
        text-align: center;
        margin-bottom: 15px;
    }

    /* Estilos dos campos do formulário */
    .form-card input[type="text"] {
        width: 100%;
        padding: 12px;
        border: 2px solid #d1c3b4;
        /* Marrom claro */
        border-radius: 8px;
        font-size: 15px;
        color: #4e3629;
        /* Marrom escuro */
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-card input[type="text"]:focus {
        border-color: #b08968;
        /* Marrom médio */
        box-shadow: 0 0 8px rgba(176, 137, 104, 0.4);
        outline: none;
    }

    .form-card input[type="text"]::placeholder {
        color: #a8998f;
        /* Marrom suave */
        opacity: 0.7;
    }

    .form-card .double-input {
        display: flex;
        gap: 10px;
    }

    .form-card .double-input input[type="text"] {
        width: 100%;
    }

    /* Botão de enviar */
    .form-card button {
        padding: 8px 12px;
        font-size: 14px;
        color: #fff;
        background-color: #8c6a4e;
        /* Marrom mais escuro */
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        align-self: flex-end;
    }

    .form-card button:hover {
        background-color: #7a5d44;
        /* Tom de marrom mais escuro ao hover */
        transform: scale(1.05);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .form-card button:active {
        transform: scale(0.95);
        background-color: #6c523c;
        /* Cor mais escura ao clicar */
    }

    .pagamCarrinho {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }







    .card-container {
        background-color: #f2efe9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        display: flex;
        gap: 20px;
        align-items: flex-start;
        flex-direction: column;
    }

    .card-container:hover {
        transform: scale(1.02);
    }

    .card-section {
        flex: 1;
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: box-shadow 0.3s;
    }

    .card-section:hover {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-option {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        font-size: 14px;
        cursor: pointer;
        padding: 10px;
        border-radius: 8px;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .card-option:hover {
        background-color: #e0d7cc;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-option input[type="radio"] {
        margin-right: 8px;
        accent-color: #a2856d;
        transition: transform 0.3s ease;
    }

    .card-option input[type="radio"]:checked {
        transform: scale(1.2);
    }

    .card-delivery-date,
    .card-complemento {
        font-size: 12px;
        color: #666;
    }

    .card-add-address {
        font-size: 14px;
        color: #a2856d;
        text-decoration: underline;
        cursor: pointer;
        display: flex;
        margin-top: 5px;
        transition: color 0.3s;
    }

    .card-add-address:hover {
        color: #8b6f59;
    }

    .pt1 {
        display: flex;
        gap: 5px;
        flex-direction: row;
    }



    @media (max-width: 768px) {
        .card-container {
            padding: 10px;
            gap: 10px;
        }

        .pt1 {
            flex-direction: column;
        }

        .card-section {
            padding: 15px;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 16px;
        }

        .card-option {
            font-size: 13px;
            padding: 8px;
        }

        .card-option input[type="radio"] {
            transform: scale(1);
        }

        .card-add-address {
            font-size: 13px;
        }
    }

    html {
        scroll-behavior: smooth;
    }

    ul {
        list-style-type: none;
        /* Remove as bolinhas */
        padding: 0;
        /* Remove o preenchimento padrão */
        margin: 0;
        /* Remove a margem padrão */
    }

    /* Estilos resumidos para a seção de pagamento e QR Code */
    .form-section,
    .qr-section {
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .hidden {
        opacity: 0;
        transform: translateY(-20px);
        pointer-events: none;
    }

    .payment-methods label {
        cursor: pointer;
        font-size: 14px;
        color: #4a4a4a;
    }

    .finalize-button {
        background-color: #a88b60;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    .qr-section {
        display: none;
        text-align: center;
    }

    .timer {
        font-size: 24px;
        font-weight: bold;
    }

    .back-link {
        color: #4a4a4a;
        text-decoration: none;
    }

    .container {
        display: flex;
        gap: 20px;
        padding: 20px;
        background-color: #f2ede4;
        transition: opacity 0.5s ease;
    }

    .form-section,
    .summary-section,
    .qr-section {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .form-section {
        flex: 1;
        opacity: 1;
        transform: translateY(0);
    }

    .hidden {
        opacity: 0;
        transform: translateY(-20px);
        pointer-events: none;
    }

    .summary-section {
        width: 250px;
    }

    .form-section h2,
    .summary-section h2,
    .qr-section h2 {
        margin-top: 0;
        font-size: 18px;
        color: #4a4a4a;
    }

    .payment-methods {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .payment-methods label {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #4a4a4a;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .payment-methods label:hover {
        color: #a88b60;
    }

    .payment-methods input {
        margin-right: 5px;
    }

    .form-group {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-group input:focus {
        background-color: #f5f5f5;
        box-shadow: 0 0 5px rgba(168, 139, 96, 0.5);
        outline: none;
    }

    .pix-message {
        display: none;
        font-size: 14px;
        color: #4a4a4a;
        line-height: 1.5;
        transition: opacity 0.4s ease;
    }

    .summary-section table {
        width: 100%;
        font-size: 14px;
        color: #4a4a4a;
        margin-bottom: 20px;
    }

    .summary-section table td {
        padding: 5px 0;
    }

    .summary-section table td:nth-child(2) {
        text-align: right;
    }

    .summary-section .total {
        font-weight: bold;
    }

    .finalize-button {
        width: 100%;
        padding: 10px;
        background-color: #a88b60;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .finalize-button:hover {
        background-color: #8a704f;
    }

    .qr-section {
        display: none;
        text-align: center;
        font-size: 14px;
        color: #4a4a4a;
    }

    .qr-section img {
        margin-top: 10px;
        width: 200px;
        height: 200px;
    }

    .qr-section p {
        margin-top: 10px;
        line-height: 1.5;
    }

    .timer {
        font-size: 24px;
        font-weight: bold;
    }

    .back-link {
        margin-top: 20px;
        display: inline-block;
        font-size: 14px;
        color: #4a4a4a;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .back-link:hover {
        color: #a88b60;
        text-decoration: underline;
    }

    /* Media Query para dispositivos móveis */
    @media (max-width: 768px) {

        /* Ajuste do layout geral */
        .payment-form-section,
        .qr-code-section {
            padding: 20px;
            font-size: 14px;
        }

        /* Ajusta o layout dos inputs para ocupar 100% da largura em telas menores */
        .payment-form-fields .payment-input-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .payment-form-fields .payment-input-group input {
            width: 100%;
        }

        /* Ajuste dos botões e links */
        .payment-finalize-button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        /* Centralizar conteúdo da seção de QR Code */
        .qr-code-section {
            text-align: center;
            padding: 20px;
        }

        .qr-timer {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .qr-back-link {
            display: inline-block;
            margin-top: 15px;
            font-size: 16px;
        }

        /* Ajuste de fontes e espaçamentos */
        .payment-options label {
            font-size: 16px;
            margin-right: 10px;
        }

        .pix-instructions p {
            font-size: 14px;
            line-height: 1.5;
        }

        .container {
            flex-direction: column;
        }

        .summary-section {
            width: 100%;
        }
    }
</style>
</head>

<body>
    @include('includes.header')
    @include('includes.nav')

    <div class="pagamCarrinho">
        <div class="nav-container">
            <div class="step" onclick="showContent(0)">
                <div class="circle" id="step1"><i class="fas fa-shopping-basket"></i></div>
            </div>
            <div class="divider"></div>
            <div class="step" onclick="showContent(1)">
                <div class="circle" id="step2"><i class="fas fa-shipping-fast"></i></div>
            </div>
            <div class="divider"></div>
            <div class="step" onclick="showContent(2)">
                <div class="circle" id="step3"><i class="fas fa-credit-card"></i></div>
            </div>
        </div>

        <div class="content" id="content1">
            <div class="card-container">
                <div class="containerMensagens">
                    @if(session('is_Cliente'))
                    <div class="panelPedidos">
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
                            Seus pedidos
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

        <div class="qr-section hidden" id="qr-section">
            <div class="timer" id="timer">30:00</div>
            <div id="qrcode"></div> <!-- Aqui está o elemento que irá conter o QR Code -->
            <p>Escaneie com o <strong>aplicativo do seu banco</strong> para realizar o pagamento.</p>
            <p>Enviaremos uma <strong>confirmação do seu pedido</strong> pelo e-mail.</p>
            <p><em>Muito obrigado :)</em></p>
            <a href="#" class="back-link" onclick="returnToForm()">Voltar às compras</a>
        </div>



        <div class="content" id="content2">

            <div class="card-container">
                <div class="pt1">
                    <div class="card-section card-transportadoras">
                        <div class="card-title">Transportadoras</div>
                        <label class="card-option">
                            <input type="radio" name="card-transportadora" checked>
                            Correios SEDEX - R$11,00
                            <div class="card-delivery-date">Chegará entre 2 Out. - 5 Out.</div>
                        </label>
                        <label class="card-option">
                            <input type="radio" name="card-transportadora">
                            Sequoia - R$20,00
                            <div class="card-delivery-date">Chegará entre 2 Out. - 5 Out.</div>
                        </label>
                        <label class="card-option">
                            <input type="radio" name="card-transportadora">
                            Azul - R$10,00
                            <div class="card-delivery-date">Chegará entre 2 Out. - 5 Out.</div>
                        </label>
                    </div>

                    <div class="card-section card-enderecos">
                        <div class="card-title">Endereços</div>
                        <label class="card-option">
                            <input type="radio" name="card-endereco" checked>
                            {{ Session::get('logradouro', 'Logradouro não definido') }}, {{ Session::get('numCasaCliente', 'Número não definido') }} - CEP: {{ Session::get('cep', 'CEP não definido') }}
                            <div class="card-complemento">Complemento: {{ Session::get('complemento', 'complemente não definido') }}</div>
                        </label>
                    </div>
                </div>

            </div>

        </div>
        <div class="content" id="content3">
            <div class="container">
                <div class="form-section" id="form-section">
                    <h2>Forma de pagamento</h2>
                    <div class="payment-methods">
                        <label>
                            <input type="radio" name="payment" value="boleto" onclick="togglePaymentMethod()"> Boleto
                        </label>
                    </div>

                    <div id="pix-message" class="pix-message">
                        <p>Após finalizar, você será redirecionado para uma página com um <strong>QR CODE</strong></p>
                        <p>Escaneie com o <strong>aplicativo do seu banco</strong> para realizar o pagamento. Após isso, enviaremos uma <strong>confirmação</strong> do seu pedido pelo e-mail.</p>
                    </div>

                    <div id="boleto-message" class="boleto-message" style="display: none;">
                        <p>Após finalizar, você poderá <strong>baixar o boleto</strong> para pagamento.</p>
                        <p>Imprima ou pague o boleto online pelo aplicativo do seu banco. Após o pagamento, enviaremos uma <strong>confirmação</strong> do seu pedido pelo e-mail.</p>
                    </div>

                    <form id="boleto-form" action="{{ route('gerar.boleto') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="subtotal" value="{{ $subtotal }}"> <!-- Passa o subtotal como um valor oculto -->
                    </form>

                    <button class="finalize-button" onclick="finalizePayment()">Finalizar</button>
                </div>


                <?php
                $subtotal = request('subtotal') ?? 0;
                ?>

                <div class="summary-section">
                    <h2>Resumo do pedido</h2>
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>R$<?= number_format($subtotal, 2, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td>Frete</td>
                            <td>R$11,00</td>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            <td>R$ <span id="totalValue">{{ number_format($subtotal + 11, 2, ',', '.') }}</span></td>
                        </tr>
                    </table>
                </div>

                <div class="qr-section hidden" id="qr-section">
                    <div class="timer" id="timer">30:00</div>
                    <img src="https://via.placeholder.com/200" alt="QR Code">
                    <p>Escaneie com o <strong>aplicativo do seu banco</strong> para realizar o pagamento.</p>
                    <p>Enviaremos uma <strong>confirmação do seu pedido</strong> pelo e-mail.</p>
                    <p><em>Muito obrigado :)</em></p>
                    <a href="#" class="back-link" onclick="returnToForm()">Voltar às compras</a>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>



        <script>
            function showContent(stepIndex) {
                // Remove a classe 'step-active' de todos os círculos e conteúdos
                document.querySelectorAll('.circle').forEach(circle => circle.classList.remove('step-active'));
                document.querySelectorAll('.content').forEach(content => {
                    content.classList.remove('step-active');
                    content.style.display = 'none'; // Garante que o display seja ocultado antes
                });

                // Adiciona a classe 'step-active' ao círculo e conteúdo correspondentes
                document.getElementById('step' + (stepIndex + 1)).classList.add('step-active');

                // Usa setTimeout para garantir a transição ao mostrar o conteúdo
                setTimeout(() => {
                    const content = document.getElementById('content' + (stepIndex + 1));
                    content.style.display = 'block';
                    content.classList.add('step-active');
                }, 100); // Pequeno atraso para suavizar a animação
            }

            // Inicializa mostrando o primeiro conteúdo
            showContent(0);

            function togglePaymentMethod() {
                const pixMessage = document.getElementById('pix-message');
                const boletoMessage = document.getElementById('boleto-message');
                const paymentType = document.querySelector('input[name="payment"]:checked').value;


                pixMessage.style.display = 'none';
                boletoMessage.style.display = 'none';


                if (paymentType === 'pix') {
                    pixMessage.style.display = 'block';
                } else if (paymentType === 'boleto') {
                    boletoMessage.style.display = 'block';
                }
            }


            function finalizePayment() {
                const paymentType = document.querySelector('input[name="payment"]:checked').value;

                if (paymentType === 'boleto') {
                    document.getElementById('boleto-form').submit();
                } else {
                    finalizePurchase();
                }
            }

            function showQRCode() {
                document.getElementById('form-section').classList.add('hidden');
                document.getElementById('qr-section').classList.remove('hidden');
                startTimer();
            }

            function returnToForm() {
                document.getElementById('qr-section').classList.add('hidden');
                document.getElementById('form-section').classList.remove('hidden');
                stopTimer();
            }


            function finalizePurchase() {
                console.log("Finalizando compra e gerando QR Code");
                const paymentType = document.querySelector('input[name="payment"]:checked').value;
                const totalValue = document.querySelector('.total td:last-child').textContent;

                const totalInCents = Math.round(parseFloat(totalValue.replace('R$', '').replace('.', '').replace(',', '.')) * 100);

                if (paymentType === 'pix') {
                    const pixCode = `00020101021126640014BR.GOV.BCB.PIX0eeduardosilva010506@gmail.com-ID12345678520400005303986540${totalInCents}5802BR5907EDUARDO09SAO PAULO62070503***6304`;

                    let qrCodeElement = document.getElementById('qrcode');
                    qrCodeElement.innerHTML = '';

                    new QRCode(qrCodeElement, {
                        text: pixCode,
                        width: 128,
                        height: 128,
                    });

                    showQRCode();
                } else {
                    alert("Pagamento com cartão será processado.");
                }
            }


            function showQRCode() {
                document.getElementById('form-section').classList.add('hidden');
                document.getElementById('qr-section').classList.remove('hidden');
                startTimer();
            }


            function returnToForm() {
                document.getElementById('qr-section').classList.add('hidden');
                document.getElementById('form-section').classList.remove('hidden');
                stopTimer();
            }




            let timerInterval;

            function startTimer() {
                let time = 30 * 60;
                const timerDisplay = document.getElementById('timer');

                timerInterval = setInterval(() => {
                    const minutes = String(Math.floor(time / 60)).padStart(2, '0');
                    const seconds = String(time % 60).padStart(2, '0');
                    timerDisplay.textContent = `${minutes}:${seconds}`;

                    if (--time < 0) {
                        clearInterval(timerInterval);
                        timerDisplay.textContent = 'Expirado';
                    }
                }, 1000);
            }

            function stopTimer() {
                clearInterval(timerInterval);
            }
        </script>

</body>

</html>
