<header style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: #fff;">
    <div class="logo">
        <a href="index.php">
            <img src="img/logo3.jpg" alt="Logo" style="height: 60px;">
        </a>
    </div>

    <!-- NAVBAR DESKTOP -->
    <nav class="navbar" style="display: flex; gap: 20px; background: #fff; color: #333;">
        <ul style="display: flex; list-style: none; gap: 20px;">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="menu.php" class="nav-link">Menù</a></li>
            <li><a href="ordina.php" class="nav-link">Ordina</a></li>
            <li><a href="contatti.php" class="nav-link">Contatti</a></li>
        </ul>
    </nav>

    <!-- TOGGLE MOBILE -->
    <div class="toggle" onclick="toggleMenu()" style="display: none; flex-direction: column; cursor: pointer; gap: 5px; position: fixed; top: 25px; right: 20px; z-index: 1001; padding: 12px; background: rgba(255,255,255,0.98); border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); transition: all 0.3s;">
        <span style="display: block; width: 25px; height: 3px; background: #333; transition: inherit;"></span>
        <span style="display: block; width: 25px; height: 3px; background: #333; transition: inherit;"></span>
        <span style="display: block; width: 25px; height: 3px; background: #333; transition: inherit;"></span>
    </div>

    <!-- MENU MOBILE -->
    <nav class="navigation" style="display: none; position: fixed; top: 0; right: -100%; width: 100%; height: 100%; background: #fff; padding: 80px 20px 20px; transition: right 0.3s; z-index: 999;">
        <div class="close-btn" onclick="toggleMenu()" style="position: absolute; top: 25px; right: 25px; font-size: 32px; cursor: pointer; color: #333;">&times;</div>
        <ul style="display: flex; flex-direction: column; gap: 10px; list-style: none;">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="menu.php" class="nav-link">Menù</a></li>
            <li><a href="ordina.php" class="nav-link">Ordina</a></li>
            <li><a href="contatti.php" class="nav-link">Contatti</a></li>
        </ul>
    </nav>
</header>

<script>
function toggleMenu() {
    const nav = document.querySelector('.navigation');
    const toggle = document.querySelector('.toggle');
    
    // Toggle menu scorrevole
    if(nav.style.right === "0px") {
        nav.style.right = "-100%";
        nav.style.display = "none";
    } else {
        nav.style.display = "flex";
        setTimeout(() => nav.style.right = "0px", 10);
    }

    // Animazione hamburger -> X
    toggle.style.transform = toggle.style.transform === 'rotate(180deg)' ? '' : 'rotate(180deg)';
    toggle.querySelectorAll('span').forEach((span, index) => {
        if(index === 0) span.style.transform = span.style.transform ? '' : 'rotate(45deg) translate(6px, 6px)';
        if(index === 1) span.style.opacity = span.style.opacity === '0' ? '1' : '0';
        if(index === 2) span.style.transform = span.style.transform ? '' : 'rotate(-45deg) translate(6px, -6px)';
    });
}

// Chiudi menu cliccando fuori
document.addEventListener('click', (e) => {
    const nav = document.querySelector('.navigation');
    if(nav.style.right === "0px" && !e.target.closest('.navigation') && !e.target.closest('.toggle')) {
        toggleMenu();
    }
});
</script>

<style>
/* Mantengo tutto il CSS originale */
@media (max-width: 768px) {
    .navbar {
        display: none !important;
    }
    .toggle {
        display: flex !important;
    }
}

@media (min-width: 769px) {
    .navigation {
        display: none !important;
    }
}

.nav-link:hover {
    color: #BB0620 !important;
}
</style>