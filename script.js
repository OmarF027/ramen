function toggleMenu() {
    const nav = document.querySelector('.navigation');
    const toggle = document.querySelector('.toggle');
    const body = document.body;
    
    // Animazione menu scorrevole
    if(nav.style.right === "0px") {
        nav.style.right = "-100%";
        body.style.overflow = 'auto';
        // Reset animazione hamburger
        toggle.querySelectorAll('span').forEach((span, index) => {
            span.style.transform = '';
            span.style.opacity = '';
        });
    } else {
        nav.style.display = "flex";
        setTimeout(() => nav.style.right = "0px", 10);
        body.style.overflow = 'hidden';
        // Animazione X
        toggle.querySelectorAll('span').forEach((span, index) => {
            if(index === 0) span.style.transform = 'rotate(45deg) translate(6px, 6px)';
            if(index === 1) span.style.opacity = '0';
            if(index === 2) span.style.transform = 'rotate(-45deg) translate(6px, -6px)';
        });
    }
}

// Chiudi menu cliccando fuori
document.addEventListener('click', (e) => {
    const nav = document.querySelector('.navigation');
    if(nav.style.right === "0px" && 
       !e.target.closest('.navigation') && 
       !e.target.closest('.toggle')) {
        toggleMenu();
    }
});

// Chiudi menu al resize
window.addEventListener('resize', () => {
    const nav = document.querySelector('.navigation');
    if(window.innerWidth > 768 && nav.style.right === "0px") {
        nav.style.right = "-100%";
        nav.style.display = "none";
        document.body.style.overflow = 'auto';
        document.querySelectorAll('.toggle span').forEach(span => {
            span.style.transform = '';
            span.style.opacity = '';
        });
    }
});