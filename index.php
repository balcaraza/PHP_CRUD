<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ejemplo de proyecto PHP" />
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <header>
    <div class="header-left">
      <h1>Crud con PHP</h1>
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
      <h1>Bienvenidos</h1>
      <p>
        Este es ptoyecto demostrativo de como crear un CRUD con PHP puro.
      </p>
      <p>En el navbar se encontrara el apartado de contactos donde se muestra una pequeña interfaz para poder agregar, eliminar y modificar un listado de contactos.</p>
      <p>Notas: para la ejecucion de este proyecto se necesita tener un entorno de desarrollo como Laragon con los siguientes requisitos:</p>
      <ul>
        <li>PHP Version 8.2.23 o superior</li>
        <li>Apache 2.4.62 o superior</li>
        <li>MySql 8.0 o superior</li>
      </ul>
    </section>

  </main>

  <footer>
    <p>&copy; 2024. Balcaraza Industries.Todos los derechos reservados.</p>
  </footer>

  <script src="scripts.js"></script>
</body>

</html>
