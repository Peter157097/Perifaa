<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
  <link rel="stylesheet" href="{{ asset('css/aplicativo.css') }}">
  <link rel="stylesheet" href="{{ asset('css/templatemo-lugx-gaming.css') }}">
<style>
  /* Footer Styles */
footer {
  width: 100%;
  height: auto;
  padding: 20px 0; /* Add padding for spacing */
  background-color: #f7f7f7;
  display: flex;
  justify-content: center;
  align-items: center;
}

footer ul {
  list-style: none;
  display: flex;
  flex-wrap: wrap; /* Allow items to wrap on small screens */
  padding: 0;
  margin: 0;
}

footer ul li {
  margin: 0 5px;
}

footer ul a {
  color: white;
  padding: 10px;
  background-color: #007bff; /* Example background color */
  text-decoration: none;
  border-radius: 5px;
}

footer ul a:hover {
  background-color: #0056b3; /* Darker background on hover */
}

footer ul .active a {
  background-color: #0056b3; /* Active page background color */
}

/* Responsive adjustments */
@media (max-width: 768px) {
  footer {
    padding: 10px 0; /* Reduce padding on smaller screens */
  }

  footer ul li {
    margin: 3px;
  }

  footer ul a {
    padding: 8px; /* Reduce padding inside links on smaller screens */
    font-size: 0.9em; /* Slightly smaller text */
  }
}
</style>
</head>

<body>
  <!-- ***** Preloader Start ***** -->
  
  <!-- ***** Preloader End ***** -->

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
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/catalogo') }}" class="active">Catálogo</a></li>
              <li><a href="{{ url('/contato') }}">Contato</a></li>
              <li><a href="{{ url('/admin') }}">Admin</a></li>
              
            </ul>   
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </di\v>
      <!-- ***** Search Bar Start ***** -->

      <!-- ***** Search Bar End ***** -->
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>CATÁLOGO</h3>
          <span class="breadcrumb"><a href="#">Home</a> >Catálogo</span>
        </div>
      </div>
    </div>
  </div>

  <main class="main_body" style="display:flex;justify-content: center; align-items:center">
    <section class="main_section">
      <section class="gallery">
        @foreach ($livros as $livro)
        <a href="{{ route('detalhes',$livro->id)}}">
        <div class="card">
          <div class="img">
            <img src="{{ asset($livro->image) }}" alt="">
          </div>
          <div class="caption">
            <div class="title">{{ $livro->title }}</div>
            <div class="price">R$ {{ $livro->valor }}</div>
          </div>
        </div>
        </a> 
        @endforeach
      </section>        
      <footer style="background-color: #f7f7f7;">
        <ul>
          @if ($livros->currentPage() == 1)                   
            <li><a href="#" style="color: white;">&lt;</a></li>
          @else
            <li><a href="{{ $livros->previousPageUrl() }}" style="color: white;">&lt;</a></li>
          @endif
          @for ($i = 1; $i <= $livros->lastPage(); $i++)
            <li @if($i == $livros->currentPage()) class="active" @endif>
              <a href="{{ $livros->url($i) }}" style="color: white;">{{ $i }}</a>
            </li>
          @endfor
          <li><a href="{{ $livros->nextPageUrl() }}" style="color: white;">&gt;</a></li>
        </ul>
      </footer>

    </section>
  </main>

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
