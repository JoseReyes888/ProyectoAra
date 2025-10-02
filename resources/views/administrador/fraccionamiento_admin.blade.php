<!DOCTYPE html>
<html lang="es">
<head>
    <meta char="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCEÁNICA - Detalles | Nelva Bienes Raíces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/administrador/fraccionamiento_admin.css') }}" rel="stylesheet">
</head>
<body>


    <!-- Main Content -->
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fas fa-map-marked-alt"></i>
                <span>Detalles del Fraccionamiento</span>
            </h1>
            <div class="page-actions">
                <button class="btn btn-outline" onclick="window.location.href='inicio_admin'">
                    <i class="fas fa-arrow-left"></i> Volver
                </button>
            </div>
        </div>

<!-- Development Header -->
        <div class="development-header">
            <div class="header-content">
                <div class="header-main">
                    <h2 class="development-name">OCEÁNICA</h2>
                    <button class="btn btn-edit" id="btnModificar">
                        <i class="fas fa-edit"></i>
                        <span>Modificar</span>
                    </button>
                </div>
                <div class="development-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Playa Guapinole, Santa María Tonameca, Oaxaca</span>
                </div>
                <p class="development-description">
                    OCEÁNICA es un exclusivo fraccionamiento ubicado frente al mar, diseñado para quienes buscan un estilo de vida tranquilo y en contacto con la naturaleza. Con amplios lotes y diseño sustentable, ofrece la oportunidad perfecta para construir tu casa de ensueño en uno de los lugares más bellos de la costa oaxaqueña.
                </p>
            </div>
        </div>

                <!-- Modal para modificar datos -->
        <div class="modal" id="modalModificar">
            <div class="modal-content">
                <button class="close-modal" id="closeModificarModal">&times;</button>
                <h2 class="modal-title">Modificar Datos del Fraccionamiento</h2>
                
                <form id="modificarForm">
                    <div class="form-group">
                        <label for="logoFraccionamiento" class="form-label">Logo del Fraccionamiento</label>
                        <div class="logo-preview-container">
                            <img id="logoPreview" src="" alt="Logo actual" class="logo-preview">
                            <input type="file" id="logoFraccionamiento" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombreFraccionamientoMod" class="form-label">Nombre del Fraccionamiento</label>
                        <input type="text" id="nombreFraccionamientoMod" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="ubicacionFraccionamiento" class="form-label">Ubicación</label>
                        <input type="text" id="ubicacionFraccionamiento" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcionFraccionamiento" class="form-label">Descripción</label>
                        <textarea id="descripcionFraccionamiento" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" id="btnCancelarMod">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Development Plan -->
        <div class="development-plan">
            <h3 class="info-title">
                <i class="fas fa-map"></i>
                <span>Plano del Fraccionamiento</span>
            </h3>
            
            <div class="plan-container" id="planContainer">
                <button class="fullscreen-btn" id="fullscreenBtn">
                    <i class="fas fa-expand"></i> Pantalla Completa
                </button>
                
                <!-- Imagen del plano -->
                <img src="https://via.placeholder.com/1200x800" alt="Plano del fraccionamiento OCEÁNICA" class="plan-image" id="planImage">
            </div>
            
            <div class="plan-actions">
                <button class="btn btn-outline">
                    <i class="fas fa-download"></i> Descargar Plano
                </button>
            </div>
        </div>


        <!-- Action Buttons -->
        <div class="action-buttons">
            <button class="btn btn-primary btn-lg">
                <i class="fas fa-handshake"></i> Apartar Lote
            </button>
            <button class="btn btn-outline btn-lg">
                <i class="fas fa-calculator"></i> Calcular Costo
            </button>
        </div>

        <!-- Development Info -->
        <div class="development-info">
            <div class="info-section">
                <h3 class="info-title">
                    <i class="fas fa-info-circle"></i>
                    <span>Información General</span>
                </h3>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Tipo de Propiedad</div>
                        <div class="info-value highlight">Privado</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Precio por m²</div>
                        <div class="info-value highlight">$1,200 MXN</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Precio promedio</div>
                        <div class="info-value highlight">$450,000 MXN</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Total de lotes</div>
                        <div class="info-value">50</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Lotes disponibles</div>
                        <div class="info-value">32</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Superficie promedio</div>
                        <div class="info-value">375 m²</div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="info-title">
                    <i class="fas fa-bolt"></i>
                    <span>Servicios</span>
                </h3>
                <div class="services-list">
                    <span class="service-tag">Luz eléctrica</span>
                    <span class="service-tag">Agua potable</span>
                    <span class="service-tag">Calles pavimentadas</span>
                    <span class="service-tag">Drenaje</span>
                    <span class="service-tag">Alumbrado público</span>
                    <span class="service-tag">Seguridad 24/7</span>
                </div>
            </div>

            <div class="info-section">
                <h3 class="info-title">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>Ubicación y Características</span>
                </h3>
                <div class="info-item">
                    <div class="info-value">• A 5 minutos de Playa Guapinole</div>
                </div>
                <div class="info-item">
                    <div class="info-value">• 20 minutos de Puerto Ángel</div>
                </div>
                <div class="info-item">
                    <div class="info-value">• 30 minutos de Zicatela</div>
                </div>
                <div class="info-item">
                    <div class="info-value">• Zona tranquila y segura</div>
                </div>
                <div class="info-item">
                    <div class="info-value">• Vistas al mar desde varios lotes</div>
                </div>
                <div class="info-item">
                    <div class="info-value">• Terreno plano y listo para construcción</div>
                </div>
            </div>
        </div>

        <!-- Development Map -->
        <div class="development-map">
            <h3 class="info-title">
                <i class="fas fa-map-marked-alt"></i>
                <span>Ubicación en Mapa</span>
            </h3>
            <div class="map-container">
                <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15261.92698277436!2d-96.4931234!3d15.7755304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDQ2JzMxLjkiTiA5NsKwMjknMzEuMyJX!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
                <div class="map-actions">
                    <button class="map-btn" id="shareMapBtn" title="Compartir ubicación">
                        <i class="fas fa-share-alt"></i>
                    </button>
                    <button class="map-btn" id="directionsBtn" title="Cómo llegar">
                        <i class="fas fa-directions"></i>
                    </button>
                </div>
            </div>
        </div>

        
    </div>

    <!-- Image Viewer Modal -->
    <div class="image-viewer-modal" id="imageViewerModal">
        <span class="close-viewer" id="closeViewer">&times;</span>
        <div class="image-viewer-content">
            <img src="" alt="" class="image-viewer-img" id="viewerImage">
            <div class="viewer-nav">
                <button class="viewer-nav-btn" id="prevImage">&lt;</button>
                <button class="viewer-nav-btn" id="nextImage">&gt;</button>
            </div>
        </div>
    </div>


     
    <!-- Modal de Apartado -->
    <div class="modal" id="reservationModal">
        <div class="modal-content">
            <button class="close-modal" id="closeModal">&times;</button>
            <h2 class="modal-title">Apartar Lote(s)</h2>
            
            <form id="reservationForm">
                <div class="form-group">
                    <label class="form-label">Tipo de apartado</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="verbalReservation" name="reservationType" value="verbal" class="radio-input" checked>
                            <label for="verbalReservation" class="radio-label">
                                <i class="fas fa-handshake"></i> De palabra
                            </label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="depositReservation" name="reservationType" value="deposit" class="radio-input">
                            <label for="depositReservation" class="radio-label">
                                <i class="fas fa-money-bill-wave"></i> Con depósito
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Lote(s) a apartar</label>
                    <div class="lot-list" id="lotList">
                        <div class="lot-item">
                            <input type="text" class="form-control lot-number" required placeholder="Ej. 12, 5, etc.">
                            <button type="button" class="remove-lot">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <button type="button" class="add-lot-btn" id="addLotBtn">
                        <i class="fas fa-plus-circle"></i> Agregar otro lote
                    </button>
                </div>
                
                <div class="form-group">
                    <label for="firstName" class="form-label">Nombres</label>
                    <input type="text" id="firstName" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="lastName" class="form-label">Apellidos</label>
                    <input type="text" id="lastName" class="form-control" required>
                </div>
                
                <div id="depositFields" class="deposit-fields">
                    <div class="form-group">
                        <label for="amount" class="form-label">Cantidad total a depositar (MXN)</label>
                        <input type="number" id="amount" class="form-control" min="1000">
                    </div>
                </div>
                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> Enviar Solicitud
                    </button>
                </div>
            </form>
            
            <div id="verbalReceipt" class="receipt">
                <h3 class="receipt-title">Resumen de Apartado</h3>
                <div class="receipt-info">
                    <p><strong>Nombre:</strong> <span id="verbalName"></span></p>
                    <p><strong>Lote(s):</strong> <span id="verbalLots"></span></p>
                    <p><strong>Tipo:</strong> Apartado de palabra</p>
                    <p><strong>Fecha y hora límite:</strong> <span id="deadlineDate"></span></p>
                    <p class="time-limit"><i class="fas fa-clock"></i> Vence exactamente en 2 días</p>
                    <p><strong>Fraccionamiento:</strong> OCEÁNICA</p>
                </div>
                <div class="text-center">
                    <p>Una vez finalizado el tiempo limite se cancelará el apartado.</p>
                    <a href="#" class="share-btn verbal-share-btn" id="verbalWhatsappShare">
                        <i class="fab fa-whatsapp"></i> Notificar
                    </a>
                    <button class="btn btn-outline mt-3" id="closeAfterVerbal">
                        <i class="fas fa-check"></i> Aceptar
                    </button>
                </div>
            </div>
            
            <div id="depositReceipt" class="receipt">
                <h3 class="receipt-title">Datos para Depósito</h3>
                <div class="receipt-info">
                    <p><strong>Nombre:</strong> <span id="depositName"></span></p>
                    <p><strong>Lote(s):</strong> <span id="depositLots"></span></p>
                    <p><strong>Tipo:</strong> Apartado con depósito</p>
                    <p><strong>Monto total a depositar:</strong> $<span id="depositAmount"></span> MXN</p>
                    <p><strong>Fraccionamiento:</strong> OCEÁNICA</p>
                </div>
                
                <div class="bank-details">
                    <h4 class="bank-details-title">Datos Bancarios</h4>
                    <p><strong>Banco:</strong> BBVA</p>
                    <p><strong>Nombre:</strong> Nelva Bienes Raíces S.A. de C.V.</p>
                    <p><strong>Cuenta:</strong> 0123 4567 8910 1112</p>
                    <p><strong>CLABE:</strong> 012 320 0123 4567 8910 11</p>
                    <p><strong>Referencia:</strong> OCE-<span id="referenceNumber"></span></p>
                </div>
                
                <div class="text-center">
                    <p>Una vez realizado el depósito, adjunte el comprobante para validar el pago.</p>
                    <a href="#" class="share-btn" id="whatsappShare">
                        <i class="fab fa-whatsapp"></i> Notificar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Cálculo de Costo -->
    <div class="modal" id="calculationModal">
        <div class="modal-content">
            <button class="close-modal" id="closeCalculationModal">&times;</button>
            <h2 class="modal-title">Calcular Costo del Lote</h2>
            
            <form id="calculationForm">
                <div class="form-group">
                    <label for="lotNumber" class="form-label">Número de Lote</label>
                    <input type="text" id="lotNumber" class="form-control" required placeholder="Ej. 12, 5, etc.">
                </div>
                
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="calculateBtn" style="width: 100%;">
                        <i class="fas fa-calculator"></i> Calcular
                    </button>
                </div>
                
                <div id="lotDetails" style="display: none;">
                    <div class="info-section">
                        <h3 class="info-title">
                            <i class="fas fa-info-circle"></i>
                            <span>Detalles del Lote</span>
                        </h3>
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Manzana</div>
                                <div class="info-value" id="lotBlock">-</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Área total</div>
                                <div class="info-value" id="lotArea">- m²</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Norte</div>
                                <div class="info-value" id="lotNorth">- m</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Sur</div>
                                <div class="info-value" id="lotSouth">- m</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Oriente</div>
                                <div class="info-value" id="lotEast">- m</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Poniente</div>
                                <div class="info-value" id="lotWest">- m</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-section">
                        <h3 class="info-title">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Cálculo de Costo</span>
                        </h3>
                        <div class="info-item">
                            <div class="info-label">Precio por m²</div>
                            <div class="info-value">$1,200 MXN</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Costo total</div>
                            <div class="info-value highlight" id="totalCost">$0 MXN</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

    <script>
        // Visor de imágenes
        const planImage = document.getElementById('planImage');
        const imageViewerModal = document.getElementById('imageViewerModal');
        const viewerImage = document.getElementById('viewerImage');
        const closeViewer = document.getElementById('closeViewer');
        
        // Abrir visor de imágenes
        planImage.addEventListener('click', function() {
            viewerImage.src = this.src;
            viewerImage.alt = this.alt;
            imageViewerModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
        
        // Cerrar visor de imágenes
        closeViewer.addEventListener('click', function() {
            imageViewerModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
        
        // Cerrar al hacer clic fuera de la imagen
        imageViewerModal.addEventListener('click', function(e) {
            if (e.target === imageViewerModal) {
                imageViewerModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
        
        // Pantalla completa
        document.getElementById('fullscreenBtn').addEventListener('click', toggleFullscreen);
        
        function toggleFullscreen() {
            const container = document.getElementById('planContainer');
            
            if (!document.fullscreenElement) {
                container.requestFullscreen().catch(err => {
                    console.error('Error al intentar pantalla completa:', err);
                });
            } else {
                document.exitFullscreen();
            }
        }
        
        // Zoom y arrastre de la imagen
        let isDragging = false;
        let startX, startY, scrollLeft, scrollTop;
        let scale = 1;
        
        planImage.addEventListener('mousedown', (e) => {
            if (planImage.classList.contains('zoomed')) {
                isDragging = true;
                startX = e.pageX - planImage.offsetLeft;
                startY = e.pageY - planImage.offsetTop;
                scrollLeft = planContainer.scrollLeft;
                scrollTop = planContainer.scrollTop;
                planContainer.style.cursor = 'grabbing';
            }
        });
        
        planContainer.addEventListener('mousemove', (e) => {
            if (!isDragging || !planImage.classList.contains('zoomed')) return;
            e.preventDefault();
            const x = e.pageX - planContainer.offsetLeft;
            const y = e.pageY - planContainer.offsetTop;
            const walkX = (x - startX) * 2;
            const walkY = (y - startY) * 2;
            planContainer.scrollLeft = scrollLeft - walkX;
            planContainer.scrollTop = scrollTop - walkY;
        });
        
        planContainer.addEventListener('mouseup', () => {
            isDragging = false;
            planContainer.style.cursor = 'zoom-in';
        });
        
        planContainer.addEventListener('mouseleave', () => {
            isDragging = false;
            planContainer.style.cursor = 'zoom-in';
        });
        
        // Zoom con rueda del mouse
        planContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            
            if (e.deltaY < 0) {
                // Zoom in
                scale *= 1.1;
                if (scale > 3) scale = 3;
            } else {
                // Zoom out
                scale /= 1.1;
                if (scale < 1) {
                    scale = 1;
                    planImage.classList.remove('zoomed');
                    planContainer.style.cursor = 'zoom-in';
                }
            }
            
            if (scale > 1) {
                planImage.classList.add('zoomed');
                planContainer.style.cursor = 'grab';
            }
            
            planImage.style.transform = `scale(${scale})`;
            
            // Ajustar el scroll para mantener el zoom centrado en el cursor
            const rect = planContainer.getBoundingClientRect();
            const mouseX = e.clientX - rect.left;
            const mouseY = e.clientY - rect.top;
            
            const scrollX = (mouseX * scale) - mouseX;
            const scrollY = (mouseY * scale) - mouseY;
            
            planContainer.scrollLeft += scrollX;
            planContainer.scrollTop += scrollY;
        });


        



        // Modal de apartado
        const reservationModal = document.getElementById('reservationModal');
        const closeModal = document.getElementById('closeModal');
        const reservationForm = document.getElementById('reservationForm');
        const depositFields = document.getElementById('depositFields');
        const verbalReceipt = document.getElementById('verbalReceipt');
        const depositReceipt = document.getElementById('depositReceipt');
        const verbalName = document.getElementById('verbalName');
        const depositName = document.getElementById('depositName');
        const verbalLots = document.getElementById('verbalLots');
        const depositLots = document.getElementById('depositLots');
        const depositAmount = document.getElementById('depositAmount');
        const deadlineDate = document.getElementById('deadlineDate');
        const referenceNumber = document.getElementById('referenceNumber');
        const closeAfterVerbal = document.getElementById('closeAfterVerbal');
        const whatsappShare = document.getElementById('whatsappShare');
        const verbalWhatsappShare = document.getElementById('verbalWhatsappShare');
        const lotList = document.getElementById('lotList');
        const addLotBtn = document.getElementById('addLotBtn');

        // Botón para abrir el modal
        document.querySelector('.action-buttons .btn-primary').addEventListener('click', function() {
            reservationModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });

        // Cerrar modal
        closeModal.addEventListener('click', function() {
            reservationModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        // Cerrar al hacer clic fuera del modal
        reservationModal.addEventListener('click', function(e) {
            if (e.target === reservationModal) {
                reservationModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Mostrar/ocultar campos de depósito según selección
        document.querySelectorAll('input[name="reservationType"]').forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'deposit') {
                    depositFields.style.display = 'block';
                } else {
                    depositFields.style.display = 'none';
                }
            });
        });

        // Agregar nuevo campo de lote
        addLotBtn.addEventListener('click', function() {
            const newLotItem = document.createElement('div');
            newLotItem.className = 'lot-item';
            newLotItem.innerHTML = `
                <input type="text" class="form-control lot-number" required placeholder="Ej. 12, 5, etc.">
                <button type="button" class="remove-lot">
                    <i class="fas fa-times"></i>
                </button>
            `;
            lotList.appendChild(newLotItem);
            
            // Agregar evento al botón de eliminar
            newLotItem.querySelector('.remove-lot').addEventListener('click', function() {
                // No permitir eliminar el último lote
                if (lotList.children.length > 1) {
                    lotList.removeChild(newLotItem);
                } else {
                    alert('Debe especificar al menos un lote');
                }
            });
        });

        // Eliminar lote
        document.querySelectorAll('.remove-lot').forEach(btn => {
            btn.addEventListener('click', function() {
                const lotItem = this.closest('.lot-item');
                // No permitir eliminar el último lote
                if (lotList.children.length > 1) {
                    lotList.removeChild(lotItem);
                } else {
                    alert('Debe especificar al menos un lote');
                }
            });
        });

        // Formatear fecha y hora en español
        function formatDateTime(date) {
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true
            };
            return date.toLocaleDateString('es-ES', options);
        }

        // Enviar formulario
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const fullName = `${firstName} ${lastName}`;
            const lotNumbers = Array.from(document.querySelectorAll('.lot-number')).map(input => input.value.trim());
            const reservationType = document.querySelector('input[name="reservationType"]:checked').value;
            
            // Validar lotes
            const emptyLots = lotNumbers.some(lot => lot === '');
            if (emptyLots) {
                alert('Por favor complete todos los números de lote');
                return;
            }
            
            if (reservationType === 'verbal') {
                // Mostrar recibo de apartado de palabra
                verbalName.textContent = fullName;
                verbalLots.textContent = lotNumbers.join(', ');
                
                // Calcular fecha límite exacta (2 días exactos a partir de ahora)
                const now = new Date();
                const deadline = new Date(now.getTime() + (2 * 24 * 60 * 60 * 1000)); // 2 días exactos
                
                deadlineDate.textContent = formatDateTime(deadline);
                
                // Configurar WhatsApp share para apartado verbal
                const verbalMessage = `*Notificación de Apartado - OCEÁNICA*\n\n` +
                                     `Hola, para notificar que aparte los lotes ${lotNumbers.join(', ')} ` +
                                     `a nombre ${fullName}`+` de vencerá el *${formatDateTime(deadline)}*\n\n`
                                    
                
                verbalWhatsappShare.href = `https://wa.me/?text=${encodeURIComponent(verbalMessage)}`;
                
                verbalReceipt.style.display = 'block';
                depositReceipt.style.display = 'none';
                reservationForm.style.display = 'none';
            } else {
                // Mostrar recibo de apartado con depósito
                const amount = document.getElementById('amount').value;
                
                if (!amount || amount < 1000) {
                    alert('El monto mínimo de depósito es $1,000 MXN');
                    return;
                }

                depositName.textContent = fullName;
                depositLots.textContent = lotNumbers.join(', ');
                depositAmount.textContent = amount;
                referenceNumber.textContent = Math.floor(1000 + Math.random() * 9000); // Número de referencia aleatorio
                
                // Configurar WhatsApp share para apartado con depósito
                const depositMessage = `*Solicitud de Apartado - OCEÁNICA*\n\n` +
                                     `Nombre: ${fullName}\n` +
                                     `Lote(s): ${lotNumbers.join(', ')}\n` +
                                     `Monto total a depositar: $${amount} MXN\n` +
                                     `Referencia: OCE-${referenceNumber.textContent}\n\n` +
                                     `Datos bancarios:\n` +
                                     `Banco: BBVA\n` +
                                     `Nombre: Nelva Bienes Raíces S.A. de C.V.\n` +
                                     `Cuenta: 0123 4567 8910 1112\n` +
                                     `CLABE: 012 320 0123 4567 8910 11\n\n` +
                                     `Una vez realizado el depósito, envía el comprobante.`;
                
                whatsappShare.href = `https://wa.me/?text=${encodeURIComponent(depositMessage)}`;
                
                depositReceipt.style.display = 'block';
                verbalReceipt.style.display = 'none';
                reservationForm.style.display = 'none';
            }
        });

        // Cerrar modal después de ver recibo verbal
        closeAfterVerbal.addEventListener('click', function() {
            reservationModal.style.display = 'none';
            document.body.style.overflow = 'auto';
            
            // Resetear formulario
            reservationForm.reset();
            // Mantener solo un campo de lote
            while (lotList.children.length > 1) {
                lotList.removeChild(lotList.lastChild);
            }
            // Limpiar el primer campo de lote
            document.querySelector('.lot-number').value = '';
            
            reservationForm.style.display = 'block';
            verbalReceipt.style.display = 'none';
            depositReceipt.style.display = 'none';
            depositFields.style.display = 'none';
        });



        // Modal de cálculo de costo
        const calculationModal = document.getElementById('calculationModal');
        const closeCalculationModal = document.getElementById('closeCalculationModal');
        const calculateBtn = document.getElementById('calculateBtn');
        const lotDetails = document.getElementById('lotDetails');

        // Base de datos simulada de lotes
        const lotsDatabase = {
            '5': {
                block: 'A',
                area: 350,
                north: 20,
                south: 17.5,
                east: 20,
                west: 17.5,
                pricePerM2: 1200
            },
            '12': {
                block: 'B',
                area: 400,
                north: 25,
                south: 16,
                east: 20,
                west: 20,
                pricePerM2: 1200
            },
            '18': {
                block: 'C',
                area: 380,
                north: 19,
                south: 20,
                east: 19,
                west: 20,
                pricePerM2: 1200
            },
            '22': {
                block: 'D',
                area: 420,
                north: 21,
                south: 20,
                east: 21,
                west: 20,
                pricePerM2: 1200
            }
        };

        // Abrir modal de cálculo
        document.querySelector('.action-buttons .btn-outline').addEventListener('click', function() {
            calculationModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            // Resetear el formulario al abrir
            document.getElementById('calculationForm').reset();
            lotDetails.style.display = 'none';
        });

        // Cerrar modal de cálculo
        closeCalculationModal.addEventListener('click', function() {
            calculationModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        // Cerrar al hacer clic fuera del modal
        calculationModal.addEventListener('click', function(e) {
            if (e.target === calculationModal) {
                calculationModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Calcular costo del lote
        calculateBtn.addEventListener('click', function() {
            const lotNumber = document.getElementById('lotNumber').value.trim();
            
            if (!lotNumber) {
                alert('Por favor ingrese un número de lote');
                return;
            }
            
            // Buscar lote en la base de datos simulada
            const lot = lotsDatabase[lotNumber];
            
            if (!lot) {
                alert('Lote no encontrado. Por favor verifique el número.');
                return;
            }
            
            // Mostrar detalles del lote
            document.getElementById('lotBlock').textContent = lot.block;
            document.getElementById('lotArea').textContent = `${lot.area} m²`;
            document.getElementById('lotNorth').textContent = `${lot.north} m`;
            document.getElementById('lotSouth').textContent = `${lot.south} m`;
            document.getElementById('lotEast').textContent = `${lot.east} m`;
            document.getElementById('lotWest').textContent = `${lot.west} m`;
            
            // Calcular costo total (área × precio por m²)
            const totalCost = lot.area * lot.pricePerM2;
            document.getElementById('totalCost').textContent = `$${totalCost.toLocaleString('es-MX')} MXN`;
            
            // Mostrar sección de detalles
            lotDetails.style.display = 'block';
        });

        // Funcionalidad para el modal de modificación
        const modalModificar = document.getElementById('modalModificar');
        const btnModificar = document.getElementById('btnModificar');
        const closeModificarModal = document.getElementById('closeModificarModal');
        const btnCancelarMod = document.getElementById('btnCancelarMod');
        const modificarForm = document.getElementById('modificarForm');

        // Abrir modal de modificación
        btnModificar.addEventListener('click', function() {
            // Cargar datos actuales
            document.getElementById('nombreFraccionamientoMod').value = document.querySelector('.development-name').textContent.trim();
            document.getElementById('ubicacionFraccionamiento').value = document.querySelector('.development-location span').textContent.trim();
            document.getElementById('descripcionFraccionamiento').value = document.querySelector('.development-description').textContent.trim();
            
            modalModificar.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });

        // Cerrar modal
        closeModificarModal.addEventListener('click', function() {
            modalModificar.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        btnCancelarMod.addEventListener('click', function() {
            modalModificar.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        // Cerrar al hacer clic fuera del modal
        modalModificar.addEventListener('click', function(e) {
            if (e.target === modalModificar) {
                modalModificar.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Preview del logo
        document.getElementById('logoFraccionamiento').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('logoPreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Manejar envío del formulario
        modificarForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Actualizar datos en la página
            document.querySelector('.development-name').textContent = document.getElementById('nombreFraccionamientoMod').value;
            document.querySelector('.development-location span').textContent = document.getElementById('ubicacionFraccionamiento').value;
            document.querySelector('.development-description').textContent = document.getElementById('descripcionFraccionamiento').value;
            
            // Aquí irá la lógica para guardar los cambios en el servidor
            alert('Cambios guardados correctamente');
            
            // Cerrar modal
            modalModificar.style.display = 'none';
            document.body.style.overflow = 'auto';
        });


    </script>
</html>