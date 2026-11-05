<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Econobolsa - econobolsa</title>
    <link rel="stylesheet" href="index.css?v=1.9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="Productos.css?v=1.6">
    <link rel="stylesheet" href="Ecobolsa.css?=1.9">

<header>
    <div class="barra-arriba">
        <p>¡Las bolsas más llamativas / Resistentes / Prácticas!</p>
    </div>

    <nav>
        <a href="index.php" class="logo">
            <img src="Imagenes/Logo_bolsae.png" alt="logo bolsa economica">
        </a>

        <div class="menu-barra-centro dropdown">
            <button class="btn-nav btn-dropdown" type="button"
                    aria-expanded="false" aria-haspopup="true" aria-controls="menu-categorias">
                Ver Productos <span class="flecha" aria-hidden="true">▾</span>
            </button>
            <ul class="dropdown-menu" id="menu-categorias">
                <li><a href="econobolsa.php">Econobolsa</a></li>
                <li><a href="#">Bolsa Ecológica</a></li>
                <li><a href="#">Tipo Sobre</a></li>
                <li><a href="#">Bolsa con Asa</a></li>
                <li><a href="#">Bolsa con Diseño</a></li>
                <li><a href="#">Bolsa Laminada</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="eco">

    <!-- Migas de pan -->
    <nav class="migas" aria-label="Ruta de navegación">
        <a href="index.php">Inicio</a>
        <span aria-hidden="true">›</span>
        <a href="index.php#productos">Productos</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Econobolsa</span>
    </nav>

    <!-- Producto principal -->
    <section class="eco-producto">

        <div class="eco-galeria animate__animated animate__fadeIn">
            <div class="eco-imagen-principal">
                <img id="eco-principal" src="Imagenes/SN1.png" alt="Econobolsa">
            </div>
            
            <div class = "eco-vista" role = "group" aria-label = "Tipo vista">
                 <button type="button" class="vista-btn activa" data-vista="lisa">Lisa</button>
                 <button type="button" class="vista-btn" data-vista="personalizada">Personalizada</button>
            </div>

            <div class="eco-miniaturas">
                <button type="button" class="miniatura activa" data-src="Imagenes/SN1.png" aria-label="Ver foto 1">
                    <img src="Imagenes/SN1.png" alt="">
                </button>
                <button type="button" class="miniatura" data-src="Imagenes/SN3.png" aria-label="Ver foto 2">
                    <img src="Imagenes/SN3.png" alt="">
                </button>
                <button type="button" class="miniatura" data-src="Imagenes/SN4.png" aria-label="Ver foto 3">
                    <img src="Imagenes/SN4.png" alt="">
                </button>
                <button type="button" class= "miniatura" data-src="Imagenes/BPE-02.png" aria-label=" Ver Foto 4">
                    <img src="Imagenes/BPE-02.png" alt="">
            </button>
            </div>
        </div>

        <div class="eco-info animate__animated animate__fadeInRight">
            <span class="eco-etiqueta">Más vendida</span>
            <h1>Econobolsa</h1>
            <p class="eco-descripcion">
                La Econobolsa resalta por ser útil y práctica. Tiene el tamaño perfecto
                para llevar tus productos y promocionar tu marca a lo grande.
            </p>

            <ul class="eco-ficha">
                <li><span>Medidas</span><strong>30 x 40 x 10 cm</strong></li>
                <li><span>Material</span><strong>Non woven</strong></li>
                <li><span>Asas</span><strong>Reforzadas</strong></li>
                <li><span>Impresión</span><strong>Personalizable</strong></li>
            </ul>

            <div class="eco-colores">
                <p>Colores disponibles</p>
                <div class="eco-muestras">
                    <span class="muestra" style="background:#e53935" title="Rojo"></span>
                    <span class="muestra" style="background:#1e88e5" title="Azul"></span>
                    <span class="muestra" style="background:#4caf50" title="Verde"></span>
                    <span class="muestra" style="background:#333333" title="Negro"></span>
                </div>
            </div>

            <div class="eco-acciones">
                <a class="btn-primario"
                   href="https://wa.me/525616867086?text=Hola%2C%20quiero%20cotizar%20la%20Econobolsa"
                   target="_blank" rel="noopener">
        
                     <img src="Iconos/whatsapp.svg" alt="">
                </a>
                <a class="eco-secundario" href="tel:5516867086"> Llamar
                    <img src="Iconos/llamada-telefonica.svg" alt="">
                </a>
                
            </div>
        </div>
    </section>

    <section class="eco-ventajas reveal">
        <h2 reveal>¿Por qué elegir la Econobolsa?</h2>
        <div class="ventajas-grid reveal">
            <article class="ventaja ">
                <span class="ventaja-icono">
                <img src="Iconos/puno-de-mano.svg" alt="">
                </span>
                <h3>Resistente</h3>
                <p>Soporta el uso diario sin romperse.</p>
            </article>
            <article class="ventaja reveal">
                <span class="ventaja-icono">
                    <img src="Iconos/personalizar-editar.svg" alt="">
                </span>
                <h3>Personalizable</h3>
                <p>Imprimimos tu logo y los colores de tu marca.</p>
            </article>
            <article class="ventaja reveal">
                <span class="ventaja-icono">
                    <img src="Iconos/bolsa-de-la-compra.svg" alt="">
                </span>
                <h3>Tamaño ideal</h3>
                <p>Perfecta para abarrotes, panaderías y tiendas.</p>
            </article>
            <article class="ventaja reveal">
                <span class="ventaja-icono">
                    <img src="Iconos/reciclar.svg" alt="">
                </span>
                <h3>Reutilizable</h3>
                <p>Tus clientes la usan una y otra vez.</p>
            </article>
        </div>
    </section>

    <!-- Llamado final -->
    <section class="eco-cta reveal">
        <h2 reveal>¿Listo para promocionar tu marca?</h2>
        <p reveal>Cotizamos tu pedido sin compromiso.</p>
        <a class="btn-primario"
           href="https://wa.me/525616867086?text=Hola%2C%20quiero%20cotizar%20la%20Econobolsa"
           target="_blank" rel="noopener">Pedir cotización
        </a>
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
                <a href="https://wa.me/525616867086" class="contacto-item whatsapp">
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

<a href="#" class="flotante-subir" aria-label="Volver arriba"></a>

<script src="Animaciones.js/animacion.js?v=6"></script>
</body>
</html>