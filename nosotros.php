<?php
include 'layouts/header.php'
?>
<!--<header class="header-nosotros">Acerca de Nosotros</header>-->
<!-- HERO -->
<section class="services-hero" role="img" aria-label="Tela de fondo">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Quiénes somos</h1>
            <p style="color: white;"><strong>Vadisa Textil</strong> es una empresa especializada en soluciones textiles, comprometida con la calidad, el diseño y la innovación. Tejemos ideas en cada hilo y transformamos telas en productos únicos.
            </p>
        </div>
    </div>
</section>

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
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll('.mvv-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(card => observer.observe(card));
    });
</script>

<style>
    .mvv-card {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .mvv-card.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Tu hover original no se toca */
    .mvv-card:hover {
        transform: scale(1.05);
        /* ejemplo de hover que se mantiene */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
</style>
<style>
    /* ===== ANIMACIÓN SUBE ===== */
    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .services-hero {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-out;
    }

    .services-hero.show {
        opacity: 1;
        transform: translateY(0);
        animation: fadeUp 1s ease forwards;
    }

    /* Ajuste general opcional para fluidez */
    section {
        scroll-margin-top: 80px;
    }

    /* === HERO === */
    .services-hero {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/foto5.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        color: white;
        overflow: hidden;
    }

    .services-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.0);
    }

    .hero-content {
        position: relative;
        max-width: 1100px;
        width: 100%;
        padding: 40px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .hero-text {
        width: 55%;
        padding: 30px;
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s ease-out;
    }

    .hero-text.active {
        opacity: 1;
        transform: translateY(0);
    }

    .hero-text h1 {
        font-size: clamp(28px, 4.2vw, 48px);
        font-weight: 700;
        margin-bottom: 10px;
    }

    .hero-text p {
        font-size: clamp(14px, 1.6vw, 18px);
        margin-bottom: 20px;
        max-width: 500px;
    }

    .hero-cta {
        display: inline-block;
        padding: 12px 20px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.9);
        color: #222;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .hero-cta:hover {
        background: #fff;
        transform: translateY(-3px);
    }
</style>
<script>
    // Animación hero al cargar hero
    window.addEventListener('load', () => {
        document.querySelector('.hero-text').classList.add('active');
    });
</script>
<!--/* === SCRIPT PARA ANIMACION ENCABEZADIO HERIO === */-->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll('.services-hero');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.2
        });

        elements.forEach(el => observer.observe(el));

        // Mostrar al cargar si ya están visibles
        window.addEventListener('load', () => {
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight) el.classList.add('show');
            });
        });
    });
</script>
<?php
include 'layouts/footer.php'
?>