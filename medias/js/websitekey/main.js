document.addEventListener('DOMContentLoaded', function() {
    // Effet de parallaxe au défilement
    let parallaxElements = document.querySelectorAll('.parallax-effect');
    
    window.addEventListener('scroll', function() {
        requestAnimationFrame(function() {
            let scrolled = window.pageYOffset;
            parallaxElements.forEach(element => {
                let speed = element.dataset.speed || 0.2;
                let offset = -(scrolled * speed);
                element.style.setProperty('--parallax-offset', `${offset}px`);
            });
        });
    });

    // Animation progressive des éléments
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-on-load').forEach(element => {
        observer.observe(element);
    });

    // Animation du texte
    const animateText = (element) => {
        const text = element.textContent;
        element.textContent = '';
        
        for (let i = 0; i < text.length; i++) {
            const span = document.createElement('span');
            span.textContent = text[i];
            span.style.opacity = '0';
            span.style.animation = `fadeIn 0.5s ease forwards ${i * 0.03}s`;
            element.appendChild(span);
        }
    };

    document.querySelectorAll('.animate-text').forEach(animateText);
});

window.addEventListener('load', function() {
    document.body.classList.add('page-loaded');
});
