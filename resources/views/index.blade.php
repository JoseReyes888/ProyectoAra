<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <!-- Logo de la empresa -->
            <div class="logo-container">
                <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/cropped-MARCA_OFICIAL-1_Mesa-de-trabajo-1-1-1.png" alt="Logo Empresa" class="company-logo">
            </div>
            
            <h2 class="login-title">Inicia Sesión</h2>
            <p class="login-subtitle">Sistema Gestor de Terrenos</p>
            
            <form id="loginForm" class="login-form">
                <div class="input-group">
                    <label for="username">Usuario</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Nombre de usuario">
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <div class="input-with-icon">
                        <input type="password" id="password" name="password" placeholder="Contraseña">
                        <i class="fas fa-eye toggle-password" onclick="togglePasswordVisibility()"></i>
                    </div>
                </div>
                
                <div class="options-row">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Recordar credenciales</label>
                    </div>
                    <a href="#" class="forgot-password">Recuperar acceso</a>
                </div>
                
                <button type="submit" class="login-button">Ingresar</button>
            </form>
        </div>
    </div>

    <script>

        function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle-password');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const remember = document.getElementById('remember').checked;
    
    // Aquí iría la lógica de autenticación
    console.log('Intento de login:', { username, password, remember });
    window.location.href = 'inicio.html'; // Redirigir a la página de inicio
    // Simulación de login exitoso
    // alert('Acceso concedido. Redirigiendo...');
    // window.location.href = 'dashboard.html';
});

    </script>
</body>
</html>