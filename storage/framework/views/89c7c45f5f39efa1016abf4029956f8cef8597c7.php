<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--Começo do body-->

<body>
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                            <div class="situacao">
                                <p>Recente</p>
                            </div>
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
                            <div class="situacao">
                                <p>Recente</p>
                            </div>
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
                            <div class="situacao">
                                <p>Recente</p>
                            </div>
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
                            <div class="situacao">
                                <p>Recente</p>
                            </div>
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
                        <button>
                            <p>Ver peças</p>
                        </button>
                    </div>
                    <div class="ver-compra-tamanho">
                        <h2>TAMANHO M</h2>
                        <button>
                            <p>Ver peças</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="compra-tamanho-tudo2">
                <div class="parte2-compra-tamanho">
                    <div class="ver-compra-tamanho">
                        <h2>TAMANHO G & GG</h2>
                        <button>
                            <p>Ver peças</p>
                        </button>
                    </div>
                    <div class="ver-compra-tamanho">
                        <h2>INFANTIL</h2>
                        <button>
                            <p>Ver peças</p>
                        </button>
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

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--Import do javascript-->
    <script src="<?php echo e(('js/script.js')); ?>"></script>
    <!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<!--Fim do body-->

</html><?php /**PATH C:\laravel\perifa\resources\views/welcome.blade.php ENDPATH**/ ?>