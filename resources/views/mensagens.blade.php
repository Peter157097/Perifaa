@include('includes.head')

<!--Começo do body-->

<body>
    @include('includes.header')

    @include('includes.nav')
    <main>
        <div class="mensagensContainer">
            <div class="topSubNav">
                <ul class="subNavItens">
                    <li>Pedidos</li>
                    <li>Mensagens</li>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')
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