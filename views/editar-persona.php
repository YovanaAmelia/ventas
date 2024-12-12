<<<<<<< HEAD
<form action="" class="form-container shadow" id="frmRegistrar">
    <h2 class="text-center mb-4">Registro de Persona</h2>
=======
<form action="" class="" id="frmActualizar"> 
<div>
<label for="">nro_identidad:</label><br>
   <input type="number"  class="form-control" required id="nro_identidad" name="nro_identidad" required>
<br>
<div>
<label for="razon_social">razon_social</label><br>
<input type="text" id="razon_social" name="razon_social" required><br>
<br>
</div>
<div>
<label for="telefono">telefono</label><br>
<input type="tel" id="telefono" name="telefono" required><br>
<br>
</div>
<div>
<label for="correo">correo</label><br>
<input type="email" id="correo" name="correo" required><br>
<br>
</div>
<div>
<label for="departamento">departamento</label><br>
<input type="text" id="departamento" name="departamento" required><br>
<br>
</div>
<div>
<label for="provincia">provincia</label><br>
<input type="text" id="provincia" name="provincia" required><br>
<br>
</div>
<div>
<label for="distrito">distrito</label><br>
<input type="text" id="distrito" name="distrito" required><br>
<br>
</div>
<div>
<label for="cod_postal">cod_postal</label><br>
<input type="text" id="cod_postal" name="cod_postal" required><br>
<br>
</div>
<div>
<label for="direccion">direccion</label><br>
<textarea id="direccion" name="direccion" required></textarea><br>
<br>
</div>
<div class="mb-3">
    <label for="rol">Rol:</label>
    <select id="rol" name="rol" class="form-control" required>
        <option value="" disabled selected>Seleccione un rol</option>
        <option value="proveedor">Proveedor</option>
        <option value="trabajador">Trabajador</option>
        <option value="trabajador">Adimistrador</option>
    </select>
</div>
<div>
<label for="password">password</label><br>
<input type="password" id="password" name="password" required><br>
<br>
</div>
<div>
<label for="fecha_reg">fecha_reg</label><br>
<input type="datetime-local" id="fecha_reg" name="fecha_reg" required><br>
<br>
</div>
>>>>>>> c3f765f05265c02dd23501c9a40163ee66feb18e

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
<script>
    //http://localhost/ventas/editar-producto/4
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
    ver_persona(id_p);
</script>