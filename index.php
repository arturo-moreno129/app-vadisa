<?php
include 'layouts/header.php'
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

    .fade-up {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-out;
    }

    .fade-up.show {
        opacity: 1;
        transform: translateY(0);
        animation: fadeUp 1s ease forwards;
    }

    /* Ajuste general opcional para fluidez */
    section {
        scroll-margin-top: 80px;
    }
</style>

<header class="header fade-up">
    <video autoplay muted loop playsinline class="video-background">
        <source src="assets/VADISA-1.mp4" type="video/mp4" />
        Tu navegador no soporta video en HTML5.
    </video>
    <div class="header-content container">
        <h1>Vadisa Textil</h1>
        <p>Innovación Textil</p>
    </div>
</header>

<section class="general fade-up">
    <div class="general-1-1">
        <h2>Nuestra historia</h2>
        <p>
            <strong>20 años de experiencia en el sector textil.</strong>
            Vadisa Textil inició operaciones hace dos décadas, especializándose en la fabricación y comercialización
            de trapo, jerga y franela. Con el tiempo, y gracias a un crecimiento sostenido, la empresa amplió su
            línea de productos, incorporando lonetas, mantas, gasas, tafetanes y sargas, adaptándose a las
            necesidades del mercado y a las exigencias de la industria.
            <br><br>
            Nuestro compromiso ha sido constante: ofrecer telas de calidad, con procesos eficientes, tiempos de
            entrega confiables y atención personalizada. Contamos con infraestructura propia de confección y
            acabados, lo que nos permite responder con flexibilidad a proyectos de maquila y pedidos especiales.
            <br><br>
            A lo largo de estos 20 años, Vadisa se ha consolidado como un proveedor confiable para clientes de
            distintos sectores, desde el institucional hasta el artesanal, brindando soluciones textiles con enfoque
            en funcionalidad, durabilidad y costos competitivos.
        </p>
        <a href="nosotros" class="btn-1">Información</a>
    </div>
    <div class="general-4">
        <video autoplay muted loop playsinline>
            <source src="assets/telares.mp4" type="video/mp4" />
            Tu navegador no soporta video en HTML5.
        </video>
    </div>
</section>

<main class="services fade-up">
    <div class="services-content container">
        <h2>Nuestros servicios</h2>
        <div class="services-group">
            <div class="services1">
                <img src="assets/t1.png" style="width: 100px;" alt="">
                <h3>Tejido</h3>
            </div>
            <div class="services1">
                <img src="assets/t2.png" style="width: 150px;" alt="">
                <h3>Acabado</h3>
            </div>
            <div class="services1">
                <img src="assets/t3.png" style="width: 120px;" alt="">
                <h3>Maquila</h3>
            </div>
        </div>
        <a href="servicios" class="btn-1">Información</a>
    </div>
</main>

<section class="general fade-up">
    <div class="general-1">
        <h2>HOGAR</h2>
        <p>
            Las telas para el hogar son una parte esencial en la decoración, funcionalidad y confort de cada
            espacio. Diseñadas para adaptarse a distintos ambientes y estilos, estas telas combinan estética,
            resistencia y practicidad, siendo perfectas para la confección de cortinas, cojines, tapicería,
            mantelería, sábanas, cubrecamas, fundas y otros artículos decorativos o utilitarios.
        </p>
        <a href="#" class="btn-1">Información</a>
    </div>
    <div class="general-2"></div>
</section>

<section class="general fade-up">
    <div class="general-3"></div>
    <div class="general-1">
        <h2>GASA INDUSTRIAL</h2>
        <p>
            La gasa industrial es un tejido ligero, abierto y altamente absorbente, fabricado comúnmente en algodón
            o mezclas sintéticas. Aunque su aspecto es similar al de la gasa médica, en el ámbito industrial se
            adapta a una amplia gama de aplicaciones gracias a su versatilidad.
        </p>
        <a href="#" class="btn-1">Información</a>
    </div>
</section>

<section class="blog container fade-up">
    <h2>Usos</h2>
    <div class="container">
        <section class="grid">
            <figure class="card">
                <img src="assets/confeccion.jpeg" alt="Montañas al atardecer">
                <figcaption class="overlay">
                    <h3>CONFECCIÓN</h3>
                    <p>El sector de la confección textil se encarga de transformar materias primas en productos terminados como ropa, uniformes, accesorios y textiles para el hogar.</p>
                </figcaption>
                <a href="#">Leer más</a>
            </figure>

            <figure class="card">
                <img src="assets/entretelas.jpeg" alt="Ciudad moderna de noche">
                <figcaption class="overlay">
                    <h3>ENTRETELAS</h3>
                    <p>Las entretelas son insumos técnicos utilizadas para reforzar, estabilizar o dar cuerpo a telas y materiales. Se emplean tanto en confección tradicional como en la fabricación de calzado y aplicaciones industriales.</p>
                </figcaption>
                <a href="#">Leer más</a>
            </figure>

            <figure class="card">
                <img src="assets/industrial.jpeg" alt="Playa con mar azul">
                <figcaption class="overlay">
                    <h3>INDUSTRIAL</h3>
                    <p>El sector industrial demanda telas resistentes, duraderas y funcionales. Cada tejido es seleccionado cuidadosamente según las necesidades de resistencia, transpirabilidad, protección térmica o química.</p>
                </figcaption>
                <a href="#">Leer más</a>
            </figure>

            <figure class="card">
                <img src="assets/bordado.jpg" alt="Bosque con neblina">
                <figcaption class="overlay">
                    <h3>BORDADOS PUNTO DE CRUZ</h3>
                    <p>El bordado a punto de cruz es una técnica de costura que utiliza una serie de cruces para crear patrones y diseños en tela. Esta técnica es popular en la confección de ropa, accesorios y decoración del hogar.</p>
                </figcaption>
                <a href="#">Leer más</a>
            </figure>

            <figure class="card">
                <img src="assets/bolsa.jpg" alt="Bosque con neblina">
                <figcaption class="overlay">
                    <h3>TOTE BAGS</h3>
                    <p>Las tote bags son bolsas de tela grandes y resistentes, ideales para llevar compras, libros o cualquier otro objeto. Suelen ser reutilizables y una alternativa ecológica a las bolsas de plástico.</p>
                </figcaption>
                <a href="#">Leer más</a>
            </figure>

            <figure class="card">
                <img src="assets/limpieza.webp" alt="Bosque con neblina">
                <figcaption class="overlay">
                    <h3>SECTOR DE LIMPIEZA</h3>
                    <p>Las telas de limpieza ofrecen alta absorción, resistencia y durabilidad, ideales para remover polvo, grasa y líquidos sin dañar superficies, tanto en el hogar como en entornos industriales y comerciales.</p>
                </figcaption>
                <a href="#">Leer más</a>
            </figure>
        </section>
    </div><br>
    <a href="#" class="btn-1">Información</a>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll('.fade-up');

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