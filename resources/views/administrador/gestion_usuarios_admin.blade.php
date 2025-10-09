<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Gestión de Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/administrador/gestion_usuarios_admin.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <!-- Encabezado de la sección -->
        <div class="section-header">
            <h1 class="section-title">
                <i class="fas fa-users-cog"></i>
                Gestión de Usuarios
            </h1>
            <button id="btnNuevoUsuario" class="btn-primary">
                <i class="fas fa-user-plus"></i>
                Nuevo Usuario
            </button>
        </div>

        <!-- Tarjetas de estadísticas -->
        <div class="stats-container">
            <div class="stat-card total">
                <div class="stat-card-title">
                    <i class="fas fa-users"></i>
                    Total Usuarios
                </div>
                <div class="stat-card-value">1,248</div>
                <div class="stat-card-description">Usuarios registrados</div>
            </div>
            
            <div class="stat-card admin">
                <div class="stat-card-title">
                    <i class="fas fa-user-shield"></i>
                    Administradores
                </div>
                <div class="stat-card-value">24</div>
                <div class="progress-container">
                    <div class="progress-bar progress-admin" style="width: 2%"></div>
                </div>
                <div class="stat-card-description">2% del total</div>
            </div>
            
            <div class="stat-card asesor">
                <div class="stat-card-title">
                    <i class="fas fa-user-tie"></i>
                    Asesores
                </div>
                <div class="stat-card-value">1,023</div>
                <div class="progress-container">
                    <div class="progress-bar progress-asesor" style="width: 82%"></div>
                </div>
                <div class="stat-card-description">82% del total</div>
            </div>
            
            <div class="stat-card ingeniero">
                <div class="stat-card-title">
                    <i class="fas fa-hard-hat"></i>
                    Ingenieros Civiles
                </div>
                <div class="stat-card-value">201</div>
                <div class="progress-container">
                    <div class="progress-bar progress-ingeniero" style="width: 16%"></div>
                </div>
                <div class="stat-card-description">16% del total</div>
            </div>
            
            <div class="stat-card cobranza">
                <div class="stat-card-title">
                    <i class="fas fa-file-invoice-dollar"></i>
                    Cobranza
                </div>
                <div class="stat-card-value">32</div>
                <div class="progress-container">
                    <div class="progress-bar progress-cobranza" style="width: 3%"></div>
                </div>
                <div class="stat-card-description">3% del total</div>
            </div>
        </div>

        <!-- Tabla de usuarios -->
        <h2 class="section-title">
            <i class="fas fa-list"></i>
            Lista de Usuarios
        </h2>
        
        <div class="tabla-container">
            <table class="tabla-usuarios">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Tipo</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Usuario 1 - Administrador -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div style="font-weight: 600;">María González</div>
                            </div>
                        </td>
                        <td><span class="badge badge-admin">Administrador</span></td>
                        <td>maria.gonzalez@empresa.com</td>
                        <td>+52 55 1234 5678</td>
                        <td><span class="estado-activo">Activo</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-user-lock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 2 - Asesor -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div style="font-weight: 600;">Carlos Mendoza</div>
                            </div>
                        </td>
                        <td><span class="badge badge-asesor">Asesor</span></td>
                        <td>carlos.mendoza@empresa.com</td>
                        <td>+52 55 2345 6789</td>
                        <td><span class="estado-activo">Activo</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-user-lock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 3 - Ingeniero Civil -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <div style="font-weight: 600;">Roberto Silva</div>
                            </div>
                        </td>
                        <td><span class="badge badge-ingeniero">Ingeniero Civil</span></td>
                        <td>roberto.silva@empresa.com</td>
                        <td>+52 55 3456 7890</td>
                        <td><span class="estado-activo">Activo</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-user-lock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 4 - Asesor Inactivo -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-user-clock"></i>
                                </div>
                                <div style="font-weight: 600;">Ana López</div>
                            </div>
                        </td>
                        <td><span class="badge badge-asesor">Asesor</span></td>
                        <td>ana.lopez@empresa.com</td>
                        <td>+52 55 4567 8901</td>
                        <td><span class="estado-inactivo">Inactivo</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-success btn-sm">
                                    <i class="fas fa-user-check"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 5 - Administrador -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div style="font-weight: 600;">Jorge Ramírez</div>
                            </div>
                        </td>
                        <td><span class="badge badge-admin">Administrador</span></td>
                        <td>jorge.ramirez@empresa.com</td>
                        <td>+52 55 5678 9012</td>
                        <td><span class="estado-activo">Activo</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-user-lock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 6 - Ingeniero Civil -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <div style="font-weight: 600;">Laura Fernández</div>
                            </div>
                        </td>
                        <td><span class="badge badge-ingeniero">Ingeniero Civil</span></td>
                        <td>laura.fernandez@empresa.com</td>
                        <td>+52 55 6789 0123</td>
                        <td><span class="estado-suspendido">Suspendido</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-success btn-sm">
                                    <i class="fas fa-user-check"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 7 - Cobranza -->
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div class="usuario-logo">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <div style="font-weight: 600;">Miguel Ángel Torres</div>
                            </div>
                        </td>
                        <td><span class="badge badge-cobranza">Cobranza</span></td>
                        <td>miguel.torres@empresa.com</td>
                        <td>+52 55 7890 1234</td>
                        <td><span class="estado-activo">Activo</span></td>
                        <td>
                            <div class="acciones-tabla">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-user-lock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="paginacion">
            <div class="info-paginacion">
                Mostrando 7 de 1,248 usuarios
            </div>
            <div class="controles-paginacion">
                <button class="btn-pagina">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btn-pagina activa">1</button>
                <button class="btn-pagina">2</button>
                <button class="btn-pagina">3</button>
                <button class="btn-pagina">...</button>
                <button class="btn-pagina">50</button>
                <button class="btn-pagina">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Botón flotante para agregar usuario -->
    <div class="floating-btn" id="floatingBtn">
        <i class="fas fa-plus"></i>
    </div>

    <!-- Modal para nuevo usuario -->
    <div id="modalNuevoUsuario" class="modal-nuevo-usuario">
        <div class="modal-nuevo-content">
            <div class="modal-nuevo-header">
                <h2>Nuevo Usuario</h2>
                <span class="modal-nuevo-close">&times;</span>
            </div>
            <div class="modal-nuevo-body">
                <form id="formNuevoUsuario">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tipoUsuario">Tipo de usuario</label>
                            <select id="tipoUsuario" class="form-control" required>
                                <option value="">Seleccione un tipo</option>
                                <option value="admin">Administrador</option>
                                <option value="asesor">Asesor</option>
                                <option value="ingeniero">Ingeniero Civil</option>
                                <option value="cobranza">Cobranza</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirmar Contraseña</label>
                            <input type="password" id="confirmPassword" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="descripcion">Descripción / Notas</label>
                        <textarea id="descripcion" class="form-control" rows="3" placeholder="Información adicional sobre el usuario..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-nuevo-footer">
                <button class="btn-secondary">Cancelar</button>
                <button class="btn-success">Guardar Usuario</button>
            </div>
        </div>
    </div>

    <script>
        // Funcionalidad para abrir y cerrar el modal
        document.getElementById('btnNuevoUsuario').addEventListener('click', function() {
            document.getElementById('modalNuevoUsuario').style.display = 'block';
        });
        
        document.getElementById('floatingBtn').addEventListener('click', function() {
            document.getElementById('modalNuevoUsuario').style.display = 'block';
        });
        
        document.querySelector('.modal-nuevo-close').addEventListener('click', function() {
            document.getElementById('modalNuevoUsuario').style.display = 'none';
        });
        
        // Cerrar modal al hacer clic fuera de él
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('modalNuevoUsuario');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
        
        // Funcionalidad básica para los botones de la tabla
        document.querySelectorAll('.acciones-tabla .btn').forEach(button => {
            button.addEventListener('click', function() {
                const usuario = this.closest('tr').querySelector('td:first-child div div:last-child').textContent;
                const accion = this.querySelector('i').className;
                
                if (accion.includes('fa-edit')) {
                    alert(`Editar usuario: ${usuario}`);
                } else if (accion.includes('fa-user-lock')) {
                    alert(`Suspender usuario: ${usuario}`);
                } else if (accion.includes('fa-user-check')) {
                    alert(`Activar usuario: ${usuario}`);
                }
            });
        });
    </script>
</body>
</html>