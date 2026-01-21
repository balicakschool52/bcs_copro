document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector("[data-lecturer-track]");
    if (!track) return;

    const cards = Array.from(track.querySelectorAll("[data-lecturer-card]"));
    const dots = Array.from(document.querySelectorAll("[data-lecturer-dot]"));
    let activeIndex = 0;
    let autoTimer;

    const setActiveDot = (index) => {
        dots.forEach((dot, i) => {
            dot.classList.toggle("bg-[#E3B04B]", i === index);
            dot.classList.toggle("bg-white/20", i !== index);
        });
    };

    const slideTo = (index) => {
        if (!cards.length) return;
        const gap = 24; // matches gap-6
        const amount = cards[0].clientWidth + gap;
        activeIndex = Math.min(Math.max(index, 0), dots.length - 1);
        track.style.transform = `translateX(-${activeIndex * amount}px)`;
        setActiveDot(activeIndex);
    };

    const restartAutoSlide = () => {
        if (autoTimer) window.clearInterval(autoTimer);
        autoTimer = window.setInterval(() => {
            const next = (activeIndex + 1) % cards.length;
            slideTo(next);
        }, 5000);
    };

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            slideTo(index);
            restartAutoSlide();
        });
    });

    window.addEventListener("resize", () => {
        // Recalculate on resize to keep alignment
        slideTo(activeIndex);
    });

    slideTo(0);
    restartAutoSlide();
});
