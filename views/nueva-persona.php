<form action="" class="form-container shadow" id="frmRegistrar">
    <h2 class="text-center mb-4">Registro de Persona</h2>

    <!-- Número de Identidad -->
    <div class="form-group">
        <label for="nro_identidad">Nro de Identidad</label>
        <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" placeholder="Ingrese el número de identidad" required>
    </div>

    <!-- Razón Social -->
    <div class="form-group">
        <label for="razon_social">Razón Social</label>
        <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingrese la razón social" required>
    </div>

    <!-- Teléfono -->
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono" required>
    </div>

    <!-- Correo -->
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo electrónico" required>
    </div>

    <!-- Departamento -->
    <div class="form-group">
        <label for="departamento">Departamento</label>
        <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Ingrese el departamento" required>
    </div>

    <!-- Provincia -->
    <div class="form-group">
        <label for="provincia">Provincia</label>
        <input type="text" class="form-control" id="provincia" name="provincia" placeholder="Ingrese la provincia" required>
    </div>

    <!-- Distrito -->
    <div class="form-group">
        <label for="distrito">Distrito</label>
        <input type="text" class="form-control" id="distrito" name="distrito" placeholder="Ingrese el distrito" required>
    </div>

    <!-- Código Postal -->
    <div class="form-group">
        <label for="cod_postal">Código Postal</label>
        <input type="text" class="form-control" id="cod_postal" name="cod_postal" placeholder="Ingrese el código postal" required>
    </div>

    <!-- Dirección -->
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <textarea id="direccion" class="form-control" name="direccion" placeholder="Ingrese la dirección" required></textarea>
    </div>

    <!-- Rol -->
    <div class="form-group">
        <label for="rol">Rol</label>
        <input type="text" class="form-control" id="rol" name="rol" placeholder="Ingrese el rol" required>
    </div>
    <div></div>

    <!-- Botones -->
    <div class="text-center mt-4">
        <button type="button" class="btn btn-secondary btn-lg me-3" onclick="location.href='PanelAdministrador';">
            <i class="fas fa-arrow-left"></i> Regresar
        </button>
        <div>
      </div>

        <div class="text-center mt-4">
        <button type="button" class="btn btn-success btn-lg" onclick="Registrar_persona();">
        <i class="fas fa-check"></i> Registrar
    </button>
      </div>
    </div>
</form>

<style>
/* Formulario principal */
.form-container {
    max-width: 600px;
    margin: auto;
    padding: 20px 30px;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

.form-container:hover {
    transform: scale(1.02);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
}

/* Títulos y etiquetas */
h2 {
    color: #4e73df;
    font-weight: bold;
}

label {
    font-weight: bold;
    color: #333;
}

/* Inputs y textarea */
.form-control {
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
    transition: all 0.3s ease-in-out;
}

.form-control:focus {
    border-color: #4e73df;
    box-shadow: 0px 0px 8px rgba(78, 115, 223, 0.5);
    outline: none;
}

/* Botones */
.btn {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    color: white;
}

.btn-secondary {
    background-color: #6c757d;
    border: none;
}

.btn-secondary:hover {
    background-color: #5a6268;
    box-shadow: 0px 4px 12px rgba(90, 98, 104, 0.4);
}

.btn-success {
    background-color: #28a745;
    border: none;
}

.btn-success:hover {
    background-color: #218838;
    box-shadow: 0px 4px 12px rgba(40, 167, 69, 0.4);
}

/* Espaciado entre botones */
.me-3 {
    margin-right: 15px;
}
</style>

      
      <script src="<?php echo BASE_URL ?>views/js/functions_persona.js"></script>