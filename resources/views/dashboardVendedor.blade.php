@include('includes.headVendedor')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        width: 100%;
        height: 100%;
        background-color: #f5f4e6;
    }

    .content {
        padding: 20px;
        flex-grow: 1;
    }

    .hamburger {
        font-size: 20px;
        cursor: pointer;
        padding: 8px;
        background-color: #1DA361;
        /* Cor de fundo verde */
        color: white;
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1002;
        /* Maior que o z-index do menu */
        border: none;
        border-radius: 20px;
        /* Adiciona bordas arredondadas */
        transition: background-color 0.6s ease;
        /* Transição suave para a cor de fundo */
    }

    .hamburger:hover {
        background-color: #148a4f;
        /* Cor verde mais escura ao passar o mouse */
    }

    /* Estilos do menu lateral */
    .sidebar {
        width: 250px;
        background-color: #275941;
        position: fixed;
        left: -250px;
        top: 0;
        height: 100%;
        padding-top: 20px;
        transition: 0.3s;
        z-index: 1000;
    }

    /* Logo no topo */
    .sidebar .logo {
        text-align: center;
        margin-bottom: 20px;
    }

    .sidebar .logo img {
        max-width: 60%;
        /* Ajuste o tamanho conforme necessário */
        height: auto;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px;
    }

    .sidebar ul li a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 0 25px 25px 0;
        background-color: transparent;
        transition: all 0.3s ease;
        font-size: 16px;
        position: relative;
        margin-right: 15px;
    }

    /* Ícones ao lado do texto */
    .sidebar ul li a i {
        margin-right: 15px;
        font-size: 20px;
    }

    /* Estilo de item selecionado */
    .menu-item.selected {
        background-color: #1DA361;
        border-radius: 0 50px 50px 0;
        /* Aumenta o arredondamento */
        transition: background-color 0.3s ease;
        margin-right: -30px;
        /* O item "sai" do menu lateral */
    }

    /* Estilo ao passar o mouse */
    .sidebar ul li a:hover {
        background-color: #1DA361;
        border-radius: 0 50px 50px 0;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        margin-right: -30px;
        /* O item também "sai" ao passar o mouse */
    }

    /* Quando o menu estiver aberto */
    .sidebar.open {
        left: 0;
    }

    /* Move o botão de hambúrguer quando o menu estiver aberto */
    .sidebar.open .hamburger {
        left: 260px;
        /* Mover o botão de hambúrguer para longe do menu quando aberto */
    }






    .user-profile {
        display: flex;
        align-items: center;
        padding: 5px;
        gap: 10px;
    }

    .aPerifaa img {
        width: 60px;
        /* Tamanho menor da imagem */
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-info {
        display: flex;
        flex-direction: column;
        margin-right: auto;
    }

    .user-name {
        font-weight: bold;
        font-size: 14px;
        /* Texto menor */
        color: #004d46;
    }

    .user-status {
        font-size: 12px;
        /* Texto menor */
        color: #666;
    }

    .icons {
        display: flex;
        gap: 8px;
        /* Menor espaçamento entre ícones */
    }

    .icon {
        width: 30px;
        /* Ícones menores */
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #004d46;
        border-radius: 50%;
        position: relative;
        color: white;
        font-size: 14px;
        /* Tamanho do ícone ajustado */
        cursor: pointer;
    }

    .icon .fas {
        font-size: 16px;
        /* Ajuste no tamanho do ícone do Font Awesome */
    }

    .notification .badge {
        position: absolute;
        top: -3px;
        right: -3px;
        background-color: red;
        color: white;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        font-size: 8px;
        /* Texto do badge menor */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .containerdashboard {
        width: 100%;
        height: 100vh;
    }

    .navDash {
        display: flex;
        width: 100%;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        border-bottom: 2px solid #000;
    }

    .parte1 {
        display: flex;
        flex-direction: column;
        margin: 10px;
        padding-left: 7vh;
    }

    .titulo1 {
        font-size: 16px;
        font-family: "Poppins", sans-serif;
        color: #000;
    }

    .titulo2 {
        font-size: 24px;
        font-family: "Poppins", sans-serif;
        font-weight: bold;
        color: #000;
    }

    .parte2 {
        padding-right: 6vh;

    }


    .card {
        position: relative;
        background-color: #00bf63;
        padding: 20px;
        border-radius: 15px;
        width: 90vh;
        color: white;
        text-align: left;
        box-sizing: border-box;
        margin: 25px;
        border: 2px solid black;
    }

    .content {
        font-family: "Poppins", sans-serif;
        z-index: 2;
        position: relative;
        width: 50%;

    }

    .destaque {
        color: #2d6047;
        font-family: "Poppins", sans-serif;
        font-weight: bold;
    }


    .imagem-flutuante {
        position: absolute;
        right: -8vh;
        /* Ajuste para controlar o quanto a imagem sai do card */
        top: 30%;
        transform: translateY(-30%);
        max-width: 300px;
        /* Tamanho da imagem */
        z-index: 1;
        /* Para que a imagem fique atrás do conteúdo, se necessário */
    }

    .botaoCardPreto {
        background-color: black;
        color: white;
        border: 2px solid white;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .botaoCardPreto:hover {
        background-color: white;
        color: black;
    }


    @media (max-width: 768px) {
        .imagem-flutuante {
            position: absolute;
            right: -8vh;
            /* Ajuste para controlar o quanto a imagem sai do card */
            top: 35%;
            transform: translateY(-30%);
            max-width: 250px;
            /* Tamanho da imagem */
            z-index: 1
        }

        .card {
            padding: 5px;
            width: 50vh;

            /* Reduz o padding em telas menores */
        }

        .content {
            z-index: 2;
            position: relative;
            width: 40%;
        }

    }



    .transaction-container {
        width: 100%;
        background-color: #2d6047;
    }



    .transaction-card {
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        width: 95%;
        height: 10vh;
        align-self: center;
        border-radius: 10px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .tabs button {
        background-color: #f0f0f0;
        border: none;
        padding: 10px;
        cursor: pointer;
    }

    .tab-content {
        display: none;
        margin-top: 10px;
    }

    .product-image img {
        width: 50px;
        height: 50px;
        border-radius: 5px;
    }

    .product-details {
        flex-grow: 1;
        margin-left: 10px;
    }

    .product-details p {
        margin: 0;
        font-weight: bold;
    }

    .product-details span {
        font-size: 10px;
        color: #555;
    }

    .transaction-price {
        text-align: right;
    }

    .transaction-amount {
        color: #00A868;
        font-size: 15px;

        font-weight: bold;
    }

    .payment-method {
        font-size: 10px;
        color: #555;
    }

    .itensContainer {
        display: flex;
        align-items: baseline;
        justify-content: center;
        gap: 150px;
        flex-wrap: wrap;
    }

    .abas {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 20px;
    }

    .abas button {
        background-color: transparent;
        font-family: "Poppins", sans-serif;
        border: 2px solid #004d42;
        padding: 10px 12px;
        cursor: pointer;
        font-size: 12px;
        color: black;
        border-radius: 25px;
        margin-right: 5px;
        transition: all 0.6s ease;
    }

    .abas button.active {
        background-color: #004d42;
        color: white;
        border: 2px solid #004d42;
    }

    .abas button:hover {
        background-color: #004d42;
        /* Cor de fundo ao passar o mouse */
        color: white;
        /* Texto em branco ao passar o mouse */
    }

    .aba-content {
        display: none;
        /* Esconde o conteúdo de cada aba inicialmente */
        margin-top: 10px;
    }

    .aba-content.active {
        display: block;
        /* Exibe o conteúdo da aba ativa */
    }

    .cardComcoisas {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .coisa {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        width: 400px;
        background-color: #0f4143;
        padding: 20px;
        border-radius: 15px;
        text-align: left;
        box-sizing: border-box;
        height: 500px;
        /* Altura fixa para o container */
        overflow-y: auto;
        /* Habilitar barra de rolagem vertical */
    }


    /* Estilo da barra de rolagem */
    .coisa::-webkit-scrollbar {
        width: 8px;
        /* Largura da barra de rolagem */
    }

    /* Fundo da barra de rolagem */
    .coisa::-webkit-scrollbar-track {
        background: #0f4143;
        /* Cor do fundo */
        border-radius: 10px;
    }

    /* Polegar da barra de rolagem (a parte que desliza) */
    .coisa::-webkit-scrollbar-thumb {
        background-color: #0c6367;
        /* Cor do polegar */
        border-radius: 10px;
        /* Deixar as bordas arredondadas */
        border: 2px solid #d0d0d0;
        /* Bordas ao redor do polegar */

    }

    /* Polegar ao passar o mouse por cima */
    .coisa::-webkit-scrollbar-thumb:hover {
        background-color: #096b6e;
        /* Cor ao passar o mouse */
    }

    .card2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #183c3c;
        padding: 10px;
        border-radius: 10px;
        width: 90vh;
        text-align: left;
        box-sizing: border-box;
        margin: 25px;
        border: 2px solid black;
    }

    .info {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 20px;
    }

    .info h2 {
        color: #38b264;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .info img {
        width: 20vh;
        height: auto;
    }


    @media (max-width: 768px) {
        .info img {
            width: 15vh;
            height: auto;
        }

        .card2 {
            padding: 5px;
            width: 50vh;
        }

    }

    .chart {
        display: flex;
        flex-direction: column;
    }

    .bar {
        position: relative;
        background-color: #38b264;
        height: 30px;
        margin-bottom: 10px;
        border-radius: 5px;
        width: 0;
        transition: width 1s ease-in-out;
    }

    .bar1 {
        width: 50px;
    }

    /* Valor representando vendas diárias */
    .bar2 {
        width: 100px;
    }

    /* Valor representando vendas semanais */
    .bar3 {
        width: 150px;
    }

    .chart-container {
        flex-grow: 1;
        position: relative;
    }

    canvas {
        width: 100% !important;
        height: auto !important;
    }

    .sales-container {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }

    .card2 {
        display: flex;
        flex-direction: column;
        width: 300px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: #fff;
        transition: transform 0.2s ease;
        position: relative;
    }

    .card2:hover {
        transform: scale(1.03);
    }

    .card-header {
        background-color: #0c6367;
        color: #fff;
        padding: 15px;
        text-align: center;
    }

    .card-header h3 {
        margin: 0;
        font-size: 1.1em;
    }

    .card-body {
        padding: 15px;
        flex-grow: 1;
        /* Para expandir a área do corpo da carta */
    }

    .card-body p {
        margin: 10px 0;
        color: #333;
    }

    .item-image img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .card-footer {
        padding: 15px;
        text-align: center;
        position: relative;
    }

    .action-btn {
        background-color: #0c6367;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1em;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .action-btn:hover {
        background-color: #183c3c;
    }

    /* Classe para a data */
    .date-info {
        position: absolute;
        bottom: 10px;
        left: 10px;
        font-size: 0.8em;
        /* Tamanho menor */
        color: #555;
    }


    /* Valor representando vendas mensais */
</style>
<!-- Fonte customizada para o logo -->



<body>

    @include('includes.menuVendedor')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Sucesso!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#00a849'
            });
        </script>
    @endif
    <div class="itensContainer">
        <div class="p1">
            <div class="card">
                <div class="content">
                    <h2>Faça o <span class="destaque">cadastro</span> de novos produtos para venda!</h2>
                    <p>Atualize seu estoque e ofereça mais opções aos seus clientes!</p>
                    <button class="botaoCardPreto">Fazer Cadastro</button>
                </div>
                <img src="images/mocaCard.png" alt="Imagem cadastro" class="imagem-flutuante">
            </div>
            <style>
                #modal {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.6);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                #modal2 {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.6);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .modal-content {
                    background: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    width: 300px;
                    text-align: center;
                }
            </style>
            <script>
                function openModal(idVenda) {
                    const form = document.getElementById('correiosForm');
                    form.action = `/vendas/${idVenda}/atualizarCodigoCorreios`; // Defina a rota correta aqui
                    document.getElementById('modal').style.display = 'flex';
                }

                function closeModal() {
                    document.getElementById('modal').style.display = 'none';
                }
                function openModal2() {

                    document.getElementById('modal2').style.display = 'flex';
                }

                function closeModal2() {
                    document.getElementById('modal2').style.display = 'none';
                }
            </script>
            <div class="card2">
                <div class="info">
                    <div class="sales-container">
                        @foreach($vendas as $venda)
                            @if($venda->idLoc == 0) <!-- Condição para filtrar idLoc igual a 0 -->
                                <div class="card2">
                                    <div class="card-header">
                                        <span>Data: {{ \Carbon\Carbon::parse($venda->dataVenda)->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Valor Total:</strong> R$
                                            {{ number_format($venda->valorTotalVenda, 2, ',', '.') }}
                                        </p>
                                        <button type="button" onclick="openModal2()"> <p><strong>Cliente:</strong> {{ $venda->cliente->nomeCliente }}</p> </button>
                                        <div class="item-image">
                                            <!-- Exibir imagem do item -->
                                            <img src="{{ asset($venda->produto->imagemProduto) }}" alt="Imagem do Item">
                                        </div>
                                        <p><strong>Produto:</strong> {{ $venda->produto->nomeProduto }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="{{ route('send', $venda->idVenda) }}" method="POST">
                                            @csrf
                                            <button type="button" onclick="openModal({{ $venda->idVenda }})"
                                                class="action-btn">Entregar</button>
                                        </form>

                                        
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>


                </div>



                <div class="chart">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
        <div id="modal" style="display: none;">
            <div class="modal-content">
                <h2>Informe o Código dos Correios</h2>
                <form id="correiosForm" action="" method="POST">
                    @csrf
                    <input type="text" name="codigoCorreios" required placeholder="Código Correios">
                    <button type="submit">Salvar</button>
                    <button type="button" onclick="closeModal()">Cancelar</button>
                </form>
            </div>
        </div>
        <div id="modal2" style="display: none;">
            <div class="modal-content">
                <h3>{{$venda->cliente->nomeCliente}}</h3>
                <p><strong>Cep:</strong> {{ $venda->cliente->cepCliente }}</p>
                <p><strong>Numero:</strong> {{ $venda->numCasaCliente }}</p>
                <button type="button" onclick="closeModal2()">Cancelar</button>
            </div>
        </div>
        <div class="cardComcoisas">
            <div class="abas">
                <button id="aba-transacoes" class="active" onclick="showAba('transacoes')">Últimas
                    transações</button>
                <button id="aba-receita" onclick="showAba('receita')">Receita total</button>
                <button id="aba-vendidos" onclick="showAba('vendidos')">Mais Vendidos</button>
            </div>
            <div class="coisa">
                <div id="transacoes" class="aba-content active">
                    @foreach($vendas as $venda)
                        @if ($venda->idLoc == 1)
                            <div class="transaction-card">
                                <div class="product-image">
                                    <img src="{{ asset( $venda->produto->imagemProduto ) }}" alt="Produto Vendido">
                                </div>
                                <div class="product-details">
                                    <p>Produto do {{ $venda->cliente->nomeCliente ?? 'Cliente desconhecido' }}</p>
                                    <span>{{ \Carbon\Carbon::parse($venda->dataVenda)->format('d/m, H:i') }}</span><br>
                                    <span>{{ $venda->produto->nomeProduto}}</span>
                                    <!-- Formata a data -->
                                </div>
                                <div class="transaction-price">
                                    <p class="transaction-amount">+ R${{ number_format($venda->valorTotalVenda, 2, ',', '.') }}
                                    </p>
                                    <!-- Exibe o método de pagamento -->
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>



                <!-- Repita o card para mais transações -->
            </div>

            <div div id="receita" class="aba-content">
            </div>

            <div id="vendidos" class="aba-content">
            </div>
        </div>


    </div>
    </div>




    </div>

    <script>
        // Função para abrir/fechar o menu lateral
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const hamburger = document.getElementById('hamburger');

            // Alterna a classe 'open' para abrir/fechar o menu
            sidebar.classList.toggle('open');

            // Alterna o ícone entre hambúrguer e "X"
            if (sidebar.classList.contains('open')) {
                hamburger.innerHTML = '&times;';  // Ícone de "X" (multiplicação)
            } else {
                hamburger.innerHTML = '&#9776;';  // Ícone de hambúrguer
            }
        }

        // Função para selecionar item do menu
        function selectMenu(element) {
            // Remove a classe 'selected' de todos os itens
            const items = document.querySelectorAll('.menu-item');
            items.forEach(item => item.classList.remove('selected'));

            // Adiciona a classe 'selected' ao item clicado
            element.classList.add('selected');
        }

        // Atribuir a função de seleção aos links
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function () {
                selectMenu(item);
            });
        });

        function showAba(abaName) {
            // Esconde todos os conteúdos das abas
            document.getElementById("transacoes").style.display = "none";
            document.getElementById("receita").style.display = "none";
            document.getElementById("vendidos").style.display = "none";

            // Mostra o conteúdo da aba selecionada
            document.getElementById(abaName).style.display = "block";

            // Remove a classe "active" de todos os botões
            const buttons = document.querySelectorAll('.abas button');
            buttons.forEach(button => button.classList.remove('active'));

            // Adiciona a classe "active" ao botão clicado
            document.querySelector(`#aba-${abaName}`).classList.add('active');
        }

        // Função para garantir que a aba "Últimas transações" esteja visível ao carregar a página
        window.onload = function () {
            showAba('transacoes');  // Mostra a aba de transações automaticamente ao carregar
        };

        const ctx = document.getElementById('myChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Diárias', 'Semanais', 'Mensais'],
                datasets: [{
                    label: 'Vendas',
                    data: [5, 10, 15],
                    backgroundColor: '#38b264',
                    borderRadius: 10,
                    barPercentage: 0.5,
                }]
            },
            options: {
                indexAxis: 'y',  // Coloca as barras na horizontal
                scales: {
                    x: {
                        beginAtZero: true,
                        max: 20
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 20,
                        bottom: 0
                    }
                },
                responsive: true,
            }
        });


    </script>


</body>

</html>