<div class="col-12">
<table border="1"style="width: 100%;">
    
    <thead>

    </thead>
        <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th>detalle</th>
            <th>acciones</th>
        </tr>
        <tbody id="tbl_categoria1">
        <tr>
            <td>1</td>
            <td>tacos</td>
            <td>rosa</td>
            <td><button type="button" class="btn btn-success">eliminar  <button type="button" class="btn btn-success">editar</button></button></td>
           
        </tr>
     
        <style>
/* Estilos generales para la tabla */
.table-modern {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Encabezados */
.table-modern thead th {
    background-color: #4e73df;
    color: white;
    text-align: left;
    padding: 12px;
    font-size: 14px;
    text-transform: uppercase;
}

/* Filas */
.table-modern tbody tr {
    border-bottom: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

.table-modern tbody tr:hover {
    background-color: #f1f1f1;
}

/* Celdas */
.table-modern td {
    padding: 10px;
    font-size: 14px;
    color: #333;
    text-align: left;
}

/* Botones */
.btn {
    border: none;
    border-radius: 5px;
    padding: 8px 12px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

/* Botón editar */
.btn-edit {
    background-color: #28a745;
    color: white;
}

.btn-edit:hover {
    background-color: #218838;
    box-shadow: 0px 4px 8px rgba(40, 167, 69, 0.4);
}

/* Botón eliminar */
.btn-delete {
    background-color: #dc3545;
    color: white;
}

.btn-delete:hover {
    background-color: #c82333;
    box-shadow: 0px 4px 8px rgba(220, 53, 69, 0.4);
}
</style>
        </tbody>
   
</table>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_categoria.js"></script>