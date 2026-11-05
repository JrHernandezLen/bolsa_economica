<?php
include 'conn.php';
?>
 
<!DOCTYPE html>
 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa Económica - Catálogo</title>
    <link rel="stylesheet" href="index.css?v=1.9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="Carrusel.css">
    <link rel="stylesheet" href="Productos.css?v=1.2">
    <link rel="stylesheet" href="SeccionHeroBolsas.css">
</head>
<body>
 
  <header>
     <div class="barra-arriba animate__animated animate__flipInX">
        <p>¡Las bolsas más llamativas / Resistentes / Prácticas!</p> 
    </div>
 
   <nav>
    <div class="logo animate__animated animate__slideInUp">
        <img src="Imagenes/Logo_bolsae.png" alt="logo bolsa economica">
    </div>
 
   <div class="login animate_animated animate_slideInUp">
  <button type="button" class="btn-icon-only" aria-label="Iniciar sesión" onclick="window.location.href='login.php';">
    <img src="Iconos/agregar-usuario.svg" alt="" />
  </button>
</div>
 
    <div class="menu-barra-centro dropdown animate__animated animate__slideInUp">
        <button class="btn-nav btn-dropdown" type="button"
                aria-expanded="false" aria-haspopup="true" aria-controls="menu-categorias">
            Ver Productos <span class="flecha" aria-hidden="true">▾</span>
        </button>
 
        <ul class="dropdown-menu" id="menu-categorias">
            <div class="login animate_animated animate_slideInUp">
    <a hr<li><a href="#">Econobolsa</a></li>
            <li><a href="#">Bolsa Ecológica</a></li>
            <li><a href="#">Tipo Sobre</a></li>
            <li><a href="#">Bolsa con Asa</a></li>
            <li><a href="#">Bolsa con Diseño</a></li>
            <li><a href="#">Bolsa Laminada</a></li>
        </ul>
    </div>
</nav>
  </header>
 
  <section class="hero-imagen">
    <div class="encabezado-hero">
        <h2 class="titulo-animado">P R O D U C T O S</h2>
        <p class="subtitulo-animado">¡Los mejores para promocionar tu marca!</p>
    </div>
 
    <div class="contenedor-bolsas">
        <img src="Imagenes/Panaderia.png" alt="Bolsa Lateral Izquierda" class="bolsa-lateral bolsa-izq">
        <img src="Imagenes/Abarrotes3D.png" alt="Abarrotes 3D" class="bolsa-centro">
        <img src="Imagenes/Tortilleria.png" alt="Bolsa Lateral Derecha" class="bolsa-lateral bolsa-der">
    </div>
  </section>
 
  <main>
 
    <!-- CARRUSEL DESTACADO -->
    <section class="destacado info-bolsas animate__animated animate__fadeIn">
      <div class="carrusel-fondo">
        <div class="slide-fondo active" style="background-image: url('Imagenes/SN1.png');"></div>
        <div class="slide-fondo" style="background-image: url('Imagenes/SN3.png');"></div>
        <div class="slide-fondo" style="background-image: url('Imagenes/SN4.png');"></div>  
      </div>
 
      <div class="capa-oscura"></div>
 
      <div class="contenido-destacado">
        <div class="lado-izq">
            <h2>¡Bolsas de calidad que destacarán tu marca a lo grande!</h2>
        </div>
        <div class="lado-der">
            <p>La Econobolsa resalta por ser útil y práctica. ¡Además tiene el tamaño perfecto!</p>
            <a href="#" class="btn-secundario">Conoce más</a>
        </div>
      </div>
    </section>
 
    <!-- CATÁLOGO DE PRODUCTOS -->
    <section class="productos-seccion">
    <h2>NUESTROS PRODUCTOS</h2>
    <div class="productos-grid">
       
        <?php 
 
        $sql3 = "SELECT * 
        FROM categorias
        WHERE  status = '1'
        ORDER BY id ASC";
     $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
       // output data of each row
         while($row = $result3->fetch_assoc()) {
 
    echo "
        
         <a href='".$row["url"]. "' class='producto-tarjeta animate__animated animate__slideInUp'>
            <img src='" .$row["imagenes"] . "' alt='Econobolsa'>
            <h3> " . $row["categoria"] . "</h3>
            <span class='ver-mas'>Ver producto <i aria-hidden='true'>→</i></span>
        </a>
 
        ";
 
     }
 
     }
?>
    </div>
 
    <div class="btn-contenedor">
        <a href="#" class="btn-primario">Ver todos los productos</a>
    </div>
</section>
 
 
    <!-- BENEFICIOS -->
    <section class="beneficios">
        <h2>¿Por qué elegirnos?</h2>
        <div class="beneficios-grid">
            <article class="beneficio">
                <span class="beneficio-icono"><img src="Iconos/puno-de-mano.svg" alt=""></span>
                <h3>Resistentes</h3>
                <p>Soportan el uso diario sin romperse.</p>
            </article>
            <article class="beneficio">
                <span class="beneficio-icono"><img src="Iconos/personalizar-editar.svg" alt=""></span>
                <h3>Personalizables</h3>
                <p>Imprimimos tu logo y los colores de tu marca.</p>
            </article>
            <article class="beneficio">
                <span class="beneficio-icono"><img src="Iconos/bolsa-de-la-compra.svg" alt=""></span>
                <h3>Tamaño ideal</h3>
                <p>Perfectas para abarrotes, panaderías y tiendas.</p>
            </article>
            <article class="beneficio">
                <span class="beneficio-icono"><img src="Iconos/reciclar.svg" alt=""></span>
                <h3>Reutilizables</h3>
                <p>Tus clientes las usan una y otra vez.</p>
            </article>
        </div>
    </section>
 
 
    <!-- OPINIONES -->
    <section class="opiniones animate__animated animate__slideInUp">
    <h2>Opiniones de nuestros clientes</h2>
 
    <div class="carrusel" aria-roledescription="carrusel" aria-label="Opiniones de clientes">
        <button class="carrusel-btn prev" aria-label="Opinión anterior">&#8249;</button>
 
        <div class="carrusel-viewport">
            <div class="carrusel-track">
 
                <article class="opinion-card">
                    <span class="comilla" aria-hidden="true">“</span>
                    <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="comentario">Me encantó la calidad de las bolsas, son muy resistentes.</p>
                    <div class="persona">
                        <span class="avatar" aria-hidden="true">JC</span>
                        <p class="autor">Juan Carlos</p>
                    </div>
                </article>
 
                <article class="opinion-card">
                    <span class="comilla" aria-hidden="true">“</span>
                    <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="comentario">Resistente y bastante cómodo de pedir.</p>
                    <div class="persona">
                        <span class="avatar" aria-hidden="true">EF</span>
                        <p class="autor">Enrique Fuentes</p>
                    </div>
                </article>
 
                <article class="opinion-card">
                    <span class="comilla" aria-hidden="true">“</span>
                    <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="comentario">Me gustó la calidad de la bolsa y resisten demasiado.</p>
                    <div class="persona">
                        <span class="avatar" aria-hidden="true">AH</span>
                        <p class="autor">Amanda Hernández</p>
                    </div>
                </article>
 
                <article class="opinion-card">
                    <span class="comilla" aria-hidden="true">“</span>
                    <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="comentario">Buena calidad de producto, la recomiendo para iniciar un negocio.</p>
                    <div class="persona">
                        <span class="avatar" aria-hidden="true">CH</span>
                        <p class="autor">Carla Hernández</p>
                    </div>
                </article>
 
            </div>
        </div>
 
        <button class="carrusel-btn next" aria-label="Opinión siguiente">&#8250;</button>
    </div>
 
    <div class="carrusel-dots" role="tablist" aria-label="Seleccionar opinión"></div>
</section>
 
    <!-- LLAMADO FINAL -->
    <section class="cta-final">
        <h2>¿Listo para promocionar tu marca?</h2>
        <p>Cotizamos tu pedido sin compromiso.</p>
        <a class="btn-primario"
           href="https://wa.me/5616867086?text=Hola%2C%20quiero%20cotizar%20mis%20bolsas"
           target="_blank" rel="noopener">Pedir cotización</a>
    </section>
 
  </main>
 
  <footer>
    <div class="contacto-wrap">
      <div class="contacto-imagen">
          <img src="Imagenes/SN1.png" alt="Econobolsa roja">
      </div>
 
      <div class="contactanos animate__animated animate__slideInUp">
          <h2>¡Contáctanos!</h2>
          <p>Cotizamos tus pedidos</p>
          <div class="contacto-links">
              <a href="tel:5516867086" class="contacto-item">
                  <img src="Iconos/llamada-telefonica.svg" alt=""> 55 1686 7086
              </a>
              <a href="https://wa.me/5616867086" class="contacto-item whatsapp">
                  <img src="Iconos/whatsapp.svg" alt=""> 56 1686 7086
              </a>
              <a href="mailto:labolsaeconomica@gmail.com" class="contacto-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                  labolsaeconomica@gmail.com
              </a>
          </div>
          <a href="#" class="btn-facebook">¡Síguenos en Facebook!</a>
      </div>
    </div>
  </footer>
 
  <a href="https://wa.me/525616867086" class="flotante-whatsapp" target="_blank" rel="noopener" aria-label="Escríbenos por WhatsApp">
      <img src="Iconos/whatsapp.svg" alt="">
  </a>
  <a href="#" class="flotante-subir" aria-label="Volver arriba"></a>
 
<script src="Animaciones.js/animacion.js?v=3"></script>
</body>
</html>
 