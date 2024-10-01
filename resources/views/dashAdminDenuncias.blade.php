<!DOCTYPE html>
<html lang="pt-BR">
@include('includes.head')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral Estilo Perifa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: Arial, sans-serif;
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
            <li><a href="/dashAdmin" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li><a href="/dashAdminDenuncias" class="menu-item  selected"><i class="fas fa-box-open"></i>Denuncias</a>
            </li>
            <li><a href="/filtro-usuarios" class="menu-item"><i class="fas fa-box-open"></i>Consultar</a></li>
            <li><a href="#saques" class="menu-item"><i class="fas fa-wallet"></i>Saques</a></li>
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
        <div class="containerFloatImg">
            <div class="floatImageAdmin">
                <img class="floatImage" src="{{url('/images/floatImageDenuncia.png')}}">
            </div>
        </div>
        <div class="titleAdm">
            <p>Denuncias</p>
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
                                <button type="submit" class="btaoremover">Excluir Denuncia</button>
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
    <!-- asd
    
    @foreach($denuncias as $denuncia)
        <div class="denunciasCards">
            <div class="denuncia">
                <div class="conteudoCardAdmin">
                    <div class="tituloAdminDenunciaProduto">

                    </div>
                    <a href="#" class="linkParaOproduto">

                    </a>
                    <br>
                    <br>
                    <div class="tituloAdminDenunciaProduto">
                        Nome do Produto
                    </div>
                    <div class="textoAdminDenunciaProduto">
                        {{$denuncia->Produto->nomeProduto ?? 'Descrição Indisponível' }}
                    </div>
                    <div class="tituloAdminDenunciaProduto">
                        Descrição produto
                    </div>
                    <div class="textoAdminDenunciaProduto">
                        {{ $denuncia->produto->descricaoProduto ?? 'Descrição Indisponível' }}
                    </div>
                    <div class="tituloAdminDenunciaProduto">
                        Nome e E-mail do Cliente
                    </div>
                    <div class="textoAdminDenunciaProduto">
                        {{ $denuncia->cliente->nomeCliente ?? 'Nome Indisponível' }}
                    </div>
                    <div class="textoAdminDenunciaProduto">

                    </div>
                    <br>
                    <div class="tituloAdminDenunciaProduto">
                        Descrição do Problema
                    </div>
                    <div class="textoAdminDenunciaProduto">
                        {{$denuncia->descDenuncia ?? 'Descrição Indisponível' }}
                    </div>
                </div>
                <div class="iconAdminDenuncia">
                    <div class="parte1Icon">
                        <i class="fa-solid fa-box-open caixa"></i>
                        <h3>
                            id Denúncia
                        </h3>
                        <h4>
                            {{ $denuncia->idDenuncia ?? 'Descrição Indisponível' }}
                        </h4>
                    </div>
                    <div class="parte2icon">
                       
                        <i class="fa-solid fa-trash trash-icon"></i>

                        
                        <form action="{{ route('denuncia.destroy', $denuncia->idDenuncia) }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja excluir esta denúncia?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btaoremover">Remover</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
     -->

</body>

</html>