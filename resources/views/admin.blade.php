<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
  <link rel="stylesheet" href="{{ asset('css/templatemo-lugx-gaming.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
</head>
<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url('/') }}" >Home</a></li>
                        <li><a href="{{ url('/catalogo') }}">Catálogo</a></li>
                        <li><a href="{{ url('/contato') }}" >Contato</a></li>
                        <li><a href="{{ url('/admin') }}" class="active">Admin</a></li>
              
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Admin</h3>
          <span class="breadcrumb"><a href="#">Home</a>  > Admin</span>
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
                <form action="{{ route('livro.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="title" id="title" placeholder="Titulo" autocomplete="on" required>
                        @error('title')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input id="valor" type="number" step="0.010" name="valor" placeholder="Valor do livro:" autocomplete="on" required>
                        @error('valor')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="Autor" id="Autor" placeholder="Autor" autocomplete="on" required>
                        @error('Autor')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="descricao" id="descricao" placeholder="Descrição" required></textarea>
                        @error('descricao')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <label for="formFile" class="form-label">Escolha uma imagem:</label>
                        <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                        @error('image')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Cadastrar</button>
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

              <!-- Botões para Editar e Deletar -->
              <div class="col-lg-3 d-flex flex-column align-items-end">
                <a href="{{ url('/dashbord') }}" class="btn btn-danger w-100">Deletar/Editar</a>
                <br>
                <a href="{{ url('/dashbordContato') }}" class="btn btn-danger w-100">Contato</a>
              </div>
              <div class="col-lg-3 d-flex flex-column align-items-end">
                
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

<style>
    /* Estilo para o rótulo do input file */
    .form-label {
        margin-bottom: 5px;
        display: block;
        font-weight: bold;
    }

    /* Estilo para o input file */
    input[type="file"] {
        border: 2px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    /* Estilo para quando o input file estiver em foco */
    input[type="file"]:focus {
        outline: none;
        border-color: #007bff; /* Altere a cor conforme necessário */
    }

    /* Estilo para quando o input file estiver com o mouse em cima */
    input[type="file"]:hover {
        border-color: #66afe9; 
    }
  </style>
