<!-- <h1>hola mundo</h1> -->
@extends('plantilla')
    @section('contenido')


    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-3">☀️ El Sol: La Estrella de Nuestro Sistema Solar</h1>
                <p class="lead">Descubre los misterios y hechos fascinantes sobre el Sol.</p>
            </div>
        </div>

        <!-- Imagen Destacada -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWSb81IFHaC_X4nSFN6V-FHR7-ntpHOFQqxg&s" alt="Imagen del Sol" class="img-fluid rounded shadow-lg">
            </div>
        </div>

        <!-- Sección de Información -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌞 Características del Sol</h4>
                        <p>El Sol es una estrella de tipo espectral G2V que está compuesto principalmente de hidrógeno y helio.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌍 Impacto en la Tierra</h4>
                        <p>El Sol es esencial para la vida en la Tierra, ya que proporciona la luz y calor necesarios para sustentar la vida.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🚀 Exploración Solar</h4>
                        <p>Las misiones como la Parker Solar Probe nos están ayudando a conocer más sobre el Sol y su influencia en el sistema solar.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Datos sobre el Sol -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">📊 Datos Curiosos sobre el Sol</h2>
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
                            <td>1,392,700 km</td>
                        </tr>
                        <tr>
                            <td>Distancia a la Tierra</td>
                            <td>149.6 millones de km</td>
                        </tr>
                        <tr>
                            <td>Temperatura en la superficie</td>
                            <td>5,500°C</td>
                        </tr>
                        <tr>
                            <td>Composición</td>
                            <td>Hidrógeno (75%) y Helio (24%)</td>
                        </tr>
                        <tr>
                            <td>Edad estimada</td>
                            <td>4.6 mil millones de años</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @endsection