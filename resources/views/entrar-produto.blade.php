@include('includes.head')
@include('includes.header')
@include('includes.nav')


<div class="container-entrar-produto">
    <div class="entrar-produto">
        <div class="direita-produto">
          
                    <img class="imagem-entrar-produto" src="{{ url('images/card-image-two.png') }}" alt="image produto" >
        
        </div>

        <div class="esquerda-produto">
        
            <div class="parte1-esquerda">
                <h2>Blusa rosa verde</h2>
                <a href="#">Denunciar</a>
            </div>
          
            

           <div class="juntar">
            <div class="parte2-esquerda">
                        <span><h3>R$ 55</h3></span>
                        <h3><del>R$ 70<del></h3>
                    </div>
                    <div class="parte3-esquerda">
                        <p>em até 8x R$ 5,40 sem juros</p>
            </div>
           </div>
               
                <div class="parte4-esquerda">
                    <button class="adicionar-carrinho-entrada-produto"><i class="fa-solid fa-cart-shopping"></i>Adicionar ao carrinho</button>
                    <button class="comprar-agora">Comprar agora</button>
                </div>
           
            

        </div>
    </div>
</div>


    
<!--Import do javascript-->
<script src="{{('js/script.js')}}"></script>
<!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<!--Fim do body-->
</html>