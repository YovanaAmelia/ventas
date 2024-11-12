<form action="" class="" id="frmRegistrar"> 
<div>
<label for="id_producto">id_producto</label><br>
<input type="number" id="id_producto" name="id_producto" required>
</div>
<br>
<div>
<label for="cantidad">cantidad</label><br>
<input type="number" id="cantidad" name="cantidad" required>
</div>
<br>
<div>
<label for="precio">precio</label><br>
<input type="number" step="0.01" id="precio" name="precio" required>
</div>
<br>
<div>
<label for="id_trabajador">id_trabajador</label><br>
<input type="number" id="id_trabajador" name="id_trabajador" required>
</div>
<div>
     <button type="button" class="btn btn-success"
     onclick="registrar_compras();">registrar</button>
</div>
</form>
   
<script src="<?php echo BASE_URL?>views/js/functions_compras.js"></script>

