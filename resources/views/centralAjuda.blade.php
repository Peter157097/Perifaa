<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="icon" href="{{ url('images/logo.png') }}" type="image/x-icon">
    <title>Perifa</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            background-color: #eee9e4;
        }

        header {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #eee9e4;
            padding: 0.5rem;
        }

        .header_direita {
            display: flex;
            align-items: center;
            max-width: 1200px;
            width: 100%;
            justify-content: space-between;
        }

        .header-logo {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .logo {
            max-width: 100%;
        }

        .ajuda {
            color: #fff;
            font-weight: 600;
            font-size: 20px;
            line-height: 10px;
        }

        .ajuda h5 {
            margin-top: -15px;
            line-height: 1;
            color: #5e3e24;
            text-align: center;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .input-icon {
            position: relative;
            width: 100%;
            max-width: 600px;
        }

        .search-input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border-radius: 20px;
            border: 1px solid #ccc;
            font-size: 18px;
        }

        .search-input:focus {
            outline: none;
        }

        .icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
            font-size: 18px;
        }

        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .buttons-section {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .buttons-section a{
            text-decoration: none;
        }

        .buttons-section .button {
            padding: 20px 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
            text-align: center;
            width: 120px;
            font-weight: bold;
            color: #5a4020;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.2s;
        }

        .buttons-section .button:hover {
            background-color: #e0e0e0;
            color: #3a2a1a;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transform: scale(1.07);
        }

        .buttons-section .button:hover i {
            color: #3a2a1a;
        }

        .buttons-section .button i {
            font-size: 25px;
            padding-bottom: 11px;
        }

      
        .faq-section {
            display: flex;
            justify-content: center;
        }

        .faq-box {
            background-color: #5e3e24;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.2s;
        }

        .faq-box a {
            color: #fff;
            text-decoration: none;
        }

        .faq-box a:hover{
            text-decoration: underline;
            color: rgba(255, 255, 255, 0.7);    
        }

        .main-content {
            padding: 50px;
        }

        .main-content h1, h2 {
            font-size: 1.5rem;
            text-align: center;
            font-weight: 600;
        }

      
        @media (max-width: 768px) {
            .search-input {
                font-size: 16px;
                padding: 10px 30px 10px 10px;
            }

            .buttons-section .button {
                width: 90%; 
                max-width: 300px; 
            }

            .main-content {
                padding: 20px;
            }

            .main-content h1, h2 {
                font-size: 1.25rem;
            }
        }
    </style>
</head>

<body>
<header>
    <div class="header_direita">
        <div class="ajuda">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ url('images/logo.png') }}" alt="Logo perifa">
            </a>
            <h5>Central de ajuda</h5>
        </div>
    </div>
</header>

<main class="container main-content">
    <h1>Salve, Como podemos te ajudar ?</h1>

    <div class="search-bar">
        <div class="input-icon">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <input type="text" placeholder="Procurar..." class="search-input">
        </div>
    </div>

    <div class="buttons-section">
    <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Pagamentos']) }}" class="button">
        <i class="fa-solid fa-credit-card"></i>Pagamentos
    </a>
    <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Reembolso']) }}" class="button">
        <i class="fa-solid fa-money-bill-transfer"></i>Reembolso
    </a>
    <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Envios']) }}" class="button">
        <i class="fa-solid fa-truck"></i>Envios
    </a>
    <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Informações']) }}" class="button">
        <i class="fa-solid fa-circle-info"></i>Informações
    </a>
</div>



    <h2>Perguntas frequentes</h2>
    <div class="faq-section">
        <div class="faq-box">
            <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Informações']) }}"><p>Qual a procedência dos produtos?</p></a>
            <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Informações']) }}"><p>Como são as embalagens?</p></a>
            <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Envios']) }}"><p>Posso trocar ou devolver um produto?</p></a>
            <a href="{{ route('centralAjudaEntrar', ['categoria' => 'Pagamentos']) }}"><p>Quais são os métodos de pagamento aceitos?</p></a>
        </div>
    </div>
</main>


<script src="{{ ('js/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
