<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil | Nelva Bienes Raíces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
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
            <i class="fas fa-user"></i>
            <span>Mi Perfil</span>
        </h1>

        <!-- Profile Card -->
        <div class="profile-card">
            <div class="profile-header">
                <div class="profile-image-container">
                    <div class="profile-image" id="profileImage">
                        <i class="fas fa-user"></i>
                    </div>
                    <input type="file" id="fileInput" class="file-input" accept="image/*">
                    <button class="edit-image-btn" id="editImageBtn">
                        <i class="fas fa-camera"></i>
                    </button>
                </div>
                <h2 class="profile-name">Juan Pérez</h2>
                <p class="profile-username">Agente de Ventas</p>
            </div>
            <div class="profile-body">
                <div class="profile-details">
                    <div class="detail-group">
                        <span class="detail-label">Nombre</span>
                        <div class="detail-value editable">
                            <span id="firstNameValue">Juan</span>
                            <button class="edit-btn" data-field="firstName">
                                <i class="fas fa-pencil-alt"></i> Editar
                            </button>
                        </div>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Apellidos</span>
                        <div class="detail-value editable">
                            <span id="lastNameValue">Pérez García</span>
                            <button class="edit-btn" data-field="lastName">
                                <i class="fas fa-pencil-alt"></i> Editar
                            </button>
                        </div>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Teléfono</span>
                        <div class="detail-value editable">
                            <span id="phoneValue">555-123-4567</span>
                            <button class="edit-btn" data-field="phone">
                                <i class="fas fa-pencil-alt"></i> Editar
                            </button>
                        </div>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Correo electrónico</span>
                        <div class="detail-value editable">
                            <span id="emailValue">juan.perez@nelva.com</span>
                            <button class="edit-btn" data-field="email">
                                <i class="fas fa-pencil-alt"></i> Editar
                            </button>
                        </div>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Fecha de ingreso</span>
                        <div class="detail-value">15/03/2022</div>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Total ventas</span>
                        <div class="detail-value">42 lotes</div>
                    </div>
                </div>
                <div class="profile-actions">
                    <button class="btn btn-outline" id="changePasswordBtn">
                        <i class="fas fa-key"></i> Cambiar contraseña
                    </button>
                    <button class="btn btn-primary" id="saveChangesBtn">
                        <i class="fas fa-save"></i> Guardar cambios
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal" id="passwordModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cambiar contraseña</h3>
                <button class="modal-close" id="closeModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="passwordForm">
                    <div class="form-group">
                        <label for="currentPassword" class="form-label">Contraseña actual</label>
                        <input type="password" id="currentPassword" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword" class="form-label">Nueva contraseña</label>
                        <input type="password" id="newPassword" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirmar nueva contraseña</label>
                        <input type="password" id="confirmPassword" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" id="cancelChange">Cancelar</button>
                <button class="btn btn-primary" id="savePassword">Guardar cambios</button>
            </div>
        </div>
    </div>

    <!-- Edit Field Modal -->
    <div class="modal" id="editFieldModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="editFieldTitle">Editar campo</h3>
                <button class="modal-close" id="closeEditModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="editFieldForm">
                    <div class="form-group">
                        <label for="editFieldValue" class="form-label" id="editFieldLabel">Valor</label>
                        <input type="text" id="editFieldValue" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" id="cancelEdit">Cancelar</button>
                <button class="btn btn-primary" id="saveEdit">Guardar</button>
            </div>
        </div>
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
        <a href="ventas.html" class="nav-item">
            <i class="fas fa-history"></i>
            <span>Ventas</span>
        </a>
        <a href="#" class="nav-item active">
            <i class="fas fa-user"></i>
            <span>Perfil</span>
        </a>
        <a href="#" class="nav-item" id="logout-btn-mobile">
            <i class="fas fa-sign-out-alt"></i>
            <span>Salir</span>
        </a>
    </nav>

    <script>
        // Modal functionality
        const passwordModal = document.getElementById('passwordModal');
        const changePasswordBtn = document.getElementById('changePasswordBtn');
        const closeModal = document.getElementById('closeModal');
        const cancelChange = document.getElementById('cancelChange');
        
        changePasswordBtn.addEventListener('click', () => {
            passwordModal.classList.add('active');
        });
        
        closeModal.addEventListener('click', () => {
            passwordModal.classList.remove('active');
        });
        
        cancelChange.addEventListener('click', () => {
            passwordModal.classList.remove('active');
        });
        
        // Close modal when clicking outside
        passwordModal.addEventListener('click', (e) => {
            if (e.target === passwordModal) {
                passwordModal.classList.remove('active');
            }
        });
        
        // Form submission (just for demo)
        document.getElementById('savePassword').addEventListener('click', () => {
            alert('Contraseña cambiada exitosamente (demo)');
            passwordModal.classList.remove('active');
            document.getElementById('passwordForm').reset();
        });

        // Save all changes button
        document.getElementById('saveChangesBtn').addEventListener('click', () => {
            // Here you would typically send the data to the server
            alert('Cambios guardados exitosamente (demo)');
        });

        // Edit field modal functionality
        const editFieldModal = document.getElementById('editFieldModal');
        const closeEditModal = document.getElementById('closeEditModal');
        const cancelEdit = document.getElementById('cancelEdit');
        let currentField = null;

        // Handle edit buttons
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const field = e.currentTarget.getAttribute('data-field');
                currentField = field;
                
                // Set modal title and label based on field
                const fieldLabels = {
                    'firstName': 'Nombre',
                    'lastName': 'Apellidos',
                    'phone': 'Teléfono',
                    'email': 'Correo electrónico',
                    'username': 'Nombre de usuario'
                };
                
                document.getElementById('editFieldTitle').textContent = `Editar ${fieldLabels[field]}`;
                document.getElementById('editFieldLabel').textContent = fieldLabels[field];
                
                // Get current value
                const currentValue = document.getElementById(`${field}Value`).textContent;
                document.getElementById('editFieldValue').value = currentValue;
                
                // Show modal
                editFieldModal.classList.add('active');
            });
        });

        // Close edit modal
        closeEditModal.addEventListener('click', () => {
            editFieldModal.classList.remove('active');
        });
        
        cancelEdit.addEventListener('click', () => {
            editFieldModal.classList.remove('active');
        });
        
        // Close modal when clicking outside
        editFieldModal.addEventListener('click', (e) => {
            if (e.target === editFieldModal) {
                editFieldModal.classList.remove('active');
            }
        });

        // Save edited field
        document.getElementById('saveEdit').addEventListener('click', () => {
            if (currentField) {
                const newValue = document.getElementById('editFieldValue').value;
                document.getElementById(`${currentField}Value`).textContent = newValue;
                editFieldModal.classList.remove('active');
            }
        });

        // Image upload functionality
        const editImageBtn = document.getElementById('editImageBtn');
        const fileInput = document.getElementById('fileInput');
        const profileImage = document.getElementById('profileImage');

        editImageBtn.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                if (!file.type.match('image.*')) {
                    alert('Por favor, selecciona un archivo de imagen válido.');
                    return;
                }

                const reader = new FileReader();
                reader.onload = (event) => {
                    // Remove the icon and set the image as background
                    profileImage.innerHTML = '';
                    profileImage.style.backgroundImage = `url(${event.target.result})`;
                    profileImage.style.backgroundSize = 'cover';
                    profileImage.style.backgroundPosition = 'center';
                };
                reader.readAsDataURL(file);
            }
        });

        // Also allow clicking directly on the profile image to change it (better UX on mobile)
        profileImage.addEventListener('click', () => {
            fileInput.click();
        });
    </script>


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
            window.location.href = 'index.html'; // Cambia la URL según tu flujo
        });

        // Cierra el modal si se hace click fuera del contenido
        modal.querySelector('.modal-overlay').addEventListener('click', function() {
            modal.style.display = 'none';
        });
    </script>
</body>
</html>