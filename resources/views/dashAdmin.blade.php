<!DOCTYPE html>
<html lang="pt-BR">
@include('includes.head')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            margin: 0;
            padding: 0;
            display: flex;
            width: 100%;
            height: 100%;
            background-color: #eee9e4;
        }
    </style>
    <!-- Fonte customizada para o logo -->
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <!-- Ícone do menu hambúrguer -->
    <div class="hamburger" id="hamburger" onclick="toggleMenu()">
        &#9776;
    </div>

    <!-- Menu lateral -->
    <nav id="sidebar" class="sidebar">
        <div class="logo">
            <a href="{{url('')}}" class="aPerifa">
                <img class="img-dashboard" src="{{url('images/logo-branca.png')}}" alt="Logo Perifa">
            </a>
        </div>
        <ul>
            <li><a href="/dashAdmin" class="menu-item selected"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li><a href="/dashAdminDenuncias" class="menu-item"><i class="fas fa-box-open"></i>Denuncias</a></li>
            <li><a href="/filtro-usuarios" class="menu-item"><i class="fas fa-box-open"></i>Consultar</a></li>
            <li><a href="/perfil" class="menu-item"><i class="fas fa-user"></i>Perfil</a></li>
            <li><a href="#config" class="menu-item"><i class="fas fa-cog"></i>Configurações</a></li>
            <li><a href="#sair" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
        </ul>
    </nav>

    <!-- Conteúdo principal da página -->
    <div class="containerdashboard">
        <div class="navDash">
            <div class="parte1">
                <div class="titulo2">
                    Dashboard
                </div>
            </div>

            <div class="parte2">

                <div class="user-profile">
                    <a href="{{url('/dashAdmin')}}" class="aPerifaa">
                        <img class="imgLogin" src="{{url('/images/user-icon.png')}}">
                    </a>
                    <div class="user-info">
                        <span class="user-name">Peter Gomes</span>
                        <span class="user-status">Admin</span>
                    </div>
                    <div class="icons">
                        <div class="input-container-mobile">
                            <input type="search" placeholder="Pesquisar" class="input-pesquisa">
                            <button class="botao-pesquisa" data-toggle="modal" data-target="#modalSair">
                                <i class="fa-solid fa-magnifying-glass" id="pesquisaAdm"></i>
                            </button>
                        </div>
                    </div>
                    <div class="icon notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">9+</span>
                    </div>
                </div>
            </div>


        </div>
        <div class="floatImageAdmContainer">
            <div class="divFloat">
                <div class="floatImageAdm">
                    <img class="floatImage" src="{{url('/images/adminFloatImage1.png')}}">
                </div>
                <h4 class="txtFloatImage">
                    Ajude a manter uma boa comunidade, vistorie anúncios, denuncias e
                    perfis suspeitos!
                </h4>
            </div>
            <div class="divFloat">
                <h4 class="txtFloatImage">
                    Antes de vigiar denuncias, perfis e anúncios, saiba o que pode ferir
                    as diretrizes da Perifa.
                </h4>
                <div class="floatImageAdm">
                    <img class="floatImage" src="{{url('/images/adminFloatImage2.png')}}">
                </div>
            </div>

        </div>


        <!--Area do grafico-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
        </script>
        <div class="titleDash">
            Gráfico de cadastros
        </div>
        <div class="areaGrafico">

            <canvas id="myChartPie" style="width:100%;max-width:60%"></canvas>

        </div>


        <script>
            const xValues = ["Jan.", "Fev.", "Mar.", "Abril", "Maio", "Jun.", "Jul.", "Ago.", "Set.", "Out.", "Nov.", "Dez."];
            const yValues = [20, 25, 30, 25, 30, 35, 45, 40, 52, 30, 25, 33];
            const barColors = "rgb(22, 84, 121)";

            new Chart("myChartPie", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: "Número de usuários cadastrados"
                    }
                }
            });

        </script>
        <!---->


        <div class="titleDash">
            Produtos mais denunciados
        </div>
        <div class="admDenunciasContainer">
            @foreach($denuncias as $denuncia)
                <div class="itemDenuncia">
                    <div class="imgProduto">
                        <img src="{{$denuncia->produto->imagemProduto}}" class="imgProdutoDenuncia">
                    </div>
                    <div class="infoProdutoDenuncia">
                        <div class="infoProdutoCategoria">
                            <p class="itemCategoriaDenuncia">Brechó da Maria</p>
                            <p class="itemCategoriaDenuncia">Valor</p>
                            <p class="itemCategoriaDenuncia">Motivo da denuncia</p>
                            <p class="itemCategoriaDenuncia">Id da denuncia</p>
                            <p class="itemCategoriaDenuncia">E-mail cliente</p>

                        </div>
                        <div class="infoProdutoCategoria">
                            <p class="itemInfoDenuncia">
                                {{$denuncia->Produto->nomeProduto ?? 'Descrição Indisponível' }}
                            </p>
                            <p class="itemInfoDenuncia">{{$denuncia->Produto->valorProduto ?? 'Descrição Indisponível' }}
                            </p>
                            <p class="itemInfoDenuncia">
                                {{ $denuncia->produto->descricaoProduto ?? 'Descrição Indisponível' }}
                            </p>
                            <p class="itemInfoDenuncia">
                                {{ $denuncia->idDenuncia ?? 'Descrição Indisponível' }}
                            </p>
                            <p class="itemInfoDenuncia">
                                {{ $denuncia->cliente->emailCliente ?? 'Nome Indisponível' }}
                            </p>
                        </div>
                        <div class="acoesDenuncia">
                            <a href="{{ url('/entrar-produto', $denuncia->Produto->idProduto)}}">
                                <p class="analisarDenuncia">Ver anuncio</p>
                            </a>
                            <form action="{{ route('denuncia.destroy', $denuncia->idDenuncia) }}" method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir esta denúncia?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btaoremover">Excluir Denúncia</button>
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach
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


</body>

</html>