<!-- Ícone do menu hambúrguer -->
<style>
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



    @media (max-width: 768px) {
        /* Estilos para telas menores */

        /* Ícone do menu hambúrguer */
        .hamburger {
            top: 15px;
            left: 15px;
            font-size: 24px;
        }

        /* Menu lateral */
        .sidebar {
            width: 200px;
            /* Reduz a largura do menu */
            left: -200px;
            /* Ajuste a posição inicial */
        }

        .sidebar.open {
            left: 0;
            /* Menu expandido */
        }

        /* Ajuste do texto e espaçamento nos itens do menu */
        .sidebar ul li a {
            font-size: 14px;
            padding: 10px;
            margin-right: 10px;
        }

        /* Reorganização da barra de navegação da dashboard */
        .navDash {
            padding: 10px;
            align-items: flex-start;
        }

        .parte1,
        .parte2 {
            padding: 10px;
            text-align: left;
        }

        /* Ajuste das fontes para dispositivos móveis */
        .titulo1 {
            font-size: 14px;
        }

        .titulo2 {
            font-size: 20px;
        }

        /* Ajuste do perfil de usuário */
        .user-profile {
            flex-direction: row;
            gap: 5px;
        }

        .user-info .user-name,
        .user-info .user-status {
            font-size: 12px;
        }

        .icons .icon {
            width: 25px;
            height: 25px;
            font-size: 12px;
        }

        /* Ajuste dos ícones */
        .icon .fas {
            font-size: 14px;
        }

        /* Notificação do badge */
        .notification .badge {
            width: 10px;
            height: 10px;
            font-size: 7px;
        }
    }
</style>
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
        <li><a href="{{url('dashboardVendedor')}}" class="menu-item selected"><i
                    class="fas fa-tachometer-alt"></i>Dashboard</a></li>
        <li><a href="{{url('cadastrarProdutosVendedor')}}" class="menu-item"><i class="fas fa-box-open"></i>Cadastrar
                Produtos</a></li>
        <li><a href="#saques" class="menu-item"><i class="fas fa-envelope"></i>Mensagens</a></li>
        <li><a href="{{url('editarPerfilVendedor')}}" class="menu-item"><i class="fas fa-user"></i>Perfil</a></li>
        <li><a href="{{url('produtosVendedor')}}" class="menu-item"><i class="fas fa-cog"></i>Produtos</a></li>
        <li><a href="{{ url('/logout') }}" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
    </ul>
</nav>

<!-- Conteúdo principal da página -->
<div class="containerdashboard">
    <div class="navDash">
        <div class="parte1">
            <div class="titulo1">
                Bem vindo de volta, {{ session('nomeVendedor') }}!
            </div>
            <div class="titulo2">
                Dashboard Vendedor
            </div>
        </div>

        <div class="parte2">

            <div class="user-profile">
                <a href="{{url('')}}" class="aPerifaa">
                    <img class="imgLogin" src="{{ session('imagemVendedor') }}" alt="Logo Perifa">
                </a>
                <div class="user-info">
                    <span class="user-name">{{ session('nomeVendedor') }}</span>
                    <span class="user-status">$2,000.05 | VIP Member</span>
                </div>
                <div class="icons">
                    <div class="icon notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">1</span>
                    </div>
                    <div class="icon search">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="icon menu">
                        <i class="fas fa-bars"></i>
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

    </script>