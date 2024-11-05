<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Perifa</title>
    <style>
        .container-perfilVendedor {
            padding-top: 5px;
        }

        .seller-profile {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: "Poppins", sans-serif;
            background-color: #ffffff;
        }

        .banner {
            height: 200px;
            background-color: #5e3e24;
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
        }

        .profile-container {
            text-align: center;
            margin-top: -50px;
            padding: 20px;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 5px solid #ffffff;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        .seller-name {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0 5px;
        }

        .rating {
            color: #f5a623;
        }

        .location {
            font-size: 14px;
            color: #555;
        }

        .follow-button {
            margin-top: 10px;
            padding: 8px 20px;
            border: 2px solid #5e3e24;
            border-radius: 20px;
            background: none;
            color: #5e3e24;
            font-weight: bold;
            cursor: pointer;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        .stat-link {
            text-decoration: none;
            color: #5e3e24;
            position: relative;
            padding: 10px 0;
            transition: color 0.3s ease;
        }

        /* Linha abaixo do link ativo */
        .stat-link.active::after {
            content: "";
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #5e3e24;
            width: 100%;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .stat-link.active {
            color: #a64ac9;
        }

        .stat {
            color: #a64ac9;
            font-weight: bold;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }

        .product-item {
            position: relative;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .product-item img {
            width: 100%;
            height: auto;
        }

        .discount-tag {
            position: absolute;
            top: 8px;
            left: 8px;
            background-color: #e6ffb3;
            color: #333;
            padding: 5px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .stats-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
    <script>
        function loadContent(section) {
            fetch(`/perfilVendedor/${section}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro na rede: ' + response.status);
                    }
                    return response.text();
                })
                .then(data => {
                    contentArea.innerHTML = data; // Atualiza a área de conteúdo
                })
                .catch(error => console.error('Erro ao carregar conteúdo:', error));
        }
    </script>
</head>

<body>
    @include('includes.header')
    @include('includes.nav')

    <div class="container-perfilVendedor">
        <div class="seller-profile">
            <div class="banner"></div>

            <div class="profile-container">
                <img class="profile-pic" src="{{ asset($vendedor->imagemVendedor) }}" alt="Foto do Vlendedor">
                <h2 class="seller-name">{{$vendedor->nomeVendedor}}</h2>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ <span>(8)</span>
                </div>
                <p class="location">{{$vendedor->bairroVendedor}}, {{$vendedor->estadoVendedor}} • Na perifa desde 2024
                </p>

            </div>

            <div class="stats-container">
                <a href="/perfilVendedor" class="stat-link {{ request()->is('/') ? 'active' : '' }}">À venda</a>
                <a href="{{ route('perfil.vendidos') }}"
                    class="stat-link {{ request()->is('vendidos') ? 'active' : '' }}">Vendidos</a>

            </div>

            <div class="cards-body">
                <div class="container-cards-perfilVendedor">
                    @foreach($produtos as $produto)
                    <a href="{{ url('/entrar-produto', $produto->idProduto)}}">
                        <div class="card-produto">
                            <div class="image-display">
                                <div class="btnAmeiContainer">
                                    @if (session('is_Cliente'))
                                    <form action="{{ route('favorites.add') }}" method="POST" class="formBtnProdutos">
                                    @csrf
                                        <input type="hidden" name="product_id" value="{{ $produto->idProduto }}">
                                        <button type="submit" class="buttonAmei">
                                            <i class="fa-solid fa-heart fa-lg botaoAmei"></i>
                                        </button>                          
                                    </form>  
                                    <form action="{{ route('carrinho.add') }}" method="POST" class="formBtnProdutos">
                                    @csrf
                                        <input type="hidden" name="product_id" value="{{ $produto->idProduto }}">
                                        <button type="submit" class="buttonAmei">
                                            <i class="fa-solid fa-shopping-cart fa-lg botaoCarrinho"></i>
                                        </button>                          
                                    </form>                                 
                                    @else                     
                                                 
                                    @endif                             
                                </div>
                                
                                <img class="img-card-produto" src="{{ asset($produto->imagemProduto) }}">
                            </div>
                            <div class="txt-info-produto-top">
                            <p class="valor-produto">R${{ $produto->valorProduto }}</p>
                            <div class="dataPubProduto">
                                    <p>5d</p>
                                </div>
                                <div class="labelNomeProduto">
                                    <p>{{ $produto->nomeProduto }}</p>
                                </div>                                                
                            </div>
                            <div class="txt-info-produto-bottom">
                                <div class="row-info">
                                    <p class="info-produto-label">Condição:</p>
                                    <p class="info-produto">
                                        {{ $produto->condicao->nomeCondicao ?? 'Condição Desconhecida' }}
                                    </p>
                                </div>
                                <div class="row-info">
                                    <p class="info-produto-label">
                                        Cor:
                                    </p>
                                    <p class="info-produto">{{ $produto->cor->nomeCor ?? 'Cor Desconhecida' }}</p>
                                    
                                </div>
                                <div class="row-info">
                                    <p class="info-produto-label">
                                       Tamanho:
                                    </p>
                                    <p class="info-produto">
                                       {{ $produto->tamanho->nomeTamanho ?? 'Tamanho Desconhecido' }}
                                    </p>
                                </div>
                                <div class="row-info">
                                    <p class="info-produto" style="color: dimgray">
                                        <i class="fa-solid fa-location-dot" ></i>
                                        {{ $produto->regiao->nomeRegiao ?? 'Região Desconhecida' }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        @if($produtos->isEmpty())
                        <p>Nenhum produto encontrado.</p>
                        @else
                        @foreach($produtos as $produto)

                        @endforeach
                        @endif

                </div>
                </a>
            </div>
        </div>
</body>

</html>