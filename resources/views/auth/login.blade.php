    <x-guest-layout>
    <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f2f5;
                margin: 0;
                padding: 20px;
                box-sizing: border-box;
            }

            .authentication-card {
                max-width: 400px;
                width: 100%;
                padding: 30px;
                background-color: #fff;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                text-align: center;
                box-sizing: border-box;
            }

            .authentication-card-logo {
                margin-bottom: 20px;
            }

            .validation-errors {
                color: red;
                margin-bottom: 15px;
            }

            .form-label {
                display: block;
                font-weight: bold;
                color: #333;
                margin-bottom: 10px;
                text-align: left;
            }

            .form-input {
                width: 100%;
                padding: 12px;
                margin-bottom: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .login-button {
                background-color: #1877f2;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                font-size: 16px;
                font-weight: bold;
                box-sizing: border-box;
            }

            .login-button:hover {
                background-color: #165db1;
            }

            .register-link {
                margin-top: 15px;
                color: #666;
                font-size: 0.9em;
            }

            .register-link a {
                color: #1877f2;
                text-decoration: none;
                font-weight: bold;
            }

            .register-link a:hover {
                text-decoration: underline;
            }

            /* Responsividade */
            @media screen and (max-width: 600px) {
                .authentication-card {
                    padding: 20px;
                }

                .form-input,
                .login-button {
                    font-size: 14px;
                }
            }
        </style>

        <div class="authentication-card">
            <x-slot name="logo">
                <div class="authentication-card-logo">
                    <x-jet-authentication-card-logo />
                </div>
            </x-slot>

            <x-jet-validation-errors class="validation-errors" />

            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" class="form-label" />
                    <x-jet-input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div>
                    <x-jet-label for="password" value="{{ __('Password') }}" class="form-label" />
                    <x-jet-input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                </div>

                <x-jet-button type="submit" class="login-button">
                    {{ __('Log in') }}
                </x-jet-button>
            </form>

            <div class="register-link">
            <a href="{{ url('/register') }}">não aperte</a>
                <a href="{{ url('/') }}">Voltar para a página principal</a>
                <a href="{{ url('/register') }}">não aperte</a>
            </div>
        </div>

        <script>

            alert("Apenas administradores podem entrar nessa pagina, se for um Admin faça login!");
            document.getElementById('login-form').addEventListener('submit', function(event) {
                event.preventDefault(); 

                var formData = new FormData(this);

                fetch("{{ route('login') }}", {
                    method: "POST",
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        return response.json(); 
                    } else {
                        throw new Error("Erro ao fazer login");
                    }
                })
                .then(data => {
                    if (data.isAdmin) {
                        window.location.href = "{{ url('/admin') }}"; // Redireciona para a página de administração
                    } else {
                        alert("Admin não cadastrado!"); // Exibe um alerta com a mensagem de aviso
                    }
                })
                .catch(error => {
                    console.error("Erro:", error); // Registra o erro no console
                });
            });
        </script>
    </x-guest-layout>
            