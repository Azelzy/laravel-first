document.addEventListener('DOMContentLoaded', () => {
    // Fade in elements on page load
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(element => {
        element.style.opacity = '1';
    });

    // Animate info blocks on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('appear');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.info-block').forEach(block => {
        observer.observe(block);
    });

    // Random glitch effect on headings
    const glitchTexts = document.querySelectorAll('.glitch-text');
    glitchTexts.forEach(text => {
        setInterval(() => {
            if (Math.random() > 0.99) {
                text.style.transform = `translate(${Math.random() * 2 - 1}px, ${Math.random() * 2 - 1}px)`;
                setTimeout(() => {
                    text.style.transform = 'translate(0, 0)';
                }, 100);
            }
        }, 100);
    });
});
