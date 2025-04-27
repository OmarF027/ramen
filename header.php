<header>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo3.jpg" alt="Logo" style="height: 50px;">
        </a>
    </div>

    <!-- NAVBAR DESKTOP -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menù</a></li>
            <li><a href="ordina.php">Ordina</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </nav>

    <!-- TOGGLE MOBILE -->
    <div class="toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <!-- MENU MOBILE -->
    <nav class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menù</a></li>
            <li><a href="ordina.php">Ordina</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </nav>
</header>

<script>
// SCRIPT MINIMALE E GARANTITO
document.querySelector('.toggle').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.navigation').classList.toggle('active');
});
</script>
