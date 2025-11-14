<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Zoológico</title>
    
    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Un fondo gris claro para la página */
        body {
            background-color: #f8f9fa;
        }
        
        /* * *** ESTA ES LA CORRECCIÓN ***
         * Se pone @@yield para que Blade ignore el @ y lo trate
         * como texto normal de CSS, en lugar de un comando.
         */
        /* Contenedor principal para el contenido de @@yield */
        .content-wrapper {
            background-color: #ffffff; /* Fondo blanco para el contenido */
            border-radius: 0.5rem; /* Bordes redondeados */
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* Sombra sutil */
            padding: 2rem; /* Más espaciado interno */
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>

    <!-- 1. Navbar rediseñado: Ligero, con sombra y centrado -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid"> <!-- Centra el contenido del navbar -->
            <a class="navbar-brand" href="{{ route('reporteAnimales') }}">
                <strong>Zoológico</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('reporteAnimales') }}">Reporte de Animales
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Contenido principal envuelto en un contenedor y la clase de tarjeta -->
    <main class="container">
        <div class="content-wrapper">
            <!-- Aquí es donde se "inyecta" tu código de reportejoel.blade.php -->
            @yield('contenido')
        </div>
    </main>

    <!-- 3. Footer simple -->
    <footer class="text-center text-muted py-4">
        <p>&copy; {{ date('Y') }} Examen Joel. Todos los derechos reservados.</p>
    </footer>

    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>