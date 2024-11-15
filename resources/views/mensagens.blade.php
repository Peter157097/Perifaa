@if (session('is_Cliente'))
    @include('includes.head')

    <style>

    </style>

    <!--Começo do body-->
    <style>
        main {
            display: flex;
            height: 100%;
            width: 100%;
        }

        html,
        body {
            height: 100%;

        }
    </style>

    <body>
        @include('includes.header')
        @include('includes.nav')
        <main>
            <div class="mensagensContainer">
                <div class="containerMensagens">
                    <div class="msgTitlePanel">
                        <span>Mensagens</span>
                    </div>
                    <div class="panelMensagens">
                        <div class="sidePanelMensagens">
                            <div class="scroll-sidePanelMsg" id="listaClientes">

                            </div>
                            <div class="shadowScroll"></div>
                        </div>

                        <div class="contentMsg">
                            <div class="selectedMsg">
                                <div class="btnVoltarMsg">
                                    <a href="/mensagens">
                                    </a>
                                </div>
                                <div class="pfpSelectedMsg">
                                    <div class="pfpMsg">
                                        <img src="{{url('images/user-icon.png')}}">
                                    </div>
                                </div>
                                <div class="infoSelectecMsg">
                                    <div class="titleSelectedImg">
                                        <div id="mostrarNome"></div>
                                    </div>
                                    <div class="optionsSelectedMsg">
                                        <div class="optItem">
                                            <span class="iconInicialChat"> <i class="fa-regular fa-flag"></i></span>
                                            <span class="hoverDenunciaChat"><i class="fa-solid fa-flag"
                                                    title="Denunciar"></i></span>
                                        </div>
                                        <div class="optItem">
                                            <i class="fa-solid fa-circle-info" title="Detalhes"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="msgDisplay">
                                <div id="messages" class="messages">
                                    <div class="noContent">

                                        <div class="HoldNoContentImg">
                                            <img src="{{url('images/msgIconCli.png')}}" class="noContentImg">
                                        </div>
                                        <div class="noContentMsg">
                                            <h4>Suas mensagens</h4>
                                            <p>Aqui é onde você se conecta com outros usuários.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="msgWrite">
                                <div class="contentWrite">
                                    <div class="msgIcon">
                                        <i class="fa-solid fa-paperclip" title="Anexar arquivo"></i>
                                    </div>
                                    <div class="inputMsg">
                                        <input type="text" id="mensagemInput" placeholder="Mensagem" class="inputCampo">
                                    </div>
                                    <div class="msgIcon">

                                        <div class="send-message">
                                            <button onclick="enviarMensagem()" class="btnEnviarMsg">
                                                <i class="fa-solid fa-paper-plane" title="Enviar"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
            document.querySelectorAll('.cardMensagem').forEach(element => {
                element.addEventListener('click', () => {
                    // Seleciona todos os elementos que devem desaparecer
                    const elementosParaDesaparecer = document.querySelectorAll('.sidePanelMensagens, header');

                    // Seleciona todos os elementos que devem aparecer
                    const elementosParaAparecer = document.querySelectorAll('.contentMsg');


                    // Adiciona a classe .visivel para desaparecer
                    elementosParaDesaparecer.forEach(el => el.classList.add('invisivel'));

                    // Adiciona a classe .visivel para aparecer
                    elementosParaAparecer.forEach(el => el.classList.add('visivel'));

                });
            });
        </script>
        <!--Import do javascript-->
        <script src="{{('js/script.js')}}"></script>
        <!--Imports do bootstrap do body-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
            </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
            </script>
    </body>
@elseif (session('is_vendedor'))
    @include('includes.headVendedor')
    @include('includes.head')

    <!--Começo do body-->
    <style>
        main {
            display: flex;
            height: 100%;
            width: 100%;
        }

        html,
        body {
            height: 100%;
        }

        .user-info {
            margin: 0;
            padding: 0;
        }
    </style>

    <body>
        @include('includes.menuVendedor')
        <main>
            <div class="mensagensContainer">

                <div class="containerMensagens">
                    <div class="msgTitlePanel">
                        <span>Mensagens</span>
                    </div>
                    <div class="panelMensagens">
                        <div class="sidePanelMensagens">
                            <div class="scroll-sidePanelMsg" id="listaClientes">

                            </div>
                            <div class="shadowScroll"></div>
                        </div>
                        <div class="contentMsg">
                            <div class="selectedMsg">
                                <div class="pfpSelectedMsg">
                                    <div class="pfpMsg">
                                        <img src="{{url('images/user-icon.png')}}">
                                    </div>
                                </div>
                                <div class="infoSelectecMsg">
                                    <div class="titleSelectedImg">

                                    </div>
                                    <div class="optionsSelectedMsg">
                                        <div class="optItem">
                                            <span class="iconInicialChat"> <i class="fa-regular fa-flag"></i></span>
                                            <span class="hoverDenunciaChat"><i class="fa-solid fa-flag"
                                                    title="Denunciar"></i></span>
                                        </div>
                                        <div class="optItem">
                                            <i class="fa-solid fa-circle-info" title="Detalhes"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="msgDisplay">
                                <div id="messages" class="messages">
                                    <div class="noContent">
                                        <div id="mostrarNome"></div>
                                        <div class="HoldNoContentImg">
                                            <img src="{{url('images/msgIconVend.png')}}" class="noContentImg">
                                        </div>
                                        <div class="noContentMsg">
                                            <h4>Suas mensagens</h4>
                                            <p>Aqui é onde você se conecta com outros usuários.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="msgWrite">
                                <div class="contentWrite">
                                    <div class="msgIcon">
                                        <i class="fa-solid fa-paperclip" title="Anexar arquivo"></i>
                                    </div>
                                    <div class="inputMsg">
                                        <input type="text" id="mensagemInput" placeholder="Mensagem" class="inputCampo">
                                    </div>
                                    <div class="msgIcon">

                                        <div class="send-message">
                                            <button onclick="enviarMensagem()" class="btnEnviarMsg">
                                                <i class="fa-solid fa-paper-plane" title="Enviar"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@elseif (session('is_admin'))
    @include('includes.head')

    <!--Começo do body-->
    <style>
        main {
            display: flex;
            height: 100%;
            width: 100%;
        }

        html,
        body {
            height: 100%;
        }

        .user-info {
            margin: 0;
            padding: 0;
        }
    </style>

    <body>
        <main>
            @include('includes.menuAdmin')
            <div class="mensagensContainer">
                <div class="containerMensagens">
                    <div class="msgTitlePanel">
                        <span>Mensagens & Tickets</span>
                    </div>
                    <div class="panelMensagens">
                        <div class="sidePanelMensagens">
                            <div class="scroll-sidePanelMsg" id="listaClientes">

                            </div>
                            <div class="shadowScroll"></div>
                        </div>
                        <div class="contentMsg">
                            <div class="selectedMsg">
                                <div class="pfpSelectedMsg">
                                    <div class="pfpMsg">
                                        <img src="{{url('images/user-icon.png')}}">
                                    </div>
                                </div>
                                <div class="infoSelectecMsg">
                                    <div class="titleSelectedImg">

                                    </div>
                                    <div class="optionsSelectedMsg">
                                        <div class="optItem">
                                            <i class="fa-solid fa-circle-info" title="Detalhes"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="msgDisplay">
                                <div id="messages" class="messages">
                                    <div class="noContent">
                                        <div id="mostrarNome"></div>
                                        <div class="HoldNoContentImg">
                                            <img src="{{url('images/msgIconAdmin.png')}}" class="noContentImg">
                                        </div>
                                        <div class="noContentMsg">
                                            <h4>Tickets</h4>
                                            <p>Aqui você se conecta com os usuários.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="msgWrite">
                                <div class="contentWrite">
                                    <div class="msgIcon">
                                        <i class="fa-solid fa-paperclip" title="Anexar arquivo"></i>
                                    </div>
                                    <div class="inputMsg">
                                        <input type="text" id="mensagemInput" placeholder="Mensagem"
                                            class="inputCampo">
                                    </div>
                                    <div class="msgIcon">

                                        <div class="send-message">
                                            <button onclick="enviarMensagem()" class="btnEnviarMsg">
                                                <i class="fa-solid fa-paper-plane" title="Enviar"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@else
    @include('includes.header')
    @include('includes.nav')
    @include('includes.head')
    <!--Caso nao tenha login-->
    <div class="containerMensagens">
        <div class="msgTitlePanel">
            Mensagens
        </div>
        <div class="containerNoRegister">
            <div class="noRegisterImg">
                <img src="{{url('images/msgSemRegistro.png')}}" class="noContentImg">
            </div>
            <div class="noRegisterMsg">
                <h4>Quem é você?</h4>
                <p>Faça
                    <a href="#">
                        <button class="abrir-modal" data-modal="modal-1">
                            login
                        </button>
                    </a>
                    ou
                    <a href="#">
                        <button class="abrir-modal" data-modal="modal-2">
                            cadastre-se
                        </button>
                    </a>para ver suas
                    <span>
                        mensagens.
                    </span>
                </p>


            </div>
        </div>
    </div>
@endif
                    </div>

                </main>

                <script>
                    document.querySelectorAll('.cardMensagem').forEach(element => {
                        element.addEventListener('click', () => {
                            // Seleciona todos os elementos que devem desaparecer
                            const elementosParaDesaparecer = document.querySelectorAll('.sidePanelMensagens, header');

                            // Seleciona todos os elementos que devem aparecer
                            const elementosParaAparecer = document.querySelectorAll('.contentMsg');


                            // Adiciona a classe .visivel para desaparecer
                            elementosParaDesaparecer.forEach(el => el.classList.add('invisivel'));

                            // Adiciona a classe .visivel para aparecer
                            elementosParaAparecer.forEach(el => el.classList.add('visivel'));

                        });
                    });
                </script>
                <!--Import do javascript-->
                <script src="{{('js/script.js')}}"></script>
                <!--Imports do bootstrap do body-->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous">
                    </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                    crossorigin="anonymous">
                    </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                    crossorigin="anonymous">
                    </script>
            </body>

            <!--Fim do body-->

            </html>


            <script>
                const tipoUsuario = '{{ $tipoUsuario }}';
                const idUsuario = tipoUsuario === 'vendedor' ? '{{ $idVendedor }}' : '{{ $idCliente }}';
                const nomeLogado = tipoUsuario === 'vendedor' ? '{{ $nomeVendedor }}' : '{{ $nome }}';
                const messagesDiv = document.getElementById('messages');
                const listaClientes = document.getElementById('listaClientes');
                let idContatoAtual = null;
                let nomeContato = '';

                async function listarConversas() {
                    const endpoint = tipoUsuario === 'vendedor' ?
                        `http://localhost:3000/clientes-conversas/${idUsuario}` :
                        `http://localhost:3000/conversas/${idUsuario}`;

                    try {
                        const response = await fetch(endpoint);
                        const contatos = await response.json();

                        contatos.forEach((contato) => {
                            const contatoItem = document.createElement('div');
                            contatoItem.classList.add('cardMensagem');
                            contatoItem.dataset.idContato = tipoUsuario === 'vendedor' ? contato.idCliente : contato
                                .idVendedor;

                            const contatoItem2 = document.createElement('div');
                            contatoItem2.classList.add('pfpMsgContainer');

                            const contatoItem3 = document.createElement('div');
                            contatoItem3.classList.add('pfpMsg');

                            const contatoItem4 = document.createElement('img');
                            contatoItem4.classList.add('pfpMsgImg');

                            const contatoItem5 = document.createElement('div');
                            contatoItem5.classList.add('containerMsg');

                            const contatoItem6 = document.createElement('div');
                            contatoItem6.classList.add('titleMsg');
                            contatoItem6.textContent = tipoUsuario === 'vendedor' ? contato.nomeCliente : contato
                                .nomeVendedor;


                            const contatoItem7 = document.createElement('div');
                            contatoItem7.classList.add('bodyMsg');


                            contatoItem5.appendChild(contatoItem7);
                            contatoItem5.appendChild(contatoItem6);
                            contatoItem3.appendChild(contatoItem4);
                            contatoItem2.appendChild(contatoItem3);
                            contatoItem.appendChild(contatoItem2);
                            contatoItem.appendChild(contatoItem5);



                            contatoItem.onclick = () => {
                                document.querySelectorAll('.cliente-item').forEach(item => item.classList.remove(
                                    'active'));
                                contatoItem.classList.add('active');
                                idContatoAtual = contatoItem.dataset.idContato;
                                nomeContato = tipoUsuario === 'vendedor' ? contato.nomeCliente : contato.nomeVendedor;
                                carregarHistorico(idContatoAtual);
                                document.querySelectorAll(".cardMensagem").forEach(button => {
                                    button.addEventListener("click", function (event) {
                                        this.classList.toggle("clicado");
                                        event.preventDefault();
                                    });
                                    document.querySelectorAll('.cardMensagem').forEach(element => {
                                        element.addEventListener('click', () => {
                                            // Seleciona todos os elementos que devem desaparecer
                                            const elementosParaDesaparecer = document
                                                .querySelectorAll(
                                                    '.sidePanelMensagens, header');
                                            // Seleciona todos os elementos que devem aparecer
                                            const elementosParaAparecer = document
                                                .querySelectorAll('.contentMsg');
                                            // Adiciona a classe .visivel para desaparecer
                                            elementosParaDesaparecer.forEach(el => el.classList
                                                .add('invisivel'));
                                            // Adiciona a classe .visivel para aparecer
                                            elementosParaAparecer.forEach(el => el.classList
                                                .add('visivel'));
                                        });
                                    });
                                });

                            };

                            listaClientes.appendChild(contatoItem);
                        });
                    } catch (error) {
                        console.error('Erro ao listar conversas:', error);
                    }
                }

                async function carregarHistorico(idContato) {
                    try {
                        const response = await fetch(`http://localhost:3000/mensagens/${idContato}`, {
                            headers: {
                                'id-usuario': idUsuario,
                                'tipo-usuario': tipoUsuario
                            }
                        });
                        const mensagens = await response.json();

                        messagesDiv.innerHTML = '';
                        
                        mensagens.forEach((mensagem) => {
                            const messageContainer = document.createElement('div');
                            messageContainer.classList.add('messageContainer');

                            const newMessage = document.createElement('div');

                            // Verifica se a mensagem foi enviada ou recebida
                            if (mensagem.enviado === 1 && tipoUsuario === 'cliente' || mensagem.enviado === 0 &&
                                tipoUsuario === 'vendedor') {
                                newMessage.classList.add('mensagem-enviada');
                            } else {
                                newMessage.classList.add('mensagem-recebida');
                            }

                            // Cria um elemento <p> para o texto da mensagem
                            const messageText = document.createElement('div');
                            messageText.classList.add('txtMsg'); // Adiciona a classe 'txtMsg'
                            messageText.textContent = mensagem.mensagem; // Define o texto da mensagem

                            newMessage.appendChild(messageText); // Adiciona o <p> ao novo contêiner da mensagem
                            messageContainer.appendChild(
                                newMessage); // Adiciona o contêiner da mensagem ao contêiner principal
                            messagesDiv.appendChild(messageContainer); // Adiciona o contêiner de mensagem ao display
                        });

                        messagesDiv.scrollTop = messagesDiv.scrollHeight; // Rolagem automática
                       
                    } catch (error) {
                        console.error('Erro ao carregar histórico:', error);
                    }
                }

                async function enviarMensagem() {
                    const mensagem = document.getElementById('mensagemInput').value;

                    if (mensagem.trim() !== '' && idContatoAtual) {
                        try {
                            const response = await fetch(`http://localhost:3000/mensagens/${idContatoAtual}`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'id-usuario': idUsuario,
                                    'tipo-usuario': tipoUsuario
                                },
                                body: JSON.stringify({
                                    mensagem
                                })
                            });

                            const result = await response.json();
                            if (result.success) {
                                document.getElementById('mensagemInput').value = '';
                                carregarHistorico(idContatoAtual);
                            } else {
                                alert('Erro ao enviar mensagem.');
                            }
                        } catch (error) {
                            console.error('Erro ao enviar mensagem:', error);
                        }
                    } else {
                        console.warn("ID do contato ou mensagem inválida");
                    }
                }


                setInterval(() => {
                    if (idContatoAtual) {
                        carregarHistorico(idContatoAtual);
                    }
                }, 5000);

                listarConversas();
            </script>