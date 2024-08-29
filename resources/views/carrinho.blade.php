    <!DOCTYPE html>
    <html lang="pt-BR">
      
        <style>
            /* Estilo para carrinho vazio */
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
                transition: transform 0.3s ease;
            }

            .linkHomeCarrinho:hover {
                transform: scale(1.1);
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
                flex-direction: column;
                padding: 20px;
            }

            .checkoutContainer h3 {
                font-size: 2.6vh;
            }

            .parteFinalizarContainer {
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #ffff;
                width: 100%;
                margin: 10px;
                border-radius: 10px 20px 30px 40px;
                transition: background-color 0.3s ease;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .botaoFinalizar {
                bottom: 20px;
                right: 20px;
            }

            .checkoutContainer {
                padding: 4px;
                padding-top: 20px;
            }

            .linha {
                background-color: #5e3e24;
                border: none;
                border-top: 1px solid #ccc;
                width: 90%;
            }

            .parteSubtotal h2 {
                font-size: 2vh;
            }

            .parteSubtotal {
                padding: 6px;
                display: flex;
                flex-direction: row;
                width: 90%;
                justify-content: space-between;
                align-items: center;
            }

            .button {
                background-color: #5e3e24;
                border: 1px solid transparent;
                color: white;
                padding: 10px 24px;
                font-size: 14px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-weight: 500;
                transition: background-color 0.3s, transform 0.2s, border-color 0.3s;
                cursor: pointer;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .button:hover {
                background-color: #A68064;
                border-color: #0056b3;
            }

            .button:active {
                transform: scale(0.98);
            }

            .button:focus {
                outline: none;
                box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
            }

            .imagemProduto {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 10px;
            }

            .nomeProduto {
                font-weight: 600;
                font-size: 2vh;
            }

            .checkbox {
                margin-right: 10px;
            }
        </style>
    </head>
    <body>
        @include('includes.header')
        @include('includes.nav')

        <div class="containerCarrinhoVazio">
            <!-- CARRINHO VAZIO -->
            <div class="tituloCarrinhoVazio">
                CARRINHO
            </div>
            <br>

            @if(session('success'))
            <p>{{ session('success') }}</p>
            @endif

            @if(session('error'))
            <p>{{ session('error') }}</p>
            @endif

            @if($carrinho->isEmpty())
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
            @else

            <!-- Conteúdo do carrinho -->
            @foreach ($carrinho as $item)
            <div class="parteFinalizarContainer">
                <div class="checkoutContainer">
                    <h3>CHECKOUT</h3>
                </div>
                <hr class="linha">

                <div class="parteSubtotal">
                    <input type="checkbox" class="checkbox" data-preco="{{ $item->product->valorProduto }}">
                    <img src="{{ $item->product->imagemProduto }}" alt="Imagem do Produto" class="imagemProduto">
                    <div class="detalhesProduto">
                        <div class="nomeProduto">{{ $item->product->nomeProduto }}</div>
                        <div class="precoCarrinho">
                            {{ $item->product->valorProduto }}
                        </div>
                    </div>
                    <div class="botaoFinalizar">
                        <input type="submit" value="Finalizar" class="button">
                    </div>
                    <form action="{{ route('carrinho.destroy', $item->idProduto) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </div>
            </div>
            @endforeach

            <div class="parteSubtotal">
                <h3>Total Selecionado: R$ <span id="totalSelecionado">0</span></h3>
            </div>

        </div>
        @endif

        @include('includes.footer')

        <!-- Import do javascript -->
        <script src="{{('js/script.js')}}"></script>
        <!-- Imports do bootstrap do body -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <script>
            document.querySelectorAll('.checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    let total = 0;
                    document.querySelectorAll('.checkbox:checked').forEach(checked => {
                        total += parseFloat(checked.getAttribute('data-preco'));
                    });
                    document.getElementById('totalSelecionado').textContent = total.toFixed(2);
                });
            });
        </script>
    </body>
    </html>
