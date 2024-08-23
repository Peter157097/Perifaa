<!--Começo head-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--Import do bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--Import do fontawesome-->
    <link rel="stylesheet" href="<?php echo e(url('css/styles.css')); ?>"><!--Import css-->
    <title>Perifa</title>
</head>
<!--Começo fim da head-->

<!--Começo do body-->
<body>  
    <header> <!--Começo da header-->
        <div class="header_direita">
            <img class="logo" src="<?php echo e(url('images/logo.png')); ?>" alt="Logo perifa">
        </div> <!--Logo-->
        <?php if(Session::has('nome')): ?>
        <h5>Bem-vindo, <?php echo e(Session::get('nome')); ?>!</h5>
        <p>Seu ID é: <?php echo e(Session::get('id')); ?></p>
        <a href="<?php echo e(url('/logout')); ?>">Sair</a>
        <?php else: ?>
        <h1>Bem-vindo!</h1>
        <button class="abrir-modal" data-modal="modal-1"><!--Perfil do user-->
        <a>Faça login</a>
            </button>
        <?php endif; ?>
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
                            <form action="<?php echo e(url('/login')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                    <div class="inputs">
                                        <label for="email">Email</label>
                                        <input type="email" id="emailCliente" name="emailCliente" placeholder="nome@gmail.com">
                                    </div>  
                                    <div class="inputs">
                                        <label for="password">Senha</label>
                                        <input type="password" id="senhaCliente" name="senhaCliente" placeholder="••••••••">
                                    </div> 

                                    <div class="senha-opcoes">
                                        <a href="#" class="esqueci-senha">Esqueci minha senha</a>
                                    </div>
                                    <div class="login-botao">
                                        <button type = 'submit'>Entrar</button>
                                    </div>
                                </form> 
                                <?php if($errors->any()): ?>
                                <div>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p><?php echo e($error); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php endif; ?>
                                    
                            </div>
                            
                            

                            <div class="cadastrar">
                                <span>Não tem uma conta?</span>
                                <a href="#" class="abrir-modal" data-modal="modal-2">
                                    Clique aqui
                                </a>
                            </div>
                       
                   

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

                                <!-- Outros campos -->
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
                                <div class="login-botao">
                                    <input type="submit" value="Cadastrar">
                                </div>

            
                                <div class="cadastrar2">
                                    <a class="fechar-modal" data-modal="modal-2" id="have-account">
                                        Já tenho conta
                                    </a>
                                    <a href="#" class="abrir-modal" data-modal="modal-2">
                                        Quero vender na perifa
                                    </a>
                                </div>
                        </form>
                </dialog>

            </div>    
        </div>
    </header>  <!--Fim da header-->
  
    
    <nav><!--Começo da nav-->
        <ul>
            <li class="drop-hover"><a href="#" class="nav-hover">ROUPAS <i class="fa-solid fa-caret-down"></i></a>
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
            <li class="drop-hover"><a href="#" class="nav-hover">FEMININAS <i class="fa-solid fa-caret-down"></i></a>
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
            <li class="drop-hover"><a href="#" class="nav-hover">MASCULINAS <i class="fa-solid fa-caret-down"></i></a>
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
            <li class="drop-hover"><a href="#" class="nav-hover">CALÇADOS <i class="fa-solid fa-caret-down"></i></a>
                <div class="drop"> <!--Começo menu dropdown da categoria calçados-->
                        <a href="#">Botas</a>
                        <a href="#">Sandálias</a>
                        <a href="#">Sapatos</a>
                        <a href="#">Tênis</a>
                </div> <!--Fim menu dropdown da categoria calçados-->
            </li>
            <li class="drop-hover" ><a href="#" class="nav-hover" >INFANTIL <i class="fa-solid fa-caret-down"></i></a>
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
            <li class="drop-hover" id="hover-marrom"><a href="#" class="nav-hover">BOLSAS & MOCHILAS <i class="fa-solid fa-caret-down"></i></a>
               <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                        <a href="#">Bolsas</a>
                        <a href="#">Mochilas & Pochetes</a>
               </div> <!--Fim menu dropdown da categoria infantil-->
            </li>
            <li><a href="#" class="nav-hover">CONTATO</i></a></li>
        </ul>
    </nav><!--Fim da nav-->

<!--Começo do carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="slide1" src="<?php echo e(url('images/carousel-image-one.png')); ?>" alt="Primerio Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo e(url('images/carousel-image-two.png')); ?>" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo e(url('images/carousel-image-one.png')); ?>" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
    </div>
<!--Fim do carousel-->

    <main><!--Começo do corpo do site-->
<!--Cartões de oferta começa aqui --> 
        <div class="cartoes-oferta">
            <article class="cartao">
                <div class="borda-interna">
                    <h2>FRETE GRÁTIS!</h2>
                    <p>NAS COMPRAS ACIMA DE 199,00</p>
                    <hr class="linha">
                    <button>saiba mais</button>
                </div>
            </article>    
            <article class="cartao-marrom">
                <div class="borda-interna1">
                    <h2>O MELHOR BRECHÓ DO BRASIL</h2>
                    <hr class="linha1">
                    <button>vem ver!</button>
                </div>
            </article>   
        </div>  
<!--Cartões de oferta termina aqui --> 
 <!--Imagens dos tenis, calça e blusa aqui -->   
      <div class="tenis-image">
         <img class="imagem-tenis" src="<?php echo e(('images/image-tenis.png')); ?>" alt="Imagem dos tenis">    
         <img class="imagem-tenis" src="<?php echo e(('images/image-calca.png')); ?>" alt="Imagem dos tenis"> 
         <img class="imagem-tenis" src="<?php echo e(('images/image-blusa.png')); ?>" alt="Imagem dos tenis"> 
      </div>
 <!--Imagens dos tenis, calça e blusa termina aqui --> 
 <!--Recomendados começa aqui -->         
        <div class="recomendados">
            <h3>Recomendações</h3>
            <article class="cards-recomendados">
<!--Card 1 começa aqui-->
                <div class="card-1">
                    <img class="image-card" src="<?php echo e(url('images/card-image-five.png')); ?>" alt="imagem paapa">
                    <div class="card-body">
                        <div class="card-top">
                            <div class="card-nome-brecho">
                                <i class="fa-solid fa-shop"></i>
                                <p>Brechó da ZL</p>
                            </div>
                            <div class="situacao"><p>Recente</p></div>
                        </div>
                        <div class="card-bottom">
                            <h4>TÊNIS NIKE AIR VAPOR MAX PLUS TRIPLE BLACK</h4>
                            <h5>R$ 110,99</h5>
                            <p>São Paulo - SP Seminovo</p>
                            <p></p>
                        </div>
                        
                    </div>
                </div>
<!--Card 1 termina aqui-->
<!--Card 2 começa aqui-->
<div class="card-1">
                    <img class="image-card" src="<?php echo e(url('images/card-image-two.png')); ?>" alt="imagem paapa">
                    <div class="card-body">
                        <div class="card-top">
                                <div class="card-nome-brecho">
                                    <i class="fa-solid fa-shop"></i>
                                    <p>Brechó da ZL</p>
                                </div>
                                <div class="situacao"><p>Recente</p></div>
                        </div>
                        <h4>Blusa azul vermelha</h4>
                        <h5>R$ 35,99</h5>
                        <p>São Paulo - SP</p>
                        <p>Novo</p>
                    </div>
                </div>
<!--Card 2 termina aqui-->
<!--Card 3 começa aqui-->
<div class="card-1">
                    <img class="image-card" src="<?php echo e(url('images/teste.jpg')); ?>" alt="imagem paapa">
                    <div class="card-body">
                        <div class="card-top">
                                <div class="card-nome-brecho">
                                    <i class="fa-solid fa-shop"></i>
                                    <p>Brechó da ZL</p>
                                </div>
                                <div class="situacao"><p>Recente</p></div>
                        </div>
                        <h4>Blusa azul vermelha</h4>
                        <h5>R$ 35,99</h5>
                        <p>São Paulo - SP</p>
                        <p>Seminovo</p>
                    </div>
                </div>
<!--Card 3 termina aqui-->
<!--Card 4 começa aqui-->
<div class="card-1">
                    <img class="image-card" src="<?php echo e(url('images/card-image-one.png')); ?>" alt="imagem paapa">
                    <div class="card-body">
                        <div class="card-top">
                            <div class="card-nome-brecho">
                                <i class="fa-solid fa-shop"></i>
                                <p>Brechó da ZL</p>
                            </div>
                            <div class="situacao"><p>Recente</p></div>
                        </div>
                        <h4>Blusa azul vermelha</h4>
                        <h5>R$ 35,99</h5>
                        <p>São Paulo - SP</p>
                        <p>Novo</p>
                    </div>
                </div>
<!--Card 4 termina aqui-->
        </div> <!--Recomendados termina aqui -->   
      
<!--Botão de ver todos os produtos começa aqui-->       
        <div class="mais-produtos">
            <button class="botao-ver-produtos">VER TODOS OS PRODUTOS</button>
        </div>
<!--Botão de ver todos os produtos termina aqui-->   
<!--Compra por Principais brechos começa aqui-->         
        <div class="principais-brechos">
            <div class="texto-principais-brechos">
                <h3>Principais brechós</h3>
            </div>
            <div class="cards-principais-brechos-tudo">
                <div class="cards-principais-brechos">
                    <img src="<?php echo e(('images/card-brecho-one.png')); ?>" alt="Primeira Imagem do brechó" class="original">
                    <img src="<?php echo e(('images/card-brecho-one-hover.png')); ?>" alt="Imagem ao passar o mouse" class="hover-image">
                </div>
                <div class="cards-principais-brechos">    
                    <img src="<?php echo e(('images/card-brecho-two.png')); ?>" alt="Segunda Imagem do brechó" class="original">
                    <img src="<?php echo e(('images/card-brecho-two-hover.png')); ?>" alt="Imagem ao passar o mouse" class="hover-image">
                </div>    
                <div class="cards-principais-brechos">
                    <img src="<?php echo e(('images/card-brecho-three.png')); ?>" alt="Terceira Imagem do brechó" class="original">
                    <img src="<?php echo e(('images/card-brecho-three-hover.png')); ?>" alt="Imagem ao passar o mouse" class="hover-image">
                </div>
            </div>
<!--Compra por Principais brechos termina aqui-->       
<!--Compra por tamanho começa aqui--> 
    <div class="card-compra-tamanho">
            <h3>Compre por tamanho</h3>
    </div>     
        <div class="compra-tamanho-tudo">
            <div class="parte1-compra-tamanho">
                    <div class="ver-compra-tamanho">
                        <h2>TAMANHO P & PP</h2>
                        <button><p>Ver peças</p></button>
                    </div>
                    <div class="ver-compra-tamanho">
                        <h2>TAMANHO M</h2>
                        <button><p>Ver peças</p></button>
                    </div>
            </div>
        </div>  
        <div class="compra-tamanho-tudo2">
            <div class="parte2-compra-tamanho">
                    <div class="ver-compra-tamanho">
                        <h2>TAMANHO G & GG</h2>
                        <button><p>Ver peças</p></button>
                    </div>
                    <div class="ver-compra-tamanho">
                        <h2>INFANTIL</h2>
                        <button><p>Ver peças</p></button>
                    </div>
            </div> 
        </div>
<!--Compra por tamanho termina aqui--> 
<!--Imagens de como vender na perifa-->       
        <div class="como-vender">
            <img src="<?php echo e(('images/quero-desapegar.png')); ?>" alt="Quero desapegar">
            <img src="<?php echo e(('images/como-vender.png')); ?>" alt="Quero desapegar">
        </div>
    </main><!--Fim do corpo do site-->

<!--Import do javascript-->
<script src="<?php echo e(('js/script.js')); ?>"></script>
<!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<!--Fim do body-->
</html><?php /**PATH C:\laravel\perifa2\resources\views/welcome.blade.php ENDPATH**/ ?>