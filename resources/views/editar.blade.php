<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-lugx-gaming.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
    <style>
        .form-label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }
        input[type="file"] {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="file"]:focus {
            outline: none;
            border-color: #007bff;
        }
        input[type="file"]:hover {
            border-color: #66afe9;
        }
    </style>
</head>
<body>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="" style="width: 158px;">
                    </a>
                    <ul class="nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/catalogo') }}">Catálogo</a></li>
                        <li><a href="{{ url('/contato') }}">Contato</a></li>
                        <li><a href="{{ url('/admin') }}" class="active">Admin</a></li>
                      
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Alterar</h3>
                <span class="breadcrumb"><a href="#">Home</a> > Alterar</span>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-9">
                            <form action="{{ route('livro.update', $livro->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="text" name="title" id="title" placeholder="Título" value="{{ $livro->title }}" autocomplete="on" required>
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input id="valor" type="number" step="0.01" name="valor" placeholder="Valor do livro" value="{{ $livro->valor }}" autocomplete="on" required>
                                            @error('valor')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="text" name="Autor" id="Autor" placeholder="Autor" value="{{ $livro->Autor }}" autocomplete="on" required>
                                            @error('Autor')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="descricao" id="descricao" placeholder="Descrição" required>{{ $livro->descricao }}</textarea>
                                            @error('descricao')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="formFile" class="form-label">Escolha uma imagem:</label>
                                            <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                            @if($livro->image)
                                                <img src="{{ asset('images/livros/' . $livro->image) }}" alt="Imagem do Livro" style="max-width: 200px; margin-top: 10px;">
                                            @endif
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="orange-button">Editar</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
  <div class="container">
    <div class="col-lg-12">
      <p>© 2024 <a rel="nofollow" href="#" target="_blank">todos direitos reservados há Mundo Melhor</a></p>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
