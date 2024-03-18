<nav>
    <ul>
        <li><a href="#" id="enlace_megamenu"></a></li>
        <img src="https://www.cesurformacion.com/uploads/media/logo-small/09/19-cesur-fp.svg?v=6-0" alt="Logo Cesur">
    </ul>
    
    <ul>
        <li><a href="#" class="menu_usuario" id="inicio">Inicio</a></li> <!-- Cambiado el ID a "inicio" -->
        <li><a href="#" class="menu_usuario" id="blog">Blog</a></li> <!-- Cambiado el ID a "blog" -->
        <li><a href="#" class="menu_usuario" id="login">Login</a></li> <!-- Cambiado el ID a "login" -->
    </ul>                      
</nav>

<!-- Diálogo para inicio de sesión -->
<dialog id="inicioSesionDialog">
    <form method="dialog">
        <h1>Inicio de Sesión</h1>
        <label for="txtEmailInicio">Correo electrónico:</label>
        <input type="email" id="txtEmailInicio" name="emailInicio" placeholder="Introduce tu email" required><br><br>
        <label for="txtContraseñaInicio">Contraseña:</label>
        <input type="password" id="txtContraseñaInicio" name="passwordInicio" placeholder="Introduce tu contraseña" required><br><br>
        <button type="submit">Acceder</button>
        <button type="button" id="cancelarInicioSesion">Cancelar</button>
    </form>
</dialog>
<script src="static/js/app.js"></script>

