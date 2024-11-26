<form action="" class="" id="frmRegistrar">  


    <div>
        <label for=""> Nombre </label><br>
            <input type="text" placeholder="" id="nombre" name="nombre"class="form-control"><br>
    </div>
    <div>
        <label for=""> Detalle </label><br>
            <input type="text" placeholder=""id="detalle" name="detalle"class="form-control"><br>
    </div>
    
     <div>
     <button type="button" class="btn btn-success"  onclick="registrar_categoria();">registrar</button>
</div>
</form>
   
<script src="<?php echo BASE_URL?>views/js/functions_categoria.js"></script>