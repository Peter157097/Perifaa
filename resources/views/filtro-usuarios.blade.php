<!DOCTYPE html>
<html lang="pt-BR">

@include('includes.head') <!-- Certifique-se de que o head seja incluído corretamente aqui -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <!-- Fonte customizada para o logo -->
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    @include('includes.menuAdmin') <!-- Certifique-se de que o menuAdmin esteja funcionando corretamente -->

    <div class="containerAdmin">
        <div class="adminPanelContainer">
            <div class="adminPanelConsulta">
                <div class="filtroAdminPanel">
                    <div class="titleNotifPanel">Consulta</div>
                    <div class="containerFloatImg">
                        <div class="floatImageAdmin">
                            <img class="floatImage" src="{{url('/images/floatImageConsulta.png')}}">
                        </div>
                    </div>
                    <div class="alvoConsultaContainer">
                        <div class="alvoConsulta">
                            <form action="{{ route('filtrar-usuarios') }}" onchange="this.form.submit()" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="tipo">Tipo de Usuário</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="todos" {{ isset($tipoSelecionado) && $tipoSelecionado == 'todos' ? 'selected' : '' }}>Todos</option>
                                        <option value="cliente" {{ isset($tipoSelecionado) && $tipoSelecionado == 'cliente' ? 'selected' : '' }}>Cliente</option>
                                        <option value="vendedor" {{ isset($tipoSelecionado) && $tipoSelecionado == 'vendedor' ? 'selected' : '' }}>Vendedor</option>
                                        <option value="administrador" {{ isset($tipoSelecionado) && $tipoSelecionado == 'administrador' ? 'selected' : '' }}>Administrador
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="nome">Nome do Usuário</label>
                                    <input type="text" name="nome" id="nome" class="form-control"
                                        placeholder="Digite o nome do usuário">


                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @if(isset($usuarios) && count($usuarios) > 0)
                    <div class="containerFiltro">
                        <div class="alignLabelConsulta">
                            <div class="infoLabelConsulta">
                                <p class="labelInfoConsulta">Usuário</p>
                                <p class="labelInfoConsulta">E-mail</p>
                                <p class="labelInfoConsulta">Status</p>
                            </div>
                        </div>
                        <div id="resultBuscaContainer" class="resultBuscaContainer">
                            @foreach($usuarios as $usuario)
                                <div class="cardConsulta">
                                    <div class="pfpBuscaContainer">
                                        <div class="pfpBusca">
                                            <img src="{{ asset($usuario->imagem) }}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="infoConsulta">
                                        <p class="itemInfoConsulta">{{ $usuario->nome }}</p>
                                        <p class="itemInfoConsulta">{{ $usuario->email }}</p>
                                        <p class="itemInfoConsulta">{{ ucfirst($usuario->tipo) }}</p>
                                    </div>
                                    <button class="btn btn-danger"
                                        onclick="excluirUsuario({{ $usuario->id }}, '{{ $usuario->tipo }}')">Excluir</button>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @else
                    <div class="consultaAviso">
                        <h5>Nenhum usuário encontrado para sua busca.</h5>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <script>
        // Função para abrir/fechar o menu lateral
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const hamburger = document.getElementById('hamburger');

            // Alterna a classe 'open' para abrir/fechar o menu
            sidebar.classList.toggle('open');

            // Alterna o ícone entre hambúrguer e "X"
            if (sidebar.classList.contains('open')) {
                hamburger.innerHTML = '&times;'; // Ícone de "X" (multiplicação)
            } else {
                hamburger.innerHTML = '&#9776;'; // Ícone de hambúrguer
            }
        }

        // Função para selecionar item do menu
        function selectMenu(element) {
            // Remove a classe 'selected' de todos os itens
            const items = document.querySelectorAll('.menu-item');
            items.forEach(item => item.classList.remove('selected'));

            // Adiciona a classe 'selected' ao item clicado
            element.classList.add('selected');
        }

        // Atribuir a função de seleção aos links
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function () {
                selectMenu(item);
            });
        });
    </script>
    <script>
        // Função para realizar a busca dinâmica com AJAX
        function realizarBuscaDinamica() {
            const nome = document.getElementById('nome').value;
            const tipo = document.getElementById('tipo').value;

            fetch('{{ route('filtrar-usuarios') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    nome,
                    tipo
                })
            })
                .then(response => response.json())
                .then(data => {
                    const resultContainer = document.getElementById('resultBuscaContainer');
                    resultContainer.innerHTML = ''; // Limpa os resultados anteriores

                    if (data.length > 0) {
                        data.forEach(usuario => {
                            resultContainer.innerHTML += `
    <div class="cardConsulta">
        <div class="pfpBuscaContainer">
            <div class="pfpBusca">
                <img src="${usuario.imagem}" class="pfpConsulta">
            </div>
        </div>
        <div class="infoConsulta">
        <p class="itemInfoConsulta">${usuario.nome}</p>
            <p class="itemInfoConsulta">${usuario.email}</p>
            <p class="itemInfoConsulta">${usuario.tipo.charAt(0).toUpperCase() + usuario.tipo.slice(1)}</p>
        </div>
        <button class="btn btn-danger" onclick="excluirUsuario(${usuario.id}, '${usuario.tipo}')">Excluir</button>
    </div>
`;


                        });
                    } else {
                        resultContainer.innerHTML = '<h5>Nenhum usuário encontrado para sua busca.</h5>';
                    }
                })
                .catch(error => {
                    console.error('Erro ao realizar a busca:', error);
                });
        }
        // Adiciona o evento 'input' ao campo de nome e 'change' ao campo de tipo
        document.getElementById('nome').addEventListener('input', realizarBuscaDinamica);
        document.getElementById('tipo').addEventListener('change', realizarBuscaDinamica);
    </script>
    <script>
        // Função para excluir o usuário
        function excluirUsuario(id, tipo) {
            console.log('Tentativa de exclusão do usuário. ID:', id, 'Tipo:', tipo);

            // Obtenha o token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            if (!csrfToken) {
                console.error('Token CSRF não encontrado.');
                alert('Erro interno: Token CSRF não está configurado.');
                return;
            }

            // Realize a requisição fetch
            fetch('{{ route('excluir-usuario') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({
                    id: id,
                    tipo: tipo
                })
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Resposta do servidor:', data);
                    if (data.success) {
                            Swal.fire({
                                title: 'Exclusão feita com sucesso!',
                                text: '{{ session('success') }}',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#1f628e'
                            });
                        realizarBuscaDinamica(); // Atualiza a lista de usuários
                    } else {
                        alert('Erro: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Erro ao excluir o usuário:', error);
                });
        }
    </script>
</body>
</html>
