
@extends('plantilla')

@section('contenido')
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-3">🌌 Las Galaxias: Universos en Miniatura</h1>
                <p class="lead">Explora la inmensidad y el misterio de las galaxias, esos vastos sistemas de estrellas, planetas y materia oscura.</p>
            </div>
        </div>

        <!-- Imagen Destacada -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPOFJjKOqwFFVF3CyY9oghGL5gFGUedoLR9Q&s" alt="Imagen de Galaxias" class="img-fluid rounded shadow-lg">
            </div>
        </div>

        <!-- Sección de Información -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌠 Tipos de Galaxias</h4>
                        <p>Las galaxias se clasifican en espirales, elípticas e irregulares, cada una con características únicas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌌 Estructura Galáctica</h4>
                        <p>Las galaxias están formadas por estrellas, planetas, gas, polvo y materia oscura, organizados en estructuras complejas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🔭 Observación Galáctica</h4>
                        <p>Los telescopios modernos nos permiten observar galaxias a millones de años luz de distancia, revelando su historia y evolución.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Datos sobre las Galaxias -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">📊 Datos Curiosos sobre las Galaxias</h2>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Atributo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diámetro Promedio</td>
                            <td>100,000 años luz</td>
                        </tr>
                        <tr>
                            <td>Distancia a la Galaxia más cercana</td>
                            <td>2.5 millones de años luz (Andrómeda)</td>
                        </tr>
                        <tr>
                            <td>Número de Estrellas</td>
                            <td>100 mil millones a 1 billón</td>
                        </tr>
                        <tr>
                            <td>Composición</td>
                            <td>Estrellas, planetas, gas, polvo y materia oscura</td>
                        </tr>
                        <tr>
                            <td>Edad</td>
                            <td>13.5 mil millones de años</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sección de Videos -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🎥 Videos sobre las Galaxias</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://youtu.be/ld5ecZuHEgA" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Galería de Imágenes -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🖼️ Galería de Imágenes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPOFJjKOqwFFVF3CyY9oghGL5gFGUedoLR9Q&s" alt="Imagen 1" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPOFJjKOqwFFVF3CyY9oghGL5gFGUedoLR9Q&s" alt="Imagen 2" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPOFJjKOqwFFVF3CyY9oghGL5gFGUedoLR9Q&s" alt="Imagen 3" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection