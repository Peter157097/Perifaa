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
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <title>Denúncias</title>
</head>

<body>
    <div class="containerAdminDenuncias">
        <div class="parte1">
            <img class="img-dashboard" src="{{url('images/logo-branca.png')}}" alt="Logo Perifa">
            <div class="links-dashboard">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house-chimney"></i>Dashboard </a></li>
                    <li><a href="#"><i class="fa-solid fa-exclamation-circle"></i>Denúncias</a></li>
                </ul>
            </div>
        </div>
        <div class="parte2">
            <div class="peido">
                <div class="header-conteudo2">
                    <div class="col">
                        <h2>Denúncias dos produtos</h2>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-comments"></i>
                        <i class="fa-solid fa-bell"></i>
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="denunciasCards">
                    <div class="denuncia">
                        <div class="conteudoCardAdmin">
                            <div class="tituloAdminDenunciaProduto">
                                Nome do produto
                            </div>
                            <a href="#" class="linkParaOproduto">
                                Calça preta ZARA
                            </a>
                            <br>
                            <br>
                            <div class="tituloAdminDenunciaProduto">
                                Descrição produto
                            </div>
                            <div class="textoAdminDenunciaProduto">
                                Calça preta da ZARA levemente desgastada na barra.
                            </div>
                            <br>
                            <div class="tituloAdminDenunciaProduto">
                                Nome e E-mail do Cliente
                            </div>
                            <div class="textoAdminDenunciaProduto">
                                Jeferson Silva
                            </div>
                            <div class="textoAdminDenunciaProduto">
                                jefinhogameplays@gmail.com
                            </div>
                            <br>
                            <div class="tituloAdminDenunciaProduto">
                                Descrição do Problema
                            </div>
                            <div class="textoAdminDenunciaProduto">
                                Completamente diferente do que prometeu, produto de outra cor!
                            </div>
                        </div>
                        <div class="iconAdminDenuncia">
                            <div class="parte1Icon">
                                <i class="fa-solid fa-box-open caixa"></i>
                                <h3>
                                    id Denúncia
                                </h3>
                                <h4>
                                    8224
                                </h4>
                            </div>
                            <div class="parte2icon">
                                <!-- clicando aq remove o produto -->
                                <i class="fa-solid fa-trash trash-icon"></i>

                                <a href="#">
                                    <h5>
                                        Remover produto
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>