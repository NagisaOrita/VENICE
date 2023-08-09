document.addEventListener("DOMContentLoaded", function () {
    const isMobile = window.innerWidth <= 768;
    const rootMarginValue = isMobile ? "50%" : "0px";

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: rootMarginValue });

    const targets = document.querySelectorAll(".slidein-animate");
    targets.forEach((target) => {
        observer.observe(target);
    });
});
