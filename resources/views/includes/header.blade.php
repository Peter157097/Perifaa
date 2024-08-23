<header> 
    <div class="header_direita">
        <div class="header-logo">

            <div class="botao-abrir-menu" id="botao-menu">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div class="menu-mobile" id="menu-mobile">

                <div class="botao-fechar">
                    <i class="fa-solid fa-x"></i>
                </div>
                <div class="input-container-mobile">
                    <input type="text" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                    <button class="botao-pesquisa">
                        <i class="fa-solid fa-magnifying-glass" id="pesquisa"></i>
                    </button>
                </div>   
    <nav class="nav-mobile"><!--Começo da nav-->
        <ul>
            <li class="drop-hover"><a href="#" class="nav-hover">ROUPAS <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown das roupas-->
                    <a href="#">Blazeres & Ternos</a>
                    <a href="#">Blusas & Body</a>
                    <a href="#">Calças & Leggings</a>
                    <a href="#">Camisas</a>
                    <a href="#">Camisetas & Regatas</a>
                    <a href="#">Casacos & Sobretudos</a>
                    <a href="#">Jaquetas & Moletons</a>
                    <a href="#">Coletes & Kimonos</a>
                    <a href="#">Conjuntos</a>
                    <a href="#">Macacões & Jardineiras</a>
                    <a href="#">Saias</a>
                    <a href="#">Shorts & Bermudas</a>
                    <a href="#">Suéteres & Cardigans</a>
                    <a href="#">Tops & Croppeds</a>
                    <a href="#">Vestidos</a>
                </div> <!--Fim menu dropdown das roupas-->             
            </li>
            <li class="drop-hover"><a href="#" class="nav-hover">FEMININAS <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown da categoria feminina-->
                    <a href="#">Bermudas</a>
                    <a href="#">Blazer</a>
                    <a href="#">Camisa</a>
                    <a href="#">Body</a>
                    <a href="#">Calça</a>
                    <a href="#">Croppeds</a>
                    <a href="#">Camisa</a>
                    <a href="#">Shorts</a>
                    <a href="#">Casaco</a>
                    <a href="#">Colete</a>
                    <a href="#">Conjuntos</a>
                    <a href="#">Macacão</a>
                    <a href="#">Saia</a>
                    <a href="#">Vestido</a>
                    <a href="#">Kimono</a>
                </div> <!--Fim menu dropdown da categoria feminina-->
            </li>
            <li class="drop-hover"><a href="#" class="nav-hover">MASCULINAS <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown da categoria Masculina-->
                        <a href="#">Bermudas</a>
                        <a href="#">Camisas</a>
                        <a href="#">Blusa</a>
                        <a href="#">Body</a>
                        <a href="#">Calças</a>
                        <a href="#">Croppeds</a>
                        <a href="#">Camisa</a>
                        <a href="#">Shorts</a>
                        <a href="#">Casaco</a>
                        <a href="#">Colete</a>
                        <a href="#">Conjuntos</a>
                        <a href="#">Suéteres</a>
                </div> <!--Fim menu dropdown da categoria Masculina-->
            </li>
            <li class="drop-hover"><a href="#" class="nav-hover">CALÇADOS <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown da categoria calçados-->
                        <a href="#">Botas</a>
                        <a href="#">Sandálias</a>
                        <a href="#">Sapatos</a>
                        <a href="#">Tênis</a>
                </div> <!--Fim menu dropdown da categoria calçados-->
            </li>
            <li class="drop-hover" ><a href="#" class="nav-hover" >INFANTIL <i class="fa-solid fa-caret-right"></i></a>
                <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                        <a href="#">Bermudas</a>
                        <a href="#">Blazer</a>
                        <a href="#">Camisa</a>
                        <a href="#">Body</a>
                        <a href="#">Calça</a>
                        <a href="#">Croppeds</a>
                        <a href="#">Camisa</a>
                        <a href="#">Shorts</a>
                        <a href="#">Casaco</a>
                        <a href="#">Colete</a>
                        <a href="#">Conjuntos</a>
                        <a href="#">Macaquinho</a>
                        <a href="#">Saia</a>
                        <a href="#">Vestido</a>
                    </div> <!--Fim menu dropdown da categoria infantil-->
            </li>
            <li class="drop-hover" id="hover-marrom"><a href="#" class="nav-hover">BOLSAS & MOCHILAS <i class="fa-solid fa-caret-right"></i></a>
               <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                        <a href="#">Bolsas</a>
                        <a href="#">Mochilas & Pochetes</a>
               </div> <!--Fim menu dropdown da categoria infantil-->
            </li>
            <li><a href="#" class="nav-hover">CONTATO</i></a></li>
        </ul>
    </nav><!--Fim do menu mobile-->
            

            </div>
            <img class="logo" src="{{url('images/logo.png')}}" alt="Logo perifa">
        </div>
       
        <div class="header_icones">
            <div class="header_pesquisa">
                <div class="input-container">
                    <input type="text" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                    <button class="botao-pesquisa">
                        <i class="fa-solid fa-magnifying-glass" id="pesquisa"></i>
                    </button>
                </div>
            </div>
            <button class="botao-carrinho">
                <i class="fa-solid fa-bag-shopping"></i>
            </button>
            <button class="abrir-modal" data-modal="modal-1">
                <i class="fa-solid fa-circle"></i>
            </button>
            <!--modal 1-->
            <dialog id="modal-1">
                        <div class="modal-header">
                            <h1 class="modal-title">
                                Entrar na Perifa
                            </h1>
                            <button class="fechar-modal" data-modal="modal-1" type="button">
                            <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                            <div class="modal-body">
                            <form action="{{ url('/login') }}" method="POST">
                                @csrf
                                    <div class="inputs">
                                        <label for="email">Email</label>
                                        <input type="email" id="emailCliente" name="emailCliente" placeholder="nome@gmail.com">
                                    </div>  
                                    <div class="inputs">
                                        <label for="password">Senha</label>
                                        <input type="password" id="senhaCliente" name="senhaCliente" placeholder="••••••••">
                                    </div> 

                                    <div class="senha-opcoes">
                                        <a href="#" class="esqueci-senha">Esqueci minha senha</a>
                                    </div>
                                    <div class="login-botao">
                                        <button type = 'submit'>Entrar</button>
                                    </div>
                                </form> 
                                @if ($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                                @endif
                                    
                            </div>
        <div class="cadastrar">
            <span>Não tem uma conta?</span>
            <a href="#" class="abrir-modal" data-modal="modal-2">Clique aqui</a>
        </div>
    </form>
</dialog>

<!-- Modal 2 -->
<dialog id="modal-2" >
    <form class="form" action="{{ url('/Cliente') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h1 class="modal-title">Cadastre-se na Perifa</h1>
            <button class="fechar-modal" data-modal="modal-2" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="input-group">
            <div class="inputs">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nomeCliente" placeholder="Ex: Maria Eduarda Silva">
            </div>
            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="emailCliente" placeholder="nome@gmail.com">
            </div>
            <div class="inputs">
                <label for="email">CPF</label>
                <input type="text" id="cpf" name="cpfCliente" placeholder="nome@gmail.com">
            </div>
            <div class="inputs">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="numeroCliente" placeholder="(DD)XXXXX-XXXX">
            </div>
            <div class="inputs">
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cepCliente">
            </div>
            <div class="inputs">
                <label for="rua">Rua</label>
                <input type="text" id="rua" name="logradouroCliente">
            </div>
            <div class="inputs">
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairroCliente">
            </div>
            <div class="inputs">
        <label for="estadoCliente">Estado</label>
        <select name="estadoCliente" id="estadoCliente">
            <option value="" disabled selected>Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
        </select>
    </div>
    <div class="inputs">
        <label for="cidadeCliente">Cidade</label>
        <select name="cidadeCliente" id="cidadeCliente">
            <option value="" disabled selected>Selecione a cidade</option>
        </select>
    </div>

    <!-- JavaScript para gerenciamento dinâmico -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const estadoSelect = document.getElementById('estadoCliente');
        const cidadeSelect = document.getElementById('cidadeCliente');

        // Dados de exemplo para cidades por estado
        const cidadesPorEstado = {
            'AC': ['Rio Branco', 'Cruzeiro do Sul'],
            'AL': ['Maceió', 'Arapiraca'],
            'AP': ['Macapá', 'Santana'],
            'AM': ['Manaus', 'Parintins'],
            'BA': ['Salvador', 'Feira de Santana', 'Vitória da Conquista'],
            'CE': ['Fortaleza', 'Juazeiro do Norte', 'Sobral'],
            'DF': ['Brasília'],
            'ES': ['Vitória', 'Vila Velha', 'Cariacica'],
            'GO': ['Goiânia', 'Anápolis', 'Rio Verde', 'Catalão', 'Pirenópolis'],
            'MA': ['São Luís', 'Imperatriz', 'Caxias', 'Timon', 'Barreirinhas'],
            'MT': ['Cuiabá', 'Várzea Grande', 'Sinop', 'Rondonópolis', 'Tangará da Serra'],
            'MS': ['Campo Grande', 'Dourados', 'Corumbá', 'Ponta Porã', 'Três Lagoas'],
            'MG': ['Belo Horizonte', 'Uberlândia', 'Juiz de Fora', 'Ouro Preto', 'Contagem'],
            'PA': ['Belém', 'Santarém', 'Marabá', 'Ananindeua', 'Castanhal'],
            'PB': ['João Pessoa', 'Campina Grande', 'Santa Rita', 'Patos', 'Bayeux'],
            'PR': ['Curitiba', 'Londrina', 'Maringá', 'Ponta Grossa', 'Foz do Iguaçu'],
            'PE': ['Recife', 'Olinda', 'Jaboatão dos Guararapes', 'Caruaru', 'Petrolina'],
            'PI': ['Teresina', 'Parnaíba', 'Picos', 'Floriano', 'Esperantina'],
            'RJ': ['Rio de Janeiro', 'Niterói', 'Duque de Caxias', 'São Gonçalo', 'Nova Iguaçu'],
            'RN': ['Natal', 'Mossoró', 'Parnamirim', 'Caicó', 'Açu'],
            'RS': ['Porto Alegre', 'Caxias do Sul', 'Pelotas', 'Santa Maria', 'Novo Hamburgo'],
            'RO': ['Porto Velho', 'Ji-Paraná', 'Cacoal', 'Rolim de Moura', 'Ariquemes'],
            'RR': ['Boa Vista'],
            'SC': ['Florianópolis', 'Joinville', 'Blumenau', 'Criciúma', 'Chapecó'],
            'SP': ['São Paulo', 'Campinas', 'Santos', 'Sorocaba', 'São Bernardo do Campo']
        };

        estadoSelect.addEventListener('change', function() {
            cidadeSelect.innerHTML = '<option value="" disabled selected>Selecione a cidade</option>';

            const estadoSelecionado = estadoSelect.value;

            if (cidadesPorEstado[estadoSelecionado]) {
                cidadesPorEstado[estadoSelecionado].forEach(function(cidade) {
                    const option = document.createElement('option');
                    option.value = cidade;
                    option.textContent = cidade;
                    cidadeSelect.appendChild(option);
                });
            }
        });
    });
    </script>
            <div class="inputs">
                <label for="complemento">Complemento</label>
                <input type="text" id="complemento" name="complementoCliente">
            </div>
            <div class="inputs">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senhaCliente" placeholder="••••••••">
            </div>
        </div>
        <div class="inputs">
        <label for="imagemCliente"> <span class="text-primary">Anexar imagem</span></label>
        <div class="custom-file-upload">
            <input type="file" id="imagemCliente" name="imagemCliente" accept="image/*">
            <label for="imagemCliente" id="fileLabel">Nenhuma imagem selecionada</label>
        </div>
    </div>
        <div class="login-botao">
            <input type="submit" value="Cadastrar">
        </div>
        <div class="cadastrar2">
            <a class="fechar-modal" data-modal="modal-2" id="have-account">Já tenho conta</a>
            <a href="#" class="abrir-modal" data-modal="modal-2" id="perifa-vender">Quero vender na perifa</a>
        </div>
    </form>
</dialog>

<!-- Modal 3 -->
<dialog id="modal-3">
    <form class="form" action="{{ url('/Vendedor') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h1 class="modal-title">Venda na Perifa</h1>
            <button class="fechar-modal" data-modal="modal-3" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="input-group">
            <div class="inputs">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nomeVendedor" placeholder="Ex: Maria Eduarda Silva">
            </div>
            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="emailVendedor" placeholder="nome@gmail.com">
            </div>
            <div class="inputs">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefoneVendedor" placeholder="(DD)XXXXX-XXXX">
            </div>
            <div class="inputs">
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cepVendedor">
            </div>
            <div class="inputs">
                <label for="rua">Rua</label>
                <input type="text" id="rua" name="ruaVendedor">
            </div>
            <div class="inputs">
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairroVendedor">
            </div>
            <div class="inputs">
        <label for="estadoVendedor">Estado</label>
        <select name="estadoVendedor" id="estadoVendedor">
            <option value="" disabled selected>Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
        </select>
    </div>
    <div class="inputs">
        <label for="cidadeVendedor">Cidade</label>
        <select name="cidadeVendedor" id="cidadeVendedor">
            <option value="" disabled selected>Selecione a cidade</option>
        </select>
    </div>

    <!-- JavaScript para gerenciamento dinâmico -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const estadoSelect = document.getElementById('estadoVendedor');
        const cidadeSelect = document.getElementById('cidadeVendedor');

        // Dados de exemplo para cidades por estado
        const cidadesPorEstado = {
            'AC': ['Rio Branco', 'Cruzeiro do Sul'],
            'AL': ['Maceió', 'Arapiraca'],
            'AP': ['Macapá', 'Santana'],
            'AM': ['Manaus', 'Parintins'],
            'BA': ['Salvador', 'Feira de Santana', 'Vitória da Conquista'],
            'CE': ['Fortaleza', 'Juazeiro do Norte', 'Sobral'],
            'DF': ['Brasília'],
            'ES': ['Vitória', 'Vila Velha', 'Cariacica'],
            'GO': ['Goiânia', 'Anápolis', 'Rio Verde', 'Catalão', 'Pirenópolis'],
            'MA': ['São Luís', 'Imperatriz', 'Caxias', 'Timon', 'Barreirinhas'],
            'MT': ['Cuiabá', 'Várzea Grande', 'Sinop', 'Rondonópolis', 'Tangará da Serra'],
            'MS': ['Campo Grande', 'Dourados', 'Corumbá', 'Ponta Porã', 'Três Lagoas'],
            'MG': ['Belo Horizonte', 'Uberlândia', 'Juiz de Fora', 'Ouro Preto', 'Contagem'],
            'PA': ['Belém', 'Santarém', 'Marabá', 'Ananindeua', 'Castanhal'],
            'PB': ['João Pessoa', 'Campina Grande', 'Santa Rita', 'Patos', 'Bayeux'],
            'PR': ['Curitiba', 'Londrina', 'Maringá', 'Ponta Grossa', 'Foz do Iguaçu'],
            'PE': ['Recife', 'Olinda', 'Jaboatão dos Guararapes', 'Caruaru', 'Petrolina'],
            'PI': ['Teresina', 'Parnaíba', 'Picos', 'Floriano', 'Esperantina'],
            'RJ': ['Rio de Janeiro', 'Niterói', 'Duque de Caxias', 'São Gonçalo', 'Nova Iguaçu'],
            'RN': ['Natal', 'Mossoró', 'Parnamirim', 'Caicó', 'Açu'],
            'RS': ['Porto Alegre', 'Caxias do Sul', 'Pelotas', 'Santa Maria', 'Novo Hamburgo'],
            'RO': ['Porto Velho', 'Ji-Paraná', 'Cacoal', 'Rolim de Moura', 'Ariquemes'],
            'RR': ['Boa Vista'],
            'SC': ['Florianópolis', 'Joinville', 'Blumenau', 'Criciúma', 'Chapecó'],
            'SP': ['São Paulo', 'Campinas', 'Santos', 'Sorocaba', 'São Bernardo do Campo']
        };

        estadoSelect.addEventListener('change', function() {
            cidadeSelect.innerHTML = '<option value="" disabled selected>Selecione a cidade</option>';

            const estadoSelecionado = estadoSelect.value;

            if (cidadesPorEstado[estadoSelecionado]) {
                cidadesPorEstado[estadoSelecionado].forEach(function(cidade) {
                    const option = document.createElement('option');
                    option.value = cidade;
                    option.textContent = cidade;
                    cidadeSelect.appendChild(option);
                });
            }
        });
    });
    </script>

            
            <div class="inputs">
                <label for="complemento">Complemento</label>
                <input type="text" id="complemento" name="complementoVendedor">
            </div>
            <div class="inputs">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senhaVendedor" placeholder="••••••••">
            </div>
        </div>
        <div class="inputs">
            <label for="imagemVendedor"> <span class="text-primary">Anexar imagem</span></label>
            <div class="custom-file-upload">
            <input type="file" id="imagemVendedor" name="imagemVendedor" accept="image/*">
                <label for="imagemVendedor" id="fileLabel">Nenhuma imagem selecionada</label>
            </div>
        </div>
        <div class="login-botao">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</dialog>

       
        </div>
    </div>

</header>  <!--Fim da header-->