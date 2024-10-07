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
            background-color: white;
        }
    </style>
    <!-- Fonte customizada para o logo -->
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    @include('includes.menuAdmin')

    <div class="adminPanelContainer">
        <div class="adminPanel">
            <div class="notifAdminPanel">
                <div class="titleNotifPanel">
                    Notificações | Pendências
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
            <div class="adminGraficoContainer">
                <div class="cardGrafico">
                    <div class="titleGraficoAdmin">
                        Acessos <span class="tempoGraficoAdmin"> | últimas 24 horas</span>
                    </div>
                    <div class="infosGraficoAdmin">
                        <div class="numerosGrafico">
                            &#11165; 64.387
                        </div>
                        <div class="titleGraficoAdminAlt">
                            Dia anterior
                        </div>
                        <div class="numerosGraficoAlt">
                            &#11167; 59.486
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">Detalhes</button>
                        </div>
                    </div>
                </div>
                <div class="cardGrafico">
                    <div class="titleGraficoAdmin">
                        Vendas <span class="tempoGraficoAdmin"> | últimas 24 horas</span>
                    </div>
                    <div class="infosGraficoAdmin">
                        <div class="numerosGrafico">
                            &#11165; 9.623
                        </div>
                        <div class="titleGraficoAdminAlt">
                            Dia anterior
                        </div>
                        <div class="numerosGraficoAlt">
                            &#11167; 9.486
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">Detalhes</button>
                        </div>
                    </div>

                </div>
                <div class="cardGrafico">
                    <div class="titleGraficoAdmin">
                        Renda gerada <span class="tempoGraficoAdmin">| últimas 24 horas</span>
                    </div>
                    <div class="infosGraficoAdmin">
                        <div class="numerosGrafico">
                            &#11165; R$51.623,00
                        </div>
                        <div class="titleGraficoAdminAlt">
                            Dia anterior
                        </div>
                        <div class="numerosGraficoAlt">
                            &#11167; R$49.486,00
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">Detalhes</button>
                        </div>
                    </div>
                </div>
                <div class="cardGrafico">
                    <div class="titleGraficoAdmin">
                        Transações <span class="tempoGraficoAdmin">| últimas 24 horas</span>
                    </div>
                    <div class="infosGraficoAdmin">
                        <div class="numerosGrafico">
                            &#11165; 8.736
                        </div>
                        <div class="titleGraficoAdminAlt">
                            Dia anterior
                        </div>
                        <div class="numerosGraficoAlt">
                            &#11167; 7.839
                        </div>
                        <div class="btnGraficoContainer">
                            <button class="btnDetalhesGrafico">Detalhes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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