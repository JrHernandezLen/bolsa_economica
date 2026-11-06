<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa Económica - Catálogo</title>
    <link rel="stylesheet" href="index.css?v=4.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="Carrusel.css">
    <link rel="stylesheet" href="Productos.css?v=1.2">
    <link rel="stylesheet" href="SeccionHeroBolsas.css">
</head>
<body>

  <header>
    <div class="barra-arriba animate__animated animate__flipInX">
        <p>¡Las bolsas más llamativas / Resistentes / Prácticas! • Envíos a todo el país • Cotización inmediata</p> 
    </div>

    <nav>
        <div class="logo animate__animated animate__slideInUp">
            <img src="Imagenes/Logo_bolsae.png" alt="logo bolsa economica">
        </div>

        <div class="login animate_animated animate_slideInUp">
            <button type="button" class="btn-icon-only" aria-label="Iniciar sesión" onclick="window.location.href='login.php';">
                <img src="Iconos/agregar-usuario.svg" alt="Iniciar Sesión" />
            </button>
        </div>

        <div class="menu-barra-centro dropdown animate__animated animate__slideInUp">
            <button class="btn-nav btn-dropdown" type="button"
                    aria-expanded="false" aria-haspopup="true" aria-controls="menu-categorias">
                Ver Productos <span class="flecha" aria-hidden="true">▾</span>
            </button>

            <ul class="dropdown-menu" id="menu-categorias">
                <li><a href="#">Econobolsa</a></li>
                <li><a href="#">Bolsa Ecológica</a></li>
                <li><a href="#">Tipo Sobre</a></li>
                <li><a href="#">Bolsa con Asa</a></li>
                <li><a href="#">Bolsa con Diseño</a></li>
                <li><a href="#">Bolsa Laminada</a></li>
            </ul>
        </div>
    </nav>
  </header>

  <section class="hero-imagen reveal-scroll">
    <div class="encabezado-hero">
        <h2 class="titulo-animado">P R O D U C T O S</h2>
        <p class="subtitulo-animado">¡Los mejores empaques para posicionar y hacer destacar tu marca!</p>
    </div>

    <div class="contenedor-bolsas">
        <img src="Imagenes/Panaderia.png" alt="Bolsa Lateral Izquierda" class="bolsa-lateral bolsa-izq">
        <img src="Imagenes/Abarrotes3D.png" alt="Abarrotes 3D" class="bolsa-centro">
        <img src="Imagenes/Tortilleria.png" alt="Bolsa Lateral Derecha" class="bolsa-lateral bolsa-der">
    </div>
  </section>

  <main>

    <!-- CATÁLOGO DE PRODUCTOS (CORREGIDO SIN DEFORMACIONES) -->
    <section class="productos-seccion reveal-scroll">
      <div class="productos-cabecera">
        <div class="productos-titulo-grupo">
          <h2>PRODUCTOS</h2>
          <p>¡Los mejores para promocionar tu marca!</p>
        </div>
        <div class="btn-contenedor">
          <a href="#" class="btn-primario">Ver todos los productos</a>
        </div>
      </div>

      <div class="productos-grid">
        <?php 
        $sql3 = "SELECT * 
        FROM categorias
        WHERE status = '1'
        ORDER BY id ASC";
        $result3 = $conn->query($sql3);
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                echo "
                <a href='".$row["url"]. "' class='producto-tarjeta animate__animated animate__slideInUp'>
                    <div class='producto-imagen-wrapper'>
                        <img src='" .$row["imagenes"] . "' alt='" . $row["categoria"] . "'>
                    </div>
                    <h3>" . $row["categoria"] . "</h3>
                </a>
                ";
            }
        }
        ?>
      </div>
    </section>

    <!-- NUEVA SECCIÓN: CARRUSEL DESTACADO ABAJO DE PRODUCTOS -->
    <section class="banner-destacado-carrusel reveal-scroll">
      <div class="carrusel-destacado-contenedor">

        <!-- Slide 1: Bolsa Laminada / Fondo Lila -->
        <div class="banner-slide active">
          <div class="banner-col-texto">
            <h2>Si lo que buscas es algo diferente...</h2>
            <p>¡Las Bolsas Laminadas te encantarán! Promueve tu marca con sus atractivos diseños y acabado de alta calidad.</p>
            <a href="#" class="link-conoce-mas">Conoce más</a>
          </div>
          <div class="banner-col-imagen">
            <div class="bloque-color fondo-lila">
              <img src="Imagenes/blancadulce.png" alt="Bolsa Laminada">
            </div>
          </div>
        </div>

        <!-- Slide 2: Econobolsa Azul / Fondo Naranja -->
        <div class="banner-slide">
          <div class="banner-col-imagen">
            <div class="bloque-color fondo-naranja">
              <img src="Imagenes/Abarrotes3D.png" alt="Econobolsa Azul">
            </div>
          </div>
          <div class="banner-col-texto">
            <h2>¡Bolsas de calidad que destacarán tu marca a lo grande!</h2>
            <p>La Econobolsa resalta por ser útil y práctica. ¡Además tiene el tamaño perfecto para impulsar tu negocio!</p>
            <a href="#" class="link-conoce-mas">Conoce más</a>
          </div>
        </div>

        <!-- Slide 3: Bolsa Ecológica / Fondo Verde -->
        <div class="banner-slide">
          <div class="banner-col-texto">
            <h2>Compromiso ecológico para tu negocio...</h2>
            <p>Reutilizables, duraderas y respetuosas con el medio ambiente. Haz que tus clientes lleven tu marca a todas partes.</p>
            <a href="#" class="link-conoce-mas">Conoce más</a>
          </div>
          <div class="banner-col-imagen">
            <div class="bloque-color fondo-verde">
              <img src="Imagenes/Panaderia.png" alt="Bolsa Ecológica">
            </div>
          </div>
        </div>

      </div>

      <!-- Indicadores / Puntos del carrusel -->
      <div class="banner-dots">
        <span class="dot active" onclick="cambiarSlideBanner(0)"></span>
        <span class="dot" onclick="cambiarSlideBanner(1)"></span>
        <span class="dot" onclick="cambiarSlideBanner(2)"></span>
      </div>
    </section>

    <!-- BENEFICIOS -->
   <!-- BENEFICIOS (SECCIONES MINIMALISTAS SOBRE FONDO BLANCO) -->
    <section class="beneficios reveal-scroll">
        <h2 class="beneficios-titulo-principal">¿Por qué elegirnos como tu proveedor?</h2>

        <div class="beneficios-bloques-wrap">
            
            <!-- Bloque 1: Alta Resistencia -->
            <article class="beneficio-bloque reveal-scroll">
                <div class="beneficio-contenido">
                    <div class="beneficio-col-texto">
                        <h3>Alta Resistencia</h3>
                        <p>Fabricadas con materiales de máxima durabilidad que soportan el uso constante sin deformarse ni romperse.</p>
                    </div>
                    <div class="beneficio-col-imagen">
                        <img src="Imagenes/fruteria.png" alt="Alta Resistencia" class="foto-destacada">
                    </div>
                </div>
            </article>

            <!-- Bloque 2: 100% Personalizables (Invertido) -->
            <article class="beneficio-bloque beneficio-invertido reveal-scroll">
                <div class="beneficio-contenido">
                    <div class="beneficio-col-imagen">
                        <img src="Imagenes/TR-01.png" alt="100% Personalizables" class="foto-destacada">
                    </div>
                    <div class="beneficio-col-texto">
                        <h3>100% Personalizables</h3>
                        <p>Imprimimos tu logotipo con colores nítidos e impactantes que garantizan la visibilidad de tu marca.</p>
                    </div>
                </div>
            </article>

            <!-- Bloque 3: Tamaño Ideal -->
            <article class="beneficio-bloque reveal-scroll">
                <div class="beneficio-contenido">
                    <div class="beneficio-col-texto">
                        <h3>Tamaño Ideal</h3>
                        <p>Diseños versátiles adaptados perfectamente para abarrotes, panaderías, boutique y comercios en general.</p>
                    </div>
                    <div class="beneficio-col-imagen">
                        <img src="Imagenes/publicidadabarrotes.png" alt="Tamaño Ideal" class="foto-destacada">
                    </div>
                </div>
            </article>

            <!-- Bloque 4: Reutilizables y Ecológicas (Invertido) -->
            <article class="beneficio-bloque beneficio-invertido reveal-scroll">
                <div class="beneficio-contenido">
                    <div class="beneficio-col-imagen">
                        <img src="Imagenes/pastel.png" alt="Reutilizables y Ecológicas" class="foto-destacada">
                    </div>
                    <div class="beneficio-col-texto">
                        <h3>Reutilizables y Ecológicas</h3>
                        <p>Opciones sostenibles que tus clientes usarán una y otra vez, multiplicando la exposición de tu negocio.</p>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- OPINIONES -->
    <section class="opiniones animate__animated animate__slideInUp reveal-scroll">
        <h2>Lo que opinan nuestros clientes</h2>

        <div class="carrusel" aria-roledescription="carrusel" aria-label="Opiniones de clientes">
            <button class="carrusel-btn prev" aria-label="Opinión anterior">&#8249;</button>

            <div class="carrusel-viewport">
                <div class="carrusel-track">

                    <article class="opinion-card">
                        <span class="comilla" aria-hidden="true">“</span>
                        <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="comentario">Excelente atención y la calidad del estampado superó mis expectativas. Mis clientes adoran las bolsas.</p>
                        <div class="persona">
                            <span class="avatar" aria-hidden="true">JC</span>
                            <p class="autor">Juan Carlos</p>
                        </div>
                    </article>

                    <article class="opinion-card">
                        <span class="comilla" aria-hidden="true">“</span>
                        <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="comentario">Material super resistente y el proceso de pedido fue rapidísimo. Sin duda volveré a comprar.</p>
                        <div class="persona">
                            <span class="avatar" aria-hidden="true">EF</span>
                            <p class="autor">Enrique Fuentes</p>
                        </div>
                    </article>

                    <article class="opinion-card">
                        <span class="comilla" aria-hidden="true">“</span>
                        <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="comentario">La impresión de mi logo quedó impecable y aguantan bastante peso. Muy recomendados.</p>
                        <div class="persona">
                            <span class="avatar" aria-hidden="true">AH</span>
                            <p class="autor">Amanda Hernández</p>
                        </div>
                    </article>

                    <article class="opinion-card">
                        <span class="comilla" aria-hidden="true">“</span>
                        <div class="estrellas" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="comentario">Excelente relación calidad-precio. Un aliado fundamental para darle presentación a mi negocio.</p>
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
    <section class="cta-final reveal-scroll">
        <h2>¿Listo para llevar tu marca al siguiente nivel?</h2>
        <p>Atención personalizada y cotizaciones hechas a la medida de tu negocio sin ningún compromiso.</p>
        <a class="btn-primario"
           href="https://wa.me/5616867086?text=Hola%2C%20quiero%20cotizar%20mis%20bolsas"
           target="_blank" rel="noopener">Solicitar Cotización por WhatsApp</a>
    </section>

  </main>

  <footer>
    <div class="contacto-wrap reveal-scroll">
      <div class="contacto-imagen">
          <img src="Imagenes/SN1.png" alt="Econobolsa roja">
      </div>

      <div class="contactanos animate__animated animate__slideInUp">
          <h2>¡Contáctanos!</h2>
          <p>Cotizamos tus pedidos en minutos</p>
          <div class="contacto-links">
              <a href="tel:5516867086" class="contacto-item">
                  <img src="Iconos/llamada-telefonica.svg" alt="Teléfono"> 55 1686 7086
              </a>
              <a href="https://wa.me/5616867086" class="contacto-item whatsapp">
                  <img src="Iconos/whatsapp.svg" alt="WhatsApp"> 56 1686 7086
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
      <img src="Iconos/whatsapp.svg" alt="WhatsApp Chat">
  </a>
  <a href="#" class="flotante-subir" aria-label="Volver arriba"></a>

<script src="Animaciones.js/animacion.js?v=3"></script>

<!-- Script para la animación automática del nuevo carrusel -->
<script>
let indexSlide = 0;
const slidesBanner = document.querySelectorAll('.banner-slide');
const dotsBanner = document.querySelectorAll('.banner-dots .dot');

function mostrarSlideBanner(n) {
  slidesBanner.forEach((slide) => slide.classList.remove('active'));
  dotsBanner.forEach((dot) => dot.classList.remove('active'));
  
  indexSlide = (n + slidesBanner.length) % slidesBanner.length;
  slidesBanner[indexSlide].classList.add('active');
  dotsBanner[indexSlide].classList.add('active');
}

function cambiarSlideBanner(n) {
  mostrarSlideBanner(n);
}

// Cambio automático cada 5 segundos
setInterval(() => {
  mostrarSlideBanner(indexSlide + 1);
}, 5000);
</script>

</body>
</html>