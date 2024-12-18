@include('includes.head')
@include('includes.header')
@include('includes.nav')

<!DOCTYPE html>
<html lang="en">

<head>

    <style>
      
        .form-group {
            margin-top: 20px;
        }

        .file-upload-wrapper {
            position: relative;
            display: inline-block;
            width: 200px;
            height: 50px;
        }

        .file-upload-wrapper input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            background-color: #5e3e24;
            color: white;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .file-upload-btn:hover {
            border-color: #ffffff;
        }

        .form-group {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"] {
            border: none;
            border-bottom: 2px solid transparent;
            outline: none; 
            transition: border-color 0.3s ease;
            background-color: #f0f0f0;
            color: #888;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-bottom: 2px solid #5e3e24;
            background-color: white;
            color: #000;
        }

        input[type="text"]:disabled,
        input[type="email"]:disabled {
            background-color: #e0e0e0;
            color: #aaa;
        }

        .lista-info {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .lista-item {
            margin-bottom: 10px;
          
        }

        .lista-info .btn-primary {
            background-color: transparent;
            border-color: #ffffff;
            border: none; 
        } 
        .lista-info i{
            color: #5e3e24;
        }  

        .lista-info input{
            all: unset;
        }

        .lista-info .btn-primary:hover,
        .lista-info .btn-primary:focus,
        .lista-info .btn-primary:active {
            background-color: transparent !important; 
            border: none !important; 
            color: #5e3e24; 
            box-shadow: none !important; 
            outline: none !important; 
        }

        .lista-info .btn-primary:active {
            transition: none !important; 
            border: none !important;
        }
    </style>
</head>

<body>


    @if(Session::has('editarCliente'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       
            <script>
                Swal.fire({
                    title: 'Sucesso!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#5e3e24'
                });
            </script>
    @endif

    <main>
        <div class="container-perfil">
            <div class="frame-perfil">
                <div class="img-topo-perfil">
                    <div class="frame-foto-perfil">
                        <div class="foto-perfil">
                            <img src="{{ url($imagemCliente) }}" alt="Foto do Perfil" class="img-fluid rounded-circle"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="nome-usuario">
                    <p style="margin:0">{{$nome}}</p>
                </div>
                <div class="opcoes-usuario">
                    <a href="{{ route('favorites.index') }}">
                        <p style="margin:0; padding: 1vh">Meus favoritos <i class="fa-solid fa-heart"></i></p>
                    </a>
                    <a href="{{url('carrinho')}}">
                        <p style="margin:0; padding: 1vh">Carrinho <i class="fa-solid fa-shopping-cart"></i></p>
                    </a>
                    <a href="{{url('mensagens')}}">
                        <p style="margin:0; padding: 1vh">Mensagens <i class="fa-solid fa-message"></i></p>
                    </a>
                </div>
            </div>
            <div class="align-info">
                <div class="info-perfil">
                    <div class="titulo-perfil">
                        <h4 class="titulo-font">Meu perfil</h4>
                    </div>
                    <form action="{{ url('/perfil/update') }}" method="POST" enctype="multipart/form-data"
                        class="form-info">
                        @csrf

                        <div class="titulo-info-font">
                            <h5 class="info-texto">Dados Pessoais</h5>
                        </div>
                        <hr style="margin: 0">
                        <div class="container-info">
                            <ul class="lista-info">
                                <li class="lista-item">Nome:</li>
                                <li class="lista-item">E-mail:</li>
                                <li class="lista-item">Telefone:</li>
                            </ul>
                            <ul class="lista-info">
                                <li class=""><input type="text" name="nomeCliente" value="{{ $nome }}">
                                    <button type="submit" class="btn btn-primary"
                                        ><i class="bi bi-pencil-square"></i></button>
                                </li>

                                <li class=""><input type="email" name="emailCliente" value="{{ $email }}">
                                    <button type="submit" class="btn btn-primary"
                                       ><i class="bi bi-pencil-square"></i></button>
                                </li>

                                <li class=""><input type="text" name="numeroCliente" value="{{ $numero }}">
                                    <button type="submit" class="btn btn-primary"
                                        ><i class="bi bi-pencil-square"></i></button>
                                </li>
                            </ul>
                        </div>

                        <!-- Campo para upload da imagem -->
                        <div class="form-group">
                            <label for="imagemCliente">Atualizar imagem de perfil:</label>
                            <input type="file" name="imagemCliente" class="form-control" id="imagemCliente">
                        </div>

                        <div class="titulo-info-font">
                            <h5 class="info-texto">Endereços</h5>

                        </div>
                        <hr style="margin: 0">
                        <div class="container-info">
                            <ul class="lista-info">
                                <li class="lista-item">Endereço:</li>
                                <li class="lista-item">Numero da casa:</li>
                                <li class="lista-item">CEP:</li>
                                <li class="lista-item">Cidade:</li>
                                <li class="lista-item">Estado:</li>
                            </ul>
                            <ul class="lista-info">
                                <li class=""><input type="text" name="logradouroCliente"
                                        value="{{ $logradouro }}"><button type="submit" class="btn btn-primary"
                                       ><i class="bi bi-pencil-square"></i></button></li>
                                <li class=""><input type="text" name="numCasaCliente"
                                        value="{{ $numCasaCliente }}"><button type="submit" class="btn btn-primary"
                                       ><i class="bi bi-pencil-square"></i></button></li>
                                <li class=""><input type="text" name="cepCliente" value="{{ $cep }}"><button type="submit" class="btn btn-primary"
                               ><i class="bi bi-pencil-square"></i></button></li>
                                <li class=""><input type="text" name="cidadeCliente" value="{{ $cidade }}"><button type="submit" class="btn btn-primary"
                                ><i class="bi bi-pencil-square"></i></button>
                                </li>
                                <li class=""><input type="text" name="estadoCliente" value="{{ $estado }}"><button type="submit" class="btn btn-primary"
                               ><i class="bi bi-pencil-square"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="container-submit">
                            <button type="submit" class="btn btn-primary" style="background-color: #5e3e24;">Salvar
                                alterações</button>
                            <p class="excluir-txt">Excluir minha conta</p>
                            <p class="aviso-excluir">Ao excluir a conta, torna-se impossível recuperá-la.</p>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </main>



    <!-- Import do javascript -->
    <script src="{{ url('js/script.js') }}"></script>
    <!-- Imports do bootstrap do body -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
