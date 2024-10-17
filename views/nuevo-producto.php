formulario de producto
<form action="" class="form-control">  
<div class="form-group">
    <form id="frmRegistrar">
        <label for=""> Codigo </label> <br>
            <input type="text" placeholder=""
            required id="Codigo" name="Codigo"><br>
    </div>
    <div>
        <label for=""> Nombre </label><br>
            <input type="text" placeholder=""
            required id="Nombre"  name="Nombre "><br>
    </div>
    <div>frmRegistrar
        <label for=""> Detalle </label><br>
            <input type="text" placeholder=""
            required id="Detalle" name="Detalle"><br>
    </div>
    <div>
        <label for=""> Precio </label><br>
            <input type="text" placeholder=""
            required id="Precio " name="Precio "><br>
    </div>
    <div>
       
        <label for=""> Stock Inicial  </label><br>
            <input type="text" placeholder=""
            required id="Stock Inicial" name="Stock Inicial"><br>
    </div>
    <div>
        <label for=""> categoria </label><br>
            <input type="number" placeholder=""
            required id="categoria" name="categoria"><br>
    </div>
    <div>
        <label for=""> Fecha Vencimiento </label><br>
            <input type="text" placeholder=""
            required id="Fecha Vencimiento" name="Fecha Vencimiento"><br>
    </div>
    <div>
        <label for=""> Imagen </label><br>
            <input type="text" placeholder="" 
            required id="Imagen" name="Imagen"><br>
    </div>
    <div>
        <label for=""> Proveedor </label><br>
            <input type="number" placeholder=""
            required id="Proveedor" name="Proveedor"><br>
    </div>
    <br>
   <button type="button" class="btn btn-success"
  onclick="registrar_producto();">registrar</button>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_producto.js"></script>

