@include('includes.headVendedor')
<style>
    .card-container {
        display: flex;
        justify-content: space-between;
        background-color: #009b5f;
        border-radius: 15px;
        padding: 20px;
        width: 100%;
        max-width: 1100px;
        margin: 20px auto;
        color: #fff;
        border: 3px solid #000;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease-in-out, transform 0.4s ease-in-out;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeIn 0.7s forwards ease-in-out;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-container:hover {
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
        transform: scale(1.02);
    }

    .form-section {
        display: grid;
        grid-template-columns: 1fr;
        gap: 15px;
        width: 20%;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    label {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input,
    select,
    textarea {
        padding: 10px;
        border-radius: 5px;
        border: none;
        font-size: 14px;
        background-color: #007e38;
        color: #fff;
        transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, transform 0.2s;
    }

    input::placeholder,
    textarea::placeholder {
        color: #ddd;
        transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out;
    }

    input:focus::placeholder,
    textarea:focus::placeholder {
        transform: translateY(-10px);
        opacity: 0;
    }

    input:focus,
    select:focus,
    textarea:focus {
        background-color: #00cc5a;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        outline: none;
        transform: scale(1.02);
    }

    input:hover,
    select:hover,
    textarea:hover {
        background-color: #00994b;
        transform: scale(1.01);
    }

    textarea {
        resize: none;
    }

    .image-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 30%;
    }

    .image-upload {
        display: flex;
        justify-content: space-around;
        margin-bottom: 15px;
    }

    .image-upload img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        background-color: #ccc;
        border: 2px solid #000;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .image-upload img:hover {
        transform: scale(1.05) rotate(2deg);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    }

    .upload-btn {
        padding: 10px 15px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .upload-btn:hover {
        background-color: #555;
        transform: scale(1.05);
    }

    .upload-btn:active {
        transform: scale(0.98);
    }

    .caixa-botao {
        position: relative;
        margin-top: 35vh;
        display: inline-block;
        text-align: center;
    }


    .imagem-personagem {
        position: absolute;
        bottom: 35%;
        left: 50%;
        transform: translateX(-50%);
    }

    .imagem-personagem img {
        width: 50vh;
        height: auto;
    }

    .finalizar-cadastro-botao {
        margin-top: 80px;
    }

    .part3rs {
        display: flex;
        width: 100%;
        flex-direction: column;
    }

    .finalizar-cadastro-botao {
        background-color: #009b5f;
        color: white;
        font-size: 18px;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Efeito ao passar o mouse */
    .finalizar-cadastro-botao:hover {
        background-color: #218838;
        /* Um verde mais escuro */
        transform: translateY(-5px);
        /* Eleva o botão levemente */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        /* Adiciona uma sombra mais pronunciada */
    }

    /* Efeito ao clicar */
    .finalizar-cadastro-botao:active {
        transform: translateY(-2px) scale(0.98);
        /* Leve redução de escala para dar a sensação de clique */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Sombra mais leve */
    }

    .card-container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #00a000;
        border-radius: 10px;
    }

    .form-section {
        flex: 1;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        /* Espaçamento entre os inputs */
    }

    .form-group {
        margin-bottom: 15px;
    }

    .input-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-container input {
        width: 100%;
        padding: 10px 40px 10px 10px;
        border: 2px solid #006400;
        border-radius: 5px;
        background-color: #008000;
        color: #ffffff;
        font-size: 16px;
    }

    .input-container .edit-icon {
        position: absolute;
        right: 10px;
        color: #000000;
        font-size: 18px;
        cursor: pointer;
    }

    .input-container input:focus {
        outline: none;
        border-color: #004d00;
    }

    .image-section {
        margin-left: 20px;
    }

    .upload-btn {
        background-color: #006400;
        color: #ffffff;
        border: none;
        padding: 10px;
        cursor: pointer;
    }

    .upload-btn:hover {
        background-color: #004d00;
    }

    .caixa-botao {
        margin-top: 20px;
        text-align: center;
    }

    .finalizar-cadastro-botao {
        background-color: #006400;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .finalizar-cadastro-botao:hover {
        background-color: #004d00;
    }




    .finalizar-cadastro-botao {
        background-color: #009b5f;
        color: white;
        font-size: 18px;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .imagem-personagem {
        position: absolute;
        bottom: 35%;
        left: 50%;
        transform: translateX(-50%);
    }

    .imagem-personagem img {
        width: 50vh;
        height: auto;
    }

    .finalizar-cadastro-botao {
        margin-top: 80px;
    }
    .caixa-botao {
            position: relative;
            margin-top: 35vh;
            display: inline-block;
            text-align: center;
        }

    .part3rs {
        display: flex;
        width: 100%;
        flex-direction: column;
    }


    .finalizar-cadastro-botao:hover {
        background-color: #009b5f;
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }

    .finalizar-cadastro-botao:active {
        transform: translateY(-2px) scale(0.98);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    @include('includes.menuVendedor')

    <div class="part3rs">
        <div class="card-container">
            <div class="form-section">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <div class="input-container">
                            <input type="text" id="nome" placeholder="João Pedro">
                            <i class="edit-icon">&#9998;</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <div class="input-container">
                            <input type="text" id="cep" value="123546">
                            <i class="edit-icon">&#9998;</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <div class="input-container">
                            <input type="password" id="senha" value="**********">
                            <i class="edit-icon">&#9998;</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <div class="input-container">
                            <input type="text" id="rua" value="Rua Brasil Nativo">
                            <i class="edit-icon">&#9998;</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <div class="input-container">
                            <input type="text" id="telefone" value="(11) *****-8048">
                            <i class="edit-icon">&#9998;</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cidade">Número da casa</label>
                        <div class="input-container">
                            <input type="text" id="cidade" value="123">
                            <i class="edit-icon">&#9998;</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-section">
                <div class="image-upload">
                    <img src="{{url('images/anexImg.png')}}" alt="Imagem do produto">
                </div>
                <button class="upload-btn">Anexar sua foto</button>
            </div>
        </div>

        <div class="caixa-botao">
            <div class="imagem-personagem">
                <img src="{{url('images/botaoCadPerfil.png')}}" alt="Personagem">
            </div>

            <button class="finalizar-cadastro-botao">Tudo pronto? Finalize a edição!</button>
        </div>
    </div>






</body>

</html>