<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <style>
        /* Responsiveness */
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn-action {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            width: 100px;
            text-align: center;
        }

        .btn-action:hover {
            background-color: #ff4c4c;
        }

        .edit-btn {
            background-color: #4CAF50;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        .btn-container {
            display: flex;
            gap: 10px;
        }

        @media (max-width: 768px) {
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
                width: 100%;
            }

            th,
            td {
                box-sizing: border-box;
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
            }

            th {
                background-color: #444;
                color: #fff;
            }

            tbody tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
            }

            tbody td {
                border-bottom: none;
                padding: 10px;
            }

            tbody td:before {
                content: attr(data-label);
                font-weight: bold;
                width: 40%;
                display: inline-block;
            }

            /* Oculta os rótulos das colunas quando a tela for muito estreita */
            th {
                display: none;
            }
        }

        .btn-action {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            width: 100px;
            text-align: center;
        }

        .btn-action:hover {
            background-color: #ff4c4c;
        }

        .edit-btn {
            background-color: #4CAF50;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        .btn-container {
            display: flex;
            gap: 10px; /* Add space between buttons */
        }
    </style>
</head>
<body>

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
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Deletar/Editar</h3>
                <span class="breadcrumb"><a href="#">Home</a>  > Admin</span>
            </div>
        </div>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livros as $livro)
            <tr>
                <td scope="row" data-label="ID">{{ $loop->index + 1 }}</td>
                <td data-label="Título">{{ $livro->title }}</td>
                <td data-label="Preço">R$ {{ $livro->valor }}</td>
                <td>
                    <div class="btn-container">
                        <form action="/livro/{{ $livro->id }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                        <a href="/livro/editar/{{ $livro->id }}" class="btn-action edit-btn">Editar</a>
                    </div>
                </td>
            </tr>
        @endforeach
        @if(session('success'))
            <script>alert("{{ session('success')")</script>

        @endif
    </tbody>
</table>

</body>
</html>
