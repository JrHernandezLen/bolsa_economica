document.addEventListener("DOMContentLoaded", function () {
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
});