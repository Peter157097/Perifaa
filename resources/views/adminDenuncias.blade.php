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
                    <li><a href="#"><i class="fa-solid fa-comments"></i>Mensagens e Suporte</a></li>
                    <li><a href="#"><i class="fa-solid fa-users"></i>Usuários</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Configurações </a></li>
                    <li><a href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>Sair </li>
                </ul>
            </div>
        </div>
        <div class="parte2">
            <div class="peido">
                <div class="header-conteudo2">
                    <div class="col">
                        <h2>Visualizar denúncias</h2>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-comments"></i>
                        <i class="fa-solid fa-bell"></i>
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="tiposDenuncias">

                    <div class="cardDenuncia">
                        <a href="adminDenunciaProduto" class="conteudoCardAdmin">
                            <h3>Tipo de Denúncia</h3>
                            <h3>PRODUTO</h3>
                            <h1>15</h1>
                        </a>
                        <div class="iconAdminDenuncia">
                            <i class="fa-solid fa-box-open caixa"></i>
                        </div>
                    </div>

                    <div class="cardDenuncia">
                        <a href="adminDenunciaProduto" class="conteudoCardAdmin">
                            <h3>Tipo de Denúncia</h3>
                            <h3>CLIENTE</h3>
                            <h1>0</h1>
                        </a>
                        <div class="iconAdminDenuncia">
                            <i class="fa-solid fa-box-open caixa"></i>
                        </div>
                    </div>
                    <div class="cardDenuncia">
                        <a href="adminDenunciaProduto" class="conteudoCardAdmin">
                            <h3>Tipo de Denúncia</h3>
                            <h3>VENDEDOR</h3>
                            <h1>0</h1>
                        </a>
                        <div class="iconAdminDenuncia">
                            <i class="fa-solid fa-box-open caixa"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
