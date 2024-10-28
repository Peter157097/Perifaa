<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="icon" href="{{ url('images/logo.png') }}" type="image/x-icon">
    <title>Perifa</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            background-color: #eee9e4;
        }

        header {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #eee9e4;
            padding: 0.5rem;
        }

        .header_direita {
            display: flex;
            align-items: center;
            max-width: 1200px;
            width: 100%;
            justify-content: space-between;
        }

        .header-logo {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .logo {
            max-width: 100%;
        }

        .ajuda {
            color: #fff;
            font-weight: 600;
            font-size: 20px;
            line-height: 10px;
        }

        .ajuda h5 {
            margin-top: -15px;
            line-height: 1;
            color: #5e3e24;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            gap: 20px; 
            padding: 40px;
        }
       
        .accordion-container {
            width: 400px; 
        }
        .content-container {
            flex: 1;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #eee9e4;
            
        }

        .custom-accordion .accordion-button {
            font-size: 18px; /* Reduz o tamanho da fonte */
            padding: 8px 15px; /* Reduz o padding interno */
            background-color: #eee9e4;
            color: #000;
            border: none;
            font-weight: 600;

        }
        .custom-accordion .accordion-button:hover {
           color: #5e3e24;
            
        }


        .custom-accordion .accordion-button:focus {
            box-shadow: none;
        }

        .custom-accordion .accordion-item {
            border: none;
            background-color: #eee9e4;
        }

        .custom-accordion .accordion-body {
            font-size: 16px; /* Reduz o tamanho do texto */
            padding: 5px 15px; /* Reduz o padding do conteúdo interno */
            color: #333;
            background-color: #eee9e4;
        }

        .custom-accordion .accordion-body a{
           text-decoration: none;
           color: #5e3e24;
          
        }
        .custom-accordion .accordion-body a:hover{
            color: #000;
            text-decoration:underline;
        }

        .custom-accordion .accordion-button::after {
            font-size: 12px; /* Reduz o ícone de seta */
        }

        .custom-accordion .accordion-header {
            margin-bottom: 5px; /* Ajusta o espaçamento entre os itens */
        }
        .ajuda a{
            text-decoration: none;
        }
/* Estilos responsivos */
@media (max-width: 768px) {
    main {
        flex-direction: column; /* Alinha em coluna para telas menores */
        gap: 10px;
    }

    .accordion-container,
    .content-container {
        width: 100%; /* Ambos ocupam toda a largura */
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .accordion-container {
        width: 250px; /* Reduz a largura do acordeão em telas médias */
    }
}

  
    </style>
</head>

<body>
<header>
    <div class="header_direita">
        <div class="ajuda">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ url('images/logo.png') }}" alt="Logo perifa">
            </a>
           <a href="{{ url('/centralAjuda') }}"><h5>Central de ajuda</h5></a> 
        </div>
    </div>
</header>

<main>
<div class="container">
    <div class="accordion-container">
        <div class="accordion custom-accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Compre com a Perifa
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body">
                        <a href="#" onclick="showContent('content1')">Novo na Perifa</a><br>
                        <a href="#" onclick="showContent('content2')">Finalização do Pedido</a><br>
                        <a href="#" onclick="showContent('content3')">Produtos na Perifa</a><br>
                        <a href="#" onclick="showContent('content4')">Interação com Usuários</a><br>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pagamentos
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                        <a href="#" onclick="showContent('content5')">Opções de Pagamento</a><br>
                        <a href="#" onclick="showContent('content6')">Segurança</a><br>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Devolução e Reembolso
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                        <a href="#" onclick="showContent('content7')">Dúvidas sobre Devolução</a><br>
                        <a href="#" onclick="showContent('content8')">Dúvidas sobre Reembolso</a>
                    </div>
                </div>
            </div>
              <!-- Quarto accordion-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Informações gerais
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                <div class="accordion-body">
                    <a href="#" onclick="showContent('content9')">Minha conta</a><br>
                    <a href="#" onclick="showContent('content10')">Políticas</a><br>
                    <a href="#" onclick="showContent('content11')">Orientações</a><br>
                    <a href="#" onclick="showContent('content12')">Comprando com segurança</a><br>
                </div>
            </div>
        </div>



        </div>
    </div>

<div class="content-container" id="content-container">
        <!-- Conteúdo dinâmico -->
        <div id="content1" style="display: none;">
            <h2>Bem-vindo à Perifa: Compras Acessíveis e Conscientes</h2>
            <p>A Perifa é uma inovadora plataforma de e-commerce que tem como missão facilitar o acesso à moda para pessoas de baixa renda, combinando a essência de bazares e brechós com a conveniência do ambiente digital. Aqui, você pode descobrir uma ampla seleção de roupas de segunda mão a preços acessíveis, permitindo que você encontre peças de qualidade sem comprometer seu orçamento.</p>

            <h2>O que você pode encontrar na Perifa:</h2>
<br>
            <ul>
                <li> <p>Roupas a Preços Baixos: Navegue por uma variedade de itens essenciais para o seu dia a dia, com ofertas incríveis de lojas e vendedores que valorizam o consumo consciente.</p></li>
                <li><p>Diversidade de Opções: Explore categorias que vão desde moda feminina e masculina até acessórios e calçados. Na Perifa, sempre há algo novo a ser descoberto!
                </p></li>
                <li><p>Acessibilidade e Inclusão: A Perifa se destaca por oferecer uma plataforma que realmente atende quem muitas vezes é deixado de lado pelas opções tradicionais, promovendo a inclusão e o acesso à moda.</p></li>
                <li><p>Experiência de Compra Segura: Ao fazer suas compras, você pode contar com um ambiente seguro, que inclui avaliações e resenhas de produtos, facilitando a escolha das melhores opções para você.</p></li>
                <li><p>Contribuição para o Consumo Consciente: Ao adquirir roupas de segunda mão, você não apenas economiza, mas também ajuda a promover um modelo de consumo mais sustentável.</p></li>
            </ul>
        </div>
        <div id="content2" style="display: none;">
            <h2>Finalização do pedido</h2>

            <ul>
                <li><p>Adicione os Itens ao Carrinho: Navegue pelas nossas categorias e adicione as roupas que você deseja ao seu carrinho de compras.</p></li>
                <li><p>Verifique Seu Carrinho: Antes de prosseguir, acesse seu carrinho para revisar os itens selecionados. Você pode editar as quantidades ou remover itens que não deseja.</p></li>
                <li><p>Escolha o Método de Pagamento: Na página de checkout, você terá a opção de escolher entre diversos métodos de pagamento seguros. A Perifa aceita cartões de crédito, débito, e outras formas de pagamento.</p></li>
                <li><p>Preencha Seus Dados de Entrega: Certifique-se de fornecer um endereço de entrega correto para garantir que sua compra chegue até você sem problemas.</p></li>
                <li><p>Revise o Pedido: Antes de confirmar, revise todos os detalhes do seu pedido, incluindo os itens, valores e informações de entrega.</p></li>
                <li><p>Confirme e Finalize: Após verificar que todas as informações estão corretas, clique em "Finalizar Pedido". Você receberá uma confirmação por e-mail assim que seu pedido for processado.</p></li>
                <li><p>Acompanhe Seu Pedido: Após a finalização, você pode acompanhar o status do seu pedido na sua conta. Fique atento ao e-mail de confirmação que contém detalhes sobre o rastreamento.</p></li>
            </ul>
        </div>
        <div id="content3" style="display: none;">
            <h2>Produtos na Perifa</h2>
            <p>
            Na Perifa, você encontrará uma ampla seleção de roupas de segunda mão, cuidadosamente selecionadas para atender às suas necessidades e preferências. Nossa plataforma foi criada com o objetivo de promover o consumo consciente e a acessibilidade, oferecendo uma experiência de compra única e vantajosa. Confira abaixo tudo o que você precisa saber sobre os produtos disponíveis:
            </p>
            <ul>
                <li><p>Variedade de Opções: A Perifa apresenta uma diversidade de estilos e marcas, desde roupas casuais até peças mais formais. Nossos vendedores são cuidadosamente selecionados para garantir que você tenha acesso a produtos de qualidade a preços acessíveis.</p></li>
                <li><p>Produtos Sustentáveis: Ao optar por comprar roupas de segunda mão, você contribui para a sustentabilidade e reduz o desperdício. A Perifa incentiva práticas de consumo responsável, ajudando a prolongar a vida útil das peças.</p></li>
                <li><p>Qualidade Garantida: Todos os produtos disponíveis na Perifa passam por uma rigorosa avaliação de qualidade. Nossos vendedores são incentivados a fornecer descrições precisas e fotos reais para que você tenha uma ideia clara do que está comprando.</p></li>
                <li><p>Facilidade na Navegação: Nossa plataforma é intuitiva e fácil de usar, permitindo que você filtre os produtos por categoria, tamanho, marca e preço. Isso facilita a busca pelo item perfeito para você.</p></li>
                <li><p>Apoio ao Vendedor Local: Ao comprar na Perifa, você apoia pequenos vendedores e lojas locais, contribuindo para a economia da comunidade e promovendo a inclusão.</p></li>
               
            </ul>
        </div>
        <div id="content4" style="display: none;">
            <h2>Interação com Usuários</h2>
            <p>A Perifa valoriza a interação entre usuários, promovendo uma comunidade unida e engajada. Entendemos que a comunicação e o compartilhamento de experiências são fundamentais para melhorar a experiência de compra e venda. Aqui estão algumas maneiras de interagir com outros usuários na plataforma:</p>

            <ul>
                <li><p>Avaliações de Produtos: Após realizar uma compra, incentive-se a deixar uma avaliação para o vendedor. Suas opiniões ajudam outros usuários a fazerem escolhas informadas e garantem que os vendedores saibam como estão se saindo.</p></li>
                <li><p>Comentários e Perguntas: Você pode fazer perguntas diretamente nos anúncios dos produtos. Se tiver dúvidas sobre o tamanho, condição ou qualquer outra característica de uma peça, não hesite em entrar em contato com o vendedor. Uma boa comunicação pode fazer toda a diferença na sua experiência de compra.</p></li>
                <li><p>Feedback Construtivo: A interação não se limita a avaliações. Se você tiver sugestões ou feedback sobre como melhorar a plataforma ou a experiência de compra, sinta-se à vontade para compartilhá-las. Estamos sempre em busca de maneiras de aprimorar nossos serviços.</p></li>
                <li><p>Suporte ao Cliente: Se você tiver alguma dúvida ou problema, nossa equipe de suporte está sempre à disposição para ajudar. Você pode entrar em contato conosco através do nosso canal de suporte e receber assistência rapidamente.</p></li>
                
            </ul>
        </div>
        <div id="content5" style="display: none;">
            <h2>Opções de Pagamento</h2>
            <p>Na Perifa, oferecemos uma variedade de opções de pagamento para garantir que sua experiência de compra seja fácil, segura e conveniente. Abaixo estão as opções disponíveis, permitindo que você escolha a que melhor se adapta às suas necessidades:</p>

            <ul>
                <li><p>Cartão de Crédito: Aceitamos todos os principais cartões de crédito. Você pode parcelar suas compras em até 12 vezes, tornando mais fácil gerenciar seu orçamento. Apenas insira os dados do seu cartão durante o checkout e siga as instruções para concluir a transação.</p></li>
                <li><p>Cartão de Débito: Se preferir não utilizar crédito, você pode optar pelo pagamento com cartão de débito. A transação será feita diretamente da sua conta bancária, oferecendo um controle financeiro mais rígido.</p></li>
                <li><p>Pix: O Pix é uma das opções de pagamento mais rápidas e práticas disponíveis. Com ele, você pode realizar pagamentos instantâneos utilizando apenas o seu smartphone. Durante o checkout, você receberá um código QR ou uma chave Pix para facilitar a transação. Assim que o pagamento for confirmado, o seu pedido será processado imediatamente.</p></li>
                <li><p>Pagamentos por Aplicativos: Aceitamos várias opções de pagamentos digitais, como PicPay e Mercado Pago. Essa forma de pagamento permite que você finalize suas compras rapidamente utilizando apenas o seu smartphone.</p></li>
               
            </ul>
        </div>
        <div id="content6" style="display: none;">
            <h2>Segurança</h2>
            <ul>
                <li><p>Pagamentos Seguros: Aceitamos apenas métodos de pagamento seguros e confiáveis. Nossas plataformas de pagamento seguem as melhores práticas da indústria para garantir que suas transações sejam processadas de maneira segura.</p></li>
                <li><p>Suporte e Atendimento: Se você suspeitar de qualquer atividade suspeita ou tiver dúvidas sobre a segurança da sua conta, nossa equipe de suporte está pronta para ajudar. Você pode entrar em contato com nosso atendimento ao cliente, que estará disponível para esclarecer suas dúvidas e resolver qualquer problema.</p></li>
                <li><p>Direitos do Usuário: Como usuário, você tem direitos sobre suas informações pessoais. Na Perifa, garantimos que você possa acessar, corrigir ou excluir seus dados a qualquer momento, conforme as diretrizes de proteção de dados.</p></li>
            </ul>
        </div>
        <div id="content7" style="display: none;">
            <h2>Informações de devolução</h2>
            <ul>
                <li><p>Período de Devolução: Você tem um prazo de até 7 dias corridos após o recebimento do seu produto para solicitar a devolução. Esse tempo é suficiente para que você avalie se o item atende às suas expectativas.</p></li>
            </ul>
        </div>
        <div id="content8" style="display: none;">
            <h2>Como funciona o reembolso?</h2>
            <ul>
                <li><p>Solicitação: Entre em contato com nosso suporte ao cliente para informar sobre a devolução e fornecer os detalhes do pedido.</p></li>
                <li><p>Envio: Envie a peça de volta para o endereço fornecido por nossa equipe.</p></li>
                <li><p>Reembolso: Após a confirmação do recebimento e inspeção da peça, processaremos seu reembolso em até 5 dias úteis. O valor será creditado na forma de pagamento utilizada na compra.</p></li>
            </ul>
            <h2>Trocas</h2>
            <p>Caso você deseje trocar a peça, é importante notar que, como um brechó online, a disponibilidade de peças pode variar. Se o vendedor não tiver uma nova peça para troca, você pode optar por solicitar um reembolso completo ou crédito na plataforma para usar em futuras compras. </p>
           <p>Estamos aqui para assegurar que você tenha uma experiência positiva ao comprar em nosso brechó online, e nossa equipe está à disposição para resolver quaisquer dúvidas ou preocupações sobre nosso processo de devolução e reembolso.</p> 

           
        </div>
        <div id="content9" style="display: none;">
            <h2>Minha conta</h2>
            <p>A seção "Minha Conta" foi projetada para proporcionar uma experiência personalizada e segura ao usuário. Aqui, você pode gerenciar todas as informações relacionadas à sua conta de maneira fácil e prática.</p>
            <ul>
                <li><p>Atualizar Informações Pessoais:
                    Mantenha seus dados atualizados, como nome, endereço e informações de contato. Isso garante que você receba suas compras e comunicações corretamente.</p></li>
                <li><p>Gerenciar Senha:
                Altere sua senha a qualquer momento para garantir a segurança da sua conta. Se você esquecer sua senha, nossa plataforma oferece um processo fácil de recuperação.</p></li>
                <li><p>Visualizar Histórico de Compras:
                Consulte todas as suas compras anteriores em um só lugar. Isso facilita o acompanhamento de pedidos e devoluções.</p></li>
               
                
            </ul>
        </div>
        <div id="content10" style="display: none;">
            <h2>Políticas</h2>
            <p>Na nossa plataforma de brechó online, temos um compromisso com a transparência e a segurança dos nossos usuários. As nossas políticas são elaboradas para garantir uma experiência de compra justa, segura e satisfatória. Aqui estão os principais pontos das nossas políticas:</p>
            <ul>
                <h3>Política de Privacidade</h3>
                <li><p>Coleta de Dados: Coletamos informações pessoais necessárias para processar suas compras e melhorar a experiência do usuário. Isso inclui dados como nome, endereço, e-mail e informações de pagamento.</p></li>
                <li><p>Uso de Dados: Utilizamos suas informações para personalizar sua experiência, enviar atualizações sobre pedidos e ofertas, e melhorar nossos serviços.</p></li>
                <li><p>Proteção de Dados: Implementamos medidas de segurança rigorosas para proteger suas informações contra acesso não autorizado.</p></li>
            </ul>
            <ul>
                <h3>Política de Segurança</h3>
                <li><p>Transações Seguras: Utilizamos tecnologia de criptografia para garantir que suas informações de pagamento sejam processadas com segurança.</p></li>
                <li><p>Prevenção de Fraudes: Monitoramos constantemente atividades suspeitas e adotamos medidas para prevenir fraudes.</p></li>
            </ul>
            <ul>
                <h3>Política de Conteúdo</h3>
                <li><p>Responsabilidade pelo Conteúdo: Os vendedores são responsáveis pelo conteúdo que publicam. Nós não nos responsabilizamos por qualquer inverdade ou violação de direitos autorais.</p></li>
                <li><p>Direitos de Imagem: Ao publicar produtos, os vendedores garantem que possuem os direitos necessários sobre as imagens e descrições utilizadas.</p></li>
            </ul>
            <ul>
                <h3>Alterações nas Políticas</h3>
                <li><p>Atualizações: Reservamo-nos o direito de atualizar nossas políticas conforme necessário. Notificaremos os usuários sobre quaisquer mudanças significativas.</p></li>
            </ul>
           

        </div>
        <div id="content11" style="display: none;"> 
            <h2>Orientações</h2>
            <ul>
                <li><p>Navegação: Explore nossas categorias para encontrar facilmente o que procura. Utilize os filtros de pesquisa para refinar os resultados e localizar peças específicas que atendam ao seu estilo e necessidades.</p></li>
                <li><p>Descrição dos Produtos: Leia atentamente as descrições e observe as fotos dos produtos. Nossos vendedores se esforçam para fornecer informações detalhadas sobre cada item, incluindo tamanho, estado e qualquer característica especial.</p></li>
                <li><p>Métodos de Pagamento: Aceitamos várias formas de pagamento, incluindo cartões de crédito, débito e Pix. Escolha o método que for mais conveniente para você durante o checkout.</p></li>
                <li><p>Acompanhamento do Pedido: Após a compra, você receberá um e-mail de confirmação com informações sobre o status do seu pedido. Utilize o link de rastreamento para acompanhar a entrega.</p></li>
                <li><p>Dúvidas e Suporte: Se você tiver qualquer dúvida sobre um produto ou o processo de compra, não hesite em entrar em contato com nosso atendimento ao cliente. Estamos aqui para ajudar!

</p></li>
            </ul>
        </div>
        <div id="content12" style="display: none;">
            <h2>Comprando com segurança</h2>
            <p>o nosso brechó online, a segurança das suas compras é nossa prioridade. Aqui estão algumas práticas e orientações para garantir que você tenha uma experiência de compra segura e tranquila:
            </p>
            <ul>
                <li><p>Pagamentos Seguros: Utilizamos plataformas de pagamento confiáveis e seguras para proteger suas informações financeiras. Aceitamos métodos de pagamento populares, como cartões de crédito, débito e Pix, todos com criptografia para garantir a segurança dos seus dados.</p></li>
                <li><p>Garantia de Compra: Todas as transações realizadas em nossa plataforma estão cobertas por nossa política de garantia. Caso o produto não chegue ou não esteja conforme descrito, oferecemos soluções, como reembolso ou troca, para proteger seus direitos como consumidor.</p></li>
                <li><p>Privacidade dos Dados: Valorizamos sua privacidade e não compartilhamos suas informações pessoais com terceiros. Todas as suas informações são mantidas em segurança e utilizadas apenas para fins de processamento de pedidos.</p></li>
                <li><p>Comunicação Clara: Se você tiver dúvidas sobre o produto, vendedor ou qualquer aspecto da compra, nossa equipe de atendimento ao cliente está disponível para ajudar. Entre em contato conosco através de nossos canais de suporte e receba respostas rápidas e precisas.</p></li>

            </ul>
            
        </div>
        
        <div id="default-content"> <h2>Bem-vindo à Perifa: Compras Acessíveis e Conscientes</h2>
            <p>A Perifa é uma inovadora plataforma de e-commerce que tem como missão facilitar o acesso à moda para pessoas de baixa renda, combinando a essência de bazares e brechós com a conveniência do ambiente digital. Aqui, você pode descobrir uma ampla seleção de roupas de segunda mão a preços acessíveis, permitindo que você encontre peças de qualidade sem comprometer seu orçamento.</p>

            <h2>O que você pode encontrar na Perifa:</h2>
<br>
            <ul>
                <li> <p>Roupas a Preços Baixos: Navegue por uma variedade de itens essenciais para o seu dia a dia, com ofertas incríveis de lojas e vendedores que valorizam o consumo consciente.</p></li>
                <li><p>Diversidade de Opções: Explore categorias que vão desde moda feminina e masculina até acessórios e calçados. Na Perifa, sempre há algo novo a ser descoberto!
                </p></li>
                <li><p>Acessibilidade e Inclusão: A Perifa se destaca por oferecer uma plataforma que realmente atende quem muitas vezes é deixado de lado pelas opções tradicionais, promovendo a inclusão e o acesso à moda.</p></li>
                <li><p>Experiência de Compra Segura: Ao fazer suas compras, você pode contar com um ambiente seguro, que inclui avaliações e resenhas de produtos, facilitando a escolha das melhores opções para você.</p></li>
                <li><p>Contribuição para o Consumo Consciente: Ao adquirir roupas de segunda mão, você não apenas economiza, mas também ajuda a promover um modelo de consumo mais sustentável.</p></li>
            </ul></div>
        

    </div>
</div>

</main>

<script>
    function showContent(contentId) {
        // Ocultar todos os conteúdos
        const contents = document.querySelectorAll('.content-container > div');
        contents.forEach(content => content.style.display = 'none');
        
        // Mostrar o conteúdo selecionado
        document.getElementById(contentId).style.display = 'block';
    }
    //accordion da outra pag
    document.addEventListener("DOMContentLoaded", function() {
        let categoria = @json($categoria);
        if (categoria) {
            switch (categoria) {
                case 'Pagamentos':
                    document.getElementById('collapseTwo').classList.add('show');
                    break;
                case 'Reembolso':
                    document.getElementById('collapseThree').classList.add('show');
                    break;
                case 'Envios':
                    document.getElementById('collapseOne').classList.add('show');
                    break;
                case 'Informações':
                    document.getElementById('collapseFour').classList.add('show');
                    break;
            }
        }
    });
    
</script>

<script src="{{ url('js/script.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
