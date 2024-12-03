<form action="" class="" id="frmRegistrar">  

<div>
        <label for=""> Codigo </label> <br>
            <input type="text" placeholder="" id="codigo" name="codigo"class="form-control"><br>
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
    <label for=""> Categoria:</label><br>
   <select type="number"  class="form-control" required id="idcategoria" name="idcategoria"
        required>
        <option value="">Seleccione</option>
        
    </select>
        </div>
    <div>
        <label for=""> Imagen </label><br>
            <input type="file" placeholder=""id="imagen" name="imagen"class="form-control"><br>
    </div>
    <div>
    <div>
    <label for=""> Proveedor:</label><br>
   <select type="number"  class="form-control" required id="Proveedor" name="Proveedor" required>
        <option value="">Seleccione</option>
    </select>
        </div>
    </div> <br>
     <div>
     <button type="button" class="btn btn-success"
     onclick="registrar_producto();">registrar</button>
</div>
</form>
   
<script src="<?php echo BASE_URL?>views/js/functions_producto.js"></script>
<script> listar_categorias();</script>
<script> listar_Proveedor();</script>
<script>
    //http://localhost/ventas/editar-producto/4
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
    ver_producto(id_p);
</script>