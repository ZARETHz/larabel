@extends('plantilla')



@section('contenido')
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-3">🌙 La Luna: Nuestro Satélite Natural</h1>
                <p class="lead">Descubre los misterios y datos fascinantes sobre la Luna.</p>
            </div>
        </div>

        <!-- Imagen Destacada -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWSb81IFHaC_X4nSFN6V-FHR7-ntpHOFQqxg&s" alt="Imagen de la Luna" class="img-fluid rounded shadow-lg">
            </div>
        </div>

        <!-- Sección de Información -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌑 Fases de la Luna</h4>
                        <p>La Luna pasa por diferentes fases, desde la Luna Nueva hasta la Luna Llena.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌍 Influencia en la Tierra</h4>
                        <p>Regula las mareas y tiene impacto en la vida silvestre y los ciclos naturales.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🚀 Exploración Espacial</h4>
                        <p>Desde el Apolo 11 hasta misiones actuales, la Luna sigue siendo un objetivo clave.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Datos sobre la Luna -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">📊 Datos Curiosos sobre la Luna</h2>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Atributo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diámetro</td>
                            <td>3,474 km</td>
                        </tr>
                        <tr>
                            <td>Distancia a la Tierra</td>
                            <td>384,400 km</td>
                        </tr>
                        <tr>
                            <td>Duración de un día lunar</td>
                            <td>27.3 días terrestres</td>
                        </tr>
                        <tr>
                            <td>Gravedad</td>
                            <td>1.62 m/s² (1/6 de la Tierra)</td>
                        </tr>
                        <tr>
                            <td>Primera misión tripulada</td>
                            <td>Apolo 11 (1969)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sección de Videos -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🎥 Videos sobre la Luna</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://youtu.be/meCm9vBfsOQ" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Galería de Imágenes -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🖼️ Galería de Imágenes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWSb81IFHaC_X4nSFN6V-FHR7-ntpHOFQqxg&s" alt="Imagen 1" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPOFJjKOqwFFVF3CyY9oghGL5gFGUedoLR9Q&s" alt="Imagen 2" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRglQ66gK80DI--WcNLKbghzsJJCo_fVNZONg&s" alt="Imagen 3" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection