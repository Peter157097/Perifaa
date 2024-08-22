@include('includes.head')

<body>
    @include('includes.header')
    @include('includes.nav')
    <main>
        <!--Começo do corpo do site-->
        <div class="container-produtos">
            <h5 class="titulo-produtos">Novidades</h5>
            <div class="produto-line"></div>
            <div class="filtro-produtos">
                <p class="filtro-display">Filtrado por:</p>
                <div class="filtro-itens">Roupas &#10005</div>
                <div class="filtro-itens">Casacos &#10005</div>
                <div class="filtro-itens">GG &#10005</div>
            </div>
        </div>
        <div class="produtos-body">
            <div class="accordion-body">
                <div class="accordion-filtro">
                    <button class="accordion">Preço</button>
                    <div class="panel">
                        <label for="text" class="label-preco">
                            De
                            <input type="preco" class="preco-filtro">
                        </label>
                        <label for="text" class="label-condicao">
                            Até
                            <input type="preco" class="label-preco">
                        </label>
                    </div>
                    <button class="accordion">Tamanhos</button>
                    <div class="panel">
                        <div class="tamanhos-check">
                            <label for="tamanho" class="label-tamanho">XGG
                                <input type="checkbox">
                            </label>
                            <label for="tamanho" class="label-tamanho">GG
                                <input type="checkbox">
                            </label>

                            <label for="tamanho" class="label-tamanho">
                                XG
                                <input type="checkbox">
                            </label>
                            <label for="tamanho" class="label-tamanho">
                                G
                                <input type="checkbox">
                            </label>
                            <label for="tamanho" class="label-tamanho">
                                M
                                <input type="checkbox">
                            </label>
                            <label for="tamanho" class="label-tamanho">
                                P
                                <input type="checkbox">
                            </label>
                            <label for="tamanho" class="label-tamanho">
                                PP
                                <input type="checkbox">
                            </label>
                        </div>
                    </div>

                    <button class="accordion">Condição</button>
                    <div class="panel">
                        <label for="condicao" class="label-condicao">
                            Novo
                            <input type="checkbox">
                        </label>
                        <label for="condicao" class="label-condicao">
                            Seminovo
                            <input type="checkbox">
                        </label>
                        <label for="condicao" class="label-condicao">
                            Usado
                            <input type="checkbox">
                        </label>
                    </div>
                    <button class="accordion">Cores</button>
                    <div class="panel">
                        <label for="cores" class="label-condicao">
                            Preto
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Branco
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Vermelho
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Azul
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Verde
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Rosa
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Amarelo
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Roxo
                            <input type="checkbox">
                        </label>
                        <label for="cores" class="label-condicao">
                            Marrom
                            <input type="checkbox">
                        </label>
                    </div>
                    <button class="accordion">Local</button>
                    <div class="panel">
                        <label for="local" class="label-condicao">
                            Anuncios Proximos
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            São Paulo
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Rio de Janeiro
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Minas Gerais
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Santa Catarina
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Espirito Santo
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Paraná
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Rio Grande do Sul
                            <input type="checkbox">
                        </label>
                        <label for="local" class="label-condicao">
                            Bahia
                            <input type="checkbox">
                        </label>
                    </div>
                    <button class="accordion">Preferências</button>
                    <div class="panel">
                        <p>N sei</p>
                    </div>
                </div>
            </div>
            <div class="cards-body">
                <div class="container-cards">
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{url('images/teste.jpg')}}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p>Brechó ZL</p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            Vapormax preto
                        </div>
                        <p class="valor-produto">R$100,00</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p>São Paulo - SP</p>
                                <p>Seminovo</p>
                            </div>
                            <div class="row-info">
                                <p>Roupas</p>
                                <p>Tam. G</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{url('images/card-image-one.png')}}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p>Brechó ZL</p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            Vapormax preto
                        </div>
                        <p class="valor-produto">R$100,00</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p>São Paulo - SP</p>
                                <p>Seminovo</p>
                            </div>
                            <div class="row-info">
                                <p>Roupas</p>
                                <p>Tam. G</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{url('images/card-image-two.png')}}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p>Brechó ZL</p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            Vapormax preto
                        </div>
                        <p class="valor-produto">R$100,00</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p>São Paulo - SP</p>
                                <p>Seminovo</p>
                            </div>
                            <div class="row-info">
                                <p>Roupas</p>
                                <p>Tam. G</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{url('images/card-image-five.png')}}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p>Brechó ZL</p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            Vapormax preto
                        </div>
                        <p class="valor-produto">R$100,00</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p>São Paulo - SP</p>
                                <p>Seminovo</p>
                            </div>
                            <div class="row-info">
                                <p>Roupas</p>
                                <p>Tam. G</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{url('images/teste.jpg')}}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p>Brechó ZL</p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            Vapormax preto
                        </div>
                        <p class="valor-produto">R$100,00</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p>São Paulo - SP</p>
                                <p>Seminovo</p>
                            </div>
                            <div class="row-info">
                                <p>Roupas</p>
                                <p>Tam. G</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto">
                        <div class="image-display">
                            <img class="img-card-produto" src="{{url('images/teste.jpg')}}">
                        </div>
                        <div class="txt-info-vendedor">
                            <p>Brechó ZL</p>
                            <p>Recente</p>
                        </div>
                        <div class="txt-nome-produto">
                            Vapormax preto
                        </div>
                        <p class="valor-produto">R$100,00</p>
                        <div class="txt-info-produto">
                            <div class="row-info">
                                <p>São Paulo - SP</p>
                                <p>Seminovo</p>
                            </div>
                            <div class="row-info">
                                <p>Roupas</p>
                                <p>Tam. G</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--script da animacao do accordion do filtro-->
        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
        </script>

    </main>
    <!--Fim do corpo do site-->

    @include('includes.footer')

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

<!--Fim do body-->

</html>