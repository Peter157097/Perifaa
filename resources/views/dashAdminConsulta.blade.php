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
            <li><a href="/dashAdminDenuncias" class="menu-item"><i class="fas fa-box-open"></i>Denuncias</a></li>
            <li><a href="/dashAdminConsulta" class="menu-item selected"><i class="fas fa-box-open"></i>Consultar</a>
            </li>
            <li><a href="/perfil" class="menu-item"><i class="fas fa-user"></i>Perfil</a></li>
            <li><a href="#config" class="menu-item"><i class="fas fa-cog"></i>Configurações</a></li>
            <li><a href="#sair" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
        </ul>
    </nav>

    <!-- Conteúdo principal da página -->
    <div class="containerdashboard">
        <div class="navDash">
            <div class="parte1">
                <div class="titulo1">
                    Bem vindo de volta, Admin!
                </div>
                <div class="titulo2">
                    Consulta
                </div>
            </div>

            <div class="parte2">

                <div class="user-profile">
                    <a href="{{url('')}}" class="aPerifaa">
                        <img class="imgLogin" src="{{url('images/fotogodo.png')}}" alt="Logo Perifa">
                    </a>
                    <div class="user-info">
                        <span class="user-name">Administrador da Silva</span>
                        <span class="user-status">Admin</span>
                    </div>
                    <div class="icons">
                        <div class="icon notification">
                            <i class="fas fa-bell"></i>
                            <span class="badge">1</span>
                        </div>
                        <div class="icon search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="adminContainerConsulta">
            <div class="titleAdm">
                <p>CONSULTA</p>
            </div>
            <div class="containerInfoConsulta">
                <div class="alvoConsultaContainer">
                    <label class="titleAlvo " for="alvo">O que deseja consultar?</label>
                    <select class="optConsulta" name="alvo" id="alvo">
                        <optgroup label="Escolha">
                            <option value="cliente">Cliente</option>
                            <option value="vendedor">Vendedor</option>
                        </optgroup>
                    </select>
                </div>
                <div class="camposConsulta">
                    <form class="formConsulta">
                        <div class="testeConsulta">
                            <label for="nome">Nome</label><br>
                            <input class="labelConsulta" type="text" id="nome" name="nome"><br>
                            <button class="btnConsultaSubmit" type="submit" value="Submit">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="resultConsultaContainer">
            <div class="ConsultaCardContainer">
                <div class="cardConsulta">
                    <div class="pfpConsultaContainer">
                        <div class="pfpConsulta">
                        </div>
                    </div>
                    <div class="infoAlvoConsulta">
                        <div class="nomeUsuarioConsulta">
                            <h5 class="txtInfoUsuarioConsulta">Nome usuario</h5>
                        </div>
                        <div class="emailUsuarioConsulta">
                            <h5 class="txtInfoUsuarioConsulta">Email Usuario</h5>
                        </div>
                        <div class="roleUsuarioConsulta">
                            <h5 class="txtInfoUsuarioConsulta">Vendedor ou Usuario</h5>
                        </div>
                        <img class="iconVisualizarConsulta"src="images/visualizarUsuario.webp">
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