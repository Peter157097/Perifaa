<!--Começo head-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--Import do bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" ><!--Import do fontawesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

   
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Perifa</title>
</head>
<!--Começo fim da head-->

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

   body{
    font-family: "Poppins", sans-serif;
   
   }
    header{
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adiciona a sombra */
        background-color: #5e3e24;
        padding: 0.5rem;
        
    }

    .header_direita {
    display: flex;
    align-items: center;
    max-width: 1200px;
    /* Ajuste conforme necessário */
    width: 100%;
    justify-content: space-between;
    /* Distribui logo e ícones */
}
.botao-abrir-menu i {
    color: #fff;
    font-size: 25px;
}

.menu-mobile {
    background-color: #fff;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    width: 0%;
    overflow-y: auto;
    /* Adiciona rolagem se necessário */
    overflow: hidden;
    transition: .2s;

}

.menu-mobile.abrir-menu {
    width: 70%;
    padding: 1rem;
}

.menu-mobile.abrir-menu~.overlay-menu {
    display: block;
}

.menu-mobile .botao-fechar {
    padding: 20px 5%;

}

.menu-mobile .botao-fechar i {
    color: #5e3e24;
    font-size: 25px;
}

.input-container-mobile {
    display: flex;
    align-items: center;
    background-color: #f4f4f4;
    /* Cor de fundo para o campo de entrada */
    border-radius: 4px;
    /* Bordas arredondadas */
    overflow: hidden;
    /* Remove qualquer excesso de borda */
    width: 100%;
    /* Garante que o contêiner ocupe toda a largura disponível */
}

.input-container-mobile .input-pesquisa {
    flex: 1;
    /* Faz o campo de entrada ocupar todo o espaço disponível */
    border: none;
    /* Remove a borda padrão */
    padding: 10px;
    /* Adiciona padding interno */
    font-size: 16px;
    /* Ajusta o tamanho da fonte */
    border-radius: 4px;
    /* Bordas arredondadas */
    outline: none;
    /* Remove o contorno padrão ao focar */
}

.input-container-mobile .botao-pesquisa {
    background-color: #f4f4f4;
    /* Cor de fundo para o botão */
    border: none;
    /* Remove a borda padrão do botão */
    padding: 10px;
    /* Adiciona padding interno */
    cursor: pointer;
    /* Muda o cursor para indicar que é clicável */
}

.header-logo {
    flex: 1;
    /* Faz com que a logo ocupe o espaço necessário no lado esquerdo */
    display: flex;
    align-items: center;
}

.logo {
    max-width: 100%;
    /* Ajusta a logo para se ajustar ao tamanho do contêiner */
}

/* Oculta o campo de pesquisa e o botão em telas menores */
@media (min-width: 907px) {
    .botao-abrir-menu {
        display: none;
    }
}

@media (max-width: 907px) {
    .header_pesquisa {
        display: none;
        /* Oculta o campo de pesquisa e o botão de pesquisa */
    }

    .header_direita {
        justify-content: space-between;
        /* Garante que todos os itens fiquem alinhados corretamente */
    }
}


@media (max-width: 480px) {
    header {
        padding: 1rem;
    }

    .header_direita {
        flex-direction: row;
        /* Mantém a direção em linha */
        align-items: center;
        /* Alinha verticalmente os itens */
    }

    .logo {
        margin-right: 10px;
        /* Ajusta o espaço ao redor da logo */
    }
   

    .header_pesquisa {
        display: none;
        /* Garante que o campo de pesquisa e o botão de pesquisa sejam ocultos */
    }

    .header_icones {
        display: flex;
        align-items: center;
    }

    .header_icones button {
        margin-left: 8px;
    }

    .header_icones i {
        font-size: 24px;
    }

}

.ajuda {
    color: #fff;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
  
    font-size: 20px;
    line-height: 10px;
}

.ajuda h5 {
    margin-top: -15px; 
    line-height: 1; 
    color: #fff; 
    text-align: center;
}

/* Estilo da barra de pesquisa */
.search-bar {
  margin: 20px 0;
  display: flex;
  justify-content: center;
}

.search-bar input {
  width: 100%;
  max-width: 600px;
  padding: 10px;
  border-radius: 20px;
  border: 1px solid #ccc;
  font-size: 16px;
}

/* Botões de navegação */
.buttons-section {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
  margin-bottom: 30px;
}

.buttons-section .button {
  padding: 15px;
  background-color: #f4f4f4;
  border-radius: 10px;
  text-align: center;
  width: 120px;
  font-weight: bold;
  color: #5a4020;
}

/* Perguntas Frequentes */
.faq-section {
  display: flex;
  justify-content: center;
}

.faq-box {
  background-color: #a86d4b;
  padding: 20px;
  border-radius: 10px;
  width: 100%;
  max-width: 500px;
  color: white;
  font-size: 16px;
}

.faq-box p {
  margin: 10px 0;
}

/* Estilos responsivos */
@media (max-width: 768px) {
  .buttons-section {
    flex-direction: column;
    gap: 10px;
  }

  .faq-box {
    max-width: 100%;
  }

  header {
    flex-direction: column;
    text-align: center;
  }

  .menu-icons {
    justify-content: center;
    gap: 10px;
  }
}
</style>
<body>
    

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
                    <input type="search" placeholder="PESQUISAR PRODUTOS" class="input-pesquisa">
                    <button class="botao-pesquisa" data-toggle="modal" data-target="#modalSair">
                        <i class="fa-solid fa-magnifying-glass" id="pesquisa"></i>
                    </button>

            </div>
            </div>
            <div class="ajuda">
            <a href="{{ url('/logo') }}">
                            <img class="logo" src="{{url('images/logoPerifa-branca.png')}}" alt="Logo perifa">
            </a>  
            <h5>Central de ajuda</h5>
            </div>
</div>

</header>

<main class="main-content">
        <h1>Salve, Como podemos te ajudar ?</h1>
        <div class="search-bar">
            <input type="text" placeholder="Procurar...">
        </div>

        <div class="buttons-section">
            <div class="button">Pagamentos</div>
            <div class="button">Reembolso</div>
            <div class="button">Envios</div>
            <div class="button">Info Gerais</div>
        </div>

        <h2>Perguntas frequentes</h2>
        <div class="faq-section">
            <div class="faq-box">
            <p>Qual a procedência dos produtos?</p>
            <p>Como são as embalagens?</p>
            <p>Posso trocar ou devolver um produto?</p>
            <p>Quais são os métodos de pagamento aceitos?</p>
            </div>
        </div>
        </main>

  <!--Import do javascript-->
  <script src="{{('js/script.js')}}"></script>
    <!--Imports do bootstrap do body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
                    </body>                    

                    