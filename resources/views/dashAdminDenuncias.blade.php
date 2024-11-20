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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
     .modal-content {
        border-radius: 15px;
        padding: 20px;
        background-color: #ede9e2;
       
        border: none;
    }

    .modal-content p {
        font-weight: 600;
        color: #1f628e;
    }
    .btnAcaoExcluir a{
        background-color: #1f628e;
        padding: 10px;
        border-radius: 16px;
        text-decoration: none;
        color: #ede9e2;
    }

    .btnAcaoExcluir:hover{
       
        color: #ede9e2;
    }
    .excluir-denun a{
        color: #ede9e2;
    }

    .modal-footer button {
    all: unset;
    border: none;
    cursor: pointer;
    color: white;
}
</style>
</head>

<body class="bodyAdmin">
    @include('includes.menuAdmin')
    <div class="containerFloatImg">
    </div>
    <div class="containerAdmin">
        <div class="admContainerDenuncia">
            <div class="titleDash">
                <p>Denuncias</p>
            </div>
            <div class="admDenuncia">
                @foreach($denuncias as $denuncia)
                    <div class="cardDenuncia-top">
                        <div class="infoDenuncia-top">
                            <p class="nomeVendDenuncia">
                            <i class="fa-solid fa-shop"></i>
                                {{$denuncia->vendedor->nomeVendedor ?? 'Nome indisponivel' }}
                            </p>
                        </div>
                    </div>
                    <div class="admCardDenuncia">
                        <div class="placeholderImg">
                            <img src="{{$denuncia->produto->imagemProduto}}">
                        </div>
                        <div class="infoDenuncia">
                            <div class="topDenuncia">
                                <p class="itemTopDenuncia">Produto</p>
                                <p class="itemTopDenuncia">Motivo da denuncia</p>
                                <P class="itemTopDenuncia">Valor</P>
                                <P class="itemTopDenuncia">Id Denuncia</P>
                                <P class="itemTopDenuncia">Email</P>
                            </div>
                            <div class="bottomDenuncia">
                                <p class="itemBottomDenuncia">
                                    {{$denuncia->produto->nomeProduto ?? 'Descrição Indisponível' }}
                                </p>
                                <p class="itemBottomDenuncia">
                                    {{$denuncia->descDenuncia}}
                                </p>
                                <p class="itemBottomDenuncia">
                                    {{$denuncia->Produto->valorProduto ?? 'Descrição Indisponível' }}
                                </p>
                                <p class="itemBottomDenuncia">{{ $denuncia->idDenuncia ?? 'Descrição Indisponível' }}</p>
                                <p class="itemBottomDenuncia">{{ $denuncia->cliente->emailCliente ?? 'Nome Indisponível' }}
                                </p>
                            </div>
                            <div class="btnDenunciaContainer">
                                <button class="btnAcaoDetalhes">
                                    <a href="/entrar-produto/{{$denuncia->produto->idProduto}}">Ver anuncio</a>
                                </button>
                                 <button class="btnAcaoExcluir " data-toggle="modal"
                                    data-target="#modalExcluir">
                                    <p>Excluir denúncia</p>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog"
                                    aria-labelledby="modalExcluirLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalExcluirLabel">Excluir Denúncia</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Deseja realmente excluir esta denúncia?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('denuncia.destroy', $denuncia->idDenuncia) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btnAcaoExcluir" data-toggle="modal"
                                                        data-target="#modalExcluir">
                                                        <a>Excluir denúncia</a>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
