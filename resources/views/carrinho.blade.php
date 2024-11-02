<html>
<style>
    
</style>
</head>

@include('includes.head')
@include('includes.header')
@include('includes.nav')

<!-- CARRINHO VAZIO -->


@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

@if($carrinho->isEmpty())
    <div class="containerCarrinhoVazio">

        <div class="tituloCarrinho">
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
@else
    <div class="containerCarrinho">
        <div class="tituloCarrinho">
            CARRINHO
        </div>
        <br>

        <!-- card carrinho -->
         
        @foreach ($carrinho as $item)
            <div class="containerCardCarrinho">
                <div class="cardCaPt1">
                    <div class="partbrecho">
                        <i class="fa-solid fa-shop store-icon"></i>
                        <h4>{{ $item->product->vendedor->nomeVendedor }}</h4> <!-- nome do brecho -->
                    </div>
                    <div class="partlixeira">
                        <form action="{{ route('carrinho.destroy', $item->idProduto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                <i class="fa-solid fa-trash trash-icon"></i>
                            </button>
                        </form>



                    </div>
                </div>
                <hr class="linha">

                <div class="cardCaPt2">
                    <div class="parteImagemItem">
                        <img src="{{ $item->product->imagemProduto }}" alt="Imagem do Produto" class="imagemProduto">

                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Peça</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->nomeProduto }}</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Estado</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>Blusa Nike Dry-Fit</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Cor</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->cor->nomeCor }}</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Tamanho</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->tamanho->nomeTamanho }}</h6>
                        </div>
                    </div>
                    <div class="detalhesProduto">
                        <div class="titulosDetalhes">
                            <h5>Valor</h5>
                        </div>
                        <div class="parteDetalhesBanco">
                            <h6>{{ $item->product->valorProduto }}</h6>
                        </div>
                    </div>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </div>

            </div>



        @endforeach
        <div class="checkout-wrapper">
            <div class="checkout-card">
                <div class="checkout-header">
                    <h2>Resumo do Pedido</h2>
                </div>
                <div class="checkout-body">
                    <div class="checkout-info">
                        <p>Subtotal</p>
                        <p class="subtotal-value">R$138,00</p>
                    </div>
                    <hr>
                    <div class="checkout-footer">
                        <button class="finalize-btn">Finalizar Compra</button>
                    </div>
                </div>
            </div>
        </div>

@endif
</div>

<!-- Import do javascript -->
<script src="{{('js/script.js')}}"></script>
<!-- Imports do bootstrap do body -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script>
    document.querySelectorAll('.checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
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
@include('includes.footer')
