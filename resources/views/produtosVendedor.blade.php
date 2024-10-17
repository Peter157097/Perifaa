@include('includes.headVendedor')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    .imagem-horizontal {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding-top: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;

    }

    .imagem-horizontal img {
        width: 95%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }


    .wrapper {
        width: 300px;
        height: 500px;
        background: white;
        margin: auto;
        position: relative;
        overflow: hidden;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 0;
        transform: scale(0.95);
        transition: box-shadow 0.5s, transform 0.5s;

        &:hover {
            transform: scale(1);
            box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
        }

        .container {
            width: 100%;
            height: 100%;

            .top {
                height: 80%;
                width: 100%;
                background: url(https://s-media-cache-ak0.pinimg.com/736x/49/80/6f/49806f3f1c7483093855ebca1b8ae2c4.jpg) no-repeat center center;
                -webkit-background-size: 100%;
                -moz-background-size: 100%;
                -o-background-size: 100%;
                background-size: 100%;
            }

            .bottom {
                width: 200%;
                height: 20%;
                transition: transform 0.5s;

                &.clicked {
                    transform: translateX(-50%);
                }

                h1 {
                    font-family: "Poppins", sans-serif;
                    margin: 0;
                    padding: 0;
                }

                p {
                    margin: 0;
                    padding: 0;
                }

                .left {
                    height: 100%;
                    width: 50%;
                    background: #f4f4f4;
                    position: relative;
                    float: left;

                    .details {
                        padding: 20px;
                        float: left;
                        width: calc(70% - 40px);
                    }

                    .buy {
                        float: right;
                        width: calc(30% - 2px);
                        height: 100%;
                        background: #f1f1f1;
                        transition: background 0.5s;
                        border-left: solid thin rgba(0, 0, 0, 0.1);

                        i {
                            font-size: 30px;
                            padding: 30px;
                            color: #254053;
                            transition: transform 0.5s;
                        }

                        &:hover {
                            background: #A6CDDE;
                        }

                        &:hover i {
                            transform: translateY(5px);
                            color: #00394B;
                        }
                    }
                }

                .right {
                    width: 50%;
                    background: #A6CDDE;
                    color: white;
                    float: right;
                    height: 200%;
                    overflow: hidden;

                    .details {
                        padding: 20px;
                        float: right;
                        width: calc(70% - 40px);
                    }

                    .done {
                        width: calc(30% - 2px);
                        float: left;
                        transition: transform 0.5s;
                        border-right: solid thin rgba(255, 255, 255, 0.3);
                        height: 50%;

                        i {
                            font-size: 30px;
                            padding: 30px;
                            color: white;
                        }
                    }

                    .remove {
                        width: calc(30% - 1px);
                        clear: both;
                        border-right: solid thin rgba(255, 255, 255, 0.3);
                        height: 50%;
                        background: #BC3B59;
                        transition: transform 0.5s, background 0.5s;

                        &:hover {
                            background: #9B2847;
                        }

                        &:hover i {
                            transform: translateY(5px);
                        }

                        i {
                            transition: transform 0.5s;
                            font-size: 30px;
                            padding: 30px;
                            color: white;
                        }
                    }

                    &:hover {

                        .remove,
                        .done {
                            transform: translateY(-100%);
                        }
                    }
                }
            }
        }

        .inside {
            z-index: 9;
            background: #617d00;
            width: 140px;
            height: 140px;
            position: absolute;
            top: -70px;
            right: -70px;
            border-radius: 0px 0px 200px 200px;
            transition: all 0.5s, border-radius 2s, top 1s;
            overflow: hidden;

            .icon {
                position: absolute;
                right: 85px;
                top: 85px;
                color: #617d00;
                opacity: 1;
            }

            &:hover {
                width: 100%;
                right: 0;
                top: 0;
                border-radius: 0;
                height: 80%;

                .icon {
                    opacity: 0;
                    right: 15px;
                    top: 15px;
                }

                .contents {
                    opacity: 1;
                    transform: scale(1);
                    transform: translateY(0);
                }
            }

            .contents {
                padding: 5%;
                opacity: 0;
                transform: scale(0.5);
                transform: translateY(-200%);
                transition: opacity 0.2s, transform 0.8s;

                table {
                    text-align: left;
                    width: 100%;
                }

                h1,
                p,
                table {
                    color: white;
                }

                p {
                    font-size: 13px;
                }
            }
        }

        .product-info {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: white;
            font-size: 14px;
        }

        .product-info li {
            margin: 10px 0;
            padding: 5px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .product-info li strong {
            font-family: "Poppins", sans-serif;
            font-size: 20px;
        }


    }



    .prod {
        display: flex;
        justify-content: center;
        flex-direction: row;
        width: 100%;
        margin: 0 auto;
        background-color: #617d00;
    }

    .containerProdutoVendedor {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .part2 {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding-top: 50px;
    }
</style>


<body>

    @include('includes.menuVendedor')

    <div class="containerProdutoVendedor">

        <div class="imagem-horizontal">
            <img src="images/vendeProd.png" alt="">
        </div>
        <div class="part2">
            <div class="carousel-container">
                <button class="carousel-arrow left" id="prev">&lt;</button>
                <div class="carousel-wrapper" id="carousel">
                    <div class="carousel-item">
                        <div class="wrapper">
                            <div class="container">
                                <div class="top"> <!--bota a imagem do item aqui --> </div>
                                <div class="bottom">
                                    <div class="left">
                                        <div class="details">
                                            <h1>Camisa</h1>
                                            <p>R$ 150</p>
                                        </div>
                                        <div class="edit" data-modal-target="#modal-editar"><i
                                                class="material-icons">edit</i>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="done"><i class="material-icons">done</i></div>
                                        <div class="details">
                                            <h1>Camisa</h1>
                                            <p>Adicionado ao carrinho</p>
                                        </div>
                                        <div class="remove"><i class="material-icons">clear</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inside">
                                <div class="icon"><i class="material-icons">info_outline</i></div>
                                <div class="contents">
                                    <ul class="product-info">
                                        <li><strong>Tamanho:</strong> M</li>
                                        <li><strong>Cor:</strong> Azul</li>
                                        <li><strong>Material:</strong> Algodão</li>
                                        <li><strong>Disponibilidade:</strong> Em estoque</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <button class="carousel-arrow right" id="next">&gt;</button>
            </div>


        </div>


        <!-- Modal para editar produto -->
        <div class="modal" id="modal-editar">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" placeholder="Calça Jens Zara">

                    <label for="valor">Valor</label>
                    <input type="text" id="valor" placeholder="R$">

                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" placeholder="Peça em bom estado, nunca usada"></textarea>

                    <label for="cor">Cor</label>
                    <select id="cor">
                        <option>Selecione</option>
                        <!-- outras opções -->
                    </select>

                    <label for="regiao">Região</label>
                    <select id="regiao">
                        <option>Selecione</option>
                        <!-- outras opções -->
                    </select>

                    <label for="tamanho">Tamanho</label>
                    <select id="tamanho">
                        <option>Selecione</option>
                        <!-- outras opções -->
                    </select>

                    <label for="genero">Gênero</label>
                    <select id="genero">
                        <option>Selecione</option>
                        <!-- outras opções -->
                    </select>

                    <label for="categoria">Categoria</label>
                    <select id="categoria">
                        <option>Selecione</option>
                        <!-- outras opções -->
                    </select>

                    <label for="condicao">Condição</label>
                    <select id="condicao">
                        <option>Selecione</option>
                        <!-- outras opções -->
                    </select>

                    <div class="image-upload-section">
                        <label for="image-upload" class="image-label">Editar Imagem</label>
                        <input type="file" id="image-upload" class="image-input" accept="image/*">
                        <div class="image-preview">
                            <img id="image-preview" src="" alt="Nenhuma imagem selecionada">
                        </div>
                        <p class="image-placeholder">Tudo pronto? Salve as alterações!</p>

                        <button type="submit" class="salvar-btn">Salvar</button>

                    </div>



                    <div class="image-upload-section">
                    <p class="image-placeholder">Deseja deletar este produto?</p>
                    <button type="submit" class="deletar-btn" title="Clique para deletar o produto">Deletar</button>
                    </div>

                </form>
            </div>
        </div>

        <script>

            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            const carousel = document.getElementById('carousel');

            prevButton.addEventListener('click', () => {
                carousel.scrollBy({ left: -200, behavior: 'smooth' });
            });

            nextButton.addEventListener('click', () => {
                carousel.scrollBy({ left: 200, behavior: 'smooth' });
            });

            // Abrir modal ao clicar no botão de editar
            document.querySelectorAll('.edit').forEach(button => {
                button.addEventListener('click', function () {
                    const modal = document.querySelector(button.getAttribute('data-modal-target'));
                    modal.classList.add('active');
                });
            });

            // Fechar modal ao clicar no botão de fechar
            document.querySelectorAll('[data-close-button]').forEach(button => {
                button.addEventListener('click', function () {
                    const modal = button.closest('.modal');
                    modal.classList.remove('active');
                });
            });

            // Fechar modal ao clicar fora do modal
            window.addEventListener('click', (event) => {
                const modals = document.querySelectorAll('.modal.active');
                modals.forEach(modal => {
                    if (event.target === modal) {
                        modal.classList.remove('active');
                    }
                });
            });
        </script>

        <style>
            .carousel-container {
                width: 80%;
                overflow: hidden;
                background-color: #617d00;
                margin: 40px;
                border-radius: 10px;
                position: relative;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease, box-shadow 0.3s ease;

            }

            .carousel-container {
                width: 80%;
                overflow: hidden;
                background-color: #8AC007;
                /* Verde similar ao da imagem */
                padding: 20px;
                border-radius: 10px;
                position: relative;
            }

            .carousel-wrapper {
                display: flex;
                overflow-x: scroll;
                scroll-snap-type: x mandatory;
                transition: transform 0.3s ease-in-out;
                scrollbar-width: none;
                /* Firefox */
                -ms-overflow-style: none;
                /* Internet Explorer 10+ */


            }

            /* Esconde a barra de rolagem */
            .carousel-wrapper::-webkit-scrollbar {
                display: none;
                /* Chrome, Safari and Opera */
            }

            .carousel-item {
                min-width: 200px;
                margin: 0 10px;
                flex-shrink: 0;
                text-align: center;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 10px;
            }

            .carousel-item img {
                width: 100%;
                height: auto;
                border-radius: 5px;
            }

            .carousel-item p {
                margin-top: 10px;
                font-size: 16px;
                color: #333;
            }

            /* Estilos para as setas de navegação */
            .carousel-arrow {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 10px;
                cursor: pointer;
                border-radius: 50%;
                font-size: 24px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .carousel-arrow:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            .carousel-arrow.left {
                left: 10px;
            }

            .carousel-arrow.right {
                right: 10px;
            }



            /* Estilo da seção de upload de imagem */
            .image-upload-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 20px 0;
                text-align: center;
            }

            .image-label {
                display: inline-block;
                background-color: #007700;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                font-weight: bold;
            }

            .image-label:hover {
                background-color: #005500;
            }

            .image-input {
                display: none;
            }

            /* Estilo da pré-visualização da imagem */
            .image-preview {
                margin-top: 10px;
                width: 150px;
                height: 150px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                display: none;
                /* Escondido inicialmente */
            }

            .image-preview img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .image-placeholder {
                font-size: 14px;
                color: white;
                margin-top: 10px;
            }

            /* Estilo para a lista de informações do produto */
            .product-info {
                list-style-type: none;
                padding: 0;
                margin: 0;
                color: white;
                font-size: 14px;
            }

            .product-info li {
                margin: 10px 0;
                padding: 5px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }

            .product-info li strong {
                color: white;
            }

            /* Estilo do modal */
            /* Estilo do modal */
            .modal {
                font-family: "Poppins", sans-serif;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1000;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: rgba(0, 0, 0, 0.4);
                opacity: 0;
                visibility: hidden;
                transform: scale(0.8);
                transition: opacity 0.3s ease, transform 0.2s ease, visibility 0s 0.2s;
            }

            /* Quando ativo, o modal torna-se visível */
            .modal.active {
                opacity: 1;
                visibility: visible;
                transform: scale(1);
                transition: opacity 0.3s ease, transform 0.3s ease, visibility 0s;
            }

            .pum {
                font-size: 14px;
                color: white;
                margin-top: 10px;
            }
            .sla{
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 2px;
            }

            .modal-content {
                background-color: #617d00;
                margin: 5% auto;
                padding: 20px;
                border-radius: 10px;
                width: 400px;
                max-height: 80vh;
                overflow-y: auto;
                opacity: 0;
                transform: translateY(-20px);
                transition: opacity 0.3s ease, transform 0.3s ease;
            }

            .modal.active .modal-content {
                opacity: 1;
                transform: translateY(0);
            }

            .modal-content form {
                display: flex;
                flex-direction: column;
            }

            .modal-content label {
                color: white;
                margin: 10px 0 5px;
            }

            .modal-content input,
            .modal-content select,
            .modal-content textarea {
                padding: 10px;
                margin-bottom: 10px;
                border: none;
                border-radius: 5px;
            }

            .modal-content .salvar-btn {
                font-family: "Poppins", sans-serif;
                background-color: white;
                color: #617d00;
                padding: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
                width: 100%;

            }

            .modal-content .deletar-btn {
                width: 100%;
                font-family: "Poppins", sans-serif;
                background-color: red;
                margin: 5px;
                color: whitesmoke;
                padding: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
            }

            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            /* Estilizando a barra de rolagem do modal */
            .modal-content {
                /* Outros estilos já existentes */
                overflow-y: auto;
                /* Garante que a barra de rolagem apareça quando necessário */
                max-height: 80vh;
                /* Altura máxima do modal */
            }

            /* Para navegadores WebKit (Chrome, Safari) */
            .modal-content::-webkit-scrollbar {
                width: 8px;
                /* Largura da barra de rolagem */
                background: rgba(0, 0, 0, 0.1);
                /* Cor de fundo da barra de rolagem */
            }

            .modal-content::-webkit-scrollbar-thumb {
                background: #007700;
                /* Cor da parte que pode ser arrastada */
                border-radius: 4px;
                /* Bordas arredondadas */
            }

            .modal-content::-webkit-scrollbar-thumb:hover {
                background: #005500;
                /* Cor ao passar o mouse */
            }

            /* Para Firefox */
            .modal-content {
                scrollbar-width: thin;
                /* Largura da barra de rolagem */
                scrollbar-color: #007700 rgba(0, 0, 0, 0.1);
                /* Cor da barra e da área de fundo */
            }

            /* Estilo para o botão de editar */
            .edit {
                float: right;
                width: calc(30% - 2px);
                height: 100%;
                background: #f1f1f1;
                transition: background 0.5s;
                border-left: solid thin rgba(0, 0, 0, 0.1);
            }

            .edit i {
                font-size: 30px;
                padding: 30px;
                color: #254053;
                transition: transform 0.5s;
            }

            .edit:hover {
                background: #A6CDDE;
            }

            .edit:hover i {
                transform: translateY(5px);
                color: #00394B;
            }
        </style>
        <script>
            // Abrir modal ao clicar no botão de editar
            document.querySelectorAll('.edit').forEach(button => {
                button.addEventListener('click', function () {
                    const modal = document.querySelector(button.getAttribute('data-modal-target'));
                    modal.classList.add('active');
                });
            });

            // Fechar modal ao clicar no botão de fechar
            document.querySelectorAll('.close').forEach(button => {
                button.addEventListener('click', function () {
                    const modal = button.closest('.modal');
                    modal.classList.remove('active');
                });
            });

            // Fechar modal ao clicar fora do modal
            window.addEventListener('click', function (event) {
                const modals = document.querySelectorAll('.modal.active');
                modals.forEach(modal => {
                    if (event.target === modal) {
                        modal.classList.remove('active');
                    }
                });
            });

        </script>
</body>

</html>