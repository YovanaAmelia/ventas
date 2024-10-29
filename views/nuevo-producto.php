<form action="" class="" id="frmRegistrar">  

<div>
        <label for=""> Codigo </label> <br>
            <input type="number" placeholder="" id="codigo" name="codigo"class="form-control"><br>
    </div>
    <div>
        <label for=""> Nombre </label><br>
            <input type="text" placeholder="" id="nombre" name="nombre"class="form-control"><br>
    </div>
    <div>
        <label for=""> Detalle </label><br>
            <input type="text" placeholder=""id="detalle" name="detalle"class="form-control"><br>
    </div>
    <div>
        <label for=""> Precio </label><br>
            <input type="text" placeholder="" id="precio" name="precio"class="form-control"><br>
    </div>
    <div>
        <label for=""> Stock Inicio </label><br>
            <input type="number" placeholder=""id="stock" name="stock"><br>
    </div>
    <div>
    <label for=""> Categoria:</label><br>
   <select type="number"  class="form-control" required id="idcategoria"
        required>
        <option value="">Seleccione</option>
        
    </select>
        </div>
    <div>
        <label for=""> Imagen </label><br>
            <input type="text" placeholder=""id="imagen" name="imagen"class="form-control"><br>
    </div>
    <div>
        <label for=""> Proveedor </label><br>
            <input type="number" placeholder=""id="proveedor" name="proveedor" class="form-control"><br>
    </div> <br>
     <div>
     <button type="button" class="btn btn-success"
     onclick="registrar_producto();">registrar</button>
</div>
</form>
   
<script src="<?php echo BASE_URL?>views/js/functions_producto.js"></script>
<script> listar_categorias();</script>

