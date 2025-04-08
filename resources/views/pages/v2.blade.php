
@extends('plantilla')

@section('contenido')
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-3">☀️ El Sol: Nuestra Estrella</h1>
                <p class="lead">Descubre los misterios y datos fascinantes sobre el Sol.</p>
            </div>
        </div>

        <!-- Imagen Destacada -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="data:image/jpeg;base64,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" alt="Imagen del Sol" class="img-fluid rounded shadow-lg">
            </div>
        </div>

        <!-- Sección de Información -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌞 Ciclos Solares</h4>
                        <p>El Sol pasa por ciclos de actividad que afectan el clima espacial.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🌍 Influencia en la Tierra</h4>
                        <p>El Sol es la principal fuente de energía para la vida en la Tierra.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>🚀 Exploración Espacial</h4>
                        <p>Las misiones espaciales estudian el Sol para entender mejor su comportamiento.</p>
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
                            <td>149.6 millones km</td>
                        </tr>
                        <tr>
                            <td>Temperatura Superficial</td>
                            <td>5,500 °C</td>
                        </tr>
                        <tr>
                            <td>Edad</td>
                            <td>4.6 mil millones de años</td>
                        </tr>
                        <tr>
                            <td>Composición</td>
                            <td>Hidrógeno y Helio</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sección de Videos -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🎥 Videos sobre el Sol</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=6EUrDOAgJDE" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Galería de Imágenes -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-3">🖼️ Galería de Imágenes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkRD18SBserLn5TRqgbjwxKNo-1tyVAN3Pkw&s" alt="Imagen 1" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu8cBr5eA2U7j06FCxZFnlBec2A8NLCTyYLg&s" alt="Imagen 2" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRY12qqDo9pS7NLZH3bjjsem-pcxYlRPWwSkg&s" alt="Imagen 3" class="img-fluid rounded shadow-lg mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection