<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main><!--Começo do corpo do site-->
        <div class="container-perfil">
            <div class="frame-perfil">
                <div class="img-topo-perfil">
                    <div class="foto-perfil"></div>
                </div>
            </div>
            <div class="align-info">
                <div class="titulo-perfil">
                    <img class="user-icon" src="<?php echo e(url('images/user-icon.png')); ?>" alt="Icone usuario">
                    <h4 class="titulo-font">Meu perfil</h4>
                </div>
                <div class="info-perfil">
                    <div class="titulo-info">
                        <div class="titulo-info-font">
                            <h5 class="info-texto">Dados Pessoais</h5>
                        </div>
                        <div class="container-info">
                            <ul class="lista-info">
                                <li class="lista-item">Nome</li>
                                <li class="lista-item">E-mail</li>
                                <li class="lista-item">Telefone</li>
                                <li class="lista-item">CPF</li>
                                <li class="lista-item">Data de nascimento</li>
                            </ul>
                            <ul class="lista-info">
                                <li class="lista-item">Joao Santos</li>
                                <li class="lista-item">joaosantos29@gmail.com</li>
                                <li class="lista-item">(11) 95*****03</li>
                                <li class="lista-item">242.267.186-X</li>
                                <li class="lista-item">01/04/2000</li>
                            </ul>
                            <ul class="lista-info">
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>">
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>">
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>">
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>"> 
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>"> 
                                </li>
                            </ul>   
                            
                        </div>
                        <div class="titulo-info-font">
                            <h5 class="info-texto">Endereços</h5>
                        </div>
                        <div class="container-info">
                            <ul class="lista-info">
                                <li class="lista-item">Endereço</li>
                                <li class="lista-item">CEP</li>
                                <li class="lista-item">Número</li>
                                <li class="lista-item">Complemento</li>
                            </ul>
                            <ul class="lista-info">
                                <li class="lista-item">Rua Pirapora</li>
                                <li class="lista-item">08410-440</li>
                                <li class="lista-item">64</li>
                                <li class="lista-item">Casa B</li>
                            </ul>
                            <ul class="lista-info">
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>">
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>">
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>">
                                </li>
                                <li class="lista-item">
                                    <img class="edit-icon" src="<?php echo e(url('images/edit-icon.png')); ?>"> 
                                </li>
                            </ul>   
                        </div>
                        <div class="titulo-info-font">
                            <h5 class="info-texto">Minha conta</h5>
                        </div>
                        <div class="container">
                            <p class="excluir-txt">Excluir minha conta</p>
                            
                            <p class="aviso-excluir">Ao excluir a conta, torna-se impossivel recupera-la.</p>
                        </div>
                    </div>
                    <div class="infos">
                    </div>
                </div>
            </div>
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

</html><?php /**PATH C:\laravel\perifa2\resources\views/perfil.blade.php ENDPATH**/ ?>