<html>
 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bimbo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('inicio')}}">Inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
       
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalogos</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('altaempleado')}}">Alta Empleados</a>
            <a class="dropdown-item" href="{{route('reporteempleados')}}">Reporte empleados</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Otro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cerrar Sesion</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

 @yield('contenido')

</body>
</html>





