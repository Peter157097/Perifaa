@include('includes.head')
@include('includes.header')
@include('includes.nav')

<main>
    <section>
        <div class="container-entrar-produto">
            <div class="esquerdo">
                <div class="itens">
                    <div class="select-image">
                    <img src="{{ asset($produtos->imagemProduto) }}" alt="imagem produto">

                    </div>
                    <div class="thumbnails">
                        <div class="thumbnail">
                            <img src="{{ url('images/card-image-one.png') }}" alt="image produto">
                        </div>

                        <div class="thumbnail">
                            <img src="{{ url('images/card-image-two.png') }}" alt="image produto">
                        </div>

                        <div class="thumbnail">
                            <img src="{{ url('images/card-image-three.png') }}" alt="image produto">
                        </div>

                        <div class="thumbnail">
                            <img src="{{ url('images/card-image-four.png') }}" alt="image produto">
                        </div>

                    </div>
                </div>
            </div>
            <div class="direito">
                <div class="conteudo-entrada-produto">
                    <h6><a href="#">Masculinas</a>/ <a href="#">Casaco</a>/ </h6>
                  
                        <div class="parte1">
                            <h2>{{$produtos->nomeProduto}}</h2>
                            <a href="#">Denunciar</a>
                        </div>

                        <p>{{$produtos->descricaoProduto}}</p>  
                    
                        <div class="parte2">
                            <span class="price">{{$produtos->valorProduto}}</span>
                        </div>

                        <div class="opcao-entrar-produto">
                            <div class="botaos-entrar">
                                <button class="adicionar-carrinho-entrada-produto"><i class="fa-solid fa-cart-shopping"></i>Adicionar ao carrinho</button>
                                <button class="comprar-agora">Comprar agora</button>
                            </div>
                        </div>
                        
                </div>
                
        </div>
    </section>
</main>

    
<!--Import do javascript-->
<script src="{{('js/script.js')}}"></script>
<!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<!--Fim do body-->
</html>
