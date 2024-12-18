
<form action="" class="form-container shadow" id="frmActualizar">
    <h2 class="text-center mb-4">Actualizar Categoría</h2>

    <!-- Nombre -->
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la categoría" required>
    </div>

    <!-- Detalle -->
    <div class="form-group">
        <label for="detalle">Detalle</label>
        <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Ingrese el detalle de la categoría" required>
    </div>
    <div class="text-center mt-4">
    <!-- Botón para regresar al panel -->
    <a href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-secondary btn-lg me-3">
        <i class="fas fa-arrow-left"></i> Regresar
    </a>

     <div>
     <button type="button" class="btn btn-success"
     onclick="actualizar_categoria();">actualizar</button>
</div>
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

/* Inputs */
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
<script src="<?php echo BASE_URL?>views/js/functions_categoria.js"></script>
<script> listar_categorias();</script>

    
</form>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
<script>
    //http://localhost/venta_mary/editar-producto/1
    //captura lo que viene en el link     se captura la posicion de ese valor
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_p);
</script>

