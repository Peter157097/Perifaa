<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <style>
        /* Adicione o estilo aqui */
    </style>
</head>
<body>

@include('includes.head')
@include('includes.header')
@include('includes.nav')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

@if($carrinho->isEmpty())
    <div class="containerCarrinhoVazio">
        <div class="tituloCarrinhoVazio">CARRINHO</div>
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
        <a href="produtos" class="linkHomeCarrinho">Voltar às compras</a>
    </div>
@else
    <div class="containerCarrinho">
        <div class="tituloCarrinhoVazio">CARRINHO</div>
        <br>

        <!-- Card do carrinho -->
        @foreach ($carrinho as $item)
            <div class="containerCardCarrinho">
                <div class="cardCaPt1">
                    <div class="partbrecho">
                        <i class="fa-solid fa-shop store-icon"></i>
                        <h4>{{ $item->product->vendedor->nomeVendedor }}</h4>
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
                            <h6>R$ {{ number_format($item->product->valorProduto, 2, ',', '.') }}</h6>
                        </div>
                    </div>
                    <input type="checkbox" class="checkbox" data-preco="{{ $item->product->valorProduto }}">
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
                        <p id="subtotal-value">R$ 0,00</p>
                    </div>
                    <hr>
                    <div class="checkout-footer">
                        <!-- Formulário oculto para enviar o subtotal -->
                        <form id="finalize-form" action="/pagamentos" method="POST">
                            @csrf
                            <input type="hidden" id="subtotal-input" name="subtotal">
                            <button type="button" class="finalize-btn" onclick="submitFinalizeForm()">Finalizar Compra</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- JavaScript para calcular o subtotal -->
<script>
    document.querySelectorAll('.checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            let total = 0;
            document.querySelectorAll('.checkbox:checked').forEach(checked => {
                total += parseFloat(checked.getAttribute('data-preco'));
            });
            document.getElementById('subtotal-value').textContent = 'R$ ' + total.toFixed(2).replace('.', ',');
        });
    });

    function submitFinalizeForm() {
        let subtotal = document.getElementById('subtotal-value').textContent.replace('R$ ', '').replace(',', '.');
        document.getElementById('subtotal-input').value = subtotal;
        document.getElementById('finalize-form').submit();
    }
</script>

@include('includes.footer')

</body>
</html>
