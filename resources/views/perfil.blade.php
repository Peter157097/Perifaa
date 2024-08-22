@include('includes.head')

<body>
    @include('includes.header')
    @include('includes.nav')

    <main><!--Começo do corpo do site-->
        <div class="container">
            <div class="frame-perfil">
                <div class="img-topo-perfil">
                    <div class="foto-perfil"></div>
                </div>

                <div class="nome-usuario">
                    <p class="mudar-foto">Mudar foto</p>
                    <h4 class="nome-txt">Matheus Santos Silva</h4>
                </div>
                <div class="opcoes-usuario">
                    <p class="opcoes-usuario-itens">Favoritos &hearts;</p>
                    <p class="opcoes-usuario-itens">Minhas compras</p>
                </div>
            </div>
            
            <div class="align-info">
                <div class="info-perfil">
                    <div class="titulo-info">
                        <div class="titulo-info-font">
                            <h5 class="info-texto">Dados Pessoais</h5>
                        </div>
                        <div class="container-info">
                            <ul class="lista-info">
                                <li class="lista-item">Matheus Santos Silva</li>
                                <li class="lista-item">matheusSantos@gmail.com</li>
                                <li class="lista-item">(11)954782603</li>
                                <li class="lista-item">24228241857</li>
                                <li class="lista-item">01/04/2006</li>
                            </ul>
                            <ul class="lista-info-edit">
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
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
                            <ul class="lista-info-edit">
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                                <li class="lista-item-edit">
                                    <p>Editar</p>
                                </li>
                            </ul>
                        </div>
                        <div class="titulo-info-font">
                            <h5 class="info-texto">Minha conta</h5>
                        </div>
                        <div class="container-excluir">
                            <p class="excluir-txt">Termos & Condições</p>
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

@include('includes.footer')


    <!--Import do javascript-->
    <script src="{{('js/script.js')}}"></script>
    <!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<!--Fim do body-->

</html>