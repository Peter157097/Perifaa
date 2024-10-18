<!DOCTYPE html>
<html lang="pt-BR">
@include('includes.head')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <!-- Fonte customizada para o logo -->
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body class="bodyAdmin">
    @include('includes.menuAdmin')
    <div class="containerAdmin">
        <div class="adminPanelContainer">
            <div class="adminPanel">
                <div class="notifAdminPanel">
                    <div class="titleNotifPanel">
                        Notificações | Pendências
                    </div>
                    <div class="scroll-notif">
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Analisar denúncias em atraso
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Sistema
                            </div>
                            <div class="bodyNotif">
                                Revisar sugestões dos usuários
                            </div>
                        </div>
                        <div class="cardNotifAdmin">
                            <div class="titleNotif">
                                Marina
                            </div>
                            <div class="bodyNotif">
                                Olá, preciso de ajuda com um caso
                            </div>
                        </div>
                    </div>
                    <div class="shadowScroll"></div>
                </div>

                <div class="adminGraficoContainer">
                    <div class="bigCardGrafico">
                        <div class="titleBigGraficoAdmin">
                            Acessos <span class="tempoGraficoAdmin">| Mensais</span>
                        </div>
                        <div class="graficoAdmin">
                            <div id="top_x_div" class="graficoAcessos"></div>
                        </div>
                    </div>

                    <div class="cardGrafico">
                        <div class="titleGraficoAdmin">
                            <div class="graficoIconContainer">
                                <div class="graficoIcon">
                                    <img src="./images/graficoIcon.png">
                                </div>
                            </div>
                        </div>
                        <div class="infosGraficoAdmin">
                            <div class="labelGraficoContainer">
                                Acessos <span class="tempoGraficoAdmin"> | últimas 24 horas</span>
                            </div>
                            <div class="numerosGrafico">
                                &#11165; 24.387
                            </div>
                            <div class="titleGraficoAdminAlt">
                                Dia anterior
                            </div>
                            <div class="numerosGraficoAlt">
                                &#11167; 15.486
                            </div>
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">
                                <a>Detalhes</a>
                            </button>
                        </div>
                    </div>
                    <div class="cardGrafico">
                        <div class="titleGraficoAdmin">
                            <div class="graficoIconContainer">
                                <div class="graficoIcon">
                                    <img src="./images/graficoIcon.png">
                                </div>
                            </div>
                        </div>
                        <div class="infosGraficoAdmin">
                            <div class="labelGraficoContainer">
                                Vendas <span class="tempoGraficoAdmin"> | últimas 24 horas</span>
                            </div>
                            <div class="numerosGrafico">
                                &#11165; 4.387
                            </div>
                            <div class="titleGraficoAdminAlt">
                                Dia anterior
                            </div>
                            <div class="numerosGraficoAlt">
                                &#11167; 2.486
                            </div>
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">
                                <a>Detalhes</a>
                            </button>
                        </div>
                    </div>
                    <div class="cardGrafico">
                        <div class="titleGraficoAdmin">
                            <div class="graficoIconContainer">
                                <div class="graficoIcon">
                                    <img src="./images/graficoIcon.png">
                                </div>
                            </div>
                        </div>
                        <div class="infosGraficoAdmin">
                            <div class="labelGraficoContainer">
                                Denuncias <span class="tempoGraficoAdmin"> | últimas 24 horas</span>
                            </div>
                            <div class="numerosGrafico">
                                &#11165; 387
                            </div>
                            <div class="titleGraficoAdminAlt">
                                Dia anterior
                            </div>
                            <div class="numerosGraficoAlt">
                                &#11167; 257
                            </div>
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">
                                <a>Detalhes</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="admContainerDenuncia">
            <div class="admDenuncia">
                <div class="titleDash">
                    Produtos mais denunciados
                </div>
                @foreach($denuncias as $denuncia)
                    <div class="cardDenuncia-top">
                        <div class="infoDenuncia-top">
                            <p class="nomeVendDenuncia">
                                Nome Vendedor
                            </p>
                        </div>
                    </div>
                    <div class="admCardDenuncia">
                        <div class="placeholderImg">
                            <img src="{{$denuncia->produto->imagemProduto}}">
                        </div>
                        <div class="infoDenuncia">
                            <div class="topDenuncia">
                                <p class="itemTopDenuncia">Produto</p>
                                <p class="itemTopDenuncia">Descrição</p>
                                <P class="itemTopDenuncia">Valor</P>
                                <P class="itemTopDenuncia">Id Denuncia</P>
                                <P class="itemTopDenuncia">Email</P>
                            </div>
                            <div class="bottomDenuncia">
                                <p class="itemBottomDenuncia">
                                    {{$denuncia->produto->nomeProduto ?? 'Descrição Indisponível' }}
                                </p>
                                <p class="itemBottomDenuncia">
                                    {{ $denuncia->produto->descricaoProduto ?? 'Descrição Indisponível' }}
                                </p>
                                <p class="itemBottomDenuncia">
                                    {{$denuncia->Produto->valorProduto ?? 'Descrição Indisponível' }}
                                </p>
                                <p class="itemBottomDenuncia">{{ $denuncia->idDenuncia ?? 'Descrição Indisponível' }}</p>
                                <p class="itemBottomDenuncia">{{ $denuncia->cliente->emailCliente ?? 'Nome Indisponível' }}
                                </p>
                            </div>
                            <div class="btnDenunciaContainer">
                                <button class="btnAcaoDetalhes">
                                    <a>Ver anuncio</a>
                                </button>
                                <button class="btnAcaoExcluir">
                                    <a>Excluir anuncio</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                hamburger.innerHTML = '&times;'; // Ícone de "X" (multiplicação)
            } else {
                hamburger.innerHTML = '&#9776;'; // Ícone de hambúrguer
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
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['bar'] });
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
                ['Mês', 'Acessos'],
                ["Jan.", 44000],
                ["Fev.", 31000],
                ["Março", 12000],
                ['Abril', 20000],
                ["Maio", 44000],
                ["Jun.", 31000],
                ["Jul.", 18000],
                ["Ago.", 40000],
                ["Set.", 10000],
                ["Out.", 13000],
                ["Nov.", 16000],
                ['Dez.', 60000]

            ]);

            var options = {
                height: '100%', // Ajusta o gráfico para ocupar toda a altura
                legend: {
                    position: 'none',

                },
                chart: {

                },
                hAxis: {
                    title: ''
                },
                bar: {
                    groupWidth: "99%",
                },
                colors: ['#2a89c7']
            };

            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        };
    </script>
</body>

</html>