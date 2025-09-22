<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Apartado | Nelva Bienes Raíces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link href="{{ asset('css/detalles_apartados.css') }}" rel="stylesheet">
</head>
<body>

    
    <!-- CRONOMETRO PEQUEÑO Y FIJADO -->
    <div class="fixed-time-counter fixed-time-normal" id="fixedTimeCounter">
        <i class="fas fa-clock"></i>
        <span id="fixedTimeRemaining">19h 45m</span>
    </div>


    <!-- Main Content -->
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fas fa-calendar-check"></i>
                <span>Detalles de tu Apartado</span>
            </h1>
            <p class="page-subtitle">Revisa el estado y detalles de tu reservación</p>
        </div>

         <!-- Contador de tiempo -->
            <div class="time-counter" id="timeCounter">
                <i class="fas fa-clock"></i>
                <span>Tiempo restante: <strong id="timeRemaining">19 horas 45 minutos</strong></span>
             </div>


        <!-- Tarjeta de apartado -->
        <div class="reservation-card">
            <div class="reservation-header">
                <h2 class="reservation-title">Apartado #12345</h2>
                <span class="reservation-badge" id="reservationBadge">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Con depósito</span>
                </span>
            </div>

            <!-- Grid de detalles -->
            <div class="detail-grid">
                <div class="detail-card">
                    <div class="detail-label">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>Fraccionamiento</span>
                    </div>
                    <p class="detail-value">OCEÁNICA</p>
                </div>
                
                <div class="detail-card">
                    <div class="detail-label">
                        <i class="fas fa-layer-group"></i>
                        <span>Lote(s)</span>
                    </div>
                    <p class="detail-value">Manzana 5 - Lote 12</p>
                </div>
                
                <div class="detail-card">
                    <div class="detail-label">
                        <i class="fas fa-user"></i>
                        <span>Cliente</span>
                    </div>
                    <p class="detail-value">Juan Pérez Martínez</p>
                </div>
                
                <div class="detail-card">
                    <div class="detail-label">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Fecha de apartado</span>
                    </div>
                    <p class="detail-value">15/03/2024 a las 14:30</p>
                </div>
                
                <div class="detail-card">
                    <div class="detail-label">
                        <i class="fas fa-clock"></i>
                        <span>Fecha de vencimiento</span>
                    </div>
                    <p class="detail-value">17/03/2024 a las 14:30</p>
                </div>
                
                <div class="detail-card">
                    <div class="detail-label">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Monto a depositar</span>
                    </div>
                    <p class="detail-value">$15,000.00 MXN</p>
                </div>
            </div>


            <!-- Sección de depósito -->
            <div class="deposit-section" id="depositSection">
                <h3 class="section-title">
                    <i class="fas fa-receipt"></i>
                    <span>Comprobante de pago</span>
                </h3>
                
                <!-- Subida de archivos -->
                <div class="file-upload-card" id="uploadCard">
                    <div class="file-upload-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <p class="file-upload-text">Arrastra tu comprobante aquí o haz clic para seleccionar</p>
                    <input type="file" id="fileInput" class="file-input" accept="image/*,.pdf">
                    <label for="fileInput" class="btn-upload">
                        <i class="fas fa-upload"></i>
                        <span>Seleccionar archivo</span>
                    </label>
                </div>
                
                <!-- Vista previa del archivo -->
                <div class="file-preview" id="filePreview" style="display: none;">
                    <img id="previewImage" src="" alt="Vista previa del comprobante">
                    <a href="#" id="fileLink" target="_blank"></a>
                    <div class="file-actions">
                        <button class="btn-change-file" id="changeFileBtn">
                            <i class="fas fa-exchange-alt"></i>
                            <span>Cambiar archivo</span>
                        </button>
                        <button class="btn-save" id="saveBtn">
                            <i class="fas fa-check-circle"></i>
                            <span>Enviar comprobante</span>
                        </button>
                    </div>
                </div>
                
                <!-- Estado y observaciones -->
                <div class="status-section">
                    <div class="status-badge" id="statusBadge">
                        <i class="fas fa-hourglass-half"></i>
                        <span>Pendiente de revisión</span>
                    </div>
                    
                    <div class="observations-card" id="observationsCard" style="display: none;">
                        <h4 class="observations-title">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Observaciones</span>
                        </h4>
                        <p id="observationsText"></p>
                    </div>
                </div>
            </div>

            <!-- Botón para generar contrato -->
            <button class="btn-generate-contract" id="generateContractBtn" style="display: none;">
                <i class="fas fa-file-contract"></i>
                <span>Generar Contrato</span>
            </button>

            <!-- Formulario para contrato -->
            <div class="contract-form-container" id="contractFormContainer">
                <h3 class="section-title">
                    <i class="fas fa-file-signature"></i>
                    <span>Datos para el contrato</span>
                </h3>
                <div class="contract-form">
                    <div class="form-group">
                        <label for="contractName" class="form-label">Nombre completo</label>
                        <input type="text" id="contractName" class="form-control" placeholder="Nombre completo como aparecerá en el contrato">
                    </div>
                    <div class="form-group">
                        <label for="contractAddress" class="form-label">Dirección</label>
                        <input type="text" id="contractAddress" class="form-control" placeholder="Calle, número, colonia, ciudad">
                    </div>
                    <div class="form-group">
                        <label for="contractPhone" class="form-label">Teléfono</label>
                        <input type="tel" id="contractPhone" class="form-control" placeholder="Número de teléfono">
                    </div>
                    <div class="form-group">
                        <label for="contractEmail" class="form-label">Correo electrónico</label>
                        <input type="email" id="contractEmail" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="contractPayment" class="form-label">Forma de pago</label>
                        <select id="contractPayment" class="form-control">
                            <option value="">Seleccione una opción</option>
                            <option value="transferencia">Transferencia bancaria</option>
                            <option value="efectivo">Efectivo</option>
                            <option value="cheque">Cheque</option>
                            <option value="tarjeta">Tarjeta de crédito/débito</option>
                        </select>
                    </div>
                    <button class="btn-contract" id="submitContractBtn">
                        <i class="fas fa-file-download"></i>
                        <span>Generar documento</span>
                    </button>
                </div>
            </div>
        </div>

        <a href="apartados" class="btn-back">
            <i class="fas fa-arrow-left"></i>
            <span>Volver a mis apartados</span>
        </a>
    </div>


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
        // Datos del apartado (simulados)
        const reservationData = {
            id: "12345",
            development: "OCEÁNICA",
            lots: ["Manzana 5 - Lote 12"],
            client: "Juan Pérez Martínez",
            type: "deposit", // "verbal" o "deposit"
            createdAt: new Date("2025-07-15T14:30:00"),
            expiresAt: new Date("2025-08-01T14:30:00"),
            amount: 15000,
            status: "approved", // "pending", "approved", "rejected"
            observations: "", // si hay commentarios u observaciones referente al ticket
        };

        // Elementos del DOM
        const reservationBadge = document.getElementById('reservationBadge');
        const depositSection = document.getElementById('depositSection');
        const statusBadge = document.getElementById('statusBadge');
        const observationsCard = document.getElementById('observationsCard');
        const observationsText = document.getElementById('observationsText');
        const timeCounter = document.getElementById('timeCounter');
        const timeRemaining = document.getElementById('timeRemaining');
        const fixedTimeCounter = document.getElementById('fixedTimeCounter');
        const fixedTimeRemaining = document.getElementById('fixedTimeRemaining');
        const fileInput = document.getElementById('fileInput');
        const uploadCard = document.getElementById('uploadCard');
        const filePreview = document.getElementById('filePreview');
        const previewImage = document.getElementById('previewImage');
        const fileLink = document.getElementById('fileLink');
        const saveBtn = document.getElementById('saveBtn');
        const changeFileBtn = document.getElementById('changeFileBtn');
        const generateContractBtn = document.getElementById('generateContractBtn');
        const contractFormContainer = document.getElementById('contractFormContainer');
        const submitContractBtn = document.getElementById('submitContractBtn');

        // Configurar según tipo de apartado
        if (reservationData.type === 'verbal') {
            reservationBadge.innerHTML = '<i class="fas fa-handshake"></i><span>De palabra</span>';
            reservationBadge.className = 'reservation-badge badge-verbal';
            depositSection.style.display = 'none';
            // Mostrar botón de contrato si es apartado de palabra
            generateContractBtn.style.display = 'flex';
        }

        // Configurar estado
        function setStatus(status, observations = '') {
            let icon, text;
            switch(status) {
                case 'pending':
                    icon = 'fa-hourglass-half';
                    text = 'Pendiente de revisión';
                    statusBadge.className = 'status-badge badge-pending';
                    generateContractBtn.style.display = 'none';
                    break;
                case 'approved':
                    icon = 'fa-check-circle';
                    text = 'Aprobado';
                    statusBadge.className = 'status-badge badge-approved';
                    // Mostrar botón de contrato si está aprobado
                    generateContractBtn.style.display = 'flex';
                    break;
                case 'rejected':
                    icon = 'fa-times-circle';
                    text = 'Rechazado';
                    statusBadge.className = 'status-badge badge-rejected';
                    generateContractBtn.style.display = 'none';
                    break;
            }
            statusBadge.innerHTML = `<i class="fas ${icon}"></i><span>${text}</span>`;
            
            if (observations) {
                observationsText.textContent = observations;
                observationsCard.style.display = 'block';
            } else {
                observationsCard.style.display = 'none';
            }
        }

        // Inicializar estado
        setStatus(reservationData.status, reservationData.observations);

            // Contador de tiempo
        function updateTimer() {
            const now = new Date();
            const endTime = new Date(reservationData.expiresAt);
            const diff = endTime - now;
            
            if (diff <= 0) {
                timeRemaining.innerHTML = 'Tiempo agotado';
                fixedTimeRemaining.innerHTML = '0h 0m';
                timeCounter.className = 'time-counter time-danger';
                fixedTimeCounter.className = 'fixed-time-counter fixed-time-danger';
                return;
            }
            
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            
            // Actualizar ambos contadores
            timeRemaining.innerHTML = `${hours} horas ${minutes} minutos`;
            fixedTimeRemaining.innerHTML = `${hours}h ${minutes}m`;
            
            // Establecer clase según tiempo restante
            let timeClass, fixedTimeClass;
            if (hours < 2) {
                timeClass = 'time-danger';
                fixedTimeClass = 'fixed-time-danger';
            } else if (hours < 10) {
                timeClass = 'time-warning';
                fixedTimeClass = 'fixed-time-warning';
            } else {
                timeClass = 'time-normal';
                fixedTimeClass = 'fixed-time-normal';
            }
            
            timeCounter.className = `time-counter ${timeClass}`;
            fixedTimeCounter.className = `fixed-time-counter ${fixedTimeClass}`;
        }

        // Asegúrate de llamar a la función al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            updateTimer();
            setInterval(updateTimer, 60000);
        });

        // Manejar subida de archivos
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            if (file.type.match('image.*')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    filePreview.style.display = 'block';
                    uploadCard.style.display = 'none';
                };
                reader.readAsDataURL(file);
            } else if (file.type === 'application/pdf') {
                previewImage.src = 'https://cdn-icons-png.flaticon.com/512/337/337946.png';
                fileLink.textContent = file.name;
                fileLink.href = URL.createObjectURL(file);
                filePreview.style.display = 'block';
                uploadCard.style.display = 'none';
            }
        });

        // Botón para cambiar archivo
        changeFileBtn.addEventListener('click', function() {
            filePreview.style.display = 'none';
            uploadCard.style.display = 'block';
            fileInput.value = ''; // Limpiar el input file
        });

        // Botón de guardar
        saveBtn.addEventListener('click', function() {
            // Simular envío al servidor
            saveBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Enviando...</span>';
            saveBtn.disabled = true;
            
            setTimeout(() => {
                setStatus('pending', '');
                alert('Comprobante enviado correctamente. Será revisado por nuestro equipo.');
                saveBtn.innerHTML = '<i class="fas fa-check-circle"></i><span>Enviar comprobante</span>';
                saveBtn.disabled = false;
            }, 1500);
        });

        // Botón para generar contrato
        generateContractBtn.addEventListener('click', function() {
            contractFormContainer.style.display = contractFormContainer.style.display === 'block' ? 'none' : 'block';
        });

        // Botón para enviar formulario de contrato
        submitContractBtn.addEventListener('click', function() {
            // Validar formulario
            const name = document.getElementById('contractName').value;
            const address = document.getElementById('contractAddress').value;
            const phone = document.getElementById('contractPhone').value;
            const email = document.getElementById('contractEmail').value;
            const payment = document.getElementById('contractPayment').value;
            
            if (!name || !address || !phone || !email || !payment) {
                alert('Por favor complete todos los campos del formulario');
                return;
            }
            
            // Simular generación de contrato
            submitContractBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Generando documento...</span>';
            submitContractBtn.disabled = true;
            
            setTimeout(() => {
                alert('Contrato generado exitosamente. Se ha enviado una copia a su correo electrónico.');
                submitContractBtn.innerHTML = '<i class="fas fa-file-download"></i><span>Generar documento</span>';
                submitContractBtn.disabled = false;
                contractFormContainer.style.display = 'none';
            }, 2000);
        });

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
            // Redirige o realiza el cierre de sesión
            window.location.href = 'index';
        });

        // Cierra el modal si se hace click fuera del contenido
        modal.querySelector('.modal-overlay').addEventListener('click', function() {
            modal.style.display = 'none';
        });
    </script>
</body>
</html>