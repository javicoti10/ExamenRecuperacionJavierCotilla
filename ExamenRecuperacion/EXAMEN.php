<?php require_once("data.php"); ?>
<?php require("views/header.php"); ?>

<main>
    <section id="hero">
        <div>
            <h1>Blog de Cesur</h1>
            <p>Conoce toda la actividad en nuestros centros</p>
            <a href="#" id="btnInicioSesionMenu" class="hide_desktop show_mobile">Iniciar Sesión</a>

        </div>
    </section>

    <?php require("views/gallery.php"); ?>

</main>

<?php require("views/footer.php"); ?>

<dialog id="inicioSesionDialog">
    <form method="dialog">
        <h1>Iniciar Sesión</h1>
        <label for="txtEmailInicio">Correo electrónico:</label>
        <input type="email" id="txtEmailInicio" name="emailInicio" placeholder="Introduce tu email" required><br><br>
        <label for="txtContraseñaInicio">Contraseña:</label>
        <input type="password" id="txtContraseñaInicio" name="passwordInicio" placeholder="Introduce tu contraseña" required><br><br>
        <button type="submit">Iniciar Sesión</button>
        <button type="button" id="cancelarInicioSesion">Cancelar</button>
    </form>
</dialog>

<dialog id="añadirEntradaDialog">
    <form method="dialog" id="formAñadirEntrada">
        <h1>Añadir nueva entrada de blog</h1>
        <div>
            <label for="txtTitulo">Título:</label>
            <input type="text" id="txtTitulo" name="titulo" placeholder="Introduce el título" required><br><br>
        </div>
        <div>
            <label for="txtContenido">Contenido:</label><br>
            <textarea id="txtContenido" name="contenido" placeholder="Escribe el contenido" required></textarea><br><br>
        </div>
        <button type="submit">Añadir Entrada</button>
        <button type="button" id="cancelarAñadirEntrada">Cancelar</button>
    </form>
</dialog>

<script src="static/js/app.js"></script>



