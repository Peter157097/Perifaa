<header> <!--Começo da header-->
        <div class="header_direita">
            <img class="logo" src="<?php echo e(url('images/logo.png')); ?>" alt="Logo perifa">
        </div> <!--Logo-->
        <div class="header_final">
            <div class="header_esquerda">
                <input type="text" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                <button class="botao-pesquisa">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button><!--Pesquisar-->
            </div>
            <div class="icons-header">
                <button><!--botão do carrinho-->
                    <i class="fa-solid fa-bag-shopping"></i>
                </button>
                <button class="abrir-modal" data-modal="modal-1"><!--Perfil do user-->
                    <i class="fa-solid fa-circle"></i>
                </button>
<!--
                <dialog id="modal-1">
                    <form>
                        <div class="modal-header">
                            <h1 class="modal-title">
                                Entrar na Perifa
                            </h1>

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
                            <button >Entrar</button>
                        </div>
                            

                            <div class="cadastrar">
                                <span>Não tem uma conta?</span>
                                <a href="#" class="abrir-modal" data-modal="modal-2">
                                    Clique aqui
                                </a>
                            </div>
                       
                    </form>
                    

                </dialog>
                <dialog id="modal-2">
                    <form class="form" action="<?php echo e(url('/Cliente')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                            <div class="modal-header">
                                <h1 class="modal-title">
                                    Cadastre-se na Perifa
                                </h1>

                                <button class="fechar-modal" data-modal="modal-2" type="button">
                                <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                          <div class="input-group">

                               
                                <div class="inputs">
                                    <label for="name">Nome</label>
                                    <input type="text" id="name" name="nomeCliente" placeholder="Ex:Maria Eduarda Silva">
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
                                            <option value="sp">São Paulo</option>
                                            <option value="rj">Rio de Janeiro</option>
                                            <option value="df">Brasília</option>
                                            <option value="ba">Salvador</option>
                                            <option value="ce">Fortaleza </option>
                                            <option value="mg">Belo Horizonte</option>
                                            <option value="pr">Curitiba </option>
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="estado">Estado</label>
                                        <select name="cidade" id="cidade">
                                            <option value="sp">São Paulo</option>
                                            <option value="rj">Rio de Janeiro</option>
                                            <option value="df">Brasília</option>
                                            <option value="ba">Salvador</option>
                                            <option value="ce">Fortaleza </option>
                                            <option value="mg">Belo Horizonte</option>
                                            <option value="pr">Curitiba </option>
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
                                <div class="cadastrar2">
                                    <a class="fechar-modal" data-modal="modal-2" id="have-account">
                                        Já tenho conta
                                    </a>
                                    <a href="#" class="abrir-modal" data-modal="modal-2" id="perifa-vender">
                                        Quero vender na perifa
                                    </a>
                                </div>
                        </form>
                </dialog>
                <dialog id="modal-3">
                    <form class="form" action="<?php echo e(url('/Cliente')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                            <div class="modal-header">
                                <h1 class="modal-title">
                                    Venda na Perifa
                                </h1>

                                <button class="fechar-modal" data-modal="modal-3" type="button">
                                <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                          <div class="input-group">
                               
                                <div class="inputs">
                                    <label for="name">Nome</label>
                                    <input type="text" id="name" name="nomeCliente" placeholder="Ex:Maria Eduarda Silva">
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
                                            <option value="sp">São Paulo</option>
                                            <option value="rj">Rio de Janeiro</option>
                                            <option value="df">Brasília</option>
                                            <option value="ba">Salvador</option>
                                            <option value="ce">Fortaleza </option>
                                            <option value="mg">Belo Horizonte</option>
                                            <option value="pr">Curitiba </option>
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="estado">Estado</label>
                                        <select name="cidade" id="cidade">
                                            <option value="sp">São Paulo</option>
                                            <option value="rj">Rio de Janeiro</option>
                                            <option value="df">Brasília</option>
                                            <option value="ba">Salvador</option>
                                            <option value="ce">Fortaleza </option>
                                            <option value="mg">Belo Horizonte</option>
                                            <option value="pr">Curitiba </option>
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
-->
<!-- Modal 1 -->
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
<dialog id="modal-2">
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