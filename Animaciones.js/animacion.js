document.addEventListener("DOMContentLoaded", function () {

    /* ==========================================
       1. Carrusel de fondo (el que ya tenías)
       ========================================== */
    const slides = document.querySelectorAll(".carrusel-fondo .slide-fondo");
    let currentIndex = 0;

    if (slides.length > 0) {
        setInterval(() => {
            let prevIndex = currentIndex;
            currentIndex = (currentIndex + 1) % slides.length;

            slides[prevIndex].classList.remove("active");
            slides[prevIndex].classList.add("salida");

            slides[currentIndex].classList.remove("salida");
            slides[currentIndex].classList.add("active");

            setTimeout(() => {
                slides[prevIndex].classList.remove("salida");
            }, 1000);

        }, 3000);
    }


        /* ==========================================
       1.5 Menú desplegable de categorías
       ========================================== */
    const dropdown = document.querySelector(".dropdown");
    if (dropdown) {
        const btnDrop = dropdown.querySelector(".btn-dropdown");
        const menu    = dropdown.querySelector(".dropdown-menu");

        const cerrar = () => {
            menu.classList.remove("abierto");
            btnDrop.setAttribute("aria-expanded", "false");
        };

        btnDrop.addEventListener("click", (e) => {
            e.stopPropagation();
            const abierto = menu.classList.toggle("abierto");
            btnDrop.setAttribute("aria-expanded", abierto);
        });

        // Cerrar al hacer clic fuera, con Escape o al elegir una opción
        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) cerrar();
        });
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") { cerrar(); btnDrop.focus(); }
        });
        menu.addEventListener("click", cerrar);
    }

    /* ==========================================
       2. Carrusel de opiniones
       ========================================== */
    const track    = document.querySelector(".carrusel-track");
    const carrusel = document.querySelector(".carrusel");

    // Si la página no tiene el carrusel de opiniones, no hace nada
    if (!track || !carrusel) return;

    const opSlides = [...track.children];
    const dotsBox  = document.querySelector(".carrusel-dots");
    const btnPrev  = document.querySelector(".carrusel-btn.prev");
    const btnNext  = document.querySelector(".carrusel-btn.next");

    const INTERVALO = 4500; // ms entre cambios
    let indice = 0;
    let timer;

    const porVista  = () => (window.innerWidth >= 768 ? 2 : 1);
    const maxIndice = () => Math.max(0, opSlides.length - porVista());

    function crearDots() {
        dotsBox.innerHTML = "";
        for (let i = 0; i <= maxIndice(); i++) {
            const dot = document.createElement("button");
            dot.setAttribute("aria-label", `Ir a la opinión ${i + 1}`);
            dot.addEventListener("click", () => { ir(i); reiniciar(); });
            dotsBox.appendChild(dot);
        }
    }

    function ir(i) {
        const max = maxIndice();
        indice = i > max ? 0 : i < 0 ? max : i;
        track.style.transform = `translateX(-${(indice * 100) / porVista()}%)`;
        [...dotsBox.children].forEach((d, n) =>
            d.classList.toggle("activo", n === indice)
        );
    }

    function iniciar()   { detener(); timer = setInterval(() => ir(indice + 1), INTERVALO); }
    function detener()   { clearInterval(timer); }
    function reiniciar() { iniciar(); }

    btnPrev.addEventListener("click", () => { ir(indice - 1); reiniciar(); });
    btnNext.addEventListener("click", () => { ir(indice + 1); reiniciar(); });

    // Pausa al pasar el mouse o al enfocar
    carrusel.addEventListener("mouseenter", detener);
    carrusel.addEventListener("mouseleave", iniciar);
    carrusel.addEventListener("focusin", detener);
    carrusel.addEventListener("focusout", iniciar);

    // Swipe táctil
    let inicioX = 0;
    track.addEventListener("touchstart", e => {
        inicioX = e.touches[0].clientX;
        detener();
    }, { passive: true });

    track.addEventListener("touchend", e => {
        const dif = e.changedTouches[0].clientX - inicioX;
        if (Math.abs(dif) > 50) ir(indice + (dif < 0 ? 1 : -1));
        iniciar();
    });

    // Recalcular al cambiar el tamaño de la ventana
    let anterior = porVista();
    window.addEventListener("resize", () => {
        if (porVista() !== anterior) {
            anterior = porVista();
            crearDots();
        }
        ir(Math.min(indice, maxIndice()));
    });

    // Pausa si la pestaña no está visible
    document.addEventListener("visibilitychange", () =>
        document.hidden ? detener() : iniciar()
    );

    crearDots();
    ir(0);
    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) iniciar();
});

/* ==========================================
       3. ANIMCACIONES DE ECONOBOLSA
  ========================================== */

    const ecoPrincipal = document.getElementById("eco-principal");
    if (ecoPrincipal) {
        document.querySelectorAll(".eco-miniaturas .miniatura").forEach(btn => {
            btn.addEventListener("click", () => {
                ecoPrincipal.src = btn.dataset.src;
                document.querySelectorAll(".eco-miniaturas .miniatura")
                    .forEach(b => b.classList.remove("activa"));
                btn.classList.add("activa");
            });
        });
    }

    /* ==========================================
       4. ANIMACION AL BAJAR PAGINA
  ========================================== */

    const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.15 });

document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));


  /* ==========================================
       5. CAMBIAR MODELOS DE FOTOS DE LISA A PERSONALIZADA 
  ========================================== */
const vistas = {
    lisa: [
        'Imagenes/SN1.png',
        'Imagenes/SN3.png',
        'Imagenes/SN4.png',
        'Imagenes/BPE-02.png'
    ],
    personalizada: [
        'Imagenes/publicidad1.png',
        'Imagenes/publicidad2.png',
        'Imagenes/publicidad3.png',
        'Imagenes/publicidad4.png'
    ]
};

const principal = document.getElementById('eco-principal');
const miniaturas = document.querySelectorAll('.miniatura');

document.querySelectorAll('.vista-btn').forEach((btn) => {
    btn.addEventListener('click', () => {
        const fotos = vistas[btn.dataset.vista];

        // Botón activo
        document.querySelectorAll('.vista-btn').forEach((b) => b.classList.remove('activa'));
        btn.classList.add('activa');

        // Actualiza miniaturas
        miniaturas.forEach((mini, i) => {
            mini.dataset.src = fotos[i];
            mini.querySelector('img').src = fotos[i];
            mini.classList.toggle('activa', i === 0);
        });

        // Actualiza la imagen principal
        principal.src = fotos[0];
    });
});


const tabLogin = document.getElementById('tabLogin');
const tabRegistro = document.getElementById('tabRegistro');
const formLogin = document.getElementById('formLogin');
const formRegistro = document.getElementById('formRegistro');

tabLogin.addEventListener('click', () => {
    tabLogin.classList.add('active');
    tabRegistro.classList.remove('active');

    formLogin.classList.add('active');
    formRegistro.classList.remove('active');
});

tabRegistro.addEventListener('click', () => {
    tabRegistro.classList.add('active');
    tabLogin.classList.remove('active');

    formRegistro.classList.add('active');
    formLogin.classList.remove('active');
});