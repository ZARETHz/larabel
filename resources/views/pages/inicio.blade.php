@extends('plantilla')
@section('contenido')

<div class="hero-section">
    <div class="hero-content">
        <h1>Bienvenido a Nuestra Página</h1>
        <p>Explora el universo de nuestras páginas web temáticas.</p>
        <a href="#explore" class="btn-primary">Descubre Más</a>
    </div>
</div>

<section id="explore" class="explore-section">
    <h2>Explora Nuestras Páginas</h2>
    <div class="explore-container">
        <div class="explore-item">
            <h3>Página de Luna</h3>
            <p>Sumérgete en la serenidad y el misterio de la Luna.</p>
            <a href="/v1" class="btn-secondary">Visitar</a>
        </div>
        <div class="explore-item">
            <h3>Página de Sol</h3>
            <p>Disfruta de la energía y el brillo del Sol.</p>
            <a href="/v2" class="btn-secondary">Visitar</a>
        </div>
        <div class="explore-item">
            <h3>Página de Estrella</h3>
            <p>Admira la belleza y el resplandor de las Estrellas.</p>
            <a href="/v3" class="btn-secondary">Visitar</a>
        </div>
        <div class="explore-item">
            <h3>Página de Galaxia</h3>
            <p>Explora la inmensidad y el misterio de la Galaxia.</p>
            <a href="/v4" class="btn-secondary">Visitar</a>
        </div>
    </div>
</section>





@endsection