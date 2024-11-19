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
        Usuários Criados <span class="tempoGraficoAdmin">| Mensais</span>
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
                            Usuários por Região <span class="tempoGraficoAdmin"> | Clientes e vendedores</span>
                        </div>
                        <div id="graficoRegioes" class="graficoAcessos"></div>
                    </div>
                    <div class="bigCardGrafico">
                        <div class="titleBigGraficoAdmin">
                         Categorias mais vendidas
                         </div>
                        <div id="barchart_values" class="graficoAcessos"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
       document.addEventListener('DOMContentLoaded', function () {
    google.charts.load('current', { 'packages': ['bar'] });
    google.charts.setOnLoadCallback(drawStuff);

    async function drawStuff() {
        try {
            // Requisição para buscar os dados
            const response = await fetch('/dados-grafico');
            const data = await response.json();

            // Processa os dados para o gráfico
            const rows = [];
            rows.push(['Mês', 'Vendedores', 'Clientes']); // Cabeçalho

            const meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Ot', 'Nov', 'Dec'];
            meses.forEach(mes => {
                const vendedores = data.vendedores.find(v => v.mes === mes)?.total || 0;
                const clientes = data.clientes.find(c => c.mes === mes)?.total || 0;
                rows.push([mes, vendedores, clientes]);
            });

            // Configura o gráfico
            const chartData = google.visualization.arrayToDataTable(rows);

            const options = {
                height: '100%',
                legend: { position: 'bottom' },
                bar: { groupWidth: "80%" },
                colors: ['#ADD8E6', '#00008B']
            };

            const chart = new google.charts.Bar(document.getElementById('top_x_div'));
            chart.draw(chartData, google.charts.Bar.convertOptions(options));
        } catch (error) {
            console.error('Erro ao carregar os dados do gráfico:', error);
        }
    }
});
    </script>

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
            height: '100%', // Ajusta o gráfico para ocupar toda a altura
            legend: { position: 'none' },
            hAxis: { title: '' },
            bar: { groupWidth: "99%" },
            colors: ['#2a89c7'],
            vAxis: {
                minValue: 0, // Define o valor mínimo do eixo Y
                maxValue: 10000, // Define o valor máximo (ajuste conforme necessário)
                format: 'decimal', // Formato numérico decimal
                viewWindow: { min: 0 }, // Garante que o eixo Y começa do 0
            },
            annotations: {
                alwaysOutside: true, // Exibe os rótulos de valores sempre fora das barras
                textStyle: {
                    fontSize: 12, // Tamanho da fonte
                    bold: true, // Negrito
                    color: '#000', // Cor do texto
                }
            }
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



<script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Fazer uma requisição AJAX para buscar os dados
        fetch('/vendas-por-categoria')
            .then(response => response.json())
            .then(data => {
                // Converter os dados recebidos para o formato do gráfico
                let chartData = [["Categoria", "Vendas"]];
                data.forEach(item => {
                    chartData.push([item.categoria, parseInt(item.vendas)]);
                });

                // Gerar o DataTable do Google Charts
                var dataTable = google.visualization.arrayToDataTable(chartData);

                var options = {
                    chartArea: { width: '70%', height: '80%' },
                    colors: ['#2a89c7'],
                    width: '100%',
                    height: '100%',
                    bar: { groupWidth: "95%" },
                    legend: { position: "none" },
                };

                var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
                chart.draw(dataTable, options);
            })
            .catch(error => console.error('Erro ao carregar os dados:', error));
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
            };

            // Renderizar o gráfico
            var chart = new google.visualization.PieChart(document.getElementById('graficoRegioes'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>