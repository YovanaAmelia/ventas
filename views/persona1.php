<div class="col-12">
    <table class="table table-modern">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nro Identidad</th>
                <th>Razón Social</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Provincia</th>
                <th>Distrito</th>
                <th>Código Postal</th>
                <th>Dirección</th>
                <th>Rol</th>
                <th>Password</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_persona1">
            <tr>
                <td>1</td>
                <td>01</td>
                <td>Maestra</td>
                <td>97812546</td>
                <td>yovana@gmail.com</td>
                <td>Ayacucho</td>
                <td>Huanta</td>
                <td>Huanta</td>
                <td>001</td>
                <td>Jr. Razuhillca</td>
                <td>Estudiante</td>
                <td>000000</td>
                <td>
                    <button type="button" class="btn btn-edit">Editar</button>
                    <button type="button" class="btn btn-delete">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

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

<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>