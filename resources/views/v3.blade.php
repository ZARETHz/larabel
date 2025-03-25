<!-- <h1>hola mundo</h1> -->
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxSM4kmUgAht2pEp5Lhm4PiCOeHMLmT2-a2w&s" alt="Imagen de Estrellas" class="img-fluid rounded shadow-lg">
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
    </div>


    @endsection