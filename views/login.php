<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: pink;
    }

    .login-container {
      background-color: rgb(236, 161, 220);
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .login-container .user-image {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-container .user-image img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
    }

    .login-container .form-group {
      margin-bottom: 20px;
    }

    .login-container .form-control {
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 10px 15px;
      font-size: 16px;
    }

    .login-container .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 5px;
      font-size: 16px;
      padding: 10px 20px;
    }

    .login-container .btn-primary:hover {
      background-color: #ec0606;
      border-color: #b3000f;
    }

    .login-container .forgot-password {
      text-align: right;
      margin-top: 10px;
    }

    .login-container .forgot-password a {
      color: #181616;
      text-decoration: none;
    }

    .login-container .forgot-password a:hover {
      text-decoration: underline;
    }
  </style>
   <script> const base_url ='<?php echo BASE_URL;?>';</script>
</head>
<body>
  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <div class="user-image">
      <img src="./views/plantilla/img/icono3.png" alt="User Image">
    </div>
    <form id="frm_iniciar_sesion">
      <div class="form-group">
        <label for="usuario">usuario:</label>
        <input type="usuario" class="form-control" id="usuario" placeholder="Ingrese su usuario" required>
      </div>
      <div class="form-group">
        <label for="password">contraseña:</label>
        <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña"required>
      </div>
      <div class="form-group forgot-password">
        <a href="#">¿Olvidó la contraseña?</a>
      </div>
      <button type="submit" class="btn btn-primary btn-block">iniciar sesión</button>
     
   
     
    </form>
  </div>
  <script src="<?php echo BASE_URL?>views/js/functions_login.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>