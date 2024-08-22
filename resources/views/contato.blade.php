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
                      <li><a href="{{ url('/catalogo') }}">Catálogo </a></li>
                      <li><a href="{{ url('/contato') }}" class="active">Contato</a></li>
                      <li><a href="{{ url('/admin') }}">Admin</a></li>
                   
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
          <h3>Contate-Nos</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Contate-Nos</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contato</h6>
              <h2>Olá!</h2>
            </div>
            <p>Olá, sou Robson, o escritor dos livros. Qualquer dúvida, pode entrar em contato comigo nos meios abaixo:</p>
            <ul>
              <li><span>Telefone</span> +55 67 8126-0524</li>
              <li><span>Email</span> fanckcristian@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              
              <div class="col-lg-12">
                <form id="contact-form" action="{{ url('/contato') }}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="nome" id="name" placeholder="Seu Nome..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="sobre" id="surname" placeholder="Seu Sobrenome..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="assunto" id="subject" placeholder="Assunto..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="mensagem" id="message" placeholder="Sua Mensagem"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Enviar Agora</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
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
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/counter.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
