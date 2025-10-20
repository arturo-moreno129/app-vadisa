<?php
include 'layouts/header.php';
?>
<link rel="stylesheet" href="css/style_contacto.css">
<style>
  /* === Animaciones para contacto === */
  .container {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px 20px;
  }

  .contact-info,
  .contact-form {
    flex: 1;
    opacity: 0;
    transform: translateX(50px);
    transition: all 0.8s ease-out;
  }

  .contact-info.active {
    opacity: 1;
    transform: translateX(0);
  }

  .contact-form.active {
    opacity: 1;
    transform: translateX(0);
  }

  /* Invertimos la dirección de entrada del formulario */
  .contact-form {
    transform: translateX(-50px);
  }

  /* Animación suave para títulos y textos internos */
  .contact-info h3.title,
  .contact-form h3.title,
  .contact-info p,
  .contact-form p,
  .information,
  .input-container {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
  }

  .contact-info.active h3.title,
  .contact-info.active p,
  .contact-info.active .information,
  .contact-form.active h3.title,
  .contact-form.active p,
  .contact-form.active .input-container {
    opacity: 1;
    transform: translateY(0);
  }

  /* Responsive */
  @media (max-width: 900px) {
    .container {
      flex-direction: column;
      padding: 50px 20px;
    }

    .contact-info,
    .contact-form {
      transform: translateX(0);
    }
  }
</style>

<div class="container">
  <span class="big-circle"></span>
  <img src="img/shape.png" class="square" alt="" />

  <div class="form">
    <div class="contact-info">
      <h3 class="title" id="title-left">Pongámonos en contacto</h3>
      <p class="text">
        Si tienes preguntas, comentarios o simplemente deseas conocernos mejor, estamos aquí para ayudarte. Completa
        el formulario o utiliza nuestros datos de contacto y te responderemos lo antes posible. ¡Será un gusto
        atenderte!
      </p>

      <div class="info">
        <div class="information">
          <img src="img/lugar.png" class="icon" alt="" />
          <p>Camino real 6 Tlapayatla, Santa Catarina Ayometla, Tlaxcala, CP 90770</p>
        </div>
        <div class="information-c">
          <img src="img/correo.png" class="icon" alt="" />
          <p>direccion@vadisatextil.com.mx</p>
        </div>
        <div class="information-c">
          <img src="img/correo.png" class="icon" alt="" />
          <p>ventas1@vadisatextil.com.mx</p>
        </div>
        <div class="information-w">
          <img src="img/whatsapp.png" class="icon" alt="" />
          <p>+52 221 201 6363</p>
        </div>
        <div class="information-c">
          <img src="img/correo.png" class="icon" alt="" />
          <p>ventas2@vadisatextil.com.mx</p>
        </div>
        <div class="information-w">
          <img src="img/whatsapp.png" class="icon" alt="" />
          <p>+52 221 252 7246</p>
        </div>
        <div class="information-c">
          <img src="img/correo.png" class="icon" alt="" />
          <p>compras@vadisatextil.com.mx</p>
        </div>
        <div class="information-w">
          <img src="img/whatsapp.png" class="icon" alt="" />
          <p>+52 246 168 0502</p>
        </div>
      </div>

      <div class="social-media">
        <p>Contactanos por:</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <form action="index.html" autocomplete="off">
        <h3 class="title">Contacta con nosotros</h3>
        <div class="input-container">
          <input type="text" name="name" class="input" />
          <label>Nombre</label>
          <span>Nombres</span>
        </div>
        <div class="input-container">
          <input type="email" name="email" class="input" />
          <label>Correo</label>
          <span>Correo</span>
        </div>
        <div class="input-container">
          <input type="tel" name="phone" class="input" />
          <label>Telefono</label>
          <span>Telefono</span>
        </div>
        <div class="input-container textarea">
          <textarea name="message" class="input"></textarea>
          <label>Mensaje</label>
          <span>Mensaje</span>
        </div>
        <input type="submit" value="Enviar" class="btn" />
      </form>
    </div>
  </div>
</div>

<script>
  // Inputs animación focus
  const inputs = document.querySelectorAll(".input");
  inputs.forEach((input) => {
    input.addEventListener("focus", function() {
      this.parentNode.classList.add("focus");
    });
    input.addEventListener("blur", function() {
      if (this.value === "") this.parentNode.classList.remove("focus");
    });
  });

  // Animación scroll
  const contactInfo = document.querySelector('.contact-info');
  const contactForm = document.querySelector('.contact-form');

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

  observer.observe(contactInfo);
  observer.observe(contactForm);
</script>

<?php
include 'layouts/footer.php';
?>