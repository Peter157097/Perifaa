<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    @include('includes.nav')

    <main>
        <div class="container-perfil">
            <div class="frame-perfil">
                <div class="img-topo-perfil">
                    <div class="foto-perfil"></div>
                </div>
            </div>
            <div class="align-info">
                <div class="titulo-perfil">
                    <img class="user-icon" src="{{ url('images/user-icon.png') }}" alt="Icone usuario">
                    <h4 class="titulo-font">Meu perfil</h4>
                </div>

                <div class="info-perfil">
                    <form action="{{ url('/perfil/update') }}" method="POST">
                        @csrf
                        <div class="titulo-info">
                            <div class="titulo-info-font">
                                <h5 class="info-texto">Dados Pessoais</h5>
                            </div>
                            <div class="container-info">
                                <ul class="lista-info">
                                    <li class="lista-item">Nome</li>
                                    <li class="lista-item">E-mail</li>
                                    <li class="lista-item">Telefone</li>
                                </ul>
                                <ul class="lista-info">
                                    <li class="lista-item"><input type="text" name="nomeCliente" value="{{ $nome }}"></li>
                                    <li class="lista-item"><input type="email" name="emailCliente" value="{{ $email }}"></li>
                                    <li class="lista-item"><input type="text" name="numeroCliente" value="{{ $numero }}"></li>
                                </ul>
                            </div>
                            <div class="titulo-info-font">
                                <h5 class="info-texto">Endereços</h5>
                            </div>
                            <div class="container-info">
                                <ul class="lista-info">
                                    <li class="lista-item">Endereço</li>
                                    <li class="lista-item">CEP</li>
                                    <li class="lista-item">Cidade</li>
                                    <li class="lista-item">Estado</li>
                                </ul>
                                <ul class="lista-info">
                                    <li class="lista-item"><input type="text" name="logradouroCliente" value="{{ $logradouro }}"></li>
                                    <li class="lista-item"><input type="text" name="cepCliente" value="{{ $cep }}"></li>
                                    <li class="lista-item"><input type="text" name="cidadeCliente" value="{{ $cidade }}"></li>
                                    <li class="lista-item"><input type="text" name="estadoCliente" value="{{ $estado }}"></li>
                                </ul>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #5e3e24; margin-top: 70%;">Salvar alterações</button>
                    </form>
                    <div class="container">
                            <p class="excluir-txt">Excluir minha conta</p>
                            
                            <p class="aviso-excluir">Ao excluir a conta, torna-se impossivel recupera-la.</p>
                        </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')

    <!--Import do javascript-->
    <script src="{{ url('js/script.js') }}"></script>
    <!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
