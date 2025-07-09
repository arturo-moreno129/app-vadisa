<?php
include 'layouts/header.php'
?>
<link rel="stylesheet" href="css/style_contacto.css">
<!--<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/style_contacto.css">
  <script src="https://kit.fontawesome.com/258c34b44b.js" crossorigin="anonymous"></script>
  <title>Vadisa Textil</title>
</head>

<body>
  <div class="menu container-menu">
    <a href="index.html" class="logo"><img id="logo" style="width: 200px;" src="assets/logo.png" alt=""></a>
    <input type="checkbox" id="menu">
    <label for="menu">
      <img src="assets/menu.png" alt="" class="menu-icono">
    </label>
    <nav class="navbar">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="">Productos</a></li>
        <li><a href="">Servicios</a></li>
        <li><a href="contacto.html">Contaco</a></li>
      </ul>
    </nav>
  </div>-->
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
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!--<a href="#">
              <i class="fab fa-twitter"></i>
            </a>-->
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <!--<a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>-->
        </div>
      </div>
    </div>

    <div class="contact-form">
      <!--<span class="circle one"></span>
        <span class="circle two"></span>-->

      <form action="index.html" autocomplete="off">
        <h3 class="title">Contacta con nosotros</h3>
        <div class="input-container">
          <input type="text" name="name" class="input" />
          <label for="">Nombre</label>
          <span>Nombres</span>
        </div>
        <div class="input-container">
          <input type="email" name="email" class="input" />
          <label for="">Correo</label>
          <span>Correo</span>
        </div>
        <div class="input-container">
          <input type="tel" name="phone" class="input" />
          <label for="">Telefono</label>
          <span>Telefono</span>
        </div>
        <div class="input-container textarea">
          <textarea name="message" class="input"></textarea>
          <label for="">Mensaje</label>
          <span>Mensaje</span>
        </div>
        <input type="submit" value="Enviar" class="btn" />
      </form>
    </div>
  </div>
</div>
<script>
  const inputs = document.querySelectorAll(".input");

  function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
  }

  function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }

  inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
  });
</script>
<?php
include 'layouts/footer.php'
?>