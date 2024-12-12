<form action="" class="from-control" id="frmActualizar">
    <input type="hidden" name="id_producto" id="id_producto">
    <input type="hidden" name="img" id="img">
    <div class="mb-3">
        <label for="">Codigo: </label>
        <input type="text" id="codigo" name="codigo" class="form-control" disabled>
    </div>

    <!-- Nombre -->
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Ingrese el nombre" id="nombre" name="nombre" class="form-control" required>
    </div>

    <!-- Detalle -->
    <div class="form-group">
        <label for="detalle">Detalle</label>
        <input type="text" placeholder="Ingrese el detalle" id="detalle" name="detalle" class="form-control" required>
    </div>

    <!-- Precio -->
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" placeholder="Ingrese el precio" id="precio" name="precio" class="form-control" required>
    </div>

    <!-- Stock -->
    <div class="form-group">
        <label for="stock">Stock Inicio</label>
        <input type="number" placeholder="Ingrese el stock inicial" id="stock" name="stock" class="form-control" required>
    </div>

    <!-- Categoría -->
    <div class="form-group">
        <label for="idcategoria">Categoría</label>
        <select class="form-control" id="idcategoria" name="idcategoria" required>
            <option value="">Seleccione</option>
            <!-- Opciones dinámicas -->
        </select>
    </div>

    <!-- Imagen -->
    <div class="form-group">
        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen" class="form-control">
    </div>

    <!-- Proveedor -->
    <div class="form-group">
        <label for="Proveedor">Proveedor</label>
        <select class="form-control" id="Proveedor" name="Proveedor" required>
            <option value="">Seleccione</option>
            <!-- Opciones dinámicas -->
        </select>
    </div>

    <!-- Botón -->
    <div class="text-center mt-4">
    <!-- Botón para regresar al panel -->
    <a href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-secondary btn-lg me-3">
        <i class="fas fa-arrow-left"></i> Regresar
    </a>

    <!-- Botón para registrar producto -->
    <button type="button" class="btn btn-success btn-lg" onclick="actualizar_producto();">
        <i class="fas fa-check"></i> Registrar
    </button>
</div>
</form>

<style>
/* Formulario principal */
.form-container {
    max-width: 500px;
    margin: auto;
    padding: 20px 30px;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

/* Animación al pasar el cursor */
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

/* Inputs */
.form-control {
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
    transition: all 0.3s ease-in-out;
}

/* Efectos al interactuar con los inputs */
.form-control:focus {
    border-color: #4e73df;
    box-shadow: 0px 0px 8px rgba(78, 115, 223, 0.5);
    outline: none;
}

/* Botón de registro */
.btn-success {
    background: #1cc88a;
    border: none;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    transition: all 0.3s ease-in-out;
}

.btn-success:hover {
    background: #17a673;
    box-shadow: 0px 5px 15px rgba(23, 166, 115, 0.4);
    transform: translateY(-2px);
}

/* Ajustes para dispositivos móviles */
@media (max-width: 576px) {
    .form-container {
        padding: 15px 20px;
    }
    .btn-success {
        font-size: 14px;
        padding: 8px 15px;
    }
}
</style>
<script src="<?php echo BASE_URL?>views/js/functions_producto.js"></script>
<script> listar_categorias();</script>
<script> listar_Proveedor();</script>
<script>
    //http://localhost/ventas/editar-producto/4
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
    ver_producto(id_p);
</script>