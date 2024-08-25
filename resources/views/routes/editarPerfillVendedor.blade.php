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
            <img class="img-dashboard" src="{{url('images/logo-branca.png')}}" alt="Logo Perifa">
            <div class="links-dashboard">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house-chimney"></i>Dashboard </a></li>
                    <li><a href="#"><i class="fa-solid fa-shirt"></i>Cadastrar roupas </a></li>
                    <li><a href="#"><i class="fa-solid fa-money-check"></i>Transações </a></li>
                    <li><a href="#"><i class="fa-solid fa-sheet-plastic"></i>Saques </a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Configurações </a></li>
                    <li><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Sair </li>
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
                <form action="" method="POST" enctype="">
                    <div class="editarPerfil">
                        <div class="inputItens">
                            <div class="inputsVendedor">
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="nomeVendedor">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="name">Email</label>
                                <input type="email" id="email" name="emailVendedor" placeholder="seuemail@exemplo.com">
                                <i class="fa-solid fa-pen"></i>
                            </div>


                            <div class="inputsVendedor">
                                <label for="telefone">Telefone</label>
                                <input type="tel" id="telefone" name="telefoneVendedor" placeholder="(XX) XXXXX-XXXX">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="telefone">Telefone</label>
                                <input type="tel" id="telefone" name="telefoneVendedor" placeholder="(XX) XXXXX-XXXX">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="cep">CEP</label>
                                <input type="text" id="cep" name="cepVendedor" placeholder="XXXXX-XXX">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="rua">Rua</label>
                                <input type="text" id="rua" name="ruaVendedor" placeholder="Nome da Rua">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="bairro">Bairro</label>
                                <input type="text" id="bairro" name="bairroVendedor" placeholder="Nome do Bairro">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="cidade">Cidade</label>
                                <input type="text" id="cidade" name="cidadeVendedor" placeholder="Nome da Cidade">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="estado">Estado</label>
                                <input type="text" id="estado" name="estadoVendedor" placeholder="UF">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="complemento">Complemento</label>
                                <input type="text" id="complemento" name="complementoVendedor"
                                    placeholder="Apto, Bloco, etc.">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="fotoPerfil">Foto de Perfil</label>
                                <input type="file" id="fotoPerfil" name="fotoPerfilVendedor" accept="image/*">
                                <i class="fa-solid fa-upload"></i>
                            </div>

                            <div class="inputsVendedor">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senhaVendedor">
                                <i class="fa-solid fa-pen"></i>
                            </div>


                            <input type="submit" value="Salvar">
                            <!--   `idVendedor` int(11) NOT NULL,
  `nomeVendedor` varchar(100) NOT NULL, v
  `emailVendedor` varchar(70) NOT NULL, v
  `senhaVendedor` varchar(500) DEFAULT NULL, v
  `numeroVendedor` varchar(15) NOT NULL, v
  `cepVendedor` varchar(255) NOT NULL,v
  `ruaVendedor` varchar(255) NOT NULL, v
  `bairroVendedor` varchar(255) NOT NULL, v
  `cidadeVendedor` varchar(255) NOT NULL, v
  `estadoVendedor` varchar(255) NOT NULL, v
  `complementoVendedor` varchar(255) DEFAULT NULL, v
  `imagemVendedor` varchar(255) DEFAULT NULL --> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>