<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionamientos | Inmobiliaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/administrador/inicio_admin.css') }}" rel="stylesheet">
</head>
<body>


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
        <div class="section-header">
            <h2 class="section-title">
                <i class="fas fa-list-ul"></i>
                <span>Lista de Fraccionamientos</span>
            </h2>
            <button class="btn btn-primary" id="btnNuevoFraccionamiento">
                <i class="fas fa-plus"></i>
                <span>Agregar Fraccionamiento</span>
            </button>
        </div>
        
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
                        <button class="btn btn-success deshabilitar-fraccionamiento">
                            <i class="fas fa-check"></i>
                            <span>Deshabilitar</span>
                        </button>
                        <button class="btn btn-danger eliminar-fraccionamiento">
                            <i class="fas fa-trash"></i>
                            <span>Eliminar</span>
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
                        <button class="btn btn-success deshabilitar-fraccionamiento">
                            <i class="fas fa-check"></i>
                            <span>Deshabilitar</span>
                        </button>
                        <button class="btn btn-danger eliminar-fraccionamiento">
                            <i class="fas fa-trash"></i>
                            <span>Eliminar</span>
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
                        <button class="btn btn-success deshabilitar-fraccionamiento">
                            <i class="fas fa-check"></i>
                            <span>Deshabilitar</span>
                        </button>
                        <button class="btn btn-danger eliminar-fraccionamiento">
                            <i class="fas fa-trash"></i>
                            <span>Eliminar</span>
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
                        <button class="btn btn-primary ver-detalles">
                            <i class="fas fa-eye"></i>
                            <span>Ver Detalles</span>
                        </button>
                        <button class="btn btn-success deshabilitar-fraccionamiento">
                            <i class="fas fa-check"></i>
                            <span>Deshabilitar</span>
                        </button>
                        <button class="btn btn-danger eliminar-fraccionamiento">
                            <i class="fas fa-trash"></i>
                            <span>Eliminar</span>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Botón flotante para agregar fraccionamiento -->
    <div class="floating-btn" id="btnNuevoFraccionamiento">
        <i class="fas fa-plus"></i>
    </div>


    <!-- Modal para cerrar sesión -->
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

    <!-- Modal para nuevo fraccionamiento -->
    <div id="modalNuevoFraccionamiento" class="modal-nuevo-fraccionamiento">
        <div class="modal-nuevo-content">
            <div class="modal-nuevo-header">
                <h2>Nuevo Fraccionamiento</h2>
                <span class="modal-nuevo-close">&times;</span>
            </div>
            <div class="modal-nuevo-body">
                <form id="nuevoFraccionamientoForm">
                    <div class="form-group">
                        <label for="nombreFraccionamiento">Nombre del fraccionamiento *</label>
                        <input type="text" id="nombreFraccionamiento" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="ubicacionFraccionamiento">Ubicación *</label>
                        <input type="text" id="ubicacionFraccionamiento" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción *</label>
                        <textarea id="descripcion" class="form-control" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="logoFile">Logo (formato PNG)</label>
                        <input type="file" id="logoFile" class="form-control" accept=".png">
                    </div>

                    <div class="form-group">
                        <label for="svgFile">Plano Detallado (formato pdf)</label>
                        <input type="file" id="svgFile" class="form-control" accept=".svg">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="numeroInicial">Número inicial de Lotes *</label>
                            <input type="number" id="numeroInicial" class="form-control" required min="1">
                        </div>
                        <div class="form-group">
                            <label for="numeroFinal">Número final de Lotes *</label>
                            <input type="number" id="numeroFinal" class="form-control" required min="1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="totalLotes">Número total de Lotes *</label>
                        <input type="number" id="totalLotes" class="form-control" required min="1">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="numeroInicialManzanas">Número inicial Manzanas *</label>
                            <input type="number" id="numeroInicialManzanas" class="form-control" required min="1">
                        </div>
                        <div class="form-group">
                            <label for="numeroFinalManzanas">Número final Manzanas *</label>
                            <input type="number" id="numeroFinalManzanas" class="form-control" required min="1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="totalManzanas">Número total de Manzanas *</label>
                        <input type="number" id="totalManzanas" class="form-control" required min="1">
                    </div>

                    
                    <div class="form-group">
                        <label>Servicios disponibles *</label>
                        <div class="services-list">
                            <div class="service-item">
                                <input type="checkbox" id="serviceWater" name="services" value="water">
                                <label for="serviceWater">Agua potable</label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="serviceElectricity" name="services" value="electricity">
                                <label for="serviceElectricity">Energía eléctrica</label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="serviceDrainage" name="services" value="drainage">
                                <label for="serviceDrainage">Drenaje</label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="serviceInternet" name="services" value="internet">
                                <label for="serviceInternet">Internet</label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="serviceGas" name="services" value="gas">
                                <label for="serviceGas">Gas natural</label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="serviceSecurity" name="services" value="security">
                                <label for="serviceSecurity">Seguridad</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="precioGeneral">Precio general de lote por m2 (MXN) *</label>
                        <input type="number" id="precioGeneral" class="form-control" required min="0" step="0.01">
                    </div>
                </form>
            </div>
            <div class="modal-nuevo-footer">
                <button class="btn-secondary" id="btnCancelarNuevo">Cancelar</button>
                <button class="btn-success" id="btnGuardarNuevo">Guardar</button>
            </div>
        </div>
    </div>

    <script>
        // Funcionalidad para el modal de cierre de sesión
        const logoutBtns = [document.getElementById('logout-btn-desktop'), document.getElementById('logout-btn-mobile')];
        const modalLogout = document.getElementById('logout-modal');
        const confirmBtn = document.getElementById('confirm-logout');
        const cancelBtn = document.getElementById('cancel-logout');

        logoutBtns.forEach(btn => {
            if (btn) btn.addEventListener('click', function(e) {
                e.preventDefault();
                modalLogout.style.display = 'block';
            });
        });

        cancelBtn.addEventListener('click', function() {
            modalLogout.style.display = 'none';
        });

        confirmBtn.addEventListener('click', function() {
            window.location.href = 'index';
        });

        modalLogout.querySelector('.modal-overlay').addEventListener('click', function() {
            modalLogout.style.display = 'none';
        });

        // Redirigir al hacer click en "Ver Detalles"
        document.querySelectorAll('.ver-detalles').forEach(btn => {
            btn.addEventListener('click', function() {
                window.location.href = 'fraccionamiento_admin';
            });
        });

        // Funcionalidad para el modal de nuevo fraccionamiento
        const modalNuevo = document.getElementById('modalNuevoFraccionamiento');
        const btnAbrirNuevo = document.getElementById('btnNuevoFraccionamiento');
        const btnCerrarNuevo = document.querySelector('.modal-nuevo-close');
        const btnCancelarNuevo = document.getElementById('btnCancelarNuevo');
        const btnGuardarNuevo = document.getElementById('btnGuardarNuevo');
        
        btnAbrirNuevo.addEventListener('click', () => {
            modalNuevo.style.display = 'block';
        });
        
        const cerrarModalNuevo = () => {
            modalNuevo.style.display = 'none';
        };
        
        btnCerrarNuevo.addEventListener('click', cerrarModalNuevo);
        btnCancelarNuevo.addEventListener('click', cerrarModalNuevo);
        
        btnGuardarNuevo.addEventListener('click', () => {
            const form = document.getElementById('nuevoFraccionamientoForm');
            if (form.checkValidity()) {
                alert('Fraccionamiento guardado correctamente');
                cerrarModalNuevo();
            } else {
                alert('Por favor, complete todos los campos obligatorios');
            }
        });
        
        window.addEventListener('click', (event) => {
            if (event.target === modalNuevo) {
                cerrarModalNuevo();
            }
        });
        
        // Validación de rango de numeración
        const numeroInicial = document.getElementById('numeroInicial');
        const numeroFinal = document.getElementById('numeroFinal');
        const totalLotes = document.getElementById('totalLotes');
        
        numeroFinal.addEventListener('change', () => {
            if (parseInt(numeroInicial.value) >= parseInt(numeroFinal.value)) {
                alert('El número final debe ser mayor al número inicial');
                numeroFinal.value = '';
            }
            
            if (numeroInicial.value && numeroFinal.value) {
                totalLotes.value = parseInt(numeroFinal.value) - parseInt(numeroInicial.value) + 1;
            }
        });

        // Funcionalidad para los botones "Deshabilitar Fraccionamiento"
document.querySelectorAll('.deshabilitar-fraccionamiento').forEach(btn => {
    btn.addEventListener('click', function() {
        if(confirm('¿Estás seguro de que deseas deshabilitar este fraccionamiento?')) {
            // Aquí irá la lógica para deshabilitar el fraccionamiento
            alert('Fraccionamiento deshabilitado correctamente');
        }
    });
});

// Funcionalidad para los botones "Eliminar Fraccionamiento"
document.querySelectorAll('.eliminar-fraccionamiento').forEach(btn => {
    btn.addEventListener('click', function() {
        if(confirm('¿Estás seguro de que deseas eliminar este fraccionamiento? Esta acción no se puede deshacer.')) {
            // Aquí irá la lógica para eliminar el fraccionamiento
            alert('Fraccionamiento eliminado correctamente');
        }
    });
});
    </script>
</body>
</html>