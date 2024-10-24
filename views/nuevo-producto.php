<form action="" class="" id="frmRegistrar">  

<div>
        <label for=""> Codigo </label> <br>
            <input type="number" placeholder="" id="codigo" name="codigo"><br>
    </div>
    <div>
        <label for=""> Nombre </label><br>
            <input type="text" placeholder="" id="nombre" name="nombre"><br>
    </div>
    <div>
        <label for=""> Detalle </label><br>
            <input type="text" placeholder=""id="detalle" name="detalle"><br>
    </div>
    <div>
        <label for=""> Precio </label><br>
            <input type="text" placeholder="" id="precio" name="precio"><br>
    </div>
    <div>
        <label for=""> Stock Inicio </label><br>
            <input type="number" placeholder=""id="stock" name="stock"><br>
    </div>
    <div>
        <label for=""> Categoria </label><br>
            <input type="number" placeholder="" id="categoria" name="categoria"><br>
    </div>
    <div>
        <label for=""> Imagen </label><br>
            <input type="text" placeholder=""id="imagen" name="imagen"><br>
    </div>
    <div>
        <label for=""> Proveedor </label><br>
            <input type="number" placeholder=""id="proveedor" name="proveedor"><br>
    </div> <br>
     <div>
     <button type="button" class="btn btn-success"
     onclick="registrar_producto();">registrar</button>
</div>
</form>
   
<script src="<?php echo BASE_URL?>views/js/functions_producto.js"></script>
<script> listar_categorias();</script>

