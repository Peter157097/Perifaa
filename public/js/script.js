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
});


let botaoMenu = document.getElementById('botao-menu')
let menu = document.getElementById('menu-mobile')

botaoMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

const abrirBotaos = document.querySelectorAll('.abrir-modal');
const fecharBotaos = document.querySelectorAll('.fechar-modal');
const modais = document.querySelectorAll('dialog');
const body = document.body;


abrirBotaos.forEach(button =>{
    button.addEventListener('click', () =>{
        const modalId = button.getAttribute('data-modal');
        const modal = document.getElementById(modalId);

        modais.forEach(m => m.close());
        modal.showModal();
        body.classList.add('no-scroll'); //  classe no-scroll
    });
})

fecharBotaos.forEach(button =>{
    button.addEventListener('click', () =>{
        const modalId = button.getAttribute('data-modal');
        const modal = document.getElementById(modalId);

       modal.close();

       const anyModalOpen = Array.from(modais).some(m => m.open);
        if (!anyModalOpen) {
            body.classList.remove('no-scroll'); // Remove a classe no-scroll se nenhum modal estiver aberto
        }
    });
});

const haveAccountLink = document.getElementById('have-account');
haveAccountLink.addEventListener('click', () => {
    modais.forEach(m => m.close());

    // modal de login
    const loginModal = document.getElementById('modal-1');
    loginModal.showModal();

    body.classList.add('no-scroll'); // Adiciona a classe no-scroll
});

const venderNaPerifa = document.getElementById('perifa-vender');
venderNaPerifa.addEventListener('click', () => {
    modais.forEach(m => m.close());
    const cadastroVendedor = document.getElementById('modal-3');
    cadastroVendedor.showModal();
    
    

    body.classList.add('no-scroll');
});

