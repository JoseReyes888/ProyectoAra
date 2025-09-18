<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionamientos | Inmobiliaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar Desktop -->
    <nav class="navbar-desktop">
        <div class="navbar-desktop-container">
            <div class="logo">
                <i class="fas fa-home"></i>
                <span>Nelva Bienes Raíces</span>
            </div>
            <div class="nav-links">
                <a href="Inicio"><i class="fas fa-home"></i> Inicio</a>
                <a href="apartados"  class="active"><i class="fas fa-calendar-check"></i> Apartados</a>
                <a href="ventas"><i class="fas fa-history"></i> Ventas</a>
                <a href="perfil"><i class="fas fa-user"></i> Perfil</a>
                <a href="#" id="logout-btn-desktop"><i class="fas fa-sign-out-alt"></i> Salir</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container"> 
        <h1 class="page-title">
            <i class="fas fa-map-marked-alt"></i>
            <span>Bienvenido de nuevo</span>
        </h1>

        <!-- Stats Overview -->
        <div class="stats-container">
            <div class="stat-card total">
                <h3 class="stat-card-title">
                    <i class="fas fa-city"></i>
                    <span>Total Fraccionamientos</span>
                </h3>
                <p class="stat-card-value">12</p>
                <p class="stat-card-description">Activos</p>
                <div class="progress-container">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
            </div>
            <div class="stat-card available">
                <h3 class="stat-card-title">
                    <i class="fas fa-check-double"></i>
                    
                    <span>Lotes Vendidos</span>
                </h3>
                <p class="stat-card-value">245</p>
                <p class="stat-card-description">Finalizados</p>
                <div class="progress-container">
                    <div class="progress-bar progress-available" style="width: 38%"></div>
                </div>
            </div>
            <div class="stat-card reserved">
                <h3 class="stat-card-title">
                    <i class="fas fa-clock"></i>
                    <span>Lotes Apartados</span>
                </h3>
                <p class="stat-card-value">78</p>
                <p class="stat-card-description">En proceso</p>
                <div class="progress-container">
                    <div class="progress-bar progress-reserved" style="width: 12%"></div>
                </div>
            </div>
            <div class="stat-card sold">
                <h3 class="stat-card-title">
                    <i class="fas fa-check-circle"></i>
                    <span>Lotes disponibles</span>
                </h3>
                <p class="stat-card-value">312</p>
                <p class="stat-card-description">para venta</p>
                <div class="progress-container">
                    <div class="progress-bar progress-sold" style="width: 50%"></div>
                </div>
            </div>
        </div>

        <!-- Fraccionamientos List -->
        <h2 class="section-title">
            <i class="fas fa-list-ul"></i>
            <span>Lista de Fraccionamientos</span>
        </h2>
        
        <div class="fraccionamientos-list">
            

            <!-- Fraccionamiento 2 -->
            <div class="fraccionamiento-card">
                <div class="fraccionamiento-image-container">
                    <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/OCEANICA-BLANCO.png" alt="Villas del Mar" class="fraccionamiento-image">
                </div>
                <div class="fraccionamiento-content">
                    <div class="fraccionamiento-header"> 
                    
                        <div class="fraccionamiento-info">
                            <h3 class="fraccionamiento-name">OCEÁNICA</h3>
                            <p class="fraccionamiento-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>PLAYA GUAPINOLE, STA. MARÍA TONAMECA, OAX. NELVA</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="fraccionamiento-stats">
                        
                        <div class="stat-item sold-stat">
                            <span class="stat-number">50</span>
                            <span class="stat-label">Disponibles</span>
                        </div>

                        <div class="stat-item reserved-stat">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Apartados</span>
                        </div>  
                       
                        <div class="stat-item available-stat">
                            <span class="stat-number">32</span>
                            <span class="stat-label">Vendidos</span>
                        </div>
                    </div>
                    <div class="fraccionamiento-actions">
                        <button class="btn btn-primary ver-detalles">
                            <i class="fas fa-eye"></i>
                            <span>Ver Detalles</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Fraccionamiento 3 -->
            <div class="fraccionamiento-card">
                <div class="fraccionamiento-image-container">
                    <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/SICARU-BLANCO_Mesa-de-trabajo-1.png" alt="Altos de la Montaña" class="fraccionamiento-image">
                </div>
                <div class="fraccionamiento-content">
                    <div class="fraccionamiento-header">
                        
                        <div class="fraccionamiento-info">
                            <h3 class="fraccionamiento-name">SICARÚ</h3>
                            <p class="fraccionamiento-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Emiliano zapata, guelaguechi, salina cruz, oaxaca, mexico.</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="fraccionamiento-stats">
                        <div class="stat-item sold-stat">
                            <span class="stat-number">50</span>
                            <span class="stat-label">Disponibles</span>
                        </div>

                        <div class="stat-item reserved-stat">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Apartados</span>
                        </div>  
                       
                        <div class="stat-item available-stat">
                            <span class="stat-number">32</span>
                            <span class="stat-label">Vendidos</span>
                        </div>
                    </div>
                    <div class="fraccionamiento-actions">
                        <button class="btn btn-primary ver-detalles">
                            <i class="fas fa-eye"></i>
                            <span>Ver Detalles</span>
                        </button>
                    </div>
                </div>
            </div>


            <!-- Fraccionamiento 4 -->
            <div class="fraccionamiento-card">
                <div class="fraccionamiento-image-container">
                    <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/zull_Mesa-de-trabajo-1.png" alt="Villas del Mar" class="fraccionamiento-image">
                </div>
                <div class="fraccionamiento-content">
                    <div class="fraccionamiento-header">
                    
                        <div class="fraccionamiento-info">
                            <h3 class="fraccionamiento-name">REAL CAMPESTRE</h3>
                            <p class="fraccionamiento-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Santa María Tonameca, Oaxaca</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="fraccionamiento-stats">
                        
                        <div class="stat-item sold-stat">
                            <span class="stat-number">50</span>
                            <span class="stat-label">Disponibles</span>
                        </div>

                        <div class="stat-item reserved-stat">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Apartados</span>
                        </div>  
                       
                        <div class="stat-item available-stat">
                            <span class="stat-number">32</span>
                            <span class="stat-label">Vendidos</span>
                        </div>
                    </div>
                    <div class="fraccionamiento-actions">
                        <button class="btn btn-primary ver-detalles">
                            <i class="fas fa-eye"></i>
                            <span>Ver Detalles</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Fraccionamiento 5 -->
            <div class="fraccionamiento-card">
                <div class="fraccionamiento-image-container">
                    <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/ubicacion-blancoRecurso-2-8.png" alt="Villas del Mar" class="fraccionamiento-image">
                </div>
                <div class="fraccionamiento-content">
                    <div class="fraccionamiento-header">
                    
                        <div class="fraccionamiento-info">
                            <h3 class="fraccionamiento-name">REAL CAMPESTRE</h3>
                            <p class="fraccionamiento-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Santa María Tonameca, Oaxaca</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="fraccionamiento-stats">
                        
                        <div class="stat-item sold-stat">
                            <span class="stat-number">50</span>
                            <span class="stat-label">Disponibles</span>
                        </div>

                        <div class="stat-item reserved-stat">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Apartados</span>
                        </div>  
                       
                        <div class="stat-item available-stat">
                            <span class="stat-number">32</span>
                            <span class="stat-label">Vendidos</span>
                        </div>
                    </div>
                    <div class="fraccionamiento-actions">
                        <button class="btn btn-primary">
                            <i class="fas fa-eye"></i>
                            <span>Ver Detalles</span>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Navbar Mobile -->
    <nav class="navbar-mobile">
        <a href="#" class="nav-item active">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
        <a href="apartados.html" class="nav-item">
            <i class="fas fa-calendar-check"></i>
            <span>Apartados</span>
        </a>
        <a href="ventas.html" class="nav-item">
            <i class="fas fa-history"></i>
            <span>Ventas</span>
        </a>
        <a href="perfil.html" class="nav-item">
            <i class="fas fa-user"></i>
            <span>Perfil</span>
        </a>
        <a href="#" class="nav-item" id="logout-btn-mobile">
            <i class="fas fa-sign-out-alt"></i>
            <span>Salir</span>
        </a>
    </nav>


    <div id="logout-modal" style="display:none;">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <h2>¿Cerrar sesión?</h2>
        <p>¿Estás seguro que deseas salir de tu cuenta?</p>
        <div class="modal-actions">
        <button id="confirm-logout" class="btn btn-primary">Sí, salir</button>
        <button id="cancel-logout" class="btn btn-outline">Cancelar</button>
        </div>
    </div>
    </div>


    <script>
        // Selección de botones
        const logoutBtns = [document.getElementById('logout-btn-desktop'), document.getElementById('logout-btn-mobile')];
        const modal = document.getElementById('logout-modal');
        const confirmBtn = document.getElementById('confirm-logout');
        const cancelBtn = document.getElementById('cancel-logout');

        logoutBtns.forEach(btn => {
            if (btn) btn.addEventListener('click', function(e) {
            e.preventDefault();
            modal.style.display = 'block';
            });
        });

        cancelBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        confirmBtn.addEventListener('click', function() {
            // Redirige o realiza el cierre de sesión
            window.location.href = 'index'; // Cambia la URL según tu flujo
        });

        // Cierra el modal si se hace click fuera del contenido
        modal.querySelector('.modal-overlay').addEventListener('click', function() {
            modal.style.display = 'none';
        });


        // Redirigir al hacer click en "Ver Detalles"
        document.querySelectorAll('.ver-detalles').forEach(btn => {
            btn.addEventListener('click', function() {
                window.location.href = 'fraccionamiento';
            });
        });
    </script>
</body>

</html>