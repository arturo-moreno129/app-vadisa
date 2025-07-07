<?php
include 'layouts/header.php'
?>
<!--<header class="header-nosotros">Acerca de Nosotros</header>-->


<div class="container-nosotros">
    <div class="slideshow">
        <img src="img/carrusel1.jpg" class="active" alt="Imagen 1">
        <img src="img/carrusel2.jpg" alt="Imagen 2">
        <img src="img/carrusel3.jpg" alt="Imagen 3">
        <img src="img/carrusel4.jpg" alt="Imagen 4">
    </div>
    <section class="history" id="history">
        <h2>Nuestra Historia</h2>
        <p>
            <strong>20 años de experiencia en el sector textil.</strong>
            Vadisa Textil inició operaciones hace dos décadas, especializándose en la fabricación y comercialización
            de trapo, jerga y franela. Con el tiempo, y gracias a un crecimiento sostenido, la empresa amplió su
            línea de productos, incorporando lonetas, mantas, gasas, tafetanes y sargas, adaptándose a las
            necesidades del mercado y a las exigencias de la industria.
        </p>
    </section>
</div>

<section class="mvv-section">
    <h2 class="mvv-title">Misión, Visión y Valores</h2>
    <div class="mvv-container">

        <div class="mvv-card">
            <i class="fa-solid fa-bullseye"></i>
            <h3>Misión</h3>
            <p>Proveer soluciones textiles industriales de alta calidad, especializadas para los diferentes sectores, mediante procesos de maquila eficientes, tecnología de vanguardia y un equipo capacitado. Nos comprometemos a satisfacer las exigencias del mercado con productos duraderos, funcionales y adaptados a las necesidades de cada cliente.
            </p>
        </div>

        <div class="mvv-card">
            <i class="fa-solid fa-eye"></i>
            <h3>Visión</h3>
            <p>Ser una empresa textil líder a nivel nacional e internacional, reconocida por su calidad, confiabilidad y capacidad de innovación.</p>
        </div>

        <div class="mvv-card">
            <i class="fa-solid fa-star"></i>
            <h3>Valores</h3>
            <p>Nuestros pilares son el compromiso, la innovación, la responsabilidad social y ambiental, la orientación al cliente y el trabajo en equipo; valores que inspiran y guían cada una de nuestras acciones.</p>
        </div>

    </div>
</section>
<script>
    // Mostrar historia al cargar
    window.addEventListener("load", () => {
        document.getElementById("history").classList.add("show");
    });

    // Slideshow logic
    const slides = document.querySelectorAll(".slideshow img");
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    }, 4000);
</script>

<?php
include 'layouts/footer.php'
?>