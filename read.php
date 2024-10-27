<?php
//incluir conexion y consulta a base de datos
include_once 'conexion.php';
$sql = "SELECT * FROM datos";
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Ejemplo de un archivo index.html con buenas prácticas" />
  <meta name="keywords" content="HTML, ejemplo, mejores prácticas" />
  <title>Contactos</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

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
    <section id="inicio">
      <h1>Bienvenidos a Nuestro Sitio</h1>
      <p>
        Este es un ejemplo de cómo estructurar un archivo index.html con
        buenas prácticas.
      </p>
    </section>

    <div class="container mt-5">
      <a href="create.php" class="btn btn-primary mb-3">Agregar Contacto</a>

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()){

            

          ?>

            <!--Un registro -->
            <tr>

              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["nombre"]; ?></td>
              <td><?php echo $row["puesto"]; ?></td>
              <td>
                <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success btn-sm">
                  Editar
                </a>
                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm">
                  Eliminar
                </a>
              </td>
            </tr>
          <?php
              }
          } else{
            echo "<h2>No hay registros</h2>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer>
    <p>&copy; 2024. Balcaraza Industries.Todos los derechos reservados.</p>
  </footer>
</body>

</html>