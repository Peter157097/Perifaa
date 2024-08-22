<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="<?php echo e(url('css/dashboard.css')); ?>">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutters h-100">
            <div class="col-3 d-flex flex-column" id="parte1">
                <div class="content-1">
                    <div class="header-dashboard">
                        <img class="img-dashboard" src="<?php echo e(url('images/logo-branca.png')); ?>" alt="Logo Perifa">
                    </div>
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
            </div>
            <div class="col-9 d-flex flex-column" id="parte2">
    <div class="content">
        <div class="row">
            <div class="header-conteudo2">
                <div class="col">
                    <h2>Cadastrar roupas</h2>
                </div>
                <div class="col">
                    <i class="fa-solid fa-comments"></i>
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" id="cadastro">
                <div class="cadastrar-roupas">
                    <div class="input-group">
                        <div class="inputs">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="nomeRoupa">
                        </div>
                        <div class="inputs">
                            <label for="valor">Valor</label>
                            <input type="text" id="valor" name="valorRoupa" placeholder="R$">
                        </div>
                        <div class="inputs">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao" name="descricaoRoupa">
                        </div>
                        <div class="inputs">
                            <label for="cor">Cor</label>
                            <select name="cor" id="cor">
                                <option value="" disabled selected>Selecione</option>
                                <option value="rj">Rio de Janeiro</option>
                                <!-- Adicione mais opções aqui -->
                            </select>
                        </div>
                        <div class="inputs">
                            <label for="tamanho">Tamanho</label>
                            <select name="tamanho" id="tamanho">
                                <option value="" disabled selected>Selecione</option>
                                <option value="sp">São Paulo</option>
                                <!-- Adicione mais opções aqui -->
                            </select>
                        </div>
                        <div class="inputs">
                            <label for="regiao">Região</label>
                            <select name="regiao" id="regiao">
                                <option value="" disabled selected>Selecione</option>
                                <option value="sp">São Paulo</option>
                                <!-- Adicione mais opções aqui -->
                            </select>
                        </div>
                        <div class="inputs">
                            <label for="categoria">Categoria</label>
                            <select name="categoria" id="categoria">
                                <option value="" disabled selected>Selecione</option>
                                <option value="sp">São Paulo</option>
                                <!-- Adicione mais opções aqui -->
                            </select>
                        </div>
                        <div class="inputs">
                            <label for="roupa">Roupa</label>
                            <select name="roupa" id="roupa">
                                <option value="" disabled selected>Selecione</option>
                                <option value="sp">São Paulo</option>
                                <!-- Adicione mais opções aqui -->
                            </select>
                        </div>
                        <div class="inputs">
                            <label for="condicao">Condição</label>
                            <select name="condicao" id="condicao">
                                <option value="" disabled selected>Selecione</option>
                                <option value="sp">São Paulo</option>
                                <!-- Adicione mais opções aqui -->
                            </select>
                        </div>

                        
                        
                    </div>
                    <div class="inputs">
                        <label for="imagem"> <span class="text-primary">Anexar imagem</span></label>
                        <div class="custom-file-upload">
                            <input type="file" id="imagem" name="imagemRoupa" accept="image/*" multiple>
                            <label for="imagem" id="fileLabel">Nenhuma imagem selecionada</label>
                        </div>
                    </div>



                    <input type="submit" value="Cadastrar">
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
    <script src="<?php echo e(url('js/script-dashboard.js')); ?>"></script>
</body> 
</html>
<?php /**PATH C:\laravel\perifa2\resources\views/dashboard.blade.php ENDPATH**/ ?>