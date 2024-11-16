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
                            Acessos <span class="tempoGraficoAdmin"> | Mensais</span>
                        </div>
                        <div class="graficoAdmin">
                            <div id="top_x_div" class="graficoAcessos"></div>
                        </div>
                    </div>
                    <div class="bigCardGrafico">
                        <div class="titleBigGraficoAdmin">
                            Vendas <span class="tempoGraficoAdmin"> | Mensais</span>
                        </div>
                        <div class="graficoAdmin">
                            <div id="vendasPorMes" class="graficoAcessos"></div>
                        </div>
                    </div>

                    <div class="bigCardGrafico">
                        <div class="titleBigGraficoAdmin">
                            Regiões com mais usuários
                        </div>
                        <div id="graficoRegioes" class="graficoCategorias"></div>
                    </div>
                    <div class="bigCardGrafico">
                        <div class="titleBigGraficoAdmin">
                            Categorias mais vendidas
                        </div>
                        <div id="barchart_values" class="graficoCategorias"></div>
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
                                <a href="/entrar-produto/{{$denuncia->produto->idProduto}}">Ver anuncio</a>
                            </button>
                            <form action="{{ route('denuncia.destroy', $denuncia->idDenuncia) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza que deseja excluir esta denúncia?');"
                                    class="">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btnAcaoExcluir">
                                        <a>Excluir denúncia</a>
                                    </button>
                                </form>
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

<script type="text/javascript">
    google.charts.load('current', { 'packages': ['bar'] });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        // Passando os dados da view para o gráfico
        var vendasMensais = @json($vendasMensais);

        // Transformando os dados para o formato que o Google Charts espera
        var dataArray = [['Mês', 'Vendas']];
        
        vendasMensais.forEach(function(venda) {
            // Criando o nome do mês baseado no número do mês (1 a 12)
            var meses = ["Jan.", "Fev.", "Mar.", "Abr.", "Maio", "Jun.", "Jul.", "Ago.", "Set.", "Out.", "Nov.", "Dez."];
            dataArray.push([meses[venda.mes - 1], venda.total]);
        });

        // Criando o DataTable
        var data = new google.visualization.arrayToDataTable(dataArray);

        var options = {
            height: '100%', // Ajusta o gráfico para ocupar toda a altura
            legend: { position: 'none' },
            hAxis: { title: '' },
            bar: { groupWidth: "99%" },
            colors: ['#2a89c7'],
            vAxis: {
        minValue: 0, // Define o valor mínimo do eixo Y
        maxValue: 10000 // Define o valor máximo (ajuste conforme necessário)
    }
        };
        
        // Criando o gráfico
        var chart = new google.charts.Bar(document.getElementById('vendasPorMes'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }

</script>

    <script type="text/javascript">
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Categoria", "Vendas"],
                ["Camisas", 1349],
                ["Calças", 1211],
                ["Tênis", 842],
                ["Acessórios", 452]
            ]);

            var view = new google.visualization.DataView(data);

            var options = {
                chartArea: { width: '70%', height: '80%' },
                colors: ['#2a89c7'],
                width: '100%',
                height: '100%',
                bar: { groupWidth: "95%" },
                legend: { position: "none" },
            };
            var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
            chart.draw(view, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Estado', 'Usuários'],
                ['SP', 11],
                ['RJ', 2],
                ['MG', 2],
                ['RS', 2],
                ['BA', 7]

            ]);
            function generateColors(dataTable) {
                var colors = [];
                var maxUsers = 0;

                // Encontrar o máximo número de usuários
                for (var i = 1; i < dataTable.getNumberOfRows(); i++) {
                    var numUsers = dataTable.getValue(i, 1);
                    if (numUsers > maxUsers) {
                        maxUsers = numUsers;
                    }
                }

                // Cor base azul similar a #2a89c7
                var baseColor = { r: 42, g: 137, b: 199 }; // RGB para #2a89c7

                // Gerar cores em tons de azul com base no número de usuários
                for (var i = 0; i < dataTable.getNumberOfRows(); i++) {
                    var numUsers = dataTable.getValue(i, 1);
                    var intensity = Math.floor((numUsers / maxUsers) * 100); // Faixa de intensidade

                    // Ajustar o tom de azul com base na intensidade
                    var r = baseColor.r;
                    var g = baseColor.g;
                    var b = Math.max(0, baseColor.b - intensity); // Diminuir o componente azul para intensificar o tom

                    // Garantir que a cor esteja dentro dos limites de 0 a 255
                    r = Math.min(255, Math.max(0, r));
                    g = Math.min(255, Math.max(0, g));
                    b = Math.min(255, Math.max(0, b));

                    colors.push(`rgb(${r}, ${g}, ${b})`);
                }

                return colors;
            }

            // Obter cores dinâmicas
            var colorsArray = generateColors(data);

            var options = {
                colors: colorsArray,
                width: '100%',
                height: '100%', // Altura fixa para visualização estável
                pieHole: 0.2,
            };

            var chart = new google.visualization.PieChart(document.getElementById('graficoRegioes'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);

    // Dados do backend convertidos para JSON
    var usuariosPorEstado = @json($usuariosPorEstado);

    function drawChart() {
        // Construir os dados para o gráfico
        var dataArray = [['Estado', 'Usuários']];
        usuariosPorEstado.forEach(function (item) {
            dataArray.push([item.estado, parseInt(item.total)]);
        });

        // Criar DataTable
        var data = google.visualization.arrayToDataTable(dataArray);

        function generateColors(dataTable) {
                var colors = [];
                var maxUsers = 0;

                // Encontrar o máximo número de usuários
                for (var i = 1; i < dataTable.getNumberOfRows(); i++) {
                    var numUsers = dataTable.getValue(i, 1);
                    if (numUsers > maxUsers) {
                        maxUsers = numUsers;
                    }
                }

                // Cor base azul similar a #2a89c7
                var baseColor = { r: 42, g: 137, b: 199 }; // RGB para #2a89c7

                // Gerar cores em tons de azul com base no número de usuários
                for (var i = 0; i < dataTable.getNumberOfRows(); i++) {
                    var numUsers = dataTable.getValue(i, 1);
                    var intensity = Math.floor((numUsers / maxUsers) * 100); // Faixa de intensidade

                    // Ajustar o tom de azul com base na intensidade
                    var r = baseColor.r;
                    var g = baseColor.g;
                    var b = Math.max(0, baseColor.b - intensity); // Diminuir o componente azul para intensificar o tom

                    // Garantir que a cor esteja dentro dos limites de 0 a 255
                    r = Math.min(255, Math.max(0, r));
                    g = Math.min(255, Math.max(0, g));
                    b = Math.min(255, Math.max(0, b));

                    colors.push(`rgb(${r}, ${g}, ${b})`);
                }

                return colors;
            }

            // Obter cores dinâmicas
            var colorsArray = generateColors(data)

        // Configurações do gráfico
        var options = {
            colors: colorsArray,
            title: 'Usuários por Região (Clientes e Vendedores)',
            width: 750,
        };

        // Renderizar o gráfico
        var chart = new google.visualization.PieChart(document.getElementById('graficoRegioes'));
        chart.draw(data, options);
    }
</script>
</body>

</html>