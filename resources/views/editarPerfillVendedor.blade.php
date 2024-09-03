<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{url('css/deshboardNova.css')}}">
    <title>Editar Perfil</title>
</head>

<body>
    <div class="containerVendedor">
        <div class="parte1">
        <img src="{{ url($imagemVendedor) }}" alt="Foto do Perfil" class="img-fluid rounded-circle"
        style="width: 50%; height: 50%; object-fit: cover;">
            <div class="links-dashboard">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house-chimney"></i>Dashboard </a></li>
                    <li><a href="{{url('dashboard')}}"><i class="fa-solid fa-shirt"></i>Cadastrar roupas </a></li>
                    <li><a href="#"><i class="fa-solid fa-money-check"></i>Transações </a></li>
                    <li><a href="#"><i class="fa-solid fa-sheet-plastic"></i>Saques </a></li>
                    <li><a href="{{url('editarPerfillVendedor')}}"><i class="fa-solid fa-gear"></i>Configurações </a></li>
                    <li><a href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>Sair </li>
                    <li><a href="#"><i class="fa-solid fa-circle-question"></i>Ajuda </a></li>
                </ul>
            </div>
        </div>
        <div class="parte2">

            <div class="content">
                <div class="row">
                    <div class="header-conteudo2">
                        <div class="col">
                            <h2>Configurações</h2>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-comments"></i>
                            <i class="fa-solid fa-bell"></i>
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                </div>
                <form action="{{ url('/editarPerfillVendedor/update') }}" method="POST" enctype="multipart/form-data" class="form-info">
                @csrf
                    <div class="editarPerfil">
                        <div class="inputItens">
                            <div class="inputsVendedor">
                                <label for="name">Nome</label>
                                <input type="text" name="nomeVendedor" value="{{ $nomeVendedor }}"></li>
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="name">Email</label>
                                <input type="email" name="emailVendedor" value="{{ $emailVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>


                            <div class="inputsVendedor">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="numeroVendedor" value="{{ $numeroVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>
  
                            <div class="inputsVendedor">
                                <label for="cep">CEP</label>
                                <input type="text" name="cepVendedor" value="{{ $cepVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="rua">Rua</label>
                                <input type="text" name="logradouroVendedor" value="{{ $logradouroVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>


                            <div class="inputsVendedor">
                                <label for="cidade">Cidade</label>
                                <input type="text" name="cidadeVendedor" value="{{ $cidadeVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="estado">Estado</label>
                                <input type="text" name="estadoVendedor" value="{{ $estadoVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            
                            <div class="inputsVendedor">
                                <label for="estado">Numero da casa</label>
                                <input type="text" name="numCasaVendedor" value="{{ $numCasaVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="estado">Imagem de perfil</label>
                                <input type="file" name="imagemVendedor" value="{{ $imagemVendedor }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>


                            <button type="submit" class="btn btn-primary" style="background-color: #5e3e24;">Salvar
                            alterações</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
