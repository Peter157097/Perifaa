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
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Document</title>
    <style>
        .custom-file-upload {
            position: relative;
            display: inline-block;
        }

        .custom-file-upload input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .image-feedback {
            margin-top: 10px;
            font-size: 0.9em;
            color: brown;
        }
    </style>
    <script>
        function handleFileInput(input, feedbackElementId) {
            var fileName = input.files.length > 0 ? input.files[0].name : 'Nenhuma imagem selecionada';
            document.getElementById(feedbackElementId).innerHTML = "Imagem selecionada: " + fileName;
        }
    </script>
</head>

<body>
@if(Session::has('cadastrarProduto'))
    <script>
        alert("{{ Session::get('cadastrarProduto') }}");
    </script>
@endif
    <div class="containerVendedor">
        <div class="parte1">
          <a href="{{url('')}}" class="aPerifa"> <img  class="img-dashboard" src="{{url('images/logo-branca.png')}}" alt="Logo Perifa"> </a> 
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
                            <h2>Cadastrar roupas</h2>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-comments"></i>
                            <i class="fa-solid fa-bell"></i>
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                </div>
                <form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col" id="cadastro">
                            <div class="cadastrar-roupas">
                                <div class="input-group">
                                    <div class="inputs">
                                        <label for="name">Nome</label>
                                        <input type="text" id="name" name="nomeProduto">
                                    </div>
                                    <div class="inputs">
                                        <label for="valor">Valor</label>
                                        <input type="text" id="valor" name="valorProduto" placeholder="R$">
                                    </div>
                                    <div class="inputs">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" id="descricao" name="descricaoProduto">
                                    </div>
                                    <div class="inputs">
                                        <label for="cor">Cor</label>
                                        <select name="cor" id="cor">
                                            <option value="" disabled selected>Selecione</option>
                                            @foreach($cores as $cor)
                                                <option value="{{ $cor->idCor }}">{{ $cor->nomeCor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="tamanho">Tamanho</label>
                                        <select name="tamanho" id="tamanho">
                                            <option value="" disabled selected>Selecione</option>
                                            @foreach($tamanhos as $tamanho)
                                                <option value="{{ $tamanho->idTamanho }}">{{ $tamanho->nomeTamanho }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="regiao">Região</label>
                                        <select name="regiao" id="regiao">
                                            <option value="" disabled selected>Selecione</option>
                                            @foreach($regioes as $regiao)
                                                <option value="{{ $regiao->idRegiao }}">{{ $regiao->nomeRegiao }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="categoria">Categoria</label>
                                        <select name="categoria" id="categoria">
                                            <option value="" disabled selected>Selecione</option>
                                            @foreach($categorias as $categoria)
                                                <option value="{{ $categoria->idCategoriaProduto }}">
                                                    {{ $categoria->nomeCategoriaProduto }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="roupa">Genero</label>
                                        <select name="roupa" id="roupa">
                                            <option value="" disabled selected>Selecione</option>
                                            @foreach($roupas as $roupa)
                                                <option value="{{ $roupa->idGenero }}">{{ $roupa->nomeGenero }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="condicao">Condição</label>
                                        <select name="condicao" id="condicao">
                                            <option value="" disabled selected>Selecione</option>
                                            @foreach($condicoes as $condicao)
                                                <option value="{{ $condicao->idCondicao }}">
                                                    {{ $condicao->nomeCondicao }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <label for="imagemProduto"> <span class="text-primary">Anexar imagem principal </span></label>
                                    <div class="custom-file-upload">
                                        <input type="file" id="imagemProduto" name="imagemProduto" accept="image/*" onchange="handleFileInput(this, 'imagemFeedback1')">
                                        <div id="imagemFeedback1" class="image-feedback">Nenhuma imagem selecionada</div>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <label for="imagemProduto2"> <span class="text-primary">Anexar segunda imagem </span></label>
                                    <div class="custom-file-upload">
                                        <input type="file" id="imagemProduto2" name="imagemProduto2" accept="image/*" onchange="handleFileInput(this, 'imagemFeedback2')">
                                        <div id="imagemFeedback2" class="image-feedback">Nenhuma imagem selecionada</div>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <label for="imagemProduto3"> <span class="text-primary">Anexar terceira imagem</span></label>
                                    <div class="custom-file-upload">
                                        <input type="file" id="imagemProduto3" name="imagemProduto3" accept="image/*" onchange="handleFileInput(this, 'imagemFeedback3')">
                                        <div id="imagemFeedback3" class="image-feedback">Nenhuma imagem selecionada</div>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <label for="imagemProduto4"> <span class="text-primary">Anexar quarta imagem </span></label>
                                    <div class="custom-file-upload">
                                        <input type="file" id="imagemProduto4" name="imagemProduto4" accept="image/*" onchange="handleFileInput(this, 'imagemFeedback4')">
                                        <div id="imagemFeedback4" class="image-feedback">Nenhuma imagem selecionada</div>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <label for="imagemProduto5"> <span class="text-primary">Anexar quinta imagem </span></label>
                                    <div class="custom-file-upload">
                                        <input type="file" id="imagemProduto5" name="imagemProduto5" accept="image/*" onchange="handleFileInput(this, 'imagemFeedback5')">
                                        <div id="imagemFeedback5" class="image-feedback">Nenhuma imagem selecionada</div>
                                    </div>
                                </div>
                                <input type="submit" value="Cadastrar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
