<!-- <h1>hola mundo</h1> -->
@extends('plantilla')
    @section('contenido')
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-3">🌌 Las Galaxias: El Universo en Expansión</h1>
                <p class="lead">Explora las vastas galaxias que forman el universo, desde nuestra propia Vía Láctea hasta los rincones más lejanos del cosmos.</p>
            </div>
        </div>

        <!-- Imagen Destacada -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUrk-JfmbtszGBosxf1yyMBhJxjPif6DXQH04s&usqp=CAU" alt="Imagen de Galaxias" class="img-fluid rounded shadow-lg">
            </div>
        </div>

        <!-- Sección de Información -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌠 Tipos de Galaxias</h4>
                        <p>Las galaxias se clasifican en diferentes tipos: espirales, elípticas e irregulares. Cada tipo tiene sus propias características únicas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>💫 La Vía Láctea</h4>
                        <p>La Vía Láctea es nuestra galaxia. Es una galaxia espiral que alberga más de 100 mil millones de estrellas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🔭 Observación de Galaxias</h4>
                        <p>El telescopio Hubble ha permitido observar galaxias distantes, revelando secretos sobre su formación y evolución.</p>
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
                            <td>Edad Promedio</td>
                            <td>10 mil millones de años</td>
                        </tr>
                        <tr>
                            <td>Distancia a la Tierra</td>
                            <td>De 100,000 a más de 13 mil millones de años luz</td>
                        </tr>
                        <tr>
                            <td>Estrellas en la Vía Láctea</td>
                            <td>Más de 100 mil millones</td>
                        </tr>
                        <tr>
                            <td>Galaxia más cercana</td>
                            <td>La Galaxia de Andrómeda</td>
                        </tr>
                        <tr>
                            <td>Número estimado de galaxias</td>
                            <td>Más de 100 mil millones en el universo observable</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection