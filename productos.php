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

    /* === HERO === */
    .services-hero {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/productos.png');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        overflow: hidden;
    }

    .services-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.3);
    }

    .hero-text {
        position: relative;
        text-align: center;
        z-index: 2;
        max-width: 700px;
        padding: 20px;
    }

    .hero-text h1 {
        font-size: clamp(28px, 5vw, 48px);
        font-weight: 700;
        margin-bottom: 15px;
    }

    .hero-text p {
        font-size: clamp(14px, 2vw, 18px);
        line-height: 1.5;
    }

    /* ====== SECCIÓN PRODUCTOS ====== */
    .productos {
        padding: 80px 20px;
        background-color: #f9f9f9;
        text-align: center;
    }

    .productos .titulo {
        font-size: 2.3rem;
        color: #333;
        font-weight: 700;
        margin-bottom: 60px;
        position: relative;
    }

    .productos .titulo::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: #b48b57;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    /* Contenedor de cards */
    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 35px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 10px;
    }

    /* Card individual */
    .card {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        background: #fff;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    /* Imagen */
    .card img {
        width: 100%;
        height: 340px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    /* Contenido inferior tipo overlay */
    .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.85) 0%, transparent 100%);
        color: #fff;
        padding: 25px;
        text-align: left;
    }

    .card-content h3 {
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .card-content p {
        font-size: 0.95rem;
        line-height: 1.4;
        margin-bottom: 12px;
        color: #e6e6e6;
    }

    .card-content .btn {
        display: inline-block;
        background-color: #b48b57;
        color: #fff;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .card-content .btn:hover {
        background-color: #8a6a40;
    }

    /* ====== Responsive ====== */
    @media (max-width: 768px) {
        .productos {
            padding: 60px 15px;
        }

        .productos .titulo {
            font-size: 1.9rem;
        }

        .card img {
            height: 280px;
        }

        .card-content {
            padding: 18px;
        }
    }

    @media (max-width: 480px) {
        .productos {
            padding: 50px 10px;
        }

        .productos .titulo {
            font-size: 1.6rem;
        }

        .card img {
            height: 240px;
        }

        .card-content h3 {
            font-size: 1.2rem;
        }

        .card-content p {
            font-size: 0.9rem;
        }
    }
</style>

<!-- HERO -->
<section class="services-hero" role="img" aria-label="Tela de fondo">
    <div class="hero-text">
        <!--<h1>Nuestras Telas</h1>
        <p>Desde el tejido hasta el acabado y maquila, en <strong>Vadisa Textil</strong> transformamos la materia prima
            en piezas listas para tu producción.</p>-->
    </div>
</section>

<!-- SECCIÓN PRODUCTOS -->
<section class="productos">
    <h2 class="titulo">Nuestros Productos</h2>
    <div class="cards-container">
        <div class="card">
            <img src="assets/acabado.jpg" alt="Acabado">
            <div class="card-content">
                <h3>Acabado</h3>
                <p>Acabados de alta calidad que garantizan durabilidad y presentación profesional.</p>
                <a href="#" class="btn">Ver más</a>
            </div>
        </div>

        <div class="card">
            <img src="assets/tejido.jpg" alt="Tejido">
            <div class="card-content">
                <h3>Tejido</h3>
                <p>Tejidos personalizados con maquinaria avanzada para todo tipo de proyectos.</p>
                <a href="#" class="btn">Ver más</a>
            </div>
        </div>

        <div class="card">
            <img src="assets/maquila.jpg" alt="Maquila">
            <div class="card-content">
                <h3>Maquila</h3>
                <p>Procesos de maquila con calidad, precisión y puntualidad garantizada.</p>
                <a href="#" class="btn">Ver más</a>
            </div>
        </div>
    </div>
</section>

<script>
    // Animación hero al aparecer
    document.addEventListener("DOMContentLoaded", () => {
        const hero = document.querySelector('.services-hero');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) hero.classList.add('show');
            });
        }, {
            threshold: 0.2
        });
        observer.observe(hero);
    });
</script>

<?php
include 'layouts/footer.php';
?>