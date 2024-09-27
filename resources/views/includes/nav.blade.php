<nav class="web">
    <!--Começo da nav-->
    @if(session('is_vendedor'))
        <style>
            .web {
                height: 40px;
                font-family: "Poppins", sans-serif;
                font-weight: 700;
                font-style: normal;
                /* Adicionado */
                z-index: 10;
                /* Adicionado */
                box-shadow: 0 8px 8px rgba(148, 148, 148, 0.3);
                /* Sombra somente embaixo */
                position: relative;
                background-color: #5e3e24;
            }


            .web a {
                color: #fff;
                position: relative;
            }


            .web a:hover {
                text-decoration: none;
                color: #fff;
            }

            .web li a::after {
                content: " ";
                width: 0px;
                height: 6px;
                background-color: rgba(255, 255, 255, 0.5);
                position: absolute;
                top: 15px;
                left: 0;
                transition: width 0.5s;

            }

            .web li a.nav-hover:hover::after {
                width: 70px;
            }

            .web #hover-marrom a.nav-hover:hover::after {
                width: 150px;
            }

            .web ul {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
            }

            .web li {
                list-style-type: none;

            }

            .web i {
                color: #fff;
            }


            .drop-hover {
                position: relative;

            }

            .drop-hover .drop {
                position: absolute;
                background-color: #fff;
                width: 200px;
                /* Ajustado */
                padding: 0;
                /* Inicialmente sem padding */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Adicionado */
                border-radius: 4px;
                /* Adicionado */
                overflow: hidden;
                z-index: 20;
                /* Mantido */
                display: none;
                /* Adicionado */
                flex-direction: column;
                /* Adicionado */
                transition: padding 0.3s ease;
                /* Adicionado */
            }

            .drop-hover .drop a {
                padding: 10px 20px;
                /* Ajustado */
                font-size: 14px;
                /* Ajustado */
                color: #252525;
                /* Ajustado */
                text-decoration: none;
                /* Adicionado */
                transition: background 0.3s ease;
                /* Adicionado */
                transition: opacity 0.3s ease;
                /* Adicionado */
            }

            .drop-hover:hover .drop {
                display: flex;
                /* Mostrar dropdown no hover */
                padding: 10px 0;
                /* Restaurar padding */
            }

            .drop-hover:hover .drop a {
                opacity: 1;
                /* Adicionado */
            }

            .drop-hover .drop a:hover {
                background-color: #f5f5f5;
                /* Adicionado */
            }

            @media (max-width: 907px) {
                .web2 {
                    display: none;
                }
            }
        </style>
    @else
        <style>
            /* Navegação */
            .web {
                height: 40px;
                font-family: "Poppins", sans-serif;
                font-weight: 700;
                font-style: normal;
                /* Adicionado */
                z-index: 10;
                /* Adicionado */
                box-shadow: 0 8px 8px rgba(148, 148, 148, 0.3);
                /* Sombra somente embaixo */
                position: relative;

            }


            .web a {
                color: #252525;
                position: relative;
            }


            .web a:hover {
                text-decoration: none;
                color: #252525;
            }

            .web li a::after {
                content: " ";
                width: 0px;
                height: 6px;
                background-color: #5e3e2467;
                position: absolute;
                top: 15px;
                left: 0;
                transition: width 0.5s;

            }

            .web li a.nav-hover:hover::after {
                width: 70px;
            }

            .web #hover-marrom a.nav-hover:hover::after {
                width: 150px;
            }

            .web ul {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
            }

            .web li {
                list-style-type: none;

            }

            .web i {
                color: #5e3e24;
            }


            .drop-hover {
                position: relative;

            }

            .drop-hover .drop {
                position: absolute;
                background-color: #fff;
                width: 200px;
                /* Ajustado */
                padding: 0;
                /* Inicialmente sem padding */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Adicionado */
                border-radius: 4px;
                /* Adicionado */
                overflow: hidden;
                z-index: 20;
                /* Mantido */
                display: none;
                /* Adicionado */
                flex-direction: column;
                /* Adicionado */
                transition: padding 0.3s ease;
                /* Adicionado */
            }

            .drop-hover .drop a {
                padding: 10px 20px;
                /* Ajustado */
                font-size: 14px;
                /* Ajustado */
                color: #252525;
                /* Ajustado */
                text-decoration: none;
                /* Adicionado */
                transition: background 0.3s ease;
                /* Adicionado */
                transition: opacity 0.3s ease;
                /* Adicionado */
            }

            .drop-hover:hover .drop {
                display: flex;
                /* Mostrar dropdown no hover */
                padding: 10px 0;
                /* Restaurar padding */
            }

            .drop-hover:hover .drop a {
                opacity: 1;
                /* Adicionado */
            }

            .drop-hover .drop a:hover {
                background-color: #f5f5f5;
                /* Adicionado */
            }
        </style>
    @endif  
  <ul>
        <li class="dropdown">
            <a href="{{ url('/produtos') }}" class="linkHomeCarrinho">
                ROUPA <i class="fa-solid fa-caret-down"></i>
            </a>
            <div class="dropdown-menu"> <!-- Começo do menu dropdown -->
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
            </div> <!-- Fim do menu dropdown -->
        </li>


        <li class="drop-hover"><a href="#" class="nav-hover">FEMININAS <i class="fa-solid fa-caret-down"></i></a>
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
        <li class="drop-hover"><a href="#" class="nav-hover">MASCULINAS <i class="fa-solid fa-caret-down"></i></a>
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
        <li class="drop-hover"><a href="#" class="nav-hover">CALÇADOS <i class="fa-solid fa-caret-down"></i></a>
            <div class="drop"> <!--Começo menu dropdown da categoria calçados-->
                <a href="#">Botas</a>
                <a href="#">Sandálias</a>
                <a href="#">Sapatos</a>
                <a href="#">Tênis</a>
            </div> <!--Fim menu dropdown da categoria calçados-->
        </li>
        <li class="drop-hover"><a href="#" class="nav-hover">INFANTIL <i class="fa-solid fa-caret-down"></i></a>
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
        <li class="drop-hover" id="hover-marrom"><a href="#" class="nav-hover">BOLSAS & MOCHILAS <i
                    class="fa-solid fa-caret-down"></i></a>
            <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                <a href="#">Bolsas</a>
                <a href="#">Mochilas & Pochetes</a>
            </div> <!--Fim menu dropdown da categoria infantil-->
        </li>
        <li><a href="{{url('contato')}}" class="nav-hover">CONTATO</i></a></li>
    </ul>
</nav><!--Fim da nav-->
