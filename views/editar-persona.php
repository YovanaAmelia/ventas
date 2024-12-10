<form action="" class="" id="frmActualizar"> 
<div>
<label for="">nro_identidad:</label><br>
   <select type="number"  class="form-control" required id="nro_identidad" name="nro_identidad" required>
        <option value="">Seleccione</option>
    </select>
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
<div>
<label for="rol">rol</label><br>
<input type="text" id="rol" name="rol" required><br>
<br>
</div>
<div>
<label for="password">password</label><br>
<input type="password" id="password" name="password" required><br>
<br>
</div>
<div>
<label for="estado">estado</label><br>
<input type="number" id="estado" name="estado" required><br>
<br>
</div>
<div>
<label for="fecha_reg">fecha_reg</label><br>
<input type="datetime-local" id="fecha_reg" name="fecha_reg" required><br>
<br>
</div>

<div>
<button type="button" class="btn btn-success"
onclick="actualizar_Persona(id_p);">actualizar</button>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>
<script> listar_persona();</script>
<script>
    //http://localhost/ventas/editar-producto/4
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
    ver_persona(id_p);
</script>