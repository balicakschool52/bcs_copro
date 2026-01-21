document.addEventListener("DOMContentLoaded", () => {
    const slider = document.getElementById("hero-slider");
    if (!slider) return;

    const slides = Array.from(slider.querySelectorAll("[data-slide]"));
    const dots = Array.from(slider.querySelectorAll("[data-dot]"));
    const prevBtn = slider.querySelector("[data-prev]");
    const nextBtn = slider.querySelector("[data-next]");

    let index = 0;
    let timer;

    const setActive = (target) => {
        slides.forEach((slide, idx) => {
            const isActive = idx === target;
            slide.classList.toggle("opacity-100", isActive);
            slide.classList.toggle("translate-x-0", isActive);
            slide.classList.toggle("opacity-0", !isActive);
            slide.classList.toggle("translate-x-6", !isActive);
            slide.classList.toggle("z-20", isActive);
            slide.classList.toggle("z-10", !isActive);
        });

        dots.forEach((dot, idx) => {
            const isActive = idx === target;
            dot.classList.toggle("bg-[#E3B04B]", isActive);
            dot.classList.toggle("bg-white/30", !isActive);
            dot.classList.toggle("w-10", isActive);
            dot.classList.toggle("w-8", !isActive);
        });

        index = target;
    };

    const next = () => setActive((index + 1) % slides.length);
    const prev = () => setActive((index - 1 + slides.length) % slides.length);

    const start = () => (timer = setInterval(next, 5200));
    const stop = () => clearInterval(timer);

    nextBtn?.addEventListener("click", () => {
        stop();
        next();
        start();
    });

    prevBtn?.addEventListener("click", () => {
        stop();
        prev();
        start();
    });

    dots.forEach((dot, dotIndex) =>
        dot.addEventListener("click", () => {
            stop();
            setActive(dotIndex);
            start();
        }),
    );

    slider.addEventListener("mouseenter", stop);
    slider.addEventListener("mouseleave", start);

    start();
});
