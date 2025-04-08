<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>




  <!--   <h1>plantilla</h1> -->
    <section class="vh-100">
        @include('components/navbar')
        <div class="container mt-4">
            @yield('contenido')
        </div>

        <footer class="text-center mt-5 py-3 bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>Contacto</h5>
                <p>Email: contacto0@universoweb.com</p>
                <p>Tel: +34 123 456 789</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Síguenos</h5>
                <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Enlaces</h5>
                <a href="#" class="text-light d-block">Política de Privacidad</a>
                <a href="#" class="text-light d-block">Términos y Condiciones</a>
            </div>
        </div>
        <p class="mt-3">&copy; {{ date('Y') }} Universo Web. Todos los derechos reservados.</p>
    </div>
</footer>

    </section>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>