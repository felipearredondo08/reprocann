
<?php
include('connection.php');

$con = connection(); 

$sql = "SELECT * FROM Medicos";
$query =mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>lista</title>
    
    </head>
<body>
  <header>
    <div id="barranavegacion">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
         
             <img id="logoCBD" src="images/logoCBD.png" href="index.html">
            
            
              <a class="navbar-brand" href="index.html"><h1 id="textoprincipal">Infocann</h1>                
              </a>
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.html">Inicio</a>
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
    
      <div class="contenedormedico">
        <img id="fondoletras"src="images/medico.jpg" />
        <div class="centradomedico">
          <h1 class="titulo">Profesionales que acompañan tratamientos con Cannabis medicinal.</h1>
        </div>
      </div>

      <div class="d-flex justify-content-center">

      <button type="button" class="btn btn-outline-primary btn-lg mt-3 mb-3" ><a href="agregarmedico.php">Agregar nuevo medico</button>

      </div>

     

         

  <div class="container-fluid">

    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Provincia</th>
            <th>Telefono</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php

          while($row = mysqli_fetch_array($query)):

          ?>
          <tr>
            <th> <?= $row['ID'] ?>  </th>
            <td> <?= $row['Apellido'] ?> </td>
            <td> <?= $row['Nombre'] ?> </td>
            <td> <?= $row['Especialidad'] ?> </td>
            <td> <?= $row['Provincia'] ?> </td>
            <td> <?= $row['Telefono'] ?> </td>


            <td><a href="update.php?id=<?= $row['ID'] ?>">Editar</td>
            <td><a href="delete_user.php?id=<?= $row['ID'] ?>">Eliminar</td>
          </tr>

          <?php

          endwhile;

          ?>
          
        </tbody>
      </table>

</div>


 
             

    
    


<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Inicio</a></li>
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