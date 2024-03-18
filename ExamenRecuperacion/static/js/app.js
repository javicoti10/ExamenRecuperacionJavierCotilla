console.log("Iniciando...");

const enlace = document.querySelector("a#enlace_megamenu");
const megamenu = document.querySelector("nav.megamenu");
const enlace_menu_usuario = document.querySelectorAll("a.menu_usuario");
const loader = document.querySelector("#loader");
const totop = document.querySelector("#totop");
const inicioSesionDialog = document.getElementById('inicioSesionDialog');

const btnLoginMenu = document.querySelector("#login");
const btnLogoutMenu = document.querySelector("#logout");
const btnNuevaEntrada = document.querySelector("#nueva_entrada"); 

btnLoginMenu.addEventListener('click', () => {
    inicioSesionDialog.showModal();
});

const cancelarInicioSesionBtn = document.getElementById('cancelarInicioSesion');

cancelarInicioSesionBtn.addEventListener('click', () => {
    inicioSesionDialog.close();
});

const formInicioSesion = document.querySelector("#inicioSesionDialog form");
formInicioSesion.addEventListener('submit', (event) => {
    event.preventDefault();
    btnLoginMenu.classList.add('oculto');
    btnLogoutMenu.classList.remove('oculto');
    btnNuevaEntrada.classList.remove('oculto'); // Mostrar el enlace para añadir entrada
    inicioSesionDialog.close();
});

btnLogoutMenu.addEventListener('click', () => {
    btnLoginMenu.classList.remove('oculto');
    btnLogoutMenu.classList.add('oculto');
    btnNuevaEntrada.classList.add('oculto'); // Ocultar el enlace para añadir entrada
});

