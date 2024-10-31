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
        <li><a href="/filtro-usuarios" class="menu-item"><i class="fas fa-box-open"></i>Consultar</a></li>
        <li><a href="/perfil" class="menu-item"><i class="fas fa-user"></i>Perfil</a></li>
        <li><a href="#config" class="menu-item"><i class="fas fa-cog"></i>Configurações</a></li>
        <li><a href="#sair" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
    </ul>
</nav>
<!-- Conteúdo principal da página -->
<div class="containerdashboard">
    <div class="navDash">
        <div class="headerAdmin1">
            <div class="titulo2">
                Perifa <span class="titleNavAdmin">admin</span>
            </div>
        </div>
        <div class="parte2">
            <div class="user-profile">
                <a href="{{url('/dashAdmin')}}" class="aPerifaa">
                    <img class="imgLogin" src="{{url('/images/user-icon.png')}}">
                </a>
                <div class="user-info">
                    <span class="user-name">Peter Gomes</span>
                </div>
                <div class="icons">
                    <div class="input-container-mobile">
                        <input type="search" placeholder="Pesquisar" class="input-pesquisa">
                        <button class="botao-pesquisa" data-toggle="modal" data-target="#modalSair">
                            <i class="fa-solid fa-magnifying-glass" id="pesquisaAdm"></i>
                        </button>
                    </div>
                </div>
                <!--
                <div class="icon notification">
                    <i class="fas fa-bell"></i>
                    <span class="badge">9+</span>
                </div>
                -->
            </div>
        </div>
    </div>