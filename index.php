<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>GOL D. RAMEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">

</head>

<body>

<?php include 'header.php'; ?>

<section class="hero">
    <video src="video/ramen.mp4" muted loop autoplay playsinline></video>
    <div class="hero-content">
        <div class="content-wrapper">
            <h1 class="animate-fade-up">GOL D. RAMEN:<br>Più che un piatto, un’esperienza</h1>
            <a href="menu.php" class="btn animate-fade-up delay-1">Esplora la nostra tradizione</a>
        </div>
    </div>
</section>

<section class="sezione">
    <h2 style="color:#BB0620">Il ramen di cui avevi bisogno</h2>
    <div class="grid">
        <div class="item">
            <a href="img/chef.jpg" target="_blank">
                <img src="img/chef.jpg" alt="Preparazione del brodo tonkotsu nella cucina a vista">
            </a>
            <h3>Cucina a vista</h3>
            <p>Guarda i nostri chef preparare il brodo tonkotsu in pentoloni aperti, seguendo l'antica tradizione di cottura lenta che richiede oltre 18 ore di lavorazione.</p>
        </div>
        
        <div class="item">
            <a href="img/impasto.jpg" target="_blank">
                <img src="img/impasto.jpg" alt="Lavorazione manuale dei noodles freschi">
            </a>
            <h3>Impasto fatto a mano</h3>
            <p>Ogni mattina prepariamo la pasta per i noodles con farina di grano tenero e acqua alcalina, seguendo il metodo tradizionale del "kneading and stretching".</p>
        </div>
        
        <div class="item">
            <a href="img/kitchen.jpg" target="_blank">
                <img src="img/kitchen.jpg" alt="Composizione finale della ciotola di ramen">
            </a>
            <h3>Ricetta originale</h3>
            <p>La nostra miscela segreta di shoyu (salsa di soia) e dashi, arricchita con katsuobushi e kombu, crea un umami unico tramandato da 3 generazioni.</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>


