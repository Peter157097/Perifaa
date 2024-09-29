<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: Arial, sans-serif;
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

        .card-container {
            display: flex;
            justify-content: space-between;
            background-color: #00a849;
            border-radius: 15px;
            padding: 20px;
            width: 100%;
            max-width: 1100px;
            margin: 20px auto;
            color: #fff;
            border: 3px solid #000;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease-in-out, transform 0.4s ease-in-out;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 0.7s forwards ease-in-out;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-container:hover {
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            transform: scale(1.02);
        }

        .form-section {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            width: 20%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 14px;
            background-color: #007e38;
            color: #fff;
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, transform 0.2s;
        }

        input::placeholder,
        textarea::placeholder {
            color: #ddd;
            transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out;
        }

        input:focus::placeholder,
        textarea:focus::placeholder {
            transform: translateY(-10px);
            opacity: 0;
        }

        input:focus,
        select:focus,
        textarea:focus {
            background-color: #00cc5a;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            outline: none;
            transform: scale(1.02);
        }

        input:hover,
        select:hover,
        textarea:hover {
            background-color: #00994b;
            transform: scale(1.01);
        }

        textarea {
            resize: none;
        }

        .image-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 30%;
        }

        .image-upload {
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
        }

        .image-upload img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            background-color: #ccc;
            border: 2px solid #000;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .image-upload img:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        .upload-btn {
            padding: 10px 15px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .upload-btn:hover {
            background-color: #555;
            transform: scale(1.05);
        }

        .upload-btn:active {
            transform: scale(0.98);
        }

        .caixa-botao {
            position: relative;
            margin-top: 35vh;
            display: inline-block;
            text-align: center;
        }

        .finalizar-cadastro-botao {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .imagem-personagem {
            position: absolute;
            bottom: 35%;
            left: 50%;
            transform: translateX(-50%);
        }

        .imagem-personagem img {
            width: 50vh;
            height: auto;
        }

        .finalizar-cadastro-botao {
            margin-top: 80px;
        }

        .part3rs {
            display: flex;
            width: 100%;
            flex-direction: column;
        }

        .finalizar-cadastro-botao {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Efeito ao passar o mouse */
        .finalizar-cadastro-botao:hover {
            background-color: #218838;
            /* Um verde mais escuro */
            transform: translateY(-5px);
            /* Eleva o botão levemente */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            /* Adiciona uma sombra mais pronunciada */
        }

        /* Efeito ao clicar */
        .finalizar-cadastro-botao:active {
            transform: translateY(-2px) scale(0.98);
            /* Leve redução de escala para dar a sensação de clique */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* Sombra mais leve */
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



        <div class="part3rs">
            <div class="card-container">
                <div class="form-section">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" placeholder="João Pedro">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" id="valor" placeholder="R$">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" placeholder="Peça em bom estado, nunca usada"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <div class="form-group">
                        <label for="cor1">Cor</label>
                        <select id="cor1">
                            <option>Selecione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tamanho1">Tamanho</label>
                        <select id="tamanho1">
                            <option>Selecione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categoria1">Categoria</label>
                        <select id="categoria1">
                            <option>Selecione</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <div class="form-group">
                        <label for="cor2">Região</label>
                        <select id="cor2">
                            <option>Selecione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tamanho2">Gênero</label>
                        <select id="tamanho2">
                            <option>Selecione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categoria2">Condição</label>
                        <select id="categoria2">
                            <option>Selecione</option>
                        </select>
                    </div>
                </div>

                <div class="image-section">
                    <div class="image-upload">
                        <img src={{url('images/anexImg.png')}} alt="Imagem do produto">
                    </div>
                    <button class="upload-btn">Anexar uma Imagem</button>
                </div>
            </div>

            <div class="caixa-botao">
                <div class="imagem-personagem">
                    <img src="{{url('images/botaoCad.png')}}" alt="Personagem">
                </div>

                <button class="finalizar-cadastro-botao">Tudo pronto? Finalize o cadastro!</button>
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

</body>

</html>