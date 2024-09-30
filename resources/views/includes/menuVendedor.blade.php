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
            <li><a href="{{url('dashboardVendedor')}}" class="menu-item selected"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li><a href="{{url('cadastrarProdutosVendedor')}}" class="menu-item"><i class="fas fa-box-open"></i>Cadastrar Produtos</a></li>
            <li><a href="#saques" class="menu-item"><i class="fas fa-wallet"></i>Saques</a></li>
            <li><a href="#perfil" class="menu-item"><i class="fas fa-user"></i>Perfil</a></li>
            <li><a href="#config" class="menu-item"><i class="fas fa-cog"></i>Configurações</a></li>
            <li><a href="#sair" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
        </ul>
    </nav>

    <!-- Conteúdo principal da página -->
    <div class="containerdashboard">
        <div class="navDash">
            <div class="parte1">
                <div class="titulo1">
                    Bem vindo de volta, Alfredo!
                </div>
                <div class="titulo2">
                    Cadastrar Produtos
                </div>
            </div>

            <div class="parte2">

                <div class="user-profile">
                    <a href="{{url('')}}" class="aPerifaa">
                        <img class="imgLogin" src="{{url('images/fotogodo.png')}}" alt="Logo Perifa">
                    </a>
                    <div class="user-info">
                        <span class="user-name">Alfredo Torres</span>
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