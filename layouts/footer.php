<section class="whatsapp-box-info">
    <div id="whatsapp-widget">
        <div id="whatsapp-box">
            <h4>¿Necesitas ayuda? Conversa con nosotros</h4>
            <p style="margin: 0; font-size: 14px;">Nuestros asesores atenderán todas tus dudas</p>

            <!--<a class="whatsapp-contact" href="https://wa.me/22212016363?text=Hola%20Evelyn,%20necesito%20ayuda"
                    target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="whatsapp"> Asesora
                    comercial
                </a>-->
            <button class="whatsapp-contact"
                onclick="window.open('https://wa.me/2212016363?text=Hola,%20necesito%20ayuda', '_blank')">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="whatsapp">
                <h3>Asesora comercial</h3>
            </button>


            <!--<a class="whatsapp-contact" href="https://wa.me/521XXXXXXXXXX?text=Hola%20Elizabeth,%20necesito%20ayuda"
                    target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="whatsapp">
                    Jaciel Elizabeth
                </a>-->
        </div>

        <button class="button" onclick="toggleWhatsappBox()"><ion-icon name="logo-whatsapp"></ion-icon></button>
    </div>

    <script>
        function toggleWhatsappBox() {
            const box = document.getElementById("whatsapp-box");
            box.style.display = box.style.display === "block" ? "none" : "block";
        }
    </script>
</section>
<footer class="footer">
    <div class="footer-container">
        <!--<div class="footer-section about">
                <img style="width: 200px;" src="assets/logo.png">
            </div>-->
        <div class="footer-section about">
            <h2>Vadisa Textil</h2>
            <p>Somos una empresa comprometida con la calidad y el servicio al cliente. Contáctanos para saber más
                sobre nuestros productos y servicios.</p>
        </div>

        <div class="footer-section contact">
            <h3>Contacto</h3>
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> Camino real 6 Tlapayatla<br>
                    Santa Catarina<br>
                    Ayometla, Tlaxcala, CP 90770<br></li>
                <li><i class="fa-solid fa-phone"></i> +52 1 221 201 6363</li>
                <li><i class="fa-solid fa-envelope"></i> ventas1@vadisatextil.com.mx</li>
                <li><i class="fa-solid fa-envelope"></i> ventas2@vadisatextil.com.mx</li>
            </ul>
        </div>

        <!--<div class="footer-section links">
                <h3>Enlaces</h3>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>-->

        <div class="footer-section social">
            <h3>Síguenos</h3>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <!--<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>-->
            </div>
        </div>

    </div>
    <div class="footer-bottom">
        <p>&copy;2025 Vadisa Textil. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Incluye Font Awesome para íconos -->
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/your_kit_code.js" crossorigin="anonymous"></script>
</body>

</html>