<?php
include 'layouts/header.php';
?>
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

    /* === SECCIÓN DE SERVICIOS === */
    .services-section {
        padding: 100px 20px;
        background: #f5f5f5;
    }

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 80px;
    }

    .service-card {
        display: flex;
        align-items: center;
        gap: 40px;
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
        opacity: 0;
        transition: all 0.7s ease-out;
        overflow: hidden;
    }

    .service-card:nth-child(odd) {
        flex-direction: row;
        transform: translateX(-100px);
    }

    .service-card:nth-child(even) {
        flex-direction: row-reverse;
        transform: translateX(100px);
    }

    .service-card.active {
        opacity: 1;
        transform: translateX(0);
    }

    .service-image,
    .service-text {
        flex: 1;
        transition: transform 0.3s ease-out;
    }

    .service-image {
        border-radius: 16px;
        overflow: hidden;
    }

    .service-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    .service-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #333;
    }

    .service-desc {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 16px;
    }

    .service-action {
        text-decoration: none;
        font-weight: 600;
        padding: 10px 16px;
        border-radius: 12px;
        background: #2b6cb0;
        color: #fff;
        transition: all 0.3s ease;
    }

    .service-action:hover {
        background: #1e4f8a;
    }

    @media (max-width: 900px) {
        .service-card {
            flex-direction: column !important;
            transform: translateY(40px) !important;
        }

        .service-image,
        .service-text {
            width: 100%;
        }

        .hero-text {
            width: 100%;
            text-align: left;
        }
    }
</style>

<!-- HERO -->
<section class="services-hero" role="img" aria-label="Tela de fondo">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Confección y servicios textiles de calidad</h1>
            <p style="color: white;">Desde el tejido hasta el acabado y maquila, en <strong>Vadisa Textil</strong> transformamos la materia prima en piezas listas para tu producción.</p>
        </div>
    </div>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="services-section">
    <div class="services-container">
        <article class="service-card">
            <div class="service-image">
                <img src="assets/acabado.jpg" alt="Acabado">
            </div>
            <div class="service-text">
                <h3 class="service-title">Acabado</h3>
                <p class="service-desc">Tenemos un amplia gamas de acabados textiles contando con

                    Ofrecemos un servicio especializado de acabado textil para telas de algodón, diseñado para mejorar las propiedades estéticas, táctiles y funcionales de cada pieza. Nuestro proceso incluye suavizado, teñidos, estampados, sanforizado, afelpado, aprestados, etc. , adaptado a las necesidades de cada cliente y al uso final del textil.
                    Ofrecemos atención personalizada, adaptación según el uso final del tejido y entrega confiable. Trabajamos tanto con producciones grandes como con volúmenes bajos, según tus necesidades.</p>
                <!--<a class="service-action" href="#">Más info</a>-->
            </div>
        </article>

        <article class="service-card">
            <div class="service-image">
                <img src="assets/tejido.jpg" alt="Tejido">
            </div>
            <div class="service-text">
                <h3 class="service-title">Tejido</h3>
                <p class="service-desc">Ofrecemos tejidos planos. Contamos con una amplia variedad de composiciones, gramajes y acabados que se adaptan a tus necesidades.

                    Contamos con maquinaria de alto rendimiento y un equipo capacitado que garantiza procesos eficientes, personalizados y a la medida de cada proyecto. Nuestros servicios están pensados para quienes buscan tejidos naturales, cómodos y funcionales, ideales para confección, moda, hogar, industria y más.

                    Producción personalizada, bajos mínimos y entregas a toda la República.</p>
                <!--<a class="service-action" href="#">Más info</a>-->
            </div>
        </article>

        <article class="service-card">
            <div class="service-image">
                <img src="assets/maquila.jpg" alt="Maquila">
            </div>
            <div class="service-text">
                <h3 class="service-title">Maquila</h3>
                <p class="service-desc">Desde el diseño hasta la entrega, confeccionamos tus ideas con precisión, calidad y tiempos de entrega garantizados. Contamos con maquinaria de alta tecnología, personal capacitado y experiencia en distintos tipos de telas, incluyendo lonetas, gabardinas, manta, mezclilla, popelina y más. Nos adaptamos a fichas técnicas, muestrarios o muestras físicas, garantizando puntualidad y cumplimiento en cada entrega.
                    Ideal para marcas emergentes, empresas con alta demanda de producción, eventos promocionales o desarrollos textiles personalizados.
                    Nuestra maquila abarca desde el corte hasta el empaque final, adaptándonos a los diseños, materiales y volúmenes de cada cliente.</p>
                <!--<a class="service-action" href="#">Contacto</a>-->
            </div>
        </article>
    </div>
</section>

<script>
    // Animación hero al cargar
    window.addEventListener('load', () => {
        document.querySelector('.hero-text').classList.add('active');
    });

    // Animación cards
    const cards = document.querySelectorAll('.service-card');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    cards.forEach(card => observer.observe(card));

    // Parallax efecto suave
    window.addEventListener('scroll', () => {
        cards.forEach((card, index) => {
            const rect = card.getBoundingClientRect();
            const offset = window.innerHeight - rect.top;
            if (offset > 0) {
                const speed = 0.05;
                const move = offset * speed;
                const image = card.querySelector('.service-image');
                const text = card.querySelector('.service-text');

                if (index % 2 === 0) {
                    image.style.transform = `translateX(${-move}px)`;
                    text.style.transform = `translateX(${move}px)`;
                } else {
                    image.style.transform = `translateX(${move}px)`;
                    text.style.transform = `translateX(${-move}px)`;
                }
            }
        });
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
include 'layouts/footer.php';
?>