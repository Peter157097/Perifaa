

@include('includes.head')
@include('includes.header')
@include('includes.nav')

<main>
    <section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
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
                            <!-- link para acionar modal 1-->
                            <a href="#" data-toggle="modal" data-target="#modalExemplo">Denunciar</a>
                            <form action="{{ route('favorites.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $produtos->idProduto }}">
                                <button id="favorite-button" 
                                        class="btn btn-favorite {{ $favorited ? 'favorited' : '' }}" 
                                        data-product-id="{{ $produtos->idProduto }}">
                                    {{ $favorited ? 'Remover dos Favoritos' : 'Adicionar aos Favoritos' }}
                                </button>
                            </form>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Selecionar motivo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <ul>
                            <li><a href="#"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Itens proibidos</a></li>
                            <li><a href="#">Direitos autorias | Cópia de imagem </a></li>
                            <li><a href="#">Links de sites, redes socias e/ou marketplaces</a></li>
                            <li><a href="#">Itens ofencivos e/ou potencialmente ofensivos</a></li>
                            <li><a href="#">Outros</a></li>
                           </ul>
                        </div>
                        </div>
                    </div>
                    </div>

            <!--  modal 2 quando clica nos links-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group large-form-group">
                            <label for="message-text" class="col-form-label">Mensagem:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      
                        <button type="button" class="btn btn-primary">Enviar denúncia</button>
                    </div>
                    </div>
                </div>
                </div>                      
                        



                        <h4>Descrição</h4>
                        <p>{{$produtos->descricaoProduto}}</p>  
                    
                        <div class="parte2">
                            <span class="price">{{$produtos->valorProduto}}</span>
                        </div>

                        <div class="opcao-entrar-produto">
                            <div class="botaos-entrar">

                            <form action="{{ route('carrinho.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $produtos->idProduto }}">
                                <button id="carrinho-button" 
                                        class="adicionar-carrinho-entrada-produto {{ $carrinho ? 'carrinho' : '' }}" 
                                        data-product-id="{{ $produtos->idProduto }}">
                                    {{ $carrinho ? 'Remover do Carrinho' : 'Adicionar ao Carrinho' }}
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </form>
                             
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