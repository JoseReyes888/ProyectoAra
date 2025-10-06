<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes de Apartados | Inmobiliaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/administrador/solicitudes_apartados_admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Encabezado -->
        <div class="page-header">
            <h1 class="page-title">
                <i class="fas fa-clipboard-check" aria-hidden="true"></i>
                <span>Solicitudes de Apartados</span>
            </h1>
            <div class="page-actions">
                <button class="btn btn-outline" onclick="window.location.href='apartados_admin'" aria-label="Volver a la página anterior">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i> Volver
                </button>
            </div>
        </div>

        <!-- Recuadro Flotante de Pendientes -->
        <div class="floating-pending">
            <i class="fas fa-clock" aria-hidden="true"></i>
            <span>8 Pendientes</span>
        </div>

        <!-- Lista de Solicitudes -->
        <div class="solicitudes-list">
            <!-- Solicitud 1 (Pendiente) -->
            <div class="solicitud-card">
                <div class="solicitud-header">
                    <div class="solicitud-info">
                        <span class="badge badge-pending">Pendiente</span>
                        <h3>Solicitud #A-2025-001</h3>
                        <p class="timestamp">
                            <i class="fas fa-clock" aria-hidden="true"></i>
                            Hace 2 horas
                        </p>
                    </div>
                    <div class="lote-info">
                        <span class="lote-number">Lote 25</span>
                        <span class="fraccionamiento">OCEÁNICA</span>
                    </div>
                </div>

                <div class="solicitud-body">
                    <div class="details-grid">
                        <div class="detail-item">
                            <span class="detail-label">Cliente:</span>
                            <span class="detail-value">María González</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Asesor:</span>
                            <span class="detail-value">Juan Pérez</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Tipo:</span>
                            <span class="detail-value">Con depósito</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Monto:</span>
                            <span class="detail-value">$25,000 MXN</span>
                        </div>
                    </div>

                    <div class="ticket-preview">
                        <img src="ruta_al_ticket.jpg" alt="Comprobante de pago de la solicitud">
                        <button class="btn btn-outline" onclick="openTicketModal('ruta_al_ticket.jpg')" aria-label="Ver comprobante de pago en tamaño completo">
                            <i class="fas fa-expand" aria-hidden="true"></i> Ver completo
                        </button>
                    </div>

                    <div class="action-buttons">
                        <button class="btn btn-success" onclick="aprobarSolicitud('A-2025-001')" aria-label="Aprobar solicitud A-2025-001">
                            <i class="fas fa-check" aria-hidden="true"></i> Aprobar
                        </button>
                        <button class="btn btn-danger" onclick="agregarObservacion('A-2025-001')" aria-label="Agregar observación a la solicitud A-2025-001">
                            <i class="fas fa-comment" aria-hidden="true"></i> Agregar Observación
                        </button>
                    </div>
                </div>
            </div>

            <!-- Solicitud 2 (Aprobada) -->
            <div class="solicitud-card">
                <div class="solicitud-header">
                    <div class="solicitud-info">
                        <span class="badge badge-approved">Aprobada</span>
                        <h3>Solicitud #A-2025-002</h3>
                        <p class="timestamp">
                            <i class="fas fa-clock" aria-hidden="true"></i>
                            Hace 5 horas
                        </p>
                    </div>
                    <div class="lote-info">
                        <span class="lote-number">Lote 18</span>
                        <span class="fraccionamiento">SICARÚ</span>
                    </div>
                </div>

                <div class="solicitud-body">
                    <div class="details-grid">
                        <div class="detail-item">
                            <span class="detail-label">Cliente:</span>
                            <span class="detail-value">Roberto Sánchez</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Asesor:</span>
                            <span class="detail-value">Ana López</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Tipo:</span>
                            <span class="detail-value">Con depósito</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Monto:</span>
                            <span class="detail-value">$30,000 MXN</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solicitud 3 (En observación) -->
            <div class="solicitud-card">
                <div class="solicitud-header">
                    <div class="solicitud-info">
                        <span class="badge badge-observation">En observación</span>
                        <h3>Solicitud #A-2025-003</h3>
                        <p class="timestamp">
                            <i class="fas fa-clock" aria-hidden="true"></i>
                            Hace 1 día
                        </p>
                    </div>
                    <div class="lote-info">
                        <span class="lote-number">Lote 42</span>
                        <span class="fraccionamiento">OCEÁNICA</span>
                    </div>
                </div>

                <div class="solicitud-body">
                    <div class="details-grid">
                        <div class="detail-item">
                            <span class="detail-label">Cliente:</span>
                            <span class="detail-value">Carlos Ruiz</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Asesor:</span>
                            <span class="detail-value">Juan Pérez</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Tipo:</span>
                            <span class="detail-value">Con depósito</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Monto:</span>
                            <span class="detail-value">$20,000 MXN</span>
                        </div>
                    </div>

                    <div class="admin-comment observation">
                        <i class="fas fa-exclamation-circle" aria-hidden="true"></i>
                        <p>El comprobante no corresponde al monto especificado. Por favor, verificar y enviar el comprobante correcto.</p>
                        <span class="comment-time">09:15 - 05/10/2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para ver ticket completo -->
    <div id="ticketModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeTicketModal()" aria-label="Cerrar modal">&times;</span>
            <h2>Comprobante de Pago</h2>
            <img id="ticketImage" src="" alt="Comprobante de pago">
        </div>
    </div>

    <!-- Modal para agregar observación -->
    <div id="observationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeObservationModal()" aria-label="Cerrar modal">&times;</span>
            <h2>Agregar Observación</h2>
            <form id="observationForm">
                <div class="form-group">
                    <label for="observationReason">Motivo de la observación</label>
                    <textarea id="observationReason" required></textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="btn btn-outline" onclick="closeObservationModal()" aria-label="Cancelar observación">Cancelar</button>
                    <button type="submit" class="btn btn-danger" aria-label="Confirmar observación de solicitud">Confirmar Observación</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Funciones para los modales y acciones
        function aprobarSolicitud(id) {
            if (confirm('¿Estás seguro de aprobar esta solicitud?')) {
                // Aquí iría la lógica para aprobar la solicitud
                alert('Solicitud aprobada correctamente');
            }
        }

        function agregarObservacion(id) {
            document.getElementById('observationModal').style.display = 'block';
        }

        function closeObservationModal() {
            document.getElementById('observationModal').style.display = 'none';
            document.getElementById('observationReason').value = '';
        }

        function openTicketModal(imageSrc) {
            const modal = document.getElementById('ticketModal');
            const ticketImage = document.getElementById('ticketImage');
            ticketImage.src = imageSrc;
            modal.style.display = 'block';
        }

        function closeTicketModal() {
            document.getElementById('ticketModal').style.display = 'none';
            document.getElementById('ticketImage').src = '';
        }

        // Event Listeners para cerrar modales
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
                if (event.target.id === 'observationModal') {
                    document.getElementById('observationReason').value = '';
                }
                if (event.target.id === 'ticketModal') {
                    document.getElementById('ticketImage').src = '';
                }
            }
        }

        // Manejo del formulario de observación
        document.getElementById('observationForm').onsubmit = function(e) {
            e.preventDefault();
            const reason = document.getElementById('observationReason').value;
            if (reason.trim()) {
                // Aquí iría la lógica para agregar la observación
                alert('Observación agregada correctamente');
                closeObservationModal();
            }
        };
    </script>
</body>
</html>