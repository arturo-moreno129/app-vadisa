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
        background-image: url('assets/fondo.jpg');
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
<!-- HERO -->
<section class="services-hero" role="img" aria-label="Tela de fondo">
    <div class="hero-content">
        <div class="hero-text">
            <h1>nuestras telas</h1>
            <p style="color: white;">Desde el tejido hasta el acabado y maquila, en <strong>Vadisa Textil</strong> transformamos la materia prima en piezas listas para tu producción.</p>
        </div>
    </div>
</section>
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
include 'layouts/footer.php';
?>