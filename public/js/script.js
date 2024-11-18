document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todos os itens de menu que possuem o dropdown
    const dropHoverItems = document.querySelectorAll('.drop-hover');

    // Adiciona um event listener de clique a cada item de menu
    dropHoverItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault(); // Previne o comportamento padrão do link
            
            const dropdown = this.querySelector('.drop');

            // Alterna a visibilidade do dropdown
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            } else {
                // Fecha outros dropdowns
                dropHoverItems.forEach(otherItem => {
                    const otherDropdown = otherItem.querySelector('.drop');
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('show');
                    }
                });
                // Exibe o dropdown do item clicado
                dropdown.classList.add('show');
            }
        });
    });

    // Fecha dropdowns ao clicar fora do menu
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-mobile')) {
            dropHoverItems.forEach(item => {
                const dropdown = item.querySelector('.drop');
                dropdown.classList.remove('show');
            });
        }
    });

    // Menu Mobile
    let botaoMenu = document.getElementById('botao-menu');
    let menu = document.getElementById('menu-mobile');

    botaoMenu.addEventListener('click', () => {
        menu.classList.add('abrir-menu');
    });

    menu.addEventListener('click', () => {
        menu.classList.remove('abrir-menu');
    });

    // Modais
    const abrirBotaos = document.querySelectorAll('.abrir-modal');
    const fecharBotaos = document.querySelectorAll('.fechar-modal');
    const modais = document.querySelectorAll('dialog');
    const body = document.body;

    abrirBotaos.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal');
            const modal = document.getElementById(modalId);

            // Fecha todos os modais antes de abrir o novo
            modais.forEach(m => m.close());
            modal.showModal();
            body.classList.add('no-scroll'); // Evitar scroll
        });
    });

    fecharBotaos.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal');
            const modal = document.getElementById(modalId);

            modal.close();

            const anyModalOpen = Array.from(modais).some(m => m.open);
            if (!anyModalOpen) {
                body.classList.remove('no-scroll'); // Remove no-scroll se nenhum modal estiver aberto
            }
        });
    });

    // Abrindo Modal 5 ao clicar no botão do Modal 4
    const abrirModal5Button = document.querySelector('.abrir-modal-5');
    if (abrirModal5Button) {
        abrirModal5Button.addEventListener('click', () => {
            const modal4 = document.getElementById('modal-4');
            modal4.close();

            const modal5 = document.getElementById('modal-5');
            modal5.showModal();
            body.classList.add('no-scroll'); // Evitar scroll
        });
    }

    // Abrindo Modal 6 ao clicar no botão do Modal 5
    const abrirModal6Button = document.querySelector('.abrir-modal-6');
    if (abrirModal6Button) {
        abrirModal6Button.addEventListener('click', () => {
            const modal5 = document.getElementById('modal-5');
            modal5.close();

            const modal6 = document.getElementById('modal-6');
            modal6.showModal();
            body.classList.add('no-scroll'); // Evitar scroll
        });
    }
});

