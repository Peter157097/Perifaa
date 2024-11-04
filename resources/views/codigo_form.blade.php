@include('includes.head')
    <style>
        /* Estilos do "modal" aplicado à estrutura principal */
        .modal-content {
            border-radius: 15px;
            padding: 20px;
            background-color: #ede9e2;
            color: #5e3e24;
            border: 2px solid #d0c4b8; /* Borda em torno do modal */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Sombra ao redor */
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            font-family: "Poppins", sans-serif;
            
        }

        .modal-content h2 {
            font-weight: 600;
            color: #5e3e24;
            text-align: center;
        }

        .inputs {
            margin-bottom: 15px;
        }

        .inputs label {
            font-weight: 500;
            color: #5e3e24;
        }

        .inputs input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-top: 5px;
            font-size: 16px;
        }

        #botao-modal-sair {
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

        #botao-modal-sair:focus, #botao-modal-sair:active {
            background-color: #4a2e1d;
            outline: none;
            box-shadow: none;
        }

        .mensagem {
            margin: 10px 0;
            font-size: 16px;
        }

        .mensagem.sucesso {
            color: green;
        }

        .mensagem.erro {
            color: red;
        }
        .tudo-senha{
            padding: 100px;
        }
    </style>

<body>
@include('includes.header')

@include('includes.nav')
<div class="tudo-senha">
    <div class="modal-content">
        <h2>Enviar Código de Verificação</h2>

        @if(session('sucesso'))
            <div class="mensagem sucesso">
                {{ session('sucesso') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mensagem erro">
                {{ $errors->first('email') }}
            </div>
        @endif

        <form action="{{ route('enviar.codigo') }}" method="POST">
            @csrf
            <div class="inputs">
                <label for="email">Digite seu email:</label>
                <input type="email" name="email" id="email" required placeholder="nome@gmail.com">
            </div>
            <button type="submit" id="botao-modal-sair">Enviar Código</button>
        </form>
    </div>
</div>
</body>
</html>
