
<style>
    :root {
        --primary-color: #1e478a;
        --text-light: #64748b;
        --light-gray: #f8fafc;
        --white: #ffffff;
        --shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        --rounded-sm: 8px;
        --transition: all 0.2s ease;
    }

    /* Navbar Desktop */
    .navbar-desktop {
        background-color: var(--white);
        box-shadow: var(--shadow);
        padding: 0.75rem 2rem;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .navbar-desktop-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .logo {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary-color);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .logo i {
        font-size: 1.5rem;
    }

    .nav-links {
        display: flex;
        gap: 1.25rem;
    }

    .nav-links a {
        text-decoration: none;
        color: var(--text-light);
        font-weight: 500;
        font-size: 0.9rem;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 0;
        position: relative;
    }

    .nav-links a:hover {
        color: var(--primary-color);
    }

    .nav-links a.active {
        color: var(--primary-color);
        font-weight: 600;
    }

    .nav-links a.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: var(--primary-color);
        border-radius: 3px;
    }

    /* Navbar Mobile */
    .navbar-mobile {
        display: none;
        justify-content: space-around;
        align-items: center;
        background-color: var(--white);
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 0.5rem 0;
        z-index: 100;
    }

    .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: var(--dark-gray);
        font-size: 0.7rem;
        transition: var(--transition);
        padding: 0.4rem;
        border-radius: var(--rounded-sm);
    }

    .nav-item i {
        font-size: 1.1rem;
        margin-bottom: 0.2rem;
    }

    .nav-item.active {
        color: var(--primary-color);
        background-color: var(--light-gray);
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .navbar-desktop {
            display: none;
        }
        
        .navbar-mobile {
            display: flex;
        }
    }

    @media (min-width: 769px) {
        .navbar-mobile {
            display: none;
        }
        
        .navbar-desktop {
            display: block;
        }
    }

            /* Navbar para las opciones requeridas */
        .navbar-options {
            background-color: var(--primary-color);
            color: white;
            padding: 0.8rem 2rem;
            box-shadow: var(--shadow);
        }

        .navbar-options-container {
            display: flex;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .options-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .options-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: var(--rounded-sm);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .options-links a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
</style>

<!-- Navbar Desktop -->
<nav class="navbar-desktop">  <!-- Corregido: era navbar-mobile -->
    <div class="navbar-desktop-container">
        <div class="logo">
            <i class="fas fa-home"></i>
            <span>Nelva Bienes Raíces</span>
        </div>
        <div class="nav-links">
            <a href="Inicio"><i class="fas fa-home"></i> Inicio</a>
            <a href="apartados" class="active"><i class="fas fa-calendar-check"></i> Apartados</a>
            <a href="ventas"><i class="fas fa-history"></i> Ventas</a>
            <a href="perfil"><i class="fas fa-user"></i> Perfil</a>
            <a href="#" id="logout-btn-desktop"><i class="fas fa-sign-out-alt"></i> Salir</a>
        </div>
    </div>
</nav>

    <!-- Navbar Mobile -->
    <nav class="navbar-mobile">
        <a href="inicio" class="nav-item">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
        <a href="apartados" class="nav-item active">
            <i class="fas fa-calendar-check"></i>
            <span>Apartados</span>
        </a>
        <a href="ventas" class="nav-item">
            <i class="fas fa-history"></i>
            <span>Ventas</span>
        </a>
        <a href="perfil" class="nav-item">
            <i class="fas fa-user"></i>
            <span>Perfil</span>
        </a>
        <a href="#" class="nav-item" id="logout-btn-mobile">
            <i class="fas fa-sign-out-alt"></i>
            <span>Salir</span>
        </a>
    </nav>

        <!-- Navbar con opciones requeridas -->
    <nav class="navbar-options">
        <div class="navbar-options-container">
            <ul class="options-links">
                <li><a href="#"><i class="fas fa-users"></i> Asesores</a></li>
                <li><a href="#"><i class="fas fa-file-contract"></i> Solicitud de Apartado</a></li>
                <li><a href="#"><i class="fas fa-handshake"></i> Solicitud de Ventas</a></li>
            </ul>
        </div>
    </nav>
    