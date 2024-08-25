<header> 
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
                    <input type="text" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                    <button class="botao-pesquisa">
                        <i class="fa-solid fa-magnifying-glass" id="pesquisa"></i>
                    </button>
                        
                </div>   
               
    <nav class="nav-mobile"><!--Começo da nav-->
        <ul>
            <li class="drop-hover"><a class="nav-hover" >ROUPAS <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown das roupas-->
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
            <li class="drop-hover"><a href="#" class="nav-hover">FEMININAS <i class="fa-solid fa-caret-right"></i></a>
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
            <li class="drop-hover"><a href="#" class="nav-hover">MASCULINAS <i class="fa-solid fa-caret-right"></i></a>
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
            <li class="drop-hover"><a href="#" class="nav-hover">CALÇADOS <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown da categoria calçados-->
                        <a href="#">Botas</a>
                        <a href="#">Sandálias</a>
                        <a href="#">Sapatos</a>
                        <a href="#">Tênis</a>
                </div> <!--Fim menu dropdown da categoria calçados-->
            </li>
            <li class="drop-hover" ><a href="#" class="nav-hover" >INFANTIL <i class="fa-solid fa-caret-right"></i></a>
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
            <li class="drop-hover" id="hover-marrom"><a href="#" class="nav-hover">BOLSAS & MOCHILAS <i class="fa-solid fa-caret-right"></i></a>
               <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                        <a href="#">Bolsas</a>
                        <a href="#">Mochilas & Pochetes</a>
               </div> <!--Fim menu dropdown da categoria infantil-->
            </li>
            <li><a href="#" class="nav-hover">CONTATO</i></a></li>
        </ul>
    </nav><!--Fim do menu mobile-->
            

            </div><a href="{{ url('/') }}">
            <img class="logo" src="{{url('images/logo.png')}}" alt="Logo perifa">
            </a>
        </div>
       
        <div class="header_icones">
            <div class="header_pesquisa">
                <div class="input-container">
                    <input type="text" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                    <button class="botao-pesquisa">
                        <i class="fa-solid fa-magnifying-glass" id="pesquisa"></i>
                    </button>
                </div>
            </div>
            <button class="botao-carrinho">
                <i class="fa-solid fa-bag-shopping"></i>
            </button>

            
            <li class="drop-hover-perfil">
            @if (session('is_vendedor') || session('is_Cliente'))
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
                        <a href="{{ url('/dashboard') }}" id="link-perfil"><i class="bi bi-kanban"></i>Dashboard</a>
                        <a href="#" id="link-perfil"><i class="fa-solid fa-cart-shopping"></i>Minhas vendas</a>
                        <a href="#" id="link-perfil"><i class="fa-solid fa-circle-question"></i>Ajuda</a>
                        <a href="{{ url('/logout') }}" id="link-perfil"><i class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a>
                 </div> <!--Fim menu dropdown das roupas--> 
            <!--vendedor -->
            @elseif(session('is_Cliente'))
                 <!--cliente -->
                 <div class="drop-perfil"> <!--Começo menu dropdown das roupas-->
                        <a href="{{ url('/perfil') }}"><i class="fa-solid fa-user"></i>Meu perfil</a>
                        <a href="#"><i class="fa-solid fa-heart"></i>Favoritos</a>
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i>Minhas compras</a>
                        <a href="#"><i class="fa-solid fa-circle-question"></i>Ajuda</a>
                        <a href="{{ url('/logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a>
                 </div> <!--Fim menu dropdown das roupas-->
                @endif
                           
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
                                        <input type="email" id="emailCliente" name="emailCliente" placeholder="nome@gmail.com" required>
                                    </div>  
                                    <div class="inputs">
                                        <label for="password">Senha</label>
                                        <input type="password" id="senhaCliente" name="senhaCliente" placeholder="••••••••" required>
                                    </div> 

                                    <div class="senha-opcoes">
                                        <a href="#" class="esqueci-senha">Esqueci minha senha</a>
                                    </div>
                                    <div class="login-botao">
                                        <button type = 'submit'>Entrar</button>
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
<dialog id="modal-2" >
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
                <input type="text" id="name" name="nomeCliente" placeholder="Ex: Maria Eduarda Silva" required>
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
                <label for="password">Senha</label>
                <input type="password" id="password" name="senhaCliente" placeholder="••••••••" required>
            </div>
        </div>
        <div class="inputs">
        <label for="imagemCliente"> <span class="text-primary">Anexar imagem</span></label>
        <div class="custom-file-upload">
            <input type="file" id="imagemCliente" name="imagemCliente" accept="image/*" >
            <label for="imagemCliente" id="fileLabel">Nenhuma imagem selecionada</label>
        </div>
    </div>
        <div class="login-botao">
            <input type="submit" value="Cadastrar">
        </div>
        <div class="cadastrar2">
            <a class="fechar-modal" data-modal="modal-2" id="have-account">Já tenho conta</a>
            <a href="#" class="abrir-modal" data-modal="modal-2" id="perifa-vender">Quero vender na perifa</a>
        </div>
    </form>
</dialog>

<!-- Modal 3 -->
<dialog id="modal-3">
    <form class="form" action="{{ url('/Vendedor') }}" method="post" enctype="multipart/form-data" >
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
                <input type="text" id="name" name="nomeVendedor" placeholder="Ex: Maria Eduarda Silva" required>
            </div>
            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="emailVendedor" placeholder="nome@gmail.com" required>
            </div>
            <div class="inputs">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefoneVendedor" placeholder="(DD)XXXXX-XXXX" required>
            </div>
            <div class="inputs">
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cepVendedor" onblur="pesquisacep(this.value);" required>
            </div>
            <div class="inputs">
                <label for="rua">Rua</label>
                <input type="text"  name="ruaVendedor" id="rua" required>
            </div>
            <div class="inputs">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairroVendedor" id="bairro" required>
            </div>
            <div class="inputs">
        <label for="estadoVendedor">Estado</label>
        <input type="text"  name="estadoVendedor" id="estado" required>  
        </div>
    <div class="inputs">
        <label for="cidadeVendedor">Cidade</label>
        <input type="text"  name="cidadeVendedor" id="cidade" required>
    </div>
  
            <div class="inputs">
                <label for="complemento">Complemento</label>
                <input type="text" id="complemento" name="complementoVendedor">
            </div>
            <div class="inputs">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senhaVendedor" placeholder="••••••••">
            </div>
        </div>
        <div class="inputs">
            <label for="imagemVendedor"> <span class="text-primary">Anexar imagem</span></label>
            <div class="custom-file-upload">
            <input type="file" id="imagemVendedor" name="imagemVendedor" accept="image/*">
                <label for="imagemVendedor" id="fileLabel">Nenhuma imagem selecionada</label>
            </div>
        </div>
        <div class="login-botao">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</dialog>

       
        </div>
    </div>

</header>  <!--Fim da header-->


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

            window.callbackCep = function(conteudo) {
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


document.querySelector('#modal-3').addEventListener('blur', function(e) {
    if (e.target.id === 'cep') {
        pesquisacep(e.target.value, document.querySelector('#modal-3'));
    }
}, true);

document.querySelector('#modal-2').addEventListener('blur', function(e) {
    if (e.target.id === 'cep') {
        pesquisacep(e.target.value, document.querySelector('#modal-2'));
    }
}, true);
    </script>
