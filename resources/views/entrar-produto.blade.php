@include('includes.head')
@include('includes.header')
@include('includes.nav')
<style>
  .thumbnails {
    display: flex;
    /* Para alinhar as miniaturas horizontalmente */
    gap: 0.0px;
    /* Espaço entre as miniaturas */
  }

  .thumbnail {
    width: 100px;
    /* Largura fixa */
    height: 100px;
    /* Altura fixa */
    overflow: hidden;
    /* Oculta partes da imagem que excedem o contêiner */


  }

  .thumbnail img {
    width: 100%;
    /* Faz a imagem ocupar 100% da largura do contêiner */
    height: 100%;
    /* Faz a imagem ocupar 100% da altura do contêiner */
    object-fit: cover;
    /* Corta a imagem para preencher o contêiner */
  }

  .select-image img {
    width: 400px; /* Defina a largura desejada */
    height: 300px; /* Defina a altura desejada */
    object-fit: cover; /* Ajusta a imagem para preencher a caixa sem distorção */
  }


</style>
<main>
  <section>
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
    @if(Session::has('cadastrarDenuncia'))
    <script>
      alert("{{ Session::get('cadastrarDenuncia') }}");
    </script>
  @endif
    <div class="container-entrar-produto">
      <div class="esquerdo">
        <div class="itens">
          <div class="select-image"
            onclick="openModal('{{ $produtos->imagemProduto ? asset($produtos->imagemProduto) : asset('images/padrao.png') }}')">
            <img src="{{ $produtos->imagemProduto ? asset($produtos->imagemProduto) : asset('images/padrao.png') }}"
              alt="imagem produto">
          </div>
          <div class="thumbnails">
            <div class="thumbnail"
              onclick="openModal('{{ $produtos->imagemProduto2 ? asset($produtos->imagemProduto2) : asset('images/padrao.png') }}')">
              <img src="{{ $produtos->imagemProduto2 ? asset($produtos->imagemProduto2) : asset('images/padrao.png') }}"
                alt="imagem produto">
            </div>
            <div class="thumbnail"
              onclick="openModal('{{ $produtos->imagemProduto3 ? asset($produtos->imagemProduto3) : asset('images/padrao.png') }}')">
              <img src="{{ $produtos->imagemProduto3 ? asset($produtos->imagemProduto3) : asset('images/padrao.png') }}"
                alt="imagem produto">
            </div>
            <div class="thumbnail"
              onclick="openModal('{{ $produtos->imagemProduto4 ? asset($produtos->imagemProduto4) : asset('images/padrao.png') }}')">
              <img src="{{ $produtos->imagemProduto4 ? asset($produtos->imagemProduto4) : asset('images/padrao.png') }}"
                alt="imagem produto">
            </div>
            <div class="thumbnail"
              onclick="openModal('{{ $produtos->imagemProduto5 ? asset($produtos->imagemProduto5) : asset('images/padrao.png') }}')">
              <img src="{{ $produtos->imagemProduto5 ? asset($produtos->imagemProduto5) : asset('images/padrao.png') }}"
                alt="imagem produto">
            </div>
          </div>
        </div>
      </div>
      <div class="direito">
        <div class="conteudo-entrada-produto">
          <h6><a href="#">Masculinas</a>/ <a href="#">Casaco</a>/ </h6>

          <div class="parte1">
            <h2>{{$produtos->nomeProduto}}</h2>
            <!-- link para acionar modal de denúncia -->
            <a href="#" data-toggle="modal" data-target="#modalDenuncia">Denunciar</a>
            <form action="{{ route('favorites.add') }}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $produtos->idProduto }}">
              <button id="favorite-button" class="btn btn-favorite {{ $favorited ? 'favorited' : '' }}"
                data-product-id="{{ $produtos->idProduto }}">
                {{ $favorited ? 'Remover dos Favoritos' : 'Adicionar aos Favoritos' }}
              </button>
            </form>
          </div>

          <!-- Modal Denúncia -->
          <div class="modal fade" id="modalDenuncia" tabindex="-1" role="dialog" aria-labelledby="modalDenunciaLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalDenunciaLabel">Selecionar motivo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Itens
                        proibidos</a></li>
                    <li><a href="#">Direitos autorias | Cópia de imagem </a></li>
                    <li><a href="#">Links de sites, redes sociais e/ou marketplaces</a></li>
                    <li><a href="#">Itens ofensivos e/ou potencialmente ofensivos</a></li>
                    <li><a href="#">Outros</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Detalhe da Denúncia -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('Denuncia.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="tipoDenuncia" value="Itens proibido">
                    <input type="hidden" name="idProduto" value="{{ $produtos->idProduto }}">
                    <input type="hidden" name="idCliente" value="{{ session('id') }}">
                    <input type="hidden" id="dataDenuncia" name="dataDenuncia" value="{{ date('Y-m-d') }}" required>
                    <div class="form-group large-form-group">
                      <label for="message-text" class="col-form-label">Mensagem:</label>
                      <textarea class="form-control" id="message-text" name="descDenuncia"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Enviar denúncia</button>
                  </form>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  // Supondo que a variável seja definida no JavaScript
  var valorDaVariavel = "valor desejado";

  // Atribui o valor à input hidden
  document.getElementById('minhaVariavel').value = valorDaVariavel;
</script>

</body>

<!--Fim do body-->

</html>