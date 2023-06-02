<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<nav class="navbar navbar-expand-lg bg-light shadow">
<div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/inventario/">Inventario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Equipos
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="/inventario/equipos/listado_equipos.php">Listado de equipos</a></li>
            <li><a class="dropdown-item" href="/inventario/equipos/registrar_equipo.php">Registrar equipo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/inventario/equipos/listado_notebook.php">Notebooks</a></li>
            <li><a class="dropdown-item" href="/inventario/equipos/listado_calculadora.php">Calculadoras</a></li>
            <li><a class="dropdown-item" href="/inventario/equipos/listado_tablet.php">Tablets</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="/inventario/alumnos/listado_alumnos.php">Listado de alumnos</a></li>
            <li><a class="dropdown-item" href="/inventario/alumnos/registrar_alumno.php">Registrar Alumno</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Prestamos
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="/inventario/prestamos/listado_prestamos.php">Listado de Prestamos</a></li>  
            <li><a class="dropdown-item" href="/inventario/prestamos/consulta.php">Registrar prestamo</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Devolución
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="/inventario/devoluciones/listado_devolucion.php">Listado de Devoluciones</a></li>  
            <li><a class="dropdown-item" href="/inventario/devoluciones/consulta.php">Agregar Devolución</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
