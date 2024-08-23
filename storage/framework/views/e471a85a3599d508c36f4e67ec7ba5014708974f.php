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
            <li class="drop-hover"><a href="#" class="nav-hover">ROUPAS <i class="fa-solid fa-caret-right"></i></a>
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
            

            </div>
            <img class="logo" src="<?php echo e(url('images/logo.png')); ?>" alt="Logo perifa">
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
            <button class="abrir-modal" data-modal="modal-1">
                <i class="fa-solid fa-circle"></i>
            </button>
            <!--modal 1-->
<dialog id="modal-1">
    <form>
        <div class="modal-header">
            <h1 class="modal-title">Entrar na Perifa</h1>
            <button class="fechar-modal" data-modal="modal-1" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="nome@gmail.com">
            </div>
            <div class="inputs">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="••••••••">
            </div>
            <div class="senha-opcoes">
                <a href="#" class="esqueci-senha">Esqueci minha senha</a>
            </div>
        </div>
        <div class="login-botao">
            <button type="submit">Entrar</button>
        </div>
        <div class="cadastrar">
            <span>Não tem uma conta?</span>
            <a href="#" class="abrir-modal" data-modal="modal-2">Clique aqui</a>
        </div>
    </form>
</dialog>

<!-- Modal 2 -->
<dialog id="modal-2" >
    <form class="form" action="<?php echo e(url('/Cliente')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="modal-header">
            <h1 class="modal-title">Cadastre-se na Perifa</h1>
            <button class="fechar-modal" data-modal="modal-2" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="input-group">
            <div class="inputs">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nomeCliente" placeholder="Ex: Maria Eduarda Silva">
            </div>
            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="emailCliente" placeholder="nome@gmail.com">
            </div>
            <div class="inputs">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefoneCliente" placeholder="(DD)XXXXX-XXXX">
            </div>
            <div class="inputs">
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cepCliente">
            </div>
            <div class="inputs">
                <label for="rua">Rua</label>
                <input type="text" id="rua" name="logradouroCliente">
            </div>
            <div class="inputs">
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairroCliente">
            </div>
            <div class="inputs">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidadeCliente">
            </div>
            <div class="inputs">
                <label for="estado">Estado</label>
                <input type="text" id="estado" name="estadoCliente">
            </div>
            <div class="inputs">
                <label for="complemento">Complemento</label>
                <input type="text" id="complemento" name="complementoCliente">
            </div>
            <div class="inputs">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senhaCliente" placeholder="••••••••">
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
    <form class="form" action="<?php echo e(url('/Cliente')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="modal-header">
            <h1 class="modal-title">Venda na Perifa</h1>
            <button class="fechar-modal" data-modal="modal-3" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="input-group">
            <div class="inputs">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nomeCliente" placeholder="Ex: Maria Eduarda Silva">
            </div>
            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="emailCliente" placeholder="nome@gmail.com">
            </div>
            <div class="inputs">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefoneCliente" placeholder="(DD)XXXXX-XXXX">
            </div>
            <div class="inputs">
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cepCliente">
            </div>
            <div class="inputs">
                <label for="rua">Rua</label>
                <input type="text" id="rua" name="logradouroCliente">
            </div>
            <div class="inputs">
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairroCliente">
            </div>
            <div class="inputs">
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <!-- Options here -->
                </select>
            </div>
            <div class="inputs">
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <!-- Options here -->
                </select>
            </div>
            <div class="inputs">
                <label for="complemento">Complemento</label>
                <input type="text" id="complemento" name="complementoCliente">
            </div>
            <div class="inputs">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senhaCliente" placeholder="••••••••">
            </div>
        </div>
        <div class="login-botao">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</dialog>

       
        </div>
    </div>

</header>  <!--Fim da header--><?php /**PATH C:\laravel\perifa\resources\views/includes/header.blade.php ENDPATH**/ ?>