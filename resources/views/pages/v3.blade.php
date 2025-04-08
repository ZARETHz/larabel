
@extends('plantilla')

@section('contenido')
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-3">🌟 Las Estrellas: Cuerpos Celestes Brillantes</h1>
                <p class="lead">Descubre el fascinante mundo de las estrellas, esos cuerpos celestes que iluminan nuestras noches.</p>
            </div>
        </div>

        <!-- Imagen Destacada -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtXAfLcZ88rY1t4j9MtFgoDzduCmpmMT7KWg&s" alt="Imagen de Estrellas" class="img-fluid rounded shadow-lg">
            </div>
        </div>

        <!-- Sección de Información -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>⭐ Tipos de Estrellas</h4>
                        <p>Las estrellas varían en tamaño, color y temperatura. Algunas son enanas rojas, mientras que otras son supergigantes azules.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌌 Vida Estelar</h4>
                        <p>Las estrellas pasan por diferentes fases durante su vida, desde su formación hasta su muerte, que puede resultar en supernovas o agujeros negros.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🔭 Observación Estelar</h4>
                        <p>La observación de estrellas ha sido una práctica desde la antigüedad, y hoy en día, los telescopios espaciales nos permiten estudiar su evolución a gran escala.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Datos sobre las Estrellas -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">📊 Datos Curiosos sobre las Estrellas</h2>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Atributo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Edad Promedio</td>
                            <td>10 mil millones de años</td>
                        </tr>
                        <tr>
                            <td>Distancia a la Tierra</td>
                            <td>Varía entre 4.2 años luz (Proxima Centauri) hasta más de 10 mil millones de años luz</td>
                        </tr>
                        <tr>
                            <td>Temperatura en la Superficie</td>
                            <td>3000°C - 30,000°C dependiendo del tipo de estrella</td>
                        </tr>
                        <tr>
                            <td>Composición</td>
                            <td>Principalmente hidrógeno y helio</td>
                        </tr>
                        <tr>
                            <td>Estrella más cercana</td>
                            <td>Proxima Centauri</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sección de Videos -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🎥 Videos sobre las Estrellas</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/search?q=estrellas&sca_esv=d81613467fe5f619&udm=7&biw=1366&bih=605&sxsrf=AHTn8zrEwVsi4ar_0QWTk5X4bTc8wY7kZA%3A1742882149503&ei=ZUXiZ6HDHv7hp84PuufT0Q0&ved=0ahUKEwjhiaD7xaSMAxX-8MkDHbrzNNoQ4dUDCBA&uact=5&oq=estrellas&gs_lp=EhZnd3Mtd2l6LW1vZGVsZXNzLXZpZGVvIgllc3RyZWxsYXMyDRAAGIAEGLEDGEMYigUyDRAAGIAEGLEDGEMYigUyChAAGIAEGBQYhwIyChAAGIAEGEMYigUyChAAGIAEGEMYigUyCBAAGIAEGLEDMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABEiNElAAWIwQcAF4AZABAJgB-AGgAekLqgEFMS44LjK4AQPIAQD4AQGYAgugAuMLqAIKwgIEECMYJ8ICBxAjGCcY6gLCAgoQIxi0BBgnGOoCwgILEAAYgAQYsQMYgwHCAg4QABiABBixAxiDARiKBZgDFZIHBTEuOC4yoAfPP7IHBTAuOC4yuAfOCw&sclient=gws-wiz-modeless-video#" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Galería de Imágenes -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🖼️ Galería de Imágenes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="data:image/jpeg;base64,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" alt="Imagen 1" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxSM4kmUgAht2pEp5Lhm4PiCOeHMLmT2-a2w&s" alt="Imagen 2" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxSM4kmUgAht2pEp5Lhm4PiCOeHMLmT2-a2w&s" alt="Imagen 3" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection