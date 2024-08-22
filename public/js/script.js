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





