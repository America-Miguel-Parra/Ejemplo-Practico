<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SISTEMA ESCOLAR</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="icono.png">
</head>
<body class="body-home">
  <div class="black-fill"><br/>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light"id="homeNav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
          <ul class="navbar-nav me-right mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio</a>
            </li>
          </ul>
    </nav>
    <section class="Welcome-text d-flex justify-content-center align-items-center flex-column">
      <h4>SISTEMA ESCOLAR</h4>
    </section>
    <section id="about"class="d-flex justify-content-center align-items-center flex-column">
      <div class="card mb-3 card-1">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="icono.png" class="img-fluid rounded-start" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Acerca de Nosotros</h5>
			        <p class="card-text">Sistema escolar encargado de controlar la información de los docentes y estudiantes.</p>
			        <p class="card-text"><small class="text-muted">Universitario</small></p>
			      </div>
			    </div>
			  </div>
			</div>
    </section>

<div class="body-home">
  <div class="d-flex justify-content-center align-items-center flex-column">
    <form class="login"method="post"action="req/login.php"> 
      <div class="text-center">
        <img src="icono.png"width="100">
      </div>
      <h3>LOGIN</h3>
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?=$_GET['error']?>
        </div>
        <?php } ?>
        <div class="mb-3">
          <label class="form-label">Numero de control</label>
          <input type="text" class="form-control"name="uname">
        </div>
        
        <div class="mb-3">
          <label class="form-label">NIP</label>
          <input type="password" class="form-control"name="pass">
        </div>
        <div class="mb-3">
          <label class="form-label">Tipo de usuario</label>
          <select class="form-control"name="role">
            <option value="1">administrador</option>
		    	  <option value="2">estudiantes</option>
		    	  <option value="3">docentes</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form> <br><br>         
        <div class="text-center text-light">
        	Copyright &copy; 2022 Sistema Escolar. Reservados todos los derechos.
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
