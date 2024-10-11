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

<div class="containerFloatImg">
          
        </div>
        <div class="titleDash">
            <p>Denuncias</p>
        </div>
        <div class="admContainerDenuncia">
        <div class="admDenuncia">
            @foreach($denuncias as $denuncia)
                <div class="cardDenuncia-top">
                    <div class="infoDenuncia">
                        <p class="nomeVendDenuncia">
                            Nome Vendedor
                        </p>
                    </div>
                </div>
                <div class="admCardDenuncia">
                    <img src="{{$denuncia->produto->imagemProduto}}" class="imgProdutoDenuncia">
                    <div class="infoDenuncia">
                        <div class="topDenuncia">
                            <p class="itemTopDenuncia">Produto</p>
                            <p class="itemTopDenuncia">Descrição</p>
                            <P class="itemTopDenuncia">Valor</P>
                            <P class="itemTopDenuncia">Id Denuncia</P>
                            <P class="itemTopDenuncia">Email</P>

                        </div>
                        <div class="bottomDenuncia">
                            <p class="itemBottomDenuncia">{{$denuncia->produto->nomeProduto ?? 'Descrição Indisponível' }}  </p>
                            <p class="itemBottomDenuncia">{{ $denuncia->produto->descricaoProduto ?? 'Descrição Indisponível' }}</p>
                            <p class="itemBottomDenuncia">{{$denuncia->Produto->valorProduto ?? 'Descrição Indisponível' }}</p>
                            <p class="itemBottomDenuncia">{{ $denuncia->idDenuncia ?? 'Descrição Indisponível' }}</p>
                            <p class="itemBottomDenuncia">{{ $denuncia->cliente->emailCliente ?? 'Nome Indisponível' }}</p>
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
</body>

</html>