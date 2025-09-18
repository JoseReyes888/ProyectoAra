<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Venta | Nelva Bienes Raíces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/detalles_venta.css') }}" rel="stylesheet">
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
        <div class="page-header">
            <h1 class="page-title">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Detalles de Venta</span>
            </h1>
            <p class="page-subtitle">Información completa de la transacción</p>
        </div>

        <!-- Tarjeta de venta -->
        <div class="sale-card">
            <div class="sale-header">
                <h2 class="sale-title">Venta #VN-2024-00158</h2>
                <span class="sale-badge" id="saleBadge">
                    <i class="fas fa-check-circle"></i>
                    <span>En pagos</span>
                </span>
            </div>

            <!-- Sección de Lotes -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>Información de los Lotes</span>
                </h3>
                
                <div class="detail-grid">
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-hashtag"></i>
                            <span>Número de lote(s)</span>
                        </div>
                        <p class="detail-value">Lote 12, Lote 15</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-layer-group"></i>
                            <span>Manzana</span>
                        </div>
                        <p class="detail-value">Manzana 5</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-home"></i>
                            <span>Fraccionamiento</span>
                        </div>
                        <p class="detail-value">OCEÁNICA</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Precio total</span>
                        </div>
                        <p class="detail-value">$450,000.00 MXN</p>
                    </div>
                </div>
            </div>

            <!-- Sección del Cliente -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-user"></i>
                    <span>Datos del Cliente</span>
                </h3>
                
                <div class="detail-grid">
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-id-card"></i>
                            <span>Nombre completo</span>
                        </div>
                        <p class="detail-value">Juan Pérez Martínez</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-birthday-cake"></i>
                            <span>Edad</span>
                        </div>
                        <p class="detail-value">42 años</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-heart"></i>
                            <span>Estado civil</span>
                        </div>
                        <p class="detail-value">Casado</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lugar de origen</span>
                        </div>
                        <p class="detail-value">Oaxaca, México</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-briefcase"></i>
                            <span>Ocupación</span>
                        </div>
                        <p class="detail-value">Arquitecto</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-id-badge"></i>
                            <span>Clave de elector (INE)</span>
                        </div>
                        <p class="detail-value">PPEM920101HDFRRN01</p>
                    </div>
                </div>
            </div>

            <!-- Sección de INEs -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-id-card"></i>
                    <span>Identificaciones Oficiales</span>
                </h3>
                
                <div class="detail-grid">
                    <!-- INE del Cliente -->
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-user"></i>
                            <span>INE del Cliente</span>
                        </div>
                        <div class="ine-container">
                            <img src="https://via.placeholder.com/600x400?text=INE+Cliente+Frontal" alt="INE Cliente Frontal" class="ine-image">
                            <img src="https://via.placeholder.com/600x400?text=INE+Cliente+Reverso" alt="INE Cliente Reverso" class="ine-image">
                        </div>
                    </div>
                    
                    <!-- INE del Beneficiario -->
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-user-tie"></i>
                            <span>INE del Beneficiario</span>
                        </div>
                        <div class="ine-container">
                            <img src="https://via.placeholder.com/600x400?text=INE+Beneficiario+Frontal" alt="INE Beneficiario Frontal" class="ine-image">
                            <img src="https://via.placeholder.com/600x400?text=INE+Beneficiario+Reverso" alt="INE Beneficiario Reverso" class="ine-image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contacto del Cliente -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-address-book"></i>
                    <span>Contacto del Cliente</span>
                </h3>
                
                <div class="detail-grid">
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-phone"></i>
                            <span>Teléfono</span>
                        </div>
                        <p class="detail-value">+52 951 123 4567</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-envelope"></i>
                            <span>Correo electrónico</span>
                        </div>
                        <p class="detail-value">juan.perez@example.com</p>
                    </div>
                </div>
            </div>

            <!-- Dirección del Cliente -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-map"></i>
                    <span>Dirección del Cliente</span>
                </h3>
                
                <div class="detail-grid">
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-globe-americas"></i>
                            <span>Nacionalidad</span>
                        </div>
                        <p class="detail-value">Mexicana</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-flag"></i>
                            <span>Estado</span>
                        </div>
                        <p class="detail-value">Oaxaca</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-city"></i>
                            <span>Municipio</span>
                        </div>
                        <p class="detail-value">Santa María Tonameca</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-home"></i>
                            <span>Localidad</span>
                        </div>
                        <p class="detail-value">Playa Guapinole</p>
                    </div>
                </div>
            </div>

            <!-- Información de Pago -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Información de Pago</span>
                </h3>
                
                <div class="detail-grid">
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-hand-holding-usd"></i>
                            <span>Monto del enganche</span>
                        </div>
                        <p class="detail-value">$90,000.00 MXN</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Plazo de financiamiento</span>
                        </div>
                        <p class="detail-value">24 meses</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-business-time"></i>
                            <span>Modalidad de pago</span>
                        </div>
                        <p class="detail-value">Crédito</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-money-check-alt"></i>
                            <span>Forma de pago</span>
                        </div>
                        <p class="detail-value">Transferencia bancaria</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-calendar-day"></i>
                            <span>Fecha primer pago</span>
                        </div>
                        <p class="detail-value">15/04/2024</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-calendar-check"></i>
                            <span>Día de pago mensual</span>
                        </div>
                        <p class="detail-value">15 de cada mes</p>
                    </div>
                </div>
                
                <!-- Comprobante de enganche -->
                <div class="receipt-container">
                    <div class="detail-label">
                        <i class="fas fa-receipt"></i>
                        <span>Comprobante de enganche</span>
                    </div>
                    <img src="https://via.placeholder.com/600x300?text=Comprobante+de+Pago" alt="Comprobante de enganche" class="receipt-preview">
                </div>
            </div>

            <!-- Beneficiario -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-user-tie"></i>
                    <span>Datos del Beneficiario</span>
                </h3>
                
                <div class="detail-grid">
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-user"></i>
                            <span>Nombre completo</span>
                        </div>
                        <p class="detail-value">María García López</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-phone"></i>
                            <span>Teléfono</span>
                        </div>
                        <p class="detail-value">+52 951 987 6543</p>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-label">
                            <i class="fas fa-id-badge"></i>
                            <span>INE (México)</span>
                        </div>
                        <p class="detail-value">GALM750505MDFRPL02</p>
                    </div>
                </div>
            </div>

            <!-- Observaciones -->
            <div class="section">
                <h3 class="section-title">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Observaciones</span>
                </h3>
                
                <div class="detail-card">
                    <p>El cliente solicitó cambiar el día de pago al 20 de cada mes a partir del segundo pago. Se acordó con el departamento de cobranza.</p>
                </div>
            </div>
        </div>

        <a href="ventas.html" class="btn-back">
            <i class="fas fa-arrow-left"></i>
            <span>Volver a ventas</span>
        </a>
    </div>

    <!-- Navbar Mobile -->
    <nav class="navbar-mobile">
        <a href="inicio.html" class="nav-item">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
        <a href="apartados.html" class="nav-item">
            <i class="fas fa-calendar-check"></i>
            <span>Apartados</span>
        </a>
        <a href="ventas.html" class="nav-item active">
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

    <!-- Modal para logout -->
    <div id="logout-modal" style="display:none;">
        <div class="modal-overlay"></div>
        <div class="modal-content-logout">
            <h2>¿Cerrar sesión?</h2>
            <p>¿Estás seguro que deseas salir de tu cuenta?</p>
            <div class="modal-actions">
                <button id="confirm-logout" class="btn btn-primary">Sí, salir</button>
                <button id="cancel-logout" class="btn btn-outline">Cancelar</button>
            </div>
        </div>
    </div>

    <script>
        // Datos de la venta (simulados)
        const saleData = {
            id: "VN-2024-00158",
            status: "payments", // "payments", "delayed", "completed", "cancelled"
            lots: ["Lote 12", "Lote 15"],
            block: "Manzana 5",
            development: "OCEÁNICA",
            totalPrice: 450000,
            client: {
                name: "Juan Pérez Martínez",
                age: 42,
                maritalStatus: "Casado",
                origin: "Oaxaca, México",
                occupation: "Arquitecto",
                ine: "PPEM920101HDFRRN01",
                phone: "+52 951 123 4567",
                email: "juan.perez@example.com",
                address: {
                    nationality: "Mexicana",
                    state: "Oaxaca",
                    municipality: "Santa María Tonameca",
                    locality: "Playa Guapinole"
                }
            },
            payment: {
                downPayment: 90000,
                financingTerm: "24 meses",
                paymentMode: "Crédito",
                paymentMethod: "Transferencia bancaria",
                firstPaymentDate: "15/04/2024",
                paymentDay: 15,
                receipt: "https://via.placeholder.com/600x300?text=Comprobante+de+Pago"
            },
            beneficiary: {
                name: "María García López",
                phone: "+52 951 987 6543",
                ine: "GALM750505MDFRPL02"
            },
            observations: "El cliente solicitó cambiar el día de pago al 20 de cada mes a partir del segundo pago. Se acordó con el departamento de cobranza."
        };

        // Configurar estado de la venta
        function setStatus(status) {
            const badge = document.getElementById('saleBadge');
            let icon, text, badgeClass;
            
            switch(status) {
                case 'payments':
                    icon = 'fa-check-circle';
                    text = 'En pagos';
                    badgeClass = 'badge-payments';
                    break;
                case 'delayed':
                    icon = 'fa-exclamation-circle';
                    text = 'Retraso de pagos';
                    badgeClass = 'badge-delayed';
                    break;
                case 'completed':
                    icon = 'fa-check-double';
                    text = 'Liquidada';
                    badgeClass = 'badge-completed';
                    break;
                case 'cancelled':
                    icon = 'fa-times-circle';
                    text = 'Cancelada';
                    badgeClass = 'badge-cancelled';
                    break;
            }
            
            badge.innerHTML = `<i class="fas ${icon}"></i><span>${text}</span>`;
            badge.className = `sale-badge ${badgeClass}`;
        }

        // Inicializar estado
        setStatus(saleData.status);

        // Logout functionality
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
            window.location.href = 'index.html';
        });

        modal.querySelector('.modal-overlay').addEventListener('click', function() {
            modal.style.display = 'none';
        });
    </script>
</body>
</html>

