@include('includes.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .contact-form-wrapper {
        background-color: white;
        padding: 30px;
        /* Aumentando o padding interno */
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 45%;
        /* Aumentando a largura do card */
        position: relative;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        /* Aumentando o espaçamento entre os elementos */
    }

    label {
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
        align-self: flex-start;
        /* Alinhando os rótulos à esquerda */
    }

    .contact-input {
        padding: 10px;
        border: 1px solid #d3cdc5;
        border-radius: 5px;
        background-color: #d3cdc5;
        /* Cor de fundo cinza claro */
        font-size: 14px;
        width: 100%;
        /* Agora os inputs ocupam 100% da largura do card */
    }

    .contact-input-row {
        display: flex;

        gap: 30px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        width: calc(50% - 10px);
        /* Ajuste para garantir espaçamento */
    }

    textarea {
        resize: none;
        height: 150px;
        /* Aumentando a altura da área de texto */
        width: 100%;
        /* Agora o textarea ocupa 100% da largura */
    }

    .contact-submit-btn {
        background-color: #5c3b21;
        /* Botão marrom */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
        position: absolute;
        bottom: -20px;
        /* Para deixar o botão saindo do card */
        left: 20px;
        /* Posicionando o botão mais à esquerda */
    }

    .contact-submit-btn:hover {
        background-color: #4a3019;
    }

    .contact-header h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .contact-header h2 {
        font-size: 24px;
        font-weight: normal;
        margin-bottom: 15px;
    }

    .contact-header p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .contact-info {
        display: flex;
        justify-content: center;
        gap: 50px;
        /* Espaçamento entre os itens */
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 10px;
        /* Espaçamento entre ícone e texto */
        text-align: left;
        /* Alinhando o texto à esquerda */
    }

    .info-item i {
        font-size: 24px;
        /* Tamanho do ícone */
        color: #5c3b21;
        /* Cor do ícone */
    }

    .info-item span {
        font-weight: bold;
        display: block;
    }

    .info-item p {
        margin: 0;
    }

    .tudoContato {
        display: flex;
        flex-direction: row;
        margin: 80px;
        justify-content: center;
        gap: 50px;
    }

    .p2Contato {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Estilos globais para suavizar todas as animações */
    * {
        transition: all 0.3s ease-in-out;
    }

    /* Adicionando uma animação de "fade-in" ao carregar o formulário */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .contact-form-wrapper {
        animation: fadeIn 1s ease-out;
    }

    /* Animação de hover nos inputs para melhorar a experiência do usuário */
    .contact-input {
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .contact-input:hover,
    .contact-input:focus {
        background-color: #e0d8d0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Animação no botão de envio ao passar o mouse */
    .contact-submit-btn {
        transition: background-color 0.4s, transform 0.2s;
    }

    .contact-submit-btn:hover {
        background-color: #4a3019;
        transform: translateY(-3px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    /* Ícones flutuantes ao passar o mouse */
    .info-item i {
        transition: transform 0.3s;
    }

    .info-item:hover i {
        transform: scale(1.2);
    }

    /* Animação dos blocos de contato ao carregar a página */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .p2Contato {
        animation: slideIn 1.5s ease-out;
    }

    /* Animação dos itens de informação ao passar o mouse */
    .info-item {
        transition: transform 0.3s;
    }

    .info-item:hover {
        transform: scale(1.05);
    }
</style>

<!--Começo do body-->

<body>
    @include('includes.header')

    @include('includes.nav')

    <form action="{{ route('enviar.contato') }}" method="POST" class="contact-form-wrapper">
    @csrf
    <div class="contact-form">
        <input type="text" name="nome" id="nome "placeholder="Seu nome aqui" class="contact-input" required>

        <div class="contact-input-row">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="contact-input half-width" required>
            </div>
            <div class="input-group">
                <label for="phone">Número de telefone</label>
                <input type="tel" name="phone" id="phone" class="contact-input half-width" required>
            </div>
        </div>

        <div class="input-row">
            <label for="message">Mensagem</label>
            <textarea name="message" id="message'" class="contact-input" required></textarea>
        </div>
    </div>
    <button type="submit" class="contact-submit-btn">Enviar</button>
</form>


        <div class="p2Contato">
            <div class="contact-header">
                <h1>Entre em contato conosco</h1>
                <p>Precisa de Ajuda? Estamos Aqui para Você!</p>
            </div>
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <span>Telefone</span>
                        <p>+55 1198236-9339</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <span>Email</span>
                        <p>perifaa@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')
</body>

<!--Fim do body-->

</html>