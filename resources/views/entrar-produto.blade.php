@include('includes.head')
@include('includes.header')
@include('includes.nav')
<style>

  nav {
  margin-bottom: 10px; 
  }
main {
  padding-top: 10px;
  background-color: #ffffff;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}


.info-container {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  gap: 20px;
  margin-top: 20px;
}


.questions h3 {
  font-size: 1.5em; 
  line-height: 1.5; 
  font-weight: bold;
}

.questions button {
  font-size: 1em;
  width: 100%;
  padding: 10px 20px; 
  margin-top: 10px;
  background-color: #5e3e24;
  border-radius: 17px;
  border: none;
  color: #fff;
  font-weight: bold;
  transition: transform 0.3s ease;
}

.questions button:hover {
  animation: shine 1s infinite alternate; 
  transform: scale(1.05); /* Leve aumento de tamanho */
}



.questions {
  width: 100%;
  max-width: 600px; 
  padding: 20px;
  margin: 0 auto; 
  text-align: center;
}

/* Estiliza o perfil do vendedor */
.profile-container {
  max-width: 400px;
  padding: 20px;
  background-color: #ffffff;
 
}

.profile-info {
  display: flex;
  align-items: center;
  gap: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #ddd;
}
.profile-photo {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
}

.profile-details {
  display: flex;
  flex-direction: column;
  
}

.profile-details a{
  color: #5e3e24;
}

.profile-details a:hover{
  color: #fff;
}
.profile-name {
  font-size: 1.2em;
  font-weight: bold;
}

.profile-location {
  color: #777;
  font-size: 0.9em;
}

.profile-rating {
  display: flex;
  align-items: center;
  gap: 5px;
}

.stars {
  color: #ffcc00;
}

.reviews {
  color: #5e3e24;
  font-weight: bold;
}

.follow-btn {
  padding: 5px 15px;
  background-color: #fff;
  border: solid #5e3e24;
  color: #5e3e24;
  border-radius: 20px;
  cursor: pointer;
  font-weight: bold;
  text-align: center;
}
.follow-btn:hover {
    background-color: #5e3e24;
    color: #fff;
    transition: 1s;
    position: relative;
}
.profile-stats {
  display: flex;
  justify-content: space-between;
  margin-top: 15px;
  gap: 20px;
}

.stat-item h5 {
  font-size: 0.9em;
  color: #777;
}

.stat-item p {
  font-size: 1.1em;
  font-weight: bold;
  margin: 0;
}

article{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}
section {
  border-bottom: 1px solid #ddd; 
  padding-bottom: 20px; 
  margin-bottom: 20px; 
}

.duvidas {
    position: relative; /* ou absolute, dependendo do seu layout */
    z-index: 1; /* ajuste conforme necessário */
}


@media (max-width: 768px) {
  /* Estilos para dispositivos com largura máxima de 768px */
  .container-entrar-produto {
    flex-direction: column; /* Exemplo de mudança de layout */
    padding-top: 130%;
    align-items: center;
    justify-content: center;
  }

  .container-entrar-produto .esquerda{
    padding-right: 50px;
    align-items: center;
    justify-content: center;
  }
  .conteudo-entrada-produto .parte1{
    display: flex;
    flex-direction: column;
    padding: 20px;
  }

}

@media (max-width: 768px) {
  /* Estilos para dispositivos com largura máxima de 768px */
  article{
    flex-direction: column; /* Exemplo de mudança de layout */
    padding: 10px; /* Ajuste de padding */
    padding-top: 120%;
  
  }
}
@media (max-width: 768px) {
    .duvidas {
        padding: 10px; /* ou outro ajuste necessário */
        margin: 0; /* ajuste de margem se necessário */
    }
}

</style>
<main>
  
  <section >
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
            <!-- link para acionar modal de denúncia -->
            <div class="botoes-entrar-produto">
              <a href="#" data-toggle="modal" data-target="#modalDenuncia" class="denunciaEntrarProduto">Denunciar</a>
              <form action="{{ route('favorites.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $produtos->idProduto }}">
                <button id="favorite-button" class="btn btn-favorite {{ $favorited ? 'favorited' : '' }}"
                  data-product-id="{{ $produtos->idProduto }}">
                  {{ $favorited ? 'Adicionar aos Favoritos' : 'Remover dos favoritos' }}
                </button>
              </form>
            </div>
            <p>{{$produtos->nomeProduto}}</p>
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
          <div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="modalMensagemLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalMensagemLabel">Enviar Mensagem</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="text" id="mensagemInput" class="form-control" placeholder="Digite sua mensagem">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="enviarMensagem()">Enviar</button>
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

  
          <p>{{$produtos->descricaoProduto}}</p>

          <div class="parte2">
            <span class="price">R${{$produtos->valorProduto}}</span>
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
 
  <article>
  <aside>
    <div class="questions">
      <h3>Duvidas sobre o produto?</h3>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMensagem">
      <p style="margin: 0">Pergunte ao vendedor <i class="fa-solid fa-message"></i></p>
      </button>
    </div>
  </aside>
  <div class="profile-container">
  <div class="profile-info">
    <img src="{{ url('$vendedor->imagemVendedor') }}" alt="Foto do usuário" class="profile-photo">
  
    <div class="profile-details">
    <h4 class="profile-name">{{ $vendedor->nomeVendedor }}</h4>
    <p class="profile-location">{{ $vendedor->localizacao }}</p>
    <div class="profile-rating">
        <span class="stars">★★★★★</span>
        <span class="reviews">({{ $vendedor->avaliacoes_count }} avaliações)</span>
    </div>
    <br>
    <a  href="/perfilVendedor,{{ $vendedor->id }}"></a>
    <a class="follow-btn" href="{{ url('/perfilVendedor', $vendedor->idVendedor)}}">Ver Perfil</a>
</div>
  </div>
  <div class="profile-stats">
    <div class="stat-item">
      <h5>Produtos à venda</h5>
      <p>1</p>
    </div>
    <div class="stat-item">
      <h5>Produtos vendidos</h5>
      <p>3</p>
    </div>
    <div class="stat-item">
      <h5>Na Perifa desde</h5>
      <p>mar/2024</p>
    </div>
  </div>
</div>
</article>

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



  async function enviarMensagem() {
    const mensagem = document.getElementById('mensagemInput').value;
    const idVendedor = {{ $produtos->idVendedor }}; // ID do vendedor associado ao produto

    if (mensagem.trim() === '') return;

    try {
      const response = await fetch(`http://localhost:3000/mensagens/${idVendedor}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'id-usuario': '{{ session('id') }}',
          'tipo-usuario': 'cliente'
        },
        body: JSON.stringify({ mensagem })
      });

      const result = await response.json();
      if (result.success) {
        document.getElementById('mensagemInput').value = '';
        $('#modalMensagem').modal('hide'); // Fecha o modal após enviar a mensagem
        alert('Mensagem enviada!');
      } else {
        alert('Erro ao enviar mensagem. Tente novamente.');
      }
    } catch (error) {
      console.error('Erro:', error);
      alert('Erro ao enviar mensagem. Tente novamente.');
    }
  }
</script>

</body>

<!--Fim do body-->

</html>
