
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid"></div>
 <nav class="navbar navbar-expand-lg" style="background-color:pink;" >

    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./views/plantilla/img/logo2 - copia.png" alt="" width="70" height="64">
          </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            
                            <a href="<?php echo BASE_URL ?>login" class="btn btn-success"style="background:pink">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="detalleproduc.html" class="btn btn-success"style="background:pink">Productos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Deportivos</a></li>
                                <li><a class="dropdown-item" href="#">Zapatillas</a></li>
                                <li><a class="dropdown-item" href="#">Botines</a></li>
                                <li><a class="dropdown-item" href="#">Tacos</a></li>
                                <li><a class="dropdown-item" href="#">Valerinas y Sandalias</a></li>
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                               Categoria
                               
                            </a>
                            <ul class="dropdown-menu">
                               
                               
                                <a href="<?php echo BASE_URL ?>Damas" class="btn btn-primary"style="background:pink">Damas</a>
                                <a href="<?php echo BASE_URL ?>Caballeros" class="btn btn-primary"style="background:pink">Caballeros</a>
                                <a href="Niñas.html" class="btn btn-primary"style="background:pink">Niñas</a><br>
                                <a href="Niños.html" class="btn btn-primary"style="background:pink">Niños</a>
                              
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex col-6" role="Buscar">
                        <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                      </form>
                      <div class="col-2">
                </div>
            </div>
        </nav>