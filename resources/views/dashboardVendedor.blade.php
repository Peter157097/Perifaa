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
        position: relative;
        /* Necessário para posicionamento relativo dos botões */
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
        position: relative;
        /* Para posicionar a bolinha em relação ao botão */
    }

    .abas button.active {
        background-color: #004d42;
        color: white;
        border: 2px solid #004d42;
    }

    .abas button:hover {
        background-color: #004d42;
        color: white;
    }

    .badge {
        position: absolute;
        top: -5px;
        /* Posiciona acima do botão */
        right: -5px;
        /* Posiciona à direita */
        background-color: #ff6347;
        /* Cor de fundo */
        color: white;
        /* Cor do texto */
        font-size: 10px;
        font-weight: bold;
        padding: 3px 6px;
        border-radius: 50%;
        /* Forma circular */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        /* Sombra para destaque */
        z-index: 10;
        /* Garante que fique acima de outros elementos */
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
        z-index: 1000;
    }

    /* Estilo do conteúdo do modal */
    .modal-content {
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 400px;
        text-align: center;
    }

    /* Título do modal */
    .modal-content h2 {
        color: #004d42;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    /* Estilo do input */
    .modal-content input {
        width: 100%;
        padding: 10px;
        border: 1px solid #004d42;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .modal-content input:focus {
        outline: none;
        box-shadow: 0 0 5px #004d42;
    }

    /* Estilo dos botões */
    .modal-buttons {
        display: flex;
        justify-content: space-between;
    }

    #modal,
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
        z-index: 9999;
        /* Valor alto para garantir que está no topo */
    }


    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        font-weight: bold;
    }

    .btn.salvar {
        background: #004d42;
        color: #fff;
    }

    .btn.salvar:hover {
        background: #006b5c;
    }

    .btn.cancelar {
        background: #f2f2f2;
        color: #004d42;
        border: 1px solid #004d42;
    }

    .btn.cancelar:hover {
        background: #e6e6e6;
    }

    .botaun {
        background: #f8f9fa;
        color: #004d42;
        border: 2px solid #004d42;
        border-radius: 25px;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .botaun:hover {
        background: #e6e6e6;
        color: #00332e;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    button.client {
        all: unset;
        color: inherit;
        font: inherit;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    button.client:hover {
        color: #00bf63;
    }


    .sales-container {
        width: 100%;
        padding: 10px;
    }

    .sales-card {
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        width: 95%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        flex-wrap: wrap;
        /* Para melhorar em telas menores */
    }

    .sales-image img {
        width: 50px;
        height: 50px;
        border-radius: 5px;
        object-fit: cover;
    }

    .sales-details {
        flex-grow: 1;
        margin-left: 10px;
        text-align: left;
    }

    .sales-details p {
        margin: 0;
        font-weight: bold;
        font-size: 14px;
    }

    .sales-details span {
        font-size: 12px;
        color: #555;
    }

    .sales-price {
        text-align: right;
    }

    .sales-amount {
        color: #00A868;
        font-size: 16px;
        font-weight: bold;
    }

    .sales-actions {
        text-align: right;
    }

    .sales-btn {
        background-color: #2d6047;
        color: #fff;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .sales-btn:hover {
        background-color: #23853d;
    }


    /* Valor representando vendas mensais */
</style>
<!-- Fonte customizada para o logo -->
<script>
    function openModal(idVenda) {
        const form = document.getElementById('correiosForm');
        form.action = `/vendas/${idVenda}/atualizarCodigoCorreios`;// Defina a rota correta aqui
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<body>
    @include('includes.menuVendedor')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success') || $vendasPendentes)
        <script>
            // Monta a mensagem de sucesso
            let mensagem = '{{ session('success') }}';

            // Verifica se existem vendas pendentes
            @if($vendasPendentes)
                mensagem += '\nExistem vendas para serem concluídas!';
            @endif

            // Exibe o alerta de sucesso, com a mensagem de vendas pendentes, se aplicável
            Swal.fire({
                title: 'Sucesso!',
                text: mensagem,
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#00a849'
            }).then((result) => {
                if (result.isConfirmed) {
                    @if($vendasPendentes)
                        // Redireciona para a página de vendas pendentes
                        window.location.href = "{{ route('vendasPendentes') }}";
                    @endif
                }
            });
        </script>
    @endif
    <div class="itensContainer">
        <div class="p1">
            <div class="card">
                <div class="content">
                    <h2>Faça o <span class="destaque">cadastro</span> de novos produtos para venda!</h2>
                    <p>Atualize seu estoque e ofereça mais opções aos seus clientes!</p>
                    <a href="{{url('cadastrarProdutosVendedor')}}"><button class="botaoCardPreto">Fazer
                            Cadastro</button></a>
                </div>
                <img src="images/mocaCard.png" alt="Imagem cadastro" class="imagem-flutuante">
            </div>
            <script type="text/javascript">
                google.charts.load('current', { 'packages': ['bar'] });
                google.charts.setOnLoadCallback(drawStuff);

                function drawStuff() {
                    // Passando os dados da view para o gráfico
                    var vendasMensais = @json($vendasMensais);

                    // Lista dos meses do ano
                    var meses = ["Jan.", "Fev.", "Mar.", "Abr.", "Maio", "Jun.", "Jul.", "Ago.", "Set.", "Out.", "Nov.", "Dez."];

                    // Inicializando o array de dados com todos os meses e valores de vendas (inicialmente 0)
                    var dataArray = [['Mês', 'Vendas']];

                    // Criando um objeto para mapear as vendas por mês
                    var vendasPorMes = {};

                    // Preenchendo o objeto com os dados de vendas mensais
                    vendasMensais.forEach(function (venda) {
                        vendasPorMes[venda.mes - 1] = venda.total;
                    });

                    // Preenchendo o array dataArray com os meses e as vendas (colocando 0 caso não tenha vendas)
                    meses.forEach(function (mes, index) {
                        dataArray.push([mes, vendasPorMes[index] || 0]);
                    });

                    // Criando o DataTable
                    var data = new google.visualization.arrayToDataTable(dataArray);

                    var options = {
                        height: 300, // Altura do gráfico
                        legend: { position: 'none' },
                        hAxis: {
                            title: '',
                            textStyle: { fontSize: 12, color: '#6B7280' }, // Fonte moderna para o eixo X
                        },
                        bar: { groupWidth: "50%" }, // Barras mais estreitas para equilíbrio visual
                        colors: ['#00bf63'], // Verde personalizado
                        vAxis: {
                            minValue: 0,
                            textStyle: { fontSize: 12, color: '#6B7280' }, // Fonte moderna para o eixo Y
                            gridlines: { color: '#E5E7EB' }, // Gridlines com cinza claro
                        },
                        annotations: {
                            alwaysOutside: true,
                            textStyle: {
                                fontSize: 10,
                                bold: true,
                                color: '#111827' // Texto em preto para contraste
                            }
                        },
                        animation: {
                            duration: 500, // Duração da animação
                            easing: 'out', // Suavização da animação
                        },
                    };

                    // Ajuste manual no formato de exibição dos valores no eixo Y
                    var formatter = new google.visualization.NumberFormat({
                        prefix: 'R$ ', // Adiciona o prefixo "R$"
                        fractionDigits: 2, // Exibe duas casas decimais
                        groupingSymbol: '.', // Define o símbolo de agrupamento para milhares (ponto)
                        decimalSymbol: ',' // Define o símbolo decimal como vírgula
                    });

                    // Formata todos os valores da coluna 1 (Vendas) no gráfico
                    formatter.format(data, 1);

                    // Criando o gráfico
                    var chart = new google.charts.Bar(document.getElementById('vendasPorMes'));
                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }
            </script>

            <br>
            <div style="display: flex; gap: 20px; align-items: flex-start; margin-top: 20px;">
                <!-- Mini Cards -->
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div class="miniCard"
                        style="padding: 15px; border: 1px solid #E5E7EB; border-radius: 8px; background: #00bf63; color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div style="font-size: 16px; font-weight: bold;">Produtos Cadastrados</div>
                        <div style="font-size: 24px; font-weight: bold;">{{ $totalProdutos }}</div>
                    </div>
                    <div class="miniCard"
                        style="padding: 15px; border: 1px solid #E5E7EB; border-radius: 8px; background: #00bf63; color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div style="font-size: 16px; font-weight: bold;">Vendas Concluídas</div>
                        <div style="font-size: 24px; font-weight: bold;">{{ $totalVendasConcluidas }}</div>
                    </div>
                </div>


                <!-- Gráfico -->
                <div class="bigCardGrafico"
                    style="flex-grow: 1; padding: 15px; border: 1px solid #E5E7EB; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div class="titleBigGraficoAdmin"
                        style="font-family: 'Arial', sans-serif; color: #00bf63; font-size: 16px; font-weight: bold; margin-bottom: 10px; text-align: center;">
                        Vendas Mensais
                    </div>
                    <div class="graficoAdmin" style="padding: 10px;">
                        <div id="vendasPorMes" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
            <br>


            <!-- <div class="chart">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div> -->
        </div>
        <div id="modal" style="display: none;">
            <div class="modal-content">
                <h2>Informe o Código dos Correios</h2>
                <form id="correiosForm" action="" method="POST">
                    @csrf
                    <input type="text" name="codigoCorreios" required placeholder="Código Correios">
                    <button type="submit" class="btn salvar">Salvar</button>
                    <button type="button" class="btn cancelar" onclick="closeModal()">Cancelar</button>
                </form>
            </div>
        </div>
        <div id="modal2" style="display: none;">
            @if(isset($venda))
                <div class="modal-content">
                    <h3>{{ $venda->cliente->nomeCliente ?? 'Cliente desconhecido' }}</h3>
                    <p><strong>Cep:</strong> {{ $venda->cliente->cepCliente ?? 'Não informado' }}</p>
                    <p><strong>Número:</strong> {{ $venda->numCasaCliente ?? 'Não informado' }}</p>
                    <button class="botaun" type="button" onclick="closeModal2()">Cancelar</button>
                </div>
            @else
                <div class="modal-content">
                    <p>Nenhuma venda selecionada para exibir.</p>
                    <button type="button" onclick="closeModal2()">Fechar</button>
                </div>
            @endif
        </div>
        <div class="cardComcoisas">
            <div class="abas">
                <button id="aba-transacoes" class="active" onclick="showAba('transacoes')">
                    Vendas recentes <span class="badge">{{ $vendasNaoConcluidas }}</span>
                </button>
                <!-- ai so colocar esse span nos outros q vai tb -->
                <button id="aba-receita" onclick="showAba('receita')">Enviados</button>
                <button id="aba-vendidos" onclick="showAba('vendidos')">Finalizados</button>
            </div>
            <div class="coisa">
                <div id="transacoes" class="aba-content active">
                    <div class="transaction-container">
                        @forelse($vendas as $venda)
                            @if($venda->idLoc == 0 || $venda->idLoc == null)
                                <div class="sales-card">
                                    <!-- Imagem do produto -->
                                    <div class="sales-image">
                                        <img src="{{ asset($venda->produto->imagemProduto ?? 'padrao.png') }}"
                                            alt="Imagem do Produto">
                                    </div>
                                    <!-- Detalhes do produto -->
                                    <div class="sales-details">
                                        <p>
                                            Venda para
                                            <button type="button" class="client" onclick="openModal2()">
                                                {{ $venda->cliente->nomeCliente ?? 'Cliente desconhecido' }}
                                            </button>
                                        </p>
                                        <span>{{ \Carbon\Carbon::parse($venda->dataVenda)->format('d/m, H:i') }}</span><br>
                                        <span>{{ $venda->produto->nomeProduto ?? 'Produto não encontrado' }}</span>
                                    </div>
                                    <!-- Preço da transação -->
                                    <div class="sales-price">
                                        <p class="sales-amount">
                                            + R${{ number_format($venda->valorTotalVenda, 2, ',', '.') }}
                                        </p>
                                    </div>
                                    <!-- Botão de ação -->
                                    <div class="sales-actions">
                                        <form action="{{ route('send', $venda->idVenda) }}" method="POST">
                                            @csrf
                                            <button type="button" onclick="openModal({{ $venda->idVenda }})"
                                                class="sales-btn">Entregar</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @empty
                        @endforelse
                    </div>


                </div>
                <div id="receita" class="aba-content">
                    @foreach($vendas as $venda)
                        @if ($venda->idLoc == 1)
                            <div class="sales-card">
                                <div class="product-image">
                                    <img src="{{ asset($venda->produto->imagemProduto) }}" alt="Produto Vendido">
                                </div>
                                <div class="sales-details">
                                    <p>Produto de {{ $venda->cliente->nomeCliente ?? 'Cliente desconhecido' }} enviado!</p>
                                    <span>{{ \Carbon\Carbon::parse($venda->dataVenda)->format('d/m, H:i') }}</span><br>
                                    <span>{{ $venda->produto->nomeProduto}}</span>
                                </div>
                                <div class="transaction-price">
                                    <p class="transaction-amount">+ R${{ number_format($venda->valorTotalVenda, 2, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div id="vendidos" class="aba-content">
                </div>
            </div>
        </div>
    </div>

    <script>


        function showAba(abaName) {
            // Esconde todos os conteúdos das abas
            const abas = document.querySelectorAll('.aba-content');
            abas.forEach(aba => aba.classList.remove('active'));

            // Mostra o conteúdo da aba selecionada
            const abaSelecionada = document.getElementById(abaName);
            abaSelecionada.classList.add('active');

            // Remove a classe "active" de todos os botões
            const buttons = document.querySelectorAll('.abas button');
            buttons.forEach(button => button.classList.remove('active'));

            // Adiciona a classe "active" ao botão clicado
            document.querySelector(`#aba-${abaName}`).classList.add('active');
        }

        // Garante que a aba "Últimas transações" esteja visível ao carregar a página
        window.onload = function () {
            showAba('transacoes');
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
