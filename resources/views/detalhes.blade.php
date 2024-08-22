<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor - Detalhes</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/templatemo-lugx-gaming.css') }}">
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
                      <li><a href="{{ url('/catalogo') }}">Catálogo </a></li>
                      <li><a href="{{ url('/contato') }}">Contato</a></li>
                      <li><a href="{{ url('/admin') }}">Admin</a></li>
         
                    </ul>   
                    <a class='menu-trigger'>
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
          <h3>Detalhes da Compra</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Catálogo</a>  >  Detalhes</span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="{{ asset($livro->image) }}" alt="{{ $livro->title }}">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>{{ $livro->title }}</h4>
          <span class="price"> ${{ $livro->valor }}</span>
          <p>{{ $livro->descricao }}</p>
          <div style="margin-bottom: 2%;">
            <form id="pgtLivro" action="#">
              <button type="submit" style="width: 150px;"> COMPRAR</button>
            </form>
          </div>
          
          <div class="col-lg-8">
            <div class="main-button">
              <a href="{{ url('/catalogo') }} " style="width: 150px; text-align: center;">Ver Todos</a>
            </div>
          </div>
          <ul>
            <li><span>Autor:</span> {{ $livro->Autor }}</li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories related-games">
    <div class="container">
      <div class="row">
          
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
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/counter.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
