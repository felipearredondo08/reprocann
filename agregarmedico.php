<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>Agregar medico</title>
</head>
<body>

<header>
    <div id="barranavegacion">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
         
             <img id="logoCBD" src="images/logoCBD.png">
            
            
              <a class="navbar-brand" href="index.php"><h1 id="textoprincipal">Infocann</h1>                
              </a>
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="lista.php">Listado de medicos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="reglamentacion.html">Reglamentacion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="noticias.html">Noticias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contacto.html">Contacto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://reprocann.msal.gob.ar/auth" target="_blank">reprocann.msal.gob.ar</a>
                  </li>
                 
                
                </ul>
                
              </div>
            </div>
          </nav>
    </div>
  </header>

 <h2 id="h2medicos">Agregar nuevo medico</h2>

     <div class="container-fluid">

      <form  action="insert_user.php" method="POST" class="formulariomedicos">
  
  <div class="mb-3">
    <label  class="form-label">Apellido</label>
    <input type="text" class="form-control"  name="lastname" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Nombre</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Especialidad</label>
    <input type="text" class="form-control" name="speciality" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Provincia</label>
    <input type="text" class="form-control" name="state" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Telefono</label>
    <input type="text" class="form-control" name="phone" >
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

      </div>

      <footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Inicio</a></li>
    <li class="nav-item"><a href="lista.php" class="nav-link px-2 text-muted">Listado de Medicos</a></li>
    <li class="nav-item"><a href="reglamentacion.html" class="nav-link px-2 text-muted">Reglamentacion</a></li>
    <li class="nav-item"><a href="noticias.html" class="nav-link px-2 text-muted">Noticias</a></li>
    <li class="nav-item"><a href="contacto.html" class="nav-link px-2 text-muted">Contacto</a></li>
    <li class="nav-item"><a href="https://reprocann.msal.gob.ar/auth" class="nav-link px-2 text-muted">reprocann.msal.gob.ar</a></li>
  </ul>
  <p class="text-center text-muted">© 2023 Felipe Arredondo</p>
</footer>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>