<div class="container" style="background-color: #f8f9fa; margin-top: 70px">
    <h1 class="text-center mt-5 mb-4" style="font-weight: bold; color: #4e73df;">Panel de Administración</h1>
    <div class="row justify-content-center">
        <!-- Usuario -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0">
                <div class="card-header text-white bg-primary text-center">
                    Persona
                </div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nueva-persona" class="btn btn-light btn-icon mb-2"><i class="fa fa-user-plus fa-2x text-primary"></i><br>Registrar Persona</a>
                    <a href="<?php BASE_URL;?>persona1" class="btn btn-light btn-icon"><i class="fas fa-users fa-2x text-primary"></i><br>Ver Persona</a>
                </div>
            </div>
        </div>

    
    

        <!-- Productos -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0">
                <div class="card-header text-white bg-warning text-center">
                    Productos
                </div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevo-producto" class="btn btn-light btn-icon mb-2"><i class="fa fa-box fa-2x text-warning"></i><br>Registrar Producto</a>
                    <a href="<?php BASE_URL;?>productos" class="btn btn-light btn-icon"><i class="fas fa-boxes fa-2x text-warning"></i><br>Ver Productos</a>
                </div>
            </div>
        </div>

        <!-- Categorías -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0">
                <div class="card-header text-white bg-danger text-center">
                    Categorías
                </div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevo-categoria" class="btn btn-light btn-icon mb-2"><i class="fa fa-tags fa-2x text-danger"></i><br>Registrar Categoría</a>
                    <a href="<?php BASE_URL;?>categoria1" class="btn btn-light btn-icon"><i class="fas fa-list fa-2x text-danger"></i><br>Ver Categorías</a>
                </div>
            </div>
        </div>

        <!-- Compras -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0">
                <div class="card-header text-white bg-secondary text-center">
                    Compras
                </div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevo-compras" class="btn btn-light btn-icon mb-2"><i class="fa fa-shopping-cart fa-2x text-secondary"></i><br>Registrar Compra</a>
                    <a href="<?php BASE_URL;?>compra1" class="btn btn-light btn-icon"><i class="fas fa-receipt fa-2x text-secondary"></i><br>Ver Compras</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* General styles */
.card {
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
}

.card-header {
    font-size: 1.2rem;
    font-weight: bold;
}

.btn-icon {
    display: inline-block;
    width: 100%;
    padding: 15px;
    text-align: center;
    font-size: 0.9rem;
    transition: background-color 0.3s, color 0.3s;
}

.btn-icon:hover {
    background-color: #f8f9fa;
    color: #333;
    box-shadow: inset 0px 0px 15px rgba(0, 0, 0, 0.1);
}

.text-primary {
    color: #4e73df !important;
}

.text-success {
    color: #1cc88a !important;
}

.text-info {
    color: #36b9cc !important;
}

.text-warning {
    color: #f6c23e !important;
}

.text-danger {
    color: #e74a3b !important;
}

.text-secondary {
    color: #858796 !important;
}
</style>
