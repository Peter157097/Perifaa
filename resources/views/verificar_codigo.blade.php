@include('includes.head')

<style>

 .modal-content {
            border-radius: 15px;
            padding: 20px;
            background-color: #ede9e2;
            color: #5e3e24;
            border: 2px solid #d0c4b8; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); 
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            font-family: "Poppins", sans-serif;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-weight: 600;
            color: #5e3e24;
            margin: 0;
        }

        .fechar-modal {
            background: none;
            border: none;
            font-size: 1.2em;
            color: #5e3e24;
            cursor: pointer;
        }

        .modal-body h3, .modal-body h5 {
            color: #5e3e24;
        }

        .codigo-input {
            width: 100%;
            max-width: 200px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            transition: border-color 0.3s ease;
            margin: 20px auto;
            display: block;
        }

        .codigo-input:focus {
            border-color: #5e3e24;
        }

        .reenviar {
            text-align: center;
            color: #5e3e24;
            font-size: 14px;
        }

        .reenviar a {
            color: #5e3e24;
            text-decoration: underline;
        }

        .login-botao button {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 10px;
            color: #fff;
            background-color: #5e3e24;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s ease;
            width: 100%;
            margin-top: 15px;
        }

        .login-botao button:hover {
            background-color: #4a2e1d;
        }

        .tudo-senha{
            padding: 10px;
        }
        .message-box {
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            font-size: 16px;
            text-align: center;
            font-weight: 500;
        }

        .message-box.success {
            color: #2f6627;
           
        }

        .message-box.error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
        h3{
            text-align: center;
        }
    </style>
<body>
@include('includes.header')

@include('includes.nav')
<div class="tudo-senha">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">Verificação de E-mail</h2>
        </div>
        <div class="modal-body">

        @if(session('sucesso'))
                    <div class="message-box success">
                        {{ session('sucesso') }}
                    </div>
                @endif

                <!-- Mensagem de erro -->
                @if($errors->any())
                    <div class="message-box error">
                        {{ $errors->first('codigo') }}
                    </div>
                @endif

                <form action="{{ route('verificar.codigo') }}" method="POST">
                    @csrf
                    <h3>Pegue seu código</h3>
                    <h5>Insira o código de verificação que será enviado para o seu endereço de e-mail.</h5>
                    
                    <input type="text" name="codigo" class="codigo-input" id="codigo" placeholder="1234" required>
                    <div class="login-botao">
                        <button type="submit">Verificar Código</button>
                    </div>
                </form>
        </div>
    </div>
</div>
</body>
</html>
