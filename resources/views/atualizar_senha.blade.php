@include('includes.head')
<style>
        /* Estilos para o modal */
        .modal-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ede9e2;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            font-family: "Poppins", sans-serif;
            color: #5e3e24;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 24px;
            font-weight: bold;
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

        .modal-body h3 {
            color: #5e3e24;
            font-size: 20px;
            margin-top: 15px;
        }

        .modal-body h5 {
            color: #5e3e24;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .inputs label {
            display: block;
            color: #5e3e24;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .inputs input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .inputs input[type="password"]:focus {
            border-color: #5e3e24;
        }

        .login-botao button {
            width: 100%;
            padding: 12px;
            background-color: #5e3e24;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .login-botao button:hover {
            background-color: #4a2e1d;
        }

       
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: center;
        }
        .tudo-senha{
            padding: 10px;
        }
</style>

<body>
@include('includes.header')

@include('includes.nav')
<div class="tudo-senha">
<div class="form-container">
<div class="modal-container">
        <div class="modal-header">
            <h2 class="modal-title">Redefinir Senha</h2>
          
        </div>
        <div class="modal-body">
            @if ($errors->any())
                <div class="error-message">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="/atualizar-senha" method="POST">
                @csrf
                <h3>Insira a nova senha</h3>
                <h5>Sua nova senha deve ser diferente da senha usada anteriormente</h5>
                <div class="inputs">
                    <label for="novaSenha">Digite a senha</label>
                    <input type="password" name="novaSenha" id="novaSenha" placeholder="*********" required>

                    <label for="novaSenha_confirmation">Digite a senha novamente</label>
                    <input type="password" name="novaSenha_confirmation" id="novaSenha_confirmation" placeholder="*********" required>
                </div>

                <div class="login-botao">
                    <button type="submit">Atualizar Senha</button>
                </div>
            </form>
        </div>
    </div>

    </div>
</body>
