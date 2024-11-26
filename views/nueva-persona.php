<form action="" class="" id="frmRegistrar"> 
<div>
<label for="">nro_identidad:</label><br>
   <input type="number"  class="form-control" required id="nro_identidad" name="nro_identidad" required>

<br>
<div>
<label for="razon_social">razon_social</label><br>
<input type="text"  class="form-control" required id="razon_social" name="razon_social" required><br>
<br>
</div>
<div>
<label for="telefono">telefono</label><br>
<input type="tel"  class="form-control" required id="telefono" name="telefono" required><br>
<br>
</div>
<div>
<label for="correo">correo</label><br>
<input type="email"  class="form-control" required  id="correo" name="correo" required><br>
<br>
</div>
<div>
<label for="departamento">departamento</label><br>
<input type="text"  class="form-control" required id="departamento" name="departamento" required><br>
<br>
</div>
<div>
<label for="provincia">provincia</label><br>
<input type="text"  class="form-control" required id="provincia" name="provincia" required><br>
<br>
</div>
<div>
<label for="distrito">distrito</label><br>
<input type="text"  class="form-control" required id="distrito" name="distrito" required><br>
<br>
</div>
<div>
<label for="cod_postal">cod_postal</label><br>
<input type="text"  class="form-control" required id="cod_postal" name="cod_postal" required><br>
<br>
</div>
<div>
<label for="direccion">direccion</label><br>
<textarea id="direccion"  class="form-control" required name="direccion" required></textarea><br>
<br>
</div>
<div>
<label for="rol">rol</label><br>
<input type="text"  class="form-control" required id="rol" name="rol" required><br>
<br>
</div>

<div>
     <button type="button" class="btn btn-success" onclick="registrar_persona();">registrar</button>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>
