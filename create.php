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
            <h2>Agregar un contacto</h2>
            <form action="procesar_create.php" method="post">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id" id="id" placeholder="XX" disabled/>
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="John Dere" />
                </div>
                <div class="form-group">
                    <label for="title">Puesto</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Empleado" />
                </div>
                <br>
                <input type="submit" value="Guardar" class="btn btn-primary mt-3">
            </form>
        </div>
    </main>

    <footer>
    <p>&copy; 2024. Balcaraza Industries.Todos los derechos reservados.</p>
  </footer>
</body>

</html>