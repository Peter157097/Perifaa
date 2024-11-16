@php
    $totalCarrinho = \App\Models\Carrinho::count();

    $totalCarrinho -= 2;
@endphp

<style>
    .linkHomeCarrinho {
        position: relative;
        z-index: 10;
    }

    .modal-content {
        border-radius: 15px;
        padding: 20px;
        background-color: #ede9e2;
        color: #5e3e24;
        border: none;
    }

    .modal-content h2 {
        font-weight: 600;
        color: #5e3e24;
    }

    #botao-modal-cancelar {
        background-color: #ede9e2;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 18px;
        padding: 15px;
        border-radius: 10px;
        border: none;
        outline: none;
        box-shadow: none;
    }

    #botao-modal-cancelar:hover {
        color: #5e3e24;
    }

    #botao-modal-sair {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 18px;
        padding: 15px 30px;
        border-radius: 10px;
        color: #fff;
        border: none;
        outline: none;
        box-shadow: none;
        transition: background-color 0.2s ease;
    }


    button:focus,
    .btn:focus {
        outline: none;

        box-shadow: none;

    }

    button:active,
    .btn:active {
        outline: none;
        box-shadow: none;

    }

    #botao-modal-sair:focus,
    #botao-modal-sair:active {
        outline: none;
        background-color: #5e3e24;
        box-shadow: none;
    }

    .btn-primary{
        background-color: #5e3e24;
        border-color: #5e3e24;
    }

    .btn-primary:hover, 
    .btn-primary:focus, 
    .btn-primary:active, 
    .btn-primary:focus:active,
    .btn-primary:active:focus, 
    .btn-primary:visited, 
    .btn-primary:focus-visible {
        background-color: #5e3e24 !important;
        border-color: #5e3e24 !important;
        color: #fff;
        box-shadow: none !important; 
        outline: none !important; 
    }

.btn-primary:active {
    background-color: #5e3e24 !important;
    border-color: #5e3e24 !important;
    transition: none !important; 
}
</style>


@if(session('is_admin'))
    <header class="header2">
        <style>
            .header2 {
                display: flex;
                justify-content: center;

                padding: 1.5rem;
                background-color: #1f628e;
            }


            .header2 .header_icones i {
                color: #fff;
                font-size: 30px;
            }

            .header2 .botao-pesquisa i {
                color: #55504b;
                font-size: 30px;
            }

            .header2 .drop-perfil i {
                color: #1f628e;
            }

            .header2 .botao-abrir-menu i {
                color: #fff;
            }
            
        </style>
@else
    <header>
@endif
        @if(Session::has('loginAlert'))
            <script>
                alert("{{ Session::get('loginAlert') }}");
            </script>
        @endif
        @if(Session::has('cadastrarVendedor'))
            <script>
                alert("{{ Session::get('cadastrarVendedor') }}");
            </script>
        @endif
        @if(Session::has('cadastrarCliente'))
            <script>
                alert("{{ Session::get('cadastrarCliente') }}");
            </script>
        @endif
        <div class="header_direita">
            <div class="header-logo">

                <div class="botao-abrir-menu" id="botao-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="menu-mobile" id="menu-mobile">

                    <div class="botao-fechar">
                        <i class="fa-solid fa-x"></i>
                    </div>
                    <div class="input-container-mobile">
                        <input type="search" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                        <button class="botao-pesquisa" data-toggle="modal" data-target="#modalSair">
                            <i class="fa-solid fa-magnifying-glass" id="pesquisa"></i>
                        </button>
                    </div>

                    <nav class="nav-mobile"><!--Começo da nav-->
                        </style>

                        <ul>
                            <li class="drop-hover"><a class="linkHomeCarrinho" href="{{ url('/produtos') }}">ROUPAS <i
                                        class="fa-solid fa-caret-right"></i></a>
                                <div class="dropdown-menu"> <!--Começo menu dropdown das roupas-->
                                    <a href="#">Blazeres & Ternos</a>
                                    <a href="#">Blusas & Body</a>
                                    <a href="#">Calças & Leggings</a>
                                    <a href="#">Camisas</a>
                                    <a href="#">Camisetas & Regatas</a>
                                    <a href="#">Casacos & Sobretudos</a>
                                    <a href="#">Jaquetas & Moletons</a>
                                    <a href="#">Coletes & Kimonos</a>
                                    <a href="#">Conjuntos</a>
                                    <a href="#">Macacões & Jardineiras</a>
                                    <a href="#">Saias</a>
                                    <a href="#">Shorts & Bermudas</a>
                                    <a href="#">Suéteres & Cardigans</a>
                                    <a href="#">Tops & Croppeds</a>
                                    <a href="#">Vestidos</a>
                                </div> <!--Fim menu dropdown das roupas-->
                            </li>
                            </a>
                            <li class="drop-hover"><a class="linkHomeCarrinho" href="{{ url('/produtos')}}">FEMININAS <i
                                        class="fa-solid fa-caret-right"></i></a>
                                <div class="drop"> <!--Começo menu dropdown da categoria feminina-->
                                    <a href="#">Bermudas</a>
                                    <a href="#">Blazer</a>
                                    <a href="#">Camisa</a>
                                    <a href="#">Body</a>
                                    <a href="#">Calça</a>
                                    <a href="#">Croppeds</a>
                                    <a href="#">Camisa</a>
                                    <a href="#">Shorts</a>
                                    <a href="#">Casaco</a>
                                    <a href="#">Colete</a>
                                    <a href="#">Conjuntos</a>
                                    <a href="#">Macacão</a>
                                    <a href="#">Saia</a>
                                    <a href="#">Vestido</a>
                                    <a href="#">Kimono</a>
                                </div> <!--Fim menu dropdown da categoria feminina-->
                            </li>
                            <li class="drop-hover"><a href="#" class="nav-hover">MASCULINAS <i
                                        class="fa-solid fa-caret-right"></i></a>
                                <div class="drop"> <!--Começo menu dropdown da categoria Masculina-->
                                    <a href="#">Bermudas</a>
                                    <a href="#">Camisas</a>
                                    <a href="#">Blusa</a>
                                    <a href="#">Body</a>
                                    <a href="#">Calças</a>
                                    <a href="#">Croppeds</a>
                                    <a href="#">Camisa</a>
                                    <a href="#">Shorts</a>
                                    <a href="#">Casaco</a>
                                    <a href="#">Colete</a>
                                    <a href="#">Conjuntos</a>
                                    <a href="#">Suéteres</a>
                                </div> <!--Fim menu dropdown da categoria Masculina-->
                            </li>
                            <li class="drop-hover"><a href="#" class="nav-hover">CALÇADOS <i
                                        class="fa-solid fa-caret-right"></i></a>
                                <div class="drop"> <!--Começo menu dropdown da categoria calçados-->
                                    <a href="#">Botas</a>
                                    <a href="#">Sandálias</a>
                                    <a href="#">Sapatos</a>
                                    <a href="#">Tênis</a>
                                </div> <!--Fim menu dropdown da categoria calçados-->
                            </li>
                            <li class="drop-hover"><a href="#" class="nav-hover">INFANTIL <i
                                        class="fa-solid fa-caret-right"></i></a>
                                <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                                    <a href="#">Bermudas</a>
                                    <a href="#">Blazer</a>
                                    <a href="#">Camisa</a>
                                    <a href="#">Body</a>
                                    <a href="#">Calça</a>
                                    <a href="#">Croppeds</a>
                                    <a href="#">Camisa</a>
                                    <a href="#">Shorts</a>
                                    <a href="#">Casaco</a>
                                    <a href="#">Colete</a>
                                    <a href="#">Conjuntos</a>
                                    <a href="#">Macaquinho</a>
                                    <a href="#">Saia</a>
                                    <a href="#">Vestido</a>
                                </div> <!--Fim menu dropdown da categoria infantil-->
                            </li>
                            <li class="drop-hover" id="hover-marrom"><a href="#" class="nav-hover">BOLSAS & MOCHILAS <i
                                        class="fa-solid fa-caret-right"></i></a>
                                <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                                    <a href="#">Bolsas</a>
                                    <a href="#">Mochilas & Pochetes</a>
                                </div> <!--Fim menu dropdown da categoria infantil-->
                            </li>
                            <li><a href="#" class="nav-hover">CONTATO</i></a></li>
                        </ul>
                    </nav><!--Fim do menu mobile-->

                    @if(session('is_admin'))
                            </div><a href="{{ url('/') }}">
                                <img class="logoBranca" src="{{url('images/logoPerifa-branca.png')}}" alt="Logo perifa">
                            </a>
                        </div>
                    @else
                        </div><a href="{{ url('/') }}">
                            <img class="logo" src="{{url('images/logo.png')}}" alt="Logo perifa">
                        </a>
                        </div>
                    @endif
        <div class="header_icones">
            <div class="header_pesquisa">
                <div class="input-container">
                    <form action="{{ route('produtos.search') }}" method="GET" class="formPesquisa">
                        <input type="text" name="query" class="input-pesquisa" placeholder="Pesquisar produtos..."
                            required>
                        <button type="submit" class="botao-pesquisa"> <i class="fa-solid fa-magnifying-glass"
                                id="pesquisa"></i></button>
                    </form>
                </div>
            </div>


            <li class="drop-hover-perfil">
                @if (session('is_vendedor') || session('is_Cliente') || session('is_admin'))
                    <button class="abrir-modal" data-modal="modal-1" disabled>
                        <i class="bi bi-person-circle"></i>
                    </button>
                @else
                    <a href="#">
                        <button class="abrir-modal" data-modal="modal-1">
                            <i class="bi bi-person-circle"></i>
                        </button>
                    </a>
                @endif

                @if(session('is_vendedor'))
                    <div class="drop-perfil"> <!--Começo menu dropdown das roupas-->
                        <a href="{{ url('/dashboardVendedor') }}" id="link-perfil"><i class="bi bi-kanban"></i>Dashboard</a>
                        <a href="{{ url('/mensagens') }}"><i class="fa-solid fa-message"></i>Mensagens</a>
                        <a href="{{ url('/pedidos') }}"><i class="fa-solid fa-receipt"></i>Pedidos</a>
                        <a href="#" id="link-perfil"><i class="fa-solid fa-circle-question"></i>Ajuda</a>
                        <a href="{{ url('/logout') }}" id="link-perfil"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a>



                    </div> <!--Fim menu dropdown das roupas-->
                    <!--vendedor -->
                @elseif(session('is_Cliente'))
                            <!--cliente -->


                            <a href="#" class="carrinhoEntrar">
                                <i class="fa-solid fa-bag-shopping">
                                    <span class="qtdCarrinho">{{$totalCarrinho}}</span>
                                </i>
                            </a>

                            <div class="drop-perfil"> <!--Começo menu dropdown das roupas-->
                                <a href="{{ url('/perfil') }}"><i class="fa-solid fa-user"></i>Meu perfil</a>
                                <a href="{{ url('/mensagens') }}"><i class="fa-solid fa-message"></i>Mensagens</a>
                                <a href="{{ url('/pedidos') }}"><i class="fa-solid fa-receipt"></i>Pedidos</a>
                                <a href="{{ url('/favorites') }}"><i class="fa-solid fa-heart"></i>Favoritos</a>
                                <a href="{{url('carrinho')}}"><i class="fa-solid fa-cart-shopping"></i>Carrinho</a>
                                <a href="{{url('/centralAjuda')}}"><i class="fa-solid fa-circle-question"></i>Ajuda</a>
                                <a href="{{ url('/logout') }}"  data-toggle="modal" data-target="#modalSair"><i
                                        class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a><!--o data-toggle e data-target fazem o modal abrir quando clica no link-->
                            </div> <!--Fim menu dropdown das roupas-->

                    </div> <!--Fim menu dropdown das roupas-->
        
                        @elseif(session('is_admin'))
                    <div class="drop-perfil"> <!--Começo menu dropdown das roupas-->
                        <a href="{{ url('/dashAdmin') }}" id="link-perfil"><i class="bi bi-kanban"></i>Dashboard</a>
                        <a href="{{ url('/logout') }}" id="link-perfil"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a>
                    </div> <!--Fim Drop do admin-->
                    <!--vendedor -->
                @elseif(session('is_Cliente'))
                    <!--cliente -->

                    <a href="#"><i class="fa-solid fa-bag-shopping">{{$totalCarrinho}}</i></a>

                    <div class="drop-perfil"> <!--Começo menu dropdown das roupas-->
                        <a href="{{ url('/perfil') }}"><i class="fa-solid fa-user"></i>Meu perfil</a>
                        <a href="{{ url('/mensagens') }}"><i class="fa-solid fa-message"></i>Mensagens</a>
                        <a href="{{ url('/favorites') }}"><i class="fa-solid fa-heart"></i>Favoritos</a>
                        <a href="{{url('carrinho')}}"><i class="fa-solid fa-cart-shopping"></i>Carrinho</a>
                        <a href="#"><i class="fa-solid fa-circle-question"></i>Ajuda</a>
                        <a href="{{ url('/logout') }}" data-toggle="modal" data-target="#modalSair"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a><!--o data-toggle e data-target fazem o modal abrir quando clica no link-->
                    </div> <!--Fim menu dropdown das roupas-->

                @endif


        <!-- Modal Sair -->

       <!-- Modal -->

<div class="modal fade" id="modalSair" tabindex="-1" role="dialog" aria-labelledby="modalSairLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSairLabel">Sair</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja mesmo sair?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="{{ url('/logout') }}" class="btn btn-primary">Sair</a>
            </div>
        </div>
    </div>
</div>

            </li>
            <!--modal 1-->
            <dialog id="modal-1">
                <div class="modal-header">
                    <h1 class="modal-title">
                        Entrar na Perifa
                    </h1>
                    <button class="fechar-modal" data-modal="modal-1" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="inputs">
                            <label for="email">Email</label>
                            <input type="email" id="emailCliente" name="emailCliente" placeholder="nome@gmail.com"
                                required>
                        </div>
                        <div class="inputs">
                            <label for="password">Senha</label>
                            <input type="password" id="senhaCliente" name="senhaCliente" placeholder="••••••••"
                                required>
                        </div>

                        <div class="senha-opcoes">
                            <a href="{{ url('/enviar-codigo-form') }}" class="esqueci-senha" >Esqueci minha senha</a>
                        </div>
                        <div class="login-botao">
                            <button type='submit'>Entrar</button>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                </div>
                <div class="cadastrar">
                    <span>Não tem uma conta?</span>
                    <a href="#" class="abrir-modal" data-modal="modal-2">Clique aqui</a>
                </div>
                </form>
            </dialog>

            

            <!-- Modal 2 -->
            <dialog id="modal-2">
                <form class="form" action="{{ url('/Cliente') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title">Cadastre-se na Perifa</h1>
                        <button class="fechar-modal" data-modal="modal-2" type="button">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="input-group">
                        <div class="inputs">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="nomeCliente" placeholder="Ex: Maria Eduarda Silva"
                                required>
                        </div>
                        <div class="inputs">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="emailCliente" placeholder="nome@gmail.com" required>
                        </div>
                        <div class="inputs">
                            <label for="email">CPF</label>
                            <input type="text" id="cpf" name="cpfCliente" placeholder="nome@gmail.com" required>
                        </div>
                        <div class="inputs">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="numeroCliente" placeholder="(DD)XXXXX-XXXX" required>
                        </div>
                        <div class="inputs">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cepCliente" onblur="pesquisacep(this.value);" required>
                        </div>
                        <div class="inputs">
                            <label for="rua">Rua</label>
                            <input type="text" id="rua" name="logradouroCliente" required>
                        </div>
                        <div class="inputs">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="bairro" name="bairroCliente" required>
                        </div>
                        <div class="inputs">
                            <label for="estadoCliente">Estado</label>
                            <input type="text" name="estadoCliente" id="estado" required>
                        </div>
                        <div class="inputs">
                            <label for="cidadeCliente">Cidade</label>
                            <input type="text" name="cidadeCliente" id="cidade" required>
                        </div>
                        <div class="inputs">
                            <label for="complemento">Complemento</label>
                            <input type="text" id="complemento" name="complementoCliente">
                        </div>

                        <div class="inputs">
                            <label for="numeroCasa">Número da casa</label>
                            <input type="text" id="numeroCasa" name="numCasaCliente" required>
                        </div>
                        <div class="inputs">
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="senhaCliente" placeholder="••••••••" required>
                        </div>
                    </div>
                    <div class="tudo_preferencia">
                        <h6 class="texto_preferencia">Tenho interesse em roupas</h6>
                        <div class="preferencia">
                            <div>
                                <input type="radio" id="roupasFemininas" name="preferencia" value="feminina" />
                                <label for="roupasFemininas">Femininas</label>
                            </div>
                            <div>
                                <input type="radio" id="roupasMasculinas" name="preferencia" value="masculina" />
                                <label for="roupasMasculinas">Masculinas</label>
                            </div>
                        </div>
                    </div>

                    <div class="login-botao">
                        <input type="submit" value="Cadastrar">
                    </div>
                    <div class="cadastrar2">
                        <a class="fechar-modal" data-modal="modal-2" id="have-account">Já tenho conta</a>
                        <a href="#" class="abrir-modal" data-modal="modal-3" id="perifa-vender">Quero vender na
                            perifa</a>
                    </div>
                </form>
            </dialog>

            <!-- Modal 3 -->
            <dialog id="modal-3">
                <form class="form" action="{{ url('/Vendedor') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title">Venda na Perifa</h1>
                        <button class="fechar-modal" data-modal="modal-3" type="button">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="input-group">
                        <div class="inputs">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="nomeVendedor" placeholder="Ex: Maria Eduarda Silva"
                                required>
                        </div>
                        <div class="inputs">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="emailVendedor" placeholder="nome@gmail.com" required>
                        </div>
                        <div class="inputs">
                            <label for="email">CPF</label>
                            <input type="text" id="cpf" name="cpfVendedor" placeholder="nome@gmail.com" required>
                        </div>
                        <div class="inputs">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="numeroVendedor" name="numeroVendedor" placeholder="(DD)XXXXX-XXXX"
                                required>
                        </div>
                        <div class="inputs">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cepVendedor" onblur="pesquisacep(this.value);" required>
                        </div>
                        <div class="inputs">
                            <label for="rua">Rua</label>
                            <input type="text" name="logradouroVendedor" id="rua" required>
                        </div>
                        <div class="inputs">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairroVendedor" id="bairro" required>
                        </div>
                        <div class="inputs">
                            <label for="estadoVendedor">Estado</label>
                            <input type="text" name="estadoVendedor" id="estado" required>
                        </div>
                        <div class="inputs">
                            <label for="cidadeVendedor">Cidade</label>
                            <input type="text" name="cidadeVendedor" id="cidade" required>
                        </div>

                        <div class="inputs">
                            <label for="complemento">Complemento</label>
                            <input type="text" id="complemento" name="complementoVendedor">
                        </div>
                        <div class="inputs">
                            <label for="numeroCasa">Número da casa</label>
                            <input type="text" id="numeroCasa" name="numCasaVendedor" required>
                        </div>
                        <div class="inputs">
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="senhaVendedor" placeholder="••••••••">
                        </div>
                    </div>

                    <div class="login-botao">
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>
            </dialog>

        <dialog id="modal-4">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Esqueci minha senha
                    </h2>
                    <button class="fechar-modal" data-modal="modal-4" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/login') }}" method="POST">
                        <h3>Seu endereço de E-mail aqui</h3>
                        <h5>Insira o endereço de E-mail associado à sua conta</h5>
                        <div class="inputs">
                            <label for="email">Email</label>
                            <input type="email" id="emailCliente" name="emailCliente" placeholder="nome@gmail.com"
                                required>
                        </div>                      

    
                        <div class="login-botao">
                            <button class="abrir-modal-5">Recuperar senha</button>
                        </div>
                    </form>
                </div>
               
            </dialog> 
            <dialog id="modal-5">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Verificação de E-mail
                    </h2>
                    <button class="fechar-modal" data-modal="modal-5" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/login') }}" method="POST">
                        <h3>Pegue seu código</h3>
                        <h5>Insira o código de 4 dígitos que será enviado para o seu endereço de e-mail.
                        </h5>
                        <div class="codigo-inputs">
                            <input type="text" maxlength="1" class="codigo" id="codigo1">
                            <input type="text" maxlength="1" class="codigo" id="codigo2">
                            <input type="text" maxlength="1" class="codigo" id="codigo3">
                            <input type="text" maxlength="1" class="codigo" id="codigo4">
                        </div>                    
                        <p class="reenviar">Você não recebeu o código? <a href="#">reenviar</a></p>
                        <div class="login-botao">
                            <button class="abrir-modal-6">Verificar</button>
                        </div>
                    </form>
                </div>
            </dialog>

            <dialog id="modal-6">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Redefinir senha
                    </h2>
                    <button class="fechar-modal" data-modal="modal-6" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/login') }}" method="POST">
                        <h3>Insira a nova senha</h3>
                        <h5>Sua nova senha deve ser diferente da senha usada anteriormente</h5>
                        <div class="inputs">
                            <label for="senha">Digite a senha</label>
                            <input type="senha" id="senhaCliente" name="senhaCliente" placeholder="*********"
                                required>
                            <label for="senha">Digite a senha novamente</label>
                            <input type="senha" id="senhaCliente" name="senhaCliente" placeholder="*********"
                                required>
                        </div>                      

    
                        <div class="login-botao">
                            <button type='submit'>Continuar</button>
                        </div>
                    </form>
                </div>
               
            </dialog>
        </div>
        </div>

    </header> <!--Fim da header-->


    <script>
        function limpa_formulario_cep(modal) {
            modal.querySelector('#rua').value = "";
            modal.querySelector('#bairro').value = "";
            modal.querySelector('#cidade').value = "";
            modal.querySelector('#estado').value = "";
        }

        // Função de callback para processar a resposta da API ViaCEP
        function meu_callback(conteudo, modal) {
            if (!("erro" in conteudo)) {
                modal.querySelector('#rua').value = conteudo.logradouro;
                modal.querySelector('#bairro').value = conteudo.bairro;
                modal.querySelector('#cidade').value = conteudo.localidade;
                modal.querySelector('#estado').value = conteudo.uf;
            } else {
                limpa_formulario_cep(modal);
                alert("CEP não encontrado.");
            }
        }

        // Função para pesquisar o CEP e obter os dados da API ViaCEP
        function pesquisacep(valor, modal) {
            var cep = valor.replace(/\D/g, '');

            if (cep !== "") {
                var validacep = /^[0-9]{8}$/;

                if (validacep.test(cep)) {
                    modal.querySelector('#rua').value = "...";
                    modal.querySelector('#bairro').value = "...";
                    modal.querySelector('#cidade').value = "...";
                    modal.querySelector('#estado').value = "...";

                    var script = document.createElement('script');
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=callbackCep';
                    document.body.appendChild(script);

                    window.callbackCep = function (conteudo) {
                        meu_callback(conteudo, modal);
                    };

                } else {
                    limpa_formulario_cep(modal);
                    alert("Formato de CEP inválido.");
                }
            } else {
                limpa_formulario_cep(modal);
            }
        }


        document.querySelector('#modal-3').addEventListener('blur', function (e) {
            if (e.target.id === 'cep') {
                pesquisacep(e.target.value, document.querySelector('#modal-3'));
            }
        }, true);

        document.querySelector('#modal-2').addEventListener('blur', function (e) {
            if (e.target.id === 'cep') {
                pesquisacep(e.target.value, document.querySelector('#modal-2'));
            }
        }, true);

        
        $(document).ready(function () {
            // Aplica máscaras ao Modal 3
            $("#cpf").mask("000.000.000-00");
            $("#telefone").mask("(00) 00000-0000");
            $("#cep").mask("00000-000");
            $("#numeroVendedor").mask("(00) 00000-0000");
        });
    </script>
