@include('includes.head')

<!--Começo do body-->
<style>

</style>

<body>
    @include('includes.header')

    @include('includes.nav')
    <main>
        <div class="mensagensContainer">
            @if(session('is_Cliente'))
                <div class="topSubNav">
                    <ul class="subNavItens">
                        <li><a href="/pedidos">Pedidos</a></li>
                        <li><a href="/mensagens">Mensagens</a></li>
                    </ul>
                </div>
                <div class="containerMensagens">
                    <div class="msgTitlePanel">
                        Mensagens
                    </div>
                    <div class="panelMensagens">
                        <div class="sidePanelMensagens">
                            <div class="scroll-sidePanelMsg">
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>

                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="shadowScroll"></div>
                            </div>
                        </div>
                        <div class="contentMsg">

                            <!--  

                                                    ----Caso nao tenha mensagem selecionada (Parte do cliente)----

                                                        <div class="noContent">
                                                            <div class="HoldNoContentImg">
                                                                <img src="{{url('images/msgIconCli.png')}}" class="noContentImg">
                                                            </div>
                                                            <div class="noContentMsg">
                                                                <h4>Suas mensagens</h4>
                                                                <p>Aqui é onde você se conecta com outros usuários.</p>
                                                            </div>
                                                        </div>
                                                    -->
                            <div class="selectedMsg">
                                <div class="pfpSelectedMsg">
                                    <div class="pfpMsg">
                                        <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                    </div>
                                </div>
                                <div class="infoSelectecMsg">
                                    <div class="titleSelectedImg">
                                        Julia S.
                                    </div>
                                </div>
                            </div>
                            <div class="msgDisplay">

                            </div>
                            <div class="msgWrite">
                                <div class="contentWrite">
                                    <div class="anexoMsg">
                                        <img src="{{url('images/anexoMsg.png')}}" class="iconMsg" title="Anexar arquivo">
                                    </div>
                                    <div class="inputMsg">
                                        <input type="text" placeholder="Mensagem..." class="inputCampo">
                                    </div>
                                    <div class="anexoMsg">
                                        <img src="{{url('images/sendMsg.png')}}" class="iconMsg" title="Enviar">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @elseif(session('is_vendedor'))
                <div class="topSubNav">
                    <ul class="subNavItens">
                        <li><a href="/pedidos">Pedidos</a></li>
                        <li><a href="/mensagens">Mensagens</a></li>
                    </ul>
                </div>
                <div class="containerMensagens">
                    <div class="msgTitlePanel">
                        Mensagens
                    </div>
                    <div class="panelMensagens">
                        <div class="sidePanelMensagens">
                            <div class="scroll-sidePanelMsg">
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="contentMsg">
                            <!--  

                                            ----Caso nao tenha mensagem selecionada (parte do vendedor)----

                                                <div class="noContent">
                                                    <div class="HoldNoContentImg">
                                                        <img src="{{url('images/msgIconVend.png')}}" class="noContentImg">
                                                    </div>
                                                    <div class="noContentMsg">
                                                        <h4>Suas mensagens</h4>
                                                        <p>Aqui é onde você se conecta com outros usuários.</p>
                                                    </div>
                                                </div>
                                            -->
                            <div class="selectedMsg">
                                <div class="pfpSelectedMsg">
                                    <div class="pfpMsg">
                                        <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                    </div>
                                </div>
                                <div class="infoSelectecMsg">
                                    <div class="titleSelectedImg">
                                        Julia S.
                                    </div>
                                </div>
                            </div>
                            <div class="msgDisplay">

                            </div>
                            <div class="msgWrite">
                                <div class="contentWrite">
                                    <div class="anexoMsg">
                                        <img src="{{url('images/anexoMsg.png')}}" class="iconMsg" title="Anexar arquivo">
                                    </div>
                                    <div class="inputMsg">
                                        <input type="text" placeholder="Mensagem..." class="inputCampo">
                                    </div>
                                    <div class="anexoMsg">
                                        <img src="{{url('images/sendMsg.png')}}" class="iconMsg" title="Enviar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif(session('is_Admin'))
                <div class="topSubNav">
                    <ul class="subNavItens">
                        <li><a href="/pedidos">Pedidos</a></li>
                        <li><a href="/mensagens">Mensagens</a></li>
                    </ul>
                </div>
                <div class="containerMensagens">
                    <div class="panelMensagens">
                        <div class="sidePanelMensagens">
                            <div class="msgTitlePanel">
                                Mensagens
                            </div>
                            <div class="scroll-sidePanelMsg">
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="cardMensagem">
                                    <div class="pfpMsgContainer">
                                        <div class="pfpMsg">
                                            <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                        </div>
                                    </div>
                                    <div class="containerMsg">
                                        <div class="titleMsg">
                                            Julia S.
                                        </div>
                                        <div class="bodyMsg">
                                            Oiii, bom dia, queria saber se ainde tem essa peça, gostei mt dela
                                        </div>
                                    </div>
                                </div>
                                <div class="shadowScroll"></div>
                            </div>
                        </div>
                        <div class="contentMsg">
                            <div class="selectedMsg">
                                <!--  

                                        ----Caso nao tenha mensagem selecionada (parte do Admin)----

                                            <div class="noContent">
                                                <div class="HoldNoContentImg">
                                                    <img src="{{url('images/msgIconAdmin.png')}}" class="noContentImg">
                                                </div>
                                                <div class="noContentMsg">
                                                    <h4>Suas mensagens</h4>
                                                    <p>Aqui é onde você se conecta com outros usuários.</p>
                                                </div>
                                            </div>
                                        -->
                                <div class="pfpSelectedMsg">
                                    <div class="pfpMsg">
                                        <img src="{{url('images/10.png')}}" class="pfpConsulta">
                                    </div>
                                </div>
                                <div class="infoSelectecMsg">
                                    <div class="titleSelectedImg">
                                        Julia S.
                                    </div>
                                </div>
                            </div>
                            <div class="msgDisplay">

                            </div>
                            <div class="msgWrite">
                                <div class="contentWrite">
                                    <div class="anexoMsg">
                                        <img src="{{url('images/anexoMsg.png')}}" class="iconMsg" title="Anexar arquivo">
                                    </div>
                                    <div class="inputMsg">
                                        <input type="text" placeholder="Mensagem..." class="inputCampo">
                                    </div>
                                    <div class="anexoMsg">
                                        <img src="{{url('images/sendMsg.png')}}" class="iconMsg" title="Enviar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="topSubNav">
                    <ul class="subNavItens">
                        <li><a href="/pedidos">Pedidos</a></li>
                        <li><a href="/mensagens">Mensagens</a></li>
                    </ul>
                </div>
                <div class="containerMensagens">
                    <div class="msgTitlePanel">
                        Mensagens
                    </div>
                    <div class="containerNoRegister">
                        <div class="noRegisterImg">
                            <img src="{{url('images/msgSemRegistro.png')}}" class="noContentImg">
                        </div>
                        <div class="noRegisterMsg">
                            <h4>Oops...</h4>
                            <p>Faça <a href="">login</a> ou <a href="">cadastre-se</a> para ver suas mensagems.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </main>


    <!--Import do javascript-->
    <script src="{{('js/script.js')}}"></script>
    <!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

<!--Fim do body-->

</html>