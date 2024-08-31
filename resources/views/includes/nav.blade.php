<nav class="web {{ session('is_vendedor') ? 'navbar-vendedor' : (session('is_cliente') ? 'navbar-cliente' : '') }}">
<!--Começo da nav-->
<style>        .web {
            height: 40px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
            z-index: 10;
            box-shadow: 0 8px 8px rgba(148, 148, 148, 0.3);
            position: relative;
        }

        .navbar-vendedor {
            background-color: #5e3e2467; /* Cor da navbar para vendedores */
        }

        .web a {
    color: #252525;
    position: relative;
}
    </style>


    
        <ul>
        <li class="drop-hover">
        <a href="{{ url('/produtos') }}" class="nav-hover">ROUPA <i class="fa-solid fa-caret-down"></i></a>
        <div class="drop"> <!-- Começo menu dropdown das roupas -->
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
        </div> <!-- Fim menu dropdown das roupas -->
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
            <li class="drop-hover" ><a href="#" class="nav-hover" >INFANTIL <i class="fa-solid fa-caret-down"></i></a>
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
            <li class="drop-hover" id="hover-marrom"><a href="#" class="nav-hover">BOLSAS & MOCHILAS <i class="fa-solid fa-caret-down"></i></a>
               <div class="drop"> <!--Começo menu dropdown da categoria Infantil-->
                        <a href="#">Bolsas</a>
                        <a href="#">Mochilas & Pochetes</a>
               </div> <!--Fim menu dropdown da categoria infantil-->
            </li>
            <li><a href="#" class="nav-hover">CONTATO</i></a></li>
        </ul>
    </nav><!--Fim da nav-->