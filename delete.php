<?php
    $id_eliminar = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ejemplo de un archivo index.html con buenas prácticas" />
    <meta name="keywords" content="HTML, ejemplo, mejores prácticas" />
    <title>Crear contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
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
        <section>
            <h1>Crear registro</h1>
        </section>

        <div class="container mt-5">
           <h2>Esta seguro que desea borrar el registro #1?</h2>
           <a href="procesar_delete.php?id=<?php echo $id_eliminar ?>" class="btn btn-success btn-sm">
            SI
          </a>
          <a href='read.php' class="btn btn-success btn-sm">
            NO
          </a>
        </div>
    </main>

    <footer>
    <p>&copy; 2024. Balcaraza Industries.Todos los derechos reservados.</p>
  </footer>
</body>

</html>