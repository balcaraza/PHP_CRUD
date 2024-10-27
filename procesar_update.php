<?php
include_once 'conexion.php';
$nombre_recibido = $_POST["name"];
$puesto_recibido = $_POST["title"];
$id_recibido = $_POST["id"];

$sql = "UPDATE datos SET nombre = '$nombre_recibido', puesto = '$puesto_recibido' WHERE id = $id_recibido";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <header>
    <div class="header-left">
      <h1>Título de la Página</h1>
    </div>
    <div class="header-right">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="read.php">Contactos</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section class="container mt-5">
    <?php
      if ($conn->query($sql)) {

      ?>

<div class="alert alert-primary" role="alert">
          Operacion correcta registro guardado
        </div>
        <a href='read.php' class="btn btn-secondary mt-3">
          Volver
        </a>
      
      <?php
        
      } else {
        echo "<h2>No se puedo actualizar...</h2>";
      }
      ?>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>