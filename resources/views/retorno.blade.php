<!-- resources/views/retorno.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Pedido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Obrigado pelo seu pedido!</h1>
        <p>Seu pagamento foi processado com sucesso.</p>
        <p>Número do Pedido: <strong>{{ $pedido->id }}</strong></p>
        <p>Total Pago: <strong>R$ {{ $pedido->total }}</strong></p>
        <p>Um recibo foi enviado para o seu e-mail.</p>
        <p>Se precisar de mais alguma coisa, entre em contato conosco.</p>
        <a href="/" class="btn">Voltar para a Página Inicial</a>
    </div>
</body>
</html>
