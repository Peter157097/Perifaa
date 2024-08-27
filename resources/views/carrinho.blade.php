@include('includes.head')

<!--Começo do body-->

<body>
    @include('includes.header')

    @include('includes.nav')
    <style>
        /* style carrinho vazio */
        .containerCarrinhoVazio {
            display: flex;
            align-items: first baseline;
            justify-content: flex-start;
            flex-direction: column;
            padding: 15vh;
            font-family: "Poppins", sans-serif;
            font-size: 2vh;
        }


        .linkHomeCarrinho {
            text-decoration: none;
            color: #5e3e24;
            display: inline-block;
            /* Necessário para que transform funcione corretamente */
            transition: transform 0.3s ease;
        }

        .linkHomeCarrinho:hover {
            transform: scale(1.1);
            text-decoration: none;
            color: #5e3e24;
        }

        .tituloCarrinhoVazio {
            white-space: nowrap;
            font-weight: 700;
            font-style: oblique;
        }

        .containerCarrinho {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .checkoutContainer h3 {
            font-size: 1.6vh;
        }


        .botaoFinalizar {
            bottom: 20px;
            right: 20px;
        }

        .linha {
            border: none;
            /* Remove bordas padrão do <hr> */
            border-top: 1px solid #ccc;
            /* Linha cinza clara */
            margin: 10px 0;
            /* Espaçamento acima e abaixo da linha */
        }
    </style>

    <div class="containerCarrinhoVazio">

        <!-- CARRINHO VAZIO!!!!!!!!!!!!!!!!!!!!! -->
        <div class="tituloCarrinhoVazio">
            CARRINHO
        </div>
        <br>
        <div class="tituloCarrinhoVazio">
            <h3>Tá meio deserto aqui...</h3>
        </div>
        <div class="textoCarrinhoVazio">
            Parece que você não adicionou nada no carrinho até o momento.
            <br>
            Continue procurando algo do seu interesse!
        </div>
        <br>

        <a href="produtos" class="linkHomeCarrinho">
            Voltar às compras
        </a>

    </div>
    <div class="containerCarrinho">

        <!-- conteudo -->



        <div class="parteFinalizarContainer">
            <div class="checkoutContainer">
                <h3>CHECKOUT</h3>
            </div>
            <hr class="linha">

            <div class="parteSubtotal">
                <div class="sub">
                    <h2>
                        Subtotal
                    </h2>
                    <div class="precoCarrinho">
                        R$138,00
                    </div>
                </div>
                <div class="botaoFinalizar">
                    <input type="submit" value="Finalizar" class="botaoF">
                </div>
            </div>
        </div>

    </div>


    
    @include('includes.footer')

    <!--Import do javascript-->
    <script src="{{('js/script.js')}}"></script>
    <!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>